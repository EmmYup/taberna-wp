<?php
include(TEMPLATEPATH . '/includes/scripts.php');
include(TEMPLATEPATH . '/includes/widgets.php');

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1200, 510);
add_image_size( 'single-post-thumbnail', 1200, 510 );


function fb_opengraph() {
    global $post;
 
    if(is_single()) {
        if(has_post_thumbnail($post->ID)) {
            $img_src = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ),"medium_large");
        } else {
            $img_src = get_stylesheet_directory_uri() . '/img/opengraph_image.jpg';
        }
        if($excerpt = $post->post_excerpt) {
            $excerpt = strip_tags($post->post_excerpt);
            $excerpt = str_replace("", "'", $excerpt);
        } else {
            $excerpt = get_bloginfo('description');
        }
        ?>

    <!-- Twitter -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@LaTaberna_Cun">
	<meta name="twitter:title" content="La Taberna de los Amigos">
	<meta name="twitter:creator" content="@renovatiomex">
	<meta name="twitter:image" content="http://www.lataberna.com.mx/social.png">
    <!-- Twitter -->

 	<!-- Open Graph -->
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="<?php echo the_permalink(); ?>"/>
    <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>"/>
    <meta property="og:image" content="<?php echo $img_src[0]; ?>"/>
    <meta property="fb:app_id" content="212660272472522" />
 	<!-- Open Graph -->

<?php
    } else {
        return;
    }
}
add_action('wp_head', 'fb_opengraph', 5);

                        //--------------- Login Screen Wallpaper ---------------//
function login_enqueue_scripts(){
    echo '
        <div class="background-cover"></div>
        <style type="text/css" media="screen">
            .background-cover{
                background:url('.get_bloginfo('template_directory').'/images/background.jpg) no-repeat center center fixed; 
                -webkit-background-size: cover; 
                -moz-background-size: cover; 
                -o-background-size: cover; 
                background-size: cover; 
                position:fixed; 
                top:0; 
                left:0; 
                z-index:10; 
                overflow: hidden; 
                width: 100%; 
                height:100%;
            } 
            #login{ z-index:9999; position:relative; }
            .login form { box-shadow: 0px 0px 0px 0px !important; }
            .login h1 a { background:url('.get_bloginfo('template_directory').'/images/logo.png) no-repeat center top !important; background-size: cover !important;} 
            input.button-primary, button.button-primary, a.button-primary{ 
                border-radius: 3px !important;                      background:url('.get_bloginfo('template_directory').'/images/button.jpg); 
                    border:none !important;
                    font-weight:normal !important;
                    text-shadow:none !important;
                }
                .button:active, .submit input:active, .button-secondary:active {
                    background:#96C800 !important; 
                    text-shadow: none !important;
                }
                .login #nav a, .login #backtoblog a {
                    color:#fff !important;
                    text-shadow: none !important;
                }
                .login #nav a:hover, .login #backtoblog a:hover{
                    color:#96C800 !important;
                    text-shadow: none !important;
                }
                .login #nav, .login #backtoblog{
                    text-shadow: none !important;
                }
            </style>
        ';
    }
add_action( 'login_enqueue_scripts', 'login_enqueue_scripts' );
?>

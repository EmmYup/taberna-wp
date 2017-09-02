<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>

            <div class="post-single">
                <div class="header-post">
                    <?php the_post_thumbnail( 'single-post-thumbnail' ); ?>

                    <div class="col-md-10 col-md-offset-1">
                        <div class="contenido-post">            
                            <p class="categoria  hidden-sm hidden-xs"><a href="<?php echo esc_url( home_url( '/' ) ); ?>noticias">Noticias</a> / <?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'mytheme' ) );?></p>
                            <h1><?php echo the_title(); ?></h1>
                            <p class="fecha"><?php the_time( get_option( 'date_format' ) );?></p>
                           <?php $rating = gdrts_posts_render_rating(); ?>
                           <?php echo $rating ?>

                        </div>
                        <div class="social-links-posts">
                            
                                        
                        <a href="javascript:void(0)" onclick="window.open ('https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>&t=<?php echo the_title(); ?>', 'Facebook', 'toolbar=0, status=0, width=550, height=350');"><img src="<?php echo get_template_directory_uri(); ?>/images/src/facebook.png" alt="@Lataberna Facebook"></a> <!-- Facebook -->
                                        
                        <a href="javascript:void(0)" onclick="window.open ('https://twitter.com/home?status=%23VamosAlaTaberna%20<?php echo the_permalink(); ?>', 'Twitter', 'toolbar=0, status=0, width=550, height=350');" ><img src="<?php echo get_template_directory_uri(); ?>/images/src/twitter.png" alt="@lataberna twitter"></a> <!-- Twiter -->              
                        </div>
                    </div>
                </div>
              </div>
          </div>
      </div>


       <div class="container">
         <div class="contenido-post-single">
           <div class="row">
             <div class="col-md-8">
                 <div class="post-single">
                      <div class="body-text">
                        <?php the_content(); ?>
                      </div>
                 </div>

                 <div class="comentarios-facebook">
                   <div style="width: 100%; display: block !important;" class="fb-comments" data-href="<?php echo the_permalink(); ?>" data-numposts="5">
        
                   </div>
                  <div id="fb-root"></div>
                  <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=212660272472522";
                    fjs.parentNode.insertBefore(js, fjs);
                  }(document, 'script', 'facebook-jssdk'));</script>
                 </div>

             </div>
             
             <div class="col-md-4 hidden-sm hidden-xs">
                  <div class="clear-30"></div>
                  
                  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Right') ) : endif; ?>
        
                   <div style="padding-right:10px">
                    

                   </div>

             </div>
           </div>
         </div>
       </div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>



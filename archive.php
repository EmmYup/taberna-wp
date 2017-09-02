<?php get_header(); ?>
<div class="header-archive">
    <img src="<?php echo get_template_directory_uri(); ?>/images/src/header-blog.png" alt="header-blog" class="fondo-imagen">
    <div class="texto-header">NUESTRO <strong>BLOG</strong></div>
    <img src="<?php echo get_template_directory_uri(); ?>/images/src/copa.png" alt="Copa" class="header-decoration copa">
    <img src="<?php echo get_template_directory_uri(); ?>/images/src/vaso.png" alt="vaso" class="header-decoration vaso">
</div>
<?php $categorias = get_categories();?>
<?php $category_active = get_query_var('cat');?>
<?php $tag_active = get_query_var('tag');?>

<div class="menu-archive">
    <ul>
        <li class="<?php if ($tag_active == 'noticias'): ?>active<?php endif ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>noticias/">TODOS</a></li>
        <?php foreach ($categorias as $categoria): ?>
            
            <?php if (strtolower($categoria->name) != 'eventos' ): ?>
                <li class="<?php if($categoria->term_id == $category_active){ echo 'active';} ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>noticias/<?php echo $categoria->slug; ?> "><?php echo $categoria->name; ?></a></li>
            <?php endif ?>
        <?php endforeach ?>
    </ul>
</div>
<div class="body-archive">
    <div class="container">
        
            <?php
                $iteracion = 1;
                $longitud = 1; 
                if ( have_posts() ) : 
            ?>
                    <div class="clear-30"></div>
                        <?php while ( have_posts() ) : the_post(); ?>

                                <?php 
                                $categoria = get_the_category();

                                    /*
                                     beisbol
                                     box
                                     champions
                                     laliga
                                     ligamx
                                     nba
                                     nfl
                                     otros
                                     wwe
                                    */ 
                                $term_id = $categoria[0]->term_id;
                                if (function_exists('get_wp_term_image'))
                                {
                                    $meta_image = get_wp_term_image($term_id); 
                                    //It will give category/term image url 
                                }
                                
                               ?>
                                
                                <?php if($iteracion <= 2): ?>
                                    <?php if($iteracion == 1): ?>
                                        <div class="row dos-post">
                                            <div class="col-md-6">
                                                <a href="<?php echo get_permalink(); ?>">
                                                    
                                                    <?php the_post_thumbnail('', array('class' => 'img-responsive imagen')); ?>
                                                    <h5><?php the_title(); ?>
                                                        <?php $rating = gdrts_posts_render_rating(); ?>
                                                        <?php echo $rating ?>
                                                    </h5>
                                                    
                                                    <?php if($meta_image != null): ?>
                                                        <img class="categoria-imagen" src="<?php echo $meta_image; ?>" alt="categoria">
                                                    <?php endif; ?>
                                                </a>
                                            </div>
                                    <?php endif; ?>
                                    <?php if($iteracion == 2): ?>
                                            <div class="col-md-6">
                                                <a href="<?php echo get_permalink(); ?>">
                                                    <?php the_post_thumbnail('', array('class' => 'img-responsive imagen')); ?>
                                                    <h5><?php the_title(); ?>
                                                        <?php $rating = gdrts_posts_render_rating(); ?>
                                                        <?php echo $rating ?>
                                                    </h5>
                                                    
                                                        <img class="categoria-imagen" src="<?php echo $meta_image; ?>" alt="categoria">
                                                   
                                                    
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clear-20"></div>
                                    <?php endif; ?>
                                <?php endif; ?>

                                <?php if($iteracion >= 3): ?>
                                    <?php if($iteracion == 3): ?>
                                        
                                        <div class="row tres-post">
                                            <div class="col-md-4">
                                                <a href="<?php echo get_permalink(); ?>">
                                                    <?php the_post_thumbnail('', array('class' => 'img-responsive imagen')); ?>
                                                    <h5><?php the_title(); ?>
                                                        <?php $rating = gdrts_posts_render_rating(); ?>
                                                        <?php echo $rating ?>
                                                    </h5>
                                                    
                                                    <img class="categoria-imagen" src="<?php echo $meta_image; ?>" alt="categoria">
                                                </a>
                                            </div>
                                    <?php endif; ?>
                                    <?php if($iteracion == 4): ?>
                                            <div class="col-md-4">
                                                <a href="<?php echo get_permalink(); ?>">
                                                    <?php the_post_thumbnail('', array('class' => 'img-responsive imagen')); ?>
                                                    <h5><?php the_title(); ?>
                                                        <?php $rating = gdrts_posts_render_rating(); ?>
                                                        <?php echo $rating ?>
                                                    </h5>
                                                    
                                                    <img class="categoria-imagen" src="<?php echo $meta_image; ?>" alt="categoria">
                                                </a>
                                            </div>
                                    <?php endif; ?>
                                    <?php if($iteracion == 5): ?>
                                            <div class="col-md-4">
                                                <a href="<?php echo get_permalink(); ?>">
                                                    <?php the_post_thumbnail('', array('class' => 'img-responsive imagen')); ?>
                                                    <h5><?php the_title(); ?>
                                                        <?php $rating = gdrts_posts_render_rating(); ?>
                                                        <?php echo $rating ?>
                                                    </h5>
                                                    
                                                    <img class="categoria-imagen" src="<?php echo $meta_image; ?>" alt="categoria">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clear-20"></div>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <?php  ?>
                                <?php if($iteracion == 5){ $iteracion = 1; $longitud = 1;}else{$iteracion++; $longitud++;} ?>     
                        <?php endwhile; ?>
                        <?php if ($longitud == 2 or $longitud == 4 or $longitud == 5): ?>
                            
                            </div>
                            <div class="clear-20"></div>

                        <?php endif ?>
                <?php endif; ?>
        
    </div>
</div>
 

    

 

<?php get_footer(); ?>
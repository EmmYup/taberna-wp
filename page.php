<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="contenido-pagina">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
		        <h1 class="text-center title-page"><?php the_title(); ?></h1>
		        <?php the_content(); ?>
			    
			</div>
		</div>
	</div>
</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
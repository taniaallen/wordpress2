<?php while ( have_posts() ): ?>
	<?php the_post(); ?>
	?>
	<h1><?php the_title(); ?></h1>
	<small><?php the_author(); ?></small>
	<p><? the_content(); ?></p>

<?php endwhile; ?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

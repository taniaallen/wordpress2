<?php
/**
 * Template Name: Page with No Sidebar
 *
 * The template for displaying all pages with NO sidebar.
 * @package Alexis
 * @since 1.0
 */
get_header(); ?>
<div class="row" role="main">
	<div class="col-12">	
		<?php /* start loop */ ?>
		<?php while (have_posts()) : the_post(); ?>
			<article>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<hr />	
				<div class="entry-content">			
	  				<?php the_content(); ?>	
	  			</div>	
	  			<div class="pagelink"><?php wp_link_pages(); ?></div>  			
			</article>
		<?php endwhile; // end the loop ?>
		<?php if ( comments_open() || get_comments_number() ) {
			comments_template( '', true );
		} ?>
	</div>		
</div> <!-- row -->		
<?php get_footer(); ?>
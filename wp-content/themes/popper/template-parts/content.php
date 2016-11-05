<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package popper
 */

?>

<?php
// Is this the first post of the front page?
$first_post = $wp_query->current_post == 0 && !is_paged() && is_front_page();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
		<?php 
		if ( has_post_thumbnail() ) { ?>
			<figure class="featured-image">
				<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
					<?php the_post_thumbnail('popper-featured-image'); ?>
				</a>
			</figure>
		<?php } ?>
		<?php
		if ( $first_post == true ) { 
			the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			
			if ( has_excerpt( $post->ID ) ) {
				echo '<div class="deck">';
				echo apply_filters( 'the_content', get_the_excerpt() );
				echo '</div><!-- .deck -->';
			}
			
			echo '<div class="entry-meta">';
			popper_posted_on(); 
		} else { 
			the_title( sprintf( '<h2 class="entry-title index-excerpt"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			echo '<div class="index-entry-meta">';
			popper_index_posted_on(); 
		} ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php
	if ( $first_post == true ) { ?>
		<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'popper' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php popper_entry_footer(); ?>
		</footer><!-- .entry-footer -->
		
	<?php } else { ?>
		
		<div class="entry-content index-excerpt">
			<?php
				the_excerpt();
			?>
			
			
		</div><!-- .entry-content -->
		
		<div class="continue-reading">
			<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
			<?php 
			echo sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading%s', 'popper' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( ' <span class="screen-reader-text">"', '"</span>', false )
			);
			?>
			</a>
		</div><!-- .continue-reading -->
		
	<?php } ?>
		
</article><!-- #post-## -->

<?php 
 /*
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package edunxt
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-meta">
		<?php edunxt_posted_on();
		edunxt_entry_meta(); ?>
	</div><!-- .entry-meta -->	
	<div class="entry-content">
		<div class="featured-image">
	        <?php the_post_thumbnail( 'full', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
		</div><!-- .featured-post-image -->
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'edunxt' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edunxt_posts_tags(); ?>
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'edunxt' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>	
</article><!-- #post-## -->
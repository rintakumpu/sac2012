<?php
/**
 * @package WordPress
 * @subpackage Scan_Agile
 * @since Scandinavian Agile Conference 2012
 */

get_header(); ?>

		<section>
			
			<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'index' );
			?>
		
		</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

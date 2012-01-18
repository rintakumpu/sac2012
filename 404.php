<?php
/**
 * The template for displaying 404 pages (Not Found).
 */

get_header(); ?>

	<section>
		
	<h2 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h2>
				<div class="entry-content">
					<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'twentyten' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->

	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

	</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

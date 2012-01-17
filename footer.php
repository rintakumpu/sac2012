<?php
/**
 * The template for displaying the footer.
 */
 
?>
</div></div> <!-- Close #wrapper -->
	<footer>
		
<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>

			<small id="copyright">&copy; 2011 Scandinavian Agile Conference | Designed by  <a href="http://www.elegantthemes.com" title="Premium WordPress Themes">Elegant Themes</a> | Powered by  <a href="http://www.wordpress.org">WordPress</a></small>

	</footer>
	
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>

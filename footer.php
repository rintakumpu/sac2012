<?php
/**
 * The template for displaying the footer.
 */
 
?>
<aside>
	<section>
	
		<h2>Agile Finland</h2>
			
		<p><a href="http://www.agilefinland.com/" title="Agile Finland ry"><img src="http://scan-agile.org/files/2011/11/agile_finland_logo_tr1-e1321384782501.png" alt="Agile Finland"/></a>This conference is organized by <a href="http://www.agilefinland.com/">Agile Finland ry</a>, which is non-profit association of software professionals. The purpose of Agile Finland is to raise the public's awareness of <a href="http://agilemanifesto.org/">Agile Software Development</a>, advance the use of Agile and increase its members' Agile knowhow.</p>

	</section>

</aside>
	
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

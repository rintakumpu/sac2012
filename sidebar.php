<?php
/**
 */
?>

		<aside role="complementary">
		
		<section>
			<h2>Agile Finland</h2>
			
			<p><a href="http://www.agilefinland.com/" title="Agile Finland ry"><img src="http://scan-agile.org/files/2011/11/agile_finland_logo_tr1-e1321384782501.png" alt="Agile Finland"/></a>This conference is organized by <a href="http://www.agilefinland.com/">Agile Finland ry</a>, which is non-profit association of software professionals. The purpose of Agile Finland is to raise the public's awareness of <a href="http://agilemanifesto.org/">Agile Software Development</a>, advance the use of Agile and increase its members' Agile knowhow.</p>
		</section>
		
		<section>
		<h2>Platinium sponsors</h2>
		
			<ul>
				<li><a href="http://nitorcreations.com" title="Nitor Creations"><img src="http://scan-agile.wp.agile.fi/files/2011/11/nitor_logo-e1321011376879.gif" alt="Nitor Creations"/></a></li>
				<li><a href="http://reaktor.fi" title="Reaktor"><img src="http://scan-agile.wp.agile.fi/files/2011/11/reaktor_logo_195x85px.jpg" alt="Reaktor"/></a></li>
				<li><a href="http://solita.fi" title="Solita"><img src="http://scan-agile.wp.agile.fi/files/2011/11/solita_logo_250-e1321015279124.jpg" alt="Solita"/></a></li>					
			</ul>
		</section>
		
		<section>	
		<h2>Gold sponsors</h2>	
			
			<ul>
				<li><a href="http://comptel.com" title="Comptel"><img src="http://scan-agile.wp.agile.fi/files/2011/11/comptel_logo_black_transparency.gif" alt="Comptel"/></a></li>
				<li><a href="http://www.houston-inc.com" title="Houston Inc."><img src="http://scan-agile.wp.agile.fi/files/2011/11/Houston_logo_100_100.png" alt="Houston Inc."/></a></li>
			</ul>
		</section>
		
		
		</aside><!-- #primary .widget-area -->

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<aside id="secondary" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		</aside><!-- #secondary .widget-area -->

<?php endif; ?>

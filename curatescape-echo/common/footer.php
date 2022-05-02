	</div>
	<!--end page content-->

	<footer class="primary">
	    <div class="max-content-width inner-padding">
	        <div class="funlinks">
	            <?php echo rl_find_us('transparent-on-dark');?>
	            <?php if (rl_appstore_downloads()) {
    				echo '<div class="footer-appstore-links">'.rl_appstore_downloads().'</div>';
				};?>
	        </div>

	        <div id="project-meta">
	            <div class="separator wide"></div>
	            <div class="meta copyright"><?php echo 'El trabajo que realizamos es gracias a la gente que aporta sus historias. Si tenés material que pueda ayudarnos nos podés escribir a archivosdelsur@biblioteca.com';?></div>
	            <div class="meta powered-by"><?php echo __('Desarrollado por <a href="http://omeka.org/">Omeka</a> + <a href="http://curatescape.org">Curatescape</a> Implementado por <a href="http://fiqus.coop/">Fiqus</a>');?></div>
	        </div>

	        <div id="custom-meta">
	            <div class="custom"><?php echo get_theme_option('custom_footer_html');?></div>
	        </div>

	        <?php echo fire_plugin_hook('public_footer', array('view'=>$this)); ?>
	        <?php echo rl_google_analytics();?>

	    </div>
	</footer>
	</div> <!-- end site-content -->
	</body>

	</html>
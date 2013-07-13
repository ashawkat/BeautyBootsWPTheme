<div class="row footer-menu" style="text-align:center">
		<?php wp_nav_menu( array( 'theme_location' => 'menu_footer') ); ?>
		</div>
		<div class="row">
			<p style="text-align:center">Beauty Boots | &copy; 2013 to <a href="http://devsoftbd.com"><strong>Devsoft Bangladesh</strong></a></p>
		</div>
	</div>
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.carousel').carousel();
		    interval: 2000,
		    autoplay:1000
		});
	</script>
	<?php wp_footer(); ?>
</body>
</html>
<?php 
/*
Template Name: Home Template
*/
get_header(); ?>
		<div class="row">
			<div id="this-carousel-id" class="carousel slide"><!-- class of slide for animation -->
				<div class="carousel-inner">
				    <div class="item active">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/1.jpg" width="1200" height="400" alt="" />
					    <div class="carousel-caption">
					    	<p>SUB CSE Festival-2013</p>
					    </div>
					</div>
					<div class="item">
					    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/2.jpg" width="1200" height="400" alt="" />
					    <div class="carousel-caption">
					        <p>SUST Programming Contest-2011</p>
					    </div>
					</div>
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/3.jpg" width="1200" height="400" alt="" />
					    <div class="carousel-caption">
					        <p>A happy moment with our department head.</p>
					    </div>
					</div>
				</div><!-- /.carousel-inner -->
				 <!--  Next and Previous controls below
				       href values must reference the id for this carousel -->
				<a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
			</div><!-- /.carousel -->
		</div>
		<div class="row">
			<?php dynamic_sidebar('promo'); ?>
		</div>
<?php get_footer(); ?>
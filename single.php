<?php get_header(); ?>
		<div class="row">
			<div class="span-man">
				<div class="span4 bg-unit">
					<?php dynamic_sidebar('left_sidebar'); ?>
				</div>
			</div>
			<div class="span8">
				<div class="breadcrumb">
						<?php if (function_exists('wordpress_breadcrumbs')) wordpress_breadcrumbs(); ?>
				</div>
				<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?> 
				<?php endwhile; ?>
					
				<?php else : ?>
					<h3><?php _e('404 Error&#58; Not Found', 'bilanti'); ?></h3>
				<?php endif; ?>
			</div>
		</div>
<?php get_footer(); ?>
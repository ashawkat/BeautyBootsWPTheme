<?php get_header(); ?>
		<div class="row">
			<div class="span-man">
				<div class="span4 bg-unit">
					<?php dynamic_sidebar('left_sidebar'); ?>
				</div>
			</div>
			<div class="span8">
				<?php get_template_part('post-excerpt'); ?>
			</div>
		</div>
<?php get_footer(); ?>
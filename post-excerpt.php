<?php
/**
 * The template for displaying post excerpts. 
 *
 * @package WordPress
 * @subpackage bilanti
 */
?>

<?php if(have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>		
	<div class="single_post">
		<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
		<p class="post_information">Posted by: <?php the_author_posts_link(); ?> | Posted on: <?php the_time('j.n.y') ?></p>
		<div style="clear:both"></div>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-image', array('class' => 'postthumbnails')); ?></a>
		<?php the_excerpt(); ?> 
	</div>
<?php endwhile; ?>	
<?php endif; ?>
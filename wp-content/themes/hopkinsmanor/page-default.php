<?php
/*
Template Name: Template: default
*/
?>

<?php get_header(); ?>
	<div class="contentcontainer <?php the_field('class'); ?>">


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">

			<div class="entry">
				<?php the_content(); ?>
			</div>

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</div>
				
		<?php endwhile; endif; ?>

	</div>
<?php get_footer(); ?>

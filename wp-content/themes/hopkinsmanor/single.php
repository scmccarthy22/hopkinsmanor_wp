<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h2><?php the_title(); ?></h2>
			
			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>

			</div>
			
			<?php edit_post_link('Edit this entry','','.'); ?>
			
		</div>
		
				
	<?php endwhile; endif; ?>
	
<div id="previouspost">	
	<?php previous_post_link('%link', 'Previous Post', false); ?>
</div>

<div id="nextpost">
	<?php next_post_link('%link', 'Next Post', false); ?>	
</div>
	

<?php get_footer(); ?>
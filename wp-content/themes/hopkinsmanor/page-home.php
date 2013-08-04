<?php
/*
Template Name: Template: home
*/
?>

<?php get_header(); ?>


	<?php if ( is_page('Home') ) { ?>
	<div id="splash">
		<div class="title">
			<h1><span>Welcome to</span></br><span>Hopkins Manor</span></h1>
		</div>
	</div>
	<?php } else { ?>
	<?php } ?>
	
	<div class="contentcontainer <?php the_field('class'); ?>">


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">
				<div class="entry">
					<?php the_content(); ?>
				</div>
				<img class="right" src="
				<?php the_field('inset_photo'); ?>"alt="" />
				<p class="quote"><?php the_field('quote'); ?></p>
			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</div>
				

		<?php endwhile; endif; ?>


<?php get_footer(); ?>

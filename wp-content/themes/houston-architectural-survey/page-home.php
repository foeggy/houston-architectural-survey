<?php /*
Template Name: Home
*/ ?>
<?php get_header(); ?>
<div id="content" class="full">


<?php //get_template_part( 'part-testimonials-home'); ?>
<div id="homeContent" class="full homeSection clearfix">
	<?php while (have_posts()) : the_post(); ?>	
	<div class="inside">
	<?php the_content(); ?>	
	</div>
	<?php endwhile; ?>	
</div>
<?php get_template_part( 'part-surveys-home'); ?>
<?php //get_template_part( 'part-featured-pages'); ?>
<?php  
$page_id = get_queried_object_id();
$key = 'google_map_iframe';
$single = true;
echo get_post_meta($page_id, $key, $single); 
?>

<?php get_template_part( 'part-posts-home'); ?>

</div>


<?php get_footer(); ?>	
<?php
/*
Template Name: Page-Projects
*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<h1>Projects</h1>
<p class="intro-paragraph">A collection of design, development, and branding projects.</p>

<section class="work-grid">
	<ul>
		<?php query_posts('cat=3','showposts=1'.get_option('posts_per_page')); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<li>
			<a href="<?php the_permalink() ?>">
				<img src="<?php echo get_field('logo-svg'); ?>" alt="<?php the_title(); ?>" />
			</a>
		</li>
		<?php endwhile; ?>
		<?php endif; ?>
	</ul>
</section>

<script>
	$('nav .projects a').addClass('active');
</script>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
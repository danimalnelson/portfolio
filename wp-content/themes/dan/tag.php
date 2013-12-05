<?php
/**
 * The template used to display Tag Archive pages
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ): ?>
<h1><?php echo single_tag_title( '', false ); ?></h1>
<div class="intro-paragraph"><?php echo tag_description(); ?></div>

<section class="work-grid">
	<ul class>
	<?php while ( have_posts() ) : the_post(); ?>
		<li>
			<a href="<?php the_permalink() ?>">
				<img src="<?php echo get_field('logo-svg'); ?>" alt="<?php the_title(); ?>" />
			</a>
		</li>
	<?php endwhile; ?>
	</ul>
</section>
<?php else: ?>
<h2>No posts to display in <?php echo single_tag_title( '', false ); ?></h2>
<?php endif; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
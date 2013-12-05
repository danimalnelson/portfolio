<?php
/**
 * The template for displaying Category Archive pages
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<h1><?php echo single_cat_title( '', false ); ?></h1>
<?php
	if ( is_category() ) { 
		$cat = get_query_var('cat');
		$category=get_category($cat);
		echo '<p class="intro-paragraph">'. $category->description . '</p>';
	}
?>
<section class="work-grid">
	<ul>
		<?php while ( have_posts() ) : the_post(); ?>
		<li>
			<a href="<?php the_permalink() ?>">
				<img src="<?php echo get_field('logo-svg'); ?>" alt="<?php the_title(); ?>" />
			</a>
		</li>
		<?php endwhile; ?>
	</ul>
</section>

<script>
	$('nav .prototypes a').addClass('active');
</script>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
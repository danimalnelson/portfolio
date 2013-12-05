<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<h1><?php the_title(); ?></h1>

<section id="work-content">
	<div id="work-description">
				
		<?php if ( in_category('prototypes') ) { ?>
			<h3>About the Prototype</h3>
		<?php } else { ?>
			<h3>About the Project</h3>
		<?php } ?>
		
		<p><?php echo get_field('description'); ?></p>
		
		<?php if (get_field('link')) : ?>
		<div id="work-link">
			<h3>Link</h3>
			<p><a href="http://<?php echo get_field('link'); ?>" target="_blank"><?php echo get_field('link'); ?></a></p>
		</div>
		<?php endif; ?>
		
		<div id="work-roles">
			<h3>Tags</h3>
			<?php if(get_the_tag_list()) { echo get_the_tag_list('<ul id="work-tags"><li>','</li><li>','</li></ul>');} ?>
		</div>
	</div>
	<div id="image-container">
		<ul>
			<?php if (get_field('video')) : ?><li><div class="border"><div class="video-container"><iframe src="http://player.vimeo.com/video/<?php echo get_field('video'); ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=f5f5f5" width="664" height="374" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div></div></li><?php endif; ?>
			<?php if (get_field('image_1')) : ?><li><div class="border"><a href="<?php echo get_field('image_1_large'); ?>" class="fancybox"><img src="<?php echo get_field('image_1'); ?>" alt="<?php the_title(); ?>"></div></a></li><?php endif; ?>
			<?php if (get_field('image_2')) : ?><li><div class="border"><a href="<?php echo get_field('image_2_large'); ?>" class="fancybox"><img src="<?php echo get_field('image_2'); ?>" alt="<?php the_title(); ?>"></div></a></li><?php endif; ?>
			<?php if (get_field('image_3')) : ?><li><div class="border"><a href="<?php echo get_field('image_3_large'); ?>" class="fancybox"><img src="<?php echo get_field('image_3'); ?>" alt="<?php the_title(); ?>"></div></a></li><?php endif; ?>
			<?php if (get_field('image_4')) : ?><li><div class="border"><a href="<?php echo get_field('image_4_large'); ?>" class="fancybox"><img src="<?php echo get_field('image_4'); ?>" alt="<?php the_title(); ?>"></div></a></li><?php endif; ?>
			<?php if (get_field('image_5')) : ?><li><div class="border"><a href="<?php echo get_field('image_5_large'); ?>" class="fancybox"><img src="<?php echo get_field('image_5'); ?>" alt="<?php the_title(); ?>"></div></a></li><?php endif; ?>
			<?php if (get_field('image_6')) : ?><li><div class="border"><a href="<?php echo get_field('image_6_large'); ?>" class="fancybox"><img src="<?php echo get_field('image_6'); ?>" alt="<?php the_title(); ?>"></div></a></li><?php endif; ?>
			<?php if (get_field('image_7')) : ?><li><div class="border"><a href="<?php echo get_field('image_7_large'); ?>" class="fancybox"><img src="<?php echo get_field('image_7'); ?>" alt="<?php the_title(); ?>"></div></a></li><?php endif; ?>
			<?php if (get_field('image_8')) : ?><li><div class="border"><a href="<?php echo get_field('image_8_large'); ?>" class="fancybox"><img src="<?php echo get_field('image_8'); ?>" alt="<?php the_title(); ?>"></div></a></li><?php endif; ?>
		</ul>
	</div>
</section>

<?php 
$prev_post = get_adjacent_post( false, '', true );
$next_post = get_adjacent_post( false, '', false );
$prev_post_id = $prev_post->ID;
$next_post_id = $next_post->ID;
?>

<?php
if(($prev_post_id === '') || ($prev_post_id === null)) :

$query = new WP_Query(array('order' => 'DESC', 'posts_per_page' => '1'));

if($query->have_posts()) : while($query->have_posts()) :
    $query->the_post();
    $prev_post_id = get_the_ID();
    endwhile;
endif;

wp_reset_postdata();

endif;

if(($next_post_id === '') || ($next_post_id === null) ) :

$query = new WP_Query(array('order' => 'ASC', 'posts_per_page' => '1'));

if($query->have_posts()) : while($query->have_posts()) :
        $query->the_post();
        $next_post_id = get_the_ID();
    endwhile;
endif;

wp_reset_postdata();

endif;
?>

<a href="<?php echo get_permalink($next_post_id); ?>" class="previous-post">Previous</a>
<a href="<?php echo get_permalink($prev_post_id); ?>" class="next-post">Next</a>

<!--
<div class="previous-post"><?php next_post_link('%link', 'Previous', FALSE); ?></div>
<div class="next-post"><?php previous_post_link('%link', 'Next', FALSE); ?></div>
-->

<script type="text/javascript">
	$(document).ready(function() {
		$('.fancybox').fancybox( {
	    	openEffect	: 'elastic',
	    	closeEffect	: 'elastic',
		});
	});
</script>

<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
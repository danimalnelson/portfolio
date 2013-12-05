<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

			<section id="about-dan">
				<h1>Dan Nelson. Designer &amp; Developer.</h1>
				<p class="intro-paragraph">I'm an experience and interface designer and front-end developer. I currently work at Trunk Club as a Product Designer.</p>
			</section>
			
			<section id="featured-projects" class="work-grid">
				<h3>Featured Work</h3>
				<ul>
					<?php query_posts('cat=10','showposts=1'.get_option('posts_per_page')); ?>
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
			
			<section id="skills-list">
				<div class="design-skills skill-list">
					<h3>Design Skills</h3>
					<ul>
						<li><p>Experience Design</p></li>
						<li><p>Interface Design</p></li>
						<li><p>Art Direction</p></li>
					</ul>
				</div>
				<div class="dev-skills skill-list">
					<h3>Dev Skills</h3>
					<ul>
						<li><p>HTML, CSS, jQuery</p></li>
						<li><p>Sass, Less, Git,</p></li>
						<li><p>Rails, Backbone.js</p></li>
					</ul>
				</div>
				<div class="client-list skill-list">
					<h3>Clients</h3>
					<ul>
						<li><p>Trunk Club, Made Movement, Recurly, New Belgium Brewing, Seventh Generation</p></li>
					</ul>
				</div>
				<!--<div class="skill-list">
					<h3>Awards</h3>
					<ul>
						<li><p>Webby, Winner x1</p></li>
						<li><p>Webby, Nominee x2</p></li>
						<li><p>Awwwards, SOTD x1</p></li>
					</ul>
				</div>-->
			</section>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>
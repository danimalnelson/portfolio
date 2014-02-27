<?php
/*
Template Name: Page-About
*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<h1>About</h1>
<section id="about">
	<div id="experience" class="about-section">
		<h2>Experience</h2>
		<div class="about-subsection">
			<h3>Trunk Club</h3>
			<h4>Product Design Lead</h4>
			<p>Designing the vision and experience for Trunk Club members, focusing on a mobile first, data-driven strategy. Prototype, test, and analyze user experiences. Conduct user research and interviews. Design and develop the mobile and desktop interfaces.</p>
		</div>
		<div class="about-subsection">
			<h3>Made Movement</h3>
			<h4>Designer and Developer</h4>
			<p>Helped launch the ad agency and build out the digital team. Designed and developed prototypes, user-experiences, and interfaces for client projects, campaigns, websites and mobile apps.</p>
			<p>Clients: New Belgium Brewing, Seventh Generation, Repair.com, Fred Water</p>
		</div>
		<div class="about-subsection">
			<h3>Freelance</h3>
			<div class="freelance-client">
				<h4>Designer, Recurly</h4>
				<p>Designed user-experiences for their product interface.</p>
			</div>
			<div class="freelance-client">
				<h4>Designer, Contently</h4>
				<p>Explored an alternative user-interface for their website.</p>
			</div>
			<div class="freelance-client">
				<h4>Designer, Eyes and Ears</h4>
				<p>Designed and developed web campaigns for bands and musicians.</p>
			</div>
		</div>
	</div>
	<div id="skills" class="about-section">
		<h2>Skills</h2>
		<div class="about-subsection">
			<h3>Design Skills</h3>
			<ul class="about-list">
				<li><p>Interface Design</p></li>
				<li><p>Experience Design</p></li>
				<li><p>Art Direction</p></li>
			</ul>
		</div>
		<div class="about-subsection">
			<h3>Dev Skills</h3>
			<ul class="about-list">
				<li><p>HTML, CSS, jQuery</p></li>
				<li><p>Sass, LESS</p></li>
				<li><p>Git, Command Line</p></li>
			</ul>
		</div>
	</div>
	<div id="awards" class="about-section">
		<h2>Awards</h2>
		<div class="about-subsection">
			<h3>Webbby</h3>
			<ul class="about-list">
				<li><p>2012, Winner, School/University</p></li>
				<li><p>2012, Nominee, Best Use of Video</p></li>
			</ul>
		</div>
		<div class="about-subsection">
			<h3>Awwwards</h3>
			<ul class="about-list">
				<li><p>2012, Winner, Site of the Day</p></li>
			</ul>
		</div>
	</div>
	<div id="education" class="about-section">
		<h2>Education</h2>
		<div class="about-subsection">
			<h3>University of Colorado</h3>
			<h4>Graduate, Design</h4>
			<p>2012</p>
		</div>
		<div class="about-subsection">
			<h3>DePaul University</h3>
			<h4>Undergraduate, Design</h4>
			<p>2009</p>
		</div>
	</div>
</section>

<script>
	$('nav .about a').addClass('active');
</script>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
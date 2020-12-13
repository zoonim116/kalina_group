<?php get_header(); ?>
<section class="home-hero">
	<div class="container">
		<div class="columns">
			<div class="column is-9">
				<h1 class="title"><?php the_title(); ?></h1>
			</div>
		</div>
		<div class="columns">
			<div class="column is-6-widescreen is-9-tablet  description">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>

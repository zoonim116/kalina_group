<?php /* Template Name: About us page template */ ?>

<?php get_header(); ?>

<section class="about-us">
	<div class="container">
		<div class="columns">
			<div class="column is-3 about-img">
				<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="About Us">
			</div>
			<div class="column is-9 about-description">
				<h1 class="page-title"><?php the_title(); ?></h1>
				<p class="about-quote">
					"<?php the_field('quote');?>"
				</p>
				<div class="about-content">
				    <?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="about-list">
	<div class="container">
		<div class="columns">
            <?php foreach (get_field('benefits') as $benefit ): ?>
                <div class="column is-3 is-offset-1">
                    <p class="item-number"><?php echo $benefit['number']; ?>+</p>
                    <p class="title-number"><?php echo $benefit['title']; ?></p>
                    <p><?php echo $benefit['description']; ?></p>
                </div>
            <?php endforeach; ?>
		</div>
	</div>
</section>
<?php $types_of_clients = get_field('types_of_clients'); ?>

<section class="types-clients">
	<div class="container">
		<h3 class="types-clients-title"><?php _e('Types of Clients', 'kalina'); ?></h3>
		<div class="columns">
			<div class="column is-3">
				<p><?php echo $types_of_clients['description']; ?> </p>
			</div>
			<div class="column is-8 is-offset-1 clients-list">
                <?php echo $types_of_clients['clients']; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>

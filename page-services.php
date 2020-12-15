<?php /* Template Name: Services page template */ ?>

<?php get_header(); ?>

<section class="services page-padding">
	<div class="container">
		<div class="columns">
			<div class="column is-3">
				<?php $thumbnail_id = get_post_thumbnail_id( $post->ID ); ?>
				<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php echo get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>">
			</div>
			<div class="column is-3 services-content">
				<h1 class="page-title"><?php the_title(); ?></h1>
				<div class="services-description">
					<?php the_content(); ?>
				</div>
			</div>
			<div class="column is-4 is-offset-1 services-form">
				<p>Leave your contact details and we will send you additional information on the topic you</p>
                <?php echo do_shortcode('[contact-form-7 id="61" title="Services form"]'); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>

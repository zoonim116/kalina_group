<?php /* Template Name: Contact page template */ ?>

<?php get_header(); ?>

<section class="contact page-padding">
	<div class="container">
		<div class="columns">
			<div class="column is-3">
				<?php $thumbnail_id = get_post_thumbnail_id( $post->ID ); ?>
				<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php echo get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>">
			</div>
			<div class="column is-3 contact-content">
				<h1 class="page-title"><?php the_title(); ?></h1>
				<div class="contact-list">
					<div class="contact-item">
						<svg xmlns="http://www.w3.org/2000/svg" width="18.281" height="24" viewBox="0 0 18.281 24">
							<path id="Path_27" data-name="Path 27" d="M70.141,0A9.151,9.151,0,0,0,61,9.141a9.059,9.059,0,0,0,1.823,5.48l6.754,9.1c.017.022.043.03.061.05a.68.68,0,0,0,1.065-.05c1.945-2.595,5.51-7.441,6.88-9.27v0l.008-.011A9.141,9.141,0,0,0,70.141,0Zm0,14.072a4.931,4.931,0,1,1,4.931-4.931A4.944,4.944,0,0,1,70.141,14.072Z" transform="translate(-61)" fill="#161616"/>
						</svg>
						<p><?php the_field('address');?></p>
					</div>
					<div class="contact-item">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
							<path id="Path_28" data-name="Path 28" d="M22.074,15.753a13.626,13.626,0,0,1-4.279-.682,1.956,1.956,0,0,0-1.9.4l-2.7,2.037a14.913,14.913,0,0,1-6.705-6.7L8.466,8.178a1.94,1.94,0,0,0,.477-1.965,13.647,13.647,0,0,1-.684-4.286A1.928,1.928,0,0,0,6.333,0H1.926A1.928,1.928,0,0,0,0,1.926,22.1,22.1,0,0,0,22.074,24,1.928,1.928,0,0,0,24,22.074v-4.4A1.928,1.928,0,0,0,22.074,15.753Z" fill="#161616"/>
						</svg>
						<?php foreach (get_field('phone_list') as $phone ): ?>
						<p><a href="tel:<?php echo $phone['phone_number']; ?>"><?php echo $phone['phone_number']; ?></a></p>
						<?php endforeach; ?>
					</div>
					<div class="contact-item">
						<svg xmlns="http://www.w3.org/2000/svg" width="27" height="24" viewBox="0 0 27 24">
							<g id="fax" transform="translate(0 -31)">
								<path id="Path_29" data-name="Path 29" d="M24.627,211H2.373A2.389,2.389,0,0,0,0,213.4v4.8a2.389,2.389,0,0,0,2.373,2.4H5.59v-.8a2.389,2.389,0,0,1,2.373-2.4H19.037a2.389,2.389,0,0,1,2.373,2.4v.8h3.217A2.389,2.389,0,0,0,27,218.2v-4.8A2.389,2.389,0,0,0,24.627,211Zm-7.963,4a.8.8,0,1,1,.791-.8A.8.8,0,0,1,16.664,215Zm3.164,0a.8.8,0,1,1,.791-.8A.8.8,0,0,1,19.828,215Z" transform="translate(0 -170.4)" fill="#161616"/>
								<path id="Path_30" data-name="Path 30" d="M331,32.518v3.119h3.084A3.989,3.989,0,0,0,331,32.518Z" transform="translate(-313.545 -1.437)" fill="#161616"/>
								<path id="Path_31" data-name="Path 31" d="M121.791,31a.8.8,0,0,0-.791.8V39h14.238V35.8h-3.955a.8.8,0,0,1-.791-.8V31Z" transform="translate(-114.619)" fill="#161616"/>
								<path id="Path_32" data-name="Path 32" d="M147.865,367.4a.8.8,0,0,0,.791-.8v-4.8a.8.8,0,0,0-.791-.8H136.791a.8.8,0,0,0-.791.8v4.8a.8.8,0,0,0,.791.8Zm-8.7-4h6.328a.8.8,0,0,1,0,1.6h-6.328a.8.8,0,0,1,0-1.6Z" transform="translate(-128.828 -312.4)" fill="#161616"/>
							</g>
						</svg>
						<?php foreach (get_field('fax_list') as $fax ): ?>
                            <p><a href="tel:<?php echo $fax['fax_number']; ?>"><?php echo $fax['fax_number']; ?></a></p>
						<?php endforeach; ?>
					</div>
					<div class="contact-item">
						<svg xmlns="http://www.w3.org/2000/svg" width="34" height="24" viewBox="0 0 34 24">
							<g id="mail" transform="translate(0 -76)">
								<g id="Group_25" data-name="Group 25" transform="translate(23.389 77.715)">
									<g id="Group_24" data-name="Group 24" transform="translate(0 0)">
										<path id="Path_33" data-name="Path 33" d="M362.522,101.721l-10.311,10.285,10.311,10.285a2.975,2.975,0,0,0,.3-1.285v-18A2.974,2.974,0,0,0,362.522,101.721Z" transform="translate(-352.211 -101.721)" fill="#161616"/>
									</g>
								</g>
								<g id="Group_27" data-name="Group 27" transform="translate(1.708 76)">
									<g id="Group_26" data-name="Group 26" transform="translate(0 0)">
										<path id="Path_34" data-name="Path 34" d="M55.025,76H27a2.944,2.944,0,0,0-1.28.3L38.9,89.465a2.982,2.982,0,0,0,4.226,0L56.3,76.3A2.944,2.944,0,0,0,55.025,76Z" transform="translate(-25.721 -76)" fill="#161616"/>
									</g>
								</g>
								<g id="Group_29" data-name="Group 29" transform="translate(0 77.715)">
									<g id="Group_28" data-name="Group 28" transform="translate(0 0)">
										<path id="Path_35" data-name="Path 35" d="M.3,101.721a2.975,2.975,0,0,0-.3,1.285v18a2.974,2.974,0,0,0,.3,1.285l10.311-10.285Z" transform="translate(0 -101.721)" fill="#161616"/>
									</g>
								</g>
								<g id="Group_31" data-name="Group 31" transform="translate(1.708 89.414)">
									<g id="Group_30" data-name="Group 30" transform="translate(0 0)">
										<path id="Path_36" data-name="Path 36" d="M45.993,277.211l-1.459,1.465a4.972,4.972,0,0,1-7.043,0l-1.459-1.465L25.721,287.5a2.944,2.944,0,0,0,1.28.3H55.025a2.944,2.944,0,0,0,1.28-.3Z" transform="translate(-25.721 -277.211)" fill="#161616"/>
									</g>
								</g>
							</g>
						</svg>
						<p><a href="mailto:<?php the_field('email');?>"><?php the_field('email');?></a></p>
					</div>
				</div>
			</div>
			<div class="column is-5 is-offset-1">
				<div class="contact-map">
					<?php the_field('map_iframe');?>
				</div>
                <div class="contact-page-form">
	                <?php echo do_shortcode('[contact-form-7 id="62" title="Contact page form"]'); ?>
                </div>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>

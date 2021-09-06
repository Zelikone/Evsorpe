<?php
/*
Template Name: Reviews Page
*/
get_header(); ?>
<section id="reviews" class="section reviews main-reviews">
    <div class="row">
        <h2 class="section-title main-title about-main-title"><?php the_title(); ?></h2>
    </div>
    <div class="row">
	<?php echo do_shortcode('[testimonial_view id="3"]') ?>
    </div>
</section>
<section class="reviews-form section">
<div class="row">
		<div class="col">
			<div class="contacts-form-wrap">
				<h3 class="reviews-form-title"><?php the_field('contacts_title', 7); ?></h3>
				<?php echo do_shortcode('[testimonial_view id="2"]') ?>
			</div>
		</div>
		<div class="reviews-form-image">
				<?php $image = get_field('contacts_image', 7); ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
			</div>				
	</div>
</section>
<?php get_footer(); ?>

<?php
/*
Template Name: Front-Page
*/
get_header(); ?>
<section id="intro" class="intro">
	<div class="intro-content">
		<div class="row">
			<div class="col">
			<div class="text wow animate__animated animate__zoomIn" data-wow-duration="2s">
				<h1 id="text__title" class="wow animate__animated animate__fadeInLeft" data-wow-duration="2s" data-wow-delay="1s"><?php the_field( 'intro_title' ); ?></h1>
				<p class="wow animate__animated animate__fadeInRight" data-wow-duration="2s" data-wow-delay="1s"><?php the_field( 'intro_subtitle' ); ?></p>
				<a href="/catalog"><button class="btn btn-group btn-animate wow animate__animated animate__fadeInUp" data-wow-duration="2s" data-wow-delay="2s">магазин</button></a>
			</div>
			</div>
		</div>
	</div>
</section>

<section class="advantages section">
	<div class="row">
		<div class="advantages-wrapper">
			<?php while ( have_rows('adv_list') ) : the_row(); ?>
				<div class="advantages-item wow animate__animated animate__fadeInLeft" data-wow-duration="2s">
					<div class="advantages-item-image">
						<?php $image = get_sub_field('image'); ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
					</div>
					<h3 class="advantages-item-title"><?php the_sub_field('title'); ?></h3>
					<p class="advantages-item-text"><?php the_sub_field('text'); ?></p>
				</div>		
			<?php endwhile; ?>
		</div>
	</div>
</section>

<section id="about" class="about section">
	<div class="row ">
		<div class="slider-wrapper wow animate__animated animate__fadeInRight" data-wow-duration="2s">
			<div class="about-slider">
				<?php while ( have_rows('about_slider') ) : the_row(); ?>
					<div class="about-slide">
						<div class="about-slide-image">
							<?php $image = get_sub_field('image'); ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
						</div>	
					</div>
				<?php endwhile; ?>	
			</div>
		</div>
		<div class="about-content wow animate__animated animate__fadeInRight" data-wow-duration="2s" data-wow-delay="0.5s">
			<h3 class="slider-title"><?php the_field('about_title'); ?></h3>
			<p class="slider-text"><?php the_field('about_text'); ?></p>
		<a href="/catalog"><button class="btn btn-animate">магазин</button></a>
		</div>
	</div>
</section>

<section class="sale-product section">
	<div class="row">
		<div class="sale-product-title wow animate__animated animate__fadeInUp" data-wow-delay="0.5s"><?php the_field('sale-title'); ?></div>
		<form class="sale-product-form popup-form wow animate__animated animate__fadeInUp" action="" data-wow-delay="1s">
		<input type="text" name="name" placeholder="Имя" required>
		<input type="tel" name="phone" placeholder="Телефон" required>
		<input type="text" name="city" placeholder="Город" required>
		<input type="hidden" name="project_name" value="Evsorpe">
			<input type="hidden" name="admin_email" value="<?php the_field('admin_email', 'option'); ?>">
			<input type="hidden" name="form_subject" value="Новая заявка на скидочный товар">
			<input type="hidden" name="noreply_email" value="<?php the_field('noreply_email', 'option'); ?>">
		<button class="btn btn-animate" type="submit">Заказать</button>
		</form>
		<div class="sale-product-image wow animate__animated animate__fadeInUp" data-wow-delay="0.5s">
			<?php $image = get_field('sale-image'); ?>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
		</div>
	</div>
</section>

<section id="catalog" class="catalog section">
	<div class="row">
		<div class="col col-top">
			<h2 class="section-title wow animate__animated animate__fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s" id="section-title"><?php the_field('catalog_title'); ?></h2>
			<a href="/catalog"><button class="btn btn-grey btn-animate wow animate__animated animate__fadeInRight" data-wow-duration="2s" data-wow-delay="0.5s">Все товары</button></a>
		</div>
	</div>
	<div class="row">
		<div class="col catalog-wrapper">
			<div class="catalog-list">
				
				<?php $index = 0;
				$wp_query_items = new WP_Query(
					array(
						'post_type' => 'product',
						'posts_per_page' => 8,
						'orderby' => 'date'
					)
				); 
				while ( $wp_query_items->have_posts() ): $wp_query_items->the_post(); ?>

					<div class="catalog-item wow animate__animated animate__fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s">
						<a id="product-<?php the_ID(); ?>" class="product-item" href="<?php the_permalink(); ?>">
						<div class="product-inner">
							<div class="product-item-image" data-index="<?php echo $index;?>">
								<?php $images = get_field('product_images'); $first_row = $images[0]; $image = $first_row['image']; ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
							</div>
							
							
							<!-- <div class="product-item-content-mob">
								<div class="product-item-name">
								<p class="product-item-subtitle product-item-subtitle-mob"><?php the_field('product_subtitle'); ?></p>
								<h3 class="product-item-title product-item-title-mob"><?php the_title(); ?></h3>
								</div>
								<div class="product-item-price">
									<p class="product-item-price_value"><?php the_field('product_price'); ?>р.</p>
									<p class="product-old-price" ><?php the_field('product_oldprice'); ?>р.</p>
								</div>
								<div class="product-item-button">
								<button href="#" class="btn product-buy btn-product">Купить сейчас</button>
								</div>
							</div> -->
							<div class="product-item-content">
							<div class="product-item-content-text">
									<p class="product-item-subtitle"><?php the_field('product_subtitle'); ?></p>
									<h3 class="product-item-title"><?php the_title(); ?></h3>
								</div>
								<div class="product-item-price">
									<p class="product-item-price_value"><?php the_field('product_price'); ?>р.</p>
									<p class="product-old-price" ><?php the_field('product_oldprice'); ?>р.</p>
								</div>
								<div class="product-item-button">
								<button href="#" class="btn product-buy btn-product">Купить сейчас</button>
							</div>
								
							</div>
							
							<!-- <?php if(get_field('product_availability') == true){ ?>
								<p class="product-stock">☑ В наличии</p>
							<?php }else{ ?>
								<p class="product-stock">Нет в наличии</p>
							<?php }?> -->

							

							
							<!-- <button class="product-item-button-oneclick btn popup-link-buy btn-product">
								Купить в 1 клик
							</button> -->
							</div>
							</a>
					</div>

				<?php $index++; endwhile; wp_reset_postdata(); ?>				

			</div>
			
		</div>
	</div>
	<button class="btn btn-add btn-animate">Показать еще</button>
</section>
<section id="main-advantages" class="main-advantages">
<h2 class="section-title wow animate__animated animate__fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s">Главные преимущества</h2>
	<div class="row">
	<ul class="main-advantages-list">
				<?php while ( have_rows('main_adv_list') ) : the_row(); ?>
					<li class="wow animate__animated animate__fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s">
						<div class="main-advantages-item-image">
							<?php $image = get_sub_field('image'); ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
						</div>
						<h3 class="main-advantages-item-title"><?php the_sub_field('title'); ?></h3>
						<p class="main-advantages-item-text"><?php the_sub_field('text'); ?></p>
					</li>
				<?php endwhile; ?>
			</ul>
	</div>
</section>
<section id="reviews" class="reviews">
	<div class="row row-top">
		<div class="col">
		<h2 class="section-title wow animate__animated animate__fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s"><?php the_field('reviews-title'); ?></h2>
		</div>
		<div class="col col-btn wow animate__animated animate__fadeInRight" data-wow-duration="2s" data-wow-delay="0.5s">
			<a href="#reviews-form"><button class="btn btn-review btn-animate">Оставить отзыв</button></a>
			<a href="/reviews"><button class="btn btn-grey btn-animate">Все отзывы</button></a>
		</div>
	</div>
	<div class="row wow animate__animated animate__fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
	<div class="reviews-content">
		<div class="reviews-slider">
		<?php echo do_shortcode('[testimonial_view id="1"]') ?>
		</div>
		<div class="col col-btn-mob">
		<a href="#reviews-form"><button class="btn btn-animate btn-review">Оставить отзыв</button></a>
			<a href="/reviews"><button class="btn btn-grey btn-animate">Все отзывы</button></a>
		</div>
	</div>
	
	</div>
</section>
<section id="reviews-form" class="reviews-form section">
<div class="row">
		<div class="col">
			<div class="contacts-form-wrap wow animate__animated animate__fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s">
				<h3 class="reviews-form-title"><?php the_field('contacts_title'); ?></h3>
				<?php echo do_shortcode('[testimonial_view id="2"]') ?>
			</div>
		</div>
		<div class="reviews-form-image wow animate__animated animate__fadeInRight" data-wow-duration="2s" data-wow-delay="0.5s">
				<?php $image = get_field('contacts_image'); ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
			</div>				
	</div>
</section>
<?php get_footer(); ?>
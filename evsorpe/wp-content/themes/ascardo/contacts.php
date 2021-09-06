<?php
/*
Template Name: Contacts Page
*/
get_header(); ?>
<section id="contacts" class="contacts main-contacts">
	<div class="row">
		<h2 class="section-title main-title about-main-title"><?php the_title(); ?></h2>
	</div>
	<div class="row">
		<div class="col">
			<div class="contacts-form-wrap">				
				<p class="footer-service-text"><?php the_field('text-service', 7); ?></p>
						
						<p><?php the_field('address', 7); ?></p>

						<p><?php the_field('phone-1', 7); ?></p>
						<p><?php the_field('phone-2', 7); ?></p>
		
						<div class="footer-contacts-mail">
						<p>E-mail: <a href="mailto:<?php the_field('mail-1', 7); ?>"><?php the_field('mail-1', 7); ?></a></p>
						
						</div>
						<iframe class="frame-mob" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2245.496204487402!2d37.53567481593046!3d55.74988198055253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54bdcbfd1b72d%3A0x433d48214f76b256!2z0J_RgNC10YHQvdC10L3RgdC60LDRjyDQvdCw0LEuLCAxMiwg0JzQvtGB0LrQstCwLCDQoNC-0YHRgdC40Y8sIDEyMzMxNw!5e0!3m2!1sru!2sua!4v1623314462031!5m2!1sru!2sua" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						<h3 class="footer-service-title"><?php the_field('title-service', 7); ?></h3>
						<p class="footer-service-text"><?php the_field('text-service', 7); ?></p>
				<form class="popup-form contacts-form">
					<div class="contacts-form-inner">
					<input type="text" name="name" placeholder="Имя" required>
					<input type="tel" name="phone" placeholder="Телефон" required>
					</div>
					<input type="email" name="email" placeholder="E-mail" required>
					<textarea name="message" placeholder="Сообщение" required></textarea>
					<input type="hidden" name="project_name" value="Evsorpe">
						<input type="hidden" name="admin_email" value="<?php the_field('admin_email', 'option'); ?>">
						<input type="hidden" name="form_subject" value="Новая заявка">
						<input type="hidden" name="noreply_email" value="<?php the_field('noreply_email', 'option'); ?>">
					<button class="btn" type="submit">Заказать</button>
				</form>
			</div>
		</div>
		<div class="col">
			<iframe class="frame-desc" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2245.496204487402!2d37.53567481593046!3d55.74988198055253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54bdcbfd1b72d%3A0x433d48214f76b256!2z0J_RgNC10YHQvdC10L3RgdC60LDRjyDQvdCw0LEuLCAxMiwg0JzQvtGB0LrQstCwLCDQoNC-0YHRgdC40Y8sIDEyMzMxNw!5e0!3m2!1sru!2sua!4v1623314462031!5m2!1sru!2sua" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>				
	</div>
</section>
<?php get_footer(); ?>

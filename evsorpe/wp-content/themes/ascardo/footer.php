		<footer id="footer" class="footer">
			<div class="row">
				<div class="footer-contacts wow animate__animated animate__fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s">
				<h3 class="footer-contacts-title"><?php the_field('title-contacts', 7); ?></h3>
					<div class="footer-contacts-inner">
						<div class="footer-contacts-number">
						<p><?php echo the_field('phone-1', 7); ?></p>
						<p><?php echo the_field('phone-2', 7); ?></p>
						</div>
						<div class="footer-contacts-mail">
						<p>E-mail: <a href="mailto:<?php echo the_field('mail-1', 7); ?>"><?php echo the_field('mail-1', 7); ?></a></p>
						<p><?php echo the_field('address', 7); ?></p>
						</div>
					</div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2245.496204487402!2d37.53567481593046!3d55.74988198055253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54bdcbfd1b72d%3A0x433d48214f76b256!2z0J_RgNC10YHQvdC10L3RgdC60LDRjyDQvdCw0LEuLCAxMiwg0JzQvtGB0LrQstCwLCDQoNC-0YHRgdC40Y8sIDEyMzMxNw!5e0!3m2!1sru!2sua!4v1623314462031!5m2!1sru!2sua" width="100%" height="170" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
				<div class="footer-service wow animate__animated animate__fadeInRight" data-wow-duration="2s" data-wow-delay="0.5s">
				<h3 class="footer-service-title"><?php the_field('title-service', 7); ?></h3>
				<p class="footer-service-text"><?php the_field('text-service', 7); ?></p>
				<form class="popup-form footer-form" action="/message.php" method="POST">
					<div class="footer-form-inner">
						<input type="text" name="name" placeholder="Имя" required>
						<textarea name="message" placeholder="Сообщение" cols="30" rows="10"></textarea>
					</div>
					<div class="footer-form-inner">
						<input type="tel" name="phone" placeholder="Телефон" required>
						<input type="text" name="email" placeholder="E-mail" required>
						<input type="hidden" name="project_name" value="Evsorpe">
						<input type="hidden" name="admin_email" value="<?php the_field('admin_email', 'option'); ?>">
						<input type="hidden" name="form_subject" value="Новая заявка">
						<input type="hidden" name="noreply_email" value="<?php the_field('noreply_email', 'option'); ?>">
						<button class="btn btn-animate" type="submit">Заказать</button>
						</div>
				</form>
					<form class="popup-form footer-form footer-form-mob" action="/message.php" method="POST">
						<input type="text" name="name" placeholder="Имя" required>
						<input type="tel" name="phone" placeholder="Телефон" required>
						<input type="text" name="email" placeholder="E-mail" required>
						<textarea name="message" placeholder="Сообщение" cols="30" rows="10"></textarea>
						<input type="hidden" name="project_name" value="Evsorpe">
						<input type="hidden" name="admin_email" value="<?php the_field('admin_email', 'option'); ?>">
						<input type="hidden" name="form_subject" value="Новая заявка">
						<input type="hidden" name="noreply_email" value="<?php the_field('noreply_email', 'option'); ?>">
						<button class="btn btn-animate" type="submit">Заказать</button>
					
				</form>
				</div>
			</div>
		</footer>

	<div id="cart" class="dialog mfp-hide">
		<div id="step-1" class="cart-step active">
			<div class="dialog-header">Корзина</div>
			<div class="dialog-content custom-scroll">
				<div class="dialog-content-inner">
					<div class="cart-list" data-sum="0">
						
					</div>
				</div>
			</div>
			<div class="dialog-footer">
				<div class="dialog-footer-col">
					<a href="#" class="cart-step-btn back disabled">
						<i class="fa fa-angle-left"></i>
					</a>
				</div>
				<div class="dialog-footer-col">
					<div class="cart-total">
						<p class="cart-total-price">
							<span class="cart-total-price_text">Сумма:</span>
							<span class="cart-total-price_value">0.00</span>
							<span class="cart-total-price_curr">руб.</span>
						</p>
						<p class="cart-total-credit">
							<span class="cart-total-credit_text">Кредит:</span>
							<span class="cart-total-credit_value">0.00</span>
							<span class="cart-total-credit_curr">руб.</span>
							<span class="cart-total-credit_period">(0 месяцев)</span>
						</p>
					</div>
					<a href="#step-3" class="cart-step-btn next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
		</div>
<div id="step-3" class="cart-step">
	<div class="dialog-header">Оформление заказа</div>
	<div class="dialog-content">
		<div class="dialog-content-inner" style="height: 100%;">
			<form class="cart-form">
				<input type="text" name="name" placeholder="Имя" required>
				<input type="tel" name="phone" placeholder="Телефон" required>
				<input type="email" name="email" placeholder="E-mail" required>
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="Evsorpe">
				<input type="hidden" name="admin_email" value="<?php the_field('admin_email', 'option'); ?>">
				<input type="hidden" name="form_subject" value="Новый заказ">
				<input type="hidden" name="noreply_email" value="<?php the_field('noreply_email', 'option'); ?>">
				<!-- END Hidden Required Fields -->
				<button class="btn" type="submit">Отправить</button>
			</form>
		</div>
	</div>
	<div class="dialog-footer">
		<div class="dialog-footer-col">
			<a href="#step-1" class="cart-step-btn back">
				<i class="fa fa-angle-left"></i>
			</a>
		</div>
		<div class="dialog-footer-col">
			<div class="cart-total">
				<p class="cart-total-price">
					<span class="cart-total-price_text">Сумма:</span>
					<span class="cart-total-price_value">184 300</span>
					<span class="cart-total-price_curr">руб.</span>
				</p>
				<p class="cart-total-credit">
					<span class="cart-total-credit_text">Кредит:</span>
					<span class="cart-total-credit_value">0.00</span>
					<span class="cart-total-credit_curr">руб.</span>
					<span class="cart-total-credit_period">(6 месяцев)</span>
				</p>
			</div>
			<a href="#" class="cart-step-btn next disabled">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
	</div>
</div>
</div>
<div class="call-popup popup-base">
	<div class="call-popup__wrapper popup__wrapper">
		<div class="call-popup__content popup__content">
			<div class="call-btn-close btn-close"></div>
			<h3 class="call-popup__title popup__title">Заказать звонок</h3>
			<form class="popup-form" action="/message.php" method="POST">
				<input type="text" name="name" placeholder="Имя" required>
				<input type="tel" name="phone" placeholder="Телефон" required>
				<input type="email" name="email" placeholder="Email" required>
				<input type="text" name="city" placeholder="Город" required>
				
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="Spino Shop">
				<input type="hidden" name="admin_email" value="<?php the_field('admin_email', 'option'); ?>">
				<input type="hidden" name="form_subject" value="Форма обратного звонка">
				<input type="hidden" name="noreply_email" value="<?php the_field('noreply_email'); ?>">
				<!-- END Hidden Required Fields -->
				<button class="btn" type="submit">Заказать</button>
			</form>
			
		</div>
	</div>
</div>
<div class="buy-popup popup-base">
	<div class="buy-popup__wrapper popup__wrapper">
		<div class="buy-popup__content popup__content">
			<div class="buy-btn-close btn-close">
			<span></span>
			<span></span>
			</div>
			<h3 class="buy-popup__title popup__title">Купить в 1 клик</h3>
			<form class="popup-form buy-popup-oneclick" action="/message.php" method="POST">
				<input type="text" name="name" placeholder="Имя" required>
				<input type="tel" name="phone" placeholder="Телефон" required>
				<input type="email" name="email" placeholder="Email" required>
				<input type="text" name="city" placeholder="Город" required>
				
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="Spino Shop">
				<input type="hidden" name="admin_email" value="<?php the_field('admin_email', 'option'); ?>">
				<input type="hidden" name="form_subject" value="Форма обратного звонка">
				<input type="hidden" name="noreply_email" value="<?php the_field('noreply_email', 'option'); ?>">
				<!-- END Hidden Required Fields -->
				<button class="btn" type="submit">Заказать</button>
			</form>
		</div>
	</div>
</div>


<div class="not-found">404 Not Found</div>
<script>
	var temp_url = '<?php echo get_template_directory_uri(); ?>';
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>

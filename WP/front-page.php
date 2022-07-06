<?php

get_header();
$intro_button = get_field('intro_button');

?>
<main class="content">
	<section class="intro" id="intro">
		<div class="container">
			<img class="intro__image" src="<?php the_field('intro_image'); ?>" alt="">
			<h1 class="intro__header"><?php the_field('intro_header'); ?></h1>
			<?php the_field('intro_text'); ?>
			<a class="intro__button btn goto" href="<?php echo $intro_button['href']; ?>"><?php echo $intro_button['text']; ?></a>
		</div>
	</section>
	<section class="tariffs" id="tariffs">
		<div class="container">
			<h2 class="tariffs__header"><?php the_field('tariffs_header'); ?></h2>
		</div>
		<div class="tariffs-items owl-carousel">
			<?php echo do_shortcode('[pods name="tariffs" template="tariffs" limit="-1" orderby="post_date ASC"]'); ?>
		</div>
	</section>
	<section class="order" id="order">
		<div class="container">
			<div class="order__inner">
				<h2 class="order__header">Подключиться просто!</h2>
				<div class="order-form">
					<div class="order-form__options">
						<div class="order-form__option">Интернет</div>
						<div class="order-form__option">Интернет + ТВ</div>
						<div class="order-form__option">Телефония</div>
						<div class="order-form__option">Видеонаблюдение</div>
					</div>
					<!-- <div class="order-form__inner"> -->
						<!-- <input class="order-form__input order-form__name" type="text" name="name" placeholder="Имя">
						<input class="order-form__input order-form__phone" type="text" name="phone" placeholder="Номер телефона *" required>
						<button class="order-form__button btn" type="submit">Отправить</button> -->
						<?php echo do_shortcode('[contact-form-7 id="51" title="Форма заказа"]'); ?>
						<!-- <label class="order-form__privacy">
							<input type="checkbox" required>Я соглашаюсь на условия <a href="#">обработки данных</a>
						</label> -->
					<!-- </div> -->
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>

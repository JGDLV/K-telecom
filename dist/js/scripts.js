$(document).ready(function () {

	$('form').each(function () {
		const form = $(this);
		const fileLabel = form.find('label[class*="file"]');
		const phone = $(this).find('input[name*="phone"]');
		const privacyLabel = $(this).find('label[class*="privacy"]');
		const privacyInput = privacyLabel.find('input');

		// Для чекбоксов и радио

		privacyLabel.on('click', function () {
			if (privacyInput.attr('type') == 'checkbox') {
				privacyInput.is(':checked')
					? privacyLabel.addClass('active')
					: privacyLabel.removeClass('active');
			} else if (privacyInput.attr('type') == 'radio') {
				privacyInput.is(':checked')
					? (privacyLabel.siblings().removeClass('active'), privacyLabel.addClass('active'))
					: privacyLabel.removeClass('active');
			}
		});

		// Для телефонов

		phone.each(function () {
			$(this).inputmask("+7 (999) 999-99-99");
		});

		// По отправке формы

		form.on('submit', function () {
			privacyLabel.removeClass('active');
		});
	});

	$('.menu-toggle .icon-toggle').click(function () {
		$(this).toggleClass('active');
		// $('.menu > ul').slideToggle();
	});

	$('.order-form__option').on('click', function () {
		if ($(this).hasClass('active')) {
			$(this).removeClass('active');
		} else {
			$(this).siblings().removeClass('active');
			$(this).addClass('active');
		}
	});

	$('.tariffs__item-button').on('click', function (event) {
		event.preventDefault();
		if ($(this).hasClass('active')) {
			$('.tariffs__item-button').removeClass('active').text('Выбрать тариф');
			$(this).removeClass('active');
		} else {
			$('.tariffs__item-button').removeClass('active').text('Выбрать тариф');
			$(this).addClass('active').text('Тариф выбран');
		}
	});

	$('.tariffs__item-tv').on('click', function (event) {
		event.preventDefault();
		if ($(this).hasClass('active')) {
			$(this).removeClass('active');
		} else {
			$(this).addClass('active');
		}
	});

	$(document).on('click', '.goto', function (event) {
		event.preventDefault();
		let id = $(this).attr('href');
		let top = $(id).offset().top;
		$('body,html').animate({ scrollTop: top }, 500);
	});

	$('.tariffs-items').owlCarousel({
		loop: false,
		nav: false,
		// navText: ["<i class='fas fa-chevron-left'>", "<i class='fas fa-chevron-right'>"],
		dots: false,
		// items: 4,
		responsive: {
			0: {
				items: 1,
				margin: 10,
				stagePadding: 10
			},
			576: {
				items: 2,
				margin: 30,
				stagePadding: 15
			},
			992: {
				items: 3,
				margin: 30,
				stagePadding: 15
			},
			1366: {
				items: 4,
				margin: 30,
				center: true
			}
		}
	});

});

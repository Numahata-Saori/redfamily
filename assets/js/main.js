/* ============================
* hamburger menu
* ========================= */

$(".js_gnav-btn").click(function () {
	$(this).toggleClass('active');
	$("#gnav").toggleClass('open');
	$(".js_show").toggleClass('circleactive');
});

$("#gnav a").click(function () {
	$(".js_gnav-btn").removeClass('active');
	$("#gnav").removeClass('open');
	$(".js_show").removeClass('circleactive');
});


/* ============================
* ページ内リンク
* ========================= */

$('a[href*="#"]').click(function () {
	const elmHash = $(this).attr('href');
	const pos = $(elmHash).offset().top;
	$('body,html').animate({scrollTop: pos}, 500);
	return false;
});


/* ============================
* MAIN
* ========================= */

const swiper = new Swiper('.swiper', {
	// Optional parameters
	// direction: 'vertical',
	loop: true,
	// centeredSlides: true,
	loopAdditionalSlides: 1,
	slidesPerView: '1',
	breakpoints: {
		// 768:{
		// 	slidesPerView: 2,
		// 	spaceBetween: 40,
		// }
		1200:{
			slidesPerView: 3,
			spaceBetween: 40,
		}
	},
	slidesPerGroup: 1,
	spaceBetween: 0,
	centeredSlidesBounds: true,
	// effect: 'coverflow',


	// If we need pagination
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
		type: 'bullets',
	},

	// Navigation arrows
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},

	autoplay: {
		delay: 6000,
		disableOnInteraction: false,
		waitForTransition: false,
	},

	allowTouchMove: true,
});

/* ============================
* modal
* ========================= */

$(".js_img-modal").modaal({
	type: 'image',
	overlay_close:true,//モーダル背景クリック時に閉じるか
	before_open:function(){// モーダルが開く前に行う動作
		$('html').css('overflow-y','hidden');/*縦スクロールバーを出さない*/
	},
	after_close:function(){// モーダルが閉じた後に行う動作
		$('html').css('overflow-y','scroll');/*縦スクロールバーを出す*/
	}
});

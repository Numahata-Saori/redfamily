/* ============================
* hamburger menu
* ========================= */

$(".js_gnav-btn").click(function () {
	$(this).toggleClass('active');
	$(".js_gnav").toggleClass('open');
	$(".js_show").toggleClass('circleactive');
});

$(".js_gnav a").click(function () {
	$(".js_gnav-btn").removeClass('active');
	$(".js_gnav").removeClass('open');
	$(".js_show").removeClass('circleactive');
});



/* ============================
* headerがスクロール途中で消え、上にスクロールすると復活する
* ========================= */

let beforePos = 0;

function ScrollAnime() {
	const upArea = $('#up-area');
	if (upArea.length) {
		const elemTop = $('#up-area').offset().top;
		const scroll = $(window).scrollTop();

		if(scroll == beforePos) {
		} else if(elemTop > scroll || 0 > scroll - beforePos){
			$('#header').removeClass('js_up-move');
			$('#header').addClass('js_down-move');
		} else {
			$('#header').removeClass('js_down-move');
			$('#header').addClass('js_up-move');
		}

		beforePos = scroll;
	} else {
		console.warn('Element #up-area does not exist.');
	}

}

$(window).scroll(function () {
	ScrollAnime();
});

$(window).on('load', function () {
	ScrollAnime();
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
* swiper
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
			spaceBetween: 8,
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

	// autoplay: {
	// 	delay: 6000,
	// 	disableOnInteraction: false,
	// 	waitForTransition: false,
	// },

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


/* ============================
* footerNav余白取得
* ========================= */

function footerBottomHeight() {
	const bottomHeight = $('#js-footer-bottom').innerHeight();
	$('#footer').css('padding-bottom', 'calc(1rem + '+bottomHeight+'px)')
}

$(function() {
	footerBottomHeight();

	$(window).resize(function() {
		footerBottomHeight();
	});
});

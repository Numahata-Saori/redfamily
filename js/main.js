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

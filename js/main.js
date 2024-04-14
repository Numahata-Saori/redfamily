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

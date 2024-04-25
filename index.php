<?php
//サーバーが $_SERVER['HTTPS'] の値を返さない場合の対策
if(isset($_SERVER['HTTP_X_FORWARDED_PROTO']) and $_SERVER['HTTP_X_FORWARDED_PROTO'] === "https") {
	$_SERVER['HTTPS'] = 'on';
}

$host_url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://'). $_SERVER['HTTP_HOST'];
?>


<!DOCTYPE html>

<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Red Familyダンススタジオ｜一般社団法人日本こどもフィットネス協会公認クラブ</title>
	<meta name="description" content="岸和田市のキッズダンス教室・泉佐野市のキッズダンス教室・岸和田市のHIPHOPダンス教室">
	<meta name="keywords" content="岸和田市,泉佐野市,HIPHOP,キッズダンス，KIDビクス,赤阪由合香,Jスタジオ,フラダンス教室">

	<!-- GoogleFonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Reggae+One&family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap" rel="stylesheet">

	<!-- <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css"> -->
	<!-- <link rel="stylesheet" href="https://unpkg.com/ress@4.0.0/dist/ress.min.css"> -->
	<link rel="stylesheet" href="assets/css/reset.css">
	<!-- A Modern CSS Reset -->

	<!-- swiper -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

	<link rel="stylesheet" href="assets/css/style.css">
	<!-- <link rel="stylesheet" href="css/swiper.css"> -->

	<!-- <link rel="shortcut icon" href="img/favicon.ico"> -->

</head>
<body class="home">
<?php
require_once ('include/header.php');
?>
	<!-- <header class="header" id="header">
		<div class="header__inner">
			<div class="header__logo">
				<a class="" href="#">
					<img src="assets/img/logo.png" alt="Red family">
				</a>
			</div>
		</div>
		<div class="gnav-content">
			<div class="gnav-btn js_gnav-btn">
				<span></span>
				<span>MENU</span>
				<span></span>
			</div>
			<nav class="gnav" id="gnav">
				<div class="gnav__inner">
					<div class="gnav__unit">
						<p class="gnav__title">メニュー</p>
						<ul class="gnav__list">
							<li class="gnav__item"><a class="gnav__link" href="#">RedFamily について</a></li>
							<li class="gnav__item"><a class="gnav__link" href="#">お知らせ＆イベント情報</a></li>
							<li class="gnav__item"><a class="gnav__link" href="#">レッスン・クラス</a></li>
							<li class="gnav__item"><a class="gnav__link" href="#">インストラクター紹介</a></li>
							<li class="gnav__item"><a class="gnav__link" href="#">スタジオ</a></li>
							<li class="gnav__item"><a class="gnav__link" href="#">全国子どもチャレンジカップ</a></li>
							<li class="gnav__item"><a class="gnav__link" href="#">ご入会・各種手続き</a></li>
							<li class="gnav__item"><a class="gnav__link" href="#">お問い合わせ</a></li>
						</ul>
					</div>
					<div class="gnav__unit">
						<p class="gnav__title">各種申込書ダウンロード</p>
						<ul class="gnav__list">
							<li class="gnav__item"><a class="gnav__link" href="#">入会届</a></li>
							<li class="gnav__item"><a class="gnav__link" href="#">退会届</a></li>
							<li class="gnav__item"><a class="gnav__link" href="#">休会届</a></li>
						</ul>
					</div>
					<div class="gnav__unit">
						<div class="gnav__btn"><a class="gnav__link--btn" href="">日本こどもフィットネス協会</a></div>
						<div class="gnav__btn"><a class="gnav__link--btn" href="">ピアノ教室 生徒募集中！
						</a></div>
					</div>
				</div>
			</nav>
			<div class="circle-bg js_show"></div>
		</div>
	</header> -->

	<!-- <div class="gnav-content">
		<div class="gnav-btn js_gnav-btn">
			<span></span>
			<span>MENU</span>
			<span></span>
		</div>
		<nav class="gnav" id="gnav">
			<div class="gnav__inner">
				<div class="gnav__unit">
					<p class="gnav__title">メニュー</p>
					<ul class="gnav__list">
						<li class="gnav__item"><a class="gnav__link" href="#">RedFamily について</a></li>
						<li class="gnav__item"><a class="gnav__link" href="#">お知らせ＆イベント情報</a></li>
						<li class="gnav__item"><a class="gnav__link" href="#">レッスン・クラス</a></li>
						<li class="gnav__item"><a class="gnav__link" href="#">インストラクター紹介</a></li>
						<li class="gnav__item"><a class="gnav__link" href="#">スタジオ</a></li>
						<li class="gnav__item"><a class="gnav__link" href="#">全国子どもチャレンジカップ</a></li>
						<li class="gnav__item"><a class="gnav__link" href="#">ご入会・各種手続き</a></li>
						<li class="gnav__item"><a class="gnav__link" href="#">お問い合わせ</a></li>
					</ul>
				</div>
				<div class="gnav__unit">
					<p class="gnav__title">各種申込書ダウンロード</p>
					<ul class="gnav__list">
						<li class="gnav__item"><a class="gnav__link" href="#">入会届</a></li>
						<li class="gnav__item"><a class="gnav__link" href="#">退会届</a></li>
						<li class="gnav__item"><a class="gnav__link" href="#">休会届</a></li>
					</ul>
				</div>
				<div class="gnav__unit">
					<div class="gnav__btn"><a class="gnav__link--btn" href="">日本こどもフィットネス協会</a></div>
					<div class="gnav__btn"><a class="gnav__link--btn" href="">ピアノ教室 生徒募集中！
					</a></div>
				</div>
			</div>
		</nav>
		<div class="circle-bg js_show"></div>
	</div> -->

	<div class="main-visual">
		<h1 class="main-visual__img">
			<picture>
				<source srcset="assets/img/main-visual_sp.png" alt="" media="(max-width: 767px)">
				<img src="assets/img/main-visual_pc.png" alt="">
			</picture>
		</h1>
	</div>
	<main class="home-main">
		<!-- <div class="main-visual">
			<h1 class="main-visual__img">
				<picture>
					<source srcset="assets/img/main-visual_sp.png" alt="" media="(max-width: 767px)">
					<img src="assets/img/main-visual_pc.png" alt="">
				</picture>
			</h1>
		</div> -->

		<section class="home-about">
			<div class="home-about__inner common">
				<div class="common__inner">
					<div class="home-title">
						<p class="home-title__en">
							<span class="txt-blue">A</span><span class="txt-orange">B</span><span class="txt-pink">O</span><span class="txt-green">U</span><span class="txt-blue">T</span>
						</p>
						<h2 class="home-title__ja txt-red">RedFamilyについて</h2>
						<div class="dots-inner"><img src="assets/img/decor-dots.svg" alt=""></div>
					</div>
					<div class="home-about__content">
						<p class="home-about__text">私たちは、子どもたち一人ひとりが持つ<br class="non-md">無限の可能性を信じています。</p>
						<p class="home-about__text">RedF amily では、<br class="non-md">ダンスを通じてその才能を引き出し、<br class="non-md">自信と創造性を育んでいます。</p>
						<p class="home-about__text">当スクールでは、<br class="non-md">子どもたちが自分自身を表現し、<br class="non-md">仲間との絆を深めながら、<br class="non-md">楽しみながら学べる環境を提供しています。</p>
						<p class="home-about__text"> 皆さんのご家族が<br class="non-md">Red Family の一員として加わることを<br class="non-md">心よりお待ちしております。</p>
						<p class="home-about__text"> 一緒に、子どもたちの輝く未来を<br class="non-md">創り上げましょう。</p>
					</div>
					<div class="home-about__btn common-btn">
						<a class="common-btn__inner" href="about/">詳しくみる</a>
					</div>
				</div>
			</div>
			<!-- <div class="shape-top"></div> -->
		</section>

		<section class="sns">
			<div class="shape-top"></div>
			<div class="common">
				<div class="common__inner">
					<div class="home-title">
						<p><img src="" alt=""></p>
						<h2 class="home-title__ja txt-orange">Red Family Instagram</h2>
						<div class="dots-inner"><img src="assets/img/decor-dots.svg" alt=""></div>
					</div>
					<div class="sns__content swiper-wrap">
						<div class="swiper">
							<div class="sns__list swiper-wrapper">
								<div class="sns__img swiper-slide">
									<img src="assets/img/sns-img01.jpg" alt="">
								</div>
								<div class="sns__img swiper-slide">
									<img src="assets/img/sns-img01.jpg" alt="">
								</div>
								<div class="sns__img swiper-slide">
									<img src="assets/img/sns-img01.jpg" alt="">
								</div>
								<div class="sns__img swiper-slide">
									<img src="assets/img/sns-img01.jpg" alt="">
								</div>
								<div class="sns__img swiper-slide">
									<img src="assets/img/sns-img01.jpg" alt="">
								</div>
								<div class="sns__img swiper-slide">
									<img src="assets/img/sns-img01.jpg" alt="">
								</div>

							</div>
							<!-- <div class="swiper-pagination"></div> -->
							<div class="swiper-button-prev"></div>
							<div class="swiper-button-next"></div>
						</div><!-- /.swiper -->
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</div>
			<div class="shape-bottom"></div>
		</section>

		<section class="announce">
			<!-- <div class="shape-bottom"></div> -->
			<div class="announce__inner common">
				<div class="common__inner">
					<div class="home-title">
						<p class="home-title__en">
							<span class="txt-pink">N</span><span class="txt-orange">E</span><span class="txt-green">W</span><span class="txt-pink">S</span>
						</p>
						<h2 class="home-title__ja txt-blue">お知らせ&イベント情報</h2>
						<div class="dots-inner"><img src="assets/img/decor-dots.svg" alt=""></div>
					</div>
					<div class="announce__content">
						<ul class="announce__list">
							<li class="announce__item">
								<p class="announce__date">2024.00.00</p>
								<p class="announce__title">テキストテキストテキストテキスト</p>
							</li>
							<li class="announce__item">
								<p class="announce__date">2024.00.00</p>
								<p class="announce__title">テキストテキストテキストテキスト</p>
							</li>
							<li class="announce__item">
								<p class="announce__date">2024.00.00</p>
								<p class="announce__title">テキストテキストテキストテキスト</p>
							</li>
						</ul>
					</div>
					<div class="announce__btn common-btn">
						<a class="common-btn__inner" href="">もっとみる</a>
					</div>
				</div>
			</div>
			<!-- <div class="shape-top"></div> -->
		</section>

		<section class="lesson">
			<div class="lesson__inner common">
				<div class="common__inner">
					<div class="course">
						<p class="course__img"><img src="assets/img/course-img.jpg" alt=""></p>
						<div class="course__content">
							<div class="home-title course__title-area">
								<div class="dots-inner"><img src="assets/img/decor-dots.svg" alt=""></div>
								<p class="home-title__en">
									<span class="txt-pink">CLASS</span>
								</p>
								<h2 class="home-title__ja txt-pink">レッスン・クラスについて</h2>
							</div>
							<div class="course__text-area">
								<h3 class="course__lead">多様なダンスクラスをご紹介</h3>
								<p class="course__text">
									HIPHOPダンスを中心に、幅広い年齢とレベルを対象としたクラスを展開しています。<br>
									キッドピクスプログラム（親子クラス・こどもクラス）から成人クラスまで、一人ひとりのニーズに合わせたダンスの楽しさを提供します。
								</p>
							</div>
							<div class="course__btn common-btn">
								<a class="common-btn__inner" href="#">もっとみる</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

	<!-- <footer class="footer" id="footer">
		<p class="footer__logo"><img src="assets/img/logo.png" alt=""></p>
		<p class="footer__copyright">Copyright &copy; 2012 RedFamily. All rights reserved</p>
	</footer> -->
<?php
require_once ('include/footer.php');
?>
	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

	<!-- swiper -->
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>

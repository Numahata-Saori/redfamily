<?php
$is_home = true;
$path = './';
?>


<!DOCTYPE html>

<html lang="ja">
<?php
require_once ('include/head.php');
?>
<body>
<?php
require_once ('include/header.php');
?>

	<div class="main-visual">
		<h1 class="main-visual__img">
			<picture>
				<source srcset="assets/img/main-visual_sp.png" alt="" media="(max-width: 767px)">
				<img src="assets/img/main-visual_pc.png" alt="">
			</picture>
		</h1>
	</div>

	<main>
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
						<p class="home-about__text">RedFamilyでは、<br class="non-md">ダンスを通じてその才能を引き出し、<br class="non-md">自信と創造性を育んでいます。</p>
						<p class="home-about__text">当スクールでは、<br class="non-md">子どもたちが自分自身を表現し、<br class="non-md">仲間との絆を深めながら、<br>楽しみながら学べる環境を提供しています。</p>
						<p class="home-about__text"> 皆さんのご家族が<br class="non-md">Red Family の一員として加わることを<br class="non-md">心よりお待ちしております。</p>
						<p class="home-about__text"> 一緒に、子どもたちの輝く未来を<br class="non-md">創り上げましょう。</p>
					</div>
					<div class="about-btn common-btn common-btn-arrow">
						<a class="common-btn__inner" href="about/">詳しくみる</a>
					</div>
				</div>
			</div>
			<!-- <div class="shape-top"></div> -->
		</section>

		<section class="sns" id="up-area">
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
							<!-- <div class="swiper-button-prev"></div>
							<div class="swiper-button-next"></div> -->
						</div><!-- /.swiper -->
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</div>
			<div class="shape-bottom"></div>
		</section><!-- /.sns -->

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
					<div class="announce-btn common-btn common-btn-arrow">
						<a class="common-btn__inner" href="news/">もっとみる</a>
					</div>
				</div>
			</div>
			<!-- <div class="shape-top"></div> -->
		</section><!-- /.announce -->

		<section class="course-instructor">
			<div class="shape-top"></div>
			<div class="common">
				<div class="course-instructor__inner common__inner">
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
							<div class="course-btn common-btn common-btn-arrow">
								<a class="common-btn__inner" href="course/">もっとみる</a>
							</div>
						</div>
					</div><!-- /.course -->
					<div class="instructor">
						<p class="instructor__img"><img src="assets/img/instructor-img.jpg" alt=""></p>
						<div class="instructor__content">
							<div class="home-title instructor__title-area">
								<div class="dots-inner"><img src="assets/img/decor-dots.svg" alt=""></div>
								<p class="home-title__en">
									<span class="txt-orange">INSTRUCTOR</span>
								</p>
								<h2 class="home-title__ja txt-orange">インストラクター紹介</h2>
							</div>
							<div class="lesson__text-area">
								<h3 class="instructor__lead">プロフェッショナルインストラクター</h3>
								<p class="instructor__text">
									当スクールのインストラクターは全員、（社）日本こどもフィットネス協会の認定資格を保有している有資格者です。<br>
									子どもたちの心と体の成長をサポートする専門的な知識と経験を持つ、信頼できるインストラクターたちが、皆さんを暖かく迎え入れます。
								</p>
							</div>
							<div class="instructor-btn common-btn common-btn-arrow">
								<a class="common-btn__inner" href="instructor/">もっとみる</a>
							</div>
						</div>
					</div><!-- /.instructor -->
				</div>
			</div>
			<div class="shape-bottom"></div>
		</section><!-- /.course-instructor -->

		<section class="schedule">
			<div class="common">
				<div class="common__inner">
					<div class="home-title">
						<p class="home-title__en">
						<span class="txt-orange">S</span><span class="txt-blue">C</span><span class="txt-green">H</span><span class="txt-pink">E</span><span class="txt-blue">D</span><span class="txt-green">U</span><span class="txt-pink">L</span><span class="txt-orange">E</span>
						</p>
						<h2 class="home-title__ja txt-pink">STUDIOスケジュール</h2>
						<div class="dots-inner"><img src="assets/img/decor-dots.svg" alt=""></div>
					</div>
					<div class="schedule__content">
						<p class="schedule__desc">最適な環境でダンスを楽しんでいただけるよう、各スタジオの特徴を活かしたクラスを用意しております。</p>
						<div class="schedule__img">
							<a class="js_img-modal" href="assets/img/redfamily_studio-schedule.jpg"><img src="assets/img/redfamily_studio-schedule.jpg" alt=""></a>
						</div>
					</div>
					<div class="schedule__btn-box">
						<div class="schedule-btn-mini common-btn common-btn-arrow">
							<a class="common-btn__inner schedule-btn-mini__inner" href="course/">クラスごとのスケジュールをみる</a>
						</div>
						<div class="schedule-btn-mini common-btn common-btn-arrow">
							<a class="common-btn__inner schedule-btn-mini__inner" href="studio/">スタジオごとのスケジュールをみる</a>
						</div>
					</div>
					<div class="schedule-btn common-btn common-btn-arrow">
						<a class="common-btn__inner schedule-btn__inner" href="contact/">無料体験レッスン<br class="non-md">随時受付中</a>
					</div>
				</div>
			</div>
			<div class="shape-bottom-contact-mini"></div>
		</section><!-- /.schedule -->

<?php
require_once ('include/contact.php');
?>

	</main>

<?php
require_once ('include/footer.php');
?>
	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

	<!-- modaal -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/js/modaal.min.js"></script>

	<!-- swiper -->
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>

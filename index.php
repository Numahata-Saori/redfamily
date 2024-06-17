<?php
// $is_home = true;
$path = './';
$pathChild = 'assets/img/';
$title = 'Red Familyダンススタジオ｜一般社団法人日本こどもフィットネス協会公認クラブ';
$description = '岸和田市のキッズダンス教室・泉佐野市のキッズダンス教室・岸和田市のHIPHOPダンス教室';
?>


<!DOCTYPE html>

<html lang="ja">

<?php
require_once $path . 'include/head.php';
?>

<div class="loading" id="loading">
	<div class="loading-animation" id="loading-animation">
		<div class="loading__text each-text-animation">Red Family</div>
	</div>
</div>

<body>

<?php
require_once $path . 'include/header.php';
?>

	<div class="main-visual">
		<div class="main-visual__inner">
			<div class="main-visual__img-area">
				<div class="main-visual__img01"><img src="<?php echo $path . $pathChild ?>top/main-visual-img01.png" alt=""></div>
				<div class="main-visual__img02"><img src="<?php echo $path . $pathChild ?>top/main-visual-img02.png" alt=""></div>
			</div>
			<div class="main-visual__text-area">
				<p class="main-visual__text-img"><img src="<?php echo $path . $pathChild ?>top/main-visual-text_sp.png" alt=""></p>
				<h1 class="main-visual__text-box">
					<span class="main-visual__text">踊る喜び、育む未来。</span>
					<span class="main-visual__text">こどもたちの才能を解き放つ場所。</span>
				</h1>
			</div>
		</div>
	</div>

	<main>
		<section class="home-about">
			<div class="shape-top--pink-light"></div>
			<div class="home-about__inner common">
				<div class="common__inner">
					<div class="home-title">
						<p class="home-title__en">
							<span class="txt-blue">A</span><span class="txt-orange">B</span><span class="txt-pink">O</span><span class="txt-green">U</span><span class="txt-blue">T</span>
						</p>
						<h2 class="home-title__ja txt-red">RedFamilyについて</h2>
						<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>common/decor-dots.svg" alt=""></div>
					</div>
					<div class="home-about__content">
						<p class="home-about__text">私たちは、こどもたち一人ひとりが持つ<br class="non-lg">無限の可能性を信じています。</p>
						<p class="home-about__text">RedFamilyでは、<br class="non-lg">ダンスを通じてその才能を引き出し、<br class="non-lg">自信と創造性を育んでいます。</p>
						<p class="home-about__text">当スクールでは、<br class="non-lg">こどもたちが自分自身を表現し、<br class="non-lg">仲間との絆を深めながら、<br>楽しみながら学べる環境を提供しています。</p>
						<p class="home-about__text"> 皆さんのご家族が<br class="non-lg">Red Family の一員として加わることを<br class="non-lg">心よりお待ちしております。</p>
						<p class="home-about__text"> 一緒に、こどもたちの輝く未来を<br class="non-lg">創り上げましょう。</p>
					</div>
					<div class="about-btn common-btn common-btn-arrow">
						<a class="common-btn__inner" href="<?php echo $path ?>about/">詳しくみる</a>
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
						<div class="sns__icon-box">
							<p class="sns__icon"><img src="<?php echo $path . $pathChild ?>common/icon-instagram.svg" alt=""></p>
						</div>
						<h2 class="home-title__ja txt-orange">Red Family Instagram</h2>
						<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>common/decor-dots.svg" alt=""></div>
					</div>
					<div class="sns__content swiper-wrap">
						<iframe src="https://dev.quietplus.co.jp/redfamily/dance_stadio_red/" width="100%" height="470px" id="instagram-iframe" frameborder="0" scrolling="no"></iframe>
					</div>
				</div>
			</div>
			<div class="shape-bottom"></div>
		</section><!-- /.sns -->

		<section class="announce">
			<div class="announce__inner common">
				<div class="common__inner">
					<div class="home-title">
						<p class="home-title__en">
							<span class="txt-pink">N</span><span class="txt-orange">E</span><span class="txt-green">W</span><span class="txt-pink">S</span>
						</p>
						<h2 class="home-title__ja txt-blue">お知らせ&イベント情報</h2>
						<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>common/decor-dots.svg" alt=""></div>
					</div>
					<div class="announce__content">
						<ul class="announce__list">
<?php
include $path . 'include/news-data.php';

function sortByDate($a, $b) {
	return strtotime($b['post']) - strtotime($a['post']);
}

usort($newsContentsItem, 'sortByDate');

$latestNews = array_slice($newsContentsItem, 0, 3);

foreach ($latestNews as $newsContentsItemInfo) :
?>
							<li class="announce__item">
								<p class="announce__date"><?php echo $newsContentsItemInfo['post']; ?></p>
								<p class="announce__title"><?php echo $newsContentsItemInfo['title']; ?></p>
							</li>
<?php
endforeach;
?>
						</ul>
					</div>
					<div class="announce-btn common-btn common-btn-arrow">
						<a class="common-btn__inner" href="<?php echo $path ?>news/">もっとみる</a>
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
						<p class="course__img"><img src="<?php echo $path . $pathChild ?>top/course-img.jpg" alt=""></p>
						<div class="course__content">
							<div class="home-title course__title-area">
								<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>common/decor-dots.svg" alt=""></div>
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
								<a class="common-btn__inner" href="<?php echo $path ?>course/">もっとみる</a>
							</div>
						</div>
					</div><!-- /.course -->
					<div class="instructor">
						<p class="instructor__img"><img src="<?php echo $path . $pathChild ?>top/instructor-img.jpg" alt=""></p>
						<div class="instructor__content">
							<div class="home-title instructor__title-area">
								<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>common/decor-dots.svg" alt=""></div>
								<p class="home-title__en">
									<span class="txt-orange">INSTRUCTOR</span>
								</p>
								<h2 class="home-title__ja txt-orange">インストラクター紹介</h2>
							</div>
							<div class="lesson__text-area">
								<h3 class="instructor__lead">プロフェッショナルインストラクター</h3>
								<p class="instructor__text">
									当スクールのインストラクターは全員、（社）日本こどもフィットネス協会の認定資格を保有している有資格者です。<br>
									こどもたちの心と体の成長をサポートする専門的な知識と経験を持つ、信頼できるインストラクターたちが、皆さんを暖かく迎え入れます。
								</p>
							</div>
							<div class="instructor-btn common-btn common-btn-arrow">
								<a class="common-btn__inner" href="<?php echo $path ?>instructor/">もっとみる</a>
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
						<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>common/decor-dots.svg" alt=""></div>
					</div>
					<div class="schedule__content">
						<p class="schedule__desc">最適な環境でダンスを楽しんでいただけるよう、各スタジオの特徴を活かしたクラスを用意しております。</p>
						<div class="schedule__img">
							<a class="js_img-modal" href="<?php echo $path . $pathChild ?>top/redfamily_studio-schedule.jpg"><img src="<?php echo $path . $pathChild ?>top/redfamily_studio-schedule.jpg" alt=""></a>
						</div>
					</div>
					<div class="schedule__btn-box">
						<div class="schedule-btn-mini common-btn common-btn-arrow">
							<a class="common-btn__inner schedule-btn-mini__inner" href="<?php echo $path ?>course/">クラスごとのスケジュールをみる</a>
						</div>
						<div class="schedule-btn-mini common-btn common-btn-arrow">
							<a class="common-btn__inner schedule-btn-mini__inner" href="<?php echo $path ?>studio/">スタジオごとのスケジュールをみる</a>
						</div>
					</div>
					<div class="schedule-btn common-btn common-btn-arrow">
						<a class="common-btn__inner schedule-btn__inner" href="<?php echo $path ?>contact/">無料体験レッスン<br class="non-md">随時受付中</a>
					</div>
				</div>
			</div>
			<div class="shape-bottom--contact"></div>
		</section><!-- /.schedule -->

<?php
require_once $path . 'include/contact-mini.php';
?>

	</main>

<?php
require_once $path . 'include/footer.php';
?>

</body>
</html>

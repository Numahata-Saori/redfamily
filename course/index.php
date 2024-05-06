<?php
$path = '../';
$pathChild = 'assets/img/';
$title = 'レッスン・クラス';
$description = '岸和田市のキッズダンス教室・泉佐野市のキッズダンス教室・岸和田市のHIPHOPダンス教室';
?>

<!DOCTYPE html>

<html lang="ja">
<?php
require_once $path . 'include/head.php';
?>
<body>
<?php
require_once $path . 'include/header.php';
?>

	<main class="child">
		<div class="child-course child-title child-top">
			<div class="child-top__inner">
				<div class="child-title__wrap">
					<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
					<h2 class="child-title__ja"><?php echo $title ?></h2>
					<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
				</div>
				<ul class="breadcrumbs" itemscope itemtype="https://schema.org/BreadcrumbList">
					<li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
						<a class="breadcrumbs__link" itemprop="item" href="<?php echo $path; ?>">
							<span itemprop="name">ホーム</span>
						</a>
						<meta itemprop="position" content="1" />
					</li>
					<li class="breadcrumbs__item"><?php echo $title ?></li>
				</ul>
			</div>
		</div>

		<section class="child-course__main child-main">
			<div class="shape-top--yellow-light"></div>
			<div class="common">
				<div class="course-main child-main__inner common__inner">
					<div class="child-main__img"><img src="<?php echo $path . $pathChild ?>course/main-img.jpg" alt=""></div>
					<p class="child-main__summary">HIPHOPダンスを中心に、幅広い年齢とレベルを対象としたクラスを展開しています。<br>
					キッドピクスプログラム（親子クラス・こどもクラス）から成人クラスまで、一人ひとりのニーズに合わせたダンスの楽しさを提供します。</p>
					<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
					<div class="course-main__banner">
						<picture>
							<source srcset="<?php echo $path . $pathChild ?>campaign_banner_sp@2x.png" alt="" media="(max-width: 767px)">
							<img src="<?php echo $path . $pathChild ?>campaign_banner_pc@2x.png" alt="">
						</picture>
					</div>
					<div class="course-main__btn common-btn common-btn-arrow">
						<a class="common-btn__inner course-main__btn-inner" href="<?php echo $path ?>contact/">ご入会について<br class="non-md">詳しくはこちらから</a>
					</div>
				</div>
			</div>
			<div class="shape-bottom--yellow-light"></div>
		</section>

		<section class="child-course__detail">
			<div class="common">
				<div class="course-detail common__inner">
<?php
// include $path . 'include/course-data.php';

// foreach ($variable as $key => $value) {
// 	# code...
// }

// foreach ($courseDetailItem as $courseDetailItemValue) :

?>
					<!-- <div class="course-detail__content">
						<div class="course-detail__title-area child-sub-title">
							<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
							<h2 class="child-sub-title__ja"><?php echo $courseDetailItemValue['class']; ?></h2>
						</div>
						<div class="course-detail__img">
							<img src="<?php echo $path . $pathChild ?>course/course-img<?php echo $courseDetailItemValue['img']; ?>.jpg" alt="">
						</div>
						<p class="course-detail__text"><?php echo $courseDetailItemValue['text']; ?></p>
						<div class="course-detail__btn common-btn common-btn-arrow">
							<a class="common-btn__inner course-detail__btn-inner" href="<?php echo $path ?>studio/">
								<p>Jスタジオ</p>
								<p>月曜日</p><p>19:00～20:10</p>
							</a>
						</div>
					</div> -->
<?php
// endforeach;
?>

					<div class="course-detail__content">
						<div class="course-detail__title-area child-sub-title">
							<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
							<h2 class="child-sub-title__ja">初めてダンスクラス</h2>
						</div>
						<div class="course-detail__body">
							<div class="course-detail__img">
								<img src="<?php echo $path . $pathChild ?>course/course-img01.jpg" alt="">
							</div>
							<p class="course-detail__text">ダンスに初めて触れる子どもたちのためのクラスです。<br>
							楽しみながらウォームアップからスタートし、基本的なステップとリズム感を育てていきます。遊び心いっぱいで、ダンスの基礎を学びましょう。</p>
						</div>
						<div class="course-detail__list">
							<div class="course-detail__btn common-btn common-btn-arrow">
								<a class="common-btn__inner course-detail__link" href="<?php echo $path ?>studio/">
									<p class="course-detail__name">はつが野1丁目自治会館</p>
									<div class="course-detail__time"><p>月曜日</p><p>16:40～17:25</p></div>
									<p class="course-detail__age">対象：年少～</p>
								</a>
							</div>
							<div class="course-detail__btn common-btn common-btn-arrow">
								<a class="common-btn__inner course-detail__link" href="<?php echo $path ?>studio/">
									<p class="course-detail__name">はつが野5丁目自治会館</p>
									<div class="course-detail__time"><p>土曜日</p><p>15:45～16:30</p></div>
									<p class="course-detail__age">対象：年少～</p>
								</a>
							</div>
							<div class="course-detail__btn common-btn common-btn-arrow">
								<a class="common-btn__inner course-detail__link" href="<?php echo $path ?>studio/">
									<p class="course-detail__name">奈良県五條市宇智体育館</p>
									<div class="course-detail__time"><p>土曜日</p><p>09:30～10:15</p></div>
								</a>
							</div>
							<div class="course-detail__btn common-btn common-btn-arrow">
								<a class="common-btn__inner course-detail__link" href="<?php echo $path ?>studio/">
									<p class="course-detail__name">光明地区公民館</p>
									<div class="course-detail__time"><p>第2・4金曜日</p><p>18:00～18:45</p></div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

<?php
require_once $path . 'include/contact.php';
?>

	</main>

<?php
require_once $path . 'include/footer.php';
?>

</body>
</html>

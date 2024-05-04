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
				<div class="child-title__inner">
					<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
					<h2 class="child-title__ja"><?php echo $title ?></h2>
					<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
				</div>
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

<?php
require_once $path . 'include/contact.php';
?>

	</main>

<?php
require_once $path . 'include/footer.php';
?>

</body>
</html>

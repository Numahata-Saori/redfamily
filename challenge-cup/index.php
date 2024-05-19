<?php
$path = '../';
$pathChild = 'assets/img/';
$title = '全国こども<br class="non-md">チャレンジカップ';
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

	<main class="child child-challenge">
		<div class="child-challenge__top child-title child-top">
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
					<li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
						<a class="breadcrumbs__link" itemprop="item" href="<?php echo $path; ?>challenge-cup/">
							<span itemprop="name"><?php echo strip_tags($title) ?></span>
						</a>
						<meta itemprop="position" content="2" />
					</li>
				</ul>
			</div>
		</div>

		<section class="child-challenge__main child-main">
			<div class="shape-top--yellow-light"></div>
			<div class="common">
				<div class="challenge-main common__inner">
					<div class="child-main__img"><img src="<?php echo $path . $pathChild ?>challenge-cup/main-img.jpg" alt=""></div>

					<div class="challenge-main__btn common-btn common-btn-arrow">
						<a class="challenge-main__link common-btn__inner" href="<?php echo $path ?>course/">全国こどもチャレンジカップ<br class="non-md">最新情報はこちらから</a>
					</div>

					<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>

					<div class="challenge-main__content">
						<div class="child-challenge__title challenge-main__head ribbon-head">次回大会</div>
						<div class="challenge-main__body">
							<div class="child-challenge__title challenge-main__title line-marker"><span>全国こどもチャレンジカップ<br class="non-md">第17回全国大会</span></div>
							<ol class="challenge-main__list">
								<li class="challenge-main__item">
									<p class="challenge-main__subtitle">開催日</p>
									<p class="challenge-main__text">2024年8月3日(土)・4日(日)</p>
								</li>
								<li class="challenge-main__item">
									<p class="challenge-main__subtitle">会場</p>
									<p class="challenge-main__text">カルッツかわさき</p>
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<div class="shape-bottom--yellow-light"></div>
		</section>

		<section class="child-challenge__secondary">
			<div class="common">
				<div class="challenge-secondary common__inner">
					<div class="child-challenge__title challenge-secondary__head ribbon-head">出場</div>

					<div class="challenge-secondary__gallery01">
						<div class="challenge-secondary__img01"><img src="<?php echo $path . $pathChild ?>challenge-cup/secondary-img01.jpg" alt=""></div>
						<div class="challenge-secondary__img02"><img src="<?php echo $path . $pathChild ?>challenge-cup/secondary-img02.jpg" alt=""></div>
					</div>

					<div class="challenge-secondary__gallery02">
						<div class="challenge-secondary__img03"><img src="<?php echo $path . $pathChild ?>challenge-cup/secondary-img03.jpg" alt=""></div>
						<div class="challenge-secondary__gallery03">
							<div class="challenge-secondary__img04"><img src="<?php echo $path . $pathChild ?>challenge-cup/secondary-img04.jpg" alt=""></div>
							<div class="challenge-secondary__img05"><img src="<?php echo $path . $pathChild ?>challenge-cup/secondary-img05.jpg" alt=""></div>
						</div>
					</div>

					<div class="child-challenge__title challenge-secondary__title line-marker"><span>岸和田市長・岸和田市議会議長を<br class="non-md">表敬訪問</span></div>

					<div class="challenge-secondary__gallery04">
						<div class="challenge-secondary__img06"><img src="<?php echo $path . $pathChild ?>challenge-cup/secondary-img06.jpg" alt=""></div>
						<div class="challenge-secondary__img07"><img src="<?php echo $path . $pathChild ?>challenge-cup/secondary-img07.jpg" alt=""></div>
					</div>
				</div>
			</div>
			<div class="shape-bottom--contact"></div>
		</section>

<?php
require_once $path . 'include/contact-mini.php';
?>

	</main>

<?php
require_once $path . 'include/footer.php';
?>

</body>
</html>

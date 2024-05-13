<?php
$path = '../';
$pathChild = 'assets/img/';
$title = 'お知らせ<span class="non-sp non-md">&</span><br class="non-md">イベント情報
';
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
		<div class="child-news child-title child-top">
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
						<a class="breadcrumbs__link" itemprop="item" href="<?php echo $path; ?>news/">
							<span itemprop="name"><?php echo strip_tags($title) ?></span>
						</a>
						<meta itemprop="position" content="2" />
					</li>
				</ul>
			</div>
		</div>

		<section class="child-news__main child-main">
			<div class="common">
				<div class="common__inner">
					<div class="child-main__img"><img src="<?php echo $path . $pathChild ?>news/main-img.jpg" alt=""></div>
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

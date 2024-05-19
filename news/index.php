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
				<div class="child-main__inner common__inner">
					<div class="child-main__img"><img src="<?php echo $path . $pathChild ?>news/main-img.jpg" alt=""></div>

					<div class="news-main">
<?php
include $path . 'include/news-data.php';

function sortByDate($a, $b) {
	return strtotime($b['post']) - strtotime($a['post']);
}

usort($newsContentsItem, 'sortByDate');

$lastIndex = count($newsContentsItem) - 1;

foreach ($newsContentsItem as $index => $newsContentsItemInfo) :
	$hasImg = !empty($newsContentsItemInfo['img']);
	$hasDate = !empty($newsContentsItemInfo['date']);
	$hasPlace = !empty($newsContentsItemInfo['place']);
	$hasAccess = !empty($newsContentsItemInfo['access']);
	$hasPrice = !empty($newsContentsItemInfo['price']);
	$hasComment = !empty($newsContentsItemInfo['comment']);

	if ($hasImg || $hasDate || $hasPlace ||$hasAccess || $hasPrice ||$hasComment) :
?>
						<div class="news-main__content">
							<p class="news-main__post"><?php echo $newsContentsItemInfo['post']; ?></p>

							<p class="news-main__title"><?php echo $newsContentsItemInfo['title']; ?></p>
<?php if ($hasImg) : ?>
							<p class="news-main__img"><img src="<?php echo $path . $pathChild ?>news/news-img<?php echo $newsContentsItemInfo['img']; ?>.jpg" alt=""></p>
<?php endif; ?>

							<ol class="news-main__list">
<?php if ($hasDate) : ?>
								<li class="news-main__item">
									<p class="news-main__subtitle">日時</p>
									<p class="news-main__text"><?php echo $newsContentsItemInfo['date']; ?></p>
								</li>
<?php endif; ?>
<?php if ($hasPlace) : ?>
								<li class="news-main__item">
									<p class="news-main__subtitle">場所</p>
									<p class="news-main__text"><?php echo $newsContentsItemInfo['place']; ?></p>
								</li>
<?php endif; ?>
<?php if ($hasAccess) : ?>
								<li class="news-main__item">
									<p class="news-main__subtitle">アクセス</p>
									<p class="news-main__text"><?php echo $newsContentsItemInfo['access']; ?></p>
								</li>
<?php endif; ?>
							</ol>
<?php if ($hasPrice) : ?>
							<p class="news-main__price"><?php echo $newsContentsItemInfo['price']; ?></p>
<?php endif; ?>
<?php if ($hasComment) : ?>
							<p class="news-main__comment"><?php echo $newsContentsItemInfo['comment']; ?></p>
<?php endif; ?>
						</div>
<?php
		if ($index !== $lastIndex) :
?>
						<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
<?php
		endif;
	endif;
endforeach;
?>
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

<?php
$path = '../';
$pathChild = 'assets/img/';
$title = 'ピアノ教室';
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
		<div class="child-piano child-title child-top">
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
						<a class="breadcrumbs__link" itemprop="item" href="<?php echo $path; ?>piano/">
							<span itemprop="name"><?php echo $title ?></span>
						</a>
						<meta itemprop="position" content="2" />
					</li>
				</ul>
			</div>
		</div>

		<section class="child-piano__main child-main">
			<div class="shape-top--green-light"></div>
			<div class="common">
				<div class="piano-main child-main__inner common__inner">
					<div class="piano-main__hero child-main__img"><img src="<?php echo $path . $pathChild ?>piano/main-img.jpg" alt=""></div>

					<p class="child-main__summary">Red Familyでは、ダンスの世界だけでなく、音楽の才能を伸ばしたいと考えるお子さまに向けて、ピアノ教室も開講しています。<br>ダンスと音楽は表現の豊かさを共有しており、ピアノを学ぶことで、リズム感や感性をさらに磨き上げることができます。</p>

					<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>

					<div class="piano-main__catch-box">
						<p class="piano-main__catch">音楽とダンスを通じて、<br class="non-md">子どもたちの無限の可能性を引き出し、豊かな感性を育むことを目指しています。</p>
						<p class="piano-main__catch">ピアノの素晴らしい世界へ<br class="non-md">一緒に踏み出しましょう。</p>
					</div>

					<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>

					<div class="piano-main__content">
						<div class="piano-main__hero child-main__img"><img src="<?php echo $path . $pathChild ?>piano/piano-img01.jpg" alt=""></div>
						<div class="piano-main__body">
							<div class="piano-main__head child-sub-title">
								<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
								<h2 class="piano-main__title child-sub-title__ja">個々のレベルに合わせた指導</h2>
							</div>
							<p class="piano-main__text">初心者から経験者まで、一人ひとりのスキルレベルに合わせた丁寧な指導を心がけています。</p>
						</div>
					</div>

					<div class="piano-main__content">
						<div class="piano-main__hero child-main__img"><img src="<?php echo $path . $pathChild ?>piano/piano-img02.jpg" alt=""></div>
						<div class="piano-main__body">
							<div class="piano-main__head child-sub-title">
								<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
								<h2 class="piano-main__title child-sub-title__ja">楽しみながら学ぶ</h2>
							</div>
							<p class="piano-main__text">音楽の基本から、楽しく学べるようなカリキュラムを提供しています。<br class="non-sp">演奏技術だけでなく、音楽を感じ取り、楽しむ心も育みます。</p>
						</div>
					</div>
				</div>
			</div>
			<div class="shape-bottom--green-light"></div>
		</section>

		<section class="child-piano__secondary">
			<div class="common">
				<div class="piano-secondary common__inner">
					<div class="piano-secondary__title child-sub-title">
						<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
						<h2 class="child-sub-title__ja">ご入会について</h2>
					</div>

					<p class="piano-secondary__text">ピアノ教室への入会をご希望の方、入会費や月謝、レッスンスケジュールなどは<br class="non-sp">Red Family までお気軽にお問い合わせください。</p>

					<div class="piano-secondary__btn common-btn common-btn-arrow">
						<a class="piano-secondary__link common-btn__inner" href="<?php echo $path ?>contact/">ご入会について<br class="non-md">詳しくはこちらから</a>
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

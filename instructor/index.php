<?php
$path = '../';
$pathChild = 'assets/img/';
$title = 'インストラクター';
$description = '説明（Events ページ）';
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
		<div class="child-instructor child-title child-top">
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

		<section class="child-instructor__main child-main">
			<div class="shape-top--yellow-light"></div>
			<div class="common">
				<div class="instructor-main child-main__inner common__inner">
					<div class="child-main__img"><img src="<?php echo $path . $pathChild ?>instructor/main-img.jpg" alt=""></div>
					<p class="child-main__summary">当スクールのインストラクターは全員（社）日本こどもフィットネス協会の認定資格を保有している有資格者です。<br>
					子どもたちの心と体の成長をサポートする専門的な知識と経験を持つ、信頼できるインストラクターたちが、皆さんを暖かく迎え入れます。</p>
					<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
					<div class="child-main__head">
						<p class="child-main__view">プロフィール詳細をみる</p>
						<p class="child-main__note">クリックするとプロフィール詳細が確認できます！</p>
					</div>
					<ol class="instructor-main__list">
						<li class="instructor-main__item">
							<a class="instructor-main__link" href="#yurika">
								<img class="instructor-main__img" src="<?php echo $path . $pathChild ?>instructor/instructor-yurika.jpg" alt="">
								<p class="instructor-main__name">YURIKA</p>
							</a>
						</li>
						<li class="instructor-main__item">
							<a class="instructor-main__link" href="#miwako">
								<img class="instructor-main__img" src="<?php echo $path . $pathChild ?>instructor/instructor-miwako.jpg" alt="">
								<p class="instructor-main__name">MIWAKO</p>
							</a>
						</li>
						<li class="instructor-main__item">
							<a class="instructor-main__link" href="#natsuki">
								<img class="instructor-main__img" src="<?php echo $path . $pathChild ?>instructor/instructor-natsuki.jpg" alt="">
								<p class="instructor-main__name">NATSUKI</p>
							</a>
						</li>
						<li class="instructor-main__item">
							<a class="instructor-main__link" href="#yukie">
								<img class="instructor-main__img" src="<?php echo $path . $pathChild ?>instructor/instructor-yukie.jpg" alt="">
								<p class="instructor-main__name">YUKIE</p>
							</a>
						</li>
						<li class="instructor-main__item">
							<a class="instructor-main__link" href="#sachiyo">
								<img class="instructor-main__img" src="<?php echo $path . $pathChild ?>instructor/instructor-sachiyo.jpg" alt="">
								<p class="instructor-main__name">SACHIYO</p>
							</a>
						</li>
						<li class="instructor-main__item">
							<a class="instructor-main__link" href="#kirara">
								<img class="instructor-main__img" src="<?php echo $path . $pathChild ?>instructor/instructor-kirara.jpg" alt="">
								<p class="instructor-main__name">KIRARA</p>
							</a>
						</li>
					</ol>
				</div>
			</div>
			<div class="shape-bottom--yellow-light"></div>
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

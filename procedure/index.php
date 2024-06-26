<?php
$path = '../';
$pathChild = 'assets/img/';
$title = 'ご入会・各種手続き';
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
		<div class="child-procedure child-title child-top">
			<div class="child-top__inner">
				<div class="child-title__wrap">
					<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>common/decor-dots.svg" alt=""></div>
					<h1 class="child-title__ja"><?php echo $title ?></h1>
					<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>common/decor-dots.svg" alt=""></div>
				</div>
				<ul class="breadcrumbs" itemscope itemtype="https://schema.org/BreadcrumbList">
					<li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
						<a class="breadcrumbs__link" itemprop="item" href="<?php echo $path; ?>">
							<span itemprop="name">ホーム</span>
						</a>
						<meta itemprop="position" content="1" />
					</li>
					<li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
						<a class="breadcrumbs__link" itemprop="item" href="<?php echo $path; ?>procedure/">
							<span itemprop="name"><?php echo strip_tags($title) ?></span>
						</a>
						<meta itemprop="position" content="2" />
					</li>
				</ul>
			</div>
		</div>

		<section class="child-procedure__main child-main">
			<div class="shape-top--orange-light"></div>
			<div class="common">
				<div class="procedure-main child-main__inner common__inner">
					<div class="child-main__img"><img src="<?php echo $path . $pathChild ?>procedure/main-img.jpg" alt="入会届を記入する様子"></div>

					<p class="child-main__summary"><span class="emphasis--corporate">Red Family</span>へのご入会をご検討いただき、ありがとうございます。<br>当スクールでは、<span class="emphasis">ダンス</span>を愛するすべてのこどもたちに、<span class="emphasis">楽しく学べる環境</span>を提供しています。</p>

					<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>common/decor-dots.svg" alt=""></div>

					<div class="course-main__banner">
						<picture>
							<source srcset="<?php echo $path . $pathChild ?>campaign_banner_sp@2x.png" media="(max-width: 767px)">
							<img src="<?php echo $path . $pathChild ?>campaign_banner_pc@2x.png" alt="キャンペーン実施中">
						</picture>
					</div>

					<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>common/decor-dots.svg" alt=""></div>

					<div class="campaign">
						<div class="campaign__content">
							<div class="campaign__item">
								<p class="campaign__head">入会費</p>
								<div class="campaign__body">
									<div class="campaign__body-inner">
										<p class="campaign__info">\キャンペーン中/</p>
										<div class="campaign__price-box">
											<p class="campaign__price"><span class="font-min price-emphasis">0</span>円</p>
											<p class="campaign__before"><span class="font-min">5,000</span>円</p>
										</div>
									</div>
								</div>
							</div>
							<div class="campaign__item">
								<p class="campaign__head">月謝</p>
								<div class="campaign__body">
									<div class="campaign__body-inner">
										<p class="campaign__price"><span class="font-min price-emphasis">5,000</span>円</p>
									</div>
								</div>
							</div>
							<p class="campaign__note">「初めてダンスクラス」 週１回の場合</p>
						</div>
						<p class="campaign__text">選択されるクラスや施設によって異なりますので、お気軽にお問い合わせください。</p>
					</div>

					<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>common/decor-dots.svg" alt=""></div>

					<div class="join">
						<div class="join__content">
							<div class="join__btn common-btn common-btn-arrow">
								<a class="common-btn__inner" href="<?php echo $path ?>assets/pdf/membership-terms.pdf" target="_blank">Red Family 会員規約</a>
							</div>
							<p class="join__text">ご入会に際しては、「会員規約」に<br class="non-md">ご同意いただく必要があります。</p>
						</div>
						<div class="join__content">
							<div class="join__btn common-btn common-btn-arrow">
								<a class="common-btn__inner" href="<?php echo $path ?>assets/pdf/01_admission-report.pdf" target="_blank">入会届兼誓約書</a>
							</div>
							<p class="join__text">「入会届兼誓約書」をダウンロードし<br class="non-md">必要事項をご記入ください。</p>
						</div>
					</div>

					<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>common/decor-dots.svg" alt=""></div>

					<div class="belongings">
						<div class="belongings__content">
							<p class="belongings__title">入会時にお持ちいただくもの</p>
							<ol class="belongings__list">
								<li class="belongings__item">
									<p class="belongings__detail">入会金</p>
								</li>
								<li class="belongings__item">
									<p class="belongings__detail">月謝</p>
								</li>
								<li class="belongings__item">
									<div class="belongings__item-inner">
										<p class="belongings__detail">入会届兼誓約書</p>
										<p class="belongings__note">ダウンロードして事前にご記入いただくか、または入会時にご記入いただけます。</p>
									</div>
								</li>
							</ol>
						</div>
						<div class="belongings__info">
							<p class="belongings__text">ご入会を希望される場合は、<br class="non-md">まずはお問い合わせからご連絡ください。</p>
							<p class="belongings__text">ご連絡いただければ、クラス選択のご相談や、<br class="non-md">ご不明点について詳しくご説明いたします。</p>
							<p class="belongings__text">その後、入会手続きのための<br class="non-md">ご案内をさせていただきます。</p>
						</div>
					</div>

					<div class="procedure-main__btn common-btn common-btn-arrow">
						<a class="common-btn__inner" href="<?php echo $path ?>contact/">お問い合わせ</a>
					</div>
				</div>
			</div>
			<div class="shape-bottom--orange-light"></div>
		</section>

		<section class="child-procedure__secondary">
			<div class="common">
				<div class="procedure-secondary common__inner">
					<div class="procedure-secondary__title child-sub-title">
						<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>common/decor-dots.svg" alt=""></div>
						<h2 class="child-sub-title__ja">退会・休会について</h2>
					</div>

					<p class="procedure-secondary__text"><span class="emphasis--corporate">Red Family</span>では、会員の皆様のライフスタイルの変化に柔軟に対応できるよう、<br class="sp">退会だけでなく一時休会の選択肢も提供しています。<br>学業や健康上の理由、または一時的にダンスから離れたいというご希望にも、<br class="sp">柔軟に対応できるようサポートしています。<br>退会や休会を検討されている場合も、どうぞお気軽にお問い合わせください。</p>

					<div class="procedure-secondary__content">
						<h3 class="procedure-secondary__subtitle">各種書類ダウンロード</h3>
						<div class="procedure-secondary__btn-box">
							<div class="procedure-secondary__btn common-btn common-btn-arrow">
								<a class="common-btn__inner" href="<?php echo $path ?>assets/pdf/02_notice-of-withdrawal.pdf" target="_blank">退会届</a>
							</div>
							<div class="procedure-secondary__btn common-btn common-btn-arrow">
								<a class="common-btn__inner" href="<?php echo $path ?>assets/pdf/03_notice-of-adjournment.pdf" target="_blank">休会届</a>
							</div>
						</div>
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

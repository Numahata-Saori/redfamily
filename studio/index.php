<?php
$path = '../';
$pathChild = 'assets/img/';
$title = 'スタジオ';
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
		<div class="child-studio child-title child-top">
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
						<a class="breadcrumbs__link" itemprop="item" href="<?php echo $path; ?>studio/">
							<span itemprop="name"><?php echo $title ?></span>
						</a>
						<meta itemprop="position" content="2" />
					</li>
				</ul>
			</div>
		</div>

		<section class="child-studio__main child-main">
			<div class="shape-top--orange-light"></div>
			<div class="common">
				<div class="studio-main common__inner">
					<div class="child-main__head">
						<p class="child-main__view">スタジオ詳細をみる</p>
						<p class="child-main__note">クリックするとスタジオ詳細が確認できます！</p>
					</div>
					<div class="studio-main__content">
						<div class="studio-main__title child-sub-title">
							<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
							<h2 class="child-sub-title__ja">岸和田・和泉</h2>
						</div>
						<ol class="studio-main__list">
							<li class="studio-main__item">
								<a class="studio-main__link jstutio" href="<?php echo $path ?>studio/"><p class="studio-main__name">Jスタジオ</p></a>
							</li>
							<li class="studio-main__item">
								<a class="studio-main__link nishiojimachi" href="<?php echo $path ?>studio/"><p class="studio-main__name">西大路町町会館</p></a>
							</li>
							<li class="studio-main__item">
								<a class="studio-main__link hatsugano1" href="<?php echo $path ?>studio/"><p class="studio-main__name">はつが野1丁目<br class="non-md">自治会館</p></a>
							</li>
							<li class="studio-main__item">
								<a class="studio-main__link hatsugano5" href="<?php echo $path ?>studio/"><p class="studio-main__name">はつが野5丁目<br class="non-md">自治会館</p></a>
							</li>
							<li class="studio-main__item">
								<a class="studio-main__link peoplechild" href="<?php echo $path ?>studio/"><p class="studio-main__name">光明地区公民館</p></a>
							</li>
							<li class="studio-main__item">
								<a class="studio-main__link midorigaoka" href="<?php echo $path ?>studio/"><p class="studio-main__name">緑ヶ丘自治会館<span>（シラックアカデミー）</span></p></a>
							</li>
						</ol>
					</div>
					<div class="studio-main__content">
						<div class="studio-main__title child-sub-title">
							<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
							<h2 class="child-sub-title__ja">泉佐野　泉南</h2>
						</div>
						<ol class="studio-main__list">
							<li class="studio-main__item">
								<a class="studio-main__link chonan" href="<?php echo $path ?>studio/"><p class="studio-main__name">長南公民館</p></a>
							</li>
							<li class="studio-main__item">
								<a class="studio-main__link tajiri" href="<?php echo $path ?>studio/"><p class="studio-main__name">田尻ふれ愛<br class="non-md">センター</p></a>
							</li>
							<li class="studio-main__item">
								<a class="studio-main__link izumisano" href="<?php echo $path ?>studio/"><p class="studio-main__name">泉佐野<br class="non-md">生涯学習センター</p></a>
							</li>
						</ol>
					</div>
					<div class="studio-main__content">
						<div class="studio-main__title child-sub-title">
							<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
							<h2 class="child-sub-title__ja">五條</h2>
						</div>
						<ol class="studio-main__list gojo">
							<li class="studio-main__item">
								<a class="studio-main__link gojo" href="<?php echo $path ?>studio/"><p class="studio-main__name">宇智体育館<br>（五條）</p></a>
							</li>
						</ol>
					</div>
				</div>
			</div>
			<div class="shape-bottom--orange-light"></div>
		</section>

		<section class="child-studio__detail">
			<div class="common">
				<div class="studio-detail common__inner">
					<div class="studio-detail__content">
						<div class="studio-detail__head">岸和田・和泉</div>
						<div class="studio-detail__item">
							<div class="child-sub-title">
								<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
								<h2 class="child-sub-title__ja">Jスタジオ</h2>
							</div>
							<div class="studio-detail__map-wrap">
								<div class="studio-detail__map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3289.3731060002888!2d135.38770511221!3d34.468058095546056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000c5ec704e43b7%3A0xb6fd4cb8381541e8!2z44CSNTk2LTAwNDQg5aSn6Ziq5bqc5bK45ZKM55Sw5biC6KW_5LmL5YaF55S677yT77yZ4oiS77yT77yZ!5e0!3m2!1sja!2sjp!4v1715011335594!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
								<div class="studio-detail__address">
									<div class="studio-address">
										<div class="studio-address__head">
											<p class="studio-address__text">所在地</p>
										</div>
										<div class="studio-address__data">
											<div class="studio-address__data-inner">
												<p class="studio-address__text">〒596-0044</p>
												<p class="studio-address__text">岸和田市西之内町39-39</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="studio-detail__schedule">
								<table class="studio-schedule">
									<tr class="studio-schedule__head">
										<th class="studio-schedule__day">月曜日</th>
										<th class="studio-schedule__day">水曜日</th>
										<th class="studio-schedule__day">木曜日</th>
									</tr>
									<tr class="studio-schedule__subhead">
										<td class="studio-schedule__class01" colspan="3">初級クラス</td>
									</tr>
									<tr class="studio-schedule__body">
										<td class="studio-schedule__data">
											<p class="studio-schedule__time01">17:00～17:45</p>
											<p class="studio-schedule__name">インストラクター<br>Natsuki</p>
										</td>
										<td class="studio-schedule__none"></td>
										<td class="studio-schedule__data">
											<p class="studio-schedule__time01">18:30～19:30</p>
											<p class="studio-schedule__name">インストラクター<br>Natsuki</p>
										</td>
									</tr>
									<tr class="studio-schedule__subhead">
										<td class="studio-schedule__class02" colspan="3">スキルアップクラス</td>
									</tr>
									<tr class="studio-schedule__body">
										<td class="studio-schedule__none"></td>
										<td class="studio-schedule__data">
											<p class="studio-schedule__time02">18:00～19:10</p>
											<p class="studio-schedule__name">インストラクター<br>Natsuki</p>
										</td>
										<td class="studio-schedule__none"></td>
									</tr>
									<tr class="studio-schedule__subhead">
										<td class="studio-schedule__class01" colspan="3">上級クラス</td>
									</tr>
									<tr class="studio-schedule__body">
										<td class="studio-schedule__data">
											<p class="studio-schedule__time01">19:00～20:10</p>
											<p class="studio-schedule__name">インストラクター<br>Natsuki</p>
										</td>
										<td class="studio-schedule__none"></td>
										<td class="studio-schedule__none"></td>
									</tr>
								</table>
								<table class="studio-schedule">
									<tr class="studio-schedule__head">
										<th class="studio-schedule__day">第2・4 土曜日</th>
									</tr>
									<tr class="studio-schedule__subhead">
										<td class="studio-schedule__class02">コアトレ&エアロビクス基礎</td>
									</tr>
									<tr class="studio-schedule__body">
										<td class="studio-schedule__data">
											<p class="studio-schedule__time02">19:00～20:10</p>
											<p class="studio-schedule__name">インストラクター<br>Natsuki</p>
										</td>
									</tr>
								</table>
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

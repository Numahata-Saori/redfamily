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
							<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>common/decor-dots.svg" alt=""></div>
							<p class="child-sub-title__ja">岸和田・和泉</p>
						</div>
						<ol class="studio-main__list">
							<li class="studio-main__item">
								<a class="studio-main__link jstutio" href="#jstutio"><p class="studio-main__name">Jスタジオ</p></a>
							</li>
							<li class="studio-main__item">
								<a class="studio-main__link nishiojimachi" href="#nishiojimachi"><p class="studio-main__name">西大路町会館</p></a>
							</li>
							<li class="studio-main__item">
								<a class="studio-main__link hatsugano1" href="#hatsugano1"><p class="studio-main__name">はつが野1丁目<br class="non-md">自治会館</p></a>
							</li>
							<li class="studio-main__item">
								<a class="studio-main__link hatsugano5" href="#hatsugano5"><p class="studio-main__name">はつが野5丁目<br class="non-md">自治会館</p></a>
							</li>
							<li class="studio-main__item">
								<a class="studio-main__link peoplechild" href="#peoplechild"><p class="studio-main__name">光明地区公民館</p></a>
							</li>
							<li class="studio-main__item">
								<a class="studio-main__link midorigaoka" href="#midorigaoka"><p class="studio-main__name">緑ヶ丘自治会館</p></a>
							</li>
						</ol>
					</div>
					<div class="studio-main__content">
						<div class="studio-main__title child-sub-title">
							<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>common/decor-dots.svg" alt=""></div>
							<p class="child-sub-title__ja">泉佐野　泉南</p>
						</div>
						<ol class="studio-main__list">
							<li class="studio-main__item">
								<a class="studio-main__link chonan" href="#chonan"><p class="studio-main__name">長南公民館</p></a>
							</li>
							<li class="studio-main__item">
								<a class="studio-main__link tajiri" href="#tajiri"><p class="studio-main__name">田尻ふれ愛<br class="non-md">センター</p></a>
							</li>
							<li class="studio-main__item">
								<a class="studio-main__link izumisano" href="#izumisano"><p class="studio-main__name">泉佐野<br class="non-md">生涯学習センター</p></a>
							</li>
						</ol>
					</div>
					<div class="studio-main__content">
						<div class="studio-main__title child-sub-title">
							<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>common/decor-dots.svg" alt=""></div>
							<p class="child-sub-title__ja">五條</p>
						</div>
						<ol class="studio-main__list gojo">
							<li class="studio-main__item">
								<a class="studio-main__link gojo" href="#gojo"><p class="studio-main__name">宇智体育館<br>（五條）</p></a>
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
						<h2 class="studio-detail__head">岸和田・和泉</h2>

						<div class="studio-detail__item" id="jstutio">
							<div class="child-sub-title">
								<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>common/decor-dots.svg" alt=""></div>
								<h3 class="child-sub-title__ja">Jスタジオ</h3>
							</div>
							<div class="studio-detail__map-wrap">
								<div class="studio-detail__map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d822.3434187589509!2d135.3897359156338!3d34.468043656668684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000c5ec704e43b7%3A0xb6fd4cb8381541e8!2z44CSNTk2LTAwNDQg5aSn6Ziq5bqc5bK45ZKM55Sw5biC6KW_5LmL5YaF55S677yT77yZ4oiS77yT77yZ!5e0!3m2!1sja!2sjp!4v1716303338430!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
										<td class="studio-schedule__class01">コアトレ&エアロビクス基礎</td>
									</tr>
									<tr class="studio-schedule__body">
										<td class="studio-schedule__data">
											<p class="studio-schedule__time01">19:00～20:10</p>
											<p class="studio-schedule__name">インストラクター<br>Miwako</p>
										</td>
									</tr>
									<tr class="studio-schedule__head">
										<th class="studio-schedule__day">水曜日</th>
									</tr>
									<tr class="studio-schedule__subhead">
										<td class="studio-schedule__class01">ZUMBAクラス（チケット制）</td>
									</tr>
									<tr class="studio-schedule__body">
										<td class="studio-schedule__data">
											<p class="studio-schedule__time01">19:30～20:20</p>
											<p class="studio-schedule__name">インストラクター<br>Yurika</p>
										</td>
									</tr>
								</table>
							</div>
						</div>

						<div class="studio-detail__item" id="nishiojimachi">
							<div class="child-sub-title">
								<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>common/decor-dots.svg" alt=""></div>
								<h3 class="child-sub-title__ja">西大路町会館</h3>
							</div>
							<div class="studio-detail__map-wrap">
								<div class="studio-detail__map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1162.921756624978!2d135.4106496280939!3d34.47144961974057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000c5827c9593bd%3A0x7d43c3944a201cd4!2z44CSNTk2LTA4MDIg5aSn6Ziq5bqc5bK45ZKM55Sw5biC6KW_5aSn6Lev55S677yR77yR4oiS77yR!5e0!3m2!1sja!2sjp!4v1716303261890!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
								<div class="studio-detail__address">
									<div class="studio-address">
										<div class="studio-address__head">
											<p class="studio-address__text">所在地</p>
										</div>
										<div class="studio-address__data">
											<div class="studio-address__data-inner">
												<p class="studio-address__text">〒596-0802</p>
												<p class="studio-address__text">大阪府岸和田市西大路町11-1</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="studio-detail__schedule">
								<table class="studio-schedule">
									<tr class="studio-schedule__head">
										<th class="studio-schedule__day">土曜日</th>
									</tr>
									<tr class="studio-schedule__subhead">
										<td class="studio-schedule__class01">初級クラス</td>
									</tr>
									<tr class="studio-schedule__body">
										<td class="studio-schedule__data">
											<p class="studio-schedule__time01">16:30～17:15</p>
											<p class="studio-schedule__name">インストラクター<br>Natsuki</p>
										</td>
									</tr>
									<tr class="studio-schedule__subhead">
										<td class="studio-schedule__class02">スキルアップクラス</td>
									</tr>
									<tr class="studio-schedule__body">
										<td class="studio-schedule__data">
											<p class="studio-schedule__time02">17:15～18:15</p>
											<p class="studio-schedule__name">インストラクター<br>Natsuki</p>
										</td>
									</tr>
								</table>
							</div>
						</div>

						<div class="studio-detail__item" id="hatsugano1">
							<div class="child-sub-title">
								<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>common/decor-dots.svg" alt=""></div>
								<h3 class="child-sub-title__ja">はつが野1丁目自治会館</h3>
							</div>
							<div class="studio-detail__map-wrap">
								<div class="studio-detail__map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d978.197016675758!2d135.46551202100895!3d34.44581496785615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000d1185ba8e265%3A0x89bbe9dfad5f6274!2z44Gv44Gk44GM6YeO6Ieq5rK75Lya6aSo!5e0!3m2!1sja!2sjp!4v1716303110789!5m2!1sja!2sjp"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
								<div class="studio-detail__address">
									<div class="studio-address">
										<div class="studio-address__head">
											<p class="studio-address__text">所在地</p>
										</div>
										<div class="studio-address__data">
											<div class="studio-address__data-inner">
												<p class="studio-address__text">〒594-1106</p>
												<p class="studio-address__text">大阪府和泉市はつが野1丁目32-27</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="studio-detail__schedule">
								<table class="studio-schedule">
									<tr class="studio-schedule__head">
										<th class="studio-schedule__day">月曜日</th>
									</tr>
									<tr class="studio-schedule__subhead">
										<td class="studio-schedule__class01">初めてダンスクラス</td>
									</tr>
									<tr class="studio-schedule__body">
										<td class="studio-schedule__data">
											<p class="studio-schedule__time01">16:40～17:25</p>
											<p class="studio-schedule__name">インストラクター<br>Yurika</p>
										</td>
									</tr>
									<tr class="studio-schedule__subhead">
										<td class="studio-schedule__class02">初中級クラス</td>
									</tr>
									<tr class="studio-schedule__body">
										<td class="studio-schedule__data">
											<p class="studio-schedule__time02">17:30～18:15</p>
											<p class="studio-schedule__name">インストラクター<br>Yurika</p>
										</td>
									</tr>
								</table>
							</div>
						</div>

						<div class="studio-detail__item" id="hatsugano5">
							<div class="child-sub-title">
								<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>common/decor-dots.svg" alt=""></div>
								<h3 class="child-sub-title__ja">はつが野5丁目自治会館</h3>
							</div>
							<div class="studio-detail__map-wrap">
								<div class="studio-detail__map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1163.404725062527!2d135.46378591821545!3d34.4367749961578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000d1deb6a9dc69%3A0x686ddadaffe4e52b!2z44Gv44Gk44GM6YeO77yV5LiB55uu6Ieq5rK75Lya6aSo!5e0!3m2!1sja!2sjp!4v1716301362314!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
								<div class="studio-detail__address">
									<div class="studio-address">
										<div class="studio-address__head">
											<p class="studio-address__text">所在地</p>
										</div>
										<div class="studio-address__data">
											<div class="studio-address__data-inner">
												<p class="studio-address__text">〒594-1106</p>
												<p class="studio-address__text">大阪府和泉市はつが野5丁目14</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="studio-detail__schedule">
								<table class="studio-schedule">
									<tr class="studio-schedule__head">
										<th class="studio-schedule__day">土曜日</th>
									</tr>
									<tr class="studio-schedule__subhead">
										<td class="studio-schedule__class01">初めてダンスクラス</td>
									</tr>
									<tr class="studio-schedule__body">
										<td class="studio-schedule__data">
											<p class="studio-schedule__time01">15:45～16:30</p>
											<p class="studio-schedule__name">インストラクター<br>Yurika</p>
										</td>
									</tr>
									<tr class="studio-schedule__subhead">
										<td class="studio-schedule__class02">初中級クラス</td>
									</tr>
									<tr class="studio-schedule__body">
										<td class="studio-schedule__data">
											<p class="studio-schedule__time02">16:30～17:15</p>
											<p class="studio-schedule__name">インストラクター<br>Yurika</p>
										</td>
									</tr>
								</table>
							</div>
						</div>

						<div class="studio-detail__item" id="peoplechild">
							<div class="child-sub-title">
								<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>common/decor-dots.svg" alt=""></div>
								<h3 class="child-sub-title__ja">光明地区公民館</h3>
							</div>
							<div class="studio-detail__map-wrap">
								<div class="studio-detail__map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d822.6034471733342!2d135.41037137113895!3d34.44164263498082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000cf0993ad47df%3A0xe8cfd994d038460c!2z5YWJ5piO5Zyw5Yy65YWs5rCR6aSo!5e0!3m2!1sja!2sjp!4v1716303049851!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
								<div class="studio-detail__address">
									<div class="studio-address">
										<div class="studio-address__head">
											<p class="studio-address__text">所在地</p>
										</div>
										<div class="studio-address__data">
											<div class="studio-address__data-inner">
												<p class="studio-address__text">〒596-0816</p>
												<p class="studio-address__text">大阪府岸和田市尾生町1231-3</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="studio-detail__schedule">
								<table class="studio-schedule">
									<tr class="studio-schedule__head">
										<th class="studio-schedule__day">第2・4金曜日</th>
									</tr>
									<tr class="studio-schedule__subhead">
										<td class="studio-schedule__class01">初めてダンスクラス</td>
									</tr>
									<tr class="studio-schedule__body">
										<td class="studio-schedule__data">
											<p class="studio-schedule__time01">17:45～18:30</p>
											<p class="studio-schedule__name">インストラクター<br>Yurika</p>
										</td>
									</tr>
								</table>
							</div>
						</div>

						<div class="studio-detail__item" id="midorigaoka">
							<div class="child-sub-title">
								<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>common/decor-dots.svg" alt=""></div>
								<h3 class="child-sub-title__ja">緑ヶ丘自治会館（シラックアカデミー）</h3>
							</div>
							<div class="studio-detail__map-wrap">
								<div class="studio-detail__map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1163.2250496163676!2d135.45647618185916!3d34.449678332485306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000d1d2d019b437%3A0x3d8cb0a1e35e80a!2z44CSNTk0LTExNTUg5aSn6Ziq5bqc5ZKM5rOJ5biC57eR44Kx5LiY77yR5LiB55uu77yR77yQ4oiS77yRIOe3keODtuS4mOiHquayu-S8mumkqA!5e0!3m2!1sja!2sjp!4v1716302992615!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
								<div class="studio-detail__address">
									<div class="studio-address">
										<div class="studio-address__head">
											<p class="studio-address__text">所在地</p>
										</div>
										<div class="studio-address__data">
											<div class="studio-address__data-inner">
												<p class="studio-address__text">〒594-1155</p>
												<p class="studio-address__text">大阪府和泉市緑ケ丘1丁目10-1</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="studio-detail__schedule">
								<table class="studio-schedule">
									<tr class="studio-schedule__head">
										<th class="studio-schedule__day">火曜日</th>
									</tr>
									<tr class="studio-schedule__subhead">
										<td class="studio-schedule__class01">中級クラス</td>
									</tr>
									<tr class="studio-schedule__body">
										<td class="studio-schedule__data">
											<p class="studio-schedule__time01">18:05～18:50</p>
											<p class="studio-schedule__name">インストラクター<br>Natsuki</p>
										</td>
									</tr>
								</table>
							</div>
						</div>

						<h2 class="studio-detail__head">泉佐野・泉南</h2>

						<div class="studio-detail__item" id="chonan">
							<div class="child-sub-title">
								<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>common/decor-dots.svg" alt=""></div>
								<h3 class="child-sub-title__ja">長南公民館</h3>
							</div>
							<div class="studio-detail__map-wrap">
								<div class="studio-detail__map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d582.0581642218211!2d135.30343011307562!3d34.38562972873425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000c82934806df9%3A0xaa5764cc8bb50b5d!2z5YWs5rCR6aSo5LqL5qWt!5e0!3m2!1sja!2sjp!4v1716302156429!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
								<div class="studio-detail__address">
									<div class="studio-address">
										<div class="studio-address__head">
											<p class="studio-address__text">所在地</p>
										</div>
										<div class="studio-address__data">
											<div class="studio-address__data-inner">
												<p class="studio-address__text">〒598-0035</p>
												<p class="studio-address__text">大阪府泉佐野市南中樫井1</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="studio-detail__schedule">
								<table class="studio-schedule">
									<tr class="studio-schedule__head">
										<th class="studio-schedule__day">水曜日</th>
										<th class="studio-schedule__day">金曜日</th>
									</tr>
									<tr class="studio-schedule__subhead">
										<td class="studio-schedule__class01" colspan="2">スキルアップクラス</td>
									</tr>
									<tr class="studio-schedule__body">
										<td class="studio-schedule__data">
											<p class="studio-schedule__time01">19:00～20:00</p>
											<p class="studio-schedule__name">インストラクター<br>Kirara</p>
										</td>
										<td class="studio-schedule__data">
											<p class="studio-schedule__time01">18:30～19:30</p>
											<p class="studio-schedule__name">インストラクター<br>Kirara</p>
										</td>
									</tr>
								</table>
							</div>
						</div>

						<div class="studio-detail__item" id="tajiri">
							<div class="child-sub-title">
								<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>common/decor-dots.svg" alt=""></div>
								<h3 class="child-sub-title__ja">田尻ふれ愛センター</h3>
							</div>
							<div class="studio-detail__map-wrap">
								<div class="studio-detail__map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d823.0505015806053!2d135.28877926963008!3d34.396211104928234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000b7ef5cac7c19%3A0x70ccddf7a5915d0f!2z44G144KM5oSb44K744Oz44K_44O8!5e0!3m2!1sja!2sjp!4v1716302022407!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
								<div class="studio-detail__address">
									<div class="studio-address">
										<div class="studio-address__head">
											<p class="studio-address__text">所在地</p>
										</div>
										<div class="studio-address__data">
											<div class="studio-address__data-inner">
												<p class="studio-address__text">〒598-0091</p>
												<p class="studio-address__text">大阪府泉南郡田尻町嘉祥寺883-1</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="studio-detail__schedule">
								<table class="studio-schedule">
									<tr class="studio-schedule__head">
										<th class="studio-schedule__day">月2回 土曜日</th>
									</tr>
									<tr class="studio-schedule__subhead">
										<td class="studio-schedule__class01">初級クラス</td>
									</tr>
									<tr class="studio-schedule__body">
										<td class="studio-schedule__data">
											<p class="studio-schedule__time01">9:30～10:15</p>
											<p class="studio-schedule__name">インストラクター<br>Natsuki</p>
										</td>
									</tr>
									<tr class="studio-schedule__subhead">
										<td class="studio-schedule__class02">初中級クラス</td>
									</tr>
									<tr class="studio-schedule__body">
										<td class="studio-schedule__data">
											<p class="studio-schedule__time02">10:15～11:15</p>
											<p class="studio-schedule__name">インストラクター<br>Natsuki</p>
										</td>
									</tr>
								</table>
							</div>
						</div>

						<div class="studio-detail__item" id="izumisano">
							<div class="child-sub-title">
								<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>common/decor-dots.svg" alt=""></div>
								<h3 class="child-sub-title__ja">泉佐野生涯学習センター</h3>
							</div>
							<div class="studio-detail__map-wrap">
								<div class="studio-detail__map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d822.9700756304734!2d135.3266923696301!3d34.40438820481993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000c85ccb42b68f%3A0x324fe5b4a5e6fc5e!2z44Os44Kk44Kv44Ki44Or44K544K_44O844OX44Op44K244O744Kr44Ov44K144Kt55Sf5rav5a2m57-S44K744Oz44K_44O877yI5rOJ5L2Q6YeO5biC56uL55Sf5rav5a2m57-S44K744Oz44K_44O877yJ!5e0!3m2!1sja!2sjp!4v1716301857660!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
								<div class="studio-detail__address">
									<div class="studio-address">
										<div class="studio-address__head">
											<p class="studio-address__text">所在地</p>
										</div>
										<div class="studio-address__data">
											<div class="studio-address__data-inner">
												<p class="studio-address__text">〒598-0005</p>
												<p class="studio-address__text">大阪府泉佐野市市場東1丁目295-1</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="studio-detail__schedule">
								<table class="studio-schedule">
									<tr class="studio-schedule__head">
										<th class="studio-schedule__day">土曜日</th>
									</tr>
									<tr class="studio-schedule__subhead">
										<td class="studio-schedule__class01">初級クラス</td>
									</tr>
									<tr class="studio-schedule__body">
										<td class="studio-schedule__data">
											<p class="studio-schedule__time01">16:20～17:05</p>
											<p class="studio-schedule__name">インストラクター<br>Yukie</p>
										</td>
									</tr>
									<tr class="studio-schedule__subhead">
										<td class="studio-schedule__class02">中上級クラス</td>
									</tr>
									<tr class="studio-schedule__body">
										<td class="studio-schedule__data">
											<p class="studio-schedule__time02">15:20～16:20</p>
											<p class="studio-schedule__name">インストラクター<br>Yukie</p>
										</td>
									</tr>
								</table>
							</div>
						</div>

						<h2 class="studio-detail__head">五條</h2>

						<div class="studio-detail__item" id="gojo">
							<div class="child-sub-title">
								<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>common/decor-dots.svg" alt=""></div>
								<h3 class="child-sub-title__ja">奈良県 五條市宇智体育館</h3>
							</div>
							<div class="studio-detail__map-wrap">
								<div class="studio-detail__map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1384.758695398234!2d135.6985625916035!3d34.362443405382805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6006d1148bf11035%3A0x44cbed1a6c695685!2z44CSNjM3LTAwOTIg5aWI6Imv55yM5LqU5qKd5biC5bKh55S677yZ77yY77yZ!5e0!3m2!1sja!2sjp!4v1716302881685!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
								<div class="studio-detail__address">
									<div class="studio-address">
										<div class="studio-address__head">
											<p class="studio-address__text">所在地</p>
										</div>
										<div class="studio-address__data">
											<div class="studio-address__data-inner">
												<p class="studio-address__text">〒637-0092</p>
												<p class="studio-address__text">奈良県五條市岡町989番地</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="studio-detail__schedule">
								<table class="studio-schedule">
									<tr class="studio-schedule__head">
										<th class="studio-schedule__day">土曜日</th>
									</tr>
									<tr class="studio-schedule__subhead">
										<td class="studio-schedule__class01">初めてダンスクラス</td>
									</tr>
									<tr class="studio-schedule__body">
										<td class="studio-schedule__data">
											<p class="studio-schedule__time01">9:30～10:05</p>
											<p class="studio-schedule__name">インストラクター<br>Yurika</p>
										</td>
									</tr>
									<tr class="studio-schedule__subhead">
										<td class="studio-schedule__class02">中級クラス</td>
									</tr>
									<tr class="studio-schedule__body">
										<td class="studio-schedule__data">
											<p class="studio-schedule__time02">10:15～11:00</p>
											<p class="studio-schedule__name">インストラクター<br>Yurika</p>
										</td>
									</tr>
									<tr class="studio-schedule__subhead">
										<td class="studio-schedule__class01">スキルアップクラス</td>
									</tr>
									<tr class="studio-schedule__body">
										<td class="studio-schedule__data">
											<p class="studio-schedule__time01">11:00～12:00</p>
											<p class="studio-schedule__name">インストラクター<br>Yurika</p>
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

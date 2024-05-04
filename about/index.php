<?php
$path = '../';
$pathChild = 'assets/img/';
$title = 'Red Familyについて';
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
		<div class="child-about child-title child-top">
			<div class="child-top__inner">
				<div class="child-title__inner">
					<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
					<h2 class="child-title__ja"><?php echo $title ?></h2>
					<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
				</div>
			</div>
		</div>

		<section class="child-about__main">
			<div class="shape-top--pink-light"></div>
			<div class="common">
				<div class="about-main common__inner">
					<div class="about-main__img"><img src="<?php echo $path . $pathChild ?>about/child-about_main-img.jpg" alt=""></div>
					<p class="about-main__summary">大阪府泉州地域を拠点に、HIPHOPダンスを中心に、幼児から成人までを対象としたキッドビクスプログラムを含む多様なクラスを提供している Red Family。<br>
					私たちは、一般社団法人日本こどもフィットネス協会の理念に共鳴し、子どもたちが元気に成長することを目指しています。<br>
					ダンスを通じて、社会性、家族の絆、思いやり、健康的なライフスタイル、運動能力の向上、そしてダンス技術の向上といった無限の可能性を子どもたちに提供します。</p>
				</div>
			</div>
			<div class="shape-bottom--pink-light"></div>
		</section>

		<section class="child-about__secondary">
			<div class="common">
				<div class="about-secondary common__inner">
					<div class="about-secondary__img">
						<img src="<?php echo $path . $pathChild ?>about/child-about_secondary-img.jpg" alt="">
					</div>
					<ul class="about-secondary__list">
						<li class="about-secondary__item">
							<p class="about-secondary__icon"><img src="<?php echo $path . $pathChild ?>about/child-about_secondary-icon01.svg" alt=""></p>
							<p class="about-secondary__text">元気に挨拶が<br>できるようになる</p>
						</li>
						<li class="about-secondary__item">
							<p class="about-secondary__icon"><img src="<?php echo $path . $pathChild ?>about/child-about_secondary-icon02.svg" alt=""></p>
							<p class="about-secondary__text">友達との<br>仲間意識が芽生える</p>
						</li>
						<li class="about-secondary__item">
							<p class="about-secondary__icon"><img src="<?php echo $path . $pathChild ?>about/child-about_secondary-icon03.svg" alt=""></p>
							<p class="about-secondary__text">思いやりの気持ちが<br>強くなる</p>
						</li>
						<li class="about-secondary__item">
							<p class="about-secondary__icon"><img src="<?php echo $path . $pathChild ?>about/child-about_secondary-icon04.svg" alt=""></p>
							<p class="about-secondary__text">家族の絆が深まる</p>
						</li>
						<li class="about-secondary__item">
							<p class="about-secondary__icon"><img src="<?php echo $path . $pathChild ?>about/child-about_secondary-icon05.svg" alt=""></p>
							<p class="about-secondary__text">からだを動かすことが<br>好きになる</p>
						</li>
						<li class="about-secondary__item">
							<p class="about-secondary__icon"><img src="<?php echo $path . $pathChild ?>about/child-about_secondary-icon06.svg" alt=""></p>
							<p class="about-secondary__text">運動能力が向上する</p>
						</li>
						<li class="about-secondary__item">
							<p class="about-secondary__icon"><img src="<?php echo $path . $pathChild ?>about/child-about_secondary-icon07.svg" alt=""></p>
							<p class="about-secondary__text">大好きなダンスを<br>もっと上手になりたい</p>
						</li>
					</ul>
					<p class="about-secondary__summary">当スクールのインストラクターは、㈳日本こどもフィットネス協会の認定資格をはじめ、障害者スポーツ指導者、ハワイアンフラ講師、健康運動実践指導者など、多岐にわたる資格を持つ専門家です。<br>
					基礎から応用まで、質の高い指導を行い、生徒一人ひとりがダンスの楽しさとともに技術を磨くことができるようサポートします。</p>
					<div class="about-secondary__btn common-btn common-btn-arrow">
						<a class="common-btn__inner" href="course/">レッスン・クラスについて</a>
					</div>
				</div>
			</div>
		</section>

		<section class="child-about__presentation">
			<div class="shape-top--pink-light"></div>
			<div class="common">
				<div class="presentation common__inner">
					<div class="presentation__title-area child-sub-title">
						<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
						<h2 class="presentation__title"><span class="presentation__emphasis txt-orange">毎年３月</span>には一年に一度の大舞台<br class="non-xl">「<span class="presentation__emphasis txt-orange">Dance発表会</span>」が開催されます!</h2>
					</div>
					<p class="presentation__note">過去の Red Family ダンス発表会</p>
					<ul class="presentation__list">
<?php
/**
 * ポスターを新規追加する場合は、$presentationItem内配列の下へ配列データを追加してください。
 * 'img' => '01' 画像(dance_recital_01.jpg)の末番号(dance_recital_01.jpgであれば01)を入力してください
 * 'number' => 1, 第1回の場合は1と入力してください
 * 'year' => 2009, 開催年度を入力してください
 *
 */
$presentationItem = [
	[
		'img' => '01',
		'number' => 1,
		'year' => 2009,
	],
	[
		'img' => '02',
		'number' => 2,
		'year' => 2010,
	],
	[
		'img' => '03',
		'number' => 3,
		'year' => 2011,
	],
	[
		'img' => '04',
		'number' => 4,
		'year' => 2012,
	],
	[
		'img' => '05',
		'number' => 5,
		'year' => 2013,

	],
	[
		'img' => '06',
		'number' => 6,
		'year' => 2014,
	],
	[
		'img' => '07',
		'number' => 7,
		'year' => 2015,
	],
	[
		'img' => '08',
		'number' => 8,
		'year' => 2016,
	],
	[
		'img' => '09',
		'number' => 9,
		'year' => 2017,
	],
	[
		'img' => '10',
		'number' => 10,
		'year' => 2018,
	],
	[
		'img' => '11',
		'number' => 11,
		'year' => 2019,
	],
	[
		'img' => '12',
		'number' => 12,
		'year' => 2020,
	],
	[
		'img' => '13',
		'number' => 13,
		'year' => 2021,
	],
	[
		'img' => '14',
		'number' => 14,
		'year' => 2022,
	],
	[
		'img' => '15',
		'number' => 15,
		'year' => 2023,
	],
	[
		'img' => '16',
		'number' => 16,
		'year' => 2024,
	],
];
foreach ($presentationItem as $presentationItemValue) :
?>
						<li class="presentation__item">
							<a class="js_img-modal" href="<?php echo $path . $pathChild ?>about/dance_recital_<?php echo $presentationItemValue['img']; ?>.jpg">
								<img src="<?php echo $path . $pathChild ?>about/dance_recital_<?php echo $presentationItemValue['img']; ?>.jpg" alt="">
								<p class="presentation__text">第<?php echo $presentationItemValue['number']; ?>回/<?php echo $presentationItemValue['year']; ?>年</p>
							</a>
						</li>
<?php
endforeach;
?>
					</ul>
				</div>
			</div>
		</section>

		<section class="child-about__representative">
			<div class="shape-top--orange-light"></div>
			<div class="common">
				<div class="representative common__inner">
					<div class="representative__img">
						<img src="<?php echo $path . $pathChild ?>about/representative-img.jpg" alt="">
					</div>
					<div class="representative__content">
						<p class="representative__title">キッズダンススタジオ <span class="representative__emphasis">Red Family</span></p>
						<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
						<p class="representative__address">〒596-0803<br>大阪府岸和田市東大路町 288</p>
						<div class="representative__tel-box">
							<p class="representative__tel">TEL:072-443-8116</p>
							<p class="representative__tel">FAX:072-443-8116</p>
						</div>
						<p class="representative__name">代表 赤阪 由合香</p>
					</div>
				</div>
			</div>
			<div class="shape-bottom--yellow-light"></div>
		</section>

		<section class="child-about__nursery-school">
			<div class="common">
				<div class="nursery-school common__inner">
					<div class="nursery-school__title-area child-sub-title">
						<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
						<h2 class="nursery-school__title child-sub-title__ja">認定こども園・保育園事業</h2>
					</div>
					<div class="nursery-school__main">
						<div class="nursery-school__gallery">
							<img src="<?php echo $path . $pathChild ?>about/child-about_nursery-school-img01.png" alt="">
							<img src="<?php echo $path . $pathChild ?>about/child-about_nursery-school-img02.png" alt="">
						</div>
						<div class="nursery-school__box">
							<ul class="nursery-school__list">
								<ol class="nursery-school__item nursery-school-icon">
									<p class="nursery-school__text">岸和田 八木こども園 1</p>
								</ol>
								<ol class="nursery-school__item nursery-school-icon">
									<p class="nursery-school__text">岸和田 八木こども園 2</p>
								</ol>
								<ol class="nursery-school__item nursery-school-icon">
									<p class="nursery-school__text">和泉 キッズマユミ</p>
								</ol>
								<ol class="nursery-school__item nursery-school-icon">
									<p class="nursery-school__text">奈良 ちべん保育園</p>
								</ol>
							</ul>
						</div>
					</div>
					<div class="nursery-school__secondary">
						<div class="nursery-school__title-area child-sub-title">
							<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
							<h2 class="nursery-school__title child-sub-title__ja">課外ダンス</h2>
						</div>
						<div class="nursery-school__box">
							<ul class="nursery-school__list">
								<ol class="nursery-school__item nursery-school-icon">
									<p class="nursery-school__text">岸和田 ピープル久米田</p>
								</ol>
								<ol class="nursery-school__item nursery-school-icon">
									<p class="nursery-school__text">岸和田 ピープル八木南</p>
								</ol>
								<ol class="nursery-school__item nursery-school-icon">
									<p class="nursery-school__text">岸和田 ピープル大芝</p>
								</ol>
								<ol class="nursery-school__item nursery-school-icon">
									<p class="nursery-school__text">忠岡 ピープル忠岡</p>
								</ol>
								<ol class="nursery-school__item nursery-school-icon">
									<p class="nursery-school__text">和泉 キッズマユミ</p>
								</ol>
								<ol class="nursery-school__item nursery-school-icon">
									<p class="nursery-school__text">奈良 ちべん保育園</p>
								</ol>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="child-about__parent-child">
			<div class="shape-top--yellow-light"></div>
			<div class="common">
				<div class="parent-child common__inner">
					<div class="parent-child__main">
						<div class="parent-child__gallery">
							<div class="parent-child__img01">
								<img src="<?php echo $path . $pathChild ?>about/child-about_parent-child-img01.jpg" alt="">
							</div>
							<div class="parent-child__img02">
								<img src="<?php echo $path . $pathChild ?>about/child-about_parent-child-img02.jpg" alt="">
							</div>
							<div class="parent-child__img03">
								<img src="<?php echo $path . $pathChild ?>about/child-about_parent-child-img03.jpg" alt="">
							</div>
							<div class="parent-child__img04">
								<img src="<?php echo $path . $pathChild ?>about/child-about_parent-child-img04.jpg" alt="">
							</div>
						</div>
						<div class="parent-child__title-area child-sub-title">
							<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
							<h2 class="child-sub-title__ja">岸和田市民講座</h2>
						</div>
						<ul class="parent-child__list">
							<ol class="parent-child__item">
								<h3 class="parent-child__name">葛城地区公民館</h3>
								<div class="parent-child__detail">
									<p class="parent-child__text">親子リズム体操（親子）</p>
									<p class="parent-child__text">キッドビクス（年中～小６）</p>
								</div>
							</ol>
							<ol class="parent-child__item">
								<h3 class="parent-child__name">光明池区民会館</h3>
								<div class="parent-child__detail">
									<p class="parent-child__text">親子リズム体操（親子）</p>
								</div>
							</ol>
							<ol class="parent-child__item">
								<h3 class="parent-child__name">山滝地区公民館</h3>
								<div class="parent-child__detail">
									<p class="parent-child__text">キッドビクス（年中～小６）</p>
									<p class="parent-child__text">なつめろ体操（成人）</p>
								</div>
							</ol>
						</ul>
					</div>
					<div class="parent-child__secondary">
						<div class="parent-child__title-area child-sub-title">
							<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
							<h2 class="child-sub-title__ja">岸和田市民講座</h2>
						</div>
						<ul class="parent-child__list">
							<ol class="parent-child__item">
								<h3 class="parent-child__name">光明池区民会館</h3>
								<div class="parent-child__detail">
									<p class="parent-child__text">フラダンス</p>
								</div>
							</ol>
							<ol class="parent-child__item">
								<h3 class="parent-child__name">光明池区民会館</h3>
								<div class="parent-child__detail">
									<p class="parent-child__text">エアロビクス（成人）</p>
									<p class="parent-child__text">フラダンス（成人）</p>
									<p class="parent-child__text">脳トレ筋トレ楽トレ（成人）</p>
								</div>
							</ol>
						</ul>
					</div>
				</div>
			</div>
			<div class="shape-bottom--green-light"></div>
		</section>

		<section class="child-about__piano-recruitment">
			<div class="common">
				<div class="piano-recruitment common__inner">
					<div class="piano-recruitment__title-area child-sub-title">
						<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
						<h2 class="child-sub-title__ja">ピアノ教室随時生徒募集中！</h2>
					</div>
					<div class="piano-recruitment__img"><img src="<?php echo $path . $pathChild ?>about/child-about_piano-recruitment-img.jpeg" alt=""></div>
					<p class="piano-recruitment__text">Red Familyでは、ダンスの世界だけでなく、音楽の才能を伸ばしたいと考えるお子さまに向けて、ピアノ教室も開講しています。<br>
					ダンスと音楽は表現の豊かさを共有しており、ピアノを学ぶことで、リズム感や感性をさらに磨き上げることができます。</p>
					<div class="piano-recruitment__btn common-btn common-btn-arrow">
						<a class="common-btn__inner" href="piano/">ピアノ教室について</a>
					</div>
				</div>
			</div>
			<div class="shape-bottom--contact-mini"></div>
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

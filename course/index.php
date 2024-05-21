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

	<main class="child child-course">
		<div class="child-course__top child-title child-top">
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
						<a class="breadcrumbs__link" itemprop="item" href="<?php echo $path; ?>course/">
							<span itemprop="name"><?php echo $title ?></span>
						</a>
						<meta itemprop="position" content="2" />
					</li>
				</ul>
			</div>
		</div>

		<section class="child-course__main child-main">
			<div class="shape-top--yellow-light"></div>
			<div class="common">
				<div class="course-main child-main__inner common__inner">
					<div class="child-main__img"><img src="<?php echo $path . $pathChild ?>course/main-img.jpg" alt="レッスンの様子"></div>

					<p class="child-main__summary">HIPHOPダンスを中心に、幅広い年齢とレベルを対象としたクラスを展開しています。<br>キッドピクスプログラム（親子クラス・こどもクラス）から成人クラスまで、一人ひとりのニーズに合わせたダンスの楽しさを提供します。</p>

					<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>

					<div class="course-main__banner">
						<picture>
							<source srcset="<?php echo $path . $pathChild ?>campaign_banner_sp@2x.png" media="(max-width: 767px)">
							<img src="<?php echo $path . $pathChild ?>campaign_banner_pc@2x.png" alt="キャンペーン実施中">
						</picture>
					</div>

					<div class="course-main__btn common-btn common-btn-arrow">
						<a class="course-main__link common-btn__inner" href="<?php echo $path ?>contact/">ご入会について<br class="non-md">詳しくはこちらから</a>
					</div>
				</div>
			</div>
			<div class="shape-bottom--yellow-light"></div>
		</section>

		<section class="child-course__detail">
			<div class="common">
				<div class="course-detail common__inner">

					<div class="course-detail__content">
						<div class="course-detail__title-area child-sub-title">
							<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
							<h2 class="child-sub-title__ja">初めてダンスクラス</h2>
						</div>

						<div class="course-detail__body">
							<div class="course-detail__img">
								<img src="<?php echo $path . $pathChild ?>course/course-img01.jpg" alt="初めてダンスクラス">
							</div>
							<p class="course-detail__text">ダンスに初めて触れる子どもたちのためのクラスです。<br>楽しみながらウォームアップからスタートし、基本的なステップとリズム感を育てていきます。遊び心いっぱいで、ダンスの基礎を学びましょう。</p>
						</div>

						<div class="course-detail__list">
							<div class="course-detail__btn common-btn common-btn-arrow">
								<a class="common-btn__inner course-detail__link" href="<?php echo $path ?>studio/">
									<p class="course-detail__name">はつが野1丁目自治会館</p>
									<div class="course-detail__time"><p>月曜日</p><p>16:40～17:25</p></div>
									<p class="course-detail__age">対象：年少～</p>
								</a>
							</div>
							<div class="course-detail__btn common-btn common-btn-arrow">
								<a class="common-btn__inner course-detail__link" href="<?php echo $path ?>studio/">
									<p class="course-detail__name">はつが野5丁目自治会館</p>
									<div class="course-detail__time"><p>土曜日</p><p>15:45～16:30</p></div>
									<p class="course-detail__age">対象：年少～</p>
								</a>
							</div>
							<div class="course-detail__btn common-btn common-btn-arrow">
								<a class="common-btn__inner course-detail__link" href="<?php echo $path ?>studio/">
									<p class="course-detail__name">奈良県五條市宇智体育館</p>
									<div class="course-detail__time"><p>土曜日</p><p>09:30～10:15</p></div>
								</a>
							</div>
							<div class="course-detail__btn common-btn common-btn-arrow new-mark">
								<a class="common-btn__inner course-detail__link" href="<?php echo $path ?>studio/">
									<p class="course-detail__name">光明地区公民館</p>
									<div class="course-detail__time"><p>第2・4金曜日</p><p>18:00～18:45</p></div>
								</a>
							</div>
						</div>
					</div>

					<div class="course-detail__content">
						<div class="course-detail__title-area child-sub-title">
							<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
							<h2 class="child-sub-title__ja">初級クラス</h2>
						</div>

						<div class="course-detail__body">
							<div class="course-detail__img">
								<img src="<?php echo $path . $pathChild ?>course/course-img02.jpg" alt="初級クラス">
							</div>
							<p class="course-detail__text">初級クラスでは、ダンスの基本を一歩進んで学びます。<br>「ダンスをより楽しむための」技術と振り付けを、楽しさ溢れるレッスンを通じて習得します。楽しみながらダンススキルを向上させ、より自信を持って踊れるようになります。</p>
						</div>

						<div class="course-detail__list">
							<div class="course-detail__btn common-btn common-btn-arrow">
								<a class="common-btn__inner course-detail__link" href="<?php echo $path ?>studio/">
									<p class="course-detail__name">Jスタジオ</p>
									<div class="course-detail__time-box">
										<div class="course-detail__time"><p>月曜日</p><p>17:00～17:45</p></div>
										<div class="course-detail__time"><p>木曜日</p><p>17:20～18:20</p></div>
									</div>
								</a>
							</div>
							<div class="course-detail__btn common-btn common-btn-arrow">
								<a class="common-btn__inner course-detail__link" href="<?php echo $path ?>studio/">
									<p class="course-detail__name">西大路町町会館</p>
									<div class="course-detail__time"><p>土曜日</p><p>16:30～17:15</p></div>
								</a>
							</div>
							<div class="course-detail__btn common-btn common-btn-arrow">
								<a class="common-btn__inner course-detail__link" href="<?php echo $path ?>studio/">
									<p class="course-detail__name">泉佐野生涯学習センター</p>
									<div class="course-detail__time"><p>土曜日</p><p>16:20～17:05</p></div>
								</a>
							</div>
							<div class="course-detail__btn common-btn common-btn-arrow">
								<a class="common-btn__inner course-detail__link" href="<?php echo $path ?>studio/">
									<p class="course-detail__name">田尻ふれ愛センター</p>
									<div class="course-detail__time"><p>月2回 土曜日</p><p>09:30～10:15</p></div>
								</a>
							</div>
						</div>
					</div>

					<div class="course-detail__content">
						<div class="course-detail__title-area child-sub-title">
							<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
							<h2 class="child-sub-title__ja">初中級クラス</h2>
						</div>

						<div class="course-detail__body">
							<div class="course-detail__img">
								<img src="<?php echo $path . $pathChild ?>course/course-img03.jpg" alt="初中級クラス">
							</div>
							<p class="course-detail__text">初中級クラスは、基本的なダンス技術を既に習得している方向けのクラスです。<br>より複雑な振り付けやテクニックに挑戦し、表現力と技術の幅を広げていきます。ダンスに対する理解を深め、次のレベルへのステップアップを目指します。</p>
						</div>

						<div class="course-detail__list">
							<div class="course-detail__btn common-btn common-btn-arrow">
								<a class="common-btn__inner course-detail__link" href="<?php echo $path ?>studio/">
									<p class="course-detail__name">はつが野1丁目自治会館</p>
									<div class="course-detail__time"><p>月曜日</p><p>17:30～18:15</p></div>
								</a>
							</div>
							<div class="course-detail__btn common-btn common-btn-arrow">
								<a class="common-btn__inner course-detail__link" href="<?php echo $path ?>studio/">
									<p class="course-detail__name">はつが野5丁目自治会館</p>
									<div class="course-detail__time"><p>土曜日</p><p>16:30～17:15</p></div>
								</a>
							</div>
							<div class="course-detail__btn common-btn common-btn-arrow">
								<a class="common-btn__inner course-detail__link" href="<?php echo $path ?>studio/">
									<p class="course-detail__name">田尻ふれ愛センター</p>
									<div class="course-detail__time"><p>月2回 土曜日</p><p>10:15～11:15</p></div>
								</a>
							</div>
						</div>
					</div>

					<div class="course-detail__content">
						<div class="course-detail__title-area child-sub-title">
							<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
							<h2 class="child-sub-title__ja">中級クラス</h2>
						</div>

						<div class="course-detail__body">
							<div class="course-detail__img">
								<img src="<?php echo $path . $pathChild ?>course/course-img04.jpg" alt="中級クラス">
							</div>
							<p class="course-detail__text">中級クラスでは、更なる技術向上を目指し、複雑な振り付けに挑戦します。<br>多様なジャンルを経験しながら自身のダンススタイルを探求し、表現力を磨き上げることを目標にしています。ダンサーとしての体力と持久力も鍛えます。</p>
						</div>

						<div class="course-detail__list">
							<div class="course-detail__btn common-btn common-btn-arrow">
								<a class="common-btn__inner course-detail__link" href="<?php echo $path ?>studio/">
									<p class="course-detail__name">Jスタジオ</p>
									<div class="course-detail__time-box">
										<div class="course-detail__time"><p>月曜日</p><p>17:50～18:50</p></div>
										<div class="course-detail__time"><p>木曜日</p><p>18:30～19:30</p></div>
									</div>
								</a>
							</div>
							<div class="course-detail__btn common-btn common-btn-arrow">
								<a class="common-btn__inner course-detail__link" href="<?php echo $path ?>studio/">
									<p class="course-detail__name">緑ヶ丘自治会館</p>
									<div class="course-detail__time"><p>火曜日</p><p>18:05～18:50</p></div>
								</a>
							</div>
							<div class="course-detail__btn common-btn common-btn-arrow">
								<a class="common-btn__inner course-detail__link" href="<?php echo $path ?>studio/">
									<p class="course-detail__name">奈良県五條市宇智体育館</p>
									<div class="course-detail__time"><p>土曜日</p><p>10:15～11:00</p></div>
								</a>
							</div>
						</div>
					</div>

					<div class="course-detail__content">
						<div class="course-detail__title-area child-sub-title">
							<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
							<h2 class="child-sub-title__ja">スキルアップクラス</h2>
						</div>

						<div class="course-detail__body">
							<div class="course-detail__img">
								<img src="<?php echo $path . $pathChild ?>course/course-img05.jpg" alt="スキルアップクラス">
							</div>
							<p class="course-detail__text">スキルアップクラスは、基本的なダンス技術を既に習得している方向けのクラスです。<br>より複雑な振り付けやテクニックに挑戦し、表現力と技術の幅を広げていきます。ダンスに対する理解を深め、次のレベルへのステップアップを目指します。</p>
						</div>

						<div class="course-detail__list">
							<div class="course-detail__btn common-btn common-btn-arrow">
								<a class="common-btn__inner course-detail__link" href="<?php echo $path ?>studio/">
									<p class="course-detail__name">Jスタジオ</p>
									<div class="course-detail__time"><p>水曜日</p><p>18:00～19:10</p></div>
								</a>
							</div>
							<div class="course-detail__btn common-btn common-btn-arrow">
								<a class="common-btn__inner course-detail__link" href="<?php echo $path ?>studio/">
									<p class="course-detail__name">長南公民館</p>
									<div class="course-detail__time-box">
										<div class="course-detail__time"><p>水曜日</p><p>19:00～20:00</p></div>
										<div class="course-detail__time"><p>金曜日</p><p>18:30～19:30</p></div>
									</div>
								</a>
							</div>
							<div class="course-detail__btn common-btn common-btn-arrow">
								<a class="common-btn__inner course-detail__link" href="<?php echo $path ?>studio/">
									<p class="course-detail__name">西大路町会館</p>
									<div class="course-detail__time"><p>土曜日</p><p>17:15～18:15</p></div>
								</a>
							</div>
							<div class="course-detail__btn common-btn common-btn-arrow">
								<a class="common-btn__inner course-detail__link" href="<?php echo $path ?>studio/">
									<p class="course-detail__name">奈良県五條市宇智体育館</p>
									<div class="course-detail__time"><p>土曜日</p><p>11:00～12:00</p></div>
								</a>
							</div>
						</div>
					</div>

					<div class="course-detail__content">
						<div class="course-detail__title-area child-sub-title">
							<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
							<h2 class="child-sub-title__ja">中上級クラス</h2>
						</div>

						<div class="course-detail__body">
							<div class="course-detail__img">
								<img src="<?php echo $path . $pathChild ?>course/course-img06.jpg" alt="中上級クラス">
							</div>
							<p class="course-detail__text">中上級クラスは、高度なテクニックと表現力のさらなる向上を求めるダンサーのためのクラスです。<br>専門的なスキル習得に加え、創造性を発展させる振り付けに挑戦。ダンサーとしての個性を磨き、集団パフォーマンスにおけるリーダーシップを育成します。</p>
						</div>

						<div class="course-detail__list--only">
							<div class="course-detail__btn common-btn common-btn-arrow">
								<a class="common-btn__inner course-detail__link" href="<?php echo $path ?>studio/">
									<p class="course-detail__name">泉佐野生涯学習センター</p>
									<div class="course-detail__time"><p>土曜日</p><p>15:20～16:20</p></div>
								</a>
							</div>
						</div>
					</div>

					<div class="course-detail__content">
						<div class="course-detail__title-area child-sub-title">
							<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
							<h2 class="child-sub-title__ja">上級クラス</h2>
						</div>

						<div class="course-detail__body">
							<div class="course-detail__img">
								<img src="<?php echo $path . $pathChild ?>course/course-img07.jpg" alt="上級クラス">
							</div>
							<p class="course-detail__text">上級クラスは、大会、コンテスト、イベントなどに多数参加し、毎年多数のチームが全国こどもチャレンジカップを含む全国大会に出場しています。<br>競技レベルでのパフォーマンスを目指し、高度な技術と表現力を磨き上げます。チームワークと個々の才能を最大限に発揮するための環境を提供します。</p>
						</div>

						<div class="course-detail__list--only">
							<div class="course-detail__btn common-btn common-btn-arrow">
								<a class="common-btn__inner course-detail__link" href="<?php echo $path ?>studio/">
									<p class="course-detail__name">Jスタジオ</p>
									<div class="course-detail__time"><p>月曜日</p><p>19:00～20:10</p></div>
								</a>
							</div>
						</div>
					</div>

					<div class="course-detail__content">
						<div class="course-detail__title-area child-sub-title">
							<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
							<h2 class="course-detail__title child-sub-title__ja">コアトレ＆<br class="non-md">エアロビクス基礎</h2>
						</div>

						<div class="course-detail__body--aerobics">
							<div class="course-detail__img">
								<img src="<?php echo $path . $pathChild ?>course/course-img08.jpg" alt="コアトレ＆エアロビクス基礎">
							</div>
						</div>

						<div class="course-detail__list--only">
							<div class="course-detail__btn common-btn common-btn-arrow">
								<a class="common-btn__inner course-detail__link" href="<?php echo $path ?>studio/">
									<p class="course-detail__name">Jスタジオ</p>
									<div class="course-detail__time"><p>第2・4土曜日</p><p>19:00～20:00</p></div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="child-course__secondary">
			<div class="shape-top--yellow-light"></div>
			<div class="common">
				<div class="course-secondary common__inner">
					<div class="course-secondary__img"><img src="<?php echo $path . $pathChild ?>course/course-secondary-img.jpg" alt="スタジオの様子"></div>
					<div class="course-secondary__btn common-btn common-btn-arrow">
						<a class="course-secondary__link common-btn__inner" href="<?php echo $path ?>studio/">スタジオの詳細はこちら</a>
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

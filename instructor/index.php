<?php
$path = '../';
$pathChild = 'assets/img/';
$title = 'インストラクター';
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

	<main class="child child-instructor">
		<div class="child-instructor__top child-title child-top">
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
						<a class="breadcrumbs__link" itemprop="item" href="<?php echo $path; ?>instructor/">
							<span itemprop="name"><?php echo $title ?></span>
						</a>
						<meta itemprop="position" content="2" />
					</li>
				</ul>
			</div>
		</div>

		<section class="child-instructor__main child-main">
			<div class="shape-top--yellow-light"></div>
			<div class="common">
				<div class="instructor-main child-main__inner common__inner">
					<div class="child-main__img"><img src="<?php echo $path . $pathChild ?>instructor/main-img.jpg" alt="インストラクター集合写真"></div>

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
								<img class="instructor-main__img" src="<?php echo $path . $pathChild ?>instructor/instructor-yurika.jpg" alt="YURIKA">
								<p class="instructor-main__name">YURIKA</p>
							</a>
						</li>
						<li class="instructor-main__item">
							<a class="instructor-main__link" href="#miwako">
								<img class="instructor-main__img" src="<?php echo $path . $pathChild ?>instructor/instructor-miwako.jpg" alt="MIWAKO">
								<p class="instructor-main__name">MIWAKO</p>
							</a>
						</li>
						<li class="instructor-main__item">
							<a class="instructor-main__link" href="#natsuki">
								<img class="instructor-main__img" src="<?php echo $path . $pathChild ?>instructor/instructor-natsuki.jpg" alt="NATSUKI">
								<p class="instructor-main__name">NATSUKI</p>
							</a>
						</li>
						<li class="instructor-main__item">
							<a class="instructor-main__link" href="#yukie">
								<img class="instructor-main__img" src="<?php echo $path . $pathChild ?>instructor/instructor-yukie.jpg" alt="YUKIE">
								<p class="instructor-main__name">YUKIE</p>
							</a>
						</li>
						<li class="instructor-main__item">
							<a class="instructor-main__link" href="#sachiyo">
								<img class="instructor-main__img" src="<?php echo $path . $pathChild ?>instructor/instructor-sachiyo.jpg" alt="SACHIYO">
								<p class="instructor-main__name">SACHIYO</p>
							</a>
						</li>
						<li class="instructor-main__item">
							<a class="instructor-main__link" href="#kirara">
								<img class="instructor-main__img" src="<?php echo $path . $pathChild ?>instructor/instructor-kirara.jpg" alt="KIRARA">
								<p class="instructor-main__name">KIRARA</p>
							</a>
						</li>
					</ol>
				</div>
			</div>
			<div class="shape-bottom--pink-light"></div>
		</section>

		<section class="child-instructor__representative">
			<div class="common">
				<div class="instructor-detail common__inner">
					<div class="instructor-detail__content" id="yurika">
						<div class="instructor-detail__head">
							<div class="instructor-detail__img">
								<img src="<?php echo $path . $pathChild ?>instructor/instructor-yurika.jpg" alt="yurika">
							</div>
							<p class="instructor-detail__name">YURIKA</p>
						</div>

						<p class="instructor-detail__text">HIPHOPダンスを中心にキッドビクスプログラム（親子クラス、こどもクラス）から<br class="non-sp">成人クラスまで幅広くレッスンしています。<br>からだを動かすことによって、心が元気になる。<br class="non-sp">必ずダンスが上手になる。目標意識を持って色んな事に挑戦しています。</p>

						<div class="instructor-detail__body">
							<div class="instructor-profile">
								<p class="instructor-detail__title">プロフィール</p>
								<ol class="instructor-profile__list">
									<li class="instructor-profile__item">
										<p class="instructor-profile__text">Red Family 代表</p>
										<p class="instructor-profile__text">㈳日本こどもフィットネス協会公認<br>教育ディレクター</p>
										<p class="instructor-profile__text">白鳳短期大学非常勤講師</p>
									</li>
									<li class="instructor-profile__item">
										<p class="instructor-profile__subtitle">誕生日</p>
										<p class="instructor-profile__text">10月30日 さそり座</p>
									</li>
									<li class="instructor-profile__item">
										<p class="instructor-profile__subtitle">趣味 / 特技</p>
										<p class="instructor-profile__text">ピアノ・エレクトーンを弾くこと</p>
									</li>
									<li class="instructor-profile__item">
										<p class="instructor-profile__subtitle">座右の銘</p>
										<p class="instructor-profile__text">成功に必要なのは、<br class="non-md">耐える強さとやり抜く情熱、ありがとう！<br>感謝の言葉<br>♡夢を現実に♡</p>
									</li>
								</ol>
							</div>

							<div class="instructor-qualification">
								<p class="instructor-detail__title">取得資格一覧</p>
								<ol class="instructor-qualification__list">
									<li class="instructor-qualification__item">㈳日本こどもフィットネス協会認定資格</li>
									<li class="instructor-qualification__item">40H Complete</li>
									<li class="instructor-qualification__item">6H Basic Certificate</li>
									<li class="instructor-qualification__item">6H Play Fitness Certificate</li>
									<li class="instructor-qualification__item">6H Kids Coach Certificate</li>
									<li class="instructor-qualification__item">3H Primary Certificate ｷﾝﾀﾞｰｷｯﾄﾞﾋﾞｸｽ</li>
									<li class="instructor-qualification__item">キッドビクス・ダンス検定専門指導員</li>
									<li class="instructor-qualification__item">エアロビクス・ダンス検定専門指導員</li>
									<li class="instructor-qualification__item">ヒップホップ・ダンス検定専門指導員</li>
									<li class="instructor-qualification__item">20H Value Certificate ｷｯｽﾞﾋｯﾌﾟﾎｯﾌﾟｲﾝｽﾄﾗｸﾀｰ</li>
									<li class="instructor-qualification__item">3H 全国こどもチャレンジカップ審査リード レベルⅢ</li>
									<li class="instructor-qualification__item">3H 全国こどもチャレンジカップ審査リード レベルⅡ</li>
									<li class="instructor-qualification__item">健康運動実践指導者</li>
									<li class="instructor-qualification__item">障害者スポーツ指導員</li>
									<li class="instructor-qualification__item">Zumba Instructor</li>
									<li class="instructor-qualification__item">PFA (太平洋フィットネス連盟) Pilates Coach</li>
									<li class="instructor-qualification__item">ハワイアンフラ講師</li>
									<li class="instructor-qualification__item">AFAA.Plc (アメリカ・エアロビクス＆フィットネス協会)公認 エアロビクスインストラクター</li>
									<li class="instructor-qualification__item">こどものためのリトミック指導資格</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="child-instructor__staff">
			<div class="shape-top--pink-light"></div>
			<div class="common">
				<div class="instructor-detail common__inner">
					<div class="instructor-detail__content" id="miwako">
						<div class="instructor-detail__head">
							<div class="instructor-detail__img">
								<img src="<?php echo $path . $pathChild ?>instructor/instructor-miwako.jpg" alt="miwako">
							</div>
							<p class="instructor-detail__name">MIWAKO</p>
						</div>

						<p class="instructor-detail__text">日頃は、スポーツクラブ JOYFIT 岸和田でスタッフリーダーとして活躍中！</p>

						<div class="instructor-detail__body">
							<div class="instructor-profile">
								<p class="instructor-detail__title">プロフィール</p>
								<ol class="instructor-profile__list">
									<li class="instructor-profile__item">
										<p class="instructor-profile__text">㈳日本こどもフィットネス協会公認<br>インストラクター</p>
									</li>
									<li class="instructor-profile__item">
										<p class="instructor-profile__subtitle">誕生日</p>
										<p class="instructor-profile__text">1月3日 やぎ座</p>
									</li>
									<li class="instructor-profile__item">
										<p class="instructor-profile__subtitle">趣味</p>
										<p class="instructor-profile__text">ショッピング、スポーツ</p>
									</li>
									<li class="instructor-profile__item">
										<p class="instructor-profile__subtitle">特技</p>
										<p class="instructor-profile__text">うたた寝、子育て（笑）</p>
									</li>
									<li class="instructor-profile__item">
										<p class="instructor-profile__subtitle">座右の銘</p>
										<p class="instructor-profile__text">“ひまわり”の様な人でありたい</p>
									</li>
								</ol>
							</div>

							<div class="instructor-qualification">
								<p class="instructor-detail__title">取得資格一覧</p>
								<ol class="instructor-qualification__list">
									<li class="instructor-qualification__item">㈳日本こどもフィットネス協会認定資格</li>
									<li class="instructor-qualification__item">6H Basic Certificate</li>
									<li class="instructor-qualification__item">3H Primary Certificate ｷﾝﾀﾞｰｷｯﾄﾞﾋﾞｸｽ</li>
									<li class="instructor-qualification__item">エアロビクスインストラクター</li>
									<li class="instructor-qualification__item">レスミルズジャパン(ボディステップ・レスミルズ CORE・シバム)</li>
									<li class="instructor-qualification__item">フィットネスフラ</li>
								</ol>
							</div>
						</div>
					</div>

					<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>

					<div class="instructor-detail__content" id="natsuki">
						<div class="instructor-detail__head">
							<div class="instructor-detail__img">
								<img src="<?php echo $path . $pathChild ?>instructor/instructor-natsuki.jpg" alt="natsuki">
							</div>
							<p class="instructor-detail__name">NATSUKI</p>
						</div>

						<p class="instructor-detail__text">音楽に合わせて楽しく DANCE!!<br>
						人前で踊るのが恥ずかしい、下手やからできない!!<br>そんなメンタルも鍛えて、人前で踊ることができるようになるし、<br class="non-sp">ダンスもうまくなる。もっと人に見てほしい。<br>ダンスってこんなに楽しかったんだって思えるようなスタジオです。<br>元気いっぱい、笑顔いっぱい、パワフルな先生たちが待ってます♡</p>

						<div class="instructor-detail__body">
							<div class="instructor-profile">
								<p class="instructor-detail__title">プロフィール</p>
								<ol class="instructor-profile__list">
									<li class="instructor-profile__item">
										<p class="instructor-profile__text">㈳日本こどもフィットネス協会公認<br>インストラクター</p>
									</li>
									<li class="instructor-profile__item">
										<p class="instructor-profile__subtitle">誕生日</p>
										<p class="instructor-profile__text">11月14日 さそり座</p>
									</li>
									<li class="instructor-profile__item">
										<p class="instructor-profile__subtitle">趣味 / 特技</p>
										<p class="instructor-profile__text">バレーボール</p>
									</li>
									<li class="instructor-profile__item">
										<p class="instructor-profile__subtitle">座右の銘</p>
										<p class="instructor-profile__text">あしたやろうはバカ野郎</p>
									</li>
								</ol>
							</div>

							<div class="instructor-qualification">
								<p class="instructor-detail__title">取得資格一覧</p>
								<ol class="instructor-qualification__list">
									<li class="instructor-qualification__item">㈳日本こどもフィットネス協会認定資格</li>
									<li class="instructor-qualification__item">40H Complete Certificate</li>
									<li class="instructor-qualification__item">20H Value Certificate フィットネスインストラクター</li>
									<li class="instructor-qualification__item">6H Basic Certificate</li>
									<li class="instructor-qualification__item">3H 全国こどもチャレンジカップ審査リード レベルⅢ</li>
									<li class="instructor-qualification__item">㈳日本フィットネス協会認定資格</li>
									<li class="instructor-qualification__item">AQWI(アクアウォーキングインストラクター)</li>
									<li class="instructor-qualification__item">AQBI(アクアビクスインストラクター)</li>
								</ol>
							</div>
						</div>
					</div>

					<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>

					<div class="instructor-detail__content" id="yukie">
						<div class="instructor-detail__head">
							<div class="instructor-detail__img">
								<img src="<?php echo $path . $pathChild ?>instructor/instructor-yukie.jpg" alt="yukie">
							</div>
							<p class="instructor-detail__name">YUKIE</p>
						</div>

						<p class="instructor-detail__text">ダンスを大好きになってもらえるようみんなで楽しくレッスンをしながら 2年間専門学校で学んだ事を沢山伝えていきます！</p>

						<div class="instructor-detail__body">
							<div class="instructor-career">
								<p class="instructor-detail__title">経歴</p>
								<ol class="instructor-career__list">
									<li class="instructor-career__item">2016 KENTO MORI MV 出演</li>
									<li class="instructor-career__item">2017 ゆずイロハ京セラバックダンサー</li>
									<li class="instructor-career__item">2017  脳みそ MV ミュージック TV 出演</li>
									<li class="instructor-career__item">2017  鷹の祭典京セラダンサー出演</li>
								</ol>
							</div>
						</div>
					</div>

					<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>

					<div class="instructor-detail__content" id="sachiyo">
						<div class="instructor-detail__head">
							<div class="instructor-detail__img">
								<img src="<?php echo $path . $pathChild ?>instructor/instructor-sachiyo.jpg" alt="sachiyo">
							</div>
							<p class="instructor-detail__name">SACHIYO</p>
						</div>

						<div class="instructor-qualification">
							<p class="instructor-detail__title">取得資格一覧</p>
							<ol class="instructor-qualification__list">
								<li class="instructor-qualification__item">㈳ JKFA 公認インストラクター</li>
								<li class="instructor-qualification__item">ヒップホップライセンス</li>
								<li class="instructor-qualification__item">40H キッズビクスゴールドライセンス</li>
								<li class="instructor-qualification__item">彩の台初めてダンスクラス担当</li>
								<li class="instructor-qualification__item">彩の台初級クラス担当</li>
								<li class="instructor-qualification__item">発達支援施設保育士、ダンス講師</li>
							</ol>
						</div>
					</div>

					<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>

					<div class="instructor-detail__content" id="kirara">
						<div class="instructor-detail__head">
							<div class="instructor-detail__img">
								<img src="<?php echo $path . $pathChild ?>instructor/instructor-kirara.jpg" alt="kirara">
							</div>
							<p class="instructor-detail__name">KIRARA</p>
						</div>

						<div class="instructor-detail__body">
							<div class="instructor-profile">
								<p class="instructor-detail__title">プロフィール</p>
								<ol class="instructor-profile__list">
									<li class="instructor-profile__item">
										<p class="instructor-profile__text">㈳日本こどもフィットネス協会公認<br>インストラクター</p>
									</li>
									<li class="instructor-profile__item">
										<p class="instructor-profile__subtitle">誕生日</p>
										<p class="instructor-profile__text">9月25日 てんびん座</p>
									</li>
									<li class="instructor-profile__item">
										<p class="instructor-profile__subtitle">趣味</p>
										<p class="instructor-profile__text">体を動かすこと</p>
									</li>
									<li class="instructor-profile__item">
										<p class="instructor-profile__subtitle">座右の銘</p>
										<p class="instructor-profile__text">be yourself 自分らしさを忘れずに！</p>
									</li>
								</ol>
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

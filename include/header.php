<?php
?>

	<header class="header js_down-move" id="header">
		<div class="header__inner">
			<div class="header__head">
				<div class="header__logo">
					<!-- <a class="" <?php /* echo isset($is_home) ? '': 'href="index.php"' */ ?>> -->
					<a class="" href="<?php echo $path; ?>">
						<img src="<?php echo $path; ?>assets/img/logo.png" alt="Red family">
					</a>
				</div>
				<div class="header-contact">
					<div class="header-contact__tel">
						<p class="header-contact__number-text">体験レッスン申し込みもこちらから</p>
						<p class="header-contact__number phone-btn-icon">090-8365-6461</p>
					</div>
					<div class="header-contact__mail common-btn">
						<a class="header-contact__btn common-btn__inner" href="<?php echo $path; ?>/contact">
							<p class="header-contact__text mail-btn-icon">お問い合わせフォーム</p>
						</a>
					</div>
					<div class="header-contact__line common-btn">
						<a class="header-contact__btn common-btn__inner" href="<?php echo $path; ?>/contact">
							<p class="header-contact__text line-btn-icon">お問い合わせフォーム</p>
						</a>
					</div>
				</div>
			</div>
			<div class="header__foot">
				<ul class="header-gnav__list">
					<li class="header-gnav__item">
						<a class="header-gnav__link" href="<?php echo $path; ?>about/">
							<p class="header-gnav__icon"><img src="<?php echo $path; ?>assets/img/icon-about.svg" alt=""></p>
							<p class="header-gnav__text">RedFamilyについて</p>
						</a>
					</li>
					<li class="header-gnav__item">
						<a class="header-gnav__link" href="<?php echo $path; ?>news/">
							<p class="header-gnav__icon"><img src="<?php echo $path; ?>assets/img/icon-news.svg" alt=""></p>
							<p class="header-gnav__text">お知らせ<br>イベント情報</p>
						</a>
					</li>
					<li class="header-gnav__item">
						<a class="header-gnav__link" href="<?php echo $path; ?>course/">
							<p class="header-gnav__icon"><img src="<?php echo $path; ?>assets/img/icon-course.svg" alt=""></p>
							<p class="header-gnav__text">レッスン・クラス</p>
						</a>
					</li>
					<li class="header-gnav__item">
						<a class="header-gnav__link" href="<?php echo $path; ?>instructor/">
							<p class="header-gnav__icon"><img src="<?php echo $path; ?>assets/img/icon-instructor.svg" alt=""></p>
							<p class="header-gnav__text">インストラクター</p>
						</a>
					</li>
					<li class="header-gnav__item">
						<a class="header-gnav__link" href="<?php echo $path; ?>studio/">
							<p class="header-gnav__icon"><img src="<?php echo $path; ?>assets/img/icon-studio.svg" alt=""></p>
							<p class="header-gnav__text">スタジオ</p>
						</a>
					</li>
					<li class="header-gnav__item">
						<a class="header-gnav__link" href="<?php echo $path; ?>challenge-cup/">
							<p class="header-gnav__icon"><img src="<?php echo $path; ?>assets/img/icon-challenge-cup.svg" alt=""></p>
							<p class="header-gnav__text">全国子ども<br>チャレンジカップ</p>
						</a>
					</li>
					<li class="header-gnav__item">
						<a class="header-gnav__link" href="<?php echo $path; ?>procedure/">
							<p class="header-gnav__icon"><img src="<?php echo $path; ?>assets/img/icon-procedure.svg" alt=""></p>
							<p class="header-gnav__text">ご入会<br>各種手続き</p>
						</a>
					</li>
					<li class="header-gnav__item">
						<a class="header-gnav__link" href="<?php echo $path; ?>contact/">
							<p class="header-gnav__icon"><img src="<?php echo $path; ?>assets/img/icon-contact.svg" alt=""></p>
							<p class="header-gnav__text">お問い合わせ</p>
						</a>
					</li>
				</ul>
				<div class="header-gnav__btn-area">
					<div class="header-gnav-btn">
						<a class="header-gnav-btn__link" href="https://kids-fitness.or.jp/" target="_blank">日本こどもフィットネス協会</a>
					</div>
					<div class="header-gnav-btn">
						<a class="header-gnav-btn__link" href="<?php echo $path; ?>piano/">ピアノ教室 生徒募集中！</a>
					</div>
				</div>
			</div>
		</div>
		<div class="gnav-content">
			<div class="gnav-btn js_gnav-btn">
				<span></span>
				<span>MENU</span>
				<span></span>
			</div>
			<nav class="gnav" id="gnav">
				<div class="gnav__inner">
					<div class="gnav__main">
						<div class="gnav__unit">
							<p class="gnav__title">メニュー</p>
							<ul class="gnav__list">
								<li class="gnav__item">
									<a class="gnav__link" href="<?php echo $path; ?>about/">RedFamily について</a>
								</li>
								<li class="gnav__item">
									<a class="gnav__link" href="<?php echo $path; ?>news/">お知らせ＆イベント情報</a>
								</li>
								<li class="gnav__item">
									<a class="gnav__link" href="<?php echo $path; ?>course/">レッスン・クラス</a>
								</li>
								<li class="gnav__item">
									<a class="gnav__link" href="<?php echo $path; ?>instructor/">インストラクター紹介</a>
								</li>
								<li class="gnav__item">
									<a class="gnav__link" href="<?php echo $path; ?>studio/">スタジオ</a>
								</li>
								<li class="gnav__item">
									<a class="gnav__link" href="<?php echo $path; ?>challenge-cup/">全国子どもチャレンジカップ</a>
								</li>
								<li class="gnav__item">
									<a class="gnav__link" href="<?php echo $path; ?>procedure/">ご入会・各種手続き</a>
								</li>
								<li class="gnav__item">
									<a class="gnav__link" href="<?php echo $path; ?>contact/">お問い合わせ</a>
								</li>
							</ul>
						</div>
						<div class="gnav__unit">
							<p class="gnav__title">各種申込書ダウンロード</p>
							<ul class="gnav__list">
								<li class="gnav__item">
									<a class="gnav__link" href="<?php echo $path; ?>assets/pdf/01_admission-report.pdf" target="_blank">入会届</a>
								</li>
								<li class="gnav__item">
									<a class="gnav__link" href="<?php echo $path; ?>assets/pdf/02_notice-of-withdrawal.pdf" target="_blank">退会届</a>
								</li>
								<li class="gnav__item">
									<a class="gnav__link" href="<?php echo $path; ?>assets/pdf/03_notice-of-adjournment.pdf" target="_blank">休会届</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="gnav__unit">
						<div class="gnav__btn">
							<a class="gnav__link--btn" href="https://kids-fitness.or.jp/" target="_blank">日本こどもフィットネス協会</a>
						</div>
						<div class="gnav__btn">
							<a class="gnav__link--btn" href="<?php echo $path; ?>piano/">ピアノ教室 生徒募集中！</a>
						</div>
					</div>
				</div>
			</nav>

<?php
// include $path . 'include/gnav.php';
?>
			<div class="circle-bg js_show"></div>
		</div>
	</header>

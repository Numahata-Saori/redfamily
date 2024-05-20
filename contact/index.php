<?php
$path = '../';
$pathChild = 'assets/img/';
$title = 'お問い合わせ';
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
		<div class="child-contact child-title child-top">
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
						<a class="breadcrumbs__link" itemprop="item" href="<?php echo $path; ?>contact/">
							<span itemprop="name"><?php echo $title ?></span>
						</a>
						<meta itemprop="position" content="2" />
					</li>
				</ul>
			</div>
		</div>

		<section class="child-contact__main child-main">
			<div class="shape-top--pink-light"></div>
			<div class="common">
				<div class="contact-main child-main__inner common__inner">
					<div class="piano-main__hero child-main__img"><img src="<?php echo $path . $pathChild ?>contact/main-img.jpg" alt=""></div>

					<p class="child-main__summary">Red Familyでは、皆様からのお問い合わせを心よりお待ちしております。<br>ご質問やレッスンの申し込み、さらにはご意見など、どのような内容でも結構です。<br>お好きな方法でお問い合わせください。</p>

					<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>

					<div class="contact__list">
						<div class="contact__item">
							<a class="contact__item-inner contact-btn" href="tel:09083656461">
								<p class="contact-btn__title">お電話でお問い合わせ</p>
								<div class="contact-btn__body common-btn-arrow">
									<p class="contact-btn__number phone-btn-icon">090-8365-6461</p>
								</div>
							</a>
						</div>
						<div class="contact__item">
							<a class="contact__item-inner contact-btn--line" href="#">
								<p class="contact-btn__title">LINEでお問い合わせ</p>
								<div class="contact-btn__body common-btn-arrow">
									<p class="contact-btn__text line-btn-icon">お友達登録はこちら</p>
								</div>
							</a>
						</div>
						<div class="contact__item">
							<a class="contact__item-inner contact-btn--instagram" href="#">
								<p class="contact-btn__title">Instagramはこちら</p>
								<p class="contact-btn__icon"><img src="<?php echo $path . $pathChild ?>icon-instagram.png" alt=""></p>
							</a>
						</div>
					</div>

					<div class="contact-form">
						<div class="contact-form__title child-sub-title">
							<div class="dots-inner"><img src="<?php echo $path . $pathChild ?>decor-dots.svg" alt=""></div>
							<h2 class="contact-form__title child-sub-title__ja">お問い合わせ</h2>
						</div>

						<div class="contact-form__content">
							<div class="contact-form__item">
								<div class="contact-form__name">希望連絡方法<p class="contact-form__must">必須</p></div>
								<div class="contact-form__checkbox-wrapper">
									<label class="contact-form__checkbox" for="">
										<input class="form-input" type="radio" name="userCheckbox" value="体験レッスン申し込み">
										<p class="checkbox-text">体験レッスン申し込み</p>
									</label>
									<label class="contact-form__checkbox" for="">
										<input class="form-input" type="radio" name="userCheckbox" value="入会について">
										<p class="checkbox-text">入会について</p>
									</label>
									<label class="contact-form__checkbox" for="">
										<input class="form-input" type="radio" name="userCheckbox" value="退会・休会について">
										<p class="checkbox-text">退会・休会について</p>
									</label>
									<label class="contact-form__checkbox" for="">
										<input class="form-input" type="radio" name="userCheckbox" value="その他">
										<p class="checkbox-text">その他</p>
									</label>
								</div>
							</div>

							<div class="contact-form__item">
								<div class="contact-form__name">お名前<p class="contact-form__must">必須</p></div>
								<div class="contact-form__textarea">
									<input class="form-input" id="form-userName" type="text" name="userName" required>
								</div>
							</div>

							<div class="contact-form__item">
								<div class="contact-form__name">ふりがな<p class="contact-form__must">必須</p></div>
								<div class="contact-form__textarea">
									<input class="form-input" id="form-userkana" type="text" name="userkana" required>
								</div>
							</div>

							<div class="contact-form__item">
								<div class="contact-form__name">メールアドレス<p class="contact-form__must">必須</p></div>
								<div class="contact-form__textarea">
									<input class="form-input" id="form__userMail" type="text" name="userMail" required>
								</div>
							</div>

							<div class="contact-form__item">
								<div class="contact-form__name">電話番号<p class="contact-form__must">必須</p></div>
								<div class="contact-form__textarea">
									<input class="form-input" id="form__userPhone" type="text" name="userPhone" required>
								</div>
							</div>

							<div class="contact-form__item">
								<div class="contact-form__name">希望連絡方法<p class="contact-form__must">必須</p></div>
								<div class="contact-form__checkbox-wrapper">
									<label class="contact-form__checkbox" for="">
										<input class="form-input" type="radio" name="userCheckbox" value="メール">
										<p class="checkbox-text">メール</p>
									</label>
									<label class="contact-form__checkbox" for="">
										<input class="form-input" type="radio" name="userCheckbox" value="電話">
										<p class="checkbox-text">電話</p>
									</label>
								</div>
							</div>

							<div class="contact-form__item">
								<div class="contact-form__name">お問い合わせ内容<p class="contact-form__must">必須</p></div>
								<div class="contact-form__textarea">
									<textarea class="form-input" id="form_userMessage" name="userMessage" rows="10" placeholder="ご用件を入力してください"></textarea>
								</div>
							</div>

							<input class="contact-form__submitBtn" id="" type="submit" name=""  value="送信内容を確認する">
						</div>
					</div>
				</div>
			</div>
		</section>

	</main>

<?php
require_once $path . 'include/footer.php';
?>

</body>
</html>

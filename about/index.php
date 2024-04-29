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
			<div class="shape-top--pinnk-light"></div>
			<div class="common">
				<div class="about-main common__inner">
					<p class="about-main__img"><img src="<?php echo $path . $pathChild ?>about/child-about_main-img.jpg" alt=""></p>
					<p class="about-main__text">大阪府泉州地域を拠点に、HIPHOPダンスを中心に、幼児から成人までを対象としたキッドビクスプログラムを含む多様なクラスを提供している Red Family。<br>
					私たちは、一般社団法人日本こどもフィットネス協会の理念に共鳴し、子どもたちが元気に成長することを目指しています。<br>
					ダンスを通じて、社会性、家族の絆、思いやり、健康的なライフスタイル、運動能力の向上、そしてダンス技術の向上といった無限の可能性を子どもたちに提供します。</p>
				</div>
			</div>
			<div class="shape-bottom--pinnk-light"></div>
		</section>

<?php
require_once $path . 'include/contact.php';
?>

	</main>

<?php
require_once $path . 'include/footer.php';
?>
	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

	<!-- modaal -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/js/modaal.min.js"></script>

	<!-- swiper -->
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>

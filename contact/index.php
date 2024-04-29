<?php
$path = '../';
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
					<div class="dots-inner"><img src="../assets/img/decor-dots.svg" alt=""></div>
					<h2 class="child-title__ja"><?php echo $title ?></h2>
					<div class="dots-inner"><img src="../assets/img/decor-dots.svg" alt=""></div>
				</div>
			</div>
		</div>

		<section class="child-about__main">
			<div class="shape-top--pinnk-light"></div>
			<div class="common">
				<div class="common__inner"></div>
			</div>
			<div class="shape-bottom--pinnk-light"></div>
		</section>

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

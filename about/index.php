<?php
$path = '../';
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
		<div class="about child-title child-top">
			<div class="child-top__inner">
				<div class="child-title__inner">
					<div class="dots-inner"><img src="../assets/img/decor-dots.svg" alt=""></div>
					<h2 class="child-title__ja">Red Familyについて</h2>
					<div class="dots-inner"><img src="../assets/img/decor-dots.svg" alt=""></div>
				</div>
			</div>
		</div>

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

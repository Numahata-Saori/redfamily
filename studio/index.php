<?php
$path = '../';
$pathChild = 'assets/img/';
$title = 'スタジオ';
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
				<div class="common__inner"></div>
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

</body>
</html>

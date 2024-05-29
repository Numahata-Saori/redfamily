	<div class="footer-gnav common">
		<div class="common__inner">
<?php
include $path . 'include/gnav.php';
?>
		</div>
	</div>

	<footer class="footer" id="footer">
		<p class="footer__logo"><img src="<?php echo $path . $pathChild; ?>common/logo.png" alt=""></p>
		<p class="footer__copyright">Copyright &copy; 2012 RedFamily. All rights reserved</p>
	</footer>

	<div class="footer-bottom" id="js-footer-bottom">
		<ul class="footer-bottom__list">
			<li class="footer-bottom__item">
				<a class="footer-bottom__btn" href="tel:09083656461">
					<p class="footer-bottom__icon"><img src="<?php echo $path . $pathChild ?>common/footer-bottom_icon-phone.svg" alt=""></p>
					<p class="footer-bottom__text">電話</p>
				</a>
			</li>
			<li class="footer-bottom__item">
				<a class="footer-bottom__btn" href="<?php echo $path; ?>contact/">
					<p class="footer-bottom__icon"><img src="<?php echo $path . $pathChild ?>common/footer-bottom_icon-mail.svg" alt=""></p>
					<p class="footer-bottom__text">メール</p>
				</a>
			</li>
			<li class="footer-bottom__item">
				<a class="footer-bottom__btn" href="https://lin.ee/saqiOvQM">
					<p class="footer-bottom__icon"><img src="<?php echo $path . $pathChild ?>common/icon-line.svg" alt=""></p>
					<p class="footer-bottom__text">LINE</p>
				</a>
			</li>
			<li class="footer-bottom__item">
				<a class="footer-bottom__btn" href="https://www.instagram.com/dance_studio_red?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
					<p class="footer-bottom__icon"><img src="<?php echo $path . $pathChild ?>common/icon-instagram.svg" alt=""></p>
					<p class="footer-bottom__text">Instagram</p>
				</a>
			</li>
		</ul>
	</div>

	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

	<!-- modaal -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/js/modaal.min.js"></script>

	<!-- swiper -->
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<script src="<?php echo $path; ?>assets/js/main.js"></script>

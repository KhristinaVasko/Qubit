<?php
$temp_html_dir = THEME_DIR_URI . '/qubitSite/';
?>
<footer class="footer">
	<div class="footer-container container">
		<div class="row">

			<div class="footer_1col col-sm-4">
				<img src="<?php echo $temp_html_dir?>img/logo.png" alt="" class="footer-logo">
				<p class="footer1-text">Skyla is one of the unique cosmetics
					store theme. It’s powered b
					y WooCommerce, one of the world’s largest eCommerce software.
				</p>
				<ul class="footer-socials">
										<li><i class="fab fa-facebook"></i></li>
										<li><i class="fab fa-twitter"></i></li>
										<li><i class="fab fa-pinterest"></i></li>
										<li><i class="fab fa-instagram"></i></li>
<!--					--><?php
//					if(has_nav_menu('social_menu')){
//						wp_nav_menu(array(
//							'theme_location' => 'social_menu',
//							'container' => false,
//						));
//
//					}
//					?>
				</ul>
			</div>

			<div class="footer_2col col-sm-2">
				<h3 class="footer2-title">About Us</h3>
				<ul class="footer2-list">
					<li><a href="">Give £50. Get £50</a></li>
					<li><a href="">Gift Cards</a></li>
					<li><a href="">Our Story</a></li>
					<li><a href="">Partners</a></li>
					<li><a href="">Careers</a></li>
					<li><a href="">Affiliate Program</a></li>
				</ul>
			</div>

			<div class="footer_2col col-sm-2">
				<h3 class="footer2-title">Help</h3>
				<ul class="footer2-list">
					<li><a href="">Give £50. Get £50</a></li>
					<li><a href="">Gift Cards</a></li>
					<li><a href="">Our Story</a></li>
					<li><a href="">Partners</a></li>
					<li><a href="">Careers</a></li>
					<li><a href="">Affiliate Program</a></li>
				</ul>
			</div>

			<div class="footer_2col col-sm-2">
				<h3 class="footer2-title">Help</h3>
				<ul class="footer2-list">
					<li><a href="">FAQs</a></li>
					<li><a href="">Delivery</a></li>
					<li><a href="">Payment</a></li>
					<li><a href="">Returns</a></li>
					<li><a href="">Contact Us</a></li>
				</ul>
			</div>

			<div class="footer_2col col-sm-2">
				<h3 class="footer2-title">Quick Links</h3>
				<ul class="footer2-list">
					<li><a href="">How to Buy</a></li>
					<li><a href="">Payment</a></li>
					<li><a href="">Delivery</a></li>
					<li><a href="">Gift Receipt</a></li>
					<li><a href="">Recalled Items</a></li>
				</ul>
			</div>


		</div>
	</div>
</footer>
<!-- !footer -->
<!-- !footer -->
<script src="<?php echo $temp_html_dir; ?>js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>

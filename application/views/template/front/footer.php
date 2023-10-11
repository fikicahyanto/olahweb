<!-- end: MAIN CONTAINER -->
		<!-- start: FOOTER -->
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="newsletter">
							<h4>Newsletter</h4>
							<p>
								Silahkan Masukan email Anda untuk mendapatkan info dan promo terbaru.
							</p>
							<form method="POST" action="#" id="newsletterForm">
								<div class="input-group">
									<input type="text" id="email" name="email" placeholder="Email Address" class="form-control">
									<span class="input-group-btn">
										<button type="submit" class="btn btn-default">
											Subcribe !
										</button> </span>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-3">
						<h4>Layanan Kami</h4>
						<div class="twitter" id="tweet">
							<p>Website Landing Page</p>
							<p>Website Company Profile</p>
							<p>Website Undangan Wedding Online</p>
							<p>Website Toko Online</p>
							<p>Aplikasi Web</p>
							<p>Desain</p>
							<p>SEO</p>
							<p>Digital Marketing</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="contact-details">
							<h4>Kontak Kami</h4>
							<ul class="contact">
								<li>
									<p>
										<i class="fa fa-map-marker"></i><strong>Alamat:</strong> Brebes, Jawa Tengah, indonesia
									</p>
								</li>
								<li>
									<p>
										<i class="fa fa-phone"></i><strong>Phone / WA:</strong> 082399349304
									</p>
								</li>
								<li>
									<p>
										<i class="fa fa-envelope"></i><strong>Email:</strong>
										<a href="mailto:olahwebs@gmail.com">
											Olahwebs@gmail.com
										</a>
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-2">
						<h4>Ikuti Media Sosial Kami</h4>
						<div class="social-icons">
							<ul>
								<li class="social-twitter tooltips" data-original-title="Twitter" data-placement="bottom">
									<a target="_blank" href="http://www.twitter.com">
										Twitter
									</a>
								</li>
								<li class="fa fa-instagram" data-original-title="Instagram" data-placement="bottom">
									<a target="_blank" href="https://instagram.com/olah.web">
										Instagram
									</a>
								</li>
								<li class="social-facebook tooltips" data-original-title="Facebook" data-placement="bottom">
									<a target="_blank" href="https://www.facebook.com/profile.php?id=100088368243332&mibextid=ZbWKwL" data-original-title="Facebook">
										Facebook
									</a>
								</li>
								<li class="social-linkedin tooltips" data-original-title="LinkedIn" data-placement="bottom">
									<a target="_blank" href="http://linkedin.com" data-original-title="LinkedIn">
										LinkedIn
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-1">
							<a class="logo" href="index.html">
								Olahweb.com
							</a>
						</div>
						<div class="col-md-7">
							<p>
								&copy; Copyright 2022 by Olahweb.com. All Rights Reserved.
							</p>
						</div>
						<div class="col-md-4">
							<nav id="sub-menu">
								<ul>
									<li>
										<a href="#">
											FAQ's
										</a>
									</li>
									<li>
										<a href="#">
											Sitemap
										</a>
									</li>
									<li>
										<a href="#">
											Contact
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<a id="scroll-top" href="#"><i class="fa fa-angle-up"></i></a>
		<!-- end: FOOTER -->
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="assets/plugins/respond.min.js"></script>
		<script src="assets/plugins/excanvas.min.js"></script>
		<script src="assets/plugins/html5shiv.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> -->
		<!--<![endif]-->
		<script src="<?=base_url("assets/plugins/bootstrap/js/bootstrap.min.js")?>"></script>
		<script src="<?=base_url("assets/plugins/jquery.transit/jquery.transit.js")?>"></script>
		<script src="<?=base_url("assets/plugins/hover-dropdown/twitter-bootstrap-hover-dropdown.min.js")?>"></script>
		<script src="<?=base_url("assets/plugins/jquery.appear/jquery.appear.js")?>"></script>
		<script src="<?=base_url("assets/plugins/blockUI/jquery.blockUI.js")?>"></script>
		<script src="<?=base_url("assets/plugins/jquery-cookie/jquery.cookie.js")?>"></script>
		<script src="<?=base_url("assets/js/main.js")?>"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="<?=base_url("assets/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js")?>"></script>
		<script src="<?=base_url("assets/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js")?>"></script>
		<script src="<?=base_url("assets/plugins/flex-slider/jquery.flexslider.js")?>"></script>
		<script src="<?=base_url("assets/plugins/stellar.js/jquery.stellar.min.js")?>"></script>
		<script src="<?=base_url("assets/plugins/colorbox/jquery.colorbox-min.js")?>"></script>
		<script src="<?=base_url("assets/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js")?>"></script>
		<script src="<?=base_url("assets/js/index.js")?>"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Index.init();
				$.stellar();
			});
		</script>
	</body>
</html>
<!-- start: MAIN CONTAINER -->
<div class="main-container">
	<!-- start: STYLE SELECTOR BOX -->
	<div id="style_selector" class="hidden-xs">
		<div id="style_selector_container">
			<div class="style-main-title">
				Style Selector
			</div>
			<div class="box-title">
				Predefined Color Schemes
			</div>
			<div class="images icons-color">
				<a id="blue" href="#"><img class="active" alt="" src="assets/images/blue.png"></a>
				<a id="purple" href="#"><img alt="" src="assets/images/purple.png"></a>
				<a id="red" href="#"><img alt="" src="assets/images/red.png"></a>
				<a id="orange" href="#"><img alt="" src="assets/images/orange.png"></a>
				<a id="green" href="#"><img alt="" src="assets/images/green.png"></a>
			</div>
			<div style="height:25px;line-height:25px; text-align: center">
				<a class="clear_style" href="#">
					Clear Styles
				</a>
				<a class="save_style" href="#">
					Save Styles
				</a>
			</div>
		</div>
		<div class="style-toggle close"></div>
	</div>
	<!-- end: STYLE SELECTOR BOX -->
	<section class="page-top">
		<div class="container">
			<div class="col-md-4 col-sm-4">
				<h1>About Us</h1>
			</div>
			<div class="col-md-8 col-sm-8">
				<ul class="pull-right breadcrumb">
					<li>
						<a href="index.html">
							Home
						</a>
					</li>
					<li>
						<a href="#">
							Pages
						</a>
					</li>
					<li class="active">
						About Us
					</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<h3>Welcome To olahweb</h3>
					<p>
						<?=$data->about_us?>
					</p>
					<p>
						Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis
						fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus
						error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
						illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
					</p>
					<p>
						Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
						consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
					</p>
					<p>
						Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
						sed quia non numquam eius modi tempora incidunt ut labore dolore magnm aliquam quaerat
						voluptatem.
					</p>
				</div>
				<div class="col-md-5">
					<div class="flexslider" data-plugin-options='{"directionNav":true}'>
						<ul class="slides">
							<li>
								<img src="assets/images/image01.jpg" />
							</li>
							<li>
								<img src="assets/images/image02.jpg" />
							</li>
							<li>
								<img src="assets/images/image03.jpg" />
							</li>
							<li>
								<img src="assets/images/image04.jpg" />
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7">
					<h3>Our specialization</h3>
					<div class="progress-bars">
						<div class="progress-label">
							<span>HTML/CSS</span>
						</div>
						<div class="progress">
							<div class="progress-bar main-color animate-bar six-sec-ease-in-out"
								aria-valuetransitiongoal="100"></div>
						</div>
						<div class="progress-label">
							<span>Design</span>
						</div>
						<div class="progress">
							<div class="progress-bar main-color animate-bar six-sec-ease-in-out"
								aria-valuetransitiongoal="60"></div>
						</div>
						<div class="progress-label">
							<span>WordPress</span>
						</div>
						<div class="progress">
							<div class="progress-bar main-color animate-bar six-sec-ease-in-out"
								aria-valuetransitiongoal="75"></div>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<h3>Who Is Clip-One</h3>
					<div class="panel-group accordion-custom accordion-teal" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle collapsed" data-toggle="collapse"
										data-parent="#accordion" href="#collapseOne">
										<i class="icon-arrow"></i>
										Our Company Mission
									</a></h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse">
								<div class="panel-body">
									<p>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
										euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
									</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle collapsed" data-toggle="collapse"
										data-parent="#accordion" href="#collapseTwo">
										<i class="icon-arrow"></i>
										Our Philosophy
									</a></h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse">
								<div class="panel-body">
									<p>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
										euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
									</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle collapsed" data-toggle="collapse"
										data-parent="#accordion" href="#collapseThree">
										<i class="icon-arrow"></i>
										Great Support
									</a></h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse">
								<div class="panel-body">
									<p>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
										euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
									</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle collapsed" data-toggle="collapse"
										data-parent="#accordion" href="#collapseFour">
										<i class="icon-arrow"></i>
										Top Team
									</a></h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse">
								<div class="panel-body">
									<p>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
										euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<hr>
					<h2 class="center">Meet the Team</h2>
					<p class="center">
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
						tincidunt ut laoreet dolore magna aliquam erat volutpat.
					</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div id="team" class="row">
				<div class="col-md-12">
					<div class="row">
						<ul class="team-list animate-group">
							<li class="col-md-3 col-sm-6">
								<div class="thumbnail animate">
									<img src="assets/images/team-1.jpg" alt="">
									<span class="image-overlay"> <a target="_blank" href="http://www.facebook.com"><i
												data-original-title="Facebook" data-placement="top"
												class="tooltips fa fa-facebook circle-icon circle-small"></i></a> <a
											target="_blank" href="http://www.linkedin.com"><i
												data-original-title="Linkedin" data-placement="top"
												class="tooltips fa fa-linkedin circle-icon circle-small"></i></a></span>
								</div>
								<h3>Peter Clark</h3>
								<div>
									UI Designer
								</div>
								<div class="team-member-description">
									<p>
										Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
										mus. <strong>Lorem ipsum dolor</strong> sit amet, consectetuer adipiscing elit.
										Aenean commodo ligula eget dolor. Aenean massa.
									</p>
								</div>
							</li>
							<li class="col-md-3 col-sm-6">
								<div class="thumbnail animate">
									<img src="assets/images/team-2.jpg" alt="">
									<span class="image-overlay"><a target="_blank" href="http://www.linkedin.com"><i
												data-original-title="Linkedin" data-placement="top"
												class="tooltips fa fa-linkedin circle-icon circle-small"></i></a> <a
											target="_blank" href="http://www.github.com"><i data-original-title="Github"
												data-placement="top"
												class="tooltips fa fa-github circle-icon circle-small"></i></a></span>
								</div>
								<h3>Ella Patterson</h3>
								<div>
									Web Editor
								</div>
								<div class="team-member-description">
									<p>
										Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
										mus. <strong>Lorem ipsum dolor</strong> sit amet, consectetuer adipiscing elit.
										Aenean commodo ligula eget dolor. Aenean massa.
									</p>
								</div>
							</li>
							<li class="col-md-3 col-sm-6">
								<div class="thumbnail animate">
									<img src="assets/images/team-3.jpg" alt="">
									<span class="image-overlay"><a target="_blank" href="http://www.twitter.com"><i
												data-original-title="Twitter" data-placement="top"
												class="tooltips fa fa-twitter circle-icon circle-small"></i></a> <a
											target="_blank" href="http://plus.google.com"><i
												data-original-title="Google+" data-placement="top"
												class="tooltips fa fa-google-plus circle-icon circle-small"></i></a></span>
								</div>
								<h3>Mark Johnson</h3>
								<div>
									Senior Designer
								</div>
								<div class="team-member-description">
									<p>
										Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
										mus. <strong>Lorem ipsum dolor</strong> sit amet, consectetuer adipiscing elit.
										Aenean commodo ligula eget dolor. Aenean massa.
									</p>
								</div>
							</li>
							<li class="col-md-3 col-sm-6">
								<div class="thumbnail animate">
									<img src="assets/images/team-4.jpg" alt="">
									<span class="image-overlay"> <a target="_blank" href="http://www.github.com"><i
												data-original-title="Github" data-placement="top"
												class="tooltips fa fa-github circle-icon circle-small"></i></a></span>
								</div>
								<h3>Steven Thompson</h3>
								<div>
									Visual Designer
								</div>
								<div class="team-member-description">
									<p>
										Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
										mus. <strong>Lorem ipsum dolor</strong> sit amet, consectetuer adipiscing elit.
										Aenean commodo ligula eget dolor. Aenean massa.
									</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- end: MAIN CONTAINER -->

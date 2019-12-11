@extends('layouts.frontend')


@section('content')
<!-- inner page banner -->
<section class="innerpage_banner py-5">
	<div class="dot1">
		
	</div>
</section>
<!-- //inner page banner -->
<!-- about -->
	<div class="about py-5">
		<div class="container  py-md-3">
			<div class="w3-head-all mb-3">
		         <h3>About More</h3>
		       </div>
			<div class="agile_about_grids row">
				<div class="col-md-6 agile_about_grid_left">
				<div class="row">
					<div class="col-md-6 agile_about_grid_left1">
						<img src="images/ab1.jpg" alt=" " class="img-responsive img-fluid" />
					</div>
					<div class="col-md-6 agile_about_grid_left1">
						<img src="images/ab2.jpg" alt=" " class="img-responsive img-fluid" />
					</div>
					</div>
					<div class="clearfix"> </div>
					<img class="agile_about_grid_left_img img-responsive img-fluid" src="images/ab3.jpg" alt=" " />
				</div>
				<div class="col-md-6 agile_about_grid_right">
					<h4>voluptatibus maiores alias consequatur</h4>
					<p>Et harum quidem rerum facilis est et expedita <span>distinctio</span>. 
						Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil 
						impedit quo minus id <span>quod</span> maxime placeat facere possimus, omnis voluptas 
						assumenda est, omnis dolor repellendus. Temporibus <span>autem</span> quibusdam et aut
						officiis debitis.<i>impedit quo minus id <span>quod</span> maxime placeat facere possimus, omnis voluptas 
						assumenda est, omnis dolor repellendus. Temporibus <span>autem</span> quibusdam et aut
						officiis debitis.</i></p>
					<div class="about_more">
						<a href="#" class="read" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read more </a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->
<!-- Latest -->
<div class="latest py-5">
	<div class="container  py-md-3">
	<div class="w3-head-all mb-3">
		         <h3>Our plans</h3>
		       </div>
		<div class="news_grids row">
			<div class="col-lg-4">
				<div class="news_grid1">
					<div class="news_grid_info">
						<p class="date">On Jan 20th, 2018</p>
						<h3>Career plan</h3>
						<p>Vestibulum ut tincidunt lectus, vitae faucibus felis. Vivam uspretium leo eu iaculis lobortis.</p>
						<a href="#" class="read" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read more </a>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="news_grid2">
					<div class="news_grid_info">
						<p class="date">On Jan 20th, 2018</p>
						<h3>Placement plan</h3>
						<p>Vestibulum ut tincidunt lectus, vitae faucibus felis. Vivam uspretium leo eu iaculis lobortis.</p>
						<a href="#" class="read" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read more </a>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="news_grid3">
					<div class="news_grid_info">
						<p class="date">On Jan 20th, 2018</p>
						<h3>Online Test</h3>
						<p>Vestibulum ut tincidunt lectus, vitae faucibus felis. Vivam uspretium leo eu iaculis lobortis.</p>
						<a href="#" class="read" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read more </a>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //Latest -->
<!-- offers -->
	<div class="offers py-5">
		<div class="container  py-md-3">
			<div class="w3-head-all mb-3 news_head">
		         <h3>Latest News</h3>
		       </div>
			<div class="offers-grids row">
				<div class="col-md-6 wthree-offers-left">
					<div class="offers-left-heading">
						<h4>Quisque eu ullamcorper dui. Nullam commodo ornare ipsum.</h4>
					</div>
					<div class="offers-left-grids">
						<div class="offers-number">
							<p>1</p>
						</div>
						<div class="offers-text">
							<p>Integer egestas non lorem eget aliquet. Nulla egestas felis et maximus elementum. Morbi a dui ac nunc mollis rhoncus. Mauris eu erat vitae enim congue placerat. Integer consequat aliquet facilisis. Phasellus ut venenatis nisi, et lobortis sem.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="offers-left-grids offers-left-middle">
						<div class="offers-number">
							<p>2</p>
						</div>
						<div class="offers-text">
							<p>Integer egestas non lorem eget aliquet. Nulla egestas felis et maximus elementum. Morbi a dui ac nunc mollis rhoncus. Mauris eu erat vitae enim congue placerat. Integer consequat aliquet facilisis.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="offers-left-grids">
						<div class="offers-number">
							<p>3</p>
						</div>
						<div class="offers-text">
							<p>Integer egestas non lorem eget aliquet. Nulla egestas felis et maximus elementum. Morbi a dui ac nunc mollis rhoncus. Mauris eu erat vitae enim congue placerat.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 wthree-offers-right">
					<h5>Cras consequat et velit quis molestie. Etiam bibendum laoreet enim, nec malesuada ex fermentum et. Donec molestie diam nec lorem accumsan bibendum.</h5>
					<p>Vivamus est sem, pellentesque vel libero sit amet, varius tempor orci. Integer egestas metus vitae ultrices tristique. Fusce lectus dui, venenatis vitae justo nec, aliquet feugiat nunc. </p>
					<ul>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Phasellus sem leo, interdum quis risus</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Nullam egestas nisi id malesuada aliquet </a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Donec condimentum purus urna venenatis</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Ut congue, nisl id tincidunt lobor mollis</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Cum sociis natoque penatibus et magnis</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Suspendisse nec magna id ex pretium</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Ut congue, nisl id tincidunt lobor mollis</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- offers -->
	<!-- team -->
<div class="team py-5">
	<div class="container  py-md-3">
		<div class="w3-head-all mb-3">
		         <h3>Our Team</h3>
		       </div>
		<div class="teamgrids row">
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 teamgrid1">
				<img src="images/t1.jpg" class="img-responsive img-fluid" alt="" />
				<div class="teaminfo">
					<h3>Jason</h3>
					<div class="team-social">
						<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-linkedin-in"></i></a>
						<a href="#"><i class="fab fa-dribbble"></i></a>
					</div>
					<p><i class="fas fa-dot-circle" aria-hidden="true"></i>Supervisor</p>
					<p><i class="fas fa-phone" aria-hidden="true"></i> +02 133 4567</p>
	
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 teamgrid1">
				<img src="images/t2.jpg" class="img-responsive  img-fluid" alt="" />
				<div class="teaminfo">
					<h3>Archer</h3>
					<div class="team-social">
						<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-linkedin-in"></i></a>
						<a href="#"><i class="fab fa-dribbble"></i></a>
					</div>
					<p><i class="fas fa-dot-circle" aria-hidden="true"></i>Supervisor</p>
					<p><i class="fas fa-phone" aria-hidden="true"></i> +02 133 4567</p>
			
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 teamgrid1">
				<img src="images/t3.jpg" class="img-responsive  img-fluid" alt="" />
				<div class="teaminfo">
					<h3>Moody</h3>
						<div class="team-social">
						<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-linkedin-in"></i></a>
						<a href="#"><i class="fab fa-dribbble"></i></a>
					</div>
				<p><i class="fas fa-dot-circle" aria-hidden="true"></i>Supervisor</p>
					<p><i class="fas fa-phone" aria-hidden="true"></i> +02 133 4567</p>
				
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 teamgrid1">
				<img src="images/t4.jpg" class="img-responsive  img-fluid" alt="" />
				<div class="teaminfo">
					<h3>Duminy</h3>
						<div class="team-social">
						<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-linkedin-in"></i></a>
						<a href="#"><i class="fab fa-dribbble"></i></a>
					</div>
					<p><i class="fas fa-dot-circle" aria-hidden="true"></i>Supervisor</p>
					<p><i class="fas fa-phone" aria-hidden="true"></i> +02 133 4567</p>
					
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //team -->


<!-- footer -->
<section class="agile-footer w3ls-section py-5">
	<div class="container">
		<div class="list-footer">
			<ul class="footer-nav text-center">
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a href="about.html">About</a>
				</li>
				<li>
					<a href="services.html">Services</a>
				</li>
				<li>
					<a href="property.html">Properties</a>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</div>
		<div class="agileits_w3layouts-footer-bottom">
			<div class="row w3_agile-footer-grids py-5 my-4">
				<div class="col-lg-3 col-sm-12 w3_agile-footer1 f1">
					<h2 class="mb-3">
						<a href="index.html">Success path</a>
					</h2>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem atus error sit volupt unde.</p>
				</div>
				<div class="col-lg-7 col-sm-12 row w3_agile-footer1 f2">
					<div class="col-lg-4  col-sm-4 inner-li">
						<h5 class="mb-3">Partners</h5>
						<ul class="w3ls-footer-bottom-list">
							<li>
								<a class="page-scroll" href="services.html">Our Group</a>
							</li>
							<li>
								<a class="page-scroll" href="index.html">Training</a>
							</li>
							<li>
								<a class="page-scroll" href="gallery.html">Gallery</a>
							</li>
							<li>
								<a class="page-scroll" href="index.html">Reviews</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-4 col-sm-4 inner-li">
						<h5 class="mb-3">About us</h5>
						<ul class="w3ls-footer-bottom-list">
							<li>
								<a href="history.html">History</a>
							</li>
							<li>
								<a href="#">Terms of use</a>
							</li>
							<li>
								<a href="#">Privacy policy</a>
							</li>
							<li>
								<a href="#">Blog</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-4 col-sm-4 inner-li">
						<h5 class="mb-3">support</h5>
						<ul class="w3ls-footer-bottom-list">
							<li>
								<a href="#">24/7 service</a>
							</li>
							<li>
								<a href="#">FAQ</a>
							</li>
							<li>
								<a href="#">media</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-sm-4  w3_agile-footer1 f3">
					<h5 class="mb-3">Need Help?</h5>
					<ul class="footer-social-icons">
						<li>
							<a href="contact.html">
								Contact us
							</a>
						</li>
						<li>
							<a href="#">
								Careers
							</a>
						</li>
						<li>
							<a href="#">
								Success
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="agileits_w3layouts-copyright text-center">
			<p>© 2018 Success path. All Rights Reserved | Design by
				<a href="http://w3layouts.com/" target="=_blank"> W3layouts </a>
			</p>
		</div>
	</div>
</section>
<!-- //footer -->

@endsection
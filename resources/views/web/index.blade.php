@extends('layouts.frontend')

@section('content')
<!--Slider-->
<div class="slider">
	<div class="callbacks_container">
		<ul class="rslides callbacks callbacks1" id="/slider4">
			<li>
				<div class="slider-img1">
					<div class="dot">
						<div class="container" style="cursor: pointer;">
							<div class="slider_banner_info_w3ls">
								<h1 class="text-uppercase mb-3">Pendaftaran siswa baru</h1>
								<p>telah dibuka pendaftaran siswa baru gelombang III, SDIT NURUL YAQIN. Untuk pendaftaran..</p>

								<a href="/student-register" class="read" role="button">KLIK DISINI</a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<!-- <li>
				<div class="slider-img2">
					<div class="dot">
						<div class="container">
							<div class="slider_banner_info_w3ls">
								<h4 class="text-uppercase mb-3">We help you education to future</h4>
								<p>Etiam vitae augue odio. Ut laoreet ipsum vel ultrices viverra. Donec nisl dolor, mollis vel libero id, 
										tempor cursus lectus. Vestibulum eu ligula et pharetra efficitur. Maecenas eleifend.</p>

								<a href="#" class="read" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read more </a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="slider-img3">
					<div class="dot">
						<div class="container">
							<div class="slider_banner_info_w3ls">
								<h4 class="text-uppercase mb-3">Take the help from experts staff</h4>
								<p>Etiam vitae augue odio. Ut laoreet ipsum vel ultrices viverra. Donec nisl dolor, mollis vel libero id, 
										tempor cursus lectus. Vestibulum eu ligula et pharetra efficitur. Maecenas eleifend.</p>

								<a href="#" class="read" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read more </a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="slider-img4">
					<div class="dot">
						<div class="container">
							<div class="slider_banner_info_w3ls">
								<h4 class="text-uppercase mb-3">We provide quality education to future</h4>
								<p>Etiam vitae augue odio. Ut laoreet ipsum vel ultrices viverra. Donec nisl dolor, mollis vel libero id, 
										tempor cursus lectus. Vestibulum eu ligula et pharetra efficitur. Maecenas eleifend.</p>

								<a href="#" class="read" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read more </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li> -->
			<div class="clearfix"></div>
		</ul>
</div>

<!--//Slider-->
<!-- About us -->
	
<!-- //About us -->
<!--CONTENT NYA GW BACKUP-->

<!-- //agile_testimonials -->
	<!-- stats -->
	<div class="stats">
		<div class="container">
		<div class="wthree_head_section stats_head">
					<h3>ACTIVITY IN SDIT NURUL YAQIN</h3>
				</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 
			w3layouts_stats_left w3_counter_grid">
				<span class="fas fa-smile" aria-hidden="true"></span>
				<p class="counter">700</p>
				<h3>STUDENT</h3>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6   w3layouts_stats_left w3_counter_grid1">
				<span class="fas fa-bookmark" aria-hidden="true"></span>
				<p class="counter">19</p>
				<h3>EXTRAKULIKULER</h3>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6  w3layouts_stats_left w3_counter_grid2">
				<span class="fas fa-users" aria-hidden="true"></span>
				<p class="counter">73</p>
				<h3>TEACHERS</h3>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6  w3layouts_stats_left w3_counter_grid3">
				<span class="fas fa-trophy" aria-hidden="true"></span>
				<p class="counter">500</p>
				<h3>AWARDS WON</h3>
			</div>
			<div class="clearfix"> </div>
		</div>
			</div>
	</div>
	<!-- //stats -->


<!-- appointment -->
<div class="appointment" id="appointment">
<div class="container-fluid  py-md-3">
<div class="row">
<div class="col-md-5 about-bottoml-agileits">
		</div>
		<div class="col-md-7 about-bottomr-agileits">
			<div class="appointment_head">
				<h3>Make An Appointment </h3>
			</div>
				<div class="form-agileits">
				<form action="#" method="post">
				<h6>Personal information</h6>
						<input class="name" type="text" name="First Name" placeholder="First Name" required="">
						<input type="text" name="Last Name" placeholder="Last Name" required="">
						<input class="name" type="email" name="Email" placeholder="Email" required="">
						<input type="text" name="Phone" placeholder="Phone" required="">
						<div class="clearfix"> </div>
					<h6>Service and date</h6>
						<select class="form-control name">
							<option>Please Select Your Service</option>
							<option>Post-recovery</option>
							<option>Post-Trauma</option>
							<option>Migraines</option>
							<option>Chronic Pains</option>
						</select>
						<input  id="datepicker1" name="Text" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" placeholder="mm/dd/yyyy" required="">
					<div class="clearfix"> </div>
						<div class="wthree-text"> 
							<ul> 
								<li>
									<label class="anim">
										<input type="checkbox" class="checkbox">
										<span> Please send me latest news & updates</span> 
									</label> 
								</li>
							</ul>
							<div class="clearfix"> </div>
						</div>
						<input type="submit" value="Submit">
				</form>
				</div>
		</div>
		<div class="clearfix"> </div>
		</div>
		</div>
</div>
<!-- //appointment -->

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
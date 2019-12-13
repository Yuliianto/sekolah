@extends('layouts.frontend')

@section('content')
<!-- inner page banner -->
<section class="innerpage_banner py-5">
	<div class="dot1">
		
	</div>
</section>
<!-- //inner page banner -->
<!-- mail -->
				<div class="mail py-5" id="contact">
					<div class="container-fluid  py-md-3">	
						<div class="w3-head-all mb-3">
							<h3>Contact Us</h3>
							</div>
						   <div class="w3-agile_info row">
							<div class="col-lg-4 col-sm-6 col-xs-12 mail-agileits-w3layouts">
								<i class="fas fa-mobile-alt" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Phone</p><span>( 021 ) 22802417</span>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 col-xs-12 mail-agileits-w3layouts">
								<i class="far fa-envelope" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Email</p><a href="mailto:info.sditnurulyaqin@gmail.com">info.sditnurulyaqin@gmail.com</a>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 col-xs-12 mail-agileits-w3layouts mail-agileits-w3layouts1">
								<i class="fas fa-map-marker" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Address</p><span>SDI No. 50, Batu Ampar, Kramat Jati 13520</span>
								</div>
							</div>
							<div class="clearfix"></div>
							 </div>
						</div>
	<div class="container-fluid">	
			<div class="row">
				<div class="col-lg-7 map ">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26359195.17562375!2d-113.7156245614499!3d36.2473834534249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1452332634941"></iframe>
				</div>
					<div class="col-lg-5 mail-grid1-form ">
						<h3 class="tittle-w3"><span>Send a </span>Message</h3>
						<form action="#" method="post">
							<input type="text" name="Name" placeholder="Your Name" required="" />
							<input type="text" name="phone" placeholder="Your Phone" required="" />
							<input type="email" name="Email" placeholder="your Email" required="" />
							<textarea name="Message" placeholder="Your Message...." required=""></textarea>
							<input type="submit" value="Submit">
						</form>
					</div>
					<div class="clearfix"></div>
				</div>
				</div>
				</div>
			<!-- //mail -->
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
			<p>© 2018 SDIT Nurul Yaqin. All Rights Reserved | Design by
				<a href="http://hallomysa.com/" target="=_blank"> MYSA TEAM </a>
			</p>
		</div>
	</div>
</section>
<!-- //footer -->
@endsection
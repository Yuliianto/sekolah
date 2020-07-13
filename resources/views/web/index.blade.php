@extends('layouts.frontend')

@section('content')
<!--Slider-->

<div class="slider">
	<div class="callbacks_container">
		<ul class="rslides callbacks callbacks1" id="slider4">
			@foreach( $contents as $content)
			<li>
				<div class="slider-img1">
					<div class="dot">
						<div class="container" style="cursor: pointer;">
							<div class="slider_banner_info_w3ls">
								<h1 class="text-uppercase mb-3">{{ $content->xs1 }}</h1>
								<p>{!! $content->xs2 !!}</p>
								<div class="d-flex justify-content-around">
									<a href="/student-register" class="read" role="button">DAFTAR</a>
									<a href="/cek-pendaftaran" class="read" role="button">CEK PENDAFTARAN</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			@endforeach
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
			</li>
			<div class="clearfix"></div> -->
		</ul>
	</div>
</div>

<!--//Slider-->
<!-- About us -->
	<!-- <div class="about-3 py-5"> -->
<DIV  style="background-color:white;">
	<div class="container py-md-3">
			<div class="w3-head-all mb-3">
				<P>	
				 	<h4 class="blockquote text-center">&nbsp; </h4> 
				 	<h4 class="font-weight-normal text-center" style="color:#505359;">Assalamu'alaikum Warahmatullahi Wabarakatuh, Selamat Datang</h4> 
				</p>
			</div>
		</div>
</div>	

<DIV class="CONTAINER">
	<br><br>
	<div class="container py-md-3">
			<div class="d-flex">
					<div class="about1"> 
						<h4>{{ $ct_sambutan->xs1 }}</h4>
						<p class="details text-justify text-muted">{{ $ct_sambutan->xs2 }}</p>
						<br>
						<footer class="blockquote-footer ">Kepala Sekolah <cite title="Source Title">SDIT Nurul Yaqin</cite></footer>
							<!--<li>
							<span class="fab fa-accessible-icon" aria-hidden="true"></span>
								<div class="in-block">
									<h5>Our Activity</h5>
									<p>Suspendisse maximus leo vel facilisis porta. Aliquam posuere mollis auctor. Nunc eget massa eleifend, finibus felis eu, tincidunt eros.</p>
								</div>
							</li>
							<li>
							<span class="fas fa-bus" aria-hidden="true"></span>
								<div class="in-block">
									<h5>Our Vission</h5>
									<p>Suspendisse maximus leo vel facilisis porta. Aliquam posuere mollis auctor. Nunc eget massa eleifend, finibus felis eu, tincidunt eros.</p>
								</div>
							</li>-->
					</div>
				
					<div class="about2">
						<div> <image src="images/galery1.jpg" class="img-fluid" ></image> </div>
					</div>

			</div>		
	</div>
	<br><br>	
</DIV>


<div style="background-color:#5A635D;" >
	<div class="container">
		<br><br>
			<ul class="about-list" >

					<li>
						<span class="fas fa-chess-rook" aria-hidden="true"></span>
						<div class="in-block">

							<h1 style="color:#EADFF2;">{{ $ct_filosofi->xs1 }}</h5>
							<p class="font-weight-light " >{{ $ct_filosofi->xs2 }}</p>

						</div>
					</li>
			</ul>
		<br><br>
	</div>
</div>

	
<!-- //About us -->
<!--CONTENT NYA GW BACKUP-->



<!-- //agile_testimonials -->
	<!-- stats -->
	<div class="stats">
			<div class="container">
				<div class=" mt-3 wthree_head_section stats_head">
					<h3>ACTIVITY IN SDIT NURUL YAQIN</h3>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 w3layouts_stats_left w3_counter_grid">
						<span class="fas fa-smile" aria-hidden="true"></span>
						<p class="counter">{{ $calon_pendaftar }}</p>
						<h3>Pendaftar</h3>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6   w3layouts_stats_left w3_counter_grid1">
						<span class="fas fa-bookmark" aria-hidden="true"></span>
						<p class="counter">{{ $user_verify }}</p>
						<h3>Verifikasi</h3>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6  w3layouts_stats_left w3_counter_grid2">
						<span class="fas fa-users" aria-hidden="true"></span>
						<p class="counter">{{ $mhs }}</p>
						<h3>Mahasiswa</h3>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6  w3layouts_stats_left w3_counter_grid3">
						<span class="fas fa-trophy" aria-hidden="true"></span>
						<p class="counter">{{ $tidak_lulus }}</p>
						<h3>Tidak Lulus</h3>
					</div>
						<div class="clearfix"> </div>
				</div>
			</div>
	</div>
	<!-- //stats -->


<!-- appointment --><!-- 
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
</div> -->
<!-- //appointment -->


@endsection
@extends('layouts.frontend')

@section('content')
<!-- inner page banner -->
<section class="innerpage_banner py-5">
	<div class="dot1">
		
	</div>
</section>
<!-- //inner services page -->
<!-- /inner_content -->
	<div class="inner_content_info_agileits py-5">
		<div class="container  py-md-3">
		<div class="w3-head-all mb-3">
		         <h3>SDIT NURUL YAQIN</h3>
		       </div>
			<div class="inner_sec_grids_info_w3ls row">
				<div class="col-md-6 banner_bottom_left">
					<h4>ALAMAT <span>KAMI</span></h4>
					<p>
						<BR> Jalan                                : {{ $lk_alamat->xs2 }}
						<!-- <BR> Kelurahan                            : Batu Ampar
						<BR> Kecamatan                            : Kramat Jati
						<BR> Kabupaten/Kota Madya                 : Jakarta Timur -->
						<BR> Kode Pos                             : {{ $lk_alamat->xs6 }}
						<BR> Provinsi                             : {{ $lk_alamat->xs4 }}
						<!-- <BR> Telepon/Fax                          : ( 021 ) 22802417
						<BR> Tahun Operasional                    : 2014 -->
					</p>
					<ul class="some_agile_facts">
						@foreach($list_kontak as $ls)
						<li><span class="fas fa-phone" aria-hidden="true"></span>{{ $ls->xs3 }}  ( {{ $ls->xs4 }} )</li>
						@endforeach
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 banner_bottom_right">
					<div class="agileits_w3layouts_banner_bottom_grid">
						<img src="images/1.jpg" alt=" " class="img-responsive img-fluid" />
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //inner services page -->
<!-- choose -->
	<!-- <div class="jarallax w3-agileits-choose py-5">
			<div class="container  py-md-3">
				<div class="w3-head-all mb-3 w3_choose_head">
		         <h3>New Services</h3>
		       </div>
				<div class="agile-choose-grids row">
					<div class="col-lg-4 agile-choose-grid">
						<div class="choose-icon">
							<i class="fas fa-graduation-cap" aria-hidden="true"></i>
						</div>
						<div class="choose-info">
							<h4>PROFESSIONAL EDUCATION</h4>
							<p>Nunc et massa ut purus porta euismod quis eu erat. Nam ornare faucibus elit sed tempor. Quisque iaculis odio nibh, et auctor tellus rhoncus vel. Maecenas arcu neque</p>
						</div>
					</div>
					<div class="col-lg-4 agile-choose-grid">
						<div class="choose-icon">
							<i class="fas fa-pencil-alt" aria-hidden="true"></i>
						</div>
						<div class="choose-info">
							<h4>SPECIALIST TEACHING</h4>
							<p>Nunc et massa ut purus porta euismod quis eu erat. Nam ornare faucibus elit sed tempor. Quisque iaculis odio nibh, et auctor tellus rhoncus vel. Maecenas arcu neque</p>
						</div>
					</div>
					<div class="col-lg-4 agile-choose-grid">
						<div class="choose-icon">
							<i class="fas fa-keyboard" aria-hidden="true"></i>
						</div>
						<div class="choose-info">
							<h4>DIPLOMA EDUCATION</h4>
							<p>Nunc et massa ut purus porta euismod quis eu erat. Nam ornare faucibus elit sed tempor. Quisque iaculis odio nibh, et auctor tellus rhoncus vel. Maecenas arcu neque</p>
						</div>
					</div>
				</div>	
			</div>
	</div> -->
	<!-- //choose -->
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
						<h3>Calon Mahasiswa</h3>
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

@endsection
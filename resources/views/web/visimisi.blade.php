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
		         <h3>Visi</h3>
		    </div>
			<div class="agile_about_grids">

				<div class="col-md-12">
					<h4 class='text-center'>{!! $lk_visimisi->xs2 !!}</h4>
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
			<h3>MISI</h3>
			{!! $lk_visimisi->xs3 !!}
		</div>
		
		<!--<div class="news_grids row">
			<div class="col-lg-4">
				<div class="news_grid1">
					<div class="news_grid_info">
						<h3>Perilaku terpuji</h3>
						<p>Menumbuhkembangkan perilaku terpuji dan praktik nyata sehigga siswa dapat menjadi teladan bagi teman dan masyarakatnya.</p>
						
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="news_grid2">
					<div class="news_grid_info">
						<h3>Kemampuan berpikir</h3>
						<p>Menyelenggarakan pembelajaran untuk menumbuhkembangkan kemampuan berpikir aktif, kreatif dan aktif dalam memecahkan masalah.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="news_grid3">
					<div class="news_grid_info">
						<h3>Pengembangan diri</h3>
						<p>Menyelenggarakan pengembangan diri sehingga siswa dapat berkembang sesuai dengan minat dan bakatnya.</p>

					</div>
				</div>
			</div>-->
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //Latest -->
<!-- offers -->
	<div class="offers py-5">
		<div class="container  py-md-3">
			<div class="w3-head-all mb-3 news_head">
		         <h3>PELAKSANAAN</h3>
		       </div>
			<div class="offers-grids row">
				{!! $ct_pelaksanaan->xs2 !!}
				<!-- <div class="col-md-6 wthree-offers-left">
					<div class="offers-left-heading">
						<h4>Tujuan</h4>
					</div>
					<div class="offers-left-grids">
						<div class="offers-number">
							<p>1</p>
						</div>
						<div class="offers-text">
							<p>Mendidik siswa berakhlaq mulia, peduli sesama dengan menghidupkan senyum, salam dan sapa</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="offers-left-grids offers-left-middle">
						<div class="offers-number">
							<p>2</p>
						</div>
						<div class="offers-text">
							<p>Memberikan dasar – dasar pengetahuan, kemampuan, dan keterampilan yang terkini untuk bisa berkompetisi dalam kehidupan secara global</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="offers-left-grids offers-left-middle">
						<div class="offers-number">
							<p>3</p>
						</div>
						<div class="offers-text">
							<p>Menanamkan rasa kebangsaan, kebanggaan terhadap budaya, dan cinta tanah air dalam bermasyarakat</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="offers-left-grids">
						<div class="offers-number">
							<p>4</p>
						</div>
						<div class="offers-text">
							<p>Mewujudkan siswa beriman dan bertaqwa kepada Allah SWT</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 wthree-offers-right">
					<div class="offers-left-heading">
						<h4>Target</h4>
					</div>
					<ul>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Hafal Al Quran juz 30 dan surat – surat pilihan</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Diterima di sekolah Negeri atau Swasta unggulan </a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Terbiasa sholat dengan baik dan benar</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Terbiasa membaca doa dan zikir harian</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Terbiasa berakhlak Islami</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Mampu berkomunikasi dengan baik</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Dapat mengoperasionalkan Komputer</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Memiliki keberanian dan kemandirian</a></li>
					</ul> -->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- offers -->
	<!-- team -->
<!-- <div class="team py-5">
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
</div> -->
<!-- //team -->


@endsection
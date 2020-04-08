<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>{{ $title }}</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Success path Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="{{ asset('css/fontawesome-all.css') }}"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<link rel='stylesheet' href="css/easy-responsive-tabs.css" type='text/css'/>
	<link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}" /><!-- Calendar -->
	<!-- testimonials css -->
	<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" property="" /><!-- flexslider css -->
	<!-- //testimonials css -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //web-fonts -->
	 <link rel="icon" type="image/gif" href="{{ asset('images/logo-nurul-yaqin.png') }}" />
	 <link rel="shortcut icon" href="{{ asset('images/logo-nurul-yaqin.png') }}" />
<style type="text/css">
.loader {
    border: 16px solid #f3f3f3; /* Light grey */
    border-top: 16px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 120px;
    height: 120px;
    animation: spin 2s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>
</head>

<body>

@section('navigator')

<!-- Navigation -->
<header>
	<div class="top-nav">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand text-uppercase" href="/">
					<img src="{{ asset('images/logo-nurul-yaqin.png') }}" style="width: 40px; height: 40px;">
					<label class=""> {{ $profil->xs2 }} </label>
					<!-- <i class="fab fa-studiovinari"></i> -->
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-center pr-md-4" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item {{ $page_name === 'home' ? 'active':'' }}">
							<a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link {{ $page_name === 'visimisi' ? 'active':'' }}" href="/visimisi">Visi & Misi</a>
						</li>
						<li class="nav-item">
							<a class="nav-link {{ $page_name === 'profiles' ? 'active':'' }}" href="/profiles">Profiles</a>
						</li>
						<li class="nav-item">
							<a class="nav-link {{ $page_name === 'gallery' ? 'active':'' }}" href="/gallery">Gallery</a>
						</li><!-- 
						<li class="dropdown nav-item">
							<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Mamber Area
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu agile_short_dropdown">
								<li>
									<a href="/login">Login</a>
								</li>
								<li>
									<a href="/register">Register</a>
								</li>
							</ul>
						</li> -->
						<li class="nav-item">
							<a class="nav-link {{ $page_name === 'contact' ? 'active':'' }}" href="/contact">Contact</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</header>
<!-- //Navigation -->
@show

@yield('content')


@section('modal')
<!-- Vertically centered Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-uppercase text-center" id="exampleModalLongTitle"> SDIT NURUL YAQIN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<img src="images/ban11.jpg" class="img-fluid mb-3" alt="Modal Image" />
        Vivamus eget est in odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum, ut auctor turpis cursus. Sed sed odio pharetra, aliquet velit cursus, vehicula enim. Mauris porta aliquet magna, eget laoreet ligula.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- //Vertically centered Modal -->
@show

@section('script-js')

<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->	
	
	<!-- Banner Responsive slider -->
	<script src="{{ asset('js/responsiveslides.min.js') }}"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!-- // Banner Responsive slider -->
	<!-- script for responsive tabs -->						
<script src="{{ asset('js/easy-responsive-tabs.js') }}"></script>
<script>
	$(document).ready(function () {
		$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
}
});
		$('#verticalTab').easyResponsiveTabs({
			type: 'vertical',
			width: 'auto',
			fit: true
		});
	});
</script>
<!--script for responsive tabs -->
<!-- Calendar -->
				<script src="{{ asset('js/jquery-ui.js') }}"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
<!-- stats -->
	<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('js/jquery.countup.js') }}"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
	<!-- flexSlider --><!-- for testimonials -->
	<script defer src="{{ asset('js/jquery.flexslider.js') }}"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- //flexSlider --><!-- for testimonials -->

	<!-- start-smoth-scrolling -->
	<script src="{{ asset('js/SmoothScroll.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scroslling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->
	
<!-- //js-scripts -->
@show
</body>
</html>
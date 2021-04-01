@extends("template.main")
@section('content')

	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="{{asset('img/logo.png')}}" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li><a href="/">Home</a></li>
				<li><a href="/services">Services</a></li>
				<li><a href="/blog">Blog</a></li>
				<li class="active"><a href="/contact">Contact</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Contact</h2>
				<div class="page-links">
					<a href="/">Home</a>
					<span>Contact</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end -->


	<!-- Google map -->
	<div class="mapouter"><div class="gmap_canvas"><iframe width="1900" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q={{$map->name}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies2.org/%22%3Efmovies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style><a href="https://www.embedgooglemap.net/%22%3Egoogle map iframe generator</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div></div>

	@include('partials.contact.contactSection')
@endsection


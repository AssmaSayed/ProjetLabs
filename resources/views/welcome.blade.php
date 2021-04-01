@extends('template.main')

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
				<li class="active"><a href="/">Home</a></li>
				<li><a href="/services">Services</a></li>
				<li><a href="/blog">Blog</a></li>
				<li><a href="/contact">Contact</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->



	@include('partials.home.carousel')
	@include('partials.home.aboutSectionCard')
	@include('partials.home.testimonialSection')
	@include('partials.home.servicesSection')
	@include('partials.home.section')
	@include('partials.home.promotionReady')
	@include('partials.contact')
    
@endsection
	<!-- features section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>{{$dbServicesTitreSpan[0]->titre1}} <span>{{$dbServicesTitreSpan[0]->span}}</span> {{$dbServicesTitreSpan[0]->titre2}}</h2>
			</div>
			<div class="row">
				<!-- feature item -->

				<div class="col-md-4 col-sm-4 features">
					@foreach ($dbServicesFeature as $item)
					<div class="icon-box light left">
						<div class="service-text">
							<h2>{{$item->titre}}</h2>
							<p>{{$item->text}}</p>
						</div>
						<div class="icon">
							<i class="{{$item->icon}}"></i>
						</div>
					</div>
					@endforeach
				</div>
				<!-- Devices -->
				<div class="col-md-4 col-sm-4 devices">
					<div class="text-center">
						<img src="{{$dbServicesFeatureImg[0]->img}}" alt="">
					</div>
				</div>	
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					@foreach ($dbServicesFeature as $item)
					<div class="icon-box light left">
						<div class="service-text">
							<h2>{{$item->titre}}</h2>
							<p>{{$item->text}}</p>
						</div>
						<div class="icon">
							<i class="{{$item->icon}}"></i>
						</div>
					</div>
					@endforeach
			</div>
			<div class="text-center mt100">
				<a href="" class="site-btn">Browse</a>
			</div>
		</div>
	</div>
	<!-- features section end-->

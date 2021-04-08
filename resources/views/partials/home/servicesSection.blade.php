	<!-- Services section -->
	<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<h2>{{$dbHomeTitreSpan[1]->titre1}}<span>{{$dbHomeTitreSpan[1]->span}}</span> {{$dbHomeTitreSpan[1]->titre2}}</h2>
			</div>
			<div class="row">
				<!-- single service -->
				@foreach ($dbHomeService as $item)
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="{{$item->icon}}"></i>
						</div>
						<div class="service-text">
							<h2>{{$item->services}}</h2>
							<p>{{$item->text}}</p>
						</div>
					</div>
				</div>
				@endforeach
			<div class="text-center">
				<a href="#team" class="site-btn">Browse</a>
			</div>
		</div>
	</div>
	<!-- services section end -->

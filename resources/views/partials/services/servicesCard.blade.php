	<!-- services card section-->
	<div class="services-card-section spad">
		<div class="container">
			<div class="row">
				<!-- Single Card -->
				@foreach ($dbServicesServicesCard as $item)
				<div class="col-md-4 col-sm-6">
					<div class="sv-card">
						<div class="card-img">
							<img src="{{$item->img}}" alt="">
						</div>
						<div class="card-text">
							<h2>{{$item->titre}}</h2>
							<p>{{$item->text}}</p>
						</div>
					</div>
				</div>					
				@endforeach
			</div>
		</div>
	</div>
	<!-- services card section end-->

	<!-- Team Section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>{{$dbHomeTitreSpan[2]->titre1}}<span>{{$dbHomeTitreSpan[2]->span}}</span> {{$dbHomeTitreSpan[2]->titre2}}</h2>
			</div>
			<div class="row">
				<!-- single member -->
				@foreach ($dbHomeSection as $item)
				<div class="col-sm-4">
					<div class="member">
						<img src="{{$item->img}}" alt="">
						<h2>{{$item->name}}</h2>
						<h3>{{$item->role}}</h3>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- Team Section end-->


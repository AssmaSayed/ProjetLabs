	<!-- Team Section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div id="team" class="container">

			<div class="section-title">
				<h2>{{$dbHomeTitreSpan[2]->titre1}}<span>{{$dbHomeTitreSpan[2]->span}}</span> {{$dbHomeTitreSpan[2]->titre2}}</h2>
			</div>
			<div class="row">
				@foreach ($dbHomeSection->where('id', "!=", 1)->random(2) as $item)
					<!-- single member -->
					{{-- {{dd($dbHomeSection)}} --}}
					{{-- {{dd ($item->img)}} --}}
					<div class="col-sm-4">
						<div class="member">
							<img src="{{asset('storage/img/'.$item->img)}}" alt="" height="440px" width="360px">
							<h2>{{$item->name}}</h2>
							<h3>{{$item->role}}</h3>
						</div>
					</div>
					@if ($loop->iteration == 1)
						<div class="col-sm-4">
							<div class="member">
								<img src="{{asset('storage/img/'.$dbHomeSection[0]->img)}}" alt="" height="440px" width="360px">
								<h2>{{$dbHomeSection[0]->name}}</h2>
								<h3>{{$dbHomeSection[0]->role}}</h3>
							</div>
						</div>
					@endif
				@endforeach			
			</div>
		</div>
	</div>
	<!-- Team Section end-->


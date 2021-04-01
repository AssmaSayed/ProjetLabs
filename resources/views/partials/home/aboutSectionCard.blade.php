	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					<!-- single card -->
					@foreach ($dbHomeCardSection as $item)				
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
								<i class="{{$item->icon}}"></i>
							</div>
							<h2>{{$item->titre}}</h2>
							<p>{{$item->text}}</p>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- card section end-->


		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				<div class="section-title">
					<h2>{{$dbHomeTitreSpan[0]->titre1}}<span>{{$dbHomeTitreSpan[0]->span}}</span>{{$dbHomeTitreSpan[0]->titre2}}</h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p>{{$dbHomeAboutContant[0]->textGauche}}</p>
					</div>
					<div class="col-md-6">
						<p>{{$dbHomeAboutContant[0]->textDroite}}</p>
					</div>
				</div>
				<div class="text-center mt60">
					<a href="" class="site-btn">{{$dbHomeAboutContant[0]->button}}</a>
				</div>
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<img src="{{$dbHomeAboutContant[0]->img}}" alt="">
							<a href="{{$dbHomeAboutContant[0]->href}}" class="video-popup">
								<i class="fa fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About section end -->

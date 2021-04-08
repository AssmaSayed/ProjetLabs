	<!-- Testimonial section -->
	<div class="testimonial-section pb100">
		<div class="test-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left">
						<h2>{{$dbHomeTitre[0]->titre}}</h2>
					</div>
					<div class="owl-carousel" id="testimonial-slide">
						<!-- single testimonial -->
						@foreach ($testimonials as $item)
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>{{$item->text}}</p>
							<div class="client-info">
								<div class="avatar">
									<img src="{{$item->img}}" alt="">
								</div>
								<div class="client-name">
									<h2>{{$item->name}}</h2>
									<p>{{$item->role}}</p>
								</div>
							</div>
						</div>							
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial section end-->

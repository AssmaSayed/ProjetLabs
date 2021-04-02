	<!-- newsletter section -->
	<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h2>{{$dbNewsletter[0]->titre}}</h2>
				</div>
				<div class="col-md-9">
					<!-- newsletter form -->
					<form action="/newsletterMail" method="POST" class="nl-form">
						@csrf
						<input type="text" name='email' placeholder="Your e-mail here">
						<button class="site-btn btn-2">{{$dbNewsletter[0]->button}}</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- newsletter section end-->

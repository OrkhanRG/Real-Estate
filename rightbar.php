<?php 

if (basename($_SERVER['PHP_SELF'])==basename(__FILE__)) {
	exit("Giriş qadağandır!!!");
}

 ?>

<div class="col-md-3">
	<aside class="sidebar">
		<h2 class="font-weight-normal mb-lg">
			Special offers
		</h2>
		<div class="special-offer-item center text-color-light">
			<a href="demo-real-estate-properties.html" class="text-decoration-none">
				<span class="special-offer-wrapper">
					<img src="img/demos/real-estate/offers/special-offer-1.jpg" class="img-responsive" alt="">
					<span class="special-offer-infos text-color-light">
						<span class="special-offer-description font-weight-light text-lg">
							Amazing Houses <br>Collection
						</span>
						<span class="special-offer-title font-weight-bold text-uppercase text-md pb-xlg mb-md">
							from: $100,000
						</span>
						<button class="btn btn-secondary text-uppercase p-sm pl-xlg pr-xlg">view more</button>
					</span>
				</span>
			</a>
		</div>
		<div class="special-offer-item center text-color-light">
			<a href="demo-real-estate-properties.html" class="text-decoration-none">
				<span class="special-offer-wrapper">
					<img src="img/demos/real-estate/offers/special-offer-2.jpg" class="img-responsive" alt="">
					<span class="special-offer-infos text-color-light pt-lg">
						<span class="special-offer-description font-weight-light text-lg">
							Exclusive Comdominium
						</span>
						<span class="special-offer-title font-weight-bold text-uppercase text-md mb-md">
							Miami Beach
						</span>
						<button class="btn btn-secondary text-uppercase p-sm pl-xlg pr-xlg">view more</button>
					</span>
				</span>
			</a>
		</div>
		<div class="agents text-color-light center">
			<h4 class="text-light pt-xl m-none">Our Agents</h4>
			<div class="owl-carousel owl-theme nav-bottom rounded-nav pl-xs pr-xs pt-md m-none" data-plugin-options='{"items": 1, "loop": false, "dots": false, "nav": true}'>
				<div class="pr-sm pl-sm">
					<a href="demo-real-estate-agents-detail.html" class="text-decoration-none">
						<span class="agent-thumb">
							<img class="img-responsive img-circle" src="img/team/team-11.jpg" alt />
						</span>
						<span class="agent-infos text-light pt-md">
							<strong class="text-uppercase font-weight-bold">Bruno Doe</strong>
							<span class="font-weight-light">123-456-789</span>
							<span class="font-weight-light">bruno@domain.com</span>
						</span>
					</a>
				</div>
				<div class="pr-sm pl-sm">
					<a href="demo-real-estate-agents-detail.html" class="text-decoration-none">
						<span class="agent-thumb">
							<img class="img-responsive img-circle" src="img/team/team-12.jpg" alt />
						</span>
						<span class="agent-infos text-light pt-md">
							<strong class="text-uppercase font-weight-bold">Jeff doe</strong>
							<span class="font-weight-light">123-456-789</span>
							<span class="font-weight-light">jeffdoe@domain.com</span>
						</span>
					</a>
				</div>
				<div class="pr-sm pl-sm">
					<a href="demo-real-estate-agents-detail.html" class="text-decoration-none">
						<span class="agent-thumb">
							<img class="img-responsive img-circle" src="img/team/team-13.jpg" alt />
						</span>
						<span class="agent-infos text-light pt-md">
							<strong class="text-uppercase font-weight-bold">Jessica Doe</strong>
							<span class="font-weight-light">123-456-789</span>
							<span class="font-weight-light">jessicadoe@domain.com</span>
						</span>
					</a>
				</div>
			</div>
		</div>
		<div class="newsletter box-shadow-custom p-xlg center">
			<i class="icon-envelope-letter icons"></i>
			<h4 class="mt-xs mb-xs">
				Newsletter
			</h4>
			<p>
				Subscribe and be the first to know about our best offers
			</p>

			<div class="alert alert-success hidden" id="newsletterSuccess">
				<strong>Success!</strong> You've been added to our email list.
			</div>

			<div class="alert alert-danger hidden" id="newsletterError"></div>

			<form id="newsletterForm" class="text-black pt-sm" action="php/newsletter-subscribe.php" method="POST">
				<input class="form-control" placeholder="Your Name *" name="newsletterName" id="newsletterName" type="text">
				<input class="form-control" placeholder="Your Email Address *" name="newsletterEmail" id="newsletterEmail" type="text">
				<button class="btn btn-default text-uppercase background-color-secondary pt-sm pr-xlg pb-sm pl-xlg mt-xlg text-light" type="submit">Subscribe</button>
			</form>
		</div>
	</aside>
</div>
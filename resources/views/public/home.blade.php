		
@extends('public.layouts.parent')

@section('title', "Move Right® | The right move!")

@section('content')

	<!-- 
	=============================================
		Hero Banner
	============================================== 
	-->
	<div class="hero-banner-four position-relative">
		<div class="position-relative main-bg position-relative z-1 pt-150 xl-pt-120 md-pt-60 pb-150 xl-pb-120 md-pb-80">
			<div class="hero-slider-one m0">
				<div class="item m0"><div class="hero-img" style="background-image: url({{ asset("images/media/img_32.jpg") }});"></div></div>
				<div class="item m0"><div class="hero-img" style="background-image: url({{ asset("images/media/img_27.jpg") }} );"></div></div>
				<div class="item m0"><div class="hero-img" style="background-image: url({{ asset("images/media/img_28.jpg") }});"></div></div>
			</div>
			<!-- /.hero-slider-one -->
			<div class="container position-relative z-2">
				<div class="row">
					<div class="col-lg-6 wow fadeInLeft">
						<div class="mt-45">
							<h1 class="hero-heading text-white fw-500">
								Buy, Sell & Rent.
								<span class="d-block d-lg-inline-flex">
									<img src="images/lazy.svg" data-src="{{ asset("images/media/img_33.jpg") }}" alt="" class="lazy-img avatar">
									<img src="images/lazy.svg" data-src="{{ asset("images/media/img_34.jpg") }}" alt="" class="lazy-img avatar">
									<img src="images/lazy.svg" data-src="{{ asset("images/media/img_35.jpg") }}" alt="" class="lazy-img avatar">
									<img src="images/lazy.svg" data-src="{{ asset("images/media/img_36.jpg") }}" alt="" class="lazy-img avatar">
								</span>
							</h1>
							<p class="fs-24 text-white pt-40 pb-30 md-pb-20 pe-xl-5">Explore a vast selection listings, including apartments, houses and plots.</p>
							<div class="d-inline-flex flex-wrap align-items-center">
								<a href="listing_01.html" class="btn-two rounded-0 border-0 mt-15 me-4"><span>Explore All</span></a>
								{{-- <a href="contact.html" class="btn-eight inverse mt-15"><span>Request a Callback</span> <i class="fa-sharp fa-light fa-arrow-right-long"></i></a> --}}
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-lg-6 ms-auto wow fadeInRight">
						<div class="search-wrapper-two position-relative ms-xl-5 ms-lg-4 ps-xxl-4 md-mt-60">
							<nav class="search-filter-nav-two d-inline-flex">
								<div class="nav nav-tabs border-0" role="tablist">
									<button class="nav-link active" id="buy-tab" data-bs-toggle="tab" data-bs-target="#buy" type="button" role="tab" aria-controls="buy" aria-selected="true">Buy</button>
									<button class="nav-link" id="rent-tab" data-bs-toggle="tab" data-bs-target="#rent" type="button" role="tab" aria-controls="rent" aria-selected="false">Rent</button>
									<button class="nav-link" id="sell-tab" data-bs-toggle="tab" data-bs-target="#sell" type="button" role="tab" aria-controls="sell" aria-selected="false">Sell</button>
								</div>
							</nav>
							<div class="bg-wrapper position-relative z-1">
								<h4 class="mb-35 xl-mb-30">Find & Buy Now!</h4>
								<div class="tab-content">
									<div class="tab-pane show active" id="buy" role="tabpanel" aria-labelledby="buy-tab" tabindex="0">
										<form action="#">
											<div class="row gx-0 align-items-center">
												<div class="col-12">
													<div class="input-box-one bottom-border mb-25">
														<div class="label">I’m looking to...</div>
														<select class="nice-select fw-normal">
															<option value="1">Buy Apartments</option>
															<option value="2">Buy Condos</option>
															<option value="3">Buy Houses</option>
															<option value="4">Buy Industrial</option>
															<option value="6">Buy Villas</option>
														</select>
													</div>
													<!-- /.input-box-one -->
												</div>
												<div class="col-12">
													<div class="input-box-one bottom-border mb-25">
														<div class="label">Location</div>
														<select class="nice-select location fw-normal">
															<option value="1">Dhanmondi, Dhaka</option>
															<option value="2">Acapulco, Mexico</option>
															<option value="3">Berlin, Germany</option>
															<option value="4">Cannes, France</option>
															<option value="5">Delhi, India</option>
															<option value="6">Giza, Egypt </option>
															<option value="7">Havana, Cuba</option>
														</select>
													</div>
													<!-- /.input-box-one -->
												</div>
												<div class="col-12">
													<div class="input-box-one bottom-border mb-50 lg-mb-30">
														<div class="label">Price Range</div>
														<select class="nice-select fw-normal">
															<option value="1">$10,000 - $200,000</option>
															<option value="2">$200,000 - $300,000</option>
															<option value="2">$300,000 - $400,000</option>
														</select>
													</div>
													<!-- /.input-box-one -->
												</div>
												<div class="col-12">
													<div class="input-box-one">
														<button class="btn-five text-uppercase rounded-0 w-100">Search</button>
													</div>
													<!-- /.input-box-one -->
												</div>
											</div>
										</form>
									</div>
									<div class="tab-pane" id="rent" role="tabpanel" aria-labelledby="rent-tab" tabindex="0">
										<form action="#">
											<div class="row gx-0 align-items-center">
												<div class="col-12">
													<div class="input-box-one bottom-border mb-25">
														<div class="label">I’m looking to...</div>
														<select class="nice-select fw-normal">
															<option value="1">Rent Apartments</option>
															<option value="2">Rent Condos</option>
															<option value="3">Rent Houses</option>
															<option value="4">Rent Industrial</option>
															<option value="6">Rent Villas</option>
														</select>
													</div>
													<!-- /.input-box-one -->
												</div>
												<div class="col-12">
													<div class="input-box-one bottom-border mb-25">
														<div class="label">Location</div>
														<select class="nice-select location fw-normal">
															<option value="1">Dhanmondi, Dhaka</option>
															<option value="2">Acapulco, Mexico</option>
															<option value="3">Berlin, Germany</option>
															<option value="4">Cannes, France</option>
															<option value="5">Delhi, India</option>
															<option value="6">Giza, Egypt </option>
															<option value="7">Havana, Cuba</option>
														</select>
													</div>
													<!-- /.input-box-one -->
												</div>
												<div class="col-12">
													<div class="input-box-one bottom-border mb-50 lg-mb-30">
														<div class="label">Price Range</div>
														<select class="nice-select fw-normal">
															<option value="1">$10,000 - $200,000</option>
															<option value="2">$200,000 - $300,000</option>
															<option value="2">$300,000 - $400,000</option>
														</select>
													</div>
													<!-- /.input-box-one -->
												</div>
												<div class="col-12">
													<div class="input-box-one">
														<button class="btn-five text-uppercase rounded-0 w-100">Search</button>
													</div>
													<!-- /.input-box-one -->
												</div>
											</div>
										</form>
									</div>
									<div class="tab-pane" id="sell" role="tabpanel" aria-labelledby="sell-tab" tabindex="0">
										<form action="#">
											<div class="row gx-0 align-items-center">
												<div class="col-12">
													<div class="input-box-one bottom-border mb-25">
														<div class="label">I’m looking to...</div>
														<select class="nice-select fw-normal">
															<option value="1">Sell Apartments</option>
															<option value="2">Sell Condos</option>
															<option value="3">Sell Houses</option>
															<option value="4">Sell Industrial</option>
															<option value="6">Sell Villas</option>
														</select>
													</div>
													<!-- /.input-box-one -->
												</div>
												<div class="col-12">
													<div class="input-box-one bottom-border mb-25">
														<div class="label">Location</div>
														<select class="nice-select location fw-normal">
															<option value="1">Dhanmondi, Dhaka</option>
															<option value="2">Acapulco, Mexico</option>
															<option value="3">Berlin, Germany</option>
															<option value="4">Cannes, France</option>
															<option value="5">Delhi, India</option>
															<option value="6">Giza, Egypt </option>
															<option value="7">Havana, Cuba</option>
														</select>
													</div>
													<!-- /.input-box-one -->
												</div>
												<div class="col-12">
													<div class="input-box-one bottom-border mb-50 lg-mb-30">
														<div class="label">Price Range</div>
														<select class="nice-select fw-normal">
															<option value="1">$10,000 - $200,000</option>
															<option value="2">$200,000 - $300,000</option>
															<option value="2">$300,000 - $400,000</option>
														</select>
													</div>
													<!-- /.input-box-one -->
												</div>
												<div class="col-12">
													<div class="input-box-one">
														<button class="btn-five text-uppercase rounded-0 w-100">Search</button>
													</div>
													<!-- /.input-box-one -->
												</div>
											</div>
										</form>
									</div>
								</div>
								<!-- /.tab-content -->
							</div>
						</div>
						<!-- /.search-wrapper-two -->
					</div>
				</div>
			</div>
		</div>
		{{-- <div class="social-elemnet">
			<ul class="style-none d-flex align-items-center">
				<li><a href="#" class="tran3s">Fb.</a></li>
				<li><a href="#" class="tran3s">Tw.</a></li>
				<li><a href="#" class="tran3s">Inst.</a></li>
			</ul>
		</div>
		<div class="scroll-bar"><span>Scroll</span></div> --}}
	</div>
	<!-- /.hero-banner-four -->

	<!-- 
	=============================================
		Property Listing Two
	============================================== 
	-->
	<div class="property-listing-five mt-170 xl-mt-120">
		<div class="container container-large">
			<div class="position-relative">
				<div class="title-one mb-25 lg-mb-10 wow fadeInUp">
					<h3>New Listings</h3>
					<p class="fs-22">Explore latest and featured properties for sale & rent.</p>
				</div>
				<!-- /.title-one -->

				<div class="row gx-xxl-5">

					@foreach ($latestProperties as $propNumber => $property)

						<div class="col-lg-4 col-md-6 d-flex mt-40 wow fadeInUp">
							<div class="listing-card-one style-two shadow-none h-100 w-100">
								<div class="img-gallery">
									<div class="position-relative overflow-hidden">
										<div class="tag fw-500">FOR {{ ucfirst($property->list_in) }}</div>
										<div id="carousel{{$propNumber}}" class="carousel slide">
											<div class="carousel-indicators">
												<button type="button" data-bs-target="#carousel{{$propNumber}}" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
												<button type="button" data-bs-target="#carousel{{$propNumber}}" data-bs-slide-to="1" aria-label="Slide 2"></button>
												<button type="button" data-bs-target="#carousel{{$propNumber}}" data-bs-slide-to="2" aria-label="Slide 3"></button>
											</div>
											<div class="carousel-inner">
												@foreach ($property->media as $index => $media)
													<div class="carousel-item {{ $index == 0 ? "active" : "" }} " data-bs-interval="1000000">
														<a href="{{ route("public.property", $property->id) }}" class="d-block"><img src="{{ Storage::url($media) }}" class="w-100" alt="..."></a>
													</div>
													
												@endforeach
												{{-- <div class="carousel-item" data-bs-interval="1000000">
													<a href="#" class="d-block"><img src="images/listing/img_18.jpg" class="w-100" alt="..."></a>
												</div>
												<div class="carousel-item" data-bs-interval="1000000">
													<a href="#" class="d-block"><img src="images/listing/img_19.jpg" class="w-100" alt="..."></a>
												</div> --}}
											</div>
										</div>
									</div>
								</div>
								<!-- /.img-gallery -->
								<div class="property-info pt-20">
									<a href="{{ route("public.property", $property->id) }}" class="title tran3s">{{ $property->title }}</a>
									<div class="address">{{ $property->location->area->name }}, {{ $property->location->city->name }}, UK</div>
									<ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between pb-15 pt-5">
										<li class="d-flex align-items-center">
											<img src="images/lazy.svg" data-src="{{ asset("images/icon/icon_32.svg") }}" alt="" class="lazy-img icon me-2">
											<span class="fs-16"><span class="color-dark">{{ $property->sq_yard }}</span> sqyard</span>
										</li>
										<li class="d-flex align-items-center">
											<img src="images/lazy.svg" data-src="{{ asset("images/icon/icon_33.svg") }}" alt="" class="lazy-img icon me-2">
											<span class="fs-16"><span class="color-dark">{{ $property->bedrooms }}</span> bedrooms</span>
										</li>
										<li class="d-flex align-items-center">
											<img src="images/lazy.svg" data-src="{{ asset("images/icon/icon_34.svg") }}" alt="" class="lazy-img icon me-2">
											<span class="fs-16"><span class="color-dark">{{ $property->bathrooms }}</span> bathrooms</span>
										</li>
									</ul>
									<div class="pl-footer top-border bottom-border d-flex align-items-center justify-content-between">
										<strong class="price fw-500 color-dark">£{{ $property->price }}</strong>
										<a href="{{ route("public.property", $property->id) }}" class="btn-four"><i class="bi bi-arrow-up-right"></i></a>
									</div>
								</div>
								<!-- /.property-info -->
							</div>
							<!-- /.listing-card-one -->
						</div>
					
					@endforeach
					{{-- <div class="col-lg-4 col-md-6 d-flex mt-40 wow fadeInUp" data-wow-delay="0.1s">
						<div class="listing-card-one style-two shadow-none h-100 w-100">
							<div class="img-gallery">
								<div class="position-relative overflow-hidden">
									<div class="tag fw-500">FOR SELL</div>
									<div id="carousel2" class="carousel slide">
										<div class="carousel-indicators">
											<button type="button" data-bs-target="#carousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
											<button type="button" data-bs-target="#carousel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
											<button type="button" data-bs-target="#carousel2" data-bs-slide-to="2" aria-label="Slide 3"></button>
										</div>
										<div class="carousel-inner">
											<div class="carousel-item active" data-bs-interval="1000000">
												<a href="#" class="d-block"><img src="images/listing/img_18.jpg" class="w-100" alt="..."></a>
											</div>
											<div class="carousel-item" data-bs-interval="1000000">
												<a href="#" class="d-block"><img src="images/listing/img_19.jpg" class="w-100" alt="..."></a>
											</div>
											<div class="carousel-item" data-bs-interval="1000000">
												<a href="#" class="d-block"><img src="images/listing/img_17.jpg" class="w-100" alt="..."></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /.img-gallery -->
							<div class="property-info pt-20">
								<a href="listing_details_03.html" class="title tran3s">White House villa</a>
								<div class="address">Muza link road, ca, usa</div>
								<ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between pb-15 pt-5">
									<li class="d-flex align-items-center">
										<img src="images/lazy.svg" data-src="images/icon/icon_32.svg" alt="" class="lazy-img icon me-2">
										<span class="fs-16"><span class="color-dark">1270</span> sqft</span>
									</li>
									<li class="d-flex align-items-center">
										<img src="images/lazy.svg" data-src="images/icon/icon_33.svg" alt="" class="lazy-img icon me-2">
										<span class="fs-16"><span class="color-dark">02</span> bed</span>
									</li>
									<li class="d-flex align-items-center">
										<img src="images/lazy.svg" data-src="images/icon/icon_34.svg" alt="" class="lazy-img icon me-2">
										<span class="fs-16"><span class="color-dark">02</span> bath</span>
									</li>
								</ul>
								<div class="pl-footer top-border bottom-border d-flex align-items-center justify-content-between">
									<strong class="price fw-500 color-dark">$28,100.00</strong>
									<a href="listing_details_03.html" class="btn-four"><i class="bi bi-arrow-up-right"></i></a>
								</div>
							</div>
							<!-- /.property-info -->
						</div>
						<!-- /.listing-card-one -->
					</div>
					<div class="col-lg-4 col-md-6 d-flex mt-40 wow fadeInUp" data-wow-delay="0.2s">
						<div class="listing-card-one style-two shadow-none h-100 w-100">
							<div class="img-gallery">
								<div class="position-relative overflow-hidden">
									<div class="tag fw-500">FOR SELL</div>
									<div id="carousel3" class="carousel slide">
										<div class="carousel-indicators">
											<button type="button" data-bs-target="#carousel3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
											<button type="button" data-bs-target="#carousel3" data-bs-slide-to="1" aria-label="Slide 2"></button>
											<button type="button" data-bs-target="#carousel3" data-bs-slide-to="2" aria-label="Slide 3"></button>
										</div>
										<div class="carousel-inner">
											<div class="carousel-item active" data-bs-interval="1000000">
												<a href="#" class="d-block"><img src="images/listing/img_19.jpg" class="w-100" alt="..."></a>
											</div>
											<div class="carousel-item" data-bs-interval="1000000">
												<a href="#" class="d-block"><img src="images/listing/img_18.jpg" class="w-100" alt="..."></a>
											</div>
											<div class="carousel-item" data-bs-interval="1000000">
												<a href="#" class="d-block"><img src="images/listing/img_17.jpg" class="w-100" alt="..."></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /.img-gallery -->
							<div class="property-info pt-20">
								<a href="listing_details_03.html" class="title tran3s">Luxury villa in Dal lake.</a>
								<div class="address">Mirpur 10, Stadium</div>
								<ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between pb-15 pt-5">
									<li class="d-flex align-items-center">
										<img src="images/lazy.svg" data-src="images/icon/icon_32.svg" alt="" class="lazy-img icon me-2">
										<span class="fs-16"><span class="color-dark">1270</span> sqft</span>
									</li>
									<li class="d-flex align-items-center">
										<img src="images/lazy.svg" data-src="images/icon/icon_33.svg" alt="" class="lazy-img icon me-2">
										<span class="fs-16"><span class="color-dark">02</span> bed</span>
									</li>
									<li class="d-flex align-items-center">
										<img src="images/lazy.svg" data-src="images/icon/icon_34.svg" alt="" class="lazy-img icon me-2">
										<span class="fs-16">02 bath</span>
									</li>
								</ul>
								<div class="pl-footer top-border bottom-border d-flex align-items-center justify-content-between">
									<strong class="price fw-500 color-dark">$42,500.00</strong>
									<a href="listing_details_03.html" class="btn-four"><i class="bi bi-arrow-up-right"></i></a>
								</div>
							</div>
							<!-- /.property-info -->
						</div>
						<!-- /.listing-card-one -->
					</div> --}}
				</div>

				<div class="section-btn text-center md-mt-60">
					<a href="listing_08.html" class="btn-eight"><span>Explore All</span> <i class="bi bi-arrow-up-right"></i></a>
				</div>
			</div>
		</div>
	</div>
	<!-- /.property-listing-five -->


	<!-- 
	=============================================
		Property Listing One
	============================================== 
	-->
	<div class="property-listing-one mt-170 xl-mt-120">
		<div class="container container-large">
			<div class="position-relative">
				<div class="title-one mb-25 lg-mb-10 wow fadeInUp">
					<h3>Best Selling</h3>
					<p class="fs-22 mt-xs">These are our best listings of the week.</p>
				</div>
				<!-- /.title-one -->

				<div class="row gx-xxl-5">
					@foreach ($bestProperties as $propNumber => $bestProperty)
						@php
							$url = isset($bestProperty->media[0]) ? Storage::url($bestProperty->media[0]) : asset('images/icon/image-placeholder.svg');
						@endphp
						{{ $bestProperty->media[1] }}
						<div class="col-lg-4 col-md-6 mt-40 wow fadeInUp">
							<div class="listing-card-four overflow-hidden d-flex align-items-end position-relative z-1" style="background-image: url(  );">
								<div class="tag fw-500">{{ $bestProperty->list_in }}</div>
								<div class="property-info tran3s w-100">
									<div class="d-flex align-items-center justify-content-between">
										<div class="pe-3">
											<a href="listing_details_04.html" class="title fw-500 tran4s">{{ $bestProperty->title }}.</a>
											{{-- <div class="address tran4s">
												{{ $property->address }}, {{  $property->location->area->name }}, {{ $property->location->city->name }}, UK
											</div> --}}
										</div>
										<a href="{{ route("public.property", $bestProperty->id) }}" class="btn-four inverse"><i class="bi bi-arrow-up-right"></i></a>
									</div>
									
									<div class="pl-footer tran4s">
										<ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
											<li>
												<strong class="color-dark fw-500">{{ $bestProperty->sq_yard }}</strong> 
												<span class="fs-16">sqyard</span>
											</li>
											<li>
												<strong class="color-dark fw-500">{{ $bestProperty->bedrooms }}</strong> 
												<span class="fs-16">bedrooms</span>
											</li>
											<li>
												<strong class="color-dark fw-500">{{ $bestProperty->kitchens }}</strong> 
												<span class="fs-16">kitchens</span>
											</li>
											<li>
												<strong class="color-dark fw-500">{{ $bestProperty->bathrooms }}</strong> 
												<span class="fs-16">bathrooms</span>
											</li>
										</ul>
									</div>
								</div>
								<!-- /.property-info -->
							</div>
							<!-- /.listing-card-four -->
						</div>
						
					@endforeach
					{{-- <div class="col-lg-4 col-md-6 mt-40 wow fadeInUp" data-wow-delay="0.1s">
						<div class="listing-card-four overflow-hidden d-flex align-items-end position-relative z-1" style="background-image: url(images/listing/img_21.jpg);">
							<div class="tag fw-500">SELL</div>
							<div class="property-info tran3s w-100">
								<div class="d-flex align-items-center justify-content-between">
									<div class="pe-3">
										<a href="listing_details_04.html" class="title fw-500 tran4s">Swimming Pool Villa</a>
										<div class="address tran4s">127 green road, California, USA</div>
									</div>
									<a href="listing_details_04.html" class="btn-four inverse"><i class="bi bi-arrow-up-right"></i></a>
								</div>
								
								<div class="pl-footer tran4s">
									<ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
										<li>
											<strong class="color-dark fw-500">2137</strong> 
											<span class="fs-16">sqft</span>
										</li>
										<li>
											<strong class="color-dark fw-500">03</strong> 
											<span class="fs-16">bed</span>
										</li>
										<li>
											<strong class="color-dark fw-500">01</strong> 
											<span class="fs-16">kitchen</span>
										</li>
										<li>
											<strong class="color-dark fw-500">02</strong> 
											<span class="fs-16">bath</span>
										</li>
									</ul>
								</div>
							</div>
							<!-- /.property-info -->
						</div>
						<!-- /.listing-card-four -->
					</div>
					<div class="col-lg-4 col-md-6 mt-40 wow fadeInUp" data-wow-delay="0.2s">
						<div class="listing-card-four overflow-hidden d-flex align-items-end position-relative z-1" style="background-image: url(images/listing/img_22.jpg);">
							<div class="tag fw-500">RENT</div>
							<div class="property-info tran3s w-100">
								<div class="d-flex align-items-center justify-content-between">
									<div class="pe-3">
										<a href="listing_details_04.html" class="title fw-500 tran4s">Modern Duplex</a>
										<div class="address tran4s">Twin tower, 32 street, Florida</div>
									</div>
									<a href="listing_details_04.html" class="btn-four inverse"><i class="bi bi-arrow-up-right"></i></a>
								</div>
								
								<div class="pl-footer tran4s">
									<ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
										<li>
											<strong class="color-dark fw-500">2137</strong> 
											<span class="fs-16">sqft</span>
										</li>
										<li>
											<strong class="color-dark fw-500">03</strong> 
											<span class="fs-16">bed</span>
										</li>
										<li>
											<strong class="color-dark fw-500">01</strong> 
											<span class="fs-16">kitchen</span>
										</li>
										<li>
											<strong class="color-dark fw-500">02</strong> 
											<span class="fs-16">bath</span>
										</li>
									</ul>
								</div>
							</div>
							<!-- /.property-info -->
						</div>
						<!-- /.listing-card-four -->
					</div> --}}
				</div>

				<div class="section-btn text-center md-mt-60">
					<a href="listing_06.html" class="btn-eight"><span>Explore All</span> <i class="bi bi-arrow-up-right"></i></a>
				</div>
			</div>
		</div>
	</div>
	<!-- /.property-listing-one -->

	<!--
	=====================================================
		BLock Feature Nine
	=====================================================
	-->
	<div class="block-feature-nine bg-pink-two image-bg position-relative z-1 mt-170 xl-mt-120 pt-85 pb-110 xl-pb-80">
		<div class="container container-large">
			<div class="position-relative">
				<div class="row">
					<div class="col-xxl-6 col-xl-7 col-lg-8">
						<div class="title-one mb-30 lg-mb-20 wow fadeInUp">
							<h3>We’r here help to you  find properties.</h3>
							<p class="fs-22">Over 745K listings of apartments, lots, plots - available today.</p>
						</div>
						<!-- /.title-one -->
					</div>
				</div>

				<div class="row gx-xxl-5">
					<div class="col-lg-4 col-md-6 mt-30 d-flex wow fadeInUp">
						<div class="card-style-six d-inline-flex flex-column align-items-start tran3s h-100 w-100">
							<div class="icon d-flex align-items-center justify-content-center rounded-circle tran3s"><img src="images/lazy.svg" data-src="images/icon/icon_35.svg" alt="" class="lazy-img"></div>
							<h5 class="mt-35 mb-20">Buy a home</h5>
							<p class="mb-40">Explore homy’s 2 million+ homes and uncover your ideal living space.</p>
							<a href="listing_03.html" class="btn-twelve rounded-0 sm mt-auto">Buy Home</a>
						</div>
						<!-- /.card-style-six -->
					</div>
					<div class="col-lg-4 col-md-6 mt-30 d-flex wow fadeInUp" data-wow-delay="0.1s">
						<div class="card-style-six d-inline-flex flex-column align-items-start tran3s h-100 w-100">
							<div class="icon d-flex align-items-center justify-content-center rounded-circle tran3s"><img src="images/lazy.svg" data-src="images/icon/icon_36.svg" alt="" class="lazy-img"></div>
							<h5 class="mt-35 mb-20">Rent a home</h5>
							<p class="mb-40">Discover a rental you'll love on homy, thanks to 35+ filters.</p>
							<a href="listing_03.html" class="btn-twelve rounded-0 sm mt-auto">Rent Home</a>
						</div>
						<!-- /.card-style-six -->
					</div>
					<div class="col-lg-4 col-md-6 mt-30 d-flex wow fadeInUp" data-wow-delay="0.2s">
						<div class="card-style-six d-inline-flex flex-column align-items-start tran3s h-100 w-100">
							<div class="icon d-flex align-items-center justify-content-center rounded-circle tran3s"><img src="images/lazy.svg" data-src="images/icon/icon_37.svg" alt="" class="lazy-img"></div>
							<h5 class="mt-35 mb-20">Sell Home</h5>
							<p class="mb-40">List, sell, thrive – with our top-notch real estate agency. It’s super easy & fun.</p>
							<a href="listing_03.html" class="btn-twelve rounded-0 sm mt-auto">Sell Home</a>
						</div>
						<!-- /.card-style-six -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.block-feature-nine -->



	<!-- 
	=============================================
		Category Section Two
	============================================== 
	-->
	<div class="category-section-two mt-170 xl-mt-120">
		<div class="container container-large">
			<div class="position-relative">
				<div class="title-one text-center text-lg-start mb-60 xl-mb-40 lg-mb-20 wow fadeInUp">
					<h3>Popular Categories.</h3>
				</div>
				<!-- /.title-one -->
				
				<div class="wrapper flex-wrap d-flex justify-content-center justify-content-md-between align-items-center">
					<div class="card-style-seven position-relative z-1 rounded-circle overflow-hidden d-flex align-items-center justify-content-center wow fadeInUp" style="background-image: url(images/media/img_38.jpg);">
						<a href="listing_03.html" class="title stretched-link"><h4 class="text-white tran3s">Apartments</h4></a>
					</div>
					<!-- /.card-style-seven -->
					<div class="card-style-seven position-relative z-1 rounded-circle overflow-hidden d-flex align-items-center justify-content-center wow fadeInUp" style="background-image: url(images/media/img_39.jpg);" data-wow-delay="0.1s">
						<a href="listing_03.html" class="title stretched-link"><h4 class="text-white tran3s">House</h4></a>
					</div>
					<!-- /.card-style-seven -->
					<div class="card-style-seven position-relative z-1 rounded-circle overflow-hidden d-flex align-items-center justify-content-center wow fadeInUp" style="background-image: url(images/media/img_40.jpg);" data-wow-delay="0.2s">
						<a href="listing_03.html" class="title stretched-link"><h4 class="text-white tran3s">Lofts</h4></a>
					</div>
					<!-- /.card-style-seven -->
					<div class="card-style-seven position-relative z-1 rounded-circle overflow-hidden d-flex align-items-center justify-content-center wow fadeInUp" style="background-image: url(images/media/img_41.jpg);" data-wow-delay="0.3s">
						<a href="listing_03.html" class="title stretched-link"><h4 class="text-white tran3s">Villa</h4></a>
					</div>
					<!-- /.card-style-seven -->
				</div>
				<div class="section-btn text-center md-mt-60">
					<a href="listing_02.html" class="btn-eleven"><span>See all categories</span> <i class="bi bi-chevron-right"></i></a>
				</div>
				<!-- /.section-btn -->
			</div>
		</div>
	</div>
	<!-- /.category-section-two -->

	<!-- 
	=============================================
		BLock Feature Ten
	============================================== 
	-->
	<div class="block-feature-ten mt-200 xl-mt-160 lg-mt-120 md-mt-100">
		<div class="container container-large">
			<div class="row">
				<div class="col-xxl-5 col-lg-6 ms-auto order-lg-last wow fadeInRight">
					<div class="pt-40 xl-pt-20 pb-110 xl-pb-60">
						<div class="title-one mb-45 lg-mb-20">
							<h3>Find Your Perfect Match Easily.</h3>
						</div>
						<!-- /.title-one -->
						<p class="fs-24 mb-45">Browse 745,000+ homes for purchase, rent, and mortgage options in our listings.</p>
						<form action="#" class="email-form position-relative z-1">
							<input type="email" placeholder="Your Email Address...">
							<button class="btn-two">Find out</button>
						</form>
						<p class="fs-16 mt-10">For more details please <a href="#" class="color-dark text-decoration-underline fst-italic">contact us</a></p>
						<div class="counter-wrapper pt-15 pe-xl-5">
							<div class="row">
								<div class="col-xxl-6 col-sm-5">
									<div class="counter-block-one mt-20">
										<div class="main-count fw-500 color-dark"><span class="counter">1.2</span>x</div>
										<span>Fast search engine</span>
									</div>
									<!-- /.counter-block-one -->
								</div>
								<div class="col-xxl-6 col-sm-7">
									<div class="counter-block-one mt-20">
										<div class="main-count fw-500 color-dark">$<span class="counter">1.3</span>b+</div>
										<span>Property listing sold last year</span>
									</div>
									<!-- /.counter-block-one -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="media-gallery position-relative z-1 h-100 wow fadeInLeft">
						<div class="bg" style="background-image: url(images/media/img_42.jpg);">
							<div class="card-style-three p0">
								<div class="bg-wrapper text-center">
									<h3>07+</h3>
									<p>Years Experience <br>with proud.</p>
								</div>
							</div>
							<img src="images/lazy.svg" data-src="images/assets/screen_05.jpg" alt="" class="lazy-img screen_01">
						</div>
					</div>
					<!-- /.media-gallery -->
				</div>
			</div>
		</div>
	</div>
	<!-- /.block-feature-ten -->

	<!--
	=====================================================
		Feedback Section Five
	=====================================================
	-->
	<div class="feedback-section-five mt-200 xl-mt-150 lg-mt-120">
		<div class="container container-large">
			<div class="bg-pink-two bg-wrapper position-relative z-1 pt-60 lg-pt-40 pb-45 md-pb-30">
				<div class="content-wrapper">
					<div class="icon d-flex align-items-center justify-content-center rounded-circle mb-35"><img src="images/lazy.svg" data-src="images/icon/icon_38.svg" alt="" class="lazy-img"></div>

					<div class="feedback-slider-one">
						<div class="item">
							<div class="feedback-block-five">
								<blockquote>Quick solutions coupled with extraordinary <span>performance</span> a recommendation that's unequivocal.</blockquote>
								<div class="d-flex align-items-center justify-content-end">
									<div class="pe-3 text-end">
										<h6 class="fs-20 m0">Musa Delimuza</h6>
										<span class="fs-16 opacity-50">Miami, USA</span>
									</div>
									<img src="images/media/img_01.jpg" alt="" class="rounded-circle avatar">
								</div>
							</div>
							<!-- /.feedback-block-five -->
						</div>
						<div class="item">
							<div class="feedback-block-five">
								<blockquote>Found our dream home. Great <span>Business</span> with them. To thank you for excellent service.</blockquote>
								<div class="d-flex align-items-center justify-content-end">
									<div class="pe-3 text-end">
										<h6 class="fs-20 m0">Alina Cruse</h6>
										<span class="fs-16 opacity-50">Miami, Italy</span>
									</div>
									<img src="images/media/img_02.jpg" alt="" class="rounded-circle avatar">
								</div>
							</div>
							<!-- /.feedback-block-five -->
						</div>
						<div class="item">
							<div class="feedback-block-five">
								<blockquote>Efficient and friendly service, guided us <span>perfectly</span> I am satisfied with our new home. Thank you!</blockquote>
								<div class="d-flex align-items-center justify-content-end">
									<div class="pe-3 text-end">
										<h6 class="fs-20 m0">Rashed Ka.</h6>
										<span class="fs-16 opacity-50">Miami, USA</span>
									</div>
									<img src="images/media/img_03.jpg" alt="" class="rounded-circle avatar">
								</div>
							</div>
							<!-- /.feedback-block-five -->
						</div>
					</div>
				</div>
				<!-- /.content-wrapper -->
				<div class="rating-wrapper">
					<img src="images/lazy.svg" data-src="images/assets/rating_02.png" alt="" class="lazy-img">
					<p class="m0 pt-10"><span class="fw-500 color-dark">13k rating</span> (4.7 Rating)</p>
				</div>
				<!-- /.rating-wrapper -->
			</div>
		</div>
	</div>
	<!-- /.feedback-section-five -->



	<!--
	=====================================================
		Partner Section Two
	=====================================================
	-->
	<div class="partner-section-two mt-80">
		<div class="container container-large">
			<div class="wrapper bottom-border pb-65 md-pb-30">
				<div class="row align-items-center">
					<div class="col-lg-4">
						<h6 class="fw-normal text-center text-lg-start md-pb-40 fs-24 m0">Trusted by <span class="fw-500 text-decoration-underline color-dark">15,000+</span> Customers</h6>
					</div>
					<div class="col-lg-8">
						<div class="partner-logo-two">
							<div class="item"><img src="images/logo/p_logo_07.png" alt=""></div>
							<div class="item"><img src="images/logo/p_logo_08.png" alt=""></div>
							<div class="item"><img src="images/logo/p_logo_09.png" alt=""></div>
							<div class="item"><img src="images/logo/p_logo_10.png" alt=""></div>
							<div class="item"><img src="images/logo/p_logo_11.png" alt=""></div>
							<div class="item"><img src="images/logo/p_logo_12.png" alt=""></div>
							<div class="item"><img src="images/logo/p_logo_09.png" alt=""></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.partner-section-two -->



	<!--
	=====================================================
		Blog Section Two
	=====================================================
	-->
	<div class="blog-section-two mt-170 xl-mt-120">
		<div class="container container-large">
			<div class="position-relative">
				<div class="title-one mb-50 xl-mb-30 lg-mb-10 wow fadeInUp">
					<h3>Our Blog</h3>
				</div>
				<!-- /.title-one -->

				<div class="row gx-xxl-5">
					<div class="col-lg-4 col-md-6">
						<article class="blog-meta-two tran3s position-relative z-1 mt-35 wow fadeInUp">
							<figure class="post-img position-relative m0" style="background-image: url(images/blog/blog_img_03.jpg);">
								<a href="blog_details.html" class="date">08 JAN</a>
							</figure>
							<div class="post-data">
								<div class="post-info"><a href="blog_details.html">Mark Quins .</a> 7 min</div>
								<div class="d-flex justify-content-between align-items-sm-center flex-wrap">
									<a href="blog_details.html" class="blog-title"><h4>Print, publishing qui visual ux layout mockups.</h4></a>
									<a href="#" class="btn-four"><i class="bi bi-arrow-up-right"></i></a>
								</div>
							</div>
							<div class="hover-content tran3s">
								<a href="blog_details.html" class="date">08 JAN</a>
								<div class="post-data">
									<div class="post-info"><a href="blog_details.html">Mark Quins .</a> 7 min</div>
									<div class="d-flex justify-content-between align-items-sm-center flex-wrap">
										<a href="blog_details.html" class="blog-title"><h4>Print, publishing qui visual ux layout mockups.</h4></a>
									</div>
								</div>
								<a href="#" class="btn-four inverse rounded-circle"><i class="fa-thin fa-arrow-up-right"></i></a>
							</div>
							<!-- /.hover-content -->
						</article>
						<!-- /.blog-meta-two -->
					</div>
					<div class="col-lg-4 col-md-6">
						<article class="blog-meta-two tran3s position-relative z-1 mt-35 wow fadeInUp">
							<figure class="post-img position-relative m0" style="background-image: url(images/blog/blog_img_01.jpg);">
								<a href="blog_details.html" class="date">17 AUG</a>
							</figure>
							<div class="post-data">
								<div class="post-info"><a href="blog_details.html">Rashed Kabir .</a> 7 min</div>
								<div class="d-flex justify-content-between align-items-sm-center flex-wrap">
									<a href="blog_details.html" class="blog-title"><h4>Designer’s Checklist for Every UX/UI Project.</h4></a>
									<a href="#" class="btn-four"><i class="bi bi-arrow-up-right"></i></a>
								</div>
							</div>
							<div class="hover-content tran3s">
								<a href="blog_details.html" class="date">17 AUG</a>
								<div class="post-data">
									<div class="post-info"><a href="blog_details.html">Rashed Kabir .</a> 7 min</div>
									<div class="d-flex justify-content-between align-items-sm-center flex-wrap">
										<a href="blog_details.html" class="blog-title"><h4>Designer’s Checklist for Every UX/UI Project.</h4></a>
									</div>
								</div>
								<a href="#" class="btn-four inverse rounded-circle"><i class="fa-thin fa-arrow-up-right"></i></a>
							</div>
							<!-- /.hover-content -->
						</article>
						<!-- /.blog-meta-two -->
					</div>
					<div class="col-lg-4 col-md-6">
						<article class="blog-meta-two tran3s position-relative z-1 mt-35 wow fadeInUp">
							<figure class="post-img position-relative m0" style="background-image: url(images/blog/blog_img_04.jpg);">
								<a href="blog_details.html" class="date">21 SEP</a>
							</figure>
							<div class="post-data">
								<div class="post-info"><a href="blog_details.html">Jubayer Hasan .</a> 8 min</div>
								<div class="d-flex justify-content-between align-items-sm-center flex-wrap">
									<a href="blog_details.html" class="blog-title"><h4>Spending Habits, 13 Tips for grow Your Money.</h4></a>
									<a href="#" class="btn-four"><i class="bi bi-arrow-up-right"></i></a>
								</div>
							</div>
							<div class="hover-content tran3s">
								<a href="blog_details.html" class="date">21 SEP</a>
								<div class="post-data">
									<div class="post-info"><a href="blog_details.html">Jubayer Hasan .</a> 8 min</div>
									<div class="d-flex justify-content-between align-items-sm-center flex-wrap">
										<a href="blog_details.html" class="blog-title"><h4>Spending Habits, 13 Tips for grow Your Money.</h4></a>
									</div>
								</div>
								<a href="#" class="btn-four inverse rounded-circle"><i class="fa-thin fa-arrow-up-right"></i></a>
							</div>
							<!-- /.hover-content -->
						</article>
						<!-- /.blog-meta-two -->
					</div>
				</div>

				<div class="section-btn text-center md-mt-60">
					<a href="blog_01.html" class="btn-eight"><span>Explore All</span> <i class="bi bi-arrow-up-right"></i></a>
				</div>
			</div>
		</div>
	</div>
	<!-- /.blog-section-two -->



	<!--
	=====================================================
		Address Banner
	=====================================================
	-->
	<div class="address-banner wow fadeInUp mt-120 lg-mt-80">
		<div class="container container-large">
			<div class="d-flex flex-wrap justify-content-center justify-content-lg-between">
				<div class="block position-relative z-1 mt-25">
					<div class="d-xl-flex align-items-center">
						<div class="icon rounded-circle d-flex align-items-center justify-content-center"><img src="images/lazy.svg" data-src="images/icon/icon_39.svg" alt="" class="lazy-img"></div>
						<div class="text">
							<p class="fs-22">We’r always happy to help.</p>
							<a href="#" class="tran3s">ask@homy.com</a>
						</div>
						<!-- /.text -->
					</div>
				</div>
				<!-- /.block -->
				<div class="block position-relative skew-line z-1 mt-25">
					<div class="d-xl-flex align-items-center">
						<div class="icon rounded-circle d-flex align-items-center justify-content-center"><img src="images/lazy.svg" data-src="images/icon/icon_39.svg" alt="" class="lazy-img"></div>
						<div class="text">
							<p class="fs-22">Our hotline number</p>
							<a href="#" class="tran3s">+757 699 4478,</a>
							<a href="#" class="tran3s">&nbsp; +991 377 9731</a>
						</div>
						<!-- /.text -->
					</div>
				</div>
				<!-- /.block -->
				<div class="block position-relative z-1 mt-25">
					<div class="d-xl-flex align-items-center">
						<div class="icon rounded-circle d-flex align-items-center justify-content-center"><img src="images/lazy.svg" data-src="images/icon/icon_39.svg" alt="" class="lazy-img"></div>
						<div class="text">
							<p class="fs-22">Live chat</p>
							<a href="#" class="tran3s">www.homylivechat.com</a>
						</div>
						<!-- /.text -->
					</div>
				</div>
				<!-- /.block -->
			</div>
		</div>
	</div>
	<!-- /.address-banner -->




	<!--
	=====================================================
		Fancy Banner Eight
	=====================================================
	-->
	<div class="fancy-banner-eight wow fadeInUp mt-160 xl-mt-120">
		<div class="container container-large">
			<div class="bg-wrapper bg-pink-two overflow-hidden position-relative z-1">
				<div class="row align-items-end">
					<div class="col-xl-6 col-lg-7 col-md-7">
						<div class="pb-80 lg-pb-40">
							<h3>Start your Journey as <span class="fw-normal fst-italic">A Retailer.</span></h3>
							<div class="d-inline-flex flex-wrap align-items-center position-relative mt-15">
								<a href="agent.html" class="btn-eight mt-10 me-4"><span>Become an Agent</span></a>
								<a href="contact.html" class="btn-two rounded-0 border-0 mt-10"><span>Contact us</span></a>
								<img src="images/lazy.svg" data-src="images/shape/shape_51.svg" alt="" class="lazy-img shapes shape_02 wow fadeInRight">
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-5 col-md-5 text-center text-md-end">
						<div class="media-wrapper position-relative z-1 d-inline-block">
							<img src="images/lazy.svg" data-src="images/media/img_44.png" alt="" class="lazy-img">
							<img src="images/lazy.svg" data-src="images/shape/shape_50.svg" alt="" class="lazy-img shapes shape_01">
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- /.fancy-banner-eight -->

@endsection

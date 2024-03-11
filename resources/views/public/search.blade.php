@extends('public.layouts.parent')

@section('title', "Listings | Move Right®")

@section('content')

    <!--
    =====================================================
        Property Listing Six
    =====================================================
    -->
    <div class="property-listing-six bg-pink-two pt-110 md-pt-80 pb-170 xl-pb-120 mt-100 xl-mt-120">
        <div class="container">
            {{-- <div class="search-wrapper-one layout-one bg position-relative mb-75 md-mb-50">
                <div class="bg-wrapper border-layout">
                    <form action="#">
                        <div class="row gx-0 align-items-center">
                            <div class="col-xl-3 col-lg-4">
                                <div class="input-box-one border-left">
                                    <div class="label">I’m looking to...</div>
                                    <select class="nice-select">
                                        <option value="1">Buy Apartments</option>
                                        <option value="2">Rent Condos</option>
                                        <option value="3">Sell Houses</option>
                                        <option value="4">Rent Industrial</option>
                                        <option value="6">Sell Villas</option>
                                    </select>
                                </div>
                                <!-- /.input-box-one -->
                            </div>
                            <div class="col-xl-3 col-lg-4">
                                <div class="input-box-one border-left">
                                    <div class="label">Location</div>
                                    <select class="nice-select location">
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
                            <div class="col-xl-3 col-lg-4">
                                <div class="input-box-one border-left border-lg-0">
                                    <div class="label">Price Range</div>
                                    <select class="nice-select">
                                        <option value="1">$10,000 - $200,000</option>
                                        <option value="2">$200,000 - $300,000</option>
                                        <option value="2">$300,000 - $400,000</option>
                                    </select>
                                </div>
                                <!-- /.input-box-one -->
                            </div>
                            <div class="col-xl-3">
                                <div class="input-box-one lg-mt-20">
                                    <div class="d-flex align-items-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#advanceFilterModal" class="search-modal-btn sm tran3s text-uppercase fw-500 d-inline-flex align-items-center me-3">
                                            <i class="fa-light fa-sliders-up"></i>
                                        </a>
                                        <button class="fw-500 text-uppercase tran3s search-btn">Search</button>
                                    </div>
                                </div>
                                <!-- /.input-box-one -->
                            </div>
                        </div>
                    </form>
                </div>
            </div> --}}
            <!-- /.search-wrapper-one -->
            <div class="listing-header-filter d-sm-flex justify-content-between align-items-center mb-40 lg-mb-30">
                <div>Showing <span class="color-dark fw-500">{{ count($properties) }}</span> results</div>
                {{-- <div class="d-flex align-items-center xs-mt-20">
                    <div class="short-filter d-flex align-items-center">
                        <div class="fs-16 me-2">Short by:</div>
                        <select class="nice-select">
                            <option value="0">Newest</option>
                            <option value="1">Best Seller</option>
                            <option value="2">Best Match</option>
                            <option value="3">Price Low</option>
                            <option value="4">Price High</option>
                        </select>
                    </div>
                    <a href="listing_03.html" class="tran3s layout-change rounded-circle ms-auto ms-sm-3" data-bs-toggle="tooltip" title="Switch To Grid View"><i class="fa-regular fa-grid-2"></i></a>
                </div> --}}
            </div>
            <!-- /.listing-header-filter -->

            {!! count($properties) == 0 ? '<h1>No Properties Found</h1>' : '' !!}

            @foreach ($properties as $propNumber => $property)

                <div class="listing-card-seven border-20 p-20 mb-50 wow fadeInUp">
                    <div class="d-flex flex-wrap layout-one">
                        @php
							$url = isset($property->media[0]) ? Storage::url($property->media[0]) : asset('images/icon/image-placeholder.svg');
						@endphp
                        <div class="img-gallery position-relative z-1 border-20 overflow-hidden" style="background-image: url({{ $url }});">

                            <div class="tag border-20 {{ $property->list_in == "rent" ? "" : "sale"}}">FOR {{ ucfirst($property->list_in) }}</div>
                            <div class="img-slider-btn">
                                {{ count($property->media) }} <i class="fa-regular fa-image"></i>
                                @foreach ($property->media as $mediaNum => $media)
                                    <a href="{{ isset($media) ? Storage::url($media) : asset('images/icon/image-placeholder.svg') }}" class="d-block" data-fancybox="img{{$propNumber}}" ></a>
                                    
                                @endforeach
                                {{-- <a href="images/listing/img_large_06.jpg" class="d-block" data-fancybox="img1" data-caption="Marbel Apartments"></a>
                                <a href="images/listing/img_large_03.jpg" class="d-block" data-fancybox="img1" data-caption="Marbel Apartments"></a> --}}
                            </div>
                        </div>
                        <!-- /.img-gallery -->
                        <div class="property-info">
                            <a href="{{ route("public.property", $property->id) }}" class="title tran3s mb-15">{{ $property->title }}</a>
                            <div class="address">{{ $property->address }}, {{ $property->location->area->name }}, {{ $property->location->city->name }}, UK</div>
                            <div class="feature mt-30 mb-30 pt-30 pb-5">
                                <ul class="style-none d-flex flex-wrap align-items-center justify-content-between">
                                    <li><strong>{{ $property->sq_yard }}</strong> sqyard</li>
                                    <li><strong>{{ $property->bedrooms }}</strong> bed</li>
                                    <li><strong>{{ $property->bathrooms }}</strong> bath</li>
                                    <li><strong>{{ $property->kitchens }}</strong> Kitchen</li>
                                    <li><strong>{{ $property->garages }}</strong> Garages</li>
                                </ul>
                            </div>
                            <div class="pl-footer d-flex flex-wrap align-items-center justify-content-between">
                                <strong class="price fw-500 color-dark me-auto">£{{ $property->price }}</strong>
                                {{-- <ul class="style-none d-flex action-icons on-top">
                                    <li><a href="#"><i class="fa-light fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa-light fa-bookmark"></i></a></li>
                                    <li><a href="#"><i class="fa-light fa-circle-plus"></i></a></li>
                                </ul> --}}
                                <a href="{{ route("public.property", $property->id) }}" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
                            </div>
                        </div>
                        <!-- /.property-info -->
                    </div>
                </div>
                <!-- /.listing-card-seven -->
            
            @endforeach

            {{-- <div class="listing-card-seven border-20 p-20 mb-50 wow fadeInUp">
                <div class="d-flex flex-wrap layout-one">
                    <div class="img-gallery position-relative z-1 border-20 overflow-hidden" style="background-image: url(images/listing/img_29.jpg);">
                        <div class="tag border-20">FOR RENT</div>
                        <div class="img-slider-btn">
                            03 <i class="fa-regular fa-image"></i>
                            <a href="images/listing/img_large_01.jpg" class="d-block" data-fancybox="img2" data-caption="Duplex orkit villa."></a>
                            <a href="images/listing/img_large_02.jpg" class="d-block" data-fancybox="img2" data-caption="Duplex orkit villa."></a>
                            <a href="images/listing/img_large_03.jpg" class="d-block" data-fancybox="img2" data-caption="Duplex orkit villa."></a>
                        </div>
                    </div>
                    <!-- /.img-gallery -->
                    <div class="property-info">
                        <a href="listing_details_04.html" class="title tran3s mb-15">Duplex orkit villa.</a>
                        <div class="address">Mirpur 10, National Stadium, 1210, Dhaka, BD</div>
                        <div class="feature mt-30 mb-30 pt-30 pb-5">
                            <ul class="style-none d-flex flex-wrap align-items-center justify-content-between">
                                <li><strong>2137</strong> sqft</li>
                                <li><strong>03</strong> bed</li>
                                <li><strong>02</strong> bath</li>
                                <li><strong>01</strong> Kitchen</li>
                                <li><strong>01</strong> Parking Lot</li>
                                <li><strong>02</strong> Garden</li>
                            </ul>
                        </div>
                        <div class="pl-footer d-flex flex-wrap align-items-center justify-content-between">
                            <strong class="price fw-500 color-dark me-auto">$2,370/<sub>m</sub></strong>
                            <ul class="style-none d-flex action-icons on-top">
                                <li><a href="#"><i class="fa-light fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-bookmark"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-circle-plus"></i></a></li>
                            </ul>
                            <a href="listing_details_04.html" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>
                    <!-- /.property-info -->
                </div>
            </div>
            <!-- /.listing-card-seven -->

            <div class="listing-card-seven border-20 p-20 mb-50 wow fadeInUp">
                <div class="d-flex flex-wrap layout-one">
                    <div class="img-gallery position-relative z-1 border-20 overflow-hidden" style="background-image: url(images/listing/img_23.jpg);">
                        <div class="tag border-20 sale">FOR SELL</div>
                        <div class="img-slider-btn">
                            03 <i class="fa-regular fa-image"></i>
                            <a href="images/listing/img_large_06.jpg" class="d-block" data-fancybox="img3" data-caption="Luxury villa Dal lake"></a>
                            <a href="images/listing/img_large_05.jpg" class="d-block" data-fancybox="img3" data-caption="Luxury villa Dal lake"></a>
                            <a href="images/listing/img_large_01.jpg" class="d-block" data-fancybox="img3" data-caption="Luxury villa Dal lake"></a>
                        </div>
                    </div>
                    <!-- /.img-gallery -->
                    <div class="property-info">
                        <a href="listing_details_04.html" class="title tran3s mb-15">Luxury villa Dal lake</a>
                        <div class="address">Mirpur 10, National Stadium, 1210, Dhaka, BD</div>
                        <div class="feature mt-30 mb-30 pt-30 pb-5">
                            <ul class="style-none d-flex flex-wrap align-items-center justify-content-between">
                                <li><strong>2137</strong> sqft</li>
                                <li><strong>03</strong> bed</li>
                                <li><strong>02</strong> bath</li>
                                <li><strong>01</strong> Kitchen</li>
                                <li><strong>01</strong> Parking Lot</li>
                                <li><strong>02</strong> Garden</li>
                            </ul>
                        </div>
                        <div class="pl-footer d-flex flex-wrap align-items-center justify-content-between">
                            <strong class="price fw-500 color-dark me-auto">$43,000</strong>
                            <ul class="style-none d-flex action-icons on-top">
                                <li><a href="#"><i class="fa-light fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-bookmark"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-circle-plus"></i></a></li>
                            </ul>
                            <a href="listing_details_04.html" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>
                    <!-- /.property-info -->
                </div>
            </div>
            <!-- /.listing-card-seven -->

            <div class="listing-card-seven border-20 p-20 mb-50 wow fadeInUp">
                <div class="d-flex flex-wrap layout-one">
                    <div class="img-gallery position-relative z-1 border-20 overflow-hidden" style="background-image: url(images/listing/img_24.jpg);">
                        <div class="tag border-20">FOR RENT</div>
                        <div class="img-slider-btn">
                            03 <i class="fa-regular fa-image"></i>
                            <a href="images/listing/img_large_01.jpg" class="d-block" data-fancybox="img4" data-caption="Galaxy Touch Flat"></a>
                            <a href="images/listing/img_large_03.jpg" class="d-block" data-fancybox="img4" data-caption="Galaxy Touch Flat"></a>
                            <a href="images/listing/img_large_06.jpg" class="d-block" data-fancybox="img4" data-caption="Galaxy Touch Flat"></a>
                        </div>
                    </div>
                    <!-- /.img-gallery -->
                    <div class="property-info">
                        <a href="listing_details_04.html" class="title tran3s mb-15">Galaxy Touch Flat</a>
                        <div class="address">Mirpur 10, National Stadium, 1210, Dhaka, BD</div>
                        <div class="feature mt-30 mb-30 pt-30 pb-5">
                            <ul class="style-none d-flex flex-wrap align-items-center justify-content-between">
                                <li><strong>2137</strong> sqft</li>
                                <li><strong>03</strong> bed</li>
                                <li><strong>02</strong> bath</li>
                                <li><strong>01</strong> Kitchen</li>
                                <li><strong>01</strong> Parking Lot</li>
                                <li><strong>02</strong> Garden</li>
                            </ul>
                        </div>
                        <div class="pl-footer d-flex flex-wrap align-items-center justify-content-between">
                            <strong class="price fw-500 color-dark me-auto">$1,820/<sub>m</sub></strong>
                            <ul class="style-none d-flex action-icons on-top">
                                <li><a href="#"><i class="fa-light fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-bookmark"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-circle-plus"></i></a></li>
                            </ul>
                            <a href="listing_details_04.html" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>
                    <!-- /.property-info -->
                </div>
            </div>
            <!-- /.listing-card-seven -->

            <div class="listing-card-seven border-20 p-20 mb-50 wow fadeInUp">
                <div class="d-flex flex-wrap layout-one">
                    <div class="img-gallery position-relative z-1 border-20 overflow-hidden" style="background-image: url(images/listing/img_21.jpg);">
                        <div class="tag border-20 sale">FOR SELL</div>
                        <div class="img-slider-btn">
                            03 <i class="fa-regular fa-image"></i>
                            <a href="images/listing/img_large_01.jpg" class="d-block" data-fancybox="img5" data-caption="Morpho House"></a>
                            <a href="images/listing/img_large_05.jpg" class="d-block" data-fancybox="img5" data-caption="Morpho House"></a>
                            <a href="images/listing/img_large_04.jpg" class="d-block" data-fancybox="img5" data-caption="Morpho House"></a>
                        </div>
                    </div>
                    <!-- /.img-gallery -->
                    <div class="property-info">
                        <a href="listing_details_04.html" class="title tran3s mb-15">Morpho House</a>
                        <div class="address">Mirpur 10, National Stadium, 1210, Dhaka, BD</div>
                        <div class="feature mt-30 mb-30 pt-30 pb-5">
                            <ul class="style-none d-flex flex-wrap align-items-center justify-content-between">
                                <li><strong>2137</strong> sqft</li>
                                <li><strong>03</strong> bed</li>
                                <li><strong>02</strong> bath</li>
                                <li><strong>01</strong> Kitchen</li>
                                <li><strong>01</strong> Parking Lot</li>
                                <li><strong>02</strong> Garden</li>
                            </ul>
                        </div>
                        <div class="pl-footer d-flex flex-wrap align-items-center justify-content-between">
                            <strong class="price fw-500 color-dark me-auto">$27,100</strong>
                            <ul class="style-none d-flex action-icons on-top">
                                <li><a href="#"><i class="fa-light fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-bookmark"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-circle-plus"></i></a></li>
                            </ul>
                            <a href="listing_details_04.html" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>
                    <!-- /.property-info -->
                </div>
            </div>
            <!-- /.listing-card-seven -->

            <div class="listing-card-seven border-20 p-20 mb-50 wow fadeInUp">
                <div class="d-flex flex-wrap layout-one">
                    <div class="img-gallery position-relative z-1 border-20 overflow-hidden" style="background-image: url(images/listing/img_31.jpg);">
                        <div class="tag border-20">FOR RENT</div>
                        <div class="img-slider-btn">
                            03 <i class="fa-regular fa-image"></i>
                            <a href="images/listing/img_large_01.jpg" class="d-block" data-fancybox="img6" data-caption="Oepn Villa"></a>
                            <a href="images/listing/img_large_05.jpg" class="d-block" data-fancybox="img6" data-caption="Oepn Villa"></a>
                            <a href="images/listing/img_large_04.jpg" class="d-block" data-fancybox="img6" data-caption="Oepn Villa"></a>
                        </div>
                    </div>
                    <!-- /.img-gallery -->
                    <div class="property-info">
                        <a href="listing_details_04.html" class="title tran3s mb-15">Oepn Villa</a>
                        <div class="address">Mirpur 10, National Stadium, 1210, Dhaka, BD</div>
                        <div class="feature mt-30 mb-30 pt-30 pb-5">
                            <ul class="style-none d-flex flex-wrap align-items-center justify-content-between">
                                <li><strong>2137</strong> sqft</li>
                                <li><strong>03</strong> bed</li>
                                <li><strong>02</strong> bath</li>
                                <li><strong>01</strong> Kitchen</li>
                                <li><strong>01</strong> Parking Lot</li>
                                <li><strong>02</strong> Garden</li>
                            </ul>
                        </div>
                        <div class="pl-footer d-flex flex-wrap align-items-center justify-content-between">
                            <strong class="price fw-500 color-dark me-auto">$3,120/<sub>m</sub></strong>
                            <ul class="style-none d-flex action-icons on-top">
                                <li><a href="#"><i class="fa-light fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-bookmark"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-circle-plus"></i></a></li>
                            </ul>
                            <a href="listing_details_04.html" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>
                    <!-- /.property-info -->
                </div>
            </div> --}}
            <!-- /.listing-card-seven -->
            {{-- <div class="pt-50 md-pt-20 text-center">
                <ul class="pagination-two d-inline-flex align-items-center justify-content-center style-none">
                    <li><a href="#"><i class="fa-regular fa-chevron-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><span>...</span></li>
                    <li><a href="#">13</a></li>
                    <li><a href="#"><i class="fa-regular fa-chevron-right"></i></a></li>
                </ul>
            </div> --}}
        </div>
    </div>
    <!-- /.property-listing-six -->

@endsection
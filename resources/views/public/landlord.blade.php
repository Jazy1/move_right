@extends('public.layouts.parent')

@section('title', "Landlord | Move Right®")

@section('content')

    <!-- 
    =============================================
        Inner Banner
    ============================================== 
    -->
    {{-- <div class="inner-banner-two inner-banner z-1 pt-170 xl-pt-150 md-pt-130 pb-140 xl-pb-100 md-pb-80 position-relative" style="background-image: url(images/media/img_49.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="mb-45 xl-mb-30 md-mb-20">Agent Details</h3>
                    <ul class="theme-breadcrumb style-none d-inline-flex align-items-center justify-content-center position-relative z-1 bottom-line">
                        <li><a href="index.html">Home</a></li>
                        <li>/</li>
                        <li><a href="agent.html">Agent</a></li>
                        <li>/</li>
                        <li>Mathews Firlo</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <p class="sub-heading">Over 745,000 listings, apartments, lots and  plots available now!</p>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- /.inner-banner-two -->

    


    <!--
    =====================================================
        Agent Details Details
    =====================================================
    -->
    <div class="agent-details theme-details-one mt-130 xl-mt-100 pb-150 xl-pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="info-pack-one mb-80 xl-mb-50">
                        <div class="row">
                            <div class="col-xl-6 d-flex">
                                @php
                                    $url = isset($landlord->profile_picture) ? Storage::url($landlord->profile_picture) : Storage::url("profile-pictures/default.svg");
                                @endphp
                                <div class="media position-relative z-1 w-100 me-xl-4" 
                                style="background-image: url({{ $url }});">
                                    <div class="tag bg-white position-absolute text-uppercase">{{ count($properties) }} Listing</div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="ps-xxl-3 pe-xxl-3 pe-xl-0 ps-xl-0 pe-3 ps-3 pt-40 lg-pt-30 pb-45 lg-pb-30">
                                    <h4>{{ $landlord->name }}</h4>
                                    <div class="designation fs-16">Sales & Broker</div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Location: </td>
                                                    <td> {{ $landlord->location->area->name }},  {{ $landlord->location->city->name }}, UK  </td>
                                                </tr>
                                                <tr>
                                                    <td>Phone: </td>
                                                    <td> {{ $landlord->phone }} </td>
                                                </tr>
                                                <tr>
                                                    <td>Email:</td>
                                                    <td> {{ $landlord->email }} </td>
                                                </tr>
                                                {{-- <tr>
                                                    <td>Qualification:</td>
                                                    <td>Master Degree</td>
                                                </tr> --}}
                                            </tbody>
                                        </table>
                                    </div>
                                    <ul class="style-none d-flex align-items-center social-icon">
                                        <li><a><i class="fa-brands fa-whatsapp"></i></a></li>
                                        <li><a><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a><i class="fa-brands fa-viber"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.info-pack-one -->
                    <div class="agent-overview bottom-line-dark pb-40 mb-80 xl-mb-50">
                        <h4 class="mb-20">Overview</h4>
                        <p class="fs-20 lh-lg pb-15"> {{ $landlord->about }} </p>
                    </div>
                    <!-- /.agent-overview -->


                    <div class="agent-property-listing bottom-line-dark pb-20 mb-80 xl-mb-50">
                        <div class="d-sm-flex justify-content-between align-items-center mb-40 xs-mb-20">
                            <h4 class="mb-10">Listings</h4>
                            <div class="filter-nav-one xs-mt-40">
                                <ul class="style-none d-flex justify-content-center flex-wrap isotop-menu-wrapper">
                                    <li class="is-checked" data-filter="*">All</li>
                                    <li data-filter=".sell">Sell</li>
                                    <li data-filter=".rent">Rent</li>
                                </ul>
                            </div>
                        </div>
                        <div id="isotop-gallery-wrapper" class="grid-2column">
                            <div class="grid-sizer"></div>

                            @foreach ($properties as $propNumber => $property)
                                
                                <div class="isotop-item {{ $property->list_in == "rent" ? "rent" : "sell" }}">
                                    <div class="listing-card-one shadow-none style-two mb-50">
                                        <div class="img-gallery">
                                            <div class="position-relative overflow-hidden">
                                                <div class="tag bg-white text-dark fw-500">FOR {{ ucfirst( $property->list_in) }}</div>
                                                <img src="{{ isset($property->media[0]) ? Storage::url($property->media[0]) : Storage::url("property_media/image-placeholder.png") }}" class="w-100" alt="...">
                                                
                                                <div class="img-slider-btn">
                                                    {{ count($property->media) }} <i class="fa-regular fa-image"></i>
                                                    @foreach ($property->media as $media)
                                                        <a href="{{ isset($media) ? Storage::url($media) : Storage::url("property_media/image-placeholder.png") }}" class="d-block" data-fancybox="img{{ $propNumber }}" ></a>
                                                        
                                                    @endforeach
                                                    {{-- <a href="images/listing/img_large_02.jpg" class="d-block" data-fancybox="img1" data-caption="Blueberry villa"></a>
                                                    <a href="images/listing/img_large_03.jpg" class="d-block" data-fancybox="img1" data-caption="Blueberry villa"></a> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.img-gallery -->
                                        <div class="property-info d-flex justify-content-between align-items-end pt-30">
                                            <div>
                                                <strong class="price fw-500 color-dark">£{{$property->price}}</strong>
                                                <div class="address pt-5 m0"> {{ $property->address }} </div>
                                            </div>
                                            <a href="{{ route("public.property", $property->id) }}" class="btn-four mb-5"><i class="bi bi-arrow-up-right"></i></a>
                                        </div>
                                        <!-- /.property-info -->
                                    </div>
                                    <!-- /.listing-card-one -->
                                </div>
                                
                            @endforeach
                            {{-- <div class="isotop-item sell">
                                <div class="listing-card-one shadow-none style-two mb-50">
                                    <div class="img-gallery">
                                        <div class="position-relative overflow-hidden">
                                            <div class="tag bg-white text-dark fw-500">FOR RENT</div>
                                            <img src="images/listing/img_70.jpg" class="w-100" alt="...">
                                            
                                            <div class="img-slider-btn">
                                                03 <i class="fa-regular fa-image"></i>
                                                <a href="images/listing/img_large_01.jpg" class="d-block" data-fancybox="img2" data-caption="Blueberry villa"></a>
                                                <a href="images/listing/img_large_02.jpg" class="d-block" data-fancybox="img2" data-caption="Blueberry villa"></a>
                                                <a href="images/listing/img_large_03.jpg" class="d-block" data-fancybox="img2" data-caption="Blueberry villa"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.img-gallery -->
                                    <div class="property-info d-flex justify-content-between align-items-end pt-30">
                                        <div>
                                            <strong class="price fw-500 color-dark">$2,210/ <sub>m</sub></strong>
                                            <div class="address pt-5 m0">6391 Elgin St. Celina</div>
                                        </div>
                                        <a href="#" class="btn-four mb-5"><i class="bi bi-arrow-up-right"></i></a>
                                    </div>
                                    <!-- /.property-info -->
                                </div>
                                <!-- /.listing-card-one -->
                            </div>
                            <div class="isotop-item sell">
                                <div class="listing-card-one shadow-none style-two mb-50">
                                    <div class="img-gallery">
                                        <div class="position-relative overflow-hidden">
                                            <div class="tag bg-white text-dark fw-500">FOR SELL</div>
                                            <img src="images/listing/img_71.jpg" class="w-100" alt="...">
                                            
                                            <div class="img-slider-btn">
                                                03 <i class="fa-regular fa-image"></i>
                                                <a href="images/listing/img_large_01.jpg" class="d-block" data-fancybox="img3" data-caption="Blueberry villa"></a>
                                                <a href="images/listing/img_large_02.jpg" class="d-block" data-fancybox="img3" data-caption="Blueberry villa"></a>
                                                <a href="images/listing/img_large_03.jpg" class="d-block" data-fancybox="img3" data-caption="Blueberry villa"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.img-gallery -->
                                    <div class="property-info d-flex justify-content-between align-items-end pt-30">
                                        <div>
                                            <strong class="price fw-500 color-dark">$1,23,710</strong>
                                            <div class="address pt-5 m0">6391 Elgin St. Celina</div>
                                        </div>
                                        <a href="#" class="btn-four mb-5"><i class="bi bi-arrow-up-right"></i></a>
                                    </div>
                                    <!-- /.property-info -->
                                </div>
                                <!-- /.listing-card-one -->
                            </div>
                            <div class="isotop-item rent">
                                <div class="listing-card-one shadow-none style-two mb-50">
                                    <div class="img-gallery">
                                        <div class="position-relative overflow-hidden">
                                            <div class="tag bg-white text-dark fw-500">FOR SELL</div>
                                            <img src="images/listing/img_72.jpg" class="w-100" alt="...">
                                            
                                            <div class="img-slider-btn">
                                                03 <i class="fa-regular fa-image"></i>
                                                <a href="images/listing/img_large_01.jpg" class="d-block" data-fancybox="img4" data-caption="Blueberry villa"></a>
                                                <a href="images/listing/img_large_02.jpg" class="d-block" data-fancybox="img4" data-caption="Blueberry villa"></a>
                                                <a href="images/listing/img_large_03.jpg" class="d-block" data-fancybox="img4" data-caption="Blueberry villa"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.img-gallery -->
                                    <div class="property-info d-flex justify-content-between align-items-end pt-30">
                                        <div>
                                            <strong class="price fw-500 color-dark">$78,420</strong>
                                            <div class="address pt-5 m0">6391 Elgin St. Celina</div>
                                        </div>
                                        <a href="#" class="btn-four mb-5"><i class="bi bi-arrow-up-right"></i></a>
                                    </div>
                                    <!-- /.property-info -->
                                </div>
                                <!-- /.listing-card-one -->
                            </div> --}}
                        </div>
                    </div>
                    <!-- /.agent-property-listing -->

                    {{-- <div class="review-panel-one bottom-line-dark pb-40 mb-80 xl-mb-50">
                        <div class="position-relative z-1">
                            <div class="d-sm-flex justify-content-between align-items-center mb-10">
                                <h4 class="m0 xs-pb-30">All Reviews (4.7 Rating)</h4>
                                <select class="nice-select rounded-0">
                                    <option value="0">Newest</option>
                                    <option value="1">Best Seller</option>
                                    <option value="2">Best Match</option>
                                </select>
                            </div>
                            <div class="review-wrapper mb-35">
                                <div class="review">
                                    <img src="images/media/img_01.jpg" alt="" class="rounded-circle avatar">
                                    <div class="text">
                                        <div class="d-sm-flex justify-content-between">
                                            <div>
                                                <h6 class="name">Zubayer Al Hasan</h6>
                                                <div class="time fs-16">17 Aug, 23</div>
                                            </div>
                                            <ul class="rating style-none d-flex xs-mt-10">
                                                <li><span class="fst-italic me-2">(4.7 Rating)</span> </li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <p class="fs-20 mt-20 mb-30">Lorem ipsum dolor sit amet consectetur. Pellentesque sed nulla facili diam posuere aliquam suscipit quam.</p>
                                        <div class="d-flex review-help-btn">
                                            <a href="#" class="me-5"><i class="fa-sharp fa-regular fa-thumbs-up"></i> <span>Helpful</span></a>
                                            <a href="#"><i class="fa-sharp fa-regular fa-flag-swallowtail"></i> <span>Flag</span></a>
                                        </div>
                                    </div>
                                    <!-- /.text -->
                                </div>
                                <!-- /.review -->

                                <div class="review">
                                    <img src="images/media/img_03.jpg" alt="" class="rounded-circle avatar">
                                    <div class="text">
                                        <div class="d-sm-flex justify-content-between">
                                            <div>
                                                <h6 class="name">Rashed Kabir</h6>
                                                <div class="time fs-16">13 Jun, 23</div>
                                            </div>
                                            <ul class="rating style-none d-flex xs-mt-10">
                                                <li><span class="fst-italic me-2">(4.9 Rating)</span> </li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <p class="fs-20 mt-20 mb-30">Lorem ipsum dolor sit amet consectetur. Pellentesque sed nulla facili diam posuere aliquam suscipit quam.</p>
                                        <ul class="style-none d-flex flex-wrap review-gallery pb-30">
                                            <li><a href="images/listing/img_large_01.jpg" class="d-block" data-fancybox="revImg" data-caption="Duplex orkit villa"><img src="images/listing/img_48.jpg" alt=""></a></li>
                                            <li><a href="images/listing/img_large_02.jpg" class="d-block" data-fancybox="revImg" data-caption="Duplex orkit villa"><img src="images/listing/img_49.jpg" alt=""></a></li>
                                            <li><a href="images/listing/img_large_03.jpg" class="d-block" data-fancybox="revImg" data-caption="Duplex orkit villa"><img src="images/listing/img_50.jpg" alt=""></a></li>
                                            <li>
                                                <div class="position-relative more-img">
                                                    <img src="images/listing/img_50.jpg" alt="">
                                                    <span>13+</span>
                                                    <a href="images/listing/img_large_04.jpg" class="d-block" data-fancybox="revImg" data-caption="Duplex orkit villa."></a>
                                                    <a href="images/listing/img_large_05.jpg" class="d-block" data-fancybox="revImg" data-caption="Duplex orkit villa."></a>
                                                    <a href="images/listing/img_large_06.jpg" class="d-block" data-fancybox="revImg" data-caption="Duplex orkit villa."></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="d-flex review-help-btn">
                                            <a href="#" class="me-5"><i class="fa-sharp fa-regular fa-thumbs-up"></i> <span>Helpful</span></a>
                                            <a href="#"><i class="fa-sharp fa-regular fa-flag-swallowtail"></i> <span>Flag</span></a>
                                        </div>
                                        
                                    </div>
                                    <!-- /.text -->
                                </div>
                                <!-- /.review -->

                                <div class="review hide">
                                    <img src="images/media/img_02.jpg" alt="" class="rounded-circle avatar">
                                    <div class="text">
                                        <div class="d-sm-flex justify-content-between">
                                            <div>
                                                <h6 class="name">Perty Jinta</h6>
                                                <div class="time fs-16">17 Aug, 23</div>
                                            </div>
                                            <ul class="rating style-none d-flex xs-mt-10">
                                                <li><span class="fst-italic me-2">(4.7 Rating)</span> </li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <p class="fs-20 mt-20 mb-30">Lorem ipsum dolor sit amet consectetur. Pellentesque sed nulla facili diam posuere aliquam suscipit quam.</p>
                                        <div class="d-flex review-help-btn">
                                            <a href="#" class="me-5"><i class="fa-sharp fa-regular fa-thumbs-up"></i> <span>Helpful</span></a>
                                            <a href="#"><i class="fa-sharp fa-regular fa-flag-swallowtail"></i> <span>Flag</span></a>
                                        </div>
                                    </div>
                                    <!-- /.text -->
                                </div>
                                <!-- /.review -->
                            </div>
                            <!-- /.review-wrapper -->
                            <div class="load-more-review text-uppercase fw-500 w-100 inverse rounded-0 tran3s">VIEW ALL 120 REVIEWS <i class="bi bi-arrow-up-right"></i></div>
                        </div>						
                    </div> --}}
                    <!-- /.review-panel-one -->

                    {{-- <div class="review-form">
                        <h4 class="mb-20">Leave A Reply</h4>
                        <p class="fs-20 lh-lg pb-15"><a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" class="color-dark fw-500 text-decoration-underline">Sign in</a> to post your comment or signup if you don't have any account.</p>
                        
                        <div class="bg-dot p-30">
                            <form action="#" class="bg-white p-40">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-box-two mb-30">
                                            <div class="label">Title*</div>
                                            <input type="text" placeholder="Rashed Kabir" class="type-input rounded-0">
                                        </div>
                                        <!-- /.input-box-two -->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-box-two mb-30">
                                            <div class="label">Email*</div>
                                            <input type="email" placeholder="rshdkabir@gmail.com" class="type-input rounded-0">
                                        </div>
                                        <!-- /.input-box-two -->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-box-two mb-30">
                                            <div class="label">Ratings*</div>
                                            <select class="nice-select rounded-0">
                                                <option value="0">Ratings</option>
                                                <option value="1">Five Star</option>
                                                <option value="1">Four Star</option>
                                                <option value="1">Three Star</option>
                                                <option value="1">Two Star</option>
                                                <option value="1">One Star</option>
                                            </select>
                                        </div>
                                        <!-- /.input-box-two -->
                                    </div>
                                    <div class="col-12">
                                        <div class="input-box-two mb-30">
                                            <textarea placeholder="Write your review here..." class="rounded-0"></textarea>
                                        </div>
                                        <!-- /.input-box-two -->
                                    </div>
                                </div>
                                <button class="btn-five text-uppercase rounded-0 sm">Post Review</button>
                            </form>
                        </div>
                    </div> --}}
                    <!-- /.review-form -->
                </div>
                <div class="col-lg-4">
                    <div class="theme-sidebar-one dot-bg p-30 ms-xxl-3 md-mt-60">
                        {{-- <div class="tour-schedule bg-white p-30 mb-40">
                            <h5 class="mb-40">Contact Form</h5>
                            <form action="#">
                                <div class="input-box-three mb-25">
                                    <div class="label">Your Email*</div>
                                    <input type="email" placeholder="Enter mail address" class="type-input rounded-0">
                                </div>
                                <!-- /.input-box-three -->
                                <div class="input-box-three mb-25">
                                    <div class="label">Your Phone*</div>
                                    <input type="tel" placeholder="Your phone number" class="type-input rounded-0">
                                </div>
                                <!-- /.input-box-three -->
                                <div class="input-box-three mb-15">
                                    <div class="label">Message*</div>
                                    <textarea placeholder="Hello, I am interested in [Califronia Apartments]" class="rounded-0"></textarea>
                                </div>
                                <!-- /.input-box-three -->
                                <button class="btn-nine text-uppercase w-100 mb-20">INQUIry</button>
                            </form>
                            <a href="tel:+548842445" class="btn-eight sm text-uppercase w-100 rounded-0 tran3s">CALL NOW</a>
                        </div> --}}
                        <!-- /.tour-schedule -->

                        {{-- <div class="agent-finder bg-white p-30 mb-40">
                            <h5 class="mb-40">Search Agent</h5>
                            <form action="#">
                                <div class="input-box-one mb-25">
                                    <div class="label">Agent Name</div>
                                    <input type="text" placeholder="Type Agent Name" class="type-input">
                                </div>
                                <!-- /.input-box-one -->
                                <div class="input-box-one mb-25">
                                    <div class="label">Keyword</div>
                                    <input type="text" placeholder="Apartments, Villa" class="type-input">
                                </div>
                                <!-- /.input-box-one -->
                                <div class="input-box-one mb-25">
                                    <div class="label">Location</div>
                                    <select class="nice-select fw-normal">
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
                                <button class="btn-nine text-uppercase w-100 mb-10">SEARCH</button>
                            </form>
                        </div> --}}
                        <!-- /.agent-finder -->

                    </div>
                    <!-- /.theme-sidebar-one -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.agent-details -->

@endsection
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.creativegigstf.com/homy/homy/dashboard/add-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jan 2024 13:01:21 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="Real estate, Property sale, Property buy">
	<meta name="description" content="Homy is a beautiful website template designed for Real Estate Agency.">
    <meta property="og:site_name" content="Homy">
    <meta property="og:url" content="https://creativegigstf.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Homy-Real Estate HTML5 Template & Dashboard">
	<meta name='og:image' content='../images/assets/ogg.png'>
	<!-- For IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- For Resposive Device -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- For Window Tab Color -->
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#0D1A1C">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#0D1A1C">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#0D1A1C">
	<title>Homy-Real Estate HTML5 Template & Dashboard</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href=" {{ asset("images/fav-icon/icon.png") }}  ">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href=" {{ asset("css/bootstrap.min.css") }} " media="all">
	<!-- Main style sheet -->
	<link rel="stylesheet" type="text/css" href=" {{ asset("css/style.min.css") }} " media="all">
	<!-- responsive style sheet -->
	<link rel="stylesheet" type="text/css" href=" {{ asset("css/responsive.css") }} " media="all">

	<!-- Fix Internet Explorer ______________________________________-->
	<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->
</head>

<body>

	<div class="main-page-wrapper">
		<!-- ===================================================
			Loading Transition
		==================================================== -->
		<div id="preloader">
			<div id="ctn-preloader" class="ctn-preloader">
				<div class="icon"><img src=" {{ asset("images/loader.gif") }} " alt="" class="m-auto d-block" width="64"></div>			</div>
		</div>

		<!-- 
		=============================================
			Dashboard Aside Menu
		============================================== 
		-->
		<x-landlords.aside />
		<!-- /.dash-aside-navbar -->

		<!-- 
		=============================================
			Dashboard Body
		============================================== 
		-->
		<div class="dashboard-body">
			<div class="position-relative">
				<!-- ************************ Header **************************** -->
				<header class="dashboard-header">
					<div class="d-flex align-items-center justify-content-end">
						<h4 class="m0 d-none d-lg-block">Add New Property</h4>
						<button class="dash-mobile-nav-toggler d-block d-md-none me-auto">
							<span></span>
						</button>
						<form action="#" class="search-form ms-auto">
							<input type="text" placeholder="Search here..">
							<button><img src="../images/lazy.svg" data-src="images/icon/icon_43.svg" alt="" class="lazy-img m-auto"></button>
						</form>
						<div class="profile-notification position-relative dropdown-center ms-3 ms-md-5 me-4">
							<button class="noti-btn dropdown-toggle" type="button" id="notification-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
								<img src="../images/lazy.svg" data-src="images/icon/icon_11.svg" alt="" class="lazy-img">
								<div class="badge-pill"></div>
							</button>
							<ul class="dropdown-menu" aria-labelledby="notification-dropdown">
								<li>
									<h4>Notification</h4>
									<ul class="style-none notify-list">
										<li class="d-flex align-items-center unread">
											<img src="../images/lazy.svg" data-src="images/icon/icon_36.svg" alt="" class="lazy-img icon">
											<div class="flex-fill ps-2">
												<h6>You have 3 new mails</h6>
												<span class="time">3 hours ago</span>
											</div>
										</li>
										<li class="d-flex align-items-center">
											<img src="../images/lazy.svg" data-src="images/icon/icon_37.svg" alt="" class="lazy-img icon">
											<div class="flex-fill ps-2">
												<h6>Your listing post has been approved</h6>
												<span class="time">1 day ago</span>
											</div>
										</li>
										<li class="d-flex align-items-center unread">
											<img src="../images/lazy.svg" data-src="images/icon/icon_38.svg" alt="" class="lazy-img icon">
											<div class="flex-fill ps-2">
												<h6>Your meeting is cancelled</h6>
												<span class="time">3 days ago</span>
											</div>
										</li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="d-none d-md-block me-3">
							<a href="add-property.html" class="btn-two"><span>Add Listing</span> <i class="fa-thin fa-arrow-up-right"></i></a>
						</div>
						<div class="user-data position-relative">
							<button class="user-avatar online position-relative rounded-circle dropdown-toggle" type="button" id="profile-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
								<img src="../images/lazy.svg" data-src="images/avatar_01.jpg" alt="" class="lazy-img">
							</button>
							<!-- /.user-avatar -->
							<div class="user-name-data">
								<ul class="dropdown-menu" aria-labelledby="profile-dropdown">
									<li>
										<a class="dropdown-item d-flex align-items-center" href="profile.html"><img src="../images/lazy.svg" data-src="images/icon/icon_23.svg" alt="" class="lazy-img"><span class="ms-2 ps-1">Profile</span></a>
									</li>
									<li>
										<a class="dropdown-item d-flex align-items-center" href="account-settings.html"><img src="../images/lazy.svg" data-src="images/icon/icon_24.svg" alt="" class="lazy-img"><span class="ms-2 ps-1">Account Settings</span></a>
									</li>
									<li>
										<a class="dropdown-item d-flex align-items-center" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal"><img src="../images/lazy.svg" data-src="images/icon/icon_25.svg" alt="" class="lazy-img"><span class="ms-2 ps-1">Delete Account</span></a>
									</li>
								</ul>
							</div>
						</div>
						<!-- /.user-data -->
					</div>
				</header>
				<!-- End Header -->

				<h2 class="main-title d-block d-lg-none">Add New Property</h2>

                <form action="{{route("properties.store")}}" method="post">

                    @csrf

                    <input type="hidden" name="landlord_id" value="{{$landlord->id}}">

                    <div class="bg-white card-box border-20">
                        <h4 class="dash-title-three">Overview</h4>
                        <div class="dash-input-wrapper mb-30">
                            <label for="">Property Title*</label>
                            <input type="text" placeholder="Your Property Name" name="title" >
                            <span class="text-danger">@error('title'){{$message}}@enderror</span>
                        </div>
                        <!-- /.dash-input-wrapper -->
                        <div class="dash-input-wrapper mb-30">
                            <label for="">Description*</label>
                            <textarea class="size-lg" placeholder="Write about property..." name="description" ></textarea>
                            <span class="text-danger">@error('description'){{$message}}@enderror</span>
                        </div>
                        <!-- /.dash-input-wrapper -->
                        <div class="row align-items-end">
                            <div class="col-md-6">
                                <div class="dash-input-wrapper mb-30">
                                    <label for="">Type*</label>
                                    <select class="nice-select" name="type" >
                                        <option value="" style="display: none;">Select Type</option> 
                                        <option value="house">House</option>
                                        <option value="plot">Plot</option>
                                    </select>
                                    <span class="text-danger">@error('type'){{$message}}@enderror</span>
                                </div>
                                <!-- /.dash-input-wrapper -->
                            </div>
                            <div class="col-md-6">
                                <div class="dash-input-wrapper mb-30">
                                    <label for="">Listed in*</label>
                                    <select class="nice-select" name="list_in" >
                                        <option value="" style="display: none;">List As</option>
                                        <option value="sell">Sell</option>
                                        <option value="rent">Rent</option>
                                        <span class="text-danger">@error('list_in'){{$message}}@enderror</span>
                                    </select>
                                </div>
                                <!-- /.dash-input-wrapper -->
                            </div>
                            <div class="col-md-6">
                                <div class="dash-input-wrapper mb-30">
                                    <label for="">Price*</label>
                                    <input type="number" placeholder="Your Price" name="price" >
                                    <span class="text-danger">@error('price'){{$message}}@enderror</span>
                                </div>
                                <!-- /.dash-input-wrapper -->
                            </div>
                            <div class="col-md-6">
                                <input type="hidden" name="allow_sublet" value="0">
                                <input type="checkbox" name="allow_sublet" value="1">
                                <label>Allow Sublet?</label>
                                <div class="dash-input-wrapper mb-30">
                                    {{-- <label for="">Yearly Tax Rate*</label>
                                    <input type="text" placeholder="Tax Rate"> --}}
                                </div>
                                <!-- /.dash-input-wrapper -->
                            </div>
                        </div>
                    </div>
                    <!-- /.card-box -->
                    <div class="bg-white card-box border-20 mt-40">
                        <h4 class="dash-title-three">Listing Details</h4>
                        <div class="row align-items-end">
                            <div class="col-md-6">
                                <div class="dash-input-wrapper mb-30">
                                    <label for="">Size in yard*</label>
                                    <input type="number" placeholder="Ex: 180 sqyard" name="sq_yard" >
                                    <span class="text-danger">@error('sq_yard'){{$message}}@enderror</span>
                                </div>
                                <!-- /.dash-input-wrapper -->
                            </div>
                            <div class="col-md-6">
                                <div class="dash-input-wrapper mb-30">
                                    <label for="">Bedrooms*</label>
                                    <select class="nice-select" name="bedrooms" required>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <span class="text-danger">@error('bedrooms'){{$message}}@enderror</span>
                                </div>
                                <!-- /.dash-input-wrapper -->
                            </div>
                            <div class="col-md-6">
                                <div class="dash-input-wrapper mb-30">
                                    <label for="">Bathrooms*</label>
                                    <select class="nice-select" name="bathrooms" required>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <span class="text-danger">@error('bathrooms'){{$message}}@enderror</span>
                                </div>
                                <!-- /.dash-input-wrapper -->
                            </div>
                            <div class="col-md-6">
                                <div class="dash-input-wrapper mb-30">
                                    <label for="">Kitchens*</label>
                                    <select class="nice-select" name="kitchens" required>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <span class="text-danger">@error('kitchens'){{$message}}@enderror</span>
                                </div>
                                <!-- /.dash-input-wrapper -->
                            </div>
                            <div class="col-md-6">
                                <div class="dash-input-wrapper mb-30">
                                    <label for="">Garages</label>
                                    <select class="nice-select" name="garages" required>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <span class="text-danger">@error('garages'){{$message}}@enderror</span>
                                </div>
                                <!-- /.dash-input-wrapper -->
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="dash-input-wrapper mb-30">
                                    <label for="">Garage Size</label>
                                    <input type="text" placeholder="Ex: 1,230 sqft">
                                </div>
                                <!-- /.dash-input-wrapper -->
                            </div> --}}
                            <div class="col-md-6">
                                <div class="dash-input-wrapper mb-30">
                                    <label for="">Year Built*</label>
                                    <input type="number" placeholder="Type Year" name="built_year" >
                                    <span class="text-danger">@error('built_year'){{$message}}@enderror</span>
                                </div>
                                <!-- /.dash-input-wrapper -->
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="dash-input-wrapper mb-30">
                                    <label for="">Floors No*</label>
                                    <select class="nice-select">
                                        <option value="0">Ground</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <!-- /.dash-input-wrapper -->
                            </div> --}}
                            {{-- <div class="col-12">
                                <div class="dash-input-wrapper">
                                    <label for="">Description*</label>
                                    <textarea class="size-lg" placeholder="Write about property..."></textarea>
                                </div>
                                <!-- /.dash-input-wrapper -->
                            </div> --}}
                        </div>
                    </div>
                    <!-- /.card-box -->
    
                    <div class="bg-white card-box border-20 mt-40">
                        <h4 class="dash-title-three">Photo & Video Attachment</h4>
                        <div class="dash-input-wrapper mb-20">
                            <label for="">File Attachment*</label>
                            
                            <div class="attached-file d-flex align-items-center justify-content-between mb-15">
                                <span>PorpertyImage_01.jpg</span>
                                <a href="#" class="remove-btn" onclick="removeFile('PorpertyImage_01.jpg')"><i class="bi bi-x"></i></a>
                                <input type="file" name="">
                            </div>
                        </div>
                        <!-- /.dash-input-wrapper -->
                        <button type="button" class="dash-btn-one d-inline-block position-relative me-3">
                            <i class="bi bi-plus"></i>
                            Upload File
                        </button>
                        <small>Upload file .jpg,  .png,  .mp4</small>
                    </div>

                    <div class="bg-white card-box border-20 mt-40">
                        <h4 class="dash-title-three">Photo & Video Attachment</h4>
                        <div class="dash-input-wrapper mb-20" id="attachedFilesContainer">
                            <!-- Attached Files will be dynamically added here -->
                        </div>
                        <!-- /.dash-input-wrapper -->
                        <div class="dash-btn-one d-inline-block position-relative me-3">
                            <i class="bi bi-plus"></i>
                            Upload File
                            <input type="file" id="media" name="media[]" accept=".jpg, .jpeg, .png, .mp4" multiple>
                        </div>
                        <small>Upload file .jpg .jpeg .png .mp4</small>
                        <span class="text-danger" id="mediaError"></span>
                    </div>
                    <!-- /.card-box -->
    
                    <div class="bg-white card-box border-20 mt-40">
                        <h4 class="dash-title-three m0 pb-5">Select Amenities</h4>
                        <ul class="style-none d-flex flex-wrap filter-input">
                            <li>
                                <input type="checkbox" name="amenities[]" value="A/C & Heating">
                                <label>A/C & Heating</label>
                            </li>
                            <li>
                                <input type="checkbox" name="amenities[]" value="Garages" placeholder="">
                                <label>Garages</label>
                            </li>
                            <li>
                                <input type="checkbox" name="amenities[]" value="Swimming Pool">
                                <label>Swimming Pool</label>
                            </li>
                            <li>
                                <input type="checkbox" name="amenities[]" value="Parking">
                                <label>Parking</label>
                            </li>
                            <li>
                                <input type="checkbox" name="amenities[]" value="Lake View">
                                <label>Lake View</label>
                            </li>
                            <li>
                                <input type="checkbox" name="amenities[]" value="Garden">
                                <label>Garden</label>
                            </li>
                            <li>
                                <input type="checkbox" name="amenities[]" value="Disabled Access">
                                <label>Disabled Access</label>
                            </li>
                            <li>
                                <input type="checkbox" name="amenities[]" value="Pet Friendly">
                                <label>Pet Friendly</label>
                            </li>
                            <li>
                                <input type="checkbox" name="amenities[]" value="Ceiling Height">
                                <label>Ceiling Height</label>
                            </li>
                            <li>
                                <input type="checkbox" name="amenities[]" value="Outdoor Shower">
                                <label>Outdoor Shower</label>
                            </li>
                            <li>
                                <input type="checkbox" name="amenities[]" value="Refrigerator">
                                <label>Refrigerator</label>
                            </li>
                            <li>
                                <input type="checkbox" name="amenities[]" value="Fireplace">
                                <label>Fireplace</label>
                            </li>
                            <li>
                                <input type="checkbox" name="amenities[]" value="Wifi">
                                <label>Wifi</label>
                            </li>
                            <li>
                                <input type="checkbox" name="amenities[]" value="TV Cable">
                                <label>TV Cable</label>
                            </li>
                            <li>
                                <input type="checkbox" name="amenities[]" value="Barbeque">
                                <label>Barbeque</label>
                            </li>
                            <li>
                                <input type="checkbox" name="amenities[]" value="Laundry">
                                <label>Laundry</label>
                            </li>
                            <li>
                                <input type="checkbox" name="amenities[]" value="Dryer">
                                <label>Dryer</label>
                            </li>
                            <li>
                                <input type="checkbox" name="amenities[]" value="Lawn">
                                <label>Lawn</label>
                            </li>
                            <li>
                                <input type="checkbox" name="amenities[]" value="Elevator">
                                <label>Elevator</label>
                            </li>
                        </ul>
                    </div>
                    <!-- /.card-box -->
    
                    <div class="bg-white card-box border-20 mt-40">
                        <h4 class="dash-title-three">Address & Location</h4>
                        <div class="row">
                            <div class="col-12">
                                <div class="dash-input-wrapper mb-25">
                                    <label for="">Address*</label>
                                    <input type="text" placeholder="145/A, Ranchview" name="address" >
                                    <span class="text-danger">@error('address'){{$message}}@enderror</span>
                                </div>
                                <!-- /.dash-input-wrapper -->
                            </div>
                            {{-- <div class="col-lg-4">
                                <div class="dash-input-wrapper mb-25">
                                    <label for="">Country*</label>
                                    <select class="nice-select">
                                        <option value="0">Select Country</option>
                                        <option>Afghanistan</option>
                                        <option>Albania</option>
                                        <option>Algeria</option>
                                        <option>Andorra</option>
                                        <option>Angola</option>
                                        <option>Antigua and Barbuda</option>
                                        <option>Argentina</option>
                                        <option>Armenia</option>
                                        <option>Australia</option>
                                        <option>Austria</option>
                                        <option>Azerbaijan</option>
                                        <option>Bahamas</option>
                                        <option>Bahrain</option>
                                        <option>Bangladesh</option>
                                        <option>Barbados</option>
                                        <option>Belarus</option>
                                        <option>Belgium</option>
                                        <option>Belize</option>
                                        <option>Benin</option>
                                        <option>Bhutan</option>
                                    </select>
                                </div>
                                <!-- /.dash-input-wrapper -->
                            </div> --}}
                            <div class="col-lg-4">
                                <div class="dash-input-wrapper mb-25">
                                    <label for="city">City*</label>
                                    <select class="nice-select" name="city_id" id="city">
                                        <option value="" style="display: none;">Select city</option>
                                        @foreach($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">@error('city_id'){{$message}}@enderror</span>
                                </div>
                                <!-- /.dash-input-wrapper -->
                            </div>
                            <div class="col-lg-4">
                                <div class="dash-input-wrapper mb-25">
                                    <label for="area">Area*</label>
                                    <select class="nice-select" name="area_id" id="area">
                                        <option value="" style="display: none;">Select Area</option>
                                    </select>
                                    <span class="text-danger">@error('area_id'){{$message}}@enderror</span>
                                </div>
                                <!-- /.dash-input-wrapper -->
                            </div>
                            {{-- <div class="col-12">
                                <div class="dash-input-wrapper mb-25">
                                    <label for="">Map Location*</label>
                                    <div class="position-relative">
                                        <input type="text" placeholder="XC23+6XC, Moiran, N105">
                                        <button class="location-pin tran3s"><img src="../images/lazy.svg" data-src="images/icon/icon_16.svg" alt="" class="lazy-img m-auto"></button>
                                    </div>
                                    <div class="map-frame mt-30">
                                        <div class="gmap_canvas h-100 w-100">
                                            <iframe class="gmap_iframe h-100 w-100" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=dhaka%20collage&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.dash-input-wrapper -->
                            </div> --}}
                        </div>
                    </div>
                    <!-- /.card-box -->
                    <div class="button-group d-inline-flex align-items-center mt-30">
                        <button type="submit" class="dash-btn-two tran3s me-3">Submit Property</button>
                        <button type="reset" class="dash-cancel-btn tran3s">Cancel</button>
                    </div>				
                
                </form>
			</div>
		</div>
		<!-- /.dashboard-body -->


		<!-- Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen modal-dialog-centered">
                <div class="container">
                    <div class="remove-account-popup text-center modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						<img src="../images/lazy.svg" data-src="images/icon/icon_22.svg" alt="" class="lazy-img m-auto">
						<h2>Are you sure?</h2>
						<p>Are you sure to delete your account? All data will be lost.</p>
						<div class="button-group d-inline-flex justify-content-center align-items-center pt-15">
							<a href="#" class="confirm-btn fw-500 tran3s me-3">Yes</a>
							<button type="button" class="btn-close fw-500 ms-3" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
						</div>
                    </div>
                    <!-- /.remove-account-popup -->
                </div>
            </div>
        </div>
		


		<button class="scroll-top">
			<i class="bi bi-arrow-up-short"></i>
		</button>




		<!-- Optional JavaScript _____________________________  -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#city').change(function () {
                    var cityId = $(this).val();
        
                    $.ajax({
                        type: 'GET',
                        url: '{{ route("properties.getAreasByCity") }}',
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}"
                        },
                        data: { city_id: cityId },
                        success: function (data) {
                            console.log(data);
                            $('#area').empty();
        
                            // Add new options
                            $.each(data, function (index, area) {
                                $('#area').append('<option value="' + area.id + '">' + area.name + '</option>');
                            });
        
                            // Trigger nice-select refresh
                            $('#area').niceSelect('update');
                        }
                    });
                });
            });
        </script>

        <script>
            // JavaScript Code
            document.addEventListener('DOMContentLoaded', function () {
                const attachedFilesContainer = document.getElementById('attachedFilesContainer');
                const uploadFileInput = document.querySelector('#media');
                const mediaError = document.getElementById('mediaError');

                uploadFileInput.addEventListener('change', handleFileUpload);

                function handleFileUpload() {
                    const files = uploadFileInput.files;

                    // Clear previous error message
                    mediaError.textContent = '';

                    // Clear the attached files container
                    attachedFilesContainer.innerHTML = '';

                    if (files.length > 0) {
                        // Display each selected file
                        for (const file of files) {
                            displayFile(file);
                        }
                    }
                }

                function displayFile(file) {
                    const fileContainer = document.createElement('div');
                    fileContainer.classList.add('attached-file', 'd-flex', 'align-items-center', 'justify-content-between', 'mb-15');

                    const fileNameSpan = document.createElement('span');
                    fileNameSpan.textContent = file.name;

                    const removeBtn = document.createElement('a');
                    removeBtn.href = '#';
                    removeBtn.classList.add('remove-btn');
                    removeBtn.innerHTML = '<i class="bi bi-x"></i>';
                    removeBtn.addEventListener('click', () => removeFile(fileContainer));

                    const fileInput = document.createElement('input');
                    fileInput.type = 'file';
                    fileInput.name = 'media[]';
                    fileInput.style.display = 'none'; // Hide the input

                    fileContainer.appendChild(fileNameSpan);
                    fileContainer.appendChild(removeBtn);
                    fileContainer.appendChild(fileInput);

                    attachedFilesContainer.appendChild(fileContainer);

                    // Set the file input value to the file
                    fileInput.files = new FileList([file]);
                }

                function removeFile(fileContainer) {
                    // Remove the file container from the view
                    attachedFilesContainer.removeChild(fileContainer);
                }
            });
        </script>
        
		<!-- jQuery first, then Bootstrap JS -->
		<!-- jQuery -->
		<script src=" {{ asset("vendor/jquery.min.js") }} "></script>
		<!-- Bootstrap JS -->
		<script src=" {{ asset("vendor/bootstrap/js/bootstrap.bundle.min.js") }} "></script>
		<!-- WOW js -->
		<script src=" {{ asset("vendor/wow/wow.min.js") }} "></script>
		<!-- Slick Slider -->
		<script src=" {{ asset("vendor/slick/slick.min.js") }} "></script>
		<!-- Fancybox -->
		<script src=" {{ asset("vendor/fancybox/fancybox.umd.js") }} "></script>
		<!-- Lazy -->
		<script src=" {{ asset("vendor/jquery.lazy.min.js") }} "></script>
		<!-- js Counter -->
		<script src=" {{ asset("vendor/jquery.counterup.min.js") }} "></script>
		<script src=" {{ asset("vendor/jquery.waypoints.min.js") }} "></script>
		<!-- Nice Select -->
		<script src=" {{ asset("vendor/nice-select/jquery.nice-select.min.js") }} "></script>
		<!-- validator js -->
		<script src=" {{ asset("vendor/validator.js") }} "></script>

		<!-- Theme js -->
		<script src=" {{ asset("js/theme.js") }} "></script>
	</div> <!-- /.main-page-wrapper -->
</body>


<!-- Mirrored from html.creativegigstf.com/homy/homy/dashboard/add-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jan 2024 13:01:27 GMT -->
</html>
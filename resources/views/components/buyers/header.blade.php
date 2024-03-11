<header class="dashboard-header">
    <div class="d-flex align-items-center justify-content-end">
        <h4 class="m0 d-none d-lg-block">Dashboard</h4>
        <button class="dash-mobile-nav-toggler d-block d-md-none me-auto">
            <span></span>
        </button>
        <form action="#" class="search-form ms-auto">
            {{-- <input type="text" placeholder="Search here..">
            <button><img src="../images/lazy.svg" data-src=" {{ asset("dashboard/images/icon/icon_43.svg") }} " alt="" class="lazy-img m-auto"></button> --}}
        </form>
        <div class="profile-notification position-relative dropdown-center ms-3 ms-md-5 me-4">
            {{-- <button class="noti-btn dropdown-toggle" type="button" id="notification-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                <img src="../images/lazy.svg" data-src=" {{ asset("dashboard/images/icon/icon_11.svg") }} " alt="" class="lazy-img">
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
            </ul> --}}
        </div>
        <div class="d-none d-md-block me-3">
            <a href="{{ route("landlords.properties.create") }}" class="btn-two"><span>Add Listing</span> <i class="fa-thin fa-arrow-up-right"></i></a>
        </div>
        <div class="user-data position-relative">
            <button class="user-avatar online position-relative rounded-circle dropdown-toggle" type="button" id="profile-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                <img src=" {{ asset("/images/lazy.svg") }} " data-src=" {{ $landlord->profile_picture ?? Storage::url("profile-pictures/default.svg") }} " alt="" class="lazy-img">
            </button>
            <!-- /.user-avatar -->
            <div class="user-name-data">
                <ul class="dropdown-menu" aria-labelledby="profile-dropdown">
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="profile.html"><img src="../images/lazy.svg" data-src=" {{ asset("dashboard/images/icon/icon_23.svg") }} " alt="" class="lazy-img"><span class="ms-2 ps-1">Profile</span></a>
                    </li>
                    {{-- <li>
                        <a class="dropdown-item d-flex align-items-center" href="account-settings.html"><img src="../images/lazy.svg" data-src=" {{ asset("dashboard/images/icon/icon_24.svg") }} " alt="" class="lazy-img"><span class="ms-2 ps-1">Account Settings</span></a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal"><img src="../images/lazy.svg" data-src=" {{ asset("dashboard/images/icon/icon_25.svg") }} " alt="" class="lazy-img"><span class="ms-2 ps-1">Delete Account</span></a>
                    </li> --}}
                </ul>
            </div>
        </div>
        <!-- /.user-data -->
    </div>
</header>
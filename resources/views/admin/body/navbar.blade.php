<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
            <a class="navbar-brand brand-logo" href="{{route('login')}}"><img src="{{asset('backend/images/logo.svg')}}"
                    alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" href="index.html"><img
                    src="{{asset('backend/images/logo-mini.svg')}}" alt="logo" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="typcn typcn-th-menu"></span>
            </button>
        </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
                    <img src="{{ Auth::user()->profile_photo_url }}" alt="profile" />
                    <span class="nav-profile-name">{{ Auth::user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">

                    <a class="dropdown-item" href="{{ route('profile.show')}}">
                        <i class="typcn typcn-user-outline"></i>
                        MyProfile
                    </a>

                    <a class="dropdown-item" href="{{ route('profile.show')}}">
                        <i class="typcn typcn-cog-outline text-primary"></i>
                        Settings
                    </a>

                    <!-- LOGOUT -->
                    <a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            this.closest('form').submit(); " role="button">
                                <i class="typcn typcn-eject text-primary"></i>
                                <span class="align-middle">Log Out</span>
                            </a>
                        </form>

                    </a>
                </div>
            </li>
            <li class="nav-item nav-user-status dropdown">
                <!-- <p class="mb-0">Last login was 23 hours ago.</p> -->
                <p class="mb-0">Last login :
                    <!-- dari https://suckittrees.com/artikel-192/cara-mengambil-tanggal-dan-waktu-sekarang-di-php.html -->
                    <?php
                    // $tanggal= mktime(date("m"),date("d"),date("Y"));
                    // echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
                    date_default_timezone_set('Asia/Jakarta');
                    $jam=date("H:i:s");
                    echo " Pukul  <b>". $jam." "."</b>";
                    $a = date ("H");
                    if (($a>=6) && ($a<=11)){
                    echo "<b>, Selamat Pagi !!</b>";
                    }
                    else if(($a>11) && ($a<=15))
                    {
                    echo ", Selamat Pagi !!";}
                    else if (($a>15) && ($a<=18)){
                    echo ", Selamat Siang !!";}
                    else { echo ", <b> Selamat Malam </b>";}
                    ?>
                </p>

            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-date dropdown">
                <a class="nav-link d-flex justify-content-center align-items-center" href="javascript:;">
                    <!-- <h6 class="date mb-0">Today : Mar 23</h6> -->
                    <h6 class="date mb-0">Today : 
                        <?php
                        echo "" . date("Y-m-d") . "<br>";
                        ?>
                    </h6>
                    <i class="typcn typcn-calendar"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
                    id="messageDropdown" href="#" data-toggle="dropdown">
                    <i class="typcn typcn-cog-outline mx-0"></i>
                    <span class="count"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                    aria-labelledby="messageDropdown">
                    <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="{{asset('backend/images/faces/face4.jpg')}}" alt="image" class="profile-pic">
                        </div>
                        <div class="preview-item-content flex-grow">
                            <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                            </h6>
                            <p class="font-weight-light small-text text-muted mb-0">
                                The meeting is cancelled
                            </p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="{{asset('backend/images/faces/face2.jpg')}}" alt="image" class="profile-pic">
                        </div>
                        <div class="preview-item-content flex-grow">
                            <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                            </h6>
                            <p class="font-weight-light small-text text-muted mb-0">
                                New product launch
                            </p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="{{asset('backend/images/faces/face3.jpg')}}" alt="image" class="profile-pic">
                        </div>
                        <div class="preview-item-content flex-grow">
                            <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                            </h6>
                            <p class="font-weight-light small-text text-muted mb-0">
                                Upcoming board meeting
                            </p>
                        </div>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown mr-0">
                <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center"
                    id="notificationDropdown" href="#" data-toggle="dropdown">
                    <i class="typcn typcn-bell mx-0"></i>
                    <span class="count"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                    aria-labelledby="notificationDropdown">
                    <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-success">
                                <i class="typcn typcn-info mx-0"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject font-weight-normal">Application Error</h6>
                            <p class="font-weight-light small-text mb-0 text-muted">
                                Just now
                            </p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-warning">
                                <i class="typcn typcn-cog-outline mx-0"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject font-weight-normal">Settings</h6>
                            <p class="font-weight-light small-text mb-0 text-muted">
                                Private message
                            </p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-info">
                                <i class="typcn typcn-user mx-0"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject font-weight-normal">New user registration</h6>
                            <p class="font-weight-light small-text mb-0 text-muted">
                                2 days ago
                            </p>
                        </div>
                    </a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="typcn typcn-th-menu"></span>
        </button>
    </div>
</nav>

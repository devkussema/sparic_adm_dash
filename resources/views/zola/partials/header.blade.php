
<header>
    <div class="header-innr">

        <!-- Logo-->
        <div class="header-btn-traiger is-hidden" uk-toggle="target: #wrapper ; cls: collapse-sidebar mobile-visible">
            <span></span></div>

            <!-- Logo-->
            <div id="logo">
            <a href="feeds.html"> <img src={{ asset("assets/images/logo.png") }} alt=""></a>
            <a href="feeds.html"> <img src={{ asset("assets/images/logo-light.png") }} class="logo-inverse"
                    alt=""></a>
        </div>

        <!-- form search-->
        <div class="head_search">
            <form>
                <div class="head_search_cont">
                    <input value="" type="text" class="form-control"
                        placeholder="Search for Friends , Videos and more.." autocomplete="off">
                    <i class="s_icon uil-search-alt"></i>
                </div>

                <!-- Search box dropdown -->
                <div uk-dropdown="pos: top;mode:click;animation: uk-animation-slide-bottom-small"
                    class="dropdown-search display-hidden">
                    <!-- User menu -->

                    <ul class="dropdown-search-list">
                        <li class="list-title"> Recent Searches </li>
                        <li> <a href="#">
                                <img src={{ asset("assets/images/avatars/avatar-2.jpg") }} alt="">
                                <p> Erica Jones <span> 2 hours ago </span> </p>
                            </a>
                        </li>
                        <li> <a href="#">
                                <img src={{ asset("assets/images/avatars/avatar-3.jpg") }} alt="">
                                <p> Adrian Mohani <span> 13 days ago </span> </p>
                            </a>
                        </li>
                        <li> <a href="#">
                                <img src={{ asset("assets/images/avatars/avatar-4.jpg") }} alt="">
                                <p> Mountain Riders <span> 3 days ago <span>Group</span> </span> </p>
                            </a>
                        </li>
                        <li> <a href="#">
                                <img src={{ asset("assets/images/avatars/avatar-5.jpg") }} alt="">
                                <p> Coffee Addicts <span> 12 days ago <span> Page</span></span> </p>
                            </a>
                        </li>
                        <li class="menu-divider"></li>
                        <li class="list-footer"> <a href="your-history.html"> Searches History </a>
                        </li>
                    </ul>

                </div>


            </form>
        </div>


        <div class="head_user">
            <a href="{{ route('login') }}" class="opts_icon" uk-tooltip="title: Iniciar sessão ; pos: bottom ;offset:7">
                <img src={{ asset("assets/images/icons/moderno/login.svg") }} alt="">
            </a>
        </div>
        <!-- user icons -->
        @if (Auth::user())
            <div class="head_user">


                <!-- browse apps  -->
                <a href="#" class="opts_icon uk-visible@s" uk-tooltip="title: Adicionar ; pos: bottom ;offset:7">
                    <img src={{ asset("assets/svg/add_circle_outline_black_24dp.svg") }} alt="">
                </a>

                <!-- browse apps dropdown -->
                <div uk-dropdown="mode:click ; pos: bottom-center ; animation: uk-animation-scale-up"
                    class="icon-browse display-hidden">
                    <a href="#" onclick="addMusica()" class="icon-menu-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="#9c27b0"
                                d="M12,8H4A2,2 0 0,0 2,10V14A2,2 0 0,0 4,16H5V20A1,1 0 0,0 6,21H8A1,1 0 0,0 9,20V16H12L17,20V4L12,8M21.5,12C21.5,13.71 20.54,15.26 19,16V8C20.53,8.75 21.5,10.3 21.5,12Z">
                            </path>
                        </svg>
                        Música </a>
                    <a href="#" class="icon-menu-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="#009da0"
                                d="M18,20H6V18H4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V18H18V20M14,2H6A2,2 0 0,0 4,4V12H6V4H14V8H18V12H20V8L14,2M11,16H8V14H11V16M16,16H13V14H16V16M3,14H6V16H3V14M21,16H18V14H21V16Z">
                            </path>
                        </svg>
                        Tornar artista </a>
                    <a id="ver-mais makeArtista" hidden="" href="#" class="icon-menu-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="#f25e4e"
                                d="M19,19H5V8H19M16,1V3H8V1H6V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3H18V1M17,12H12V17H17V12Z">
                            </path>
                        </svg>
                        Create Event </a>
                    <a id="ver-mais" hidden="" href="#" class="icon-menu-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="#03A9F4"
                                d="M12,6A3,3 0 0,0 9,9A3,3 0 0,0 12,12A3,3 0 0,0 15,9A3,3 0 0,0 12,6M6,8.17A2.5,2.5 0 0,0 3.5,10.67A2.5,2.5 0 0,0 6,13.17C6.88,13.17 7.65,12.71 8.09,12.03C7.42,11.18 7,10.15 7,9C7,8.8 7,8.6 7.04,8.4C6.72,8.25 6.37,8.17 6,8.17M18,8.17C17.63,8.17 17.28,8.25 16.96,8.4C17,8.6 17,8.8 17,9C17,10.15 16.58,11.18 15.91,12.03C16.35,12.71 17.12,13.17 18,13.17A2.5,2.5 0 0,0 20.5,10.67A2.5,2.5 0 0,0 18,8.17M12,14C10,14 6,15 6,17V19H18V17C18,15 14,14 12,14M4.67,14.97C3,15.26 1,16.04 1,17.33V19H4V17C4,16.22 4.29,15.53 4.67,14.97M19.33,14.97C19.71,15.53 20,16.22 20,17V19H23V17.33C23,16.04 21,15.26 19.33,14.97Z">
                            </path>
                        </svg>
                        Create Groups </a>
                    <a id="ver-mais" hidden="" href="#" class="icon-menu-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="#f79f58" d="M14.4,6L14,4H5V21H7V14H12.6L13,16H20V6H14.4Z"></path>
                        </svg>
                        Create Page </a>
                    <a id="ver-mais" hidden="" href="#" class="icon-menu-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="#8bc34a"
                                d="M22,16V4A2,2 0 0,0 20,2H8A2,2 0 0,0 6,4V16A2,2 0 0,0 8,18H20A2,2 0 0,0 22,16M11,12L13.03,14.71L16,11L20,16H8M2,6V20A2,2 0 0,0 4,22H18V20H4V6">
                            </path>
                        </svg>
                        Albums </a>
                    <!--<a href="#" class="more-app"> More Apps</a> -->

                    <a href="#" class="btn-more more-app"
                        uk-toggle="target: #ver-mais; animation: uk-animation-fade">
                        <span id="ver-mais">
                            Ver mais <i class="icon-feather-chevron-down ml-2"></i>
                        </span>
                        <span id="ver-mais" hidden>
                            Ver menos <i class="icon-feather-chevron-up ml-2"></i>
                        </span>
                    </a>
                </div>


                <!-- Message  notificiation dropdown -->
                <a href="#" class="opts_icon" uk-tooltip="title: Messages ; pos: bottom ;offset:7">
                    <img src={{ asset("assets/svg/message_black_24dp.svg") }} alt=""> <span>4</span>
                </a>

                <!-- Message  notificiation dropdown -->
                <div uk-dropdown="mode:click ; animation: uk-animation-slide-bottom-small"
                    class="dropdown-notifications display-hidden">

                    <!-- notification contents -->
                    <div class="dropdown-notifications-content" data-simplebar>

                        <!-- notivication header -->
                        <div class="dropdown-notifications-headline">
                            <h4>Messages</h4>
                            <a href="#">
                                <i class="icon-feather-settings"
                                    uk-tooltip="title: Message settings ; pos: left"></i>
                            </a>
                        </div>

                        <!-- notiviation list -->
                        <ul>
                            <li>
                                <a href="#">
                                    <span class="notification-avatar status-online">
                                        <img src={{ asset("assets/images/avatars/avatar-2.jpg") }} alt="">
                                    </span>
                                    <div class="notification-text notification-msg-text">
                                        <strong>Jonathan Madano</strong>
                                        <p>Thanks for The Answer ... <span class="time-ago"> 2 h </span> </p>

                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="notification-avatar">
                                        <img src={{ asset("assets/images/avatars/avatar-3.jpg") }} alt="">
                                    </span>
                                    <div class="notification-text notification-msg-text">
                                        <strong>Stella Johnson</strong>
                                        <p> Alex will explain you how ... <span class="time-ago"> 3 h </span>
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="notification-avatar status-online">
                                        <img src={{ asset("assets/images/avatars/avatar-1.jpg") }} alt="">
                                    </span>
                                    <div class="notification-text notification-msg-text">
                                        <strong>Alex Dolgove</strong>
                                        <p> Alia just joined Messenger! <span class="time-ago"> 3 h </span> </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="notification-avatar status-online">
                                        <img src={{ asset("assets/images/avatars/avatar-4.jpg") }} alt="">
                                    </span>
                                    <div class="notification-text notification-msg-text">
                                        <strong>Adrian Mohani</strong>
                                        <p>Thanks for The Answer ... <span class="time-ago"> 2 h </span> </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="notification-avatar">
                                        <img src={{ asset("assets/images/avatars/avatar-2.jpg") }} alt="">
                                    </span>
                                    <div class="notification-text notification-msg-text">
                                        <strong>Jonathan Madano</strong>
                                        <p>Thanks for The Answer ... <span class="time-ago"> 2 h </span> </p>

                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="notification-avatar">
                                        <img src={{ asset("assets/images/avatars/avatar-3.jpg") }} alt="">
                                    </span>
                                    <div class="notification-text notification-msg-text">
                                        <strong>Stella Johnson</strong>
                                        <p> Alex will explain you how ... <span class="time-ago"> 3 h </span>
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="notification-avatar">
                                        <img src={{ asset("assets/images/avatars/avatar-1.jpg") }} alt="">
                                    </span>
                                    <div class="notification-text notification-msg-text">
                                        <strong>Alex Dolgove</strong>
                                        <p> Alia just joined Messenger! <span class="time-ago"> 3 h </span> </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="notification-avatar">
                                        <img src={{ asset("assets/images/avatars/avatar-4.jpg") }} alt="">
                                    </span>
                                    <div class="notification-text notification-msg-text">
                                        <strong>Adrian Mohani</strong>
                                        <p>Thanks for The Answer ... <span class="time-ago"> 2 h </span> </p>
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="dropdown-notifications-footer">
                        <a href="#"> See all in Messages</a>
                    </div>


                </div>


                <!-- notificiation icon  -->
                <a href="#" class="opts_icon" uk-tooltip="title: Notifications ; pos: bottom ;offset:7">
                    <img src={{ asset("assets/svg/notifications_black_24dp.svg") }} alt=""> <span>3</span>
                </a>


                <!-- notificiation dropdown -->
                <div uk-dropdown="mode:click ; animation: uk-animation-slide-bottom-small"
                    class="dropdown-notifications display-hidden">

                    <!-- notification contents -->
                    <div class="dropdown-notifications-content" data-simplebar>

                        <!-- notivication header -->
                        <div class="dropdown-notifications-headline">
                            <h4>Notifications </h4>
                            <a href="#">
                                <i class="icon-feather-settings"
                                    uk-tooltip="title: Notifications settings ; pos: left"></i>
                            </a>
                        </div>

                        <!-- notiviation list -->
                        <ul>
                            <li>
                                <a href="#">
                                    <span class="notification-avatar">
                                        <img src={{ asset("assets/images/avatars/avatar-2.jpg") }} alt="">
                                    </span>
                                    <span class="notification-icon bg-gradient-primary">
                                        <i class="icon-feather-thumbs-up"></i></span>
                                    <span class="notification-text">
                                        <strong>Adrian Moh.</strong> Like Your Comment On Video
                                        <span class="text-primary">Learn Prototype Faster</span>
                                        <br> <span class="time-ago"> 9 hours ago </span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="notification-avatar">
                                        <img src={{ asset("assets/images/avatars/avatar-3.jpg") }} alt="">
                                    </span>
                                    <span class="notification-icon bg-gradient-danger">
                                        <i class="icon-feather-star"></i></span>
                                    <span class="notification-text">
                                        <strong>Alex Dolgove</strong> Added New Review In Video
                                        <span class="text-primary">Full Stack PHP Developer</span>
                                        <br> <span class="time-ago"> 19 hours ago </span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="notification-avatar">
                                        <img src={{ asset("assets/images/avatars/avatar-4.jpg") }} alt="">
                                    </span>
                                    <span class="notification-icon bg-gradient-success">
                                        <i class="icon-feather-message-circle"></i></span>
                                    <span class="notification-text">
                                        <strong>Stella John</strong> Replay Your Comment in
                                        <span class="text-primary">Adobe XD Tutorial</span>
                                        <br> <span class="time-ago"> 12 hours ago </span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="notification-avatar">
                                        <img src={{ asset("assets/images/avatars/avatar-2.jpg") }} alt="">
                                    </span>
                                    <span class="notification-icon bg-gradient-primary">
                                        <i class="icon-feather-thumbs-up"></i></span>
                                    <span class="notification-text">
                                        <strong>Adrian Moh.</strong> Like Your Comment On Video
                                        <span class="text-primary">Learn Prototype Faster</span>
                                        <br> <span class="time-ago"> 9 hours ago </span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="notification-avatar">
                                        <img src={{ asset("assets/images/avatars/avatar-3.jpg") }} alt="">
                                    </span>
                                    <span class="notification-icon bg-gradient-warning">
                                        <i class="icon-feather-star"></i></span>
                                    <span class="notification-text">
                                        <strong>Alex Dolgove</strong> Added New Review In Video
                                        <span class="text-primary">Full Stack PHP Developer</span>
                                        <br> <span class="time-ago"> 19 hours ago </span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="notification-avatar">
                                        <img src={{ asset("assets/images/avatars/avatar-4.jpg") }} alt="">
                                    </span>
                                    <span class="notification-icon bg-gradient-success">
                                        <i class="icon-feather-message-circle"></i></span>
                                    <span class="notification-text">
                                        <strong>Stella John</strong> Replay Your Comment in
                                        <span class="text-primary">Adobe XD Tutorial</span>
                                        <br> <span class="time-ago"> 12 hours ago </span>
                                    </span>
                                </a>
                            </li>
                        </ul>

                    </div>


                </div>


                <!-- profile -image -->
                <a class="opts_account" href="#">
                    @if (Auth::user()->img)
                        <img id="img_foto_header" src="{{ asset('storage/' . Auth::user()->img) }}" alt="">
                    @else
                        <img id="img_foto_header" src="assets/images/avatars/avatar-2.jpg" alt="">
                    @endif
                </a>

                <div uk-dropdown="mode:click ; animation: uk-animation-slide-bottom-small"
                    class="dropdown-notifications rounded display-hidden">

                    <!-- User Name / Avatar -->
                    <a href="{{ route('perfil') }}">

                        <div class="dropdown-user-details">

                            <div class="dropdown-user-cover">
                                <img src="{{ asset('storage/' . Auth::user()->img_capa) }}" alt="">
                            </div>
                            <div class="dropdown-user-avatar">
                                @if (Auth::user()->img)
                                    <img id="img_foto_header" src="{{ asset('storage/' . Auth::user()->img) }}" alt="">
                                @else
                                    <img id="img_foto_header" src="assets/images/avatars/avatar-1.jpg" alt="">
                                @endif
                            </div>
                            <div class="dropdown-user-name"> {{  Auth::user()->name }} {{ Auth::user()->last_name }} </div>
                        </div>

                    </a>

                    <ul class="dropdown-user-menu">
                        <li><a href="#"> <i class="fas fa-rocket"></i> Boost Posts </a> </li>
                        <li><a href="#"> <i class="fas fa-rocket"></i> Boost Pages </a> </li>
                        <li><a href="#"> <i class="fas fa-bullhorn"></i> Advertising </a></li>
                        <li><a href="#"> <i class="fas fa-user-edit"></i> General Settings</a></li>
                        <li><a href="#"> <i class="fas fa-user-cog"></i> Admi Area</a></li>
                        <li>
                            <a href="#" id="night-mode" class="btn-night-mode">
                                <i class="fas fa-moon"></i> Night mode
                                <span class="btn-night-mode-switch">
                                    <span class="uk-switch-button"></span>
                                </span>
                            </a>
                        </li>
                        </li>
                        <li><a href="{{ route('logout') }}"> <i class="fas fa-sign-out-alt"></i>Log Out</a>
                        </li>
                    </ul>

                    <hr class="m-0">
                    <ul class="dropdown-user-menu">
                        <li><a href="page-setting.html" class="bg-secondery"> <i class="uil-bolt"></i>
                                <div> Upgrade To Premium <span> Pro features give you complete control </span>
                                </div>
                            </a>
                        </li>
                    </ul>

                </div>


            </div>
        @endif

    </div> <!-- / heaader-innr -->
</header>

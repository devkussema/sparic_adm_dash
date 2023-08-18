<!-- sidebar -->
<div class="main_sidebar">
    <div class="side-overlay" uk-toggle="target: #wrapper ; cls: collapse-sidebar mobile-visible"></div>

    <!-- sidebar header -->
    <div class="sidebar-header">
        <!-- Logo-->
        <div id="logo">
            <a href="{{ route('home') }}"> <img src={{ asset("assets/images/logo-light.png") }} alt=""></a>
        </div>
        <span class="btn-close" uk-toggle="target: #wrapper ; cls: collapse-sidebar mobile-visible"></span>
    </div>

    <!-- sidebar Menu -->
    <div class="sidebar">
        <div class="sidebar_innr" data-simplebar>

            <div class="sections">
                <ul>
                    <li @if(Route::currentRouteName() === 'home') class="active" @endif>
                        <a href="{{ route('home') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="#047cac" d="M10,20V14H14V20H19V12H22L12,3L2,12H5V20H10Z"></path>
                            </svg>
                            Home </a>
                    </li>
                    <li @if(Route::currentRouteName() === 'index') class="active" @endif>
                        <a href="{{ route('index') }}">
                            <img src="assets/svg/assistant_white_24dp.svg">
                             Feed </a>
                    </li>
                    <li>
                        <a href="albums.html">
                            <img src="assets/svg/podcasts_white_18dp.svg">
                             Podcasts </a>
                    </li>
                    <li>
                        <a href="pokes.html">
                            <img src="assets/svg/album_white_24dp.svg"> Albuns </a>
                    </li>


                    <li>
                        <a href="popular-post.html">
                            <img src="assets/svg/radio_white_24dp.svg"> Radios </a>
                    </li>
                    <li>
                        <a href="events.html">
                            <img src="assets/svg/library_music_white_24dp.svg"> Músicas </a>
                    </li>
                    <li>
                        <a href="games.html">
                            <img src="assets/svg/live_tv_white_24dp.svg"> Lives </a>
                    </li>
                    <li id="more-veiw" hidden="">
                        <a href="offers.html">
                            <img src="assets/svg/people_white_24dp.svg"> Usuários </a>
                    </li>

                    <li id="more-veiw" hidden="">
                        <a href="funding.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="#673AB7"
                                    d="M12.75,3.94C13.75,3.22 14.91,2.86 16.22,2.86C16.94,2.86 17.73,3.05 18.59,3.45C19.45,3.84 20.13,4.3 20.63,4.83C21.66,6.11 22.09,7.6 21.94,9.3C21.78,11 21.22,12.33 20.25,13.27L12.66,20.86C12.47,21.05 12.23,21.14 11.95,21.14C11.67,21.14 11.44,21.05 11.25,20.86C11.06,20.67 10.97,20.44 10.97,20.16C10.97,19.88 11.06,19.64 11.25,19.45L15.84,14.86C16.09,14.64 16.09,14.41 15.84,14.16C15.59,13.91 15.36,13.91 15.14,14.16L10.55,18.75C10.36,18.94 10.13,19.03 9.84,19.03C9.56,19.03 9.33,18.94 9.14,18.75C8.95,18.56 8.86,18.33 8.86,18.05C8.86,17.77 8.95,17.53 9.14,17.34L13.73,12.75C14,12.5 14,12.25 13.73,12C13.5,11.75 13.28,11.75 13.03,12L8.44,16.64C8.25,16.83 8,16.92 7.73,16.92C7.45,16.92 7.21,16.83 7,16.64C6.8,16.45 6.7,16.22 6.7,15.94C6.7,15.66 6.81,15.41 7.03,15.19L11.63,10.59C11.88,10.34 11.88,10.11 11.63,9.89C11.38,9.67 11.14,9.67 10.92,9.89L6.28,14.5C6.06,14.7 5.83,14.81 5.58,14.81C5.3,14.81 5.06,14.71 4.88,14.5C4.69,14.3 4.59,14.06 4.59,13.78C4.59,13.5 4.69,13.27 4.88,13.08C7.94,10 9.83,8.14 10.55,7.45L14.11,10.97C14.5,11.34 14.95,11.53 15.5,11.53C16.2,11.53 16.75,11.25 17.16,10.69C17.44,10.28 17.54,9.83 17.46,9.33C17.38,8.83 17.17,8.41 16.83,8.06L12.75,3.94M14.81,10.27L10.55,6L3.47,13.08C2.63,12.23 2.15,10.93 2.04,9.16C1.93,7.4 2.41,5.87 3.47,4.59C4.66,3.41 6.08,2.81 7.73,2.81C9.39,2.81 10.8,3.41 11.95,4.59L16.22,8.86C16.41,9.05 16.5,9.28 16.5,9.56C16.5,9.84 16.41,10.08 16.22,10.27C16.03,10.45 15.8,10.55 15.5,10.55C15.23,10.55 15,10.45 14.81,10.27V10.27Z">
                                </path>
                            </svg> Doações </a>
                    </li>
                </ul>
                <a href="#" class="button secondary px-5 btn-more"
                    uk-toggle="target: #more-veiw; animation: uk-animation-fade">
                    <span id="more-veiw">Ver mais <i class="icon-feather-chevron-down ml-2"></i></span>
                    <span id="more-veiw" hidden>Ver menos<i class="icon-feather-chevron-up ml-2"></i> </span>
                </a>
            </div>

            <div class="sections">
                <h3> Explorar </h3>
                <ul>
                    <li>
                        <a href="group.html">
                            <img src="assets/svg/groups_white_24dp.svg"> Grupos </a>
                    </li>
                    <li>
                        <a href="pages.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="#f79f58" d="M14.4,6L14,4H5V21H7V14H12.6L13,16H20V6H14.4Z">
                                </path>
                            </svg> Pages </a>
                    </li>
                    <li>
                        <a href="market.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="#7d8250"
                                    d="M12,18H6V14H12M21,14V12L20,7H4L3,12V14H4V20H14V14H18V20H20V14M20,4H4V6H20V4Z">
                                </path>
                            </svg> Market </a>
                    </li>
                    <li>
                        <a href="blog.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="#f35d4d"
                                    d="M20,11H4V8H20M20,15H13V13H20M20,19H13V17H20M11,19H4V13H11M20.33,4.67L18.67,3L17,4.67L15.33,3L13.67,4.67L12,3L10.33,4.67L8.67,3L7,4.67L5.33,3L3.67,4.67L2,3V19A2,2 0 0,0 4,21H20A2,2 0 0,0 22,19V3L20.33,4.67Z">
                                </path>
                            </svg> Blog </a>
                    </li>
                    <li>
                        <a href="jobs.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="#4caf50"
                                    d="M10,2H14A2,2 0 0,1 16,4V6H20A2,2 0 0,1 22,8V19A2,2 0 0,1 20,21H4C2.89,21 2,20.1 2,19V8C2,6.89 2.89,6 4,6H8V4C8,2.89 8.89,2 10,2M14,6V4H10V6H14Z">
                                </path>
                            </svg> Jobs </a>
                    </li>

                </ul>

            </div>

            <!--  Optional Footer -->
            <div id="foot">

                <ul>
                    <li> <a href="page-term.html"> About Us </a></li>
                    <li> <a href="page-setting.html"> Setting </a></li>
                    <li> <a href="page-privacy.html"> Privacy Policy </a></li>
                    <li> <a href="page-term.html"> Terms - Conditions </a></li>
                </ul>


                <div class="foot-content">
                    <p>© 2020 <strong>Simplest</strong>. All Rights Reserved. Share By <a href="https://nullphpscript.com/"> Null PHP Script</a></p>
                </div>

            </div>



        </div>


    </div>

</div>

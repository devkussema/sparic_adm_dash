@extends('layout.panel')

@section('conteudo')
    <div class="main_content_inner">
        <div uk-grid>
            <div class="uk-width-2-3@m fead-area">
                <div class="uk-position-relative" uk-slider="finite: true">
                    <div class="uk-slider-container pb-3">
                        <ul
                            class="uk-slider-items uk-child-width-1-5@m uk-child-width-1-3@s uk-child-width-1-3 story-slider uk-grid">
                            <li>
                                <a href="#" uk-toggle="target: body ; cls: is-open">
                                    <div class="story-card" data-src="{{ asset('storage/' . Auth::user()->img) }}"
                                        uk-img>
                                        <i class="uil-plus"></i>
                                        <div class="story-card-content">
                                            <h4> {{ Auth::user()->name }} {{ Auth::user()->last_name }} </h4>
                                        </div>
                                    </div>
                                </a>

                            </li>
                            <li>
                                <a href="#" uk-toggle="target: body ; cls: is-open">
                                    <div class="story-card" data-src="assets/images/events/listing-5.jpg"
                                        uk-img>
                                        <img src="assets/images/avatars/avatar-5.jpg" alt="">
                                        <div class="story-card-content">
                                            <h4> Jonathan </h4>
                                        </div>
                                    </div>
                                </a>

                            </li>
                            <li>
                                <a href="#" uk-toggle="target: body ; cls: is-open">
                                    <div class="story-card" data-src="assets/images/avatars/avatar-lg-3.jpg"
                                        uk-img>
                                        <img src="assets/images/avatars/avatar-6.jpg" alt="">
                                        <div class="story-card-content">
                                            <h4> Stella </h4>
                                        </div>
                                    </div>
                                </a>

                            </li>
                            <li>

                                <a href="#" uk-toggle="target: body ; cls: is-open">
                                    <div class="story-card" data-src="assets/images/avatars/avatar-lg-4.jpg"
                                        uk-img>
                                        <img src="assets/images/avatars/avatar-4.jpg" alt="">
                                        <div class="story-card-content">
                                            <h4> Alex </h4>
                                        </div>
                                    </div>
                                </a>

                            </li>
                            <li>

                                <a href="#" uk-toggle="target: body ; cls: is-open">
                                    <div class="story-card" data-src="assets/images/avatars/avatar-lg-2.jpg"
                                        uk-img>
                                        <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                        <div class="story-card-content">
                                            <h4> Adrian </h4>
                                        </div>
                                    </div>
                                </a>

                            </li>
                            <li>

                                <a href="#" uk-toggle="target: body ; cls: is-open">
                                    <div class="story-card" data-src="assets/images/avatars/avatar-lg-5.jpg"
                                        uk-img>
                                        <img src="assets/images/avatars/avatar-5.jpg" alt="">
                                        <div class="story-card-content">
                                            <h4> Dennis </h4>
                                        </div>
                                    </div>
                                </a>

                            </li>

                        </ul>

                        <div class="uk-visible@m">
                            <a class="uk-position-center-left-out slidenav-prev" href="#"
                                uk-slider-item="previous"></a>
                            <a class="uk-position-center-right-out slidenav-next" href="#"
                                uk-slider-item="next"></a>
                        </div>
                        <div class="uk-hidden@m">
                            <a class="uk-position-center-left slidenav-prev" href="#"
                                uk-slider-item="previous"></a>
                            <a class="uk-position-center-right slidenav-next" href="#"
                                uk-slider-item="next"></a>
                        </div>

                    </div>
                </div>


                @if ($errors->has('post_text'))
                    <div class="alert alert-danger">
                        {{ $errors->first('post_text') }}
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (Auth::user())
                    @include("partials.post_newer")
                @endif

                @include('partials.feed_post')

            </div>
            <div class="uk-width-expand">

                <div class="sl_sidebar_sugs_title border-0"> Trending !
                    <i class="icon-feather-rotate-cw"></i>
                </div>
                <div class="list-group-item sl_htag">
                    <a href="#">
                        <span class="htag_top"> #hello</span>
                    </a>
                </div>
                <div class="list-group-item sl_htag">
                    <a href="#">
                        <span class="htag_top"> #test</span>
                    </a>
                </div>
                <div class="list-group-item sl_htag">
                    <a href="#">
                        <span class="htag_top"> #template</span>
                    </a>
                </div>
                <div class="list-group-item sl_htag">
                    <a href="#">
                        <span class="htag_top"> #social</span>
                    </a>
                </div>
                <div class="list-group-item sl_htag">
                    <a href="#">
                        <span class="htag_top"> #simplest</span>
                    </a>
                </div>
                <div class="list-group-item sl_htag">
                    <a href="#">
                        <span class="htag_top"> #new</span>
                    </a>
                </div>

                <div class="sl_sidebar_sugs_title mt-4">Pro Members
                    <i class="icon-feather-rotate-cw"></i>
                </div>
                <div class="uk-position-relative" uk-slider="finite: true; autoplay:true">

                    <div class="uk-slider-container pb-3">

                        <ul class="uk-slider-items uk-child-width-1-3@m uk-grid-small uk-grid sl_pro_users">
                            <li>
                                <a class="user" href="#">
                                    <img src="assets/images/avatars/avatar-1.jpg" alt="">
                                    <span>Stella Johnson 1</span>
                                </a>
                            </li>
                            <li>
                                <a class="user" href="#">
                                    <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                    <span>Stella Johnson 2</span>
                                </a>
                            </li>
                            <li>
                                <a class="user" href="#">
                                    <img src="assets/images/avatars/avatar-3.jpg" alt="">
                                    <span>Stella Johnson 3</span>
                                </a>
                            </li>
                            <li>
                                <a class="user" href="#">
                                    <img src="assets/images/avatars/avatar-4.jpg" alt="">
                                    <span>Stella Johnson 4</span>
                                </a>
                            </li>
                            <li>
                                <a class="user" href="#">
                                    <img src="assets/images/avatars/avatar-5.jpg" alt="">
                                    <span>Stella Johnson 5</span>
                                </a>
                            </li>
                        </ul>

                        <a class="uk-position-center-left uk-hidden-hover slidenav-prev sl_pro_users_prev"
                            href="#" uk-slider-item="previous"></a>
                        <a class="uk-position-center-right-out uk-position-small uk-hidden-hover slidenav-next sl_pro_users_next"
                            href="#" uk-slider-item="next"></a>

                    </div>
                </div>

                <div class="sl_sidebar_sugs_title">People you may know
                    <i class="icon-feather-rotate-cw"></i>
                </div>
                <div class="sl_sidebar_sugs">
                    <div class="sl_sidebar_sugs_avatar">
                        <img src="assets/images/avatars/avatar-1.jpg" alt="">
                    </div>
                    <div class="sl_sidebar_sugs_text">
                        <a href="#" class="sl_user_link_name"> Jonathan Madano </a>
                    </div>
                    <div class="user-follow-button sl_sidebar_sugs_btns">
                        <button type="button" class="button small">
                            <span> Follow</span>
                        </button>
                    </div>
                </div>
                <div class="sl_sidebar_sugs">
                    <div class="sl_sidebar_sugs_avatar">
                        <img src="assets/images/avatars/avatar-6.jpg" alt="">
                    </div>
                    <div class="sl_sidebar_sugs_text">
                        <a href="#" class="sl_user_link_name"> Monera Khalifa </a>
                    </div>
                    <div class="user-follow-button sl_sidebar_sugs_btns">
                        <button type="button" class="button small">
                            <span> Accept</span>
                        </button>
                    </div>
                </div>
                <div class="sl_sidebar_sugs">
                    <div class="sl_sidebar_sugs_avatar">
                        <img src="assets/images/avatars/avatar-3.jpg" alt="">
                    </div>
                    <div class="sl_sidebar_sugs_text">
                        <a href="#" class="sl_user_link_name"> Adrian Mohani </a>
                    </div>
                    <div class="user-follow-button sl_sidebar_sugs_btns">
                        <button type="button" class="button small">
                            <span> Follow</span>
                        </button>
                    </div>
                </div>
                <div class="sl_sidebar_sugs">
                    <div class="sl_sidebar_sugs_avatar">
                        <img src="assets/images/avatars/avatar-2.jpg" alt="">
                    </div>
                    <div class="sl_sidebar_sugs_text">
                        <a href="#" class="sl_user_link_name"> Stella Johnson </a>
                    </div>
                    <div class="user-follow-button sl_sidebar_sugs_btns">
                        <button type="button" class="button small">
                            <span> Follow</span>
                        </button>
                    </div>
                </div>

                <div class="sl_sidebar_sugs_title mt-4">Pages you may like
                    <i class="icon-feather-rotate-cw"></i>
                </div>
                <div class="sl_sidebar_sugs">
                    <div class="sl_sidebar_sugs_avatar">
                        <img src="assets/images/brand/brand-avatar-3.png" alt="">
                    </div>
                    <div class="sl_sidebar_sugs_text">
                        <a href="#" class="sl_user_link_name"> Suranna Brand </a>
                        <span> Education</span>
                    </div>
                    <div class="user-follow-button sl_sidebar_sugs_btns">
                        <button type="button" class="button small">
                            <span> Like </span>
                        </button>
                    </div>
                </div>
                <div class="sl_sidebar_sugs">
                    <div class="sl_sidebar_sugs_avatar">
                        <img src="assets/images/brand/brand-avatar-4.png" alt="">
                    </div>
                    <div class="sl_sidebar_sugs_text">
                        <a href="#" class="sl_user_link_name"> Uk Brands </a>
                        <span> Shopping</span>
                    </div>
                    <div class="user-follow-button sl_sidebar_sugs_btns">
                        <button type="button" class="button small">
                            <span> Like </span>
                        </button>
                    </div>
                </div>

                <div class="sl_sidebar_sugs_title mt-4">Suggested groups
                    <i class="icon-feather-rotate-cw"></i>
                </div>
                <div class="sl_sidebar_sugs">
                    <div class="sl_sidebar_sugs_avatar">
                        <img src="assets/images/group/group-2.jpg" alt="">
                    </div>
                    <div class="sl_sidebar_sugs_text">
                        <a href="#" class="sl_user_link_name"> Coffee Addicts </a>
                        <span> 6 Members</span>
                    </div>
                    <div class="user-follow-button sl_sidebar_sugs_btns">
                        <button type="button" class="button small">
                            <span> Join </span>
                        </button>
                    </div>
                </div>
                <div class="sl_sidebar_sugs">
                    <div class="sl_sidebar_sugs_avatar">
                        <img src="assets/images/group/group-1.jpg" alt="">
                    </div>
                    <div class="sl_sidebar_sugs_text">
                        <a href="#" class="sl_user_link_name"> Architecture </a>
                        <span> 12 Members</span>
                    </div>
                    <div class="user-follow-button sl_sidebar_sugs_btns">
                        <button type="button" class="button small">
                            <span> Join </span>
                        </button>
                    </div>
                </div>
                <div class="sl_sidebar_sugs">
                    <div class="sl_sidebar_sugs_avatar">
                        <img src="assets/images/group/group-3.jpg" alt="">
                    </div>
                    <div class="sl_sidebar_sugs_text">
                        <a href="#" class="sl_user_link_name"> Mountain Riders </a>
                        <span> 32 Members</span>
                    </div>
                    <div class="user-follow-button sl_sidebar_sugs_btns">
                        <button type="button" class="button small">
                            <span> Join </span>
                        </button>
                    </div>
                </div>
                <div class="sl_sidebar_sugs">
                    <div class="sl_sidebar_sugs_avatar">
                        <img src="assets/images/group/group-4.jpg" alt="">
                    </div>
                    <div class="sl_sidebar_sugs_text">
                        <a href="#" class="sl_user_link_name"> Graphic Design </a>
                        <span> 25 Members</span>
                    </div>
                    <div class="user-follow-button sl_sidebar_sugs_btns">
                        <button type="button" class="button small">
                            <span> Join </span>
                        </button>
                    </div>
                </div>

                <div class="sl_sidebar_sugs_title mt-4">Online Users 1
                </div>

                <div class="sl_sidebar_sugs_title mt-1"> Invite Your Friends
                    <i class="icon-feather-rotate-cw"></i>
                </div>
                <form action="#" class="invite-user-form">
                    <div class="sl_form_fields invite-user-combine">
                        <input type="text" name="email" placeholder="E-mail" class="form-control">
                        <button class="button small" title="Send Invitation"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M2,21L23,12L2,3V10L17,12L2,14V21Z"></path>
                            </svg></button>
                    </div>
                </form>


                <div class="sl_sidebar_sugs_title mt-4">Promoted Pages
                    <i class="icon-feather-rotate-cw"></i>
                </div>
                <div class="sl_sidebar_sugs">
                    <div class="sl_sidebar_sugs_avatar">
                        <img src="assets/images/brand/brand-avatar-3.png" alt="">
                    </div>
                    <div class="sl_sidebar_sugs_text">
                        <a href="#" class="sl_user_link_name"> Suranna Brand </a>
                        <span> Education</span>
                    </div>
                    <div class="user-follow-button sl_sidebar_sugs_btns">
                        <button type="button" class="button small">
                            <span> Like </span>
                        </button>
                    </div>
                </div>
                <div class="sl_sidebar_sugs">
                    <div class="sl_sidebar_sugs_avatar">
                        <img src="assets/images/brand/brand-avatar-4.png" alt="">
                    </div>
                    <div class="sl_sidebar_sugs_text">
                        <a href="#" class="sl_user_link_name"> Uk Brands </a>
                        <span> Shopping</span>
                    </div>
                    <div class="user-follow-button sl_sidebar_sugs_btns">
                        <button type="button" class="button small">
                            <span> Like </span>
                        </button>
                    </div>
                </div>
                <div class="sl_sidebar_sugs">
                    <div class="sl_sidebar_sugs_avatar">
                        <img src="assets/images/brand/brand-avatar-1.png" alt="">
                    </div>
                    <div class="sl_sidebar_sugs_text">
                        <a href="#" class="sl_user_link_name"> Reveal Store </a>
                        <span> Shopping</span>
                    </div>
                    <div class="user-follow-button sl_sidebar_sugs_btns">
                        <button type="button" class="button small">
                            <span> Like </span>
                        </button>
                    </div>
                </div>
                <div class="sl_sidebar_sugs">
                    <div class="sl_sidebar_sugs_avatar">
                        <img src="assets/images/brand/brand-avatar-2.png" alt="">
                    </div>
                    <div class="sl_sidebar_sugs_text">
                        <a href="#" class="sl_user_link_name"> Phase Designers </a>
                        <span> Design</span>
                    </div>
                    <div class="user-follow-button sl_sidebar_sugs_btns">
                        <button type="button" class="button small">
                            <span> Like </span>
                        </button>
                    </div>
                </div>





                <!-- Footer menus-->
                <div class="footer-wrapper-sidebar mt-4">
                    <div class="footer-powered">
                        <p> © 2020 Simplest.net</p>
                    </div>

                    <hr>

                    <ul class="list-inline">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#"> Privecy</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Developers</a></li>
                        <li>
                            <div class="dropdown dropup sun_foot_drop_menu">
                                <a href="#" class="dropdown-toggle">
                                    More <span class="caret"></span>
                                </a>
                                <div uk-dropdown="pos: bottom-left ; mode:hover "
                                    class="uk-dropdown uk-dropdown-bottom-right"
                                    style="left: 745px; top: 87px;">
                                    <ul class="uk-nav uk-dropdown-nav">
                                        <li><a href="#"> View as guast </a></li>
                                        <li><a href="#"> Bloc this person </a></li>
                                        <li><a href="#"> Report abuse</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>






            </div>
        </div>


    </div>
@endsection
    
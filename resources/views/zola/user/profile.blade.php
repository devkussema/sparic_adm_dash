@extends('layout.panel')

@section('conteudo')
    <div class="main_content_inner">

        <div id="spinneroverlay"> </div>


        <div class="profile">
            <div class="profile-cover">
                <img id="img_capa" src="{{ asset('storage/' . $user->img_capa) }}" alt="">
            </div>

            <div class="profile-details">
                <div class="profile-image">
                    <img id="img_foto" src="{{ asset('storage/' . $user->img) }}" alt="">
                </div>
                <div class="profile-details-info">
                    <h1> {{ $user->name }} {{ $user->last_name }} </h1>
                    <p> Family , Food , Fashion , Fourever <a href="#">Edit </a></p>
                </div>

            </div>


            <div class="nav-profile" uk-sticky="media : @s">
                <div class="py-md-2 uk-flex-last">
                    <a href="#" class="button primary mr-2"> <i class="uil-plus"></i> Add your story</a>
                    <a href="#" class="button light button-icon mr-2"> <i class="uil-list-ul"> </i> </a>
                    <a href="#" class="button light button-icon mr-lg-3"> <i class="uil-ellipsis-h"> </i> </a>
                    <div uk-dropdown="pos: bottom-left ; mode:hover" class="display-hidden">
                        <ul class="uk-nav uk-dropdown-nav">
                            <li><a href="#"> View as guast </a></li>
                            <li><a href="#"> Bloc this person </a></li>
                            <li><a href="#"> Report abuse</a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <nav class="responsive-tab ml-lg-3">
                        <ul>
                            <li class="uk-active"><a class="active" href="#">Timeline</a></li>
                            <li><a href="timeline-friends.html">About</a></li>
                            <li><a href="timeline-friends.html">Friend</a></li>
                            <li><a href="timeline-friends.html">Photoes</a></li>
                            <li><a href="timeline-friends.html">Videos</a></li>
                        </ul>
                    </nav>
                    <div class="uk-visible@s">
                        <a href="#" class="nav-btn-more"> More</a>
                        <div uk-dropdown="pos: bottom-left" class="display-hidden">
                            <ul class="uk-nav uk-dropdown-nav">
                                <li><a href="#">Moves</a></li>
                                <li><a href="#">Likes</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Groups</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Sports</a></li>
                                <li><a href="#">Gallery</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="section-small">

            <div uk-grid>

                <div class="uk-width-2-3@m fead-area">

                    <div class="post-newer mt-lg-2">

                        @if (Auth::user())
                            @include("partials.post_newer")
                        @endif


                    </div>

                    @include('partials.feed_post_me')

                    <div class="load-more">
                        <button class="btn button">Load more post</button>
                    </div>

                </div>

                <!-- sidebar -->
                @include('partials.sidebar_line')

            </div>

        </div>
    </div>
@endsection

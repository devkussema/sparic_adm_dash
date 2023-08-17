@extends('layout.panel')

@section('conteudo')
    <div class="main_content_inner">

        <div id="spinneroverlay"> </div>


        <div class="profile">
            <div class="profile-cover">

                <!-- profile cover  -->
                @if (Auth::user()->img_capa)
                    <img id="img_capa" src="{{ asset('storage/' . Auth::user()->img_capa) }}" alt="">
                @else
                    <img id="img_capa" src="assets/images/avatars/profile-cover.jpg" alt="">
                @endif

                <a href="#"> <i class="uil-camera"></i> <label for="imageInput"> Editar<label> </a>
                <form id="uploadFormCapa" method="POST" action="{{ route('perfil.upload', ['id' => Auth::id()]) }}" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="img_capa" id="imageInput" hidden>
                    <button type="submit" style="display:none">Enviar</button>
                </form>
            </div>

            <div class="profile-details">
                <div class="profile-image">
                    <label for="imgFoto">
                        @if (Auth::user()->img)
                            <img id="img_foto" src="{{ asset('storage/' . Auth::user()->img) }}" alt="">
                        @else
                            <img id="img_foto" src="assets/images/avatars/avatar-2.jpg" alt="">
                        @endif
                        <a href="#"></a>
                    <label>
                    <form id="uploadFormFoto" method="POST" action="{{ route('perfil.upload', ['id' => Auth::id()]) }}" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="img" id="imgFoto" hidden>
                        <button type="submit" style="display:none">Enviar</button>
                    </form>
                </div>
                <div class="profile-details-info">
                    <h1> {{ Auth::user()->name }} {{ Auth::user()->last_name }} </h1>
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

                    <div class="post">
                        <div class="post-heading">
                            <div class="post-avature">
                                <img src="assets/images/avatars/avatar-6.jpg" alt="">
                            </div>
                            <div class="post-title">
                                <h4> Mariah Ali </h4>
                                <p> 5 <span> hrs</span> <i class="uil-users-alt"></i> </p>
                            </div>
                            <div class="post-btn-action">
                                <span class="icon-more uil-ellipsis-h"></span>
                                <div class="mt-0 p-2" uk-dropdown="pos: top-right;mode:hover ">
                                    <ul class="uk-nav uk-dropdown-nav">
                                        <li><a href="#"> <i class="uil-share-alt mr-1"></i> Share</a> </li>
                                        <li><a href="#"> <i class="uil-edit-alt mr-1"></i> Edit Post </a></li>
                                        <li><a href="#"> <i class="uil-comment-slash mr-1"></i> Disable comments
                                            </a></li>
                                        <li><a href="#"> <i class="uil-favorite mr-1"></i> Add favorites </a>
                                        </li>
                                        <li><a href="#" class="text-danger"> <i class="uil-trash-alt mr-1"></i>
                                                Delete </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="post-description">
                            <div class="fullsizeimg">
                                <img src="assets/images/post/img-1.jpg" alt="">
                            </div>

                            <div class="post-state-details">
                                <div>
                                    <img src="assets/images/icons/reactions_like.png" alt="">
                                    <img src="assets/images/icons/reactions_love.png" alt="">
                                    <p> 13 </p>
                                </div>
                                <p> 24 Comments</p>
                            </div>

                        </div>

                        <div class="post-state">
                            <div class="post-state-btns"> <i class="uil-thumbs-up"></i> 126<span> Liked </span>
                            </div>
                            <div class="post-state-btns"> <i class="uil-heart"></i> 18 <span> Coments</span>
                            </div>
                            <div class="post-state-btns"> <i class="uil-share-alt"></i> 193 <span> Shared
                                </span>
                            </div>
                            <div class="post-state-btns"> <i class="uil-bookmark"></i> 13 <span> Saved </span>
                            </div>
                        </div>

                        <!-- post comments -->
                        <div class="post-comments">
                            <a href="#" class="view-more-comment"> Veiw 8 more Comments</a>
                            <div class="post-comments-single">
                                <div class="post-comment-avatar">
                                    <img src="assets/images/avatars/avatar-5.jpg" alt="">
                                </div>
                                <div class="post-comment-text">
                                    <div class="post-comment-text-inner">
                                        <h6> Alex Dolgove</h6>
                                        <p> Ut wisi enim ad minim laoreet dolore magna aliquam erat </p>
                                    </div>
                                    <div class="uk-text-small">
                                        <a href="#" class="text-danger mr-1"> <i class="uil-heart"></i> Love
                                        </a>
                                        <a href="#" class=" mr-1"> Replay </a>
                                        <span> 1d</span>
                                    </div>
                                </div>
                                <a href="#" class="post-comment-opt"></a>
                            </div>
                            <div class="post-comments-single">
                                <div class="post-comment-avatar">
                                    <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                </div>
                                <div class="post-comment-text">
                                    <div class="post-comment-text-inner">
                                        <h6>Stella Johnson</h6>
                                        <p> Ut wisi enim ad minim laoreet dolore <strong> David !</strong> </p>
                                    </div>
                                    <div class="uk-text-small">
                                        <a href="#" class="text-primary mr-1"> <i class="uil-thumbs-up"></i>
                                            Like
                                        </a>
                                        <a href="#" class=" mr-1"> Replay </a>
                                        <span> 2d</span>
                                    </div>
                                </div>
                                <a href="#" class="post-comment-opt"></a>
                            </div>
                            <div class="post-comments-single">
                                <div class="post-comment-avatar">
                                    <img src="assets/images/avatars/avatar-3.jpg" alt="">
                                </div>
                                <div class="post-comment-text">
                                    <div class="post-comment-text-inner">
                                        <h6> Jonathan Madano </h6>
                                        <p> sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                            aliquam
                                            erat
                                            volutpat.<strong> David !</strong> </p>
                                    </div>
                                    <div class="uk-text-small">
                                        <a href="#" class="text-danger mr-1"> <i class="uil-heart"></i> Love
                                        </a>
                                        <a href="#" class=" mr-1"> Replay </a>
                                        <span> 3d</span>
                                    </div>
                                </div>
                                <a href="#" class="post-comment-opt"></a>
                            </div>


                            <a href="#" class="view-more-comment"> Veiw 8 more Comments</a>

                            <div class="post-add-comment">
                                <div class="post-add-comment-avature">
                                    <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                </div>
                                <div class="post-add-comment-text-area">
                                    <input type="text" placeholder="Write your comment...">
                                    <div class="icons">
                                        <span class="uil-link-alt"></span>
                                        <span class="uil-grin"></span>
                                        <span class="uil-image"></span>
                                    </div>
                                </div>

                            </div>

                        </div>



                    </div>

                    <div class="post">
                        <div class="post-heading">
                            <div class="post-avature">
                                <img src="assets/images/avatars/avatar-3.jpg" alt="">
                            </div>
                            <div class="post-title">
                                <h4> Erica Jones </h4>
                                <p> 5 <span> hrs</span> <i class="uil-users-alt"></i> </p>
                            </div>
                            <div class="post-btn-action">
                                <span class="icon-more uil-ellipsis-h"></span>
                                <div class="mt-0 p-2" uk-dropdown="pos: top-right;mode:hover ">
                                    <ul class="uk-nav uk-dropdown-nav">
                                        <li><a href="#"> <i class="uil-share-alt mr-1"></i> Share</a> </li>
                                        <li><a href="#"> <i class="uil-edit-alt mr-1"></i> Edit Post </a></li>
                                        <li><a href="#"> <i class="uil-comment-slash mr-1"></i> Disable comments
                                            </a></li>
                                        <li><a href="#"> <i class="uil-favorite mr-1"></i> Add favorites </a>
                                        </li>
                                        <li><a href="#" class="text-danger"> <i class="uil-trash-alt mr-1"></i>
                                                Delete </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="post-description">
                            <div class="uk-grid-small" uk-grid>
                                <div class="uk-width-1-1@m">
                                    <img src="assets/images/post/img-4.jpg" class="rounded" alt="">
                                </div>
                                <div class="uk-width-1-2@m uk-width-1-2">
                                    <img src="assets/images/post/img-2.jpg" class="rounded" alt="">
                                </div>
                                <div class="uk-width-1-2@m uk-width-1-2 uk-position-relative">
                                    <img src="assets/images/post/img-3.jpg" class="rounded" alt="">
                                    <div class="uk-position-center uk-light">
                                        <a href="#">
                                            <h3> + 15 more </h3>
                                        </a></div>
                                </div>
                            </div>

                            <div class="post-state-details">
                                <div>
                                    <img src="assets/images/icons/reactions_like.png" alt="">
                                    <img src="assets/images/icons/reactions_love.png" alt="">
                                    <p> 13 </p>
                                </div>
                                <p> <span class="mr-2"> <i class="uil-eye"></i> Veiws </span> 212 Comments </p>
                            </div>

                        </div>

                        <div class="post-state">
                            <div class="post-state-btns"> <i class="uil-thumbs-up"></i> 126<span> Liked </span>
                            </div>
                            <div class="post-state-btns"> <i class="uil-heart"></i> 18 <span> Coments</span>
                            </div>
                            <div class="post-state-btns"> <i class="uil-share-alt"></i> 193 <span> Shared
                                </span>
                            </div>
                            <div class="post-state-btns"> <i class="uil-bookmark"></i> 13 <span> Saved </span>
                            </div>
                        </div>


                        <!-- post comments -->
                        <div class="post-comments">
                            <a href="#" class="view-more-comment"> Veiw 8 more Comments</a>
                            <div class="post-comments-single">
                                <div class="post-comment-avatar">
                                    <img src="assets/images/avatars/avatar-5.jpg" alt="">
                                </div>
                                <div class="post-comment-text">
                                    <div class="post-comment-text-inner">
                                        <h6> Alex Dolgove</h6>
                                        <p> Ut wisi enim ad minim laoreet dolore magna aliquam erat </p>
                                    </div>
                                    <div class="uk-text-small">
                                        <a href="#" class="text-danger mr-1"> <i class="uil-heart"></i> Love
                                        </a>
                                        <a href="#" class=" mr-1"> Replay </a>
                                        <span> 3d</span>
                                    </div>
                                </div>
                                <a href="#" class="post-comment-opt"></a>
                            </div>
                            <div class="post-comments-single">
                                <div class="post-comment-avatar">
                                    <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                </div>
                                <div class="post-comment-text">
                                    <div class="post-comment-text-inner">
                                        <h6>Stella Johnson</h6>
                                        <p> Ut wisi enim ad minim laoreet dolore <strong> David !</strong> </p>
                                    </div>
                                    <div class="uk-text-small">
                                        <a href="#" class="text-primary mr-1"> <i class="uil-thumbs-up"></i>
                                            Like
                                        </a>
                                        <a href="#" class=" mr-1"> Replay </a>
                                        <span> 3d</span>
                                    </div>
                                </div>
                                <a href="#" class="post-comment-opt"></a>
                            </div>
                            <div class="post-comments-single">
                                <div class="post-comment-avatar">
                                    <img src="assets/images/avatars/avatar-3.jpg" alt="">
                                </div>
                                <div class="post-comment-text">
                                    <div class="post-comment-text-inner">
                                        <h6> Jonathan Madano </h6>
                                        <p> sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                            aliquam
                                            erat
                                            volutpat.<strong> David !</strong> </p>
                                    </div>
                                    <div class="uk-text-small">
                                        <a href="#" class="text-danger mr-1"> <i class="uil-heart"></i> Love
                                        </a>
                                        <a href="#" class=" mr-1"> Replay </a>
                                        <span> 3d</span>
                                    </div>
                                </div>
                                <a href="#" class="post-comment-opt"></a>
                            </div>


                            <a href="#" class="view-more-comment"> Veiw 8 more Comments</a>

                            <div class="post-add-comment">
                                <div class="post-add-comment-avature">
                                    <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                </div>
                                <div class="post-add-comment-text-area">
                                    <input type="text" placeholder="Write your comment...">
                                    <div class="icons">
                                        <span class="uil-link-alt"></span>
                                        <span class="uil-grin"></span>
                                        <span class="uil-image"></span>
                                    </div>
                                </div>

                            </div>

                        </div>



                    </div>

                    <div class="post">
                        <div class="post-heading">
                            <div class="post-avature">
                                <img src="assets/images/avatars/avatar-4.jpg" alt="">
                            </div>
                            <div class="post-title">
                                <h4> Stella Johnson </h4>
                                <p> 5 <span> hrs</span> <i class="uil-users-alt"></i> </p>
                            </div>
                            <div class="post-btn-action">
                                <span class="icon-more uil-ellipsis-h"></span>
                                <div class="mt-0 p-2" uk-dropdown="pos: top-right;mode:hover ">
                                    <ul class="uk-nav uk-dropdown-nav">
                                        <li><a href="#"> <i class="uil-share-alt mr-1"></i> Share</a> </li>
                                        <li><a href="#"> <i class="uil-edit-alt mr-1"></i> Edit Post </a></li>
                                        <li><a href="#"> <i class="uil-comment-slash mr-1"></i> Disable comments
                                            </a></li>
                                        <li><a href="#"> <i class="uil-favorite mr-1"></i> Add favorites </a>
                                        </li>
                                        <li><a href="#" class="text-danger"> <i class="uil-trash-alt mr-1"></i>
                                                Delete </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="post-description">

                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                Ut wisi enim ad minim laoreet dolore magna aliquam erat volutpat</p>
                            <div class="post-state-details">
                                <div>
                                    <img src="assets/images/icons/reactions_like.png" alt="">
                                    <img src="assets/images/icons/reactions_love.png" alt="">
                                    <p> 13 </p>
                                </div>
                                <p> 24 Comments</p>
                            </div>

                        </div>

                        <div class="post-state">
                            <div class="post-state-btns"> <i class="uil-thumbs-up"></i> 126<span> Liked </span>
                            </div>
                            <div class="post-state-btns"> <i class="uil-heart"></i> 18 <span> Coments</span>
                            </div>
                            <div class="post-state-btns"> <i class="uil-share-alt"></i> 193 <span> Shared
                                </span>
                            </div>
                            <div class="post-state-btns"> <i class="uil-bookmark"></i> 13 <span> Saved </span>
                            </div>
                        </div>

                        <!-- post comments -->
                        <div class="post-comments">
                            <a href="#" class="view-more-comment"> Veiw 8 more Comments</a>
                            <div class="post-comments-single">
                                <div class="post-comment-avatar">
                                    <img src="assets/images/avatars/avatar-5.jpg" alt="">
                                </div>
                                <div class="post-comment-text">
                                    <div class="post-comment-text-inner">
                                        <h6> Alex Dolgove</h6>
                                        <p> Ut wisi enim ad minim laoreet dolore magna aliquam erat </p>
                                    </div>
                                    <div class="uk-text-small">
                                        <a href="#" class="text-danger mr-1"> <i class="uil-heart"></i> Love
                                        </a>
                                        <a href="#" class=" mr-1"> Replay </a>
                                        <span> 1d</span>
                                    </div>
                                </div>
                                <a href="#" class="post-comment-opt"></a>
                            </div>
                            <div class="post-comments-single">
                                <div class="post-comment-avatar">
                                    <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                </div>
                                <div class="post-comment-text">
                                    <div class="post-comment-text-inner">
                                        <h6>Stella Johnson</h6>
                                        <p> Ut wisi enim ad minim laoreet dolore <strong> David !</strong> </p>
                                    </div>
                                    <div class="uk-text-small">
                                        <a href="#" class="text-primary mr-1"> <i class="uil-thumbs-up"></i>
                                            Like
                                        </a>
                                        <a href="#" class=" mr-1"> Replay </a>
                                        <span> 2d</span>
                                    </div>
                                </div>
                                <a href="#" class="post-comment-opt"></a>
                            </div>

                            <div class="post-add-comment">
                                <div class="post-add-comment-avature">
                                    <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                </div>
                                <div class="post-add-comment-text-area">
                                    <input type="text" placeholder="Write your comment...">
                                    <div class="icons">
                                        <span class="uil-link-alt"></span>
                                        <span class="uil-grin"></span>
                                        <span class="uil-image"></span>
                                    </div>
                                </div>

                            </div>

                        </div>


                    </div>

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

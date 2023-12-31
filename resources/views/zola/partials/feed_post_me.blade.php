@foreach ($posts as $post)
    @if ($post->post_text)
        <div class="post">
            <div class="post-heading">
                <div class="post-avature">
                    @if ($post->user->img)
                        <img id="img_foto" src="{{ asset('storage/' . $post->user->img) }}" alt="">
                    @else
                        <img id="img_foto" src="assets/images/avatars/avatar-4.jpg" alt="">
                    @endif
                </div>
                <div class="post-title">
                    <a href="#">
                        <h4> {{ $post->user->name }} {{ $post->user->last_name }} </h4>
                    </a>
                    <p> {{ timeAgo($post->created_at) }} <i class="uil-users-alt"></i> </p>
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

                <p>
                    {{ $post->post_text }}
                </p>
                <div class="post-state-details">
                    <div>
                        <img src={{ asset("assets/images/icons/reactions_like.png") }} alt="">
                        <img src={{ asset("assets/images/icons/reactions_love.png") }} alt="">
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

            <!-- post comments
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

            </div> -->
        </div>
    @endif

    <div class="post post_usr">
        <div class="post-heading">
            <div class="post-avature">
                @if ($post->user->img)
                    <img id="img_foto" src="{{ asset('storage/') }}" alt="">
                @else
                    <img id="img_foto" src="assets/images/avatars/avatar-4.jpg" alt="">
                @endif
            </div>
            <div class="post-title">
                <a href="#">
                    <h4> Sim </h4>
                </a>
                <p> 2 horas <i class="uil-users-alt"></i> </p>
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
        <style>
            .video-container {
                position: relative;
                width: 100%;
                max-width: 640px;
                border: 2px solid #ccc;
                border-radius: 5px;
            }

            .video-container video {
                width: 100%;
                display: block;
            }

            .video-overlay {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: rgba(0, 0, 0, 0.7);
                border-radius: 50%;
                width: 80px;
                height: 80px;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
            }

            .video-overlay::before {
                content: "\25BA";
                font-size: 36px;
                color: white;
            }
        </style>
        <div class="post-description">
            <div class="fullsizeimg">
                <div class="video-container">
                    <video width="640" height="360" controls="true">
                        <source src="Wiz Khalifa  See You Again ft Charlie Puth Official Video Furious 7.mp4" type="video/mp4">
                        Desculpe, mas não foi possível carregar o vídeo.
                    </video>
                    <div class="video-overlay"></div>
                    <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/RgKAFK5djSk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    -->
                </div>
            </div>

            <div class="post-state-details">
                <div>
                    <img src={{ asset("assets/images/icons/reactions_like.png") }} alt="">
                    <img src={{ asset("assets/images/icons/reactions_love.png") }} alt="">
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
    </div>

    @if ($post->img)
        <div class="publicacoes">
            <div class="post post_usr">
                <div class="post-heading">
                    <div class="post-avature">
                        @if ($post->user->img)
                            <img id="img_foto" src="{{ asset('storage/' . $post->user->img) }}" alt="">
                        @else
                            <img id="img_foto" src="assets/images/avatars/avatar-4.jpg" alt="">
                        @endif
                    </div>
                    <div class="post-title">
                        <a href="{{ route('perfil.ver', ['username' => $post->user->username]) }}">
                            <h4> {{ $post->user->name }} {{ $post->user->last_name }} </h4>
                        </a>
                        <p> {{ timeAgo($post->created_at) }} <i class="uil-users-alt"></i> </p>
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
                        <img src="{{ asset('storage/' . $post->img) }}" alt="">
                    </div>

                    <div class="post-state-details">
                        <div>
                            <img src={{ asset("assets/images/icons/reactions_like.png") }} alt="">
                            <img src={{ asset("assets/images/icons/reactions_love.png") }} alt="">
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

                <!--<div class="post-comments">
                    <a href="#" class="view-more-comment"> Veiw 8 more Comments</a>
                    <div class="post-comments-single">
                        <div class="post-comment-avatar">
                            <img src={{ asset("assets/images/avatars/avatar-5.jpg") }} alt="">
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
                            <img src={{ asset("assets/images/avatars/avatar-2.jpg") }} alt="">
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
                            <img src={{ asset("assets/images/avatars/avatar-3.jpg") }} alt="">
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
                            <img src={{ asset("assets/images/avatars/avatar-2.jpg") }} alt="">
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

                </div> -->
            </div>
        </div>
    @endif
@endforeach

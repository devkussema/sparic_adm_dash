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

                    @include('partials.feed_post_me')

                    <div class="load-more">
                        <!--<button class="btn button">Load more post</button> -->
                        <div id="custom-pagination">
                            @if ($posts->lastPage() > 1)
                                @for ($i = 1; $i <= $posts->lastPage(); $i++)
                                    <a href="{{ $posts->url($i) }}" class="custom-page-link">{{ $i }}</a>
                                @endfor
                            @endif
                        </div>
                    </div>
                    <div class="addclick"></div>

                </div>

                <!-- sidebar -->
                @include('partials.sidebar_line')

            </div>

        </div>
    </div>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.custom-page-link', function(e) {
                e.preventDefault();
                const url = $(this).attr('href'); // Pega a URL da próxima página

                $.ajax({
                    url: url,
                    method: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('.publicacoes').html(''); // Limpa o conteúdo anterior
                        $.each(data.data, function(index, post) {
                            // Constrói o HTML completo do post
                            const postHtml = `
                                <div class="post post_usr">
                                    <div class="post-heading">
                                        <div class="post-avature">
                                            ${post.user.img ? `<img id="img_foto" src="storage/${post.user.img}" alt="">` : `<img id="img_foto" src="assets/images/avatars/avatar-4.jpg" alt="">`}
                                        </div>
                                        <div class="post-title">
                                            <a href="${post.user.username}">
                                                <h4>${post.user.name} ${post.user.last_name}</h4>
                                            </a>
                                            <p>${post.time_ago} <i class="uil-users-alt"></i></p>
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
                                            <img src="storage/${post.img}" alt="">
                                        </div>
                                    </div>
                                </div>
                            `;
                            $('.publicacoes').append(postHtml);
                        });

                        // Atualiza a URL no navegador
                        history.pushState({}, '', url);
                    },
                    error: function(error) {
                        console.error('Erro ao carregar página: ', error);
                    }
                });
            });
        });

    </script>
@endsection

@extends('layout.panel')

@section('titulo', 'Grupos')

@section('conteudo')
    <div class="main_content_inner">

        <h1> Grupos </h1>
        <div class="uk-flex uk-flex-between">
            <nav class="responsive-tab style-1 mb-3">
                <ul>
                </ul>
            </nav>
            <a href="#" class="button primary small circle uk-visible@s" data-bs-toggle="modal" data-bs-target="#criarGrupo">
                <i class="uil-plus"> </i>
                Criar grupo 
            </a>

        </div>

        <div class="uk-position-relative" uk-slider="finite: true">
            <div class="uk-slider-container px-lg-1 py-3">
                <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-2@s  pr-lg-1 uk-grid uk-grid-small"
                    uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-small; delay: 100">
                    @foreach ($grupos as $grupo)
                        <li>
                            <div class="sl_group_list">
                                <a href="group-feed.html">
                                    <div class="sl_group_list_media">
                                        <img src={{ asset("storage/" . $grupo->img_capa) }}  alt="image">
                                    </div>
                                </a>

                                <div class="sl_group_list_info">
                                    <h3><a href="group-feed.html"> {{ $grupo->nome }}</a></h3>
                                    <ul>
                                        <li> <span> {{ count($grupo->membros) }} Membros </span> </li>
                                        <li> <span> 2 posts </span> </li>
                                    </ul>

                                    <div class="sl_avatar-groups sl_hide_members">
                                        <a href="group-feed.html">
                                            <img src={{ asset("storage/" . $grupo->img) }} class="avatars"
                                                alt="picture">
                                            <img src="assets/images/avatars/avatar-4.jpg" class="avatars"
                                                alt="picture">
                                            <img src={{ asset("storage/" . $grupo->img_capa) }} class="avatars"
                                                alt="picture">
                                            <img src="assets/images/avatars/avatar-6.jpg" class="avatars"
                                                alt="picture">

                                        </a><a href="group-feed.html">See all Members </a>
                                    </div>

                                    <div class="sl_group_list_info_btns">
                                        @if ($grupo->privacidade == "Público")
                                            @if (!$grupo->membros()->where('user_id', Auth::user()->id)->exists())
                                                @if (Auth::user()->pedidosDeAdicao->where('user_id', Auth::user()->id)->where('grupo_id', $grupo->id)->where('status', '0')->isEmpty())
                                                    <span>
                                                        <form method="POST" action="{{ route('grupo.join', ['id' => Auth::id(), 'grupo_id' => $grupo->id]) }}">
                                                            @csrf
                                                            <button class="button primary small block">
                                                                <span> Entrar</span>
                                                            </button>
                                                        </form>
                                                    </span>
                                                @else
                                                    <span>
                                                        <form method="POST" action="{{ route('grupo.cancelarJoin', ['id' => Auth::id(), 'grupo_id' => $grupo->id]) }}">
                                                            @csrf
                                                            <button class="button danger small block">
                                                                <span> Cancelar pedido</span>
                                                            </button>
                                                        </form>
                                                    </span>
                                                @endif
                                            @else
                                                <span>
                                                    <form method="POST" action="{{ route('grupo.sair', ['grupo_id' => $grupo->id]) }}">
                                                        @csrf
                                                        <button class="button danger small block">
                                                            <span> Sair do grupo</span>
                                                        </button>
                                                    </form>
                                                </span>
                                            @endif
                                        @else
                                            @if ($grupo->membros()->where('user_id', Auth::user()->id)->exists())
                                                <span>
                                                    <form method="POST" action="{{ route('grupo.sair', ['grupo_id' => $grupo->id]) }}">
                                                        @csrf
                                                        <button class="button danger small block">
                                                            <span> Sair do grupo</span>
                                                        </button>
                                                    </form>
                                                </span>
                                            @endif
                                        @endif
                                        <span>
                                            <a href="#" class="button light small block">
                                                <span>Ver</span>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </li>
                    @endforeach
                </ul>

                <a class="uk-position-center-left-out uk-position-small uk-hidden-hover slidenav-prev"
                    href="#" uk-slider-item="previous"></a>
                <a class="uk-position-center-right-out uk-position-small uk-hidden-hover slidenav-next"
                    href="#" uk-slider-item="next"></a>


            </div>
        </div>

        <div class="section-header pb-0">
            <div class="section-header-left">
                <h3> Categories </h3>
                <p> Find a group <span class="uk-visible@s"> by browsing top Categories </span></p>
            </div>
            <div class="section-header-right">
                <a href="#" class="see-all"> See all</a>
            </div>
        </div>

        <div class="uk-position-relative" uk-slider="finite: true">

            <div class="uk-slider-container py-3">

                <ul
                    class="uk-slider-items uk-child-width-1-6@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid">

                    <li>

                        <a href="#">
                            <div class="group-catagroy-card animate-this"
                                data-src="assets/images/category/img6.jpg" uk-img>
                                <div class="group-catagroy-card-content">
                                    <h4> Animals </h4>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>

                        <a href="#">
                            <div class="group-catagroy-card animate-this"
                                data-src="assets/images/category/img1.jpg" uk-img>
                                <div class="group-catagroy-card-content">
                                    <h4> Sports </h4>
                                </div>
                            </div>
                        </a>

                    </li>
                    <li>
                        <a href="#">
                            <div class="group-catagroy-card animate-this"
                                data-src="assets/images/category/img3.jpg" uk-img>
                                <div class="group-catagroy-card-content">
                                    <h4> Workout </h4>
                                </div>
                            </div>
                        </a>

                    </li>
                    <li>

                        <a href="#">
                            <div class="group-catagroy-card animate-this"
                                data-src="assets/images/category/img2.jpg" uk-img>
                                <div class="group-catagroy-card-content">
                                    <h4> Motivation </h4>
                                </div>
                            </div>
                        </a>

                    </li>
                    <li>

                        <a href="#">
                            <div class="group-catagroy-card animate-this"
                                data-src="assets/images/category/img4.jpg" uk-img>
                                <div class="group-catagroy-card-content">
                                    <h4> Music </h4>
                                </div>
                            </div>
                        </a>

                    </li>
                    <li>

                        <a href="#">
                            <div class="group-catagroy-card animate-this"
                                data-src="assets/images/category/img5.jpg" uk-img>
                                <div class="group-catagroy-card-content">
                                    <h4> Food </h4>
                                </div>
                            </div>
                        </a>

                    </li>
                    <li>

                        <a href="#">
                            <div class="group-catagroy-card animate-this"
                                data-src="assets/images/category/img1.jpg" uk-img>
                                <div class="group-catagroy-card-content">
                                    <h4> Sports </h4>
                                </div>
                            </div>
                        </a>

                    </li>
                </ul>

                <a class="uk-position-center-left-out uk-position-small uk-hidden-hover slidenav-prev"
                    href="#" uk-slider-item="previous"></a>
                <a class="uk-position-center-right-out uk-position-small uk-hidden-hover slidenav-next"
                    href="#" uk-slider-item="next"></a>

            </div>
        </div>

        <div class="section-small">
            <h2 class="mb-4"> Suggested groups </h1>
            <div class="uk-child-width-1-4@m uk-child-width-1-2@s uk-grid-small" uk-grid>
                <div>

                    <div class="sl_group_list">

                        <!-- Group cover -->
                        <a href="group-feed.html">
                            <div class="sl_group_list_media">
                                <img src="assets/images/group/group-cover-4.jpg"  alt="image">
                            </div>
                        </a>

                        <!-- Group  Content -->
                        <div class="sl_group_list_info">
                            <h3><a href="group-feed.html"> Mountain Riders</a></h3>
                            <ul>
                                <li> <span> 2 Members </span> </li>
                                <li> <span> 0 posts </span> </li>
                            </ul>

                            <div class="sl_avatar-groups sl_hide_members">
                                <a href="group-feed.html">

                                    <img src="assets/images/avatars/avatar-1.jpg" class="avatars"
                                        alt="picture">
                                    <img src="assets/images/avatars/avatar-2.jpg" class="avatars"
                                        alt="picture">
                                    <img src="assets/images/avatars/avatar-3.jpg" class="avatars"
                                        alt="picture">

                                </a><a href="group-feed.html">See all Members </a>

                            </div>

                            <div class="sl_group_list_info_btns">
                                <span>
                                    <button type="button" class="button primary small block">
                                        <span> Join</span>
                                    </button>
                                </span>
                                <span>
                                    <button type="button" class="button light small block">
                                        <span>View</span>
                                    </button>
                                </span>
                            </div>

                        </div>
                    </div>

                </div>
                <div>

                    <div class="sl_group_list">

                        <!-- Group cover -->
                        <a href="group-feed.html">
                            <div class="sl_group_list_media">
                                <img src="assets/images/group/group-cover-2.jpg" alt="">
                            </div>
                        </a>

                        <!-- Group  Content -->
                        <div class="sl_group_list_info">
                            <h3><a href="group-feed.html">Coffee Addicts  </a></h3>
                            <ul>
                                <li> <span> 2 Members </span> </li>
                                <li> <span> 0 posts </span> </li>
                            </ul>

                            <div class="sl_avatar-groups sl_hide_members">
                                <a href="group-feed.html">

                                    <img src="assets/images/avatars/avatar-1.jpg" class="avatars"
                                        alt="picture">
                                    <img src="assets/images/avatars/avatar-2.jpg" class="avatars"
                                        alt="picture">
                                    <img src="assets/images/avatars/avatar-3.jpg" class="avatars"
                                        alt="picture">

                                </a><a href="group-feed.html">See all Members </a>

                            </div>

                            <div class="sl_group_list_info_btns">
                                <span>
                                    <button type="button" class="button primary small block">
                                        <span> Join</span>
                                    </button>
                                </span>
                                <span>
                                    <button type="button" class="button light small block">
                                        <span>View</span>
                                    </button>
                                </span>
                            </div>

                        </div>
                    </div>

                </div>
                <div>

                    <div class="sl_group_list">

                        <!-- Group cover -->
                        <a href="group-feed.html">
                            <div class="sl_group_list_media">
                                <img src="assets/images/group/group-cover-1.jpg" alt="">
                            </div>
                        </a>

                        <!-- Group  Content -->
                        <div class="sl_group_list_info">
                            <h3><a href="group-feed.html"> Graphic Design</a></h3>
                            <ul>
                                <li> <span> 2 Members </span> </li>
                                <li> <span> 0 posts </span> </li>
                            </ul>

                            <div class="sl_avatar-groups sl_hide_members">
                                <a href="group-feed.html">

                                    <img src="assets/images/avatars/avatar-1.jpg" class="avatars"
                                        alt="picture">
                                    <img src="assets/images/avatars/avatar-2.jpg" class="avatars"
                                        alt="picture">
                                    <img src="assets/images/avatars/avatar-3.jpg" class="avatars"
                                        alt="picture">

                                </a><a href="group-feed.html">See all Members </a>

                            </div>

                            <div class="sl_group_list_info_btns">
                                <span>
                                    <button type="button" class="button primary small block">
                                        <span> Join</span>
                                    </button>
                                </span>
                                <span>
                                    <button type="button" class="button light small block">
                                        <span>View</span>
                                    </button>
                                </span>
                            </div>

                        </div>
                    </div>

                </div>
                <div>

                    <div class="sl_group_list">

                        <!-- Group cover -->
                        <a href="group-feed.html">
                            <div class="sl_group_list_media">
                                <img src="assets/images/group/group-cover-3.jpg" alt="">
                            </div>
                        </a>

                        <!-- Group  Content -->
                        <div class="sl_group_list_info">
                            <h3><a href="group-feed.html">Property Rent And Sale </a></h3>
                            <ul>
                                <li> <span> 2 Members </span> </li>
                                <li> <span> 0 posts </span> </li>
                            </ul>

                            <div class="sl_avatar-groups sl_hide_members">
                                <a href="group-feed.html">

                                    <img src="assets/images/avatars/avatar-1.jpg" class="avatars"
                                        alt="picture">
                                    <img src="assets/images/avatars/avatar-2.jpg" class="avatars"
                                        alt="picture">
                                    <img src="assets/images/avatars/avatar-3.jpg" class="avatars"
                                        alt="picture">

                                </a><a href="group-feed.html">See all Members </a>

                            </div>

                            <div class="sl_group_list_info_btns">
                                <span>
                                    <button type="button" class="button primary small block">
                                        <span> Join</span>
                                    </button>
                                </span>
                                <span>
                                    <button type="button" class="button light small block">
                                        <span>View</span>
                                    </button>
                                </span>
                            </div>

                        </div>
                    </div>

                </div>
                <div>

                    <div class="sl_group_list">

                        <!-- Group cover -->
                        <a href="group-feed.html">
                            <div class="sl_group_list_media">
                                <img src="assets/images/group/group-cover-1.jpg" alt="">
                            </div>
                        </a>

                        <!-- Group  Content -->
                        <div class="sl_group_list_info">
                            <h3><a href="group-feed.html"> Graphic Design</a></h3>
                            <ul>
                                <li> <span> 2 Members </span> </li>
                                <li> <span> 0 posts </span> </li>
                            </ul>

                            <div class="sl_avatar-groups sl_hide_members">
                                <a href="group-feed.html">

                                    <img src="assets/images/avatars/avatar-1.jpg" class="avatars"
                                        alt="picture">
                                    <img src="assets/images/avatars/avatar-2.jpg" class="avatars"
                                        alt="picture">
                                    <img src="assets/images/avatars/avatar-3.jpg" class="avatars"
                                        alt="picture">

                                </a><a href="group-feed.html">See all Members </a>

                            </div>

                            <div class="sl_group_list_info_btns">
                                <span>
                                    <button type="button" class="button primary small block">
                                        <span> Join</span>
                                    </button>
                                </span>
                                <span>
                                    <button type="button" class="button light small block">
                                        <span>View</span>
                                    </button>
                                </span>
                            </div>

                        </div>
                    </div>

                </div>
                <div>

                    <div class="sl_group_list">

                        <!-- Group cover -->
                        <a href="group-feed.html">
                            <div class="sl_group_list_media">
                                <img src="assets/images/group/group-cover-3.jpg" alt="">
                            </div>
                        </a>

                        <!-- Group  Content -->
                        <div class="sl_group_list_info">
                            <h3><a href="group-feed.html">Property Rent And Sale </a></h3>
                            <ul>
                                <li> <span> 2 Members </span> </li>
                                <li> <span> 0 posts </span> </li>
                            </ul>

                            <div class="sl_avatar-groups sl_hide_members">
                                <a href="group-feed.html">

                                    <img src="assets/images/avatars/avatar-1.jpg" class="avatars"
                                        alt="picture">
                                    <img src="assets/images/avatars/avatar-2.jpg" class="avatars"
                                        alt="picture">
                                    <img src="assets/images/avatars/avatar-3.jpg" class="avatars"
                                        alt="picture">

                                </a><a href="group-feed.html">See all Members </a>

                            </div>

                            <div class="sl_group_list_info_btns">
                                <span>
                                    <button type="button" class="button primary small block">
                                        <span> Join</span>
                                    </button>
                                </span>
                                <span>
                                    <button type="button" class="button light small block">
                                        <span>View</span>
                                    </button>
                                </span>
                            </div>

                        </div>
                    </div>

                </div>
                <div>

                    <div class="sl_group_list">

                        <!-- Group cover -->
                        <a href="group-feed.html">
                            <div class="sl_group_list_media">
                                <img src="assets/images/group/group-cover-4.jpg"  alt="image">
                            </div>
                        </a>

                        <!-- Group  Content -->
                        <div class="sl_group_list_info">
                            <h3><a href="group-feed.html"> Mountain Riders</a></h3>
                            <ul>
                                <li> <span> 2 Members </span> </li>
                                <li> <span> 0 posts </span> </li>
                            </ul>

                            <div class="sl_avatar-groups sl_hide_members">
                                <a href="group-feed.html">

                                    <img src="assets/images/avatars/avatar-1.jpg" class="avatars"
                                        alt="picture">
                                    <img src="assets/images/avatars/avatar-2.jpg" class="avatars"
                                        alt="picture">
                                    <img src="assets/images/avatars/avatar-3.jpg" class="avatars"
                                        alt="picture">

                                </a><a href="group-feed.html">See all Members </a>

                            </div>

                            <div class="sl_group_list_info_btns">
                                <span>
                                    <button type="button" class="button primary small block">
                                        <span> Join</span>
                                    </button>
                                </span>
                                <span>
                                    <button type="button" class="button light small block">
                                        <span>View</span>
                                    </button>
                                </span>
                            </div>

                        </div>
                    </div>

                </div>
                <div>

                    <div class="sl_group_list">

                        <!-- Group cover -->
                        <a href="group-feed.html">
                            <div class="sl_group_list_media">
                                <img src="assets/images/group/group-cover-2.jpg" alt="">
                            </div>
                        </a>

                        <!-- Group  Content -->
                        <div class="sl_group_list_info">
                            <h3><a href="group-feed.html">Coffee Addicts  </a></h3>
                            <ul>
                                <li> <span> 2 Members </span> </li>
                                <li> <span> 0 posts </span> </li>
                            </ul>

                            <div class="sl_avatar-groups sl_hide_members">
                                <a href="group-feed.html">

                                    <img src="assets/images/avatars/avatar-1.jpg" class="avatars"
                                        alt="picture">
                                    <img src="assets/images/avatars/avatar-2.jpg" class="avatars"
                                        alt="picture">
                                    <img src="assets/images/avatars/avatar-3.jpg" class="avatars"
                                        alt="picture">

                                </a><a href="group-feed.html">See all Members </a>

                            </div>

                            <div class="sl_group_list_info_btns">
                                <span>
                                    <button type="button" class="button primary small block">
                                        <span> Join</span>
                                    </button>
                                </span>
                                <span>
                                    <button type="button" class="button light small block">
                                        <span>View</span>
                                    </button>
                                </span>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="load-more">
            <button class="btn button">Load more groups</button>
        </div>
    </div>
@endsection

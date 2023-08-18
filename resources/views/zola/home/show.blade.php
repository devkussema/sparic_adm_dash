@extends('layout.panel')

@section('titulo', 'Página Inicial')

@section('conteudo')
    <div class="main_content_inner">

        <h1  class="mb-1"> Página Inicial </h1>
        <ul class="uk-width-expand mb-3" uk-tab>
            <li class="uk-active"><a href="#">    Suggested Games    </a></li>
            <li><a href="#">  Newest </a></li>
            <li class="uk-visible@s"><a href="#">  My Games </a></li>
        </ul>


        <div class="uk-position-relative" uk-slider="finite: true">

            <div class="uk-slider-container pb-3">

                <ul class="uk-slider-items uk-child-width-1-6@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid"
                    uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-small; delay: 100">

                    @foreach ($musicas as $musica)
                        <li>
                            <div class="sl_game_list">

                                <a href="#">
                                    <div class="sl_game_list_media">
                                        <img src={{ asset("storage/" . $musica->img_capa) }} alt="Picture">
                                    </div>
                                </a>

                                <div class="sl_game_list_info">
                                    <h3>{{ $musica->titulo }}</h3>
                                    <span> 2 visualizações</span>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <a class="uk-position-center-left-out uk-position-small uk-hidden-hover slidenav-prev" href="#"
                    uk-slider-item="previous"></a>
                <a class="uk-position-center-right-out uk-position-small uk-hidden-hover slidenav-next" href="#"
                    uk-slider-item="next"></a>

            </div>


        </div>

        <div class="section-small">

            <h3> Recently live streamers </h3>
            <div class="uk-position-relative" uk-slider="finite: true">

                <div class="uk-slider-container pb-3">

                    <ul class="uk-slider-items uk-child-width-1-3@m uk-child-width-1-2@s  uk-grid-small uk-grid-match uk-grid"
                        uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-small; delay: 100">
                        <li>
                            <img src="assets/images/games/img-lg-1.jpg" class="rounded" alt="">
                            <div class="uk-flex-middle uk-grid-small mt-2" uk-grid>
                                <div class="uk-width-auto"> <img src="assets/images/avatars/avatar-2.jpg" class="uk-border-circle" width="40" height="40" alt=""></div>
                                <div class="uk-width-expand pl-2">
                                    <h5 class="mb-0"> Strike Force Heroes 2 </h5>
                                    <p class="uk-text-small"> Young gamer · PUBG Mobile</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="assets/images/games/img-lg-2.jpg" class="rounded" alt="">
                            <div class="uk-flex-middle uk-grid-small mt-3" uk-grid>
                                <div class="uk-width-auto"> <img src="assets/images/avatars/avatar-3.jpg" class="uk-border-circle" width="40" height="40" alt=""></div>
                                <div class="uk-width-expand pl-2">
                                    <h5 class="mb-0"> Free Fire - Battlegrounds </h5>
                                    <p class="uk-text-small"> Smart Player  · PUBG Mobile</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="assets/images/games/img-lg-3.jpg" class="rounded" alt="">
                            <div class="uk-flex-middle uk-grid-small mt-3" uk-grid>
                                <div class="uk-width-auto"> <img src="assets/images/avatars/avatar-5.jpg" class="uk-border-circle" width="40" height="40" alt=""></div>
                                <div class="uk-width-expand pl-2">
                                    <h5 class="mb-0"> Clip of Wolv Gamers     </h5>
                                    <p class="uk-text-small"> Official gamer  · PUBG Mobile</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="assets/images/games/img-lg-1.jpg" class="rounded" alt="">
                            <div class="uk-flex-middle uk-grid-small mt-3" uk-grid>
                                <div class="uk-width-auto"> <img src="assets/images/avatars/avatar-2.jpg" class="uk-border-circle" width="40" height="40" alt=""></div>
                                <div class="uk-width-expand pl-2">
                                    <h5 class="mb-0"> Strike Force Heroes 2 </h5>
                                    <p class="uk-text-small"> Young gamer · PUBG Mobile</p>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <a class="uk-position-center-left-out uk-position-small uk-hidden-hover slidenav-prev" href="#"
                        uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small uk-hidden-hover slidenav-next" href="#"
                        uk-slider-item="next"></a>

                </div>


            </div>

        </div>

        <h3> Suggested Games </h3>

        <div class="uk-child-width-1-5@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small" uk-grid>
            <div>
                <div class="sl_game_list">

                    <!-- Game cover -->
                    <a href="#">
                        <div class="sl_game_list_media">
                            <img src="assets/images/games/img-4.jpg" alt="Picture">
                        </div>
                    </a>

                    <!-- Group  Content -->
                    <div class="sl_game_list_info">
                        <h3>  Mobile Legends </h3>
                        <span> 2 users playing</span>
                        <div class="sl_game_list_info_btns">
                            <div class="btn button light block small"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M9,2V7.5L12,10.5L15,7.5V2H9M2,9V15H7.5L10.5,12L7.5,9H2M16.5,9L13.5,12L16.5,15H22V9H16.5M12,13.5L9,16.5V22H15V16.5L12,13.5M11,18H13V20H11V18Z">
                                    </path>
                                </svg> Play</div>
                        </div>
                    </div>
                </div>

            </div>
            <div>
                <div class="sl_game_list">

                    <!-- Game cover -->
                    <a href="#">
                        <div class="sl_game_list_media">
                            <img src="assets/images/games/img-5.jpg" alt="Picture">
                        </div>
                    </a>

                    <!-- Group  Content -->
                    <div class="sl_game_list_info">
                        <h3> Minecraft </h3>
                        <span> 2 users playing</span>
                        <div class="sl_game_list_info_btns">
                            <div class="btn button light block small"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M9,2V7.5L12,10.5L15,7.5V2H9M2,9V15H7.5L10.5,12L7.5,9H2M16.5,9L13.5,12L16.5,15H22V9H16.5M12,13.5L9,16.5V22H15V16.5L12,13.5M11,18H13V20H11V18Z">
                                    </path>
                                </svg> Play</div>
                        </div>
                    </div>
                </div>

            </div>
            <div>
                <div class="sl_game_list">

                    <!-- Game cover -->
                    <a href="#">
                        <div class="sl_game_list_media">
                            <img src="assets/images/games/3.jpg" alt="Picture">
                        </div>
                    </a>

                    <!-- Group  Content -->
                    <div class="sl_game_list_info">
                        <h3> urban basketball </h3>
                        <span> 2 users playing</span>
                        <div class="sl_game_list_info_btns">
                            <div class="btn button light block small"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M9,2V7.5L12,10.5L15,7.5V2H9M2,9V15H7.5L10.5,12L7.5,9H2M16.5,9L13.5,12L16.5,15H22V9H16.5M12,13.5L9,16.5V22H15V16.5L12,13.5M11,18H13V20H11V18Z">
                                    </path>
                                </svg> Play</div>
                        </div>

                    </div>
                </div>

            </div>
            <div>
                <div class="sl_game_list">

                    <!-- Game cover -->
                    <a href="#">
                        <div class="sl_game_list_media">
                            <img src="assets/images/games/1.jpg" alt="Picture">
                        </div>
                    </a>

                    <!-- Group  Content -->
                    <div class="sl_game_list_info">
                        <h3>8 Ball Pool</h3>
                        <span> 2 users playing</span>
                        <div class="sl_game_list_info_btns">
                            <div class="btn button light block small"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M9,2V7.5L12,10.5L15,7.5V2H9M2,9V15H7.5L10.5,12L7.5,9H2M16.5,9L13.5,12L16.5,15H22V9H16.5M12,13.5L9,16.5V22H15V16.5L12,13.5M11,18H13V20H11V18Z">
                                    </path>
                                </svg> Play</div>
                        </div>
                    </div>
                </div>

            </div>
            <div>
                <div class="sl_game_list">

                    <!-- Game cover -->
                    <a href="#">
                        <div class="sl_game_list_media">
                            <img src="assets/images/games/2.jpg" alt="Picture">
                        </div>
                    </a>

                    <!-- Group  Content -->
                    <div class="sl_game_list_info">
                        <h3> Big Shot Boxing </h3>
                        <span> 2 users playing</span>
                        <div class="sl_game_list_info_btns">
                            <div class="btn button light block small"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M9,2V7.5L12,10.5L15,7.5V2H9M2,9V15H7.5L10.5,12L7.5,9H2M16.5,9L13.5,12L16.5,15H22V9H16.5M12,13.5L9,16.5V22H15V16.5L12,13.5M11,18H13V20H11V18Z">
                                    </path>
                                </svg> Play</div>
                        </div>
                    </div>
                </div>

            </div>
            <div>
                <div class="sl_game_list">

                    <!-- Game cover -->
                    <a href="#">
                        <div class="sl_game_list_media">
                            <img src="assets/images/games/3.jpg" alt="Picture">
                        </div>
                    </a>

                    <!-- Group  Content -->
                    <div class="sl_game_list_info">
                        <h3> urban basketball </h3>
                        <span> 2 users playing</span>
                        <div class="sl_game_list_info_btns">
                            <div class="btn button light block small"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M9,2V7.5L12,10.5L15,7.5V2H9M2,9V15H7.5L10.5,12L7.5,9H2M16.5,9L13.5,12L16.5,15H22V9H16.5M12,13.5L9,16.5V22H15V16.5L12,13.5M11,18H13V20H11V18Z">
                                    </path>
                                </svg> Play</div>
                        </div>

                    </div>
                </div>

            </div>
            <div>
                <div class="sl_game_list">

                    <!-- Game cover -->
                    <a href="#">
                        <div class="sl_game_list_media">
                            <img src="assets/images/games/img-2.jpg" alt="Picture">
                        </div>
                    </a>

                    <!-- Group  Content -->
                    <div class="sl_game_list_info">
                        <h3> ChooxTv </h3>
                        <span> 2 users playing</span>
                        <div class="sl_game_list_info_btns">
                            <div class="btn button light block small"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M9,2V7.5L12,10.5L15,7.5V2H9M2,9V15H7.5L10.5,12L7.5,9H2M16.5,9L13.5,12L16.5,15H22V9H16.5M12,13.5L9,16.5V22H15V16.5L12,13.5M11,18H13V20H11V18Z">
                                    </path>
                                </svg> Play</div>
                        </div>
                    </div>
                </div>

            </div>
            <div>
                <div class="sl_game_list">

                    <!-- Game cover -->
                    <a href="#">
                        <div class="sl_game_list_media">
                            <img src="assets/images/games/img-3.jpg" alt="Picture">
                        </div>
                    </a>

                    <!-- Group  Content -->
                    <div class="sl_game_list_info">
                        <h3> Larion TV </h3>
                        <span> 2 users playing</span>
                        <div class="sl_game_list_info_btns">
                            <div class="btn button light block small"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M9,2V7.5L12,10.5L15,7.5V2H9M2,9V15H7.5L10.5,12L7.5,9H2M16.5,9L13.5,12L16.5,15H22V9H16.5M12,13.5L9,16.5V22H15V16.5L12,13.5M11,18H13V20H11V18Z">
                                    </path>
                                </svg> Play</div>
                        </div>

                    </div>
                </div>

            </div>
            <div>
                <div class="sl_game_list">

                    <!-- Game cover -->
                    <a href="#">
                        <div class="sl_game_list_media">
                            <img src="assets/images/games/img-5.jpg" alt="Picture">
                        </div>
                    </a>

                    <!-- Group  Content -->
                    <div class="sl_game_list_info">
                        <h3> Minecraft </h3>
                        <span> 2 users playing</span>
                        <div class="sl_game_list_info_btns">
                            <div class="btn button light block small"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M9,2V7.5L12,10.5L15,7.5V2H9M2,9V15H7.5L10.5,12L7.5,9H2M16.5,9L13.5,12L16.5,15H22V9H16.5M12,13.5L9,16.5V22H15V16.5L12,13.5M11,18H13V20H11V18Z">
                                    </path>
                                </svg> Play</div>
                        </div>
                    </div>
                </div>

            </div>
            <div>
                <div class="sl_game_list">

                    <!-- Game cover -->
                    <a href="#">
                        <div class="sl_game_list_media">
                            <img src="assets/images/games/img-4.jpg" alt="Picture">
                        </div>
                    </a>

                    <!-- Group  Content -->
                    <div class="sl_game_list_info">
                        <h3> Mobile Legends </h3>
                        <span> 2 users playing</span>
                        <div class="sl_game_list_info_btns">
                            <div class="btn button light block small"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M9,2V7.5L12,10.5L15,7.5V2H9M2,9V15H7.5L10.5,12L7.5,9H2M16.5,9L13.5,12L16.5,15H22V9H16.5M12,13.5L9,16.5V22H15V16.5L12,13.5M11,18H13V20H11V18Z">
                                    </path>
                                </svg> Play</div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="load-more">
            <button class="btn button mt-2">Load more Games</button>
        </div>



    </div>
@endsection

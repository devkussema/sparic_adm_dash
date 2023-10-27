@extends('layout.auth')

@section("titulo", "Criar conta")

@section('conteudo')
    <div class="uk-child-width-1-2@m uk-grid-collapse bg-gradient-primary" uk-grid>

        <!-- column one -->
        <div class="uk-margin-auto-vertical uk-text-center uk-animation-scale-up p-3 uk-light">
            <img src="assets/images/logo-light-icon.png" alt="">
            <h3 class="mb-3 mt-lg-4"> Informusik</h3>
            <p>Partilhe as novidades e viva o momento com <br> os teus <b>amigos</b>. </p>
        </div>

        <!-- column two -->
            <div class="uk-card-default px-5 py-8">
                <div class="mb-4 uk-text-center">
                    <h2 class="mb-0"> Crie uma conta</h3>
                    <p class="my-2">Aproveite e crie já a sua conta.</p>
                </div>

            <form method="post" action="{{ route('post.registar') }}" class="uk-child-width-1-1 uk-grid-small" uk-grid>
                @csrf
                <div class="uk-width-1-2@s">
                    <div class="uk-form-group">
                        <label class="uk-form-label"> Nome</label>

                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                <i class="icon-feather-user"></i>
                            </span>
                            <input type="text" class="uk-input" required name="name" placeholder="Nome">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2@s">
                    <div class="uk-form-group">
                        <label class="uk-form-label"> Sobrenome</label>

                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                <i class="icon-feather-user"></i>
                            </span>
                            <input type="text" class="uk-input" required name="last_name" placeholder="Sobrenome">
                            @error('last_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-form-group">
                        <label class="uk-form-label"> Email</label>

                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                <i class="icon-feather-mail"></i>
                            </span>
                            <input type="email" class="uk-input" required name="email" placeholder="Endereço de email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                </div>

                <div class="uk-width-1-2@s">
                    <div class="uk-form-group">
                        <label class="uk-form-label"> Senha</label>

                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                <i class="icon-feather-lock"></i>
                            </span>
                            <input type="password" class="uk-input" required name="password" placeholder="Senha">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2@s">
                    <div class="uk-form-group">
                        <label class="uk-form-label"> Confirmar senha</label>

                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                <i class="icon-feather-lock"></i>
                            </span>
                            <input type="password" class="uk-input" required name="password_confirmation" placeholder="Confirmar senha">
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <div class="mt-4 uk-flex-middle uk-grid-small" uk-grid>
                        <div class="uk-width-expand@s">
                            <p> Já tens uma conta? <a href="{{ route('login') }}">Entre agora</a></p>
                        </div>
                        <div class="uk-width-auto@s">
                            <input type="submit" class="button primary" value="Criar conta">
                        </div>
                    </div>
                </div>

            </form>
        </div><!--  End column two -->

    </div>
@endsection
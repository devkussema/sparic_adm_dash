@extends('layout.auth')

@section('conteudo')
    <div class="uk-child-width-1-2@m uk-grid-collapse bg-gradient-primary" uk-grid>

        <!-- column one -->
        <div class="uk-margin-auto-vertical uk-text-center uk-animation-scale-up p-3 uk-light">
            <img src="assets/images/logo-light-icon.png" %} alt="">
            <h3 class="mb-3 mt-lg-4"> Informusik</h3>
            <p>Share what's new and life moments with <br> your friends. </p>
        </div>

        <!-- column two -->
        <div class="uk-card-default px-5 py-8">
            <div class="mb-4 uk-text-center">
                <h2 class="mb-0"> Welcome back</h3>
                <p class="my-2">Login to manage your account.</p>
            </div>

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @error('username')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            
            <form method="POST" action="{{ route('post.login') }}">
                @csrf
                <div class="uk-form-group">
                    <label class="uk-form-label"> Email ou Usuário</label>

                    <div class="uk-position-relative w-100">
                        <span class="uk-form-icon">
                            <i class="icon-feather-mail"></i>
                        </span>
                        <input name="email" class="uk-input" type="text" placeholder="">
                    </div>
                </div>


                <div class="uk-form-group">
                    <label class="uk-form-label"> Password</label>

                    <div class="uk-position-relative w-100">
                        <span class="uk-form-icon">
                            <i class="icon-feather-lock"></i>
                        </span>
                        <input name="password" class="uk-input" type="password" placeholder="********">
                    </div>

                </div>

                <div class="mt-4 uk-flex-middle uk-grid-small" uk-grid>
                    <div class="uk-width-expand@s">
                        <p> Não tens uma conta <a href="{{ route('registar') }}">Crie uma!</a></p>
                    </div>
                    <div class="uk-width-auto@s">
                        <button type="submit" class="button primary">Get Started</button>
                    </div>
                </div>
            </form>
        </div><!--  End column two -->
    </div>
@endsection

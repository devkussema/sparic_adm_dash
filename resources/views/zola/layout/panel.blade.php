<!doctype html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <title>@yield('titulo') - Informusik</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Simplest is - Professional A unique and beautiful collection of UI elements">
    <link rel="icon" href="assets/images/favicon.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href={{ asset('assets/css/style.css') }}>
    <link rel="stylesheet" href="{{ asset('assets/css/uikit.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/core.css') }}">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="assets/css/icons.css">
    <script src="https://kit.fontawesome.com/815e388c50.js" crossorigin="anonymous"></script>

    <!-- Google font
    ================================================== -->
    <!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://www.WebRTC-Experiment.com/RecordRTC.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jplayer/2.9.2/jplayer/jquery.jplayer.min.js" integrity="sha512-g0etrk7svX8WYBp+ZDIqeenmkxQSXjRDTr08ie37rVFc99iXFGxmD0/SCt3kZ6sDNmr8sR0ISHkSAc/M8rQBqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    -->
    <link rel="stylesheet" href="assets/js/jquery.min.js">
    <style>
        .lds-ring {
            display: inline-block;
            position: relative;
            width: 80px;
            height: 80px;
        }
        .lds-ring div {
            box-sizing: border-box;
            display: block;
            position: absolute;
            width: 64px;
            height: 64px;
            margin: 8px;
            border: 8px solid #fff;
            border-radius: 50%;
            animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
            border-color: #fff transparent transparent transparent;
        }
        .lds-ring div:nth-child(1) {
            animation-delay: -0.45s;
        }
        .lds-ring div:nth-child(2) {
            animation-delay: -0.3s;
        }
        .lds-ring div:nth-child(3) {
            animation-delay: -0.15s;
        }
        @keyframes lds-ring {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        figcaption #onda
        {
            background-color: red;
            width: 80%;
            height: 30%;
        }
        
    </style>
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>
<body>

    <!-- Wrapper    <div class="lds-ring"><div></div><div></div><div></div><div></div></div>-->
    <div id="wrapper">
        @include('partials.sidebar')

        <!-- contents -->
        <div class="main_content">
            <!-- header -->
            <div id="main_header">
                @include('partials.header')
            </div>

            <!--<h1>Gravação de Áudio</h1>
            <button id="startRecordingButton">Iniciar Gravação</button>-->
            <!--<button id="uploadAudio" onclick="uploadAudio()">Comece</button>
            <form method="POST" action="{{ route('musica.add') }}" enctype="multipart/form-data">
                @csrf
                <input type="text" name="titulo">
                <input type="text" name="descricao">
                <input type="file" name="arquivo">
                <input type="file" name="img_capa">
                <button>Enviar</button>
            </form>-->

            @yield('conteudo')
            <!--<div class="audio-player">
                <div class="contentor">
                    <div class="img-fluid">
                        <img class="img-cantor" src="{{ asset('assets/images/avatars/avatar-1.jpg') }}">
                    </div>
                    <audio id="myAudio">
                        <source src="gg.mp3" type="audio/mpeg">
                        Seu navegador não suporta o elemento de áudio.
                    </audio>
                    <button id="playButton">Play</button>
                    <button id="pauseButton">Pause</button>
                    <div id="progressBar">
                        <div id="progress" style="width: 0;"></div>
                    </div>
                    <input type="range" id="volumeSlider" min="0" max="1" step="0.02" value="1">
                    <span id="currentTime">0:00</span>
                </div>
            </div>-->
        </div>
        <!-- Chat sidebar -->
        @include('partials/chat_sidebar')
        @include('partials/stories')
    </div>
    <div class="modal fade" id="exampleModalToggle" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalToggleLabel">Gravar Podcast</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Show a second modal and hide this one with the button below.
                <audio id="myAudioRadio" controls>
                    <source src="" type="audio/wav">
                    Seu navegador não suporta o elemento de áudio.
                </audio>
                <button id="startRecordingRadioButton">Iniciar Gravação</button>
            </div>
            <div class="modal-footer">
              <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
            </div>
          </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Hide this modal and show the first with the button below.
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
        </div>
        </div>
    </div>
    </div>
    
      @include('modals.modalMusica')
    @include('modals.modalGrupo')

    <script>
        const audioElement = document.getElementById('myAudioRadio');
        const startRecordingButton = document.getElementById('startRecordingRadioButton');
        const modalAlert = document.getElementById('exampleModalToggle');

        let mediaRecorder;
        let audioChunks = [];

        // Função para iniciar a gravação
        startRecordingButton.addEventListener('click', () => {
            navigator.mediaDevices.getUserMedia({ audio: true })
                .then(function (stream) {
                    mediaRecorder = new MediaRecorder(stream);

                    mediaRecorder.ondataavailable = function (event) {
                        if (event.data.size > 0) {
                            audioChunks.push(event.data);
                        }
                    };

                    mediaRecorder.onstop = function () {
                        const audioBlob = new Blob(audioChunks, { type: 'audio/wav' });
                        const audioUrl = URL.createObjectURL(audioBlob);
                        audioElement.src = audioUrl;

                        // Reproduzir o áudio gravado automaticamente
                        audioElement.play();

                        // Limpar os chunks
                        audioChunks = [];
                    };

                    mediaRecorder.start();
                })
                .catch(function (error) {
                    $(modalAlert).modal('hide');
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro',
                        text: 'Erro ao acessar o microfone: '+ error
                    });
                    console.error('Erro ao acessar o microfone:', error);
                });
        });

        // Função para parar a gravação
        audioElement.addEventListener('ended', () => {
            mediaRecorder.stop();
        });

        /* ======== */
        const audio = document.getElementById('myAudio');
        const playButton = document.getElementById('playButton');
        const pauseButton = document.getElementById('pauseButton');
        const volumeSlider = document.getElementById('volumeSlider');
        const currentTime = document.getElementById('currentTime');
        const progressBar = document.getElementById('progressBar');
        const progress = document.getElementById('progress');

        playButton.addEventListener('click', () => {
            audio.play();
        });

        pauseButton.addEventListener('click', () => {
            audio.pause();
        });

        volumeSlider.addEventListener('input', () => {
            audio.volume = volumeSlider.value;
        });

        progressBar.addEventListener('click', (e) => {
            const clickX = e.clientX - progressBar.getBoundingClientRect().left;
            const progressBarWidth = progressBar.offsetWidth;
            const seekTime = (clickX / progressBarWidth) * audio.duration;
            audio.currentTime = seekTime;
        });

        audio.addEventListener('timeupdate', () => {
            const minutes = Math.floor(audio.currentTime / 60);
            const seconds = Math.floor(audio.currentTime % 60);
            currentTime.textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;

            const progressValue = (audio.currentTime / audio.duration) * 100;
            progress.style.width = progressValue + '%';
        });


        document.addEventListener('DOMContentLoaded', function () {
            const sendMusicaForm = document.getElementById('sendMusica');

            sendMusicaForm.addEventListener('submit', function (event) {
                event.preventDefault();

                // Criar um objeto FormData com os dados do formulário
                const formData = new FormData(sendMusicaForm);

                // Enviar o formulário via AJAX
                fetch(sendMusicaForm.action, {
                    method: sendMusicaForm.method,
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    // Lidar com a resposta do servidor após o envio do formulário
                    console.log(data);

                    // Você pode adicionar lógica aqui para exibir uma mensagem de sucesso ou realizar outras ações
                })
                .catch(error => {
                    // Lidar com erros, se houver
                    console.error(error);
                });
            });
        });
        $('#sendMusicaa').submit(function(e){
            e.preventDefault();
            const csrfToken = document.querySelector('input[name="_token"]').getAttribute('value');

            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    alert(response.message);
                    setTimeout(function() {
                        location.reload();
                    }, 4000);
                },
                error: function(error) {
                    alert(error.message);
                }
            });
        });
        async function addMusica() {
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            let tituloMusica = null;
            let descricaoMusica = null;

            // Passo 1: Título da música
            const { value: titulo } = await Swal.fire({
                title: 'Título da música',
                input: 'text',
                inputAttributes: {
                    'aria-label': 'Informe o título da música'
                },
                showCancelButton: true,
                confirmButtonText: 'Próximo &rarr;',
                cancelButtonText: 'Cancelar',
                allowOutsideClick: false,
                allowEscapeKey: false,
                preConfirm: (value) => {
                    tituloMusica = value;
                }
            });

            if (titulo) {
                // Passo 2: Descrição da música
                const { value: descricao } = await Swal.fire({
                    title: 'Descrição da música',
                    input: 'textarea',
                    inputAttributes: {
                        'aria-label': 'Informe a descrição da música'
                    },
                    showCancelButton: true,
                    confirmButtonText: 'Próximo &rarr;',
                    cancelButtonText: 'Voltar',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    preConfirm: (value) => {
                        descricaoMusica = value;
                    }
                });

                if (descricao) {
                    const { value: audioFile } = await Swal.fire({
                        title: 'Select audio',
                        input: 'file',
                        inputAttributes: {
                            'accept': 'audio/*',
                            'aria-label': 'Carregue a tua música'
                        }
                    });

                    if (audioFile) {
                        const audioReader = new FileReader();
                        audioReader.onload = async (e) => {
                            const { value: imageFile } = await Swal.fire({
                                title: 'Selecione a imagem de capa da música',
                                input: 'file',
                                inputAttributes: {
                                    'accept': 'image/*',
                                    'aria-label': 'Carregue uma imagem para o áudio'
                                }
                            });

                            if (imageFile) {
                                const imageReader = new FileReader();
                                imageReader.onload = async (eImage) => {
                                    const formData = new FormData();
                                    formData.append('arquivo', audioFile);
                                    formData.append('img_capa', imageFile);
                                    formData.append('titulo', titulo);
                                    formData.append('descricao', descricao);

                                    try {
                                        const response = await fetch('/musicas/add', {
                                            method: 'POST',
                                            body: formData,
                                            headers: {
                                                'X-CSRF-TOKEN': csrfToken
                                            }
                                        });

                                        if (response.ok) {
                                            Swal.fire({
                                                title: 'Música carregada',
                                                html: `<audio controls src="${audioReader.result}"></audio><hr><img src="${imageReader.result}" alt="Uploaded image" style="max-width: 300px;">`,
                                            }).then(() => {
                                                // Aguarde 4 segundos e, em seguida, atualize a página
                                                setTimeout(function() {
                                                    location.reload();
                                                }, 4000);
                                            });
                                        } else {
                                            const data = await response.json();
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Upload Error',
                                                text: data.message
                                            });
                                        }
                                    } catch (error) {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Erro',
                                            text: "Ocorreu um erro enquanto nos comunicamos com o servidor: " + error.message
                                        });
                                    }
                                };
                                imageReader.readAsDataURL(imageFile);
                            }
                        };
                        audioReader.readAsDataURL(audioFile);
                    }
                } else if (descricaoMusica !== null) {
                    // Voltar para o passo anterior (Título da música)
                    // ...
                }
            }
        }

        async function uploadAudio() {
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            const { value: audioFile } = await Swal.fire({
                title: 'Select audio',
                input: 'file',
                inputAttributes: {
                    'accept': 'audio/*',
                    'aria-label': 'Upload your audio file'
                }
            });

            if (audioFile) {
                const audioReader = new FileReader();
                audioReader.onload = async (e) => {
                    const { value: imageFile } = await Swal.fire({
                        title: 'Select image for audio',
                        input: 'file',
                        inputAttributes: {
                            'accept': 'image/*',
                            'aria-label': 'Upload an image for the audio'
                        }
                    });

                    if (imageFile) {
                        const imageReader = new FileReader();
                        imageReader.onload = async (eImage) => {
                            const formData = new FormData();
                            formData.append('audio', audioFile);
                            formData.append('image', imageFile);

                            try {
                                const response = await fetch('/musicas/add', {
                                    method: 'POST',
                                    body: formData,
                                    headers: {
                                        'X-CSRF-TOKEN': csrfToken
                                    }
                                });

                                if (response.ok) {
                                    Swal.fire({
                                        title: 'Uploaded audio with image',
                                        html: `<audio controls src="${audioReader.result}"></audio><hr><img src="${imageReader.result}" alt="Uploaded image" style="max-width: 300px;">`,
                                    }).then(() => {
                                        // Aguarde 4 segundos e, em seguida, atualize a página
                                        setTimeout(function() {
                                            location.reload();
                                        }, 4000);
                                    });
                                } else {
                                    const data = await response.json();
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Upload Error',
                                        text: data.message
                                    });
                                }
                            } catch (error) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: 'An error occurred while communicating with the server.'
                                });
                            }
                        };
                        imageReader.readAsDataURL(imageFile);
                    }
                };
                audioReader.readAsDataURL(audioFile);
            }
        };

        $('#comece').click(function() {
            Swal.fire({
                title: 'Login Form',
                html: `<input type="text" id="login" class="swal2-input" placeholder="Username">
                <input type="password" id="password" class="swal2-input" placeholder="Password">`,
                confirmButtonText: 'Sign in',
                focusConfirm: false,
                preConfirm: () => {
                const login = Swal.getPopup().querySelector('#login').value
                const password = Swal.getPopup().querySelector('#password').value
                if (!login || !password) {
                        Swal.showValidationMessage(`Please enter login and password`)
                }
                return { login: login, password: password }
                }
            }).then((result) => {
                Swal.fire(`
                    Login: ${result.value.login}
                    Password: ${result.value.password}
                `.trim())
            })
        });
        function uploadPic() {
            $('#uploadFormCapa').submit(function(e) {
                e.preventDefault();

                var formData = new FormData($(this)[0]);

                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        alert(response.message); // Ou faça algo com a resposta do Laravel
                        console.log(response.message);
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            });
        }
        $(document).ready(function() {

            $('#imageInput').change(function() {

                if (this.files && this.files[0]) {
                    var formData = new FormData();
                    formData.append('img_capa', this.files[0]);

                    var imgId = $(this).attr('id');
                    if (imgId === 'imgInput') {
                        formData.append('img_capa', ''); // Nada para img_capa
                    } else if (imgId === 'imgCapaInput') {
                        formData.append('img', ''); // Nada para img
                    }
                    $.ajax({
                        url: $('#uploadFormCapa').attr('action'),
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            console.log(response.message);
                        },
                        error: function(xhr, status, error) {
                            console.log(error);
                        }
                    });
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#img_capa').attr('src', e.target.result).css('display', 'block');
                    }

                    reader.readAsDataURL(this.files[0]);
                }
            });

            $('#imgFoto').change(function() {

                if (this.files && this.files[0]) {
                    var formData = new FormData();
                    formData.append('img', this.files[0]);

                    $.ajax({
                        url: $('#uploadFormFoto').attr('action'),
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            console.log(response.message);
                        },
                        error: function(xhr, status, error) {
                            console.log(error);
                        }
                    });
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#img_foto').attr('src', e.target.result);
                        $('#img_foto_header').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(this.files[0]);
                }
            });

            $('#foto_post').change(function() {

                if (this.files && this.files[0]) {
                    var formData = new FormData();
                    formData.append('img', this.files[0]);

                    $.ajax({
                        url: $('#postImg').attr('action'),
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            console.log(response.message);
                            location.reload();
                        },
                        error: function(xhr, status, error) {
                            console.log(error);
                        }
                    });
                    //location.reload();
                }
            });
        });
    </script>

    <script src={{ asset("assets/js/custom.js") }}></script>
    <script src={{ asset("assets/js/uikit.js") }}></script>
    <script src={{ asset("assets/bootstrap.js") }}></script>
    <script src={{ asset("assets/js/simplebar.js") }}></script>
</body>
</html>

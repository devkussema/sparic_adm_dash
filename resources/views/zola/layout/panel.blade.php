<!doctype html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <title>Simplest Social Network HTML Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Simplest is - Professional A unique and beautiful collection of UI elements">
    <link rel="icon" href="assets/images/favicon.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS 
    ================================================== -->
    <link rel="stylesheet" href={{ asset('assets/css/style.css') }}>
    <link rel="stylesheet" href="{{ asset('assets/css/uikit.css') }}">

    <!-- icons 
    ================================================== --> 
    <link rel="stylesheet" href="assets/css/icons.css"> 
    <script src="https://kit.fontawesome.com/815e388c50.js" crossorigin="anonymous"></script> 

    <!-- Google font
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://www.WebRTC-Experiment.com/RecordRTC.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jplayer/2.9.2/jplayer/jquery.jplayer.min.js" integrity="sha512-g0etrk7svX8WYBp+ZDIqeenmkxQSXjRDTr08ie37rVFc99iXFGxmD0/SCt3kZ6sDNmr8sR0ISHkSAc/M8rQBqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
    
    </style>
</head>
<body>
    <!-- Wrapper -->
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
            <button id="uploadAudio" onclick="uploadAudio()">Comece</button>
            <!--<form method="POST" action="{{ route('post.add.audio') }}" enctype="multipart/form-data">
                @csrf
                <input type="file" name="audio">
                <input type="file" name="image">
                <button>Enviar</button>
            </form>-->

            @yield('conteudo')

            <!-- Chat sidebar -->
            @include('partials/chat_sidebar')

            @include('partials/stories')
        </div>
    </div>

    <script>
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
                                const response = await fetch('/post/audio/add', {
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
        /*async function uploadAudio() {
            const { value: file } = await Swal.fire({
                title: 'Select image',
                input: 'file',
                inputAttributes: {
                    'accept': 'image/*',
                    'aria-label': 'Upload your profile picture'
                }
            });

            if (file) {
                const reader = new FileReader()
                reader.onload = (e) => {
                    Swal.fire({
                        title: 'Your uploaded picture',
                        imageUrl: e.target.result,
                        imageAlt: 'The uploaded picture'
                    })
                }
                reader.readAsDataURL(file)
            }
        } */
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
    
    <script src={{ asset("assets/js/uikit.js") }}></script>
    <script src={{ asset("assets/js/simplebar.js") }}></script>
    <script src={{ asset("assets/js/custom.js") }}></script>
</body>
</html>
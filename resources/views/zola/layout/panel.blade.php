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
            
            @yield('conteudo')

            <!-- Chat sidebar -->
            @include('partials/chat_sidebar')

            @include('partials/stories')
        </div>
    </div>
    
    <script src={{ asset("assets/js/uikit.js") }}></script>
    <script src={{ asset("assets/js/simplebar.js") }}></script>
</body>
</html>
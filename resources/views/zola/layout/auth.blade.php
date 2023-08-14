<!doctype html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <title>Simplest Social Network HTML Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Simplest is - Professional A unique and beautiful collection of UI elements">
    <link rel="icon" href={{ asset("assets/images/favicon.png")}}>

    <!-- CSS 
    ================================================== -->
    <link rel="stylesheet" href={{ asset("assets/css/style.css")}}>
    <link rel="stylesheet" href={{ asset("assets/css/uikit.css")}}>

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href={{ asset("assets/css/icons.css")}}>
    <script src="https://kit.fontawesome.com/815e388c50.js" crossorigin="anonymous"></script>

    <!-- Google font
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
</head>
<body class="bg-white">

    <div uk-height-viewport class="uk-flex uk-flex-middle">
        <div class="uk-width-2-3@m uk-width-1-2@s m-auto rounded uk-overflow-hidden shadow-lg">            
            @yield('conteudo')
        </div>
    </div>
    
    <script src={{ asset("assets/js/uikit.js")}}></script>
    <script src={{ asset("assets/js/simplebar.js")}}></script>
</body>
</html>
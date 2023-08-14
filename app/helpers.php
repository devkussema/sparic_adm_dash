<?php
// app/helpers.php

if (!function_exists('staticx')) {
    function staticx($path)
    {
        #$staticPath = resource_path('platform/' . env('THEME_NAME')); // Recupera o caminho do .env
        return asset('resources/platform/zola/' . $path);
    }
}

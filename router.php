<?php
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    $controller = match($uri){

        '/' => 'controllers/index.php',
        '/pacientes' => 'controllers/pacientes.php',
        '/medicos' => 'controllers/medicos.php',
        default => 'views/404.view.php',
    };
    
    require $controller;

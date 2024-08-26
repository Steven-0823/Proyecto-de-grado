<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Gastronav</title>

    <style>
        body {
            
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            position: relative;
        }

        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('../../Imagenes/Fondo.jpg');
           
            filter: blur(2.5px);
            z-index: -1;
        }

        .container {
            position: relative;
            z-index: 1;
        }

        .footer {
            background-color: #FF9C44;
            height: 250px;
            width: 100%;
        }

        .container_modify {
            height: 15rem;
        }

        .navegacion_menu {
            padding: 0;
            margin: 0;
            list-style: none;
            display: flex;
            gap: 2rem;
            margin-top: 1rem;
        }

        .link_nav {
            font-weight: 700;
            text-decoration: none;
            color: var(--colorTerciario);
        }

        .link_nav:hover {
            color: #000000;
        }
    </style>
</head>
<body>
    <div class="background"></div>
    <div class="container">
        {{ $slot }}
    </div>
    <footer class="footer">
        <div class="container container_modify">
            <h1> Gastronav </h1>
            <nav class="navegacion_footer">
                <ul class="navegacion_menu">
                    <li class="item_nav"><a class="link_nav" href="#">Sobre Nosotros</a></li>
                    <li class="item_nav"><a class="link_nav" href="#">Contáctenos</a></li>
                </ul>
            </nav>
        </div>
    </footer>
</body>
</html>

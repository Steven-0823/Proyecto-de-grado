<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
      body {
        background-image: url(../../Imagenes/Fondo.jpg);
      }

      .card {
        width: 24em;
        height: auto;
        background: #171717;
        transition: 1s ease-in-out;
        clip-path: polygon(30px 0%, 100% 0, 100% calc(100% - 30px), calc(100% - 30px) 100%, 0 100%, 0% 30px);
        border-top-right-radius: 20px;
        border-bottom-left-radius: 20px;
        display: flex;
        flex-direction: column;
        padding: 1em;
        box-sizing: border-box;
        position: relative;
      }

      .card span {
        font-weight: bold;
        color: white;
        text-align: center;
        font-size: 1.42em;
        margin-top: 0.5em;
      }

      .card .info {
        font-weight: 400;
        color: white;
        text-align: left;
        font-size: 0.9em;
        margin: 1em 0;
      }

      .card .img {
        width: 100%;
        height: 12em;
        background: white;
        border-radius: 15px;
        overflow: hidden;
      }

      .action-buttons {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        gap: 10px;
        margin-top: auto;
        align-items: center;
      }

      .btn {
        display: inline-block;
        padding: 0.5em 1em;
        border-radius: 25px;
        border: none;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        transition: .4s ease-in-out;
        cursor: pointer;
        font-size: 0.9em;
        box-sizing: border-box;
        width: 150px /* Adjusted width for better alignment */
      }

      .btn-delete {
        background: #dc3545;
        color: white;
      }

      .btn-delete:hover {
        background: #c82333;
      }

      .btn-edit {
        background:rgb(255, 187, 0);
        color: white;
      }

      .btn-edit:hover {
        background: rgb(255, 187, 0);
      }

      .btn-maps {
        background: #ffffff;
        height: 52px;
        color: rgb(0, 0, 0);
        font-size: 0.85em;
        width: 200px;
      }

      .btn-maps:hover {
        background: rgb(255, 187, 0);
        color: white;
      }

      .button {
        position: relative;
        overflow: hidden;
        height: 3rem;
        padding: 0 2rem;
        border-radius: 1.5rem;
        background: #3d3a4e;
        background-size: 400%;
        color: #fff;
        border: none;
        cursor: pointer;
        width: auto;
        text-align: center;
        font-weight: bold;
        line-height: 3rem;
        text-decoration: none;
      }

      .button:hover::before {
        transform: scaleX(1);
      }

      .button-content {
        color: white;
        position: relative;
        z-index: 1;
      }

      .button::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        transform: scaleX(0);
        transform-origin: 0 50%;
        width: 100%;
        height: inherit;
        border-radius: inherit;
        background: linear-gradient(
          82.3deg,
          rgba(150, 93, 233, 1) 10.8%,
          rgba(99, 88, 238, 1) 94.3%
        );
        transition: all 0.475s;
      }

      footer {
        color: #fff;
      }

      ul {
        padding: 0px;
      }

      ol, ul {
        margin-bottom: 0px;
      }

      .social-icon {
        padding: 0;
        margin-bottom: 0px;
        float: right;
      }

      .social-icon li {
        list-style: none;
        display: inline-block;
      }

      .social-icon li i {
        font-size: 14px;
        color: #262725;
        border: solid 2px #ffffff;
        height: 31px;
        width: 31px;
        text-align: center;
        vertical-align: middle;
        border-radius: 100px;
        line-height: 27px;
        margin-right: 15px;
        transition: 1s;
        background: #fff;
      }

      .social-icon li i:hover {
        border: solid 2px #262725;
        color: #ffffff;
        background: #262725;
      }

      .phone-no i {
        position: relative;
        margin-right: 14px;
        font-size: 43px;
        top: 5px;
      }

      .phone-no {
        margin-top: -22px;
        text-align: right;
      }

      .footer-day-time {
        padding-bottom: 30px;
        border-bottom: 2px solid #7a6f6f;
        padding-top: 14px;
        margin-bottom: 55px;
      }

      .footer-day-time ul li {
        display: inline;
        margin-right: 20px;
      }

      .footer-day-time ul li:last-child {
        margin-right: 0px;
      }

      .phone-no a {
        color: #fff;
        font-family: PlayfairDisplay-Black;
        font-size: 34px;
        font-weight: bold;
      }

      .footer-top {
        background: #2f2f2f;
        padding: 50px 0 50px;
      }

      .footer-top h4 {
        font-size: 19px;
        text-transform: uppercase;
        margin-bottom: 30px;
      }

      .footer-top p {
        font-size: 13px;
        line-height: 2;
      }

      footer p {
        margin-bottom: 0;
      }

      .footer-logo {
        display: block;
        margin-bottom: 32px;
      }

      .address1 li {
        list-style: none;
        position: relative;
        padding: 0px 0 14px 34px;
        line-height: 26px;
      }

      ul.address1 span {
        position: absolute;
        width: 40px;
        max-width: 40px;
        left: 0;
      }

      .address1 li a {
        color: #fff;
        text-decoration: none;
      }

      ul.address1 i {
        width: 20px;
        position: absolute;
        left: 0px;
        text-align: center;
        font-size: 28px;
        top: 0;
      }

      ul.address1 i.fa-envelope {
        font-size: 18px;
        top: 4px;
      }

      footer ul.social-icon {
        float: left;
      }

      footer .social-icon li i:hover {
        background: #b30909;
        border-color: #b30909;
      }

      .footer-bottom {
        background: rgb(255, 187, 0);
        padding: 10px 0px;
      }

      .footer-bottom ul li {
        display: inline;
        margin-right: 20px;
        font-size: 18px;
      }

      .footer-bottom ul li a {
        color: #fff;
      }

      .footer-bottom ul {
        float: right;
      }

      .footer-bottom ul li:last-child {
        margin-right: 0;
      }

      .copyright {
        font-size: 18px;
      }

      .newsletter input[type="email"] {
        padding: 0.5rem;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: calc(100% - 120px);
        margin-right: 15px;
      }

      .newsletter button {
        padding: 0.5rem 1rem;
        border: none;
        background-color: rgb(255, 187, 0);
        color: #fff;
        border-radius: 4px;
        cursor: pointer;
      }

      .newsletter button:hover {
        background-color: rgb(255, 187, 0);
      }
    </style>
    <title>Listado de PQRs</title>
  </head>
  <body>
    
    <x-app-layout>
      <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de PQRs') }}
          </h2>
          <a href="{{route('pqr.create')}}" class="button">
            <span class="button-content">Añadir PQRS</span>
        </a>
        </div>
      </x-slot>
      
      <div class="container mt-4">
        <div class="row">
            @foreach ($pqrs as $pqr)
            <div class="col-md-4 mb-4">
                <div class="card">
                  <div class="img">                     
                    <img src="{{$pqr->imagen_pqr}}" class="card-img-top" alt="Imagen del PQR" style="width: 100%; height: 100%; object-fit: cover; border-radius: 15px;">
                  </div>
                  <p class="info">
                      <strong>Descripción:</strong> {{$pqr->descripcion}}<br>
                      <strong>Categoría:</strong> {{$pqr->nombre_categoria}}<br>
                      <strong>Usuario:</strong> {{$pqr->nombre_usuario}}<br>
                  </p>

                  <div class="action-buttons">
                        <a href="{{route('pqr.edit', ['pqr' => $pqr->id]) }}" class="btn-edit btn">Editar</a>
                        <form action="{{ route('pqr.destroy', ['pqr' => $pqr->id]) }}" method="POST">
                            @method('delete')
                            @csrf
                            <input class="btn-delete btn" type="submit" value="Eliminar">
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
      </div>
    </x-app-layout>

    <footer>
      <div class="footer-top">
          <div class="container">
              <div class="footer-day-time">
                  <div class="row">
                      <div class="col-md-8">
                          
                      </div>
                      <div class="col-lg-4">
                          <div class="phone-no">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-4">
                      <h4>About us</h4>
                      <p>¡Hola, aventureros! Soy 'Gastronav', una mezcla vibrante de calidez, pasión y aventura. Me encanta explorar los sabores y lugares únicos de esta maravillosa ciudad y compartir esas experiencias con todos los que me rodean!</p>
                  </div>
                  <div class="col-md-4">
                      <h4>Information</h4>
                      <ul class="address1">
                          <li><i class="fa fa-map-marker"></i>Lorem Ipsum 132 xyz Lorem Ipsum</li>
                          <li><i class="fa fa-envelope"></i><a href="mailto:#">info@test.com</a></li>
                          <li><i class="fa fa-mobile" aria-hidden="true"></i> <a href="tel:12 34 56 78 90">12 34 56 78 90</a></li>
                      </ul>
                  </div>
                  <div class="col-md-4">
                      <h5>Suscríbete para recibir más notificaciones</h5>
                      <div class="newsletter">
                          <input type="email" placeholder="Introduce tu email">
                          <button>Suscribirse</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer-bottom">
          <div class="container">
              <div class="row">
                  <div class="col-sm-5">
                      <p class="copyright text-uppercase">Copyright © 2024 Gastronav</p>
                  </div>
              </div>
          </div>
      </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

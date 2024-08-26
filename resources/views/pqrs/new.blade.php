<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <title>Crear PQR</title>
    <style>
        body {
            background-image: url(../../Imagenes/Fondo.jpg);
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 20px;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
            background-color: #ffffff;
            padding: 30px;
            width: 1200px;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .title {
            font-size: 28px;
            color: rgb(255, 187, 0);
            font-weight: 600;
            letter-spacing: -1px;
            position: relative;
            display: flex;
            align-items: center;
            padding-left: 30px;
        }

        .title::before,
        .title::after {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            border-radius: 50%;
            left: 0px;
            background-color: rgb(255, 187, 0);
        }

        .title::before {
            width: 18px;
            height: 18px;
        }

        .title::after {
            width: 18px;
            height: 18px;
            animation: pulse 1s linear infinite;
        }

        .form-control, .form-select {
            width: 100%;
            padding: 10px 15px;
            border-radius: 10px;
        }

        .form-label {
            font-weight: 600;
            margin-bottom: 5px;
        }

        .btn-primary {
            background-color: rgb(255, 187, 0);
            border: none;
            color: #fff;
            padding: 12px 20px;
            border-radius: 10px;
            font-size: 16px;
            transition: .3s ease;
        }

        .btn-primary:hover {
            background-color: rgb(255, 187, 0);
            cursor: pointer;
        }

        .submit1 {
            border: none;
            text-decoration: none;
            outline: none;
            background-color: rgb(255, 187, 0);
            padding: 12px 20px;
            border-radius: 10px;
            color: #fff;
            font-size: 16px;
            transition: .3s ease;
        }
        .btn-delete {
        background: #dc3545;
        color: white;
      }

      .btn-delete:hover {
        background: #c82333;
      }

        @keyframes pulse {
            from {
                transform: scale(0.9);
                opacity: 1;
            }
            to {
                transform: scale(1.8);
                opacity: 0;
            }
        }
         /* Footer */

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
    padding:50px 0 50px;
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
  margin-bottom:0;
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
.footer-bottom ul li a{
    color:#fff;
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
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="title">
                {{ __('Agregar PQR') }}
            </h2>
        </x-slot>

        <div class="container">
            <div class="form-container">
                <form method="POST" action="{{ route('pqr.store') }}" id="create-form">
                    @csrf
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción:</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" aria-describedby="descripcionHelp" required>
                        @error('descripcion')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="imagen_pqr" class="form-label">Imagen URL:</label>
                        <input type="text" class="form-control" id="imagen_pqr" name="imagen_pqr" aria-describedby="imagenPqrHelp" required>
                        @error('imagen_pqr')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="categoria_id" class="form-label">Categoría:</label>
                        <select class="form-select" id="categoria_id" name="categoria_id" aria-label="Select categoria" required>
                            <option selected disabled>Seleccione una categoría</option>
                            @foreach($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                            @endforeach
                        </select>
                        @error('categoria_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <input type="hidden" name="email" value="{{ Auth::user()->email }}">

                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="{{ route('pqr.index') }}" class="btn-delete submit1">Cancelar</a>
                </form>
            </div>
        </div>
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
                          <p>¡Hola, aventureros! Soy 'Gastronav', una mezcla vibrante de calidez, pasión y aventura. Me encanta
                              explorar los sabores y lugares únicos de esta maravillosa ciudad y compartir esas experiencias con
                              todos los que me rodean! </p>
      
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
                          <h5>Suscribete para recibir mas notificaciones</h5>
                          <div class="newsletter">
                              <input type="email" placeholder="Introduce tu email">
                              <p></p>
                              <p></p>
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
                          <p class="copyright text-uppercase">Copyright © 2024 Gastronav
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </footer>
        
    </x-app-layout>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

    <script>
        document.getElementById('create-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Evitar el envío tradicional del formulario
            
            const form = event.target;
            const formData = new FormData(form);
            
            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json' // Esperar respuesta JSON
                },
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: data.message || 'PQR creado correctamente',
                        showConfirmButton: false,
                        timer: 2000
                    }).then(() => {
                        window.location.href = "{{ route('pqr.index') }}";
                    });
                } else {
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Error',
                        text: data.error || 'Error al crear el PQR',
                        showConfirmButton: true
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Error al crear el PQR',
                    text: 'Ocurrió un problema al procesar la solicitud.',
                    showConfirmButton: true
                });
            });
        });
    </script>
</body>
</html>

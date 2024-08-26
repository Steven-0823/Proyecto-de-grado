<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gastronav</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
           :root {
    --colorPrincipal: #D9D9D9;
    --colorSecundario: #FFC300;
    --colorTerciario: #ffffff;
    --colorCuarto: #DE1515;
    --colorquinto: #FF9C44;
    --colorsexto: #000000;

    --titulos: 'Arima Madurai', cursive;
    --parrafos: 'Mulish', sans-serif;

}

html {
    box-sizing: border-box;
    font-size: 62.5%
   
}

body {
    height: 100%;
    margin: 0;
    padding: 0;
    font-size: 1.6rem; 
 
}

*,*::after,*::before {
    box-sizing: inherit;
}


/**Globales**/

.contenedor {
    margin: 0 auto;
    width: 100%;

}

h1, h2 {
    font-family: var(--titulos);
}

h3, p, a {
    font-family: var(--parrafos);
}

img{
    max-width: 100%;
}

.gris {
    color: var(--colorPrincipal);
}

.amarillo {
    color: var(--colorSecundario);
}

.blanco {
    color: var(--colorTerciario);
}

.rojo {
    color: var(--colorCuarto);
}

.naranja {
    color: var(--colorquinto);
}

.ocultar {
    display: none;
}

.btn-cerrar {
    font-size: 2rem;
    font-weight: bold;
    color: var(--colorTerciario);
    position: absolute;
    top: 0;
    right: 50px;
    user-select: none;
}

.pantalla-completa {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background-color: rgba(0, 0, 0, .5);
    z-index: 4;
}

/*Agregar Animacion*/
@keyframes desplazamiento {
    0% {
        transform: translateX(100%);
    }

    100% {
        transform: translateX(0);
    }
}

.btn-cerrar:hover{
    cursor: pointer;
}

.btn{
    text-decoration: none;
    color: var(--colorTerciario);
    font-size: 2rem;
    text-transform: capitalize;
    padding: 1rem 5rem;
    border-radius: 5px;
    transition: all .3s ease-in-out;
}
@media(min-width: 768px){
    .btn{
        font-size: 2.2rem;
    }
}
.bordes{
    border: 4px solid var(--colorTerciario);
}
@media(min-width: 768px){
    .bordes{
        border: 4px solid var(--colorTerciario);
    }
}
.bordes:hover{
    color: var(--colorquinto);
    background-color: var(--colorTerciario);
}
.btn-rojo{
    background-color: var(--colorCuarto);
    font-weight: bold;
    display: inline-block;
    margin-top: 2rem;
    margin-bottom: 2rem;
}

.btn-amarillo{
    background-color: var(--colorSecundario);
    border: none;
    display: inline-block;
    margin-top: 1.6rem;
    font-family: var(--parrafos);
}
/*encabezado*/
.contenedor-navegacion {
    /*contenedor padre*/
    background-color: var(--colorsexto);
    position: relative;
    z-index: 5;
}

.contenido-navegacion {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.logo h2,
.navegacion a {
    color: var(--colorTerciario)
}

.navegacion a {
    text-decoration: none;
    font-size: 1.5rem;
    padding: 1.7rem;
    padding-left: 2.5rem;
    display: block;
    transition: color .3s ease-in-out;
    text-align: center;

}

@media( min-width:768px){
    .navegacion a{
        text-align: left;
    }
}

/*Acomodar para tableta*/
@media(min-width: 768px) {
    .navegacion a {
        text-align: left;
    }
}

/*Colores a los botones del menu pares*/
.navegacion a:nth-child(even):hover {
    color: var(--colorCuarto);
}

/*Colores a los botones del menu impares*/
.navegacion a:nth-child(odd):hover {
    color: var(--colorquinto);
}

.navegacion a:first-of-type {
    margin-top: 3rem;
}

.navegacion {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    height: 100vh;
    width: 25rem;
    padding: 2rem 1rem;
    background-color: var(--colorsexto);
    animation: desplazamiento .5s ease-in-out;
}

.sitiosturisticos:hover {
    cursor: pointer;
}

.sitiosturisticos span {
    background-color: var(--colorTerciario);
    display: block;
    width: 5rem;
    height: .5rem;
    margin-bottom: .5rem;
}

.texto-encabezado {
    position: absolute;
    z-index: 2;
    width: 100%;
    height: 80%;
    display: flex;  
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.texto-encabezado h2{
    color: var(--colorTerciario);
    font-size: 4rem;
}

@media(min-width: 768px){
    .texto-encabezado h2{
        font-size: 8rem;
    }
}

/*Video*/
.contenido-header {
    position: relative;
}

.contenido-header::before {
    content: " ";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, .5);
}

video {
    width: 100%;
    height: 100%;
}

/*Sobre nosotros*/
.contenedor-nosotros{
      padding-top: 5rem;
      background-color: #e1e1e1;

}
@media(min-width: 768px){
    .contenedor-nosotros{
        display: flex;
        justify-content: space-between;
    }
}
.texto-nosotros, .imagenes-nosotros{
    flex: 0 0 calc(50% - 1rem);
}
.texto-nosotros .bienvenida{
    font-size: 4rem;
    color: var(--colorquinto);
    text-align: center;
}
@media(min-width: 768px){
    .texto-nosotros .bienvenida{
        text-align: left;
    }
}
.imagenes-nosotros{
    display: flex;
    justify-content: space-between;
}
.texto-nosotros h1{
    font-size: 5rem;
    text-align: center;
}
@media(min-width: 768px){
    .texto-nosotros h1{
        text-align: left;
    }
}
.texto-nosotros p{
    font-size: 2rem;
}
@media(min-width: 768px){
    .texto-nosotros p{
        text-align: left;
    }
}
.imagenes-nosotros img{
    border-radius: 5px;
}
.imagen1, .imagenes2{
    flex: 0 0 calc(50% - 1rem);
}
.imagenes2 img{
    margin-bottom: 1.5rem;
}
.menu{
    padding-top: 4rem;
    overflow: hidden;

}

/*menu*/
.texto-queteinteresa{
    text-align: center;
    font-size: 3rem;
}

.botones-lugares{
    display: inline-block;
    margin-bottom: 2rem;
    
}

.botones-lugares button{
    flex: 0 0 calc(50% - 1rem);
    padding: 1rem 3rem;
    

}
@media(min-width: 768px){
    .botones-lugares{
        display: flex;
        flex-direction: row;
        justify-content: center;
        gap: 2rem;
      
    }
      
    .botones-lugares button{
        flex: unset;
    }
}

.lugares{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}
.lugar{
    display: flex;
    flex-direction: column;
    align-items: center;
   
}

@media(min-width:768px){
    .contenedor__lugares{
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 2rem;
        margin-bottom: 2rem;
    }
}


.contenido__main{
    width: 200%;
    display: flex;
    gap: 2rem;
    transition: all .5s ease;
    transform: translateX(0%);
       
  }

.contenedor__restaurantes{
    width: 100%;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 2rem;
}

.img__lugares{
    border: 4px solid var(--colorquinto);
    border-radius: 5px;
    height: 25rem;
    
}

.aggcomentario button {
    background-color: var(--colorquinto);
    color: var(--colorTerciario);
    border: none;
    padding: 0.5rem 1rem;
    margin: 0.5rem;
    border-radius: 5px;
    cursor:pointer;
}

.separador{
    background-image: url(/Imagenes/Vista.jpg);
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    position: relative;
    z-index: 2;
}
.separador::before{
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, .5);
    z-index: -1;
}
.contenido-separador{
    padding: 10rem;
}
.contenido-separador h2{
    font-size: 5rem;
    color: var(--colorTerciario);

}
.contenido-separador p{
    color: var(--colorTerciario);
    font-size: 3rem;
}

/**Formulario Contacto**/
.formulario-contacto{
    padding-top: 5rem;
}

@media(min-width: 768px){
    .formulario-contacto{
        display: flex;
    
    }
}
.informacion-contacto{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.informacion-contacto, .formulario{
    flex: 0 0 calc(50% - 1rem);
}
.informacion-contacto{
    background-color: var(--colorsexto);
    height: 60rem;
}
.informacion-contacto h3, .informacion-contacto p{
    color:var(--colorTerciario);
}
.informacion-contacto h3{
    font-size: 4rem;
    font-family: var(--titulos);
}
.informacion-contacto p{
    font-size: 3rem;

}
.formulario{
    padding: 5rem;
}

.input-formulario label{
    display: block;
    font-size: 2rem;
    font-family: var(--parrafos);
    margin-bottom: 1.5rem;
}

.input-formulario input, .input-formulario textarea{
    width: 100%;
}

.input-formulario input, .input-formulario textarea{
    padding: .8rem 1.6rem;
    border: 1px solid #e1e1e1;
    border-radius: 5px;
    outline: none;
    font-family: var(--parrafos);
}
.input-formulario textarea{
    height: 15rem;
    resize: none;
}

/*pie-pagina*/

.pie-pagina{
    margin-top: .5rem;
    background-color: rgb(20,20,20);
    padding: 1rem;
}
.contenedor-piepagina{
    display: flex;
}
.info{
    flex: 0 0 calc(25% - 1rem);
}
.info h3, .info p{
    color: var(--colorTerciario);
    text-align: center;
}
.info h3{
    font-size: 2.2rem;
}
.info p{
    font-size: 1.8rem;
}
.info input[type="email"]{
    font-family: var(--parrafos);
    display: inline-block;
    margin-bottom: 1rem;
    padding: 1rem;
    border-radius: 5px;
    outline: none;
    width: 100%;
}

.info input[type="submit"]{
    padding: .5rem 2rem;
    font-size: 1.8rem;
    border-radius: 0;
}
/* validaciones */

.error{
    background-color: #D83B38;
    padding: 1rem;
    color: #ffffff;
    text-align: center;
    font-weight: 700;

}

.correcto{
    background-color: #00DB10;
    padding: 1rem;
    color: #ffffff;
    text-align: center;
    font-weight: 700;

}
/* Estilos básicos del navbar */
.navbar {
    display: flex;
    justify-content: space-around;
    align-items: center;
   
    padding: 10px;
    color: white;
    font-family: Arial, sans-serif;
}

.navbar a {
    display: flex;
    align-items: center;
    color: white;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
}

.navbar a.active {
    background-color: #555;
    color: #f0f0f0;
}

.navbar a:hover {
    background-color: #444;
    color: #e0e0e0;
}

.navbar .navbar-logo {
    width: 20px; /* Ajusta el tamaño según sea necesario */
    height: auto;
    margin-right: 8px;
}

.navbar .nav-text {
    font-size: 14px;
}

.navbar .logo {
    font-weight: bold;
}
.ocultar {
            display: none;
        }
/* Estilos del menú hamburguesa */
.hamburger-container {
    display: flex;
    align-items: center;
    margin-left: auto; /* Para empujar el menú hamburguesa al extremo derecho */
    position: relative; /* Para que el menú desplegable se posicione en relación con este contenedor */
}

.label-check {
    display: none;
}

.hamburger-label {
    width: 24px; /* Ajusta el tamaño del botón hamburguesa */
    height: 18px; /* Ajusta la altura del botón hamburguesa */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    cursor: pointer;
    position: absolute;
}

.hamburger-label div {
    width: 24px; /* Ajusta el tamaño de las líneas */
    height: 3px; /* Ajusta el grosor de las líneas */
    background-color: #fff;
    border-radius: 3px; /* Opcional: para bordes redondeados */
    transition: all 0.3s;
}

.line1 {
    transition: all 0.3s;
}

.line2 {
    transition: 0.3s;
}

.line3 {
    transition: 0.3s;
}

#label-check:checked + .hamburger-label .line1 {
    transform: rotate(45deg) translate(5px, 5px);
}

#label-check:checked + .hamburger-label .line3 {
    transform: rotate(-45deg) translate(5px, -5px);
}

#label-check:checked + .hamburger-label .line2 {
    opacity: 0;
}

/* Estilos del menú desplegable */
.dropdown-menu {
    display: none;
    position: absolute;
    top: 100%; /* Para que se muestre justo debajo del navbar */
    right: 0;
    background-color: #333;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    z-index: 10; /* Asegura que el menú esté sobre otros elementos */
}

.dropdown-item {
    display: block;
    color: #fff;
    text-decoration: none;
    padding: 10px;
    border-radius: 3px;
    transition: background-color 0.3s;
}
.dropdown-item:hover {
    background-color: #555;
}

#label-check:checked ~ .dropdown-menu {
    display: block;
}

        
        </style>
    </head>
    <body>
        <div>
            <div>
                <div>
                    <header class="encabezado">
                        <div class="contenedor-navegacion">
                            <div class="contenido-navegacion contenedor">
                                <div class="logo">
                                    <h2> <span class="blanco">Gas</span><span class="amarillo">tro</span><span class="rojo">nav</span></h2>
                                </div>
                               
                                <nav class="navbar">
                                    @if (Auth::check())
                                        <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }} logo">
                                            <img src="{{ asset('Imagenes/home-logo.png') }}" class="navbar-logo">
                                            <span class="nav-text">Home</span>
                                        </a>
                                        <a href="{{ url('/Restaurantes') }}" class="{{ request()->is('Restaurantes') ? 'active' : '' }} value">
                                            <img src="{{ asset('Imagenes/restaurants-logo.png') }}"  class="navbar-logo">
                                            <span class="nav-text">Restaurantes</span>
                                        </a>
                                        <a href="{{ url('/Lugares') }}" class="{{ request()->is('Lugares') ? 'active' : '' }} value">
                                            <img src="{{ asset('Imagenes/sites-logo.png') }}" class="navbar-logo">
                                            <span class="nav-text">Sitios</span>
                                        </a>
                                        <div class="hamburger-container">
                                            <input class="label-check" id="label-check" type="checkbox">
                                            <label for="label-check" class="hamburger-label">
                                                <div class="line1"></div>
                                                <div class="line2"></div>
                                                <div class="line3"></div>
                                            </label>
                                            <!-- Menú desplegable -->
                                            <div class="dropdown-menu">
                                                <a href="{{ route('profile.edit') }}" class="dropdown-item">{{ __('Profile') }}</a>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();">
                                                        {{ __('Log Out') }}
                                                    </button>
                                                </form>
                                                <a href="{{ route('pqr.index') }}" class="dropdown-item">{{ __('PQRS') }}</a>
                                                @if (Auth::check() && auth()->user()->isAdmin())
                                                    <a href="{{ route('roles.index') }}" class="dropdown-item">{{ __('Roles') }}</a>
                                                    <a href="{{ route('categoria.index') }}" class="dropdown-item">{{ __('Categorias') }}</a>
                                                    <a href="backup.php" class="dropdown-item">Realizar Back-Up</a>
                                                @endif
    
                                            </div>
                                        </div>
                                        
                                    @else
                                        <a href="{{ url('/login') }}" class="{{ request()->is('login') ? 'active' : '' }} value">
                                            
                                            <span class="nav-text">Log In</span>
                                        </a>
                                        <a href="{{ url('/register') }}" class="{{ request()->is('register') ? 'active' : '' }} value">
                                           
                                            <span class="nav-text">Register</span>
                                        </a>
                                        
                                    @endif
                                  
                                </nav>
                                
                            </div>
                        </div>
                        <div class="contenido-header">
                            <div class="contenedor-encabezado">
                                <div class="texto-encabezado">
                                    <h2> Bienvenido! </h2>
                                    <a href="#main" class="btn bordes">Ir al Menú</a>
                                </div>
                                <video autoplay loop>
                                    <source auto loop src="{{ asset('Imagenes/Gastronavv.mp4') }}">
                                </video>
                            </div>
                        </div>
                    </header>
                    <div id="nos" class="contenedor-nosotros">
                        <div class="contenedor contenedor-nosotros">
                            <div class="texto-nosotros">
                                <p class="bienvenida">Bienvenido a!</p>
                                <h1>Gastronav</h1>
                                <p>¡Hola, aventureros! Soy 'Gastronav', una mezcla vibrante de calidez, pasión y aventura. Me encanta
                                    explorar los sabores y lugares únicos de esta maravillosa ciudad y compartir esas experiencias con
                                    todos los que me rodean!
                                </p>
                                <a href="#contac" class="btn btn-rojo">Contactenos</a>
                            </div>
                            <div class="imagenes-nosotros">
                                <div class="imagenes2">
                                    <img  src="https://i.ibb.co/qjRhsh3/Imagen2.jpg" alt="iglesia">
                                    <img src="https://i.ibb.co/cC9tGSX/imagen3.jpg" alt="Caliturismo">
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <main id="main" class="menu contenedor">
                        <h2 class="texto-queteinteresa">¿Qué te interesa hoy?</h2>
                        <div class="botones-lugares">
                            <button class="btn btn-amarillo" onclick="mostrar('lugares')">Lugares</button>
                            <button class="btn btn-amarillo" onclick="mostrar('restaurantes')">Restaurantes</button>
                        </div>
                    
                        <div id="lugares" class="contenedor__lugares">
                            @foreach ($lugares as $lugar)
                                <div class="lugar">
                                    <img class="img__lugares" src="{{ $lugar->imagen }}" alt="{{ $lugar->name }}">
                                    <h2>{{ $lugar->name }}</h2>
                                    <p>{{ $lugar->descripcion }}</p>
                                    <div class="aggcomentario">
                                        <button>Agregar Comentario</button>
                                        <a target="_blank" href="https://www.google.com/maps/search/?api=1&query={{ urlencode($lugar->direccion) }}" target="_blank" class="btn-maps btn"><button>¿Como
                                            Llegar?</button></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    
                        <div id="restaurantes" class="contenedor__restaurantes ocultar">
                            @foreach ($restaurantes as $restaurante)
                                <div class="lugar">
                                    <img class="img__lugares" src="{{ $restaurante->imagen }}" alt="{{ $restaurante->name }}">
                                    <h2>{{ $restaurante->name }}</h2>
                                    <p>{{ $restaurante->descripcion }}</p>
                                    <div class="aggcomentario">
                                        <button>Agregar Comentario</button>
                                        <a target="_blank" href="https://www.google.com/maps/search/?api=1&query={{ urlencode($restaurante->direccion) }}" target="_blank" class="btn-maps btn"><button>¿Como
                                            Llegar?</button></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </main>
                    
                
                    <div class="separador">
                        <div class="contenido-separador contenedor">
                            <h2> Vive experiencias nuevas </h2>
                            <p> Disfruta cada uno de los lugares que nos brinda la ciudad de Cali</p>
                        </div>
                    </div>
                    <div id="contac" class="formulario-contacto contenedor">
                        <div class="informacion-contacto">
                            <img data-src="/Imagenes/Logo.png">
                            <h3>CONTACTENOS</h3>
                        </div>
                
                        <form class="formulario">
                            <div class="input-formulario">
                                <label for="nombre">Nombre</label>
                                <input type="text" placeholder="Sebastian" id="nombre">
                            </div>
                            <div class="input-formulario">
                                <label for="apellidos">Apellidos</label>
                                <input type="text" placeholder="Milton" id="apellidos">
                            </div>
                            <div class="input-formulario">
                                <label for="correo">Correo</label>
                                <input type="email" placeholder="miltonp@gmail.com" id="correo">
                            </div>
                            <div class="input-formulario">
                                <label for="telefono">Telefono</label>
                                <input type="number" placeholder="3134432345" id="telefono">
                            </div>
                            <div class="input-formulario">
                                <label for="mensaje">Mensaje</label>
                                <textarea id="mensaje"></textarea>
                            </div>
                            <div class="input-formulario">
                                <input type="submit" class="btn btn-amarillo" value="Enviar">
                            </div>
                
                        </form>
                    </div>
                    <footer class="pie-pagina">
                        <div class="contenedor-piepagina contenedor">
                            <div class="info">
                                <h3>Direccion</h3>
                                <p>Cra 23 #25-32</p>
                            </div>
                            <div class="info">
                                <h3>Días especiales</h3>
                                <p>Miercoles y Viernes 6pm - 8pm</p>
                                <p>+57 313 4432345</p>
                            </div>
                            <div class="info">
                                <h3>Horarios</h3>
                                <p>Lunes a viernes 8am - 5pm</p>
                            </div>
                            <div class="info">
                                <h3>Noticias</h3>
                                <p>Suscribete para recibir mas notificaciones</p>
                                <input type="email" placeholder="Tu correo">
                
                                <input type="submit" class="btn btn-amarillo btn__suscripcion" value="Suscribirse">
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </body>
    <script>
        function mostrar(tipo) {
            document.getElementById('lugares').classList.add('ocultar');
            document.getElementById('restaurantes').classList.add('ocultar');
            document.getElementById(tipo).classList.remove('ocultar');
        }

        // Inicialmente mostrar lugares
        mostrar('lugares');
    </script>
</html>

<div class="contenedor-navegacion">
    <div class="contenido-navegacion contenedor">
        <div class="logo">
            <h2>
                <span class="blanco">Gas</span>
                <span class="amarillo">tro</span>
                <span class="rojo">nav</span>
            </h2>
        </div>
        <nav class="navbar">
            <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }} logo">
                <img src="{{ asset('Imagenes/home-logo.png') }}" class="navbar-logo" alt="Home">
                <span class="nav-text">Home</span>
            </a>
            <a href="{{ url('/Restaurantes') }}" class="{{ request()->is('Restaurantes') ? 'active' : '' }} value">
                <img src="{{ asset('Imagenes/restaurants-logo.png') }}" class="navbar-logo" alt="Restaurantes">
                <span class="nav-text">Restaurantes</span>
            </a>
            <a href="{{ url('/Lugares') }}" class="{{ request()->is('Lugares') ? 'active' : '' }} value">
                <img src="{{ asset('Imagenes/sites-logo.png') }}" class="navbar-logo" alt="Sitios">
                <span class="nav-text">Sitios</span>
            </a>
            <!-- Botón de menú hamburguesa y checkbox -->
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
                    @if(auth()->user()->isAdmin())
                <a href="{{ route('roles.index') }}" class="dropdown-item">{{ __('Roles') }}</a>
                <a href="{{ route('categoria.index') }}" class="dropdown-item">{{ __('Categorias') }}</a>
                <a href="backup.php" class="dropdown-item">Realizar Back-Up</a>
            @endif
                </div>
            </div>
        </nav>
    </div>
</div>


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

.contenedor-navegacion {
    background-color: rgb(0, 0, 0);
    position: relative;
    z-index: 5;
}

.contenido-navegacion {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.navbar {
    display: flex;
    align-items: center;
    padding: 10px 20px; /* Ajusta el padding aquí si usas esta opción */
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
    /* Usa solo una de estas dos opciones para mover los enlaces */
    margin-left: -10px; /* Ajusta este valor para mover los enlaces hacia la izquierda */
    /* padding-left: 5px; /* Alternativamente, ajusta el padding izquierdo si prefieres esta opción */
}

.navbar a.active {
    background-color: #555;
    color: #f0f0f0;
}

.navbar a:hover {
    background-color: #444;
    color: #e0e0e0;
}

.logo h2,
.navbar a {
    color: var(--colorTerciario);
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

.navbar .navbar-logo {
    width: 20px;
    height: auto;
    margin-right: 8px;
}

.navbar .nav-text {
    font-size: 14px;
}

.navbar .logo {
    font-weight: bold;
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
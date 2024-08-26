<x-guest-layout>
    <div class="fondobody">
        <!-- Iconos de redes sociales -->
        <div class="iconos_redes">
            <a href="https://web.facebook.com/?locale=es_LA&_rdc=1&_rdr" target="_blank">
                <img class="imagen__redes" src="{{ asset('imagenes/facebook.svg') }}" alt="facebook">
            </a>
            <a href="https://www.instagram.com/" target="_blank">
                <img class="imagen__redes" src="{{ asset('imagenes/instagram.svg') }}" alt="instagram">
            </a>
        </div>
        <!-- Logo -->
        <div class="container1">
            <a href="/">
                <img src="{{ asset('imagenes/Logo.png') }}" alt="Logo" class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </div>
        <!-- Formulario -->
        <div class="container1">
            <form method="POST" action="{{ route('register') }}" class="form1">
                @csrf
                <p class="title1">Register</p>
                <p class="message">Signup now and get full access to our app.</p>

                <!-- Nombre -->
                <label>
                    <input class="input3" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="">
                    <span>Firstname</span>
                    @error('name')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </label>

                <!-- Email -->
                <label>
                    <input class="input3" id="email" type="email" name="email" value="{{ old('email') }}" required placeholder="">
                    <span>Email</span>
                    @error('email')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </label>

                <!-- Password -->
                <label>
                    <input class="input3" id="password" type="password" name="password" required placeholder="">
                    <span>Password</span>
                    @error('password')
                        <ul class="text-red-600">
                            @foreach($errors->get('password') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @enderror
                </label>

                <!-- Confirm Password -->
                <label>
                    <input class="input3" id="password_confirmation" type="password" name="password_confirmation" required placeholder="">
                    <span>Confirm password</span>
                    @error('password_confirmation')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </label>

                <!-- Checkbox de términos y condiciones -->
                <div class="terminoycondi">
                    <input class="termycondi" type="checkbox" value="" id="checkterm"/>
                    <label class="termycondi_label" for="checkterm">Estoy de acuerdo con los <a href="#!">Terminos y condiciones</a></label>
                </div>

                <!-- Botón de submit -->
                <button type="submit" class="submit1">Submit</button>

                <!-- Link de inicio de sesión -->
                <p class="signin1">Already have an account? <a href="{{ route('login') }}">Signin</a></p>
            </form>
        </div>
    </div>
    <style>
    

.iconos_redes {
    max-width: 120rem;
    margin: 0 auto;
    display: flex;
    justify-content: end;
    
}

.container1 {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 2rem;
}

.form1 {
    display: flex;
    flex-direction: column;
    gap: 10px;
    background-color: #ffffff;
    padding: 30px;
    width: 450px;
    border-radius: 20px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

.title1 {
    font-size: 28px;
    color: rgb(255, 187, 0);
    font-weight: 600;
    letter-spacing: -1px;
    position: relative;
    display: flex;
    align-items: center;
    padding-left: 30px;
}

.title1::before,
.title1::after {
    position: absolute;
    content: "";
    height: 16px;
    width: 16px;
    border-radius: 50%;
    left: 0px;
    background-color: rgb(255, 187, 0);
}

.title1::before {
    width: 18px;
    height: 18px;
    background-color: rgb(255, 187, 0);
}

.title1::after {
    width: 18px;
    height: 18px;
    animation: pulse 1s linear infinite;
}

.message,
.signin1 {
    color: rgba(88, 87, 87, 0.822);
    font-size: 14px;
}

.signin1 {
    text-align: center;
}

.signin1 a {
    color: rgb(255, 187, 0);
}

.signin1 a:hover {
    text-decoration: underline rgb(255, 187, 0);
}

.form1 label {
    position: relative;
}

.input3 {
    width: 100%;
    padding: 10px 10px 20px 10px;
    outline: 0;
    border: 1px solid rgba(105, 105, 105, 0.397);
    border-radius: 10px;
}

.input3 + span {
    position: absolute;
    left: 10px;
    top: 15px;
    color: grey;
    font-size: 0.9em;
    cursor: text;
    transition: 0.3s ease;
}

.input3:focus + span,
.input3:not(:placeholder-shown) + span {
    top: 0px;
    font-size: 0.7em;
    font-weight: 600;
}

.submit1 {
    border: none;
    outline: none;
    background-color: rgb(255, 187, 0);
    padding: 10px;
    border-radius: 10px;
    color: #fff;
    font-size: 16px;
    transition: .3s ease;
}

.submit1:hover {
    background-color: rgb(255, 187, 0);
    cursor: pointer;
}

.terminoycondi {
    display: flex;
    align-items: center;
    margin-top: 10px;
}

.termycondi {
    margin-right: 5px;
}

.termycondi_label a {
    color: rgb(255, 187, 0);
    text-decoration: none;
}

.termycondi_label a:hover {
    text-decoration: underline;
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

    </style>
</x-guest-layout>

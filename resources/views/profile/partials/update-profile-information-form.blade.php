<section>
    <header>
        <h2 class="title1">
            {{ __('Información del Perfil') }}
        </h2>

        <p class="message mt-1">
            {{ __("Actualiza la información de perfil de tu cuenta y tu dirección de correo electrónico.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="form3 mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="mb-3">
            <label for="name" class="form-label">{{ __('Nombre') }}</label>
            <input id="name" name="name" type="text" class="input4 mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Correo Electrónico') }}</label>
            <input id="email" name="email" type="email" class="input4 mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="message text-sm mt-2">
                        {{ __('Tu dirección de correo electrónico no está verificada.') }}

                        <button form="send-verification" class="underline text-sm hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Haz clic aquí para reenviar el correo de verificación.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('Un nuevo enlace de verificación ha sido enviado a tu dirección de correo electrónico.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="submit1">{{ __('Guardar') }}</button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="message text-sm"
                >{{ __('Guardado.') }}</p>
            @endif
        </div>
    </form>
</section>

<style>
    .form3 {
        display: flex;
        flex-direction: column;
        gap: 15px;
        background-color: #ffffff;
        padding: 30px;
        width:  1140px; /* Ajuste el ancho para ser flexible */
        border-radius: 20px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        margin: 0 auto; /* Centra el formulario horizontalmente */
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

    .message {
        color: rgba(88, 87, 87, 0.822);
        font-size: 14px;
    }

    .input4 {
        width: 98%;
        padding: 10px 15px;
        outline: 0;
        border: 1px solid rgba(105, 105, 105, 0.397);
        border-radius: 10px;
    }

    .input4 + span {
        position: absolute;
        left: 15px;
        top: 15px;
        color: grey;
        font-size: 0.9em;
        cursor: text;
        transition: 0.3s ease;
    }

    .input4:focus + span,
    .input4:not(:placeholder-shown) + span {
        top: 0px;
        font-size: 0.7em;
        font-weight: 600;
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

    .submit1:hover {
        background-color: rgb(255, 187, 0);
        cursor: pointer;
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

<section>
    <header>
        <h2 class="title1">
            {{ __('Actualizar Contraseña') }}
        </h2>

        <p class="message mt-1">
            {{ __('Asegúrate de que tu cuenta esté utilizando una contraseña larga y aleatoria para mantenerla segura.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="form2">
        @csrf
        @method('put')

        <div class="mb-3">
            <label for="update_password_current_password" class="form-label">{{ __('Contraseña Actual') }}</label>
            <input id="update_password_current_password" name="current_password" type="password" class="input5 mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div class="mb-3">
            <label for="update_password_password" class="form-label">{{ __('Nueva Contraseña') }}</label>
            <input id="update_password_password" name="password" type="password" class="input5 mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div class="mb-3">
            <label for="update_password_password_confirmation" class="form-label">{{ __('Confirmar Contraseña') }}</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="input5 mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="submit1">{{ __('Guardar') }}</button>

            @if (session('status') === 'password-updated')
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
  

    .form2 {
    display: flex;
    flex-direction: column;
    gap: 15px;
    background-color: #ffffff;
    padding: 30px;
    width: 1140px; /* Ajuste el ancho para ser flexible */
    border-radius: 20px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
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

.input5 {
    width: 98%;
    padding: 10px 15px;
    outline: 0;
    border: 1px solid rgba(105, 105, 105, 0.397);
    border-radius: 10px;
}

.input5 + span {
    position: absolute;
    left: 15px;
    top: 15px;
    color: grey;
    font-size: 0.9em;
    cursor: text;
    transition: 0.3s ease;
}

.input5:focus + span,
.input5:not(:placeholder-shown) + span {
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

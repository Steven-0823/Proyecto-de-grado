<section>
    <header>
        <h2 class="title1">
            {{ __('Delete Account') }}
        </h2>

        <p class="message mt-1">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="submit1"
    >{{ __('Delete Account') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="form1 p-6">
            @csrf
            @method('delete')

            <h2 class="title1">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="message mt-1">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mb-3">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="input3 mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end gap-4">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="submit1">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
<style>
    .form1 {
    display: flex;
    flex-direction: column;
    gap: 15px;
    background-color: #ffffff;
    padding: 30px;
    width: 100%; /* Ajuste el ancho para ser flexible */
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

.input3 {
    width: 100%;
    padding: 10px 15px;
    outline: 0;
    border: 1px solid rgba(105, 105, 105, 0.397);
    border-radius: 10px;
}

.input3 + span {
    position: absolute;
    left: 15px;
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
<x-app-layout>

    <div class="container1 py-12">
        <div class="form1 max-w-7xl mx-auto space-y-6">
            <!-- Formulario de actualización de información de perfil -->
            <div class="mb-3">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Formulario de actualización de contraseña -->
            <div class="mb-3">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Formulario de eliminación de cuenta -->
            <div class="mb-3">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
   
    
    
</x-app-layout>


<style>

/*Diseño general de la pagina*/

    body {
        background-image: url(../../Imagenes/Fondo.jpg);
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        margin: 0;
        padding: 0;
        min-height: 100vh;
    }

    .container1 {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin-top: 2rem;
        width: 1800px;
        padding: 20px;
    }

    .form1 {
        display: flex;
        flex-direction: column;
        gap: 15px; /* Increase gap for better spacing */
        background-color: #ffffff;
        padding: 30px;
        width: 1200px; /* Increase width of the form */
        border-radius: 20px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Add subtle shadow for better visibility */
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

    .input3 {
        width: 100%;
        padding: 10px 15px; /* Adjust padding for better spacing */
        outline: 0;
        border: 1px solid rgba(105, 105, 105, 0.397);
        border-radius: 10px;
    }

    .input3 + span {
        position: absolute;
        left: 15px; /* Adjust position */
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
        padding: 12px 20px; /* Adjust padding for better appearance */
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
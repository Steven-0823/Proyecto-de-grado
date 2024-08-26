<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
{
    $messages = [
        'password.regex' => 'La contraseña debe tener al menos 8 caracteres',
        'password.regex'=> 'Debe incluir una mayúscula, un número y un carácter especial.',
        'password.min' => 'La contraseña debe tener al menos :min caracteres.',
        'password.confirmed' => 'Las contraseñas no coinciden.',
    ];

    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
        'password' => [
            'required',
            'string',
            'min:8', // Mínimo 8 caracteres
            'regex:/[A-Z]/', // Al menos una letra mayúscula
            'regex:/[0-9]/', // Al menos un número
            'regex:/[@$!%*#?&]/', // Al menos un carácter especial
            'confirmed',
        ],
    ], $messages);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    event(new Registered($user));

    Auth::login($user);

    return redirect(route('dashboard'));
}

}

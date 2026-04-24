<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Método para procesar el login
    public function login(Request $request)
    {
        // 1. Validar los datos recibidos del formulario
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 2. Intentar autenticar al usuario
        // Auth::attempt verifica automáticamente si el email existe
        // y si la contraseña (encriptada) coincide
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // CAMBIO: Ahora redirigimos al panel de inventario en lugar de la raíz
            return redirect()->intended('/inventory');
        }

        // 3. Si falla, regresamos al login con un mensaje de error
        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ])->onlyInput('email');
    }

    // Método para cerrar sesión
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirigimos al inicio (donde está el formulario de login) al cerrar sesión
        return redirect('/');
    }
}

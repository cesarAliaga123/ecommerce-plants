<?php

// app/Http/Controllers/Auth/LoginController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/'; // Redirección predeterminada

    // Sobrescribir el método authenticated para redirigir según el nivel de usuario
    protected function authenticated(Request $request, $user)
    {
        if ($user->user_level_id == 1) { // Asumiendo que el nivel 1 es administrador
            return redirect()->route('admin.dashboard');
        } else { // Nivel de usuario normal
            return redirect()->route('user.dashboard');
        }
    }

    // Cerrar sesión
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}

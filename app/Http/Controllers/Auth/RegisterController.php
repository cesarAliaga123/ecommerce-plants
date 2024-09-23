<?php
// app/Http/Controllers/Auth/RegisterController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/dashboard'; // Redirige después del registro exitoso

    // Mostrar el formulario de registro
    public function showRegistrationForm()
    {
        return view('auth.sign'); // Cargar la vista del registro de usuarios
    }

    // Validación personalizada para los nuevos campos
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],  // Apellidos
            'phone' => ['required', 'string', 'max:15'],     // Teléfono
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    // Crear el usuario con el nivel de usuario asignado automáticamente
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],     // Guardar apellidos
            'phone' => $data['phone'],         // Guardar teléfono
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'user_level_id' => 2, // Asignar el nivel de "usuario" automáticamente (asumido 2 para usuario)
        ]);
    }

     // Sobrescribir el método de redirección según el tipo de usuario
     protected function redirectTo()
     {
         return '/user/dashboard'; // Redirigir a la página del usuario después del registro
     }
}




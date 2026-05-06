<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // 1. Validación
        $data = $request->validate([
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', 'min:6'],
            'codigo' => ['required', 'numeric', 'unique:users,codigo'],
        ]);

        // 2. Crear usuario
        $user = User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'codigo' => $data['codigo'],
        ]);

        // 3. Redirigir (puedes también logear automáticamente)
        return redirect()->route('login')->with('success', 'Cuenta creada');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function registro(Request $request)
    {
        try {

            $data = $request->validate([
                'email' => ['required', 'email', 'unique:users,email'],
                'password' => ['required', 'confirmed', 'min:6'],
                'codigo' => ['required', 'numeric', 'unique:users,codigo'],
            ]);

            User::create([
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'codigo' => $data['codigo'],
            ]);

            return redirect()->route('home')
                ->with('success', 'Cuenta creada correctamente');

        } catch (\Exception $e) {

            return back()->withErrors([
                'error' => $e->getMessage()
            ]);

        }
    }
}
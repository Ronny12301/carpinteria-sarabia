<?php

namespace App\Http\Controllers;
use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{
    public function login()
    {
        if (auth()->check()) {
            return redirect()->route('home');
        }

        if (User::count() === 0) {
            return redirect()->route('register');
        }
        return view('auth.login');
    }

    public function attemptLogin(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required|max:100',
            'password' => 'required',
        ]);

        
        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect(route('home'))->with('success','Sesión iniciada.');
        }

        throw ValidationException::withMessages([
            'name' => 'El usuario o contraseña son incorrectos.'
        ]);
        
    }

    public function logout() 
    {
        auth()->logout();
        return redirect()->route('home');
    }

    public function register()
    {
        if (User::count() > 0) {
            return redirect()->route('login');
        }
        return view('auth.register');
    }

    public function create(AuthRequest $request) 
    {
        $credentials = $request->validated();

        if ($credentials['password'] !== $credentials['confirm-password']) {
            throw ValidationException::withMessages([
                'password' => 'Las contraseñas no coinciden.'
            ]);
        }

        $credentials['password'] = bcrypt($credentials['password']);

        $user = User::create($credentials);

        auth()->login($user);

        return redirect()->route('home');
    }
}

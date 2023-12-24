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
            return redirect(route('home'));
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
        if (auth()->check()) {
            return redirect()->route('usuarios.create');
        }
        else if (User::count() > 0) {
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

        if (auth()->check()) {
            return redirect()->route('usuarios.index')->with('success', 'Usuario creado.');
        }

        auth()->login($user);
        return redirect()->route('home');
    }

    public function resetPassword()
    {
        return view('auth.reset-password');
    }

    public function updatePassword(Request $request, User $usuario) 
    {
        $credentials = $request->validate([
            'password' => 'required',
            'confirm-password' => 'required'
        ]);

        if ($credentials['password'] !== $credentials['confirm-password']) {
            throw ValidationException::withMessages([
                'password' => 'Las contraseñas no coinciden.'
            ]);
        }

        $credentials['password'] = bcrypt($credentials['password']);

        $usuario->update($credentials);

        return redirect()->route('login')->with('success', 'Contraseña actualizada.');
    }

    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }

    public function sendMail(Request $request) 
    {
        $request->validate([
            'mail' => 'required'
        ]);

        $usuario = User::where(function ($query) use ($request) {
            $query->where('email', '=', $request->mail)
                ->orWhere('name', '=', $request->mail);
        })->first();

        if ($usuario) {
            $email = new \SendGrid\Mail\Mail();
            $email->setFrom("zs18015382@estudiantes.uv.mx", "Carpintería Sarabia");
            $email->setSubject('Solicitud para restaurar contraseña');
            $email->addContent(
                "text/html", view('emails.reset-password-mail')->with('usuario', $usuario)->render()
            );
            $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
    
            $email->addTo($usuario->email);
            $sendgrid->send($email);   
        }

        return redirect()->route('forgot-password')->with('success', 'Se ha enviado un correo a la dirección proporcionada.');
    }
}

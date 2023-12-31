<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = User::all();
        return view("usuarios.index")->with("usuarios", $usuarios);
    }

    /**
     * Muestra el formulario para crear.
     */
    public function create()
    {
        return view("usuarios.create");
    }

    /**
     * Despliega lo pedido.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Formulario para editar un usuario
     */
    public function edit(User $usuario)
    {
        return view("usuarios.edit")->with("usuario", $usuario);
    }

    /**
     * actualiza los recursos especificos.
     */
    public function update(Request $request, User $usuario)
    {
        $request->validate([
            "name" => ['required', 'max:100', \Illuminate\Validation\Rule::unique('users')->ignore($usuario->user_id, 'user_id'),],
        ]);

        if (auth()->user()->user_id === $usuario->user_id) {
            $request->validate([
                "email" => ['required', 'max:255', \Illuminate\Validation\Rule::unique('users')->ignore($usuario->user_id, 'user_id'),],
                "password" => "nullable|min:8|confirmed",
            ]);

            if ($request->filled("password")) {
                $usuario->password = bcrypt($request->password);
            }
        }

        $usuario->update($request->except('password'));
        return redirect()->route("usuarios.index")->with("success", "Usuario actualizado.");
    }

    /**
     * Remueve los elementos solicitados.
     */
    public function destroy(User $usuario)
    {
        if ($usuario->user_id === auth()->user()->user_id) {
            return redirect()->route("usuarios.index")->with("error", "No puedes eliminar tu propio usuario.");
        }
        $usuario->delete();

        return redirect()->route("usuarios.index")->with("success", "Usuario eliminado.");
    }
}

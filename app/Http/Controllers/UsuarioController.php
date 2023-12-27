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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("usuarios.create");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $usuario)
    {
        return view("usuarios.edit")->with("usuario", $usuario);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $usuario)
    {
        $request->validate([
            "name" => ['required', 'max:100', \Illuminate\Validation\Rule::unique('users')->ignore($usuario->user_id, 'user_id'),],
        ]);

        if (auth()->user()->user_id === $usuario->user_id ) {
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
     * Remove the specified resource from storage.
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

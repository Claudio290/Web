<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Perfil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UsuarioRequest;
use Gate;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Gate::denies('admin-gestion'))
        {
            return redirect()->route('home.index');
        }

        $usuarios = Usuario::orderBy('id_perfil')->get();
        return view('usuarios.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $perfiles = Perfil::all();
        return view('usuarios.create',compact('perfiles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UsuarioRequest $request)
    {
        $usuario = new Usuario();

        $usuario->rut = $request->rut;
        $usuario->nombre = $request->nombre;
        $usuario->password = Hash::make($request->password);
        $usuario->perfil = $request->perfil;


        $jugador->save();

        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }

    public function login()
    {
        return view('usuarios.login');
    }

    public function autenticar(Request $request)
    {
        $credenciales = $request->only(['rut','password']);

        if(Auth::attempt($credenciales))
        {
            $request->session()->regenerate();
            return redirect()->route('home.index');
        }
        return back()->withErrors('Datos incorrectos')->onlyInput('rut');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('usuarios.login');
    }

    public function contrasena()
    {
        return view('usuarios.contrasena');
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Rol;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Listar todos los usuarios excepto el id 1 (Superadministrador)
        $usuarios=User::where('id', '!=', 1)->paginate(10);
        return view('admin.usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Crear usuario
        $roles=Rol::all();
        //dd($roles);
        return view('admin.usuarios.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombres' => ['required', 'string', 'max:255'],
            'apellidos' => ['required', 'string', 'max:255'],
            'documento' => ['required', 'numeric', 'unique:'.User::class],
            'fecha_nacimiento' => ['required', 'date'],
            'telefono' => ['required', 'string', 'max:30'],
            'direccion' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->nombres.' '.$request->apellidos,
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'documento' => $request->documento,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'email' => $request->email,
            'rol_id' => $request->rol_id,
            'estado' => true,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('usuarios.index')->with('info', 'El usuario se creó con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //Mostar usuario
        return view('admin.usuarios.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles=Rol::all();
        return view('admin.usuarios.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //validamos los datos
        $request->validate([
            'nombres' => ['required', 'string', 'max:255'],
            'apellidos' => ['required', 'string', 'max:255'],
            // validar documento unico excepto el que se esta editando
            'documento' => ['required', 'numeric', 'unique:'.User::class.',documento,'.$user->id],
            'fecha_nacimiento' => ['required', 'date'],
            'telefono' => ['required', 'string', 'max:30'],
            'direccion' => ['required', 'string', 'max:255'],
            // validar email unico excepto el que se esta editando
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class.',email,'.$user->id],
            
        ]);
        //actualizamos los datos
        $user->update([
            'name' => $request->nombres.' '.$request->apellidos,
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'documento' => $request->documento,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'email' => $request->email,
            'rol_id' => $request->rol_id,
        ]);
        return redirect()->route('usuarios.index')->with('info', 'El usuario se actualizó con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function password(Request $request, User $user)
    {
        //Validar contraseña
        $request->validate([
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        //actualizar contraseña
        $user->update([
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('usuarios.show', $user)->with('info', 'La contraseña se actualizó con éxito');
    }

    public function estado(User $user)
    {
        //cambiar estado activo/inactivo
        $user->update([
            'estado' => !$user->estado,
        ]);
        return redirect()->route('usuarios.index')->with('info', 'El estado se actualizó con éxito');
    }
}

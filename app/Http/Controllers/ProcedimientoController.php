<?php

namespace App\Http\Controllers;

use App\Models\Procedimiento;
use Illuminate\Http\Request;

class ProcedimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procedimientos = Procedimiento::all();
        return view('admin.procedimientos.index', compact('procedimientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //crear procedimiento
        return view('admin.procedimientos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validaciones antes de guardar
        $request->validate([
            'nombre' => 'required',
        ]);
        //Guardar procedimiento
        Procedimiento::create($request->all());
        return redirect()->route('procedimientos.index')->with('info', 'El procedimiento se creó con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Procedimiento  $procedimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Procedimiento $procedimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Procedimiento  $procedimiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Procedimiento $procedimiento)
    {
        //editar procedimiento
        return view('admin.procedimientos.edit', compact('procedimiento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Procedimiento  $procedimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Procedimiento $procedimiento)
    {
        if($request->has('activo'))
        {
            $request->merge(['activo'=>1]);
        }
        else
        {
            $request->merge(['activo'=>0]);
        }
        //Actualizar procedimiento
        $request->validate([
            'nombre' => 'required',
        ]);
        $procedimiento->update($request->all());
        return redirect()->route('procedimientos.index')->with('info', 'El procedimiento se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Procedimiento  $procedimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Procedimiento $procedimiento)
    {
        //Eliminar procedimiento
        $procedimiento->delete();
        return redirect()->route('procedimientos.index')->with('info', 'El procedimiento se eliminó con éxito');
    }
}

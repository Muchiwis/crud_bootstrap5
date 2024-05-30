<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pais;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.show', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $paises = Pais::orderBy('nombre', 'asc')->get();
        return view('clientes.edit',compact('paises'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fecha_nacimiento_formateado = date('d-m-Y', strtotime($request->fecha_nacimiento));
        $fecha_registro_formateado = date('d-m-Y', strtotime($request->fecha_registro));
        $cliente = Cliente::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'pais' => $request->pais,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'genero' => $request->genero,
            'notas' => $request->notas,
            'fecha_registro' => $request->fecha_registro,
            'ocupacion' => $request->ocupacion,
        ]);
        return redirect()->route('clientes.index');
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
    public function edit(string $id)
    {
        $cliente = Cliente::find($id);
        $paises = Pais::orderBy('nombre', 'asc')->get();
        // $cliente->fecha_nacimiento = date('d-m-Y', strtotime($cliente->fecha_nacimiento));
        // $cliente->fecha_registro = date('d-m-Y', strtotime($cliente->fecha_registro));
        //dd($cliente);
        return view('clientes.edit', compact(['cliente','paises']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente_actualizar = Cliente::find($id);
        $cliente_actualizar->nombre = $request->nombre;
        $cliente_actualizar->email = $request->email;
        $cliente_actualizar->telefono = $request->telefono;
        $cliente_actualizar->pais = $request->pais;
        $cliente_actualizar->fecha_nacimiento = $request->fecha_nacimiento;
        $cliente_actualizar->genero = $request->genero;
        $cliente_actualizar->notas = $request->notas;
        $cliente_actualizar->fecha_registro = $request->fecha_registro;
        $cliente_actualizar->ocupacion = $request->ocupacion;
        $cliente_actualizar->save();
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario_eliminado = Cliente::find($id);
        $usuario_eliminado->delete();
        return redirect()->route('clientes.index');
    }
}

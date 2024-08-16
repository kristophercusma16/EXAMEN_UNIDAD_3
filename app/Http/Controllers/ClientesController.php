<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Requests\CreateClienteRequest;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::orderBy('id','asc')->paginate(3);
        return view('clientes',compact('clientes'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create',[
            'cliente'=>new Cliente
        ]);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateClienteRequest $request)
    {
        //obtener las variables validadas y se guarda a la BD
        Cliente::create($request->validated());
        //se muestra la lista
        return redirect()->route('clientes');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = Cliente::where('id', $id)->first();
        return view('show', [
            'cliente' => $cliente
        ]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $id)
    {
        return view('editar',[
            'cliente'=>$id
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Cliente $id, CreateClienteRequest $request)
    {
        $id->update($request->validated());

        return redirect()->route('clientes.show',$id);
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $id)
    {
        $id->delete();

        return redirect()->route('clientes');
        //
    }
}

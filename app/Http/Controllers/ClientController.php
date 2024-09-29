<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clientes=Client::all();

        return view('SISTEMAS.lista_cliente', compact('clientes')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('SISTEMAS.add_cliente'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validacion=$request->validate([
            'apellido'=>'required|string|max:80',
            'nombre'=>'required|string|max:80',
            'ci'=>'required|numeric|unique:clients||min:7',
            'email'=>'required|email|unique:clients||max:80',
            'direccion'=>'max:80',
            'estado'=>'required|max:80'
        ]);

        $cliente = new Client();
        $cliente->apellido=$request->input('apellido');
        $cliente->nombre=$request->input('nombre');
        $cliente->ci=$request->input('ci');
        $cliente->email=$request->input('email');
        $cliente->direccion=$request->input('direccion');
        $cliente->estado=$request->input('estado');
        $cliente->save();

        return back()-> with('message','ok');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

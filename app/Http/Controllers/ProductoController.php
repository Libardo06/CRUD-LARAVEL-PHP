<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\view\view;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */ 
    public function index():view
    {
     $productos = Producto::latest()->paginate(5);
     return view('index_productos',['productos' => $productos]);
 }

    /**
     * Show the form for creating a new resource.
     */
    public function create():view
    {
        return view('create_productos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
     $request->validate([
        'codigo'=>'required',
        'nombre' => 'required',
        'descripcion' => 'required',
        'estado' => 'required',
        'nom_lab' => 'required'

    ]);
     Producto::create($request->all());
     return redirect()->route('productos.index')->with('success', 'Nuevo producto registrado correctamente');
 }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto):view
    {
        return view('edit_productos',['producto'=> $producto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto):RedirectResponse
    {
        
       $producto->update($request->all());
       return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto):RedirectResponse
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente');
    }
}

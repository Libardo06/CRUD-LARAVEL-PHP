<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Proovedor;
use App\Models\Recepcion;

class RecepcionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $recepciones = Recepcion::latest()->paginate(6);
        $proovedor = Proovedor::class;
        $producto = Producto::class;
        return view('index_recepciones', compact('proovedor','producto','recepciones'));
    }
/*
 * 
 */
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     $proovedores = Proovedor::all();
     $productos = Producto::all();
     return view('create_recepcion',compact('proovedores','productos'));
 }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Producto $producto)
    {
        $request->validate([
            'id_producto'=>'required',
            'id_proovedor' => 'required',
            'cantidad' => 'required',
            'num_fact' => 'required',
            'lote' => 'required',
            'reg_invima' => 'required',
            'fecha_vencimiento'
        ]);
        Recepcion::create($request->all());
        $producto = Producto::find($request->id_producto);
        $producto->cantidad += $request->cantidad;
        $producto->save();
        return redirect()->route('recepcion.index')->with('success', 'Nuevo recepcion registrada correctamente');
    }

    /**
     * Display the specified resource.
     */

    public function filter()
    {
       return view('filter_recepcion');
    }

    public function show(Recepcion $recepcion)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recepcion $recepcion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recepcion $recepcion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recepcion $recepcion)
    {
        //
    }
}

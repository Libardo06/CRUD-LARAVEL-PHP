<?php

namespace App\Http\Controllers;

use App\Models\Proovedor;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\view\view;

class ProovedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():view
    {
        $proovedores = Proovedor::latest()->paginate(5);
        return view('index_proovedores',['proovedores' => $proovedores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():view
    {
        return view('create_proovedores');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            'Tipo_id'=>'required',
            'Num_id' => 'required',
            'Nombre' => 'required',
            'Direccion' => 'required',
            'Nom_con' => 'required',
            'Tel' => 'required'
        ]);
        Proovedor::create($request->all());
        return redirect()->route('proovedores.index')->with('success', 'Nuevo proveedor registrado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proovedor $proovedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proovedor $proovedore):view
    {
       return view('edit_proovedores',['proovedores'=> $proovedore]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proovedor $proovedore):RedirectResponse
    {
       $proovedore->update($request->all());
       return redirect()->route('proovedores.index')->with('success', 'Proovedor actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proovedor $proovedore):RedirectResponse
    {
        $proovedore->delete();
        return redirect()->route('proovedores.index')->with('success', 'Proovedor eliminado correctamente');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\sabor;
use Illuminate\Http\Request;

class SaborController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $s = sabor::all();
        return view('saborIndex', compact('s'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('SaborCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        sabor::create([
            'Sabores' => $request->input('Sabores')
        ]);

       // $datosProducto = $request->only(['nombre', 'marca', 'precio']);
       // Producto::create($datosProducto);

       //jumex::create($request->all());
       return redirect('sabor');
    }

    /**
     * Display the specified resource.
     */
    public function show(sabor $sabor)
    {
        return view('saborShow', compact('sabor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sa = sabor::findOrfail($id);
        //dd($jume);
        return view('saborEdit', compact('sa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sabor $sabor)
    {
        // Aquí actualizamos los datos sin necesidad de usar where
        //Sabor::where('id', $id)->update($request->except('_token', '_method', 'action'));
        //dd($request->except('_token', '_method', 'action'));

        //return redirect('/sabor');
        sabor::where('id', $sabor->id)->update($request->except('_token', '_method', 'action'));
        //Session()->flash('success', 'Se ha modificado con éxito');
        return redirect('/sabor');

        // $request->validate([
        //     'nombre' => 'required',
        //     'marca' => 'required',
        //     'precio' => 'required|numeric',
        // ]);

        // $producto->nombre = $request->nombre;
        // $producto->marca = $request->marca;
        // $producto->precio = $request->precio;
        // $producto->save();
    
        // if ($request->has('categorias')) {
        //     $producto->categorias()->sync($request->categorias);
        // } else {
        //     $producto->categorias()->detach(); 
        // }
    
        // return redirect('/producto');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
                
        $id = sabor::findOrfail($id);
        $id->delete();
        Session()->flash('success', 'Se ha eliminado con éxito');
        return redirect('/sabor');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\jumex;
use App\Models\sabor;
use Illuminate\Http\Request;

class JumexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $j = jumex::all();
        return view('jumexIndex', compact('j'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Sabores = sabor::all();
        return view('jumexCreate', compact('Sabores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $ju = new jumex();
        $ju->Nombre = $request->Nombre;
        $ju->Precio = $request->Precio;
        $ju->Categoria = $request->Categoria;
        $ju->save();

        $ju->sabores()->attach($request->Sabores);


        //Jumex::create([
          //  'Nombre' => $request->input('Nombre'),
            //'Sabor'=> $request->input('Sabores'),
            //'Precio' => $request->input('Precio'),
            //'Categoria' => $request->input('Categoria'),
         //]);

        // $datosProducto = $request->only(['nombre', 'marca', 'precio']);
        // Producto::create($datosProducto);

        //jumex::create($request->all());
        //dd($jume);
        return redirect('/jumex');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jumex $jumex)
    {
        return view('/jumexShow', compact('jumex'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jumex $jumex)
    {
        $Sabores = sabor::all();
        //dd($jume);
        return view('jumexEdit', compact('Sabores','jumex'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jumex $jumex){


        $jumex->Nombre = $request->Nombre;
        $jumex->Precio = $request->Precio;
        $jumex->Categoria = $request->Categoria;
        $jumex->save();
        //dd($request);

        if ($request->has('Sabores')) {
                $jumex->sabores()->sync($request->Sabores);
            }else{
                $jumex->sabores()->detach();
            }
            
            return redirect('/jumex');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        $id = jumex::findOrfail($id);
        $id->delete();
        Session()->flash('success', 'Se ha eliminado con éxito');
        return redirect('/jumex');
    }
}

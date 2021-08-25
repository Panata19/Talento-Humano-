<?php

namespace App\Http\Controllers\Trabajador;

use App\Models\Trabajador;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrabajadorController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['trabajadores'] = Trabajador::all();
        return View('trabajador.index', $datos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('trabajador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trabajador = request()->except('_token');
        
        if($request->hasFile('foto')){
            $trabajador['foto']=$request->file('foto')->store('fotos','public');
        }

        if($request->hasFile('curriculo')){
            $trabajador['curriculo']=$request->file('curriculo')->store('curriculo','public');
        }
        

        Trabajador::insert($trabajador);
        //return redirect('trabajador');
        return response()->json($trabajador);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trabajador = Trabajador::findOrFail($id);
        return View('trabajador.edit', compact('trabajador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosTrabajador = request()->except(['_token','_method']);
        Trabajador::where('id','=',$id)->update($datosTrabajador);

        return redirect('trabajador');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Trabajador::destroy($id);

        return redirect('trabajador');
    }
}

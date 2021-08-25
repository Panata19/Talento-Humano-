<?php

namespace App\Http\Controllers\dependenciasTH;

use App\Models\Regimen;
use App\Models\TiposRegimen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TiposRegimenController extends Controller
{
           /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['tiposRegimens'] = TiposRegimen::all();
        return View('tiposRegimen.index', $datos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regimens = Regimen::all();
        return View('tiposRegimen.create',compact('regimens'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tiposRegimen = request()->except('_token');
        TiposRegimen::insert($tiposRegimen);
        return redirect('tiposRegimen');
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
        $tiposRegimen = TiposRegimen::findOrFail($id);
        $regimens = Regimen::all();
        return View('tiposRegimen.edit', compact('tiposRegimen','regimens'));
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
        $datostiposRegimen = request()->except(['_token','_method']);
        TiposRegimen::where('id','=',$id)->update($datostiposRegimen);

        return redirect('tiposRegimen');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TiposRegimen::destroy($id);

        return redirect('tiposRegimen');
    }
}

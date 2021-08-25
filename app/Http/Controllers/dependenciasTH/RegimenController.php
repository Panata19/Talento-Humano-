<?php

namespace App\Http\Controllers\dependenciasTH;

use App\Models\Regimen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegimenController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['regimenes'] = Regimen::all();
        return View('regimen.index', $datos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('regimen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regimen = request()->except('_token');
        Regimen::insert($regimen);
        return redirect('regimen');
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
        $regimen = Regimen::findOrFail($id);
        return View('regimen.edit', compact('regimen'));
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
        $datosregimen = request()->except(['_token','_method']);
        Regimen::where('id','=',$id)->update($datosregimen);

        return redirect('regimen');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Regimen::destroy($id);

        return redirect('regimen');
    }
}

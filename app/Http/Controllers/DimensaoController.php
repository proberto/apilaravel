<?php

namespace App\Http\Controllers;

use App\Dimensao;
use Illuminate\Http\Request;

class DimensaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Dimensao::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Dimensao::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dimensao  $dimensao
     * @return \Illuminate\Http\Response
     */
    public function show(Dimensao $dimensao)
    {
        return $dimensao;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dimensao  $dimensao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dimensao $dimensao)
    {
        $dimensao->update($request->all());
        return $dimensao;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dimensao  $dimensao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dimensao $dimensao)
    {
        $dimensao->delete();
        return $dimensao;
    }
}

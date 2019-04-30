<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoas = \App\Pessoa::get();


        return view('pessoa.index', compact('pessoas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pessoa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo "teste";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pessoa  $Pessoa
     * @return \Illuminate\Http\Response
     */
    public function show(Pessoa $Pessoa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function edit(pessoa $pessoa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pessoa $pessoa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(pessoa $pessoa)
    {
        //
    }
}

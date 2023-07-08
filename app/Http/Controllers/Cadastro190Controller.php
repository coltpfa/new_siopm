<?php

namespace App\Http\Controllers;

use App\Models\Cadastro190;
use Illuminate\Http\Request;

class Cadastro190Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cad190 = Cadastro190::all();
        return view('cadastro190', compact('cad190'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cadastro190 $cadastro190)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cadastro190 $cadastro190)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cadastro190 $cadastro190)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cadastro190 $cadastro190)
    {
        //
    }
}

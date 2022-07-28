<?php

namespace App\Http\Controllers;

use App\Models\Salester;
use App\Http\Requests\StoreSalesterRequest;
use App\Http\Requests\UpdateSalesterRequest;

class SalesterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSalesterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSalesterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salester  $salester
     * @return \Illuminate\Http\Response
     */
    public function show(Salester $salester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salester  $salester
     * @return \Illuminate\Http\Response
     */
    public function edit(Salester $salester)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSalesterRequest  $request
     * @param  \App\Models\Salester  $salester
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSalesterRequest $request, Salester $salester)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salester  $salester
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salester $salester)
    {
        //
    }
}

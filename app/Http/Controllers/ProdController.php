<?php

namespace App\Http\Controllers;

use App\Models\Prod;
use App\Http\Requests\StoreProdRequest;
use App\Http\Requests\UpdateProdRequest;

class ProdController extends Controller
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
     * @param  \App\Http\Requests\StoreProdRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProdRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prod  $prod
     * @return \Illuminate\Http\Response
     */
    public function show(Prod $prod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prod  $prod
     * @return \Illuminate\Http\Response
     */
    public function edit(Prod $prod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProdRequest  $request
     * @param  \App\Models\Prod  $prod
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProdRequest $request, Prod $prod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prod  $prod
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prod $prod)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Salesrep;
use App\Http\Requests\StoreSalesrepRequest;
use App\Http\Requests\UpdateSalesrepRequest;

class SalesrepController extends Controller
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
     * @param  \App\Http\Requests\StoreSalesrepRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSalesrepRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salesrep  $salesrep
     * @return \Illuminate\Http\Response
     */
    public function show(Salesrep $salesrep)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salesrep  $salesrep
     * @return \Illuminate\Http\Response
     */
    public function edit(Salesrep $salesrep)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSalesrepRequest  $request
     * @param  \App\Models\Salesrep  $salesrep
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSalesrepRequest $request, Salesrep $salesrep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salesrep  $salesrep
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salesrep $salesrep)
    {
        //
    }
}

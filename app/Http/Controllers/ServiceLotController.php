<?php

namespace App\Http\Controllers;

use App\Models\service_lot;
use App\Http\Requests\Storeservice_lotRequest;
use App\Http\Requests\Updateservice_lotRequest;

class ServiceLotController extends Controller
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
     * @param  \App\Http\Requests\Storeservice_lotRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeservice_lotRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\service_lot  $service_lot
     * @return \Illuminate\Http\Response
     */
    public function show(service_lot $service_lot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\service_lot  $service_lot
     * @return \Illuminate\Http\Response
     */
    public function edit(service_lot $service_lot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateservice_lotRequest  $request
     * @param  \App\Models\service_lot  $service_lot
     * @return \Illuminate\Http\Response
     */
    public function update(Updateservice_lotRequest $request, service_lot $service_lot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\service_lot  $service_lot
     * @return \Illuminate\Http\Response
     */
    public function destroy(service_lot $service_lot)
    {
        //
    }
}

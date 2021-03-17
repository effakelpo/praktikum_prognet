<?php

namespace App\Http\Controllers;

use App\Models\couriers;
use Illuminate\Http\Request;

class CouriersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.courier.index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\couriers  $couriers
     * @return \Illuminate\Http\Response
     */
    public function show(couriers $couriers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\couriers  $couriers
     * @return \Illuminate\Http\Response
     */
    public function edit(couriers $couriers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\couriers  $couriers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, couriers $couriers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\couriers  $couriers
     * @return \Illuminate\Http\Response
     */
    public function destroy(couriers $couriers)
    {
        //
    }
}

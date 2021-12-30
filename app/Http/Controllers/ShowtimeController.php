<?php

namespace App\Http\Controllers;

use App\Models\showtime;
use App\Http\Requests\StoreshowtimeRequest;
use App\Http\Requests\UpdateshowtimeRequest;

class ShowtimeController extends Controller
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
     * @param  \App\Http\Requests\StoreshowtimeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreshowtimeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\showtime  $showtime
     * @return \Illuminate\Http\Response
     */
    public function show(showtime $showtime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\showtime  $showtime
     * @return \Illuminate\Http\Response
     */
    public function edit(showtime $showtime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateshowtimeRequest  $request
     * @param  \App\Models\showtime  $showtime
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateshowtimeRequest $request, showtime $showtime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\showtime  $showtime
     * @return \Illuminate\Http\Response
     */
    public function destroy(showtime $showtime)
    {
        //
    }
}

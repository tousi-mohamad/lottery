<?php

namespace App\Http\Controllers;

use App\Models\Lottery;
use App\Http\Requests\StoreLotteryRequest;
use App\Http\Requests\UpdateLotteryRequest;

class LotteryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('lottery');
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
    public function store(StoreLotteryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Lottery $lottery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lottery $lottery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLotteryRequest $request, Lottery $lottery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lottery $lottery)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTestRunRequest;
use App\Http\Requests\UpdateTestRunRequest;
use App\Models\TestRun;

class TestRunController extends Controller
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
     * @param  \App\Http\Requests\StoreTestRunRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestRunRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestRun  $testRun
     * @return \Illuminate\Http\Response
     */
    public function show(TestRun $testRun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestRun  $testRun
     * @return \Illuminate\Http\Response
     */
    public function edit(TestRun $testRun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTestRunRequest  $request
     * @param  \App\Models\TestRun  $testRun
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestRunRequest $request, TestRun $testRun)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestRun  $testRun
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestRun $testRun)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTestSuiteRequest;
use App\Http\Requests\UpdateTestSuiteRequest;
use App\Models\TestSuite;

class TestSuiteController extends Controller
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
     * @param  \App\Http\Requests\StoreTestSuiteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestSuiteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestSuite  $testSuite
     * @return \Illuminate\Http\Response
     */
    public function show(TestSuite $testSuite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestSuite  $testSuite
     * @return \Illuminate\Http\Response
     */
    public function edit(TestSuite $testSuite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTestSuiteRequest  $request
     * @param  \App\Models\TestSuite  $testSuite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestSuiteRequest $request, TestSuite $testSuite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestSuite  $testSuite
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestSuite $testSuite)
    {
        //
    }
}

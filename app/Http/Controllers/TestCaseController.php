<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTestCaseRequest;
use App\Http\Requests\UpdateTestCaseRequest;
use App\Models\TestCase;

class TestCaseController extends Controller
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
     * @param  \App\Http\Requests\StoreTestCaseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestCaseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestCase  $testCase
     * @return \Illuminate\Http\Response
     */
    public function show(TestCase $testCase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestCase  $testCase
     * @return \Illuminate\Http\Response
     */
    public function edit(TestCase $testCase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTestCaseRequest  $request
     * @param  \App\Models\TestCase  $testCase
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestCaseRequest $request, TestCase $testCase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestCase  $testCase
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestCase $testCase)
    {
        //
    }
}

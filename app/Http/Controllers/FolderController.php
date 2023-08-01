<?php

namespace App\Http\Controllers;

use App\Models\folder;
use App\Http\Requests\StorefolderRequest;
use App\Http\Requests\UpdatefolderRequest;

class FolderController extends Controller
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
     * @param  \App\Http\Requests\StorefolderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorefolderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\folder  $folder
     * @return \Illuminate\Http\Response
     */
    public function show(folder $folder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\folder  $folder
     * @return \Illuminate\Http\Response
     */
    public function edit(folder $folder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatefolderRequest  $request
     * @param  \App\Models\folder  $folder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatefolderRequest $request, folder $folder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\folder  $folder
     * @return \Illuminate\Http\Response
     */
    public function destroy(folder $folder)
    {
        //
    }
}

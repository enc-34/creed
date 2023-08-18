<?php

namespace App\Http\Controllers\API\V1;

use App\Models\ListContactBlog;
use App\Http\Requests\StoreListContactBlogRequest;
use App\Http\Requests\UpdateListContactBlogRequest;
use App\Http\Controllers\Controller;

class ListContactBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ListContactBlog::all();
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
     * @param  \App\Http\Requests\StoreListContactBlogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreListContactBlogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ListContactBlog  $listContactBlog
     * @return \Illuminate\Http\Response
     */
    public function show(ListContactBlog $listContactBlog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListContactBlog  $listContactBlog
     * @return \Illuminate\Http\Response
     */
    public function edit(ListContactBlog $listContactBlog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateListContactBlogRequest  $request
     * @param  \App\Models\ListContactBlog  $listContactBlog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateListContactBlogRequest $request, ListContactBlog $listContactBlog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListContactBlog  $listContactBlog
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListContactBlog $listContactBlog)
    {
        //
    }
}

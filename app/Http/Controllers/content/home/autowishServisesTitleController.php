<?php

namespace App\Http\Controllers\content\home;

use App\Http\Controllers\Controller;
use App\Models\content\home\autowishServisesTitle;
use Illuminate\Http\Request;

class autowishServisesTitleController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $autowishServisesTitle = new autowishServisesTitle;
        $autowishServisesTitle->page_id = $request->page_id;
        $autowishServisesTitle->title = $request->title;

        $autowishServisesTitle->save(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\home\autowishServisesTitle  $autowishServisesTitle
     * @return \Illuminate\Http\Response
     */
    public function show(autowishServisesTitle $autowishServisesTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\content\home\autowishServisesTitle  $autowishServisesTitle
     * @return \Illuminate\Http\Response
     */
    public function edit(autowishServisesTitle $autowishServisesTitle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\home\autowishServisesTitle  $autowishServisesTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, autowishServisesTitle $autowishServisesTitle)
    {
        $autowishServisesTitle->page_id = $request->page_id;
        $autowishServisesTitle->title = $request->title;

        $autowishServisesTitle->save(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\home\autowishServisesTitle  $autowishServisesTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(autowishServisesTitle $autowishServisesTitle)
    {
        $autowishServisesTitle->delete();
    }
}

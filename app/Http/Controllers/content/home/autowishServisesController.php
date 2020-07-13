<?php

namespace App\Http\Controllers\content\home;

use App\Http\Controllers\Controller;
use App\Models\content\home\autowishServises;
use Illuminate\Http\Request;

class autowishServisesController extends Controller
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
        $autowishServises = new autowishServises;
        $autowishServises->page_id = $request->page_id;
        $autowishServises->title = $request->title;
        $autowishServises->link = $request->link;

        $autowishServises->save(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\home\autowishServises  $autowishServises
     * @return \Illuminate\Http\Response
     */
    public function show(autowishServises $autowishServises)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\content\home\autowishServises  $autowishServises
     * @return \Illuminate\Http\Response
     */
    public function edit(autowishServises $autowishServises)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\home\autowishServises  $autowishServises
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, autowishServises $autowishServises)
    {
        $autowishServises->page_id = $request->page_id;
        $autowishServises->title = $request->title;
        $autowishServises->link = $request->link;

        $autowishServises->save(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\home\autowishServises  $autowishServises
     * @return \Illuminate\Http\Response
     */
    public function destroy(autowishServises $autowishServises)
    {
        $autowishServises->delete();
    }
}

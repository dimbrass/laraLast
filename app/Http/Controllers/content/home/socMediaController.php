<?php

namespace App\Http\Controllers\content\home;

use App\Http\Controllers\Controller;
use App\Models\content\home\socMedia;
use Illuminate\Http\Request;

class socMediaController extends Controller
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
        $socMedia = new socMedia;
        $socMedia->page_id = $request->page_id;
        $socMedia->title = $request->title;

        $socMedia->save(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\home\socMedia  $socMedia
     * @return \Illuminate\Http\Response
     */
    public function show(socMedia $socMedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\content\home\socMedia  $socMedia
     * @return \Illuminate\Http\Response
     */
    public function edit(socMedia $socMedia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\home\socMedia  $socMedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, socMedia $socMedia)
    {
        $socMedia->page_id = $request->page_id;
        $socMedia->title = $request->title;

        $socMedia->save(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\home\socMedia  $socMedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(socMedia $socMedia)
    {
        $socMedia->delete();
    }
}

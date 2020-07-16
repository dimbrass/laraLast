<?php

namespace App\Http\Controllers\content\home;

use App\Http\Controllers\Controller;
use App\Models\content\home\autowishAbout;
use Illuminate\Http\Request;

class autowishAboutController extends Controller
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
        $autowishAbout = new autowishAbout;
        $autowishAbout->page_id = $request->page_id;
        $autowishAbout->title = $request->title;
        $autowishAbout->paragraph1 = $request->paragraph1;
        $autowishAbout->paragraph2 = $request->paragraph2;

        $autowishAbout->save(); 

        return response('Successfully stored!', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\home\autowishAbout  $autowishAbout
     * @return \Illuminate\Http\Response
     */
    public function show(autowishAbout $autowishAbout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\content\home\autowishAbout  $autowishAbout
     * @return \Illuminate\Http\Response
     */
    public function edit(autowishAbout $autowishAbout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\home\autowishAbout  $autowishAbout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, autowishAbout $autowishAbout)
    {
        $autowishAbout->page_id = $request->page_id;
        $autowishAbout->title = $request->title;
        $autowishAbout->paragraph1 = $request->paragraph1;
        $autowishAbout->paragraph2 = $request->paragraph2;

        $autowishAbout->save(); 

        return response('Successfully updated!', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\home\autowishAbout  $autowishAbout
     * @return \Illuminate\Http\Response
     */
    public function destroy(autowishAbout $autowishAbout)
    {
        $autowishAbout->delete();

        return response('Successfully deleted!', 200);
    }
}

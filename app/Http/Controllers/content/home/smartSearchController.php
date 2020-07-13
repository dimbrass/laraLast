<?php

namespace App\Http\Controllers\content\home;

use App\Http\Controllers\Controller;
use App\Models\content\home\smartSearch;
use Illuminate\Http\Request;

class smartSearchController extends Controller
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
        $smartSearch = new smartSearch;
        $smartSearch->page_id = $request->page_id;
        $smartSearch->title = $request->title;
        $smartSearch->examples = $request->examples;

        $smartSearch->save(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\home\smartSearch  $smartSearch
     * @return \Illuminate\Http\Response
     */
    public function show(smartSearch $smartSearch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\content\home\smartSearch  $smartSearch
     * @return \Illuminate\Http\Response
     */
    public function edit(smartSearch $smartSearch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\home\smartSearch  $smartSearch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, smartSearch $smartSearch)
    {
        $smartSearch->page_id = $request->page_id;
        $smartSearch->title = $request->title;
        $smartSearch->examples = $request->examples;

        $smartSearch->save(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\home\smartSearch  $smartSearch
     * @return \Illuminate\Http\Response
     */
    public function destroy(smartSearch $smartSearch)
    {
        $smartSearch->delete();
    }
}

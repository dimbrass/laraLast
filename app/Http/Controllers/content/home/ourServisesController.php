<?php

namespace App\Http\Controllers\content\home;

use App\Http\Controllers\Controller;
use App\Models\content\home\ourServises;
use Illuminate\Http\Request;

class ourServisesController extends Controller
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
        $ourServises = new ourServises;
        $ourServises->page_id = $request->page_id;
        $ourServises->title = $request->title;
        $ourServises->save(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\home\ourServises  $ourServises
     * @return \Illuminate\Http\Response
     */
    public function show(ourServises $ourServises)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\content\home\ourServises  $ourServises
     * @return \Illuminate\Http\Response
     */
    public function edit(ourServises $ourServises)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\home\ourServises  $ourServises
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ourServises $ourServises)
    {
        $ourServises->page_id = $request->page_id;
        $ourServises->title = $request->title;
        $ourServises->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\home\ourServises  $ourServises
     * @return \Illuminate\Http\Response
     */
    public function destroy(ourServises $ourServises)
    {
        $ourServises->delete();
    }
}

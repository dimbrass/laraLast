<?php

namespace App\Http\Controllers\content\home;

use App\Http\Controllers\Controller;
use App\Models\content\home\Page;
use App\Models\content\home\ourServisesTitle;
use Illuminate\Http\Request;

class ourServisesTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ourServisesTitle = ourServisesTitle::all();  
        
        //return view('content\home\blocks\our-servises-title\index', ['ourServisesTitle' => $ourServisesTitle]);
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
        $ourServisesTitle = new ourServisesTitle;
        $ourServisesTitle->page_id = $request->page_id;
        $ourServisesTitle->title = $request->title;
        $ourServisesTitle->save(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\home\ourServisesTitle  $ourServisesTitle
     * @return \Illuminate\Http\Response
     */
    public function show(ourServisesTitle $ourServisesTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\content\home\ourServisesTitle  $ourServisesTitle
     * @return \Illuminate\Http\Response
     */
    public function edit(ourServisesTitle $ourServisesTitle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\home\ourServisesTitle  $ourServisesTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ourServisesTitle $ourServisesTitle)
    {
        $ourServisesTitle->page_id = $request->page_id;
        $ourServisesTitle->title = $request->title;
        $ourServisesTitle->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\home\ourServisesTitle  $ourServisesTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(ourServisesTitle $ourServisesTitle)
    {
        $ourServisesTitle->delete();
    }
}

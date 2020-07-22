<?php

namespace App\Http\Controllers\content;

use App\Http\Controllers\Controller;
use App\Models\content\AllPages;
use Illuminate\Http\Request;

class AllPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = AllPages::all();
        return view('content\all-pages', $pages);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\AllPages  $allPages
     * @return \Illuminate\Http\Response
     */
    public function show(AllPages $allPages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\content\AllPages  $allPages
     * @return \Illuminate\Http\Response
     */
    public function edit(AllPages $allPages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\AllPages  $allPages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AllPages $allPages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\AllPages  $allPages
     * @return \Illuminate\Http\Response
     */
    public function destroy(AllPages $allPages)
    {
        //
    }
}

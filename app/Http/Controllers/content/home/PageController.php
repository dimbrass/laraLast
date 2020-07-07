<?php

namespace App\Http\Controllers\content\home;

use App\Http\Controllers\Controller;
use App\Models\content\home\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        return view('content\home\index', ['pages' => $pages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content\home\create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page = new Page;
        $page->name = $request->name;
        $page->title = $request->title;
        $page->save();
        
        $pages = Page::all();
        
        return view('content\home\index', ['pages' => $pages]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\home\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        return view('content\home\show', ['page' => $page]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\content\home\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('content\home\edit', ['page' => $page]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\home\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $page->name = $request->name;
        $page->title = $request->title;
        $page->save();

        $page = Page::find(1);
        return view('content\home\edit', ['page' => $page]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\home\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();

        $pages = Page::all();
        return view('content\home\index', ['pages' => $pages]);
    }
}

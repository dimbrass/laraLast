<?php

namespace App\Http\Controllers\content\home;

use App\Http\Controllers\Controller;
use App\Models\content\home\Page;
use App\Models\content\home\insurance;
use App\Models\content\home\ourServisesTitle;
use App\Models\content\home\ourServises;
use App\Models\content\home\autowishAbout;
use App\Models\content\home\autowishBenefits;
use App\Models\content\home\autowishServisesTitle;
use App\Models\content\home\autowishServises;
use App\Models\content\home\smartSearch;
use App\Models\content\home\socMedia;
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
        $page = Page::all()->first();
        $pageBlocks [] = ['block' => $page->insurance, 'name' => 'insurance'];
        $pageBlocks [] = ['block' => $page->ourServisesTitle, 'name' => 'our-servises-title'];
        $pageBlocks [] = ['block' => $page->ourServises, 'name' => 'our-servises'];
        $pageBlocks [] = ['block' => $page->autowishAbout, 'name' => 'autowish-about'];
        $pageBlocks [] = ['block' => $page->autowishBenefits, 'name' => 'autowish-benefits'];
        $pageBlocks [] = ['block' => $page->autowishServisesTitle, 'name' => 'autowish-servises-title'];
        $pageBlocks [] = ['block' => $page->autowishServises, 'name' => 'autowish-servises'];
        $pageBlocks [] = ['block' => $page->smartSearch, 'name' => 'smart-search'];
        $pageBlocks [] = ['block' => $page->socMedia, 'name' => 'soc-media'];      
        
        return view('content\home\index', ['page' => $page, 'pageBlocks' => $pageBlocks]);
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
        
        return redirect()->route('page.index');
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
        
        return redirect()->route('page.index');
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
        
        return redirect()->route('page.index');
    }
}

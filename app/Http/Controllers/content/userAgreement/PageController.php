<?php

namespace App\Http\Controllers\content\userAgreement;

use App\Http\Controllers\Controller;
use App\Models\content\userAgreement\Page;
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
        return Page::all();  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'name' => 'required',
        ]);
        
        $page = new Page;
        $page = Page::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $page->getTable(),
            'Model' => $page,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\userAgreement\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        return $page;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\userAgreement\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {   
        // validate
        $validatedData = $request->validateWithBag('content', [
            'name' => 'required',
        ]); 
        
        $page->fill($request->all());
        $page->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $page->getTable(),
            'Model' => $page,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\userAgreement\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $page->getTable(),
            'Model' => $page,
        ]);          
    }
}

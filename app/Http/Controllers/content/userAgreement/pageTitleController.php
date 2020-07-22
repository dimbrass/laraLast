<?php

namespace App\Http\Controllers\content\userAgreement;

use App\Http\Controllers\Controller;
use App\Models\content\userAgreement\pageTitle;
use Illuminate\Http\Request;

class pageTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return pageTitle::all();   
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
            'page_id' => 'required|numeric',
        ]);
        
        $pageTitle = new pageTitle;
        $pageTitle = pageTitle::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $pageTitle->getTable(),
            'Model' => $pageTitle,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\mulctCheck\pageTitle  $pageTitle
     * @return \Illuminate\Http\Response
     */
    public function show(pageTitle $pageTitle)
    {
        return $pageTitle;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\mulctCheck\pageTitle  $pageTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pageTitle $pageTitle)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $pageTitle->fill($request->all());
        $pageTitle->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $pageTitle->getTable(),
            'Model' => $pageTitle,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\mulctCheck\pageTitle  $pageTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(pageTitle $pageTitle)
    {
        $pageTitle->delete(); 

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $pageTitle->getTable(),
            'Model' => $pageTitle,
        ]);       
    }
}

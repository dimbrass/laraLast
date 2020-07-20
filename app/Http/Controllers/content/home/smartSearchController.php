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
        return smartSearch::all();   
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
        
        $smartSearch = new smartSearch;
        $smartSearch = smartSearch::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $smartSearch->getTable(),
            'Model' => $smartSearch,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\home\smartSearch  $smartSearch
     * @return \Illuminate\Http\Response
     */
    public function show(smartSearch $smartSearch)
    {
        return $smartSearch;
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
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $smartSearch->fill($request->all());
        $smartSearch->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $smartSearch->getTable(),
            'Model' => $smartSearch,
        ]);           
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

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $smartSearch->getTable(),
            'Model' => $smartSearch,
        ]);           
    }
}

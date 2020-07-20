<?php

namespace App\Http\Controllers\content\kbmCheck;

use App\Http\Controllers\Controller;
use App\Models\content\kbmCheck\whattodoTitle;
use Illuminate\Http\Request;

class whattodoTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return whattodoTitle::all();   
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
        
        $whattodoTitle = new whattodoTitle;
        $whattodoTitle = whattodoTitle::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $whattodoTitle->getTable(),
            'Model' => $whattodoTitle,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\kbmCheck\whattodoTitle  $whattodoTitle
     * @return \Illuminate\Http\Response
     */
    public function show(whattodoTitle $whattodoTitle)
    {
        return $whattodoTitle;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\kbmCheck\whattodoTitle  $whattodoTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, whattodoTitle $whattodoTitle)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $whattodoTitle->fill($request->all());
        $whattodoTitle->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $whattodoTitle->getTable(),
            'Model' => $whattodoTitle,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\kbmCheck\whattodoTitle  $whattodoTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(whattodoTitle $whattodoTitle)
    {
        $whattodoTitle->delete(); 

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $whattodoTitle->getTable(),
            'Model' => $whattodoTitle,
        ]);       
    }
}

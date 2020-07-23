<?php

namespace App\Http\Controllers\content\calculator;

use App\Http\Controllers\Controller;
use App\Models\content\calculator\usefulInfoTop;
use Illuminate\Http\Request;

class usefulInfoTopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return usefulInfoTop::all();   
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
        
        $usefulInfoTop = new usefulInfoTop;
        $usefulInfoTop = usefulInfoTop::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $usefulInfoTop->getTable(),
            'Model' => $usefulInfoTop,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\mulctCheck\usefulInfoTop  $usefulInfoTop
     * @return \Illuminate\Http\Response
     */
    public function show(usefulInfoTop $usefulInfoTop)
    {
        return $usefulInfoTop;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\mulctCheck\usefulInfoTop  $usefulInfoTop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usefulInfoTop $usefulInfoTop)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $usefulInfoTop->fill($request->all());
        $usefulInfoTop->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $usefulInfoTop->getTable(),
            'Model' => $usefulInfoTop,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\mulctCheck\usefulInfoTop  $usefulInfoTop
     * @return \Illuminate\Http\Response
     */
    public function destroy(usefulInfoTop $usefulInfoTop)
    {
        $usefulInfoTop->delete(); 

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $usefulInfoTop->getTable(),
            'Model' => $usefulInfoTop,
        ]);       
    }
}

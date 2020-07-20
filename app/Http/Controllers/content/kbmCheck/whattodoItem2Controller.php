<?php

namespace App\Http\Controllers\content\kbmCheck;

use App\Http\Controllers\Controller;
use App\Models\content\kbmCheck\whattodoItem2;
use Illuminate\Http\Request;

class whattodoItem2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return whattodoItem2::all();   
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
        
        $whattodoItem_2 = new whattodoItem2;
        $whattodoItem_2 = whattodoItem2::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $whattodoItem_2->getTable(),
            'Model' => $whattodoItem_2,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\kbmCheck\whattodoItem2  $whattodoItem_2
     * @return \Illuminate\Http\Response
     */
    public function show(whattodoItem2 $whattodoItem_2)
    {
        return $whattodoItem_2;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\kbmCheck\whattodoItem2  $whattodoItem_2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, whattodoItem2 $whattodoItem_2)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $whattodoItem_2->fill($request->all());
        $whattodoItem_2->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $whattodoItem_2->getTable(),
            'Model' => $whattodoItem_2,
        ]);        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\kbmCheck\whattodoItem2  $whattodoItem_2
     * @return \Illuminate\Http\Response
     */
    public function destroy(whattodoItem2 $whattodoItem_2)
    {
        $whattodoItem_2->delete(); 

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $whattodoItem_2->getTable(),
            'Model' => $whattodoItem_2,
        ]);       
    }
}

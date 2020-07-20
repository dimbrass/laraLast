<?php

namespace App\Http\Controllers\content\kbmCheck;

use App\Http\Controllers\Controller;
use App\Models\content\kbmCheck\whattodoItem1;
use Illuminate\Http\Request;

class whattodoItem1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return whattodoItem1::all();   
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
        
        $whattodoItem_1 = new whattodoItem1;
        $whattodoItem_1 = whattodoItem1::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $whattodoItem_1->getTable(),
            'Model' => $whattodoItem_1,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\kbmCheck\whattodoItem1  $whattodoItem_1
     * @return \Illuminate\Http\Response
     */
    public function show(whattodoItem1 $whattodoItem_1)
    {
        return $whattodoItem_1;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\kbmCheck\whattodoItem1  $whattodoItem_1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, whattodoItem1 $whattodoItem_1)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $whattodoItem_1->fill($request->all());
        $whattodoItem_1->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $whattodoItem_1->getTable(),
            'Model' => $whattodoItem_1,
        ]);        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\kbmCheck\whattodoItem1  $whattodoItem_1
     * @return \Illuminate\Http\Response
     */
    public function destroy(whattodoItem1 $whattodoItem_1)
    {
        $whattodoItem_1->delete(); 

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $whattodoItem_1->getTable(),
            'Model' => $whattodoItem_1,
        ]);       
    }
}

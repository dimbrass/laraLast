<?php

namespace App\Http\Controllers\content\kbmCheck;

use App\Http\Controllers\Controller;
use App\Models\content\kbmCheck\whattodoItem3;
use Illuminate\Http\Request;

class whattodoItem3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return whattodoItem3::all();   
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
        
        $whattodoItem_3 = new whattodoItem3;
        $whattodoItem_3 = whattodoItem3::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $whattodoItem_3->getTable(),
            'Model' => $whattodoItem_3,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\kbmCheck\whattodoItem3  $whattodoItem_3
     * @return \Illuminate\Http\Response
     */
    public function show(whattodoItem3 $whattodoItem_3)
    {
        return $whattodoItem_3;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\kbmCheck\whattodoItem3  $whattodoItem_3
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, whattodoItem3 $whattodoItem_3)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $whattodoItem_3->fill($request->all());
        $whattodoItem_3->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $whattodoItem_3->getTable(),
            'Model' => $whattodoItem_3,
        ]);        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\kbmCheck\whattodoItem3  $whattodoItem_3
     * @return \Illuminate\Http\Response
     */
    public function destroy(whattodoItem3 $whattodoItem_3)
    {
        $whattodoItem_3->delete(); 

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $whattodoItem_3->getTable(),
            'Model' => $whattodoItem_3,
        ]);       
    }
}

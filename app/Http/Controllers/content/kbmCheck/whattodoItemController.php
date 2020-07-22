<?php

namespace App\Http\Controllers\content\kbmCheck;

use App\Http\Controllers\Controller;
use App\Models\content\kbmCheck\whattodoItem;
use Illuminate\Http\Request;

class whattodoItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return whattodoItem::all();   
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
        
        $whattodoItem = new whattodoItem;
        $whattodoItem = whattodoItem::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $whattodoItem->getTable(),
            'Model' => $whattodoItem,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\kbmCheck\whattodoItem  $whattodoItem
     * @return \Illuminate\Http\Response
     */
    public function show(whattodoItem $whattodoItem)
    {
        return $whattodoItem;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\kbmCheck\whattodoItem  $whattodoItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, whattodoItem $whattodoItem)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $whattodoItem->fill($request->all());
        $whattodoItem->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $whattodoItem->getTable(),
            'Model' => $whattodoItem,
        ]);        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\kbmCheck\whattodoItem  $whattodoItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(whattodoItem $whattodoItem)
    {
        $whattodoItem->delete(); 

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $whattodoItem->getTable(),
            'Model' => $whattodoItem,
        ]);       
    }
}

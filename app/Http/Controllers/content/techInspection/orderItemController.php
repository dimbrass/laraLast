<?php

namespace App\Http\Controllers\content\techInspection;

use App\Http\Controllers\Controller;
use App\Models\content\techInspection\orderItem;
use Illuminate\Http\Request;

class orderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return orderItem::all();   
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
        
        $orderItem = new orderItem;
        $orderItem = orderItem::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $orderItem->getTable(),
            'Model' => $orderItem,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\mulctCheck\orderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function show(orderItem $orderItem)
    {
        return $orderItem;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\mulctCheck\orderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, orderItem $orderItem)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $orderItem->fill($request->all());
        $orderItem->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $orderItem->getTable(),
            'Model' => $orderItem,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\mulctCheck\orderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(orderItem $orderItem)
    {
        $orderItem->delete(); 

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $orderItem->getTable(),
            'Model' => $orderItem,
        ]);       
    }
}

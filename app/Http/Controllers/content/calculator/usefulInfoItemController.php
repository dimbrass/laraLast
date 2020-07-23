<?php

namespace App\Http\Controllers\content\calculator;

use App\Http\Controllers\Controller;
use App\Models\content\calculator\usefulInfoItem;
use Illuminate\Http\Request;

class usefulInfoItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return usefulInfoItem::all();   
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
        
        $usefulInfoItem = new usefulInfoItem;
        $usefulInfoItem = usefulInfoItem::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $usefulInfoItem->getTable(),
            'Model' => $usefulInfoItem,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\mulctCheck\usefulInfoItem  $usefulInfoItem
     * @return \Illuminate\Http\Response
     */
    public function show(usefulInfoItem $usefulInfoItem)
    {
        return $usefulInfoItem;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\mulctCheck\usefulInfoItem  $usefulInfoItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usefulInfoItem $usefulInfoItem)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $usefulInfoItem->fill($request->all());
        $usefulInfoItem->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $usefulInfoItem->getTable(),
            'Model' => $usefulInfoItem,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\mulctCheck\usefulInfoItem  $usefulInfoItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(usefulInfoItem $usefulInfoItem)
    {
        $usefulInfoItem->delete(); 

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $usefulInfoItem->getTable(),
            'Model' => $usefulInfoItem,
        ]);       
    }
}

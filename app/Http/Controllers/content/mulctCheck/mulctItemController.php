<?php

namespace App\Http\Controllers\content\mulctCheck;

use App\Http\Controllers\Controller;
use App\Models\content\mulctCheck\mulctItem;
use Illuminate\Http\Request;

class mulctItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return mulctItem::all();   
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
        
        $mulctItem = new mulctItem;
        $mulctItem = mulctItem::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $mulctItem->getTable(),
            'Model' => $mulctItem,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\mulctCheck\mulctItem  $mulctItem
     * @return \Illuminate\Http\Response
     */
    public function show(mulctItem $mulctItem)
    {
        return $mulctItem;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\mulctCheck\mulctItem  $mulctItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mulctItem $mulctItem)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $mulctItem->fill($request->all());
        $mulctItem->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $mulctItem->getTable(),
            'Model' => $mulctItem,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\mulctCheck\mulctItem  $mulctItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(mulctItem $mulctItem)
    {
        $mulctItem->delete(); 

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $mulctItem->getTable(),
            'Model' => $mulctItem,
        ]);       
    }
}

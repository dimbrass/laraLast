<?php

namespace App\Http\Controllers\content\polisCheckAuth;

use App\Http\Controllers\Controller;
use App\Models\content\polisCheckAuth\item;
use Illuminate\Http\Request;

class itemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return item::all();   
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
        
        $item = new item;
        $item = item::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $item->getTable(),
            'Model' => $item,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\mulctCheck\item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(item $item)
    {
        return $item;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\mulctCheck\item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, item $item)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $item->fill($request->all());
        $item->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $item->getTable(),
            'Model' => $item,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\mulctCheck\item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(item $item)
    {
        $item->delete(); 

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $item->getTable(),
            'Model' => $item,
        ]);       
    }
}

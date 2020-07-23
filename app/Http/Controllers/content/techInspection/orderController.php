<?php

namespace App\Http\Controllers\content\techInspection;

use App\Http\Controllers\Controller;
use App\Models\content\techInspection\order;
use Illuminate\Http\Request;

class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return order::all();   
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
        
        $order = new order;
        $order = order::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $order->getTable(),
            'Model' => $order,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\mulctCheck\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        return $order;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\mulctCheck\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $order->fill($request->all());
        $order->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $order->getTable(),
            'Model' => $order,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\mulctCheck\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        $order->delete(); 

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $order->getTable(),
            'Model' => $order,
        ]);       
    }
}

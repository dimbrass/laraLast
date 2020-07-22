<?php

namespace App\Http\Controllers\content\mulctCheck;

use App\Http\Controllers\Controller;
use App\Models\content\mulctCheck\mulctsToPay;
use Illuminate\Http\Request;

class mulctsToPayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return mulctsToPay::all();   
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
        
        $mulctsToPay = new mulctsToPay;
        $mulctsToPay = mulctsToPay::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $mulctsToPay->getTable(),
            'Model' => $mulctsToPay,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\mulctCheck\mulctsToPay  $mulctsToPay
     * @return \Illuminate\Http\Response
     */
    public function show(mulctsToPay $mulctsToPay)
    {
        return $mulctsToPay;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\mulctCheck\mulctsToPay  $mulctsToPay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mulctsToPay $mulctsToPay)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $mulctsToPay->fill($request->all());
        $mulctsToPay->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $mulctsToPay->getTable(),
            'Model' => $mulctsToPay,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\mulctCheck\mulctsToPay  $mulctsToPay
     * @return \Illuminate\Http\Response
     */
    public function destroy(mulctsToPay $mulctsToPay)
    {
        $mulctsToPay->delete(); 

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $mulctsToPay->getTable(),
            'Model' => $mulctsToPay,
        ]);       
    }
}

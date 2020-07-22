<?php

namespace App\Http\Controllers\content\mulctCheck;

use App\Http\Controllers\Controller;
use App\Models\content\mulctCheck\paidMulct;
use Illuminate\Http\Request;

class paidMulctController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return paidMulct::all();   
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
        
        $paidMulct = new paidMulct;
        $paidMulct = paidMulct::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $paidMulct->getTable(),
            'Model' => $paidMulct,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\mulctCheck\paidMulct  $paidMulct
     * @return \Illuminate\Http\Response
     */
    public function show(paidMulct $paidMulct)
    {
        return $paidMulct;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\mulctCheck\paidMulct  $paidMulct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, paidMulct $paidMulct)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $paidMulct->fill($request->all());
        $paidMulct->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $paidMulct->getTable(),
            'Model' => $paidMulct,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\mulctCheck\paidMulct  $paidMulct
     * @return \Illuminate\Http\Response
     */
    public function destroy(paidMulct $paidMulct)
    {
        $paidMulct->delete(); 

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $paidMulct->getTable(),
            'Model' => $paidMulct,
        ]);       
    }
}

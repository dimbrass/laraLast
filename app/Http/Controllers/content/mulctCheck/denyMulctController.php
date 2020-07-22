<?php

namespace App\Http\Controllers\content\mulctCheck;

use App\Http\Controllers\Controller;
use App\Models\content\mulctCheck\denyMulct;
use Illuminate\Http\Request;

class denyMulctController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return denyMulct::all();   
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
        
        $denyMulct = new denyMulct;
        $denyMulct = denyMulct::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $denyMulct->getTable(),
            'Model' => $denyMulct,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\mulctCheck\denyMulct  $denyMulct
     * @return \Illuminate\Http\Response
     */
    public function show(denyMulct $denyMulct)
    {
        return $denyMulct;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\mulctCheck\denyMulct  $denyMulct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, denyMulct $denyMulct)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $denyMulct->fill($request->all());
        $denyMulct->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $denyMulct->getTable(),
            'Model' => $denyMulct,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\mulctCheck\denyMulct  $denyMulct
     * @return \Illuminate\Http\Response
     */
    public function destroy(denyMulct $denyMulct)
    {
        $denyMulct->delete(); 

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $denyMulct->getTable(),
            'Model' => $denyMulct,
        ]);       
    }
}

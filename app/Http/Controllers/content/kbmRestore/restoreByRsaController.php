<?php

namespace App\Http\Controllers\content\kbmRestore;

use App\Http\Controllers\Controller;
use App\Models\content\kbmRestore\restoreByRsa;
use Illuminate\Http\Request;

class restoreByRsaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return restoreByRsa::all();   
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
        
        $restoreByRsa = new restoreByRsa;
        $restoreByRsa = restoreByRsa::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $restoreByRsa->getTable(),
            'Model' => $restoreByRsa,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\kbmRestore\restoreByRsa  $restoreByRsa
     * @return \Illuminate\Http\Response
     */
    public function show(restoreByRsa $restoreByRsa)
    {
        return $restoreByRsa;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\kbmRestore\restoreByRsa  $restoreByRsa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, restoreByRsa $restoreByRsa)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $restoreByRsa->fill($request->all());
        $restoreByRsa->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $restoreByRsa->getTable(),
            'Model' => $restoreByRsa,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\kbmRestore\restoreByRsa  $restoreByRsa
     * @return \Illuminate\Http\Response
     */
    public function destroy(restoreByRsa $restoreByRsa)
    {
        $restoreByRsa->delete(); 

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $restoreByRsa->getTable(),
            'Model' => $restoreByRsa,
        ]);       
    }
}

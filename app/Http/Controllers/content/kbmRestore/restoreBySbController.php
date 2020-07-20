<?php

namespace App\Http\Controllers\content\kbmRestore;

use App\Http\Controllers\Controller;
use App\Models\content\kbmRestore\restoreBySb;
use Illuminate\Http\Request;

class restoreBySbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return restoreBySb::all();   
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
        
        $restoreBySb = new restoreBySb;
        $restoreBySb = restoreBySb::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $restoreBySb->getTable(),
            'Model' => $restoreBySb,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\kbmRestore\restoreBySb  $restoreBySb
     * @return \Illuminate\Http\Response
     */
    public function show(restoreBySb $restoreBySb)
    {
        return $restoreBySb;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\kbmRestore\restoreBySb  $restoreBySb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, restoreBySb $restoreBySb)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $restoreBySb->fill($request->all());
        $restoreBySb->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $restoreBySb->getTable(),
            'Model' => $restoreBySb,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\kbmRestore\restoreBySb  $restoreBySb
     * @return \Illuminate\Http\Response
     */
    public function destroy(restoreBySb $restoreBySb)
    {
        $restoreBySb->delete(); 

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $restoreBySb->getTable(),
            'Model' => $restoreBySb,
        ]);       
    }
}

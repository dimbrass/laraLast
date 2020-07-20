<?php

namespace App\Http\Controllers\content\kbmRestore;

use App\Http\Controllers\Controller;
use App\Models\content\kbmRestore\restoreByQuick;
use Illuminate\Http\Request;

class restoreByQuickController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return restoreByQuick::all();   
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
        
        $restoreByQuick = new restoreByQuick;
        $restoreByQuick = restoreByQuick::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $restoreByQuick->getTable(),
            'Model' => $restoreByQuick,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\kbmRestore\restoreByQuick  $restoreByQuick
     * @return \Illuminate\Http\Response
     */
    public function show(restoreByQuick $restoreByQuick)
    {
        return $restoreByQuick;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\kbmRestore\restoreByQuick  $restoreByQuick
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, restoreByQuick $restoreByQuick)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $restoreByQuick->fill($request->all());
        $restoreByQuick->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $restoreByQuick->getTable(),
            'Model' => $restoreByQuick,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\kbmRestore\restoreByQuick  $restoreByQuick
     * @return \Illuminate\Http\Response
     */
    public function destroy(restoreByQuick $restoreByQuick)
    {
        $restoreByQuick->delete(); 

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $restoreByQuick->getTable(),
            'Model' => $restoreByQuick,
        ]);       
    }
}

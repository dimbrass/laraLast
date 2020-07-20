<?php

namespace App\Http\Controllers\content\kbmRestore;

use App\Http\Controllers\Controller;
use App\Models\content\kbmRestore\howToRestore;
use Illuminate\Http\Request;

class howToRestoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return howToRestore::all();   
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
        
        $howToRestore = new howToRestore;
        $howToRestore = howToRestore::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $howToRestore->getTable(),
            'Model' => $howToRestore,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\kbmRestore\howToRestore  $howToRestore
     * @return \Illuminate\Http\Response
     */
    public function show(howToRestore $howToRestore)
    {
        return $howToRestore;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\kbmRestore\howToRestore  $howToRestore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, howToRestore $howToRestore)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $howToRestore->fill($request->all());
        $howToRestore->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $howToRestore->getTable(),
            'Model' => $howToRestore,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\kbmRestore\howToRestore  $howToRestore
     * @return \Illuminate\Http\Response
     */
    public function destroy(howToRestore $howToRestore)
    {
        $howToRestore->delete(); 

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $howToRestore->getTable(),
            'Model' => $howToRestore,
        ]);       
    }
}

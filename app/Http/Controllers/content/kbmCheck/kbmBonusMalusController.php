<?php

namespace App\Http\Controllers\content\kbmCheck;

use App\Http\Controllers\Controller;
use App\Models\content\kbmCheck\kbmBonusMalus;
use Illuminate\Http\Request;

class kbmBonusMalusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return kbmBonusMalus::all();   
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
        
        $kbmBonusMalu = new kbmBonusMalus;
        $kbmBonusMalu = kbmBonusMalus::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $kbmBonusMalu->getTable(),
            'Model' => $kbmBonusMalu,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\kbmCheck\kbmBonusMalus  $kbmBonusMalu
     * @return \Illuminate\Http\Response
     */
    public function show(kbmBonusMalus $kbmBonusMalu)
    {   
        return $kbmBonusMalu;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\kbmCheck\kbmBonusMalus  $kbmBonusMalu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kbmBonusMalus $kbmBonusMalu)
    {            
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $kbmBonusMalu->fill($request->all());
        $kbmBonusMalu->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $kbmBonusMalu->getTable(),
            'Model' => $kbmBonusMalu,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\kbmCheck\kbmBonusMalus  $kbmBonusMalu
     * @return \Illuminate\Http\Response
     */
    public function destroy(kbmBonusMalus $kbmBonusMalu)
    {   
        $kbmBonusMalu->delete(); 

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $kbmBonusMalu->getTable(),
            'Model' => $kbmBonusMalu,
        ]);           
    }
}

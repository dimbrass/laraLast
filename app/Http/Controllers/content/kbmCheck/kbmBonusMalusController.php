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
        
        $kbmBonusMalus = new kbmBonusMalus;
        $kbmBonusMalus = kbmBonusMalus::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $kbmBonusMalus->getTable(),
            'Model' => $kbmBonusMalus,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\kbmCheck\kbmBonusMalus  $kbmBonusMalus
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        return kbmBonusMalus::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\kbmCheck\kbmBonusMalus  $kbmBonusMalus
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, kbmBonusMalus $kbmBonusMalus)
    {         dd($this->route('slug'));
        $table = $kbmBonusMalus->getTable();

        // если в инъекции прилетел пустой объект то он есть но не имеет id
        if (!$kbmBonusMalus->id) 
        {
            $kbmBonusMalus = kbmBonusMalus::findOrFail($id);             
        } 
        // если объект в базе найден
        if ($kbmBonusMalus)
        {           
            // validate
            $validatedData = $request->validateWithBag('content', [
                'page_id' => 'required|numeric',
            ]); 
            
            $kbmBonusMalus->fill($request->all());
            $kbmBonusMalus->save();
        }
        else {
             return response()->json([
                'error' => 'Object does not exist in database',
                'table' => $table,
                'id' => $id,
            ]);           
        }

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $table,
            'Model' => $kbmBonusMalus,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\kbmCheck\kbmBonusMalus  $kbmBonusMalus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, kbmBonusMalus $kbmBonusMalus)
    {   
        $table = $kbmBonusMalus->getTable();
        // если в инъекции прилетел пустой объект то он есть но не имеет id
        if (!$kbmBonusMalus->id) 
        {
            $kbmBonusMalus = kbmBonusMalus::all()->find($id); 
        } 
        // если объект в базе найден
        if ($kbmBonusMalus) 
        {  
            $kbmBonusMalus->delete();        
        }
        else {
            return response()->json([
                'error' => 'Object does not exist in database',
                'table' => $table,
                'id' => $id,
            ]);            
        }

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $table,
            'Model' => $kbmBonusMalus,
        ]);           
    }
}

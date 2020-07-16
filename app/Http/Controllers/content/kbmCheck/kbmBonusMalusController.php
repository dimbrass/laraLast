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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $kbmBonusMalus->page_id = $request->page_id;
        $kbmBonusMalus->title = $request->title;
        $kbmBonusMalus->top = $request->top;
        $kbmBonusMalus->paragraph1 = $request->paragraph1;
        $kbmBonusMalus->paragraph2 = $request->paragraph2;
        $kbmBonusMalus->paragraph3 = $request->paragraph3;
        $kbmBonusMalus->bold_paragraph1 = $request->bold_paragraph1;
        $kbmBonusMalus->bold_paragraph2 = $request->bold_paragraph2;

        $kbmBonusMalus->save(); 

        return response('Successfully stored!', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\kbmCheck\kbmBonusMalus  $kbmBonusMalus
     * @return \Illuminate\Http\Response
     */
    public function show(kbmBonusMalus $kbmBonusMalus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\content\kbmCheck\kbmBonusMalus  $kbmBonusMalus
     * @return \Illuminate\Http\Response
     */
    public function edit(kbmBonusMalus $kbmBonusMalus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\kbmCheck\kbmBonusMalus  $kbmBonusMalus
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, kbmBonusMalus $kbmBonusMalus)
    {         
        $table = $kbmBonusMalus->getTable();
        // если в инъекции прилетел пустой объект то он есть но не имеет id
        if (!$kbmBonusMalus->id) 
        {
            $kbmBonusMalus = kbmBonusMalus::find($id);             
        } 
        // если объект в базе найден
        if ($kbmBonusMalus)
        {           
            // validate
            $validatedData = $request->validateWithBag('content', [
                'page_id' => 'required|numeric',
            ]); 
            
            $kbmBonusMalus->page_id = $request->page_id;
            $kbmBonusMalus->title = $request->title;
            $kbmBonusMalus->top = $request->top; 
            $kbmBonusMalus->paragraph1 = $request->paragraph1;
            $kbmBonusMalus->paragraph2 = $request->paragraph2;
            $kbmBonusMalus->paragraph3 = $request->paragraph3;
            $kbmBonusMalus->bold_paragraph1 = $request->bold_paragraph1;
            $kbmBonusMalus->bold_paragraph2 = $request->bold_paragraph2;
            
            $kbmBonusMalus->save(); 
        }
        else {
             return response()->json([
                'error' => 'Object does not exist in database',
                'table' => $table,
                'id' => $id,
            ]);           
        }

        return response('Successfully updated!', 200);
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

        return response('Successfully deleted!', 200);
    }
}

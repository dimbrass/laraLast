<?php

namespace App\Http\Controllers\content\home;

use App\Http\Controllers\Controller;
use App\Models\content\home\socMedia;
use Illuminate\Http\Request;

class socMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return socMedia::all(); 
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
        
        $socMedium = new socMedia;
        $socMedium = socMedia::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $socMedium->getTable(),
            'Model' => $socMedium,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\home\socMedia  $socMedium
     * @return \Illuminate\Http\Response
     */
    public function show(socMedia $socMedium)
    {
        return $socMedium;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\home\socMedia  $socMedium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, socMedia $socMedium)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $socMedium->fill($request->all());
        $socMedium->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $socMedium->getTable(),
            'Model' => $socMedium,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\home\socMedia  $socMedium
     * @return \Illuminate\Http\Response
     */
    public function destroy(socMedia $socMedium)
    {
        $socMedium->delete();

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $socMedium->getTable(),
            'Model' => $socMedium,
        ]);           
    }
}

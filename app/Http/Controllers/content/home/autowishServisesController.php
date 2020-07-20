<?php

namespace App\Http\Controllers\content\home;

use App\Http\Controllers\Controller;
use App\Models\content\home\autowishServises;
use Illuminate\Http\Request;

class autowishServisesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return autowishServises::all();   
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
        
        $autowishServise = new autowishServises;
        $autowishServise = autowishServises::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $autowishServise->getTable(),
            'Model' => $autowishServise,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\home\autowishServises  $autowishServise
     * @return \Illuminate\Http\Response
     */
    public function show(autowishServises $autowishServise)
    {
        return $autowishServise;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\home\autowishServises  $autowishServise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, autowishServises $autowishServise)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $autowishServise->fill($request->all());
        $autowishServise->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $autowishServise->getTable(),
            'Model' => $autowishServise,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\home\autowishServises  $autowishServise
     * @return \Illuminate\Http\Response
     */
    public function destroy(autowishServises $autowishServise)
    {
        $autowishServise->delete();

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $autowishServise->getTable(),
            'Model' => $autowishServise,
        ]);         
    }
}

<?php

namespace App\Http\Controllers\content\home;

use App\Http\Controllers\Controller;
use App\Models\content\home\autowishAbout;
use Illuminate\Http\Request;

class autowishAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return autowishAbout::all();   
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
        
        $autowishAbout = new autowishAbout;
        $autowishAbout = autowishAbout::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $autowishAbout->getTable(),
            'Model' => $autowishAbout,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\home\autowishAbout  $autowishAbout
     * @return \Illuminate\Http\Response
     */
    public function show(autowishAbout $autowishAbout)
    {
        return $autowishAbout;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\home\autowishAbout  $autowishAbout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, autowishAbout $autowishAbout)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $autowishAbout->fill($request->all());
        $autowishAbout->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $autowishAbout->getTable(),
            'Model' => $autowishAbout,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\home\autowishAbout  $autowishAbout
     * @return \Illuminate\Http\Response
     */
    public function destroy(autowishAbout $autowishAbout)
    {
        $autowishAbout->delete();

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $autowishAbout->getTable(),
            'Model' => $autowishAbout,
        ]);           
    }
}

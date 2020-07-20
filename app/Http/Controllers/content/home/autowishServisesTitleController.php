<?php

namespace App\Http\Controllers\content\home;

use App\Http\Controllers\Controller;
use App\Models\content\home\autowishServisesTitle;
use Illuminate\Http\Request;

class autowishServisesTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return autowishServisesTitle::all();   
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
        
        $autowishServisesTitle = new autowishServisesTitle;
        $autowishServisesTitle = autowishServisesTitle::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $autowishServisesTitle->getTable(),
            'Model' => $autowishServisesTitle,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\home\autowishServisesTitle  $autowishServisesTitle
     * @return \Illuminate\Http\Response
     */
    public function show(autowishServisesTitle $autowishServisesTitle)
    {
        return $autowishServisesTitle;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\home\autowishServisesTitle  $autowishServisesTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, autowishServisesTitle $autowishServisesTitle)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $autowishServisesTitle->fill($request->all());
        $autowishServisesTitle->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $autowishServisesTitle->getTable(),
            'Model' => $autowishServisesTitle,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\home\autowishServisesTitle  $autowishServisesTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(autowishServisesTitle $autowishServisesTitle)
    {
        $autowishServisesTitle->delete();

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $autowishServisesTitle->getTable(),
            'Model' => $autowishServisesTitle,
        ]);           
    }
}

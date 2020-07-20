<?php

namespace App\Http\Controllers\content\home;

use App\Http\Controllers\Controller;
use App\Models\content\home\Page;
use App\Models\content\home\ourServisesTitle;
use Illuminate\Http\Request;

class ourServisesTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        return ourServisesTitle::all();
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
        
        $ourServisesTitle = new ourServisesTitle;
        $ourServisesTitle = ourServisesTitle::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $ourServisesTitle->getTable(),
            'Model' => $ourServisesTitle,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\home\ourServisesTitle  $ourServisesTitle
     * @return \Illuminate\Http\Response
     */
    public function show(ourServisesTitle $ourServisesTitle)
    {
        return $ourServisesTitle;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\home\ourServisesTitle  $ourServisesTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ourServisesTitle $ourServisesTitle)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $ourServisesTitle->fill($request->all());
        $ourServisesTitle->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $ourServisesTitle->getTable(),
            'Model' => $ourServisesTitle,
        ]);          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\home\ourServisesTitle  $ourServisesTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(ourServisesTitle $ourServisesTitle)
    {
        $ourServisesTitle->delete();

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $ourServisesTitle->getTable(),
            'Model' => $ourServisesTitle,
        ]);           
    }
}

<?php

namespace App\Http\Controllers\content\techInspection;

use App\Http\Controllers\Controller;
use App\Models\content\techInspection\top;
use Illuminate\Http\Request;

class topController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return top::all();   
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
        
        $top = new top;
        $top = top::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $top->getTable(),
            'Model' => $top,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\mulctCheck\top  $top
     * @return \Illuminate\Http\Response
     */
    public function show(top $top)
    {
        return $top;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\mulctCheck\top  $top
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, top $top)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $top->fill($request->all());
        $top->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $top->getTable(),
            'Model' => $top,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\mulctCheck\top  $top
     * @return \Illuminate\Http\Response
     */
    public function destroy(top $top)
    {
        $top->delete(); 

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $top->getTable(),
            'Model' => $top,
        ]);       
    }
}

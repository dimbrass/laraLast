<?php

namespace App\Http\Controllers\content\mulctCheck;

use App\Http\Controllers\Controller;
use App\Models\content\mulctCheck\useful;
use Illuminate\Http\Request;

class usefulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return useful::all();   
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
        
        $useful = new useful;
        $useful = useful::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $useful->getTable(),
            'Model' => $useful,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\mulctCheck\useful  $useful
     * @return \Illuminate\Http\Response
     */
    public function show(useful $useful)
    {
        return $useful;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\mulctCheck\useful  $useful
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, useful $useful)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $useful->fill($request->all());
        $useful->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $useful->getTable(),
            'Model' => $useful,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\mulctCheck\useful  $useful
     * @return \Illuminate\Http\Response
     */
    public function destroy(useful $useful)
    {
        $useful->delete(); 

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $useful->getTable(),
            'Model' => $useful,
        ]);       
    }
}

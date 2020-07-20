<?php

namespace App\Http\Controllers\content\home;

use App\Http\Controllers\Controller;
use App\Models\content\home\ourServises;
use Illuminate\Http\Request;

class ourServisesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ourServises::all();  
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
        
        $ourServise = new ourServises;
        $ourServise = ourServises::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $ourServise->getTable(),
            'Model' => $ourServise,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\home\ourServises  $ourServise
     * @return \Illuminate\Http\Response
     */
    public function show(ourServises $ourServise)
    {
        return $ourServise;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\home\ourServises  $ourServise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ourServises $ourServise)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $ourServise->fill($request->all());
        $ourServise->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $ourServise->getTable(),
            'Model' => $ourServise,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\home\ourServises  $ourServise
     * @return \Illuminate\Http\Response
     */
    public function destroy(ourServises $ourServise)
    {
        $ourServise->delete(); 

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $ourServise->getTable(),
            'Model' => $ourServise,
        ]);         
    }
}

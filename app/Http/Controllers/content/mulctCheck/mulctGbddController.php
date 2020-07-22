<?php

namespace App\Http\Controllers\content\mulctCheck;

use App\Http\Controllers\Controller;
use App\Models\content\mulctCheck\mulctGbdd;
use Illuminate\Http\Request;

class mulctGbddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return mulctGbdd::all();   
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
        
        $mulctGbdd = new mulctGbdd;
        $mulctGbdd = mulctGbdd::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $mulctGbdd->getTable(),
            'Model' => $mulctGbdd,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\mulctCheck\mulctGbdd  $mulctGbdd
     * @return \Illuminate\Http\Response
     */
    public function show(mulctGbdd $mulctGbdd)
    {
        return $mulctGbdd;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\mulctCheck\mulctGbdd  $mulctGbdd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mulctGbdd $mulctGbdd)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $mulctGbdd->fill($request->all());
        $mulctGbdd->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $mulctGbdd->getTable(),
            'Model' => $mulctGbdd,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\mulctCheck\mulctGbdd  $mulctGbdd
     * @return \Illuminate\Http\Response
     */
    public function destroy(mulctGbdd $mulctGbdd)
    {
        $mulctGbdd->delete(); 

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $mulctGbdd->getTable(),
            'Model' => $mulctGbdd,
        ]);       
    }
}

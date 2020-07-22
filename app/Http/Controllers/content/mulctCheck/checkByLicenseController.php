<?php

namespace App\Http\Controllers\content\mulctCheck;

use App\Http\Controllers\Controller;
use App\Models\content\mulctCheck\checkByLicense;
use Illuminate\Http\Request;

class checkByLicenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return checkByLicense::all();   
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
        
        $checkByLicense = new checkByLicense;
        $checkByLicense = checkByLicense::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $checkByLicense->getTable(),
            'Model' => $checkByLicense,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\mulctCheck\checkByLicense  $checkByLicense
     * @return \Illuminate\Http\Response
     */
    public function show(checkByLicense $checkByLicense)
    {
        return $checkByLicense;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\mulctCheck\checkByLicense  $checkByLicense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, checkByLicense $checkByLicense)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $checkByLicense->fill($request->all());
        $checkByLicense->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $checkByLicense->getTable(),
            'Model' => $checkByLicense,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\mulctCheck\checkByLicense  $checkByLicense
     * @return \Illuminate\Http\Response
     */
    public function destroy(checkByLicense $checkByLicense)
    {
        $checkByLicense->delete(); 

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $checkByLicense->getTable(),
            'Model' => $checkByLicense,
        ]);       
    }
}

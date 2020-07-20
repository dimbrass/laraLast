<?php

namespace App\Http\Controllers\content\kbmRestore;

use App\Http\Controllers\Controller;
use App\Models\content\kbmRestore\restoreByInsurance;
use Illuminate\Http\Request;

class restoreByInsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return restoreByInsurance::all();   
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
        
        $restoreByInsurance = new restoreByInsurance;
        $restoreByInsurance = restoreByInsurance::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $restoreByInsurance->getTable(),
            'Model' => $restoreByInsurance,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\kbmRestore\restoreByInsurance  $restoreByInsurance
     * @return \Illuminate\Http\Response
     */
    public function show(restoreByInsurance $restoreByInsurance)
    {
        return $restoreByInsurance;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\kbmRestore\restoreByInsurance  $restoreByInsurance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, restoreByInsurance $restoreByInsurance)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $restoreByInsurance->fill($request->all());
        $restoreByInsurance->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $restoreByInsurance->getTable(),
            'Model' => $restoreByInsurance,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\kbmRestore\restoreByInsurance  $restoreByInsurance
     * @return \Illuminate\Http\Response
     */
    public function destroy(restoreByInsurance $restoreByInsurance)
    {
        $restoreByInsurance->delete(); 

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $restoreByInsurance->getTable(),
            'Model' => $restoreByInsurance,
        ]);       
    }
}

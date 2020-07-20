<?php

namespace App\Http\Controllers\content\home;

use App\Http\Controllers\Controller;
use App\Models\content\home\autowishBenefits;
use Illuminate\Http\Request;

class autowishBenefitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return autowishBenefits::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $autowishBenefit = new autowishBenefits;
        $autowishBenefit = autowishBenefits::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $autowishBenefit->getTable(),
            'Model' => $autowishBenefit,
        ]);     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\home\autowishBenefits  $autowishBenefit
     * @return \Illuminate\Http\Response
     */
    public function show(autowishBenefits $autowishBenefit)
    {
        return $autowishBenefit;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\home\autowishBenefits  $autowishBenefit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, autowishBenefits $autowishBenefit)
    {        
        $autowishBenefit->fill($request->all());
        $autowishBenefit->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $autowishBenefit->getTable(),
            'Model' => $autowishBenefit,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\home\autowishBenefits  $autowishBenefit
     * @return \Illuminate\Http\Response
     */
    public function destroy(autowishBenefits $autowishBenefit)
    {
        $autowishBenefit->delete();

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $autowishBenefit->getTable(),
            'Model' => $autowishBenefit,
        ]);           
    }
}

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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $autowishBenefits = new autowishBenefits;
        $autowishBenefits->page_id = $request->page_id;
        $autowishBenefits->bold = $request->bold;
        $autowishBenefits->text = $request->text;

        $autowishBenefits->save(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\home\autowishBenefits  $autowishBenefits
     * @return \Illuminate\Http\Response
     */
    public function show(autowishBenefits $autowishBenefits)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\content\home\autowishBenefits  $autowishBenefits
     * @return \Illuminate\Http\Response
     */
    public function edit(autowishBenefits $autowishBenefits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\home\autowishBenefits  $autowishBenefits
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, autowishBenefits $autowishBenefits)
    {
        $autowishBenefits->page_id = $request->page_id;
        $autowishBenefits->bold = $request->bold;
        $autowishBenefits->text = $request->text;

        $autowishBenefits->save(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\home\autowishBenefits  $autowishBenefits
     * @return \Illuminate\Http\Response
     */
    public function destroy(autowishBenefits $autowishBenefits)
    {
        $autowishBenefits->delete();
    }
}

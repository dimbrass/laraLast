<?php

namespace App\Http\Controllers\content\home;

use App\Http\Controllers\Controller;
use App\Models\content\home\Page;
use App\Models\content\home\insurance;
use Illuminate\Http\Request;

class insuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insurance = Insurance::all();  
               // $page = $insurance->page; dd($page);->first()
        return view('content\home\blocks\insurance\index', ['insurance' => $insurance]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content\home\blocks\insurance\create');
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
        
        $insurance = new insurance;
        $insurance = insurance::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $insurance->getTable(),
            'Model' => $insurance,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\home\insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function show(insurance $insurance)
    {
        return view('content\home\blocks\insurance\show', ['block' => $insurance]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\content\home\insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function edit(insurance $insurance)
    {
        return view('content\home\blocks\insurance\edit', ['block' => $insurance]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\home\insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, insurance $insurance)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $insurance->fill($request->all());
        $insurance->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $insurance->getTable(),
            'Model' => $insurance,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\home\insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function destroy(insurance $insurance)
    {
        $insurance->delete();

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $insurance->getTable(),
            'Model' => $insurance,
        ]);           
    }
}

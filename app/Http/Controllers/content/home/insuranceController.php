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
        $insurance = new Insurance;
        $insurance->page_id = $request->page_id;
        $insurance->link = $request->link;
        $insurance->save();

        return redirect()->route('insurance.index');
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
        $insurance->page_id = $request->page_id;
        $insurance->link = $request->link;
        $insurance->save();
        
        return redirect()->route('insurance.index');
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
        
        return redirect()->route('insurance.index');
    }
}

<?php

namespace App\Http\Controllers\content\userAgreement;

use App\Http\Controllers\Controller;
use App\Models\content\userAgreement\textBlock;
use Illuminate\Http\Request;

class textBlockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return textBlock::all();   
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
        
        $textBlock = new textBlock;
        $textBlock = textBlock::create($request->all());

        return response()->json([
            'Success' => 'stored!',
            'Staus' => '200',
            'Table' => $textBlock->getTable(),
            'Model' => $textBlock,
        ]);           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\mulctCheck\textBlock  $textBlock
     * @return \Illuminate\Http\Response
     */
    public function show(textBlock $textBlock)
    {
        return $textBlock;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\mulctCheck\textBlock  $textBlock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, textBlock $textBlock)
    {
        // validate
        $validatedData = $request->validateWithBag('content', [
            'page_id' => 'required|numeric',
        ]); 
        
        $textBlock->fill($request->all());
        $textBlock->save();

        return response()->json([
            'Success' => 'updated!',
            'Staus' => '200',
            'Table' => $textBlock->getTable(),
            'Model' => $textBlock,
        ]);           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\mulctCheck\textBlock  $textBlock
     * @return \Illuminate\Http\Response
     */
    public function destroy(textBlock $textBlock)
    {
        $textBlock->delete(); 

        return response()->json([
            'Success' => 'deleted!',
            'Staus' => '200',
            'Table' => $textBlock->getTable(),
            'Model' => $textBlock,
        ]);       
    }
}

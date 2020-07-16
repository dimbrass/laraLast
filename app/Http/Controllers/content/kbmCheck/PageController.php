<?php

namespace App\Http\Controllers\content\kbmCheck;

use App\Http\Controllers\Controller;
use App\Models\content\kbmCheck\Page;
use App\Models\content\kbmCheck\kbmBonusMalus;
use App\Models\content\kbmCheck\whattodoTitle;
use App\Models\content\kbmCheck\whattodoItem_1;
use App\Models\content\kbmCheck\whattodoItem_2;
use App\Models\content\kbmCheck\whattodoItem_3;
use Illuminate\Http\Request;

class PageController extends Controller
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
        // validate
        $validatedData = $request->validateWithBag('content', [
            'name' => 'required|max:255',
        ]);
        
        $page = new Page;
        $page->name = $request->name;
        $page->title = $request->title;
        $page->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content\kbmCheck\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\content\kbmCheck\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content\kbmCheck\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page, $id)
    {   
        $table = $page->getTable();
        // если в инъекции прилетел пустой объект то он есть но не имеет id
        if (!$page->id) 
        {
            $page = Page::find($id);             
        } 
        // если объект в базе найден
        if ($page)
        {     
            // validate
            $validatedData = $request->validateWithBag('content', [
                'name' => 'required|max:255',
            ]);
            
            $page->name = $request->name;
            $page->title = $request->title;

            $page->save();            
        }
        else {
             return response()->json([
                'error' => 'Object does not exist in database',
                'table' => $table,
                'id' => $id,
            ]);           
        }

        return response('Successfully updated!', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content\kbmCheck\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();

        
        $table = $page->getTable();
        // если в инъекции прилетел пустой объект то он есть но не имеет id
        if (!$page->id) 
        {
            $page = Page::find($id); 
        } 
        // если объект в базе найден
        if ($page) 
        {  
            $page->delete();        
        }
        else {
            return response()->json([
                'error' => 'Object does not exist in database',
                'table' => $table,
                'id' => $id,
            ]);            
        }

        return response('Successfully deleted!', 200);
    }
}

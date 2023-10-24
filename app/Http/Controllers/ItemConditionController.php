<?php

namespace App\Http\Controllers;

use App\Models\Item_Condition;
use Illuminate\Http\Request;

class ItemConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function showCondition(Item_Condition $item_Condition)
    {
        $item_conditions = Item_Condition::all();
        return view('create', compact('item_conditions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item_Condition $item_Condition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item_Condition $item_Condition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item_Condition $item_Condition)
    {
        //
    }
}

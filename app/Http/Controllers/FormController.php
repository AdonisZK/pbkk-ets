<?php

namespace App\Http\Controllers;

use App\Models\form;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'minus' => 'required',
            'quantity' => 'required|numeric',
            // 'condition' => 'required',
            // 'category' => 'required',
            // 'image' => [
            //     'required',
            //     'file',
            // ]
        ]);

        // if ($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $filename = $file->getClientOriginalName();
        //     $file->move(public_path('images'), $filename);

        $form = new Form;
        $form->title = $request->title;
        $form->description = $request->description;
        $form->minus = $request->minus;
        $form->quantity = $request->quantity;
        $form->condition = $request->condition;
        $form->category = $request->category;
        // $form->image = $filename;
        $form->user_id = Auth::user()->id;
        $form->save();
        // }
        return redirect('/dashboard');

        // return back()->with('success', 'Form submitted successfully!');  

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forms = Form::with('user')->get();
        return view('dashboard', compact('forms'));
    }

    public function showListing()
    {
        $forms = Form::where('user_id', Auth::user()->id)->get();
        return view('listing', compact('forms'));
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

    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {
        return view('dashboard', compact('form'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $form = Form::find($id);

        if (!$form) {
            abort(404);
        }

        if (auth()->user()->id !== $form->user_id) {
            abort(403, 'Unauthorized action.');
        }

        return view('edit', compact('form'));
    }

    public function destroy($id)
    {
        $form = Form::find($id);
        $form->delete();
        return redirect('/listing');
    }

    public function update(Request $request, $id)
    {
        $form = Form::find($id);
        $form->title = $request->title;
        $form->description = $request->description;
        $form->minus = $request->minus;
        $form->quantity = $request->quantity;
        $form->image = $request->image;
        $form->save();
        return redirect('/listing');
    }


    /**
     * Update the specified resource in storage.
     */
    /**
     * Remove the specified resource from storage.
     */
}

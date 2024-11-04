<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\Images;

use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $items = Items::all();
        return view('manager.items.main', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //

        return view('manager.items.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'description' => 'required|string|max:255',
        //     'text' => 'required|string|max:255',
        //     'price' => 'required|numeric'
        // ]);

        $items = new Items();

        
        $items->name = $request->name;
        $items->item_name = $request->name;
        $items->description = $request->description;
        $items->category = $request['category']; //$request['category'];

        $items->price = '1.25';
        $items->status = '1';
        $items->insert_date = now();
        $items->second_description = $request['second_description'];




        $items->save();

        

        $images = new Images();

        $user = auth()->user();
        $images->user_id = $user['id'];
        $images->item_id =$items->id;

    

        $images->category = $request['category'];
        $images->upload_date = now();

        $file = file_get_contents($request->file('file')->getRealPath());

        $images->image = $file;
        $images->description = $request->description;
        

        

        //dd($images);

        
        $images->save();
        

        return redirect()->route('manager')->with('success', 'Data added successfully');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit() {
        
        $items = Items::all();
        return view("manager.items.edit", compact('items'));

    }




}

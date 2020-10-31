<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::orderBy('make')->orderBy('model')->get();
        return view('trains.index', compact('trains'));
    }

    public function create()
    {
        return view('trains.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'make' => 'required|min:1|max:255',
            'model' => 'required|min:1|max:255',
            'production_start' => 'required',
            'production_end' => 'required',
            'description' => 'max:3000'
        ]);
        $attributes = $request->all(
            'make',
            'model',
            'production_start',
            'production_end',
            'description'
        );
        $attributes['img_url'] = '';
        $train = Train::create($attributes);
        return redirect(url($train->path));
    }

    public function show(Train $train)
    {
        return view('trains.show', compact('train'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Train  $train
     * @return \Illuminate\Http\Response
     */
    public function edit(Train $train)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Train  $train
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Train $train)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Train  $train
     * @return \Illuminate\Http\Response
     */
    public function destroy(Train $train)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\dog;
use Illuminate\Http\Request;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return dog::all();
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Dog::create($request->all());
        return response()->json($dog,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function show(Dog $dog)
    {
        return $dog;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dog $dog)
    {
        $dog->update($request->all());
        return response()->json($dog, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, Dog $dog)
    {
        $dog->delete();
        return response()->json(null,204);
    }
}

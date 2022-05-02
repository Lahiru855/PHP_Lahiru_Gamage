<?php

namespace App\Http\Controllers;

use App\Models\Representative;
use Illuminate\Http\Request;

class RepresentativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $representatives = Representative::all();
        return view ('representatives.index')->with('representatives', $representatives);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('representatives.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'name'=>'required',
            'email'=>['required','email','unique:representatives'],
            // 'telephone'=>['required','unique:representatives','numeric','between:9,11'],
            'telephone'=>['required','unique:representatives','numeric'],
            'route'=>'required'
        ]);
        $input = $request->all();
        Representative::create($input);
        return redirect('representatives')->with('flash_message', 'Sales Representative Addedd!');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Representative  $representative
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $representative =Representative::find($id);
        return view('representatives.show')->with('representatives', $representative);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Representative  $representative
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $representative =Representative::find($id);
        return view('representatives.edit')->with('representatives', $representative);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Representative  $representative
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $request->validate([
            'name'=>'required',
            'email'=>['required','email'],
            'telephone'=>['required','numeric'],
            'route'=>'required',
            'comments'
        ]);

        $representative = Representative::find($id);
        $input = $request->all();
        $representative->update($input);
        return redirect('representatives')->with('flash_message', 'Sales Representative Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Representative  $representative
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Representative::destroy($id);
        return redirect('representatives')->with('flash_message', 'Sales Representative deleted!');
    }
}

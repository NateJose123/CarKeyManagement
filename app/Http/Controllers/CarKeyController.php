<?php

namespace App\Http\Controllers;

use App\CarKey;
use Illuminate\Http\Request;

class CarKeyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $CarKey=CarKey::all();
        return view('CarKey',['CarKey'=>$CarKey,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $CarKey=CarKey::all();
        return view('CarKey',['CarKey'=>$CarKey,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $CarKey= new CarKey();
        $CarKey->CarKeyNumber =  $request->input('CarKeyNumber');
        $CarKey->CarModel =  $request->input('CarModel');
        $CarKey->CarYear =  $request->input('CarYear');
        $CarKey->AdditionalInfo =  $request->input('AdditionalInfo');
        $CarKey->save();
        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($CarKeyNumber)
    {
        $CarKey=CarKey::find($CarKeyNumber);
        $CarKeys=CarKey::all();
        return view('CarKey',['CarKeys'=>$CarKeys, 'CarKey'=>$CarKey,'layout'=>'show']);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($CarKeyNumber)
    {
        $CarKey=CarKey::find($CarKeyNumber);
        $CarKeys=CarKey::all();
        return view('CarKey',['CarKeys'=>$CarKeys, 'CarKey'=>$CarKey,'layout'=>'edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $CarKeyNumber)
    {
     $CarKey=CarKey::find($CarKeyNumber);
     $CarKey->CarKeyNumber =  $request->input('CarKeyNumber');
     $CarKey->CarModel =  $request->input('CarModel');
     $CarKey->CarYear =  $request->input('CarYear');
     $CarKey->AdditionalInfo =  $request->input('AdditionalInfo');
     $CarKey->save();
     return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($CarKeyNumber)
    {
        $CarKey=CarKey::find($CarKeyNumber);
        $CarKey->delete();
        return redirect('/');
    }
}

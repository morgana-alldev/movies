<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Artists;
use App\Http\Requests\CreateValidationRequest;

class ArtistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artistsList = DB::table('artists')->get();
        return view('artists.index', [
            'artists'=>$artistsList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artists.create');
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
                'title'=>'required'               
            ]);  

        $artist = Artists::create([
            'name'=>$request->input('name'),
            'title'=>$request->input('title')
         ]);  
         
         return redirect('/artists'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artist = Artists::find($id);
        return view('artists.edit', ['artist' => $artist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
                'name'=>'required',
                'title'=>'required'               
            ]);  

        $artist = Artists::where('id', $id)
            ->update([
                'name'=>$request->input('name'),
                'title'=>$request->input('title')
         ]);  
         
         return redirect('/artists'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $artist = Artists::find($id);
         $artist->delete();
         return redirect('/artists'); 
    }
}

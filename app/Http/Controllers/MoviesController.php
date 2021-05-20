<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Movies;
use App\Http\Requests\CreateValidationRequest;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moviesList = DB::table('movies')
        ->where('status', 1)
        ->where('rating', '>', 5)
        ->get();
        return view('movies.index', [
            'movies'=>$moviesList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
  
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
                'image'=>'required|mimes:jpg,png,jpeg|max:5048',
                'name'=>'required',
                'rating'=>'required|min:1|max:10',
                'status'=> 'required|integer|min:1|max:2',
                'description'=>'required'
            ]);

        $newImgName = time().'-'. str_replace(' ', '_', $request->name) .'.'. $request->file('image')->extension();

        $request->file('image')->move(public_path('movies-images'), $newImgName);

        $movie = Movies::create([
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),
            'status'=>$request->input('status'),
            'rating'=>$request->input('rating'),
            'image'=>$newImgName
         ]);  
         
         return redirect('/movies'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movies::find($id);
        return view('movies.edit', ['movie' => $movie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movies::find($id);
        return view('movies.edit', ['movie' => $movie]);
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
                'image'=>'required|mimes:jpg,png,jpeg|max:5048',
                'name'=>'required',
                'rating'=>'required|min:1|max:10',
                'status'=> 'required|integer|min:1|max:2',
                'description'=>'required'
            ]);

        $newImgName = time().'-'. str_replace(' ', '_', $request->name) .'.'. $request->file('image')->extension();

        $request->file('image')->move(public_path('movies-images'), $newImgName);

        $movie = Movies::where('id', $id)
            ->update([
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),
            'status'=>$request->input('status'),
            'rating'=>$request->input('rating'),
            'image'=>$newImgName
         ]);  
         
         return redirect('/movies'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

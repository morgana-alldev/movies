@extends('layouts.app')

@section('content')

<div class='container'>
    <div class='flex justify-center'>
        <form action='/movies/{{ $movie->id }}' method='POST'  enctype="multipart/form-data">
        
            @csrf
            @method('PUT')

        <div class='container'>

            <div class='row'>
                <h1 class='text-center mt-4'>Edit Movie</h1>
            </div>
            <div class='row'>
                <div class='col-12'>
                @if($movie->image!=null) 
                    <img class='img-fluid' src="{{ asset('movies-images') .'/'. $movie->image }}" alt='{{ $movie->name }}' title='{{ $movie->name }}' />
                @endif


                    <label class='mt-4' for='image'>Change Movie Image: </label>
                    <input class='form-control' type='file' name='image' />
                </div>
            </div>
            <div class='row'>
                <div class='col-12'>
                    <label class='mt-2' for='name'>Movie Name: </label>
                    <input class='form-control' type='text' name='name' value='{{ $movie->name }}' />
                </div>
            </div>
            <div class='row'>
                <div class='col-6'>
                    <label class='mt-2' for='name'>Rating: </label>
                    <input class='form-control' type='text' name='rating' value='{{ $movie->rating }}' />
                </div>
                <div class='col-6'>
                    <label class='mt-2' for='status'>Status: </label>
                    <select class='form-control' name='status'>
                        <option @if($movie->status==1) selected='selected' @endif value='1'>Active</option>
                        <option @if($movie->status==2) selected='selected' @endif value='2'>Hidden</option>
                    </select>
                 </div>
            </div>
            <div class='row'>
                <div class='col-12'>
                    <label class='mt-2' for='description'>Description: </label>
                    <textarea class='form-control' name='description'>{{ $movie->description }}</textarea>
                </div>
            </div>
            <div class='row'>
                <div class='col-12 text-center mt-4'>
                    <input class='form-control btn btn-info' type='submit' name='Send' value='Send' />
                </div>
            </div>
        </div>
                
                
        </form>        
    </div>

    <div>
    @if ($errors->any())
        <div class='w-4/8 m-auto text-center'>
            @foreach ($errors->all() as $err)
                <li class='text-red-500 list-none'>
                    {{ $err }}
                </li>
            @endforeach
        </div>
    @endif
    </div>
</div>

@endsection
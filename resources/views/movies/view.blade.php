@extends('layouts.app')

@section('content')

<div class='container'>
    <div class='flex justify-center'>

        <div class='container'>
            <div class='row'>
                <h1 class='text-center mt-4'>View Movie</h1>
            </div>
            <div class='row'>
                <div class='col-6'>
                @if($movie->image!=null) 
                    <img class='img-fluid' src="{{ asset('movies-images') .'/'. $movie->image }}" alt='{{ $movie->name }}' title='{{ $movie->name }}' />
                @endif
                </div>

                <div class='col-6'>
                    <h2 class='mt-2'>{{ $movie->name }} </h2>
                    <p>{{ $movie->rating }}</p>
                    <p>{{ $movie->description }}</p>
                </div>
            </div>
           
            
        </div>
                
                
        </form>        
    </div>


</div>

@endsection
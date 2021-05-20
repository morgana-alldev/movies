@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <h1 class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 sm:py-6 sm:px-8 sm:rounded-t-md text-center">
                Movies
            </h1>
          

            <div class="container">
                <div class="row">     
                    <div class='col-12 flex flex-col text-center'>
                        <a href="movies/create" class="btn btn-info  inline-block text-sm px-4 py-2 leading-none border rounded  mt-4 lg:mt-0">Add New Movie</a>
                    </div>
                </div>
                <div class="row mt-4">                    
                    @foreach ($movies as $movie)
                        <div class='col-lg-4 col-md-6 col-sm-12 card my_simple_card mb-2'>
                            <div style="margin:10px 0;">
                                <div class="row">
                                    <div class='col-6'>
                                        <img class='img-fluid' src="{{ asset('movies-images') .'/'. $movie->image }}"  alt='{{ $movie->name }}' title='{{ $movie->name }}' />
                                    </div>
                                    <div class='col-6'>
                                        <div class="row mb-3">
                                            <div class='col'>
                                                <b class='text-gray-700 text-5xl'>
                                                    {{ $movie->name}}
                                                </b>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class='col'>
                                                <i class="fa fa-star" style='color:#f5c542;'></i> {{ $movie->rating}}
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class='col'>
                                                <p>
                                                    {{ $movie->description }}
                                                </p>
                                            </div>
                                        </div>
                                        <div>
                                            <a class='btn btn-warning col-12' href='/movies/{{ $movie->id }}/edit' >View More</a>                                 
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    

                </div>
            </div>
        </section>
    </div>
</main>
@endsection

@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <h1 class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 sm:py-6 sm:px-8 sm:rounded-t-md text-center">
                Artists
            </h1>

            <div class='flex flex-col text-center'>
               <a href="artists/create" class="inline-block text-sm px-4 py-2 leading-none border rounded  mt-4 lg:mt-0">Add New Artist</a>
            </div>

            <div class="container mt-4">
                @foreach ($artists as $artist)
                    <div class='row  mt-2'>
                        <div class='col-10'>
                            <h2 class='text-gray-700 text-5xl col-10'>
                                <b>{{ $artist->title }}</b>: {{ $artist->name}}
                            </h2>
                            
                        </div>
                        <div class='col-2'>
                            <div class='row'>
                                <div class='col-6'>
                                    <a href='artists/{{ $artist->id }}/edit' class='btn btn-success'><i class="fa fa-edit"></i></a>
                                </div>
                                <div class='col-6'>
                                    <form action='artists/{{ $artist->id }}' method='POST' >
                                        @csrf
                                        @method('delete')
                                        <button type='submit' class='btn btn-danger'><i class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
</main>
@endsection

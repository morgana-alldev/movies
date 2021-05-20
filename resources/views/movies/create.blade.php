@extends('layouts.app')

@section('content')
    <div class='flex justify-center'>
        <form action='/movies' method='POST' enctype="multipart/form-data">
            @csrf

        <div class='container'>

            <div class='row'>
                <h1 class='text-center mt-4'>Add new Movie</h1>
            </div>
            <div class='row'>
                <div class='col-12'>
                    <label class='mt-4' for='image'>Movie Image: </label>
                    <input class='form-control' type='file' name='image' />
                </div>
            </div>
            <div class='row'>
                <div class='col-12'>
                    <label class='mt-2' for='name'>Movie Name: </label>
                    <input class='form-control' type='text' name='name' placeholder='Movie name' />
                </div>
            </div>
            <div class='row'>
                <div class='col-6'>
                    <label class='mt-2' for='name'>Rating: </label>
                    <input class='form-control' type='text' name='rating' placeholder='5' />
                </div>
                <div class='col-6'>
                    <label class='mt-2' for='status'>Status: </label>
                    <select class='form-control' name='status'>
                        <option value='1'>Active</option>
                        <option value='2'>Hidden</option>
                    </select>
                 </div>
            </div>
            <div class='row'>
                <div class='col-12'>
                    <label class='mt-2' for='description'>Description: </label>
                    <textarea class='form-control' name='description' placeholder='Movie description'></textarea>
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

@endsection
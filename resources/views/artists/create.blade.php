@extends('layouts.app')

@section('content')

<div class='container'>
    <div class='flex justify-center'>
        <form action='/artists' method='POST' >
            @csrf
            <div class='row'>
                <div class='col-12'>
                    <label for='title'>Artist Title: </label>
                    <input class='form-control' type='text' name='title' placeholder='Artist title' />
                </div>
            </div>
            <div class='row'>
                <div class='col-12'>
                    <label for='title'>Artist Name: </label>
                    <input class='form-control' type='text' name='name' placeholder='Artist name' />
                </div>
            </div>
            <div class='row'>
                <div class='col-12 text-center mt-2'>
                    <input class='form-control btn btn-info' type='submit' name='Send' value='Send' />
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
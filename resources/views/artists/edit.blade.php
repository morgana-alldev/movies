@extends('layouts.app')

@section('content')

<div class='container'>
    <div class='flex justify-center'>
        <form action='/artists/{{ $artist->id }}' method='POST' >
            @csrf
            @method('PUT')
            <div class='row'>
                <div class='col-12'>
                    <label for='title'>Artist Title: </label>
                    <input class='form-control' type='text' name='title' value='{{ $artist->title }}' />
                </div>
            </div>
            <div class='row'>
                <div class='col-12'>
                    <label for='title'>Artist Name: </label>
                    <input class='form-control' type='text' name='name' value='{{ $artist->name }}' />
                </div>
            </div>
            <div class='row'>
                <div class='col-12 text-center mt-2'>
                    <input class='form-control btn btn-info' type='submit' name='Send' value='Save' />
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
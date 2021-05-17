@extends('layouts.app')

@section('title','Inserimento record')
@section('css')
    <link rel="stylesheet" href="{{asset('css/app-vestiti.css')}}">
@endsection

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('vestiti.store')}}" method="post">
        @csrf
        @method('POST')
        
        <div class="form-group">
            <label for="type">Tipo:</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>
        <div class="form-group">
            <label for="size">Taglia:</label>
            <input type="text" class="form-control" id="size" name="size">
        </div>
        <div class="form-group">
            <label for="price">Prezzo:</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <button type="submit" class="btn btn-default">Registra</button>
    </form>

@endsection
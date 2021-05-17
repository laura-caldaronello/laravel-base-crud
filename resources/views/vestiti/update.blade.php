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

    <form action="{{route('vestiti.update',$vestiti)}}" method="post">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="type">Tipo:</label>
            <input type="text" class="form-control" id="type" name="type" value="{{$vestiti->type}}">
        </div>
        <div class="form-group">
            <label for="size">Taglia:</label>
            <input type="text" class="form-control" id="size" name="size" value="{{$vestiti->size}}">
        </div>
        <div class="form-group">
            <label for="price">Prezzo:</label>
            <input type="text" class="form-control" id="price" name="price" value="{{$vestiti->price}}">
        </div>
        <button type="submit" class="btn btn-default">Modifica</button>
    </form>

@endsection
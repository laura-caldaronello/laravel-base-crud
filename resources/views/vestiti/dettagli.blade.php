@extends('layouts.app')

@section('title','dettagli')
@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app-vestiti.css')}}">
@endsection

@section('content')

    <div class="dresses-container">
        <div class="dress-card">
            <img src="{{$vestito->img}}" alt="{{$vestito->type}}">
            <h3>{{$vestito->type}}</h3>
            <select name="size" id="size">
                <option value="{{$vestito->size}}">{{$vestito->size}}</option>
            </select>
            <h4>{{$vestito->price}} €</h4>
        </div>
    </div>

@endsection
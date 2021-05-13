@extends('layouts.app')

@section('title','vestiti')
@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app-vestiti.css">
@endsection

@section('content')

    <h1>contenuto vestiti</h1>
    <div class="table-responsive">
        <table class="tabel table-bordered table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Price</th>
                <th></th>
            </tr>
                @foreach ($vestiti as $vestito)
                        <tr>
                            <td>{{$vestito->id}}</td>
                            <td>{{$vestito->type}}</td>
                            <td>{{$vestito->price}} €</td>
                            <td><a class="btn btn-primary" href="{{route('vestiti.show',['vestiti' => $vestito->id])}}">Scopri!</a></td>
                        </tr>
                        
                @endforeach
        </table>
    </div>

@endsection
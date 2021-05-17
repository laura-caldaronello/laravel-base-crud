@extends('layouts.app')

@section('title','vestiti')
@section('css')
    <link rel="stylesheet" href="{{asset('css/app-vestiti.css')}}">
@endsection

@section('content')

    <h1>
        Vestiti
        <a class="btn btn-primary" href="{{route('vestiti.create')}}">Inserisci un record</a>
    </h1>
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
                            <td>
                                <a class="btn btn-primary" href="{{route('vestiti.show',['vestiti' => $vestito->id])}}">Scopri!</a>
                                <a class="btn btn-warning" href="{{route('vestiti.edit',['vestiti' => $vestito->id])}}">Modifica</a>
                                <form class="special-form" action="{{route('vestiti.destroy',['vestiti' => $vestito->id])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Elimina</button>                           
                                </form>
                            </td>
                        </tr>
                        
                @endforeach
        </table>
    </div>

@endsection
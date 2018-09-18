@extends('layouts.app')
@section('content')
    <h1>{{$title}}</h1>
    <p>Ovo je stranica servisa.</p>
    @if(count($servisi)>0)
        <ul>
            @foreach ($servisi as $servis)
                <li>{{$servis}}</li>
            @endforeach
        </ul>
    @endif
@endsection

@section('baba')
    <h1>Baba</h1>
    <p>Ovo je stranica servisa.</p>
@endsection

@extends('layout.main')

@section('content')
    
@endsection
    <h1>Fakultas</h1>

    @foreach ($fakultas as $item)
        {{ $item->nama }} {{ $item->singkatan }} <br>
    @endforeach
@endsection
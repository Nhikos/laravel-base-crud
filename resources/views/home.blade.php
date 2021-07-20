@extends('layouts.template')

@section('title')
    <title>DC Comics</title>
@endsection

@section('main-content')
<div>
            
    @foreach ($comics as $comic)
        <h2><span>title:</span> {{ $comic->slug }} </h2>
        <h2><span>type:</span> {{ $comic->type }} </h2>
        <img src="{{ $comic->thumb }}" alt="">
        <a href="{{ route("comics.show", $comic->id) }}"> SCIO' </a>
    @endforeach

</div>
@endsection
@extends('layouts.template')

@section('title')
    <title> {{ $comic->slug }} </title>
@endsection

@section('main-content')

<div>
    <h2><span>TITLE:</span> {{ $comic->title }} </h2>
    <h2><span>TYPE:</span> {{ $comic->type }} </h2>
    <img src="{{ $comic->thumb }}" alt="">
    <h2><span>DESCRIPTION:</span> {{ $comic->description }} </h2>
    <h2><span>PRICE:</span> {{ $comic->price }}</h2>
    <h2><span>SERIES:</span> {{ $comic->series }}</h2>
    <h2><span>SALE_DATE:</span> {{ $comic->sale_date }}</h2>
</div>

@endsection
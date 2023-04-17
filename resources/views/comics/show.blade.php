@extends('layouts.app')

@section('content')
<div class="container">
    <ul>
        <img src="{{ $comic->thumb }}" alt="">
        <div class="description">
            <h2>
                {{ $comic->title }}
            </h2>
            {!! $comic->description !!} <br>
            <strong>Tipologia: {{ $comic->type }}</strong>;
            <div class="price">
                <strong>Prezzo: </strong>{{ $comic->price }}.
            </div>
        </div>
    </ul>
</div>
@endsection
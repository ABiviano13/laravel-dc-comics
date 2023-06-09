@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('comics.update', $comic)}}" method="POST">

        @csrf
        @method('PUT')
        
        <h1>
            Modifica {{$comic->title}}
        </h1>
        <p>Compila i seguenti campi!</p>

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value=" {{$comic->title}} ">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie Originale</label>
            <input type="text" class="form-control" id="series" name="series" value=" {{$comic->series}} ">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di uscita</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{$comic->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input type="text" class="form-control" id="type" name="type" value=" {{$comic->type}} ">
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">URL immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value=" {{$comic->thumb}} ">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value=" {{$comic->price}} ">
        </div>
        
        <button type="submit" class="btn btn-primary">Modifica</button>

    </form>
</div>
@endsection
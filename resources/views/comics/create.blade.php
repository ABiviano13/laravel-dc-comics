@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('comics.store') }}" method="POST">

        @csrf

        <h1>
            Vuoi creare un comic a tuo piacere? Sei nel posto giusto!
        </h1>
        <p>Compila i seguenti campi!</p>

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie Originale</label>
            <input type="text" class="form-control" id="series" name="series" required>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di uscita</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" id="description" class="form-control" cols="30" rows="10" required></textarea>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input type="text" class="form-control" id="type" name="type" required>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">URL immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" required>
        </div>
        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
</div>
@endsection
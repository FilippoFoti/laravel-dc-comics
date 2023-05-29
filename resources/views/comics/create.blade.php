@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center py-3">Crea un fumetto</h2>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Inserisci il titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Inserisci la descrizione</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Inserisci l'url dell'immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>
            
            <div class="mb-3">
                <label for="price" class="form-label">Inserisci il prezzo</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Inserisci la serie</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Inserisci la data di inizio vendite</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Inserisic il tipo</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>

            <button type="submit" class="btn btn-primary">Invia</button>

        </form>
    </div>
@endsection
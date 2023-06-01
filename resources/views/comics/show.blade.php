@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="my-2">
            <a class="btn btn-success my-4" href="{{ route('comics.index') }}">Lista dei fumetti</a>
        </div>
        <div class="row">
            <div class="col">
                <div class="card p-4">
                    <figure style="width: 300px" class="m-auto">
                        <img src="{{ $comics->thumb }}" class="card-img-top" alt="Locandina">
                    </figure>
                    <div class="card-body text-center">
                        <h5 class="card-title">Titolo: {{ $comics->title }}</h5>
                        <p class="card-text">Descrizione: {{ $comics->description }}</p>
                        <p class="card-text">Prezzo: {{ $comics->price }}</p>
                        <p class="card-text">Serie: {{ $comics->series }}</p>
                        <p class="card-text">Data di uscita: {{ $comics->sale_date }}</p>
                        <p class="card-text">Tipologia: {{ $comics->type }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-3">
            <a class="btn btn-warning" href="{{ route('comics.edit', $comics->id) }}">Modifica</a>

            <form class="d-inline-block" action="{{ route('comics.destroy', $comics->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Cancella</button>
            </form>
        </div>
    </div>
@endsection

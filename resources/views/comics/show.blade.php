@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card p-4">
                    <figure style="width: 300px" class="m-auto">
                        <img src="{{$comics->thumb}}" class="card-img-top" alt="Locandina">
                    </figure>
                    <div class="card-body text-center">
                        <h5 class="card-title">Titolo: {{$comics->title}}</h5>
                        <p class="card-text">Descrizione: {{$comics->description}}</p>
                        <p class="card-text">Prezzo: {{$comics->price}}</p>
                        <p class="card-text">Serie: {{$comics->series}}</p>
                        <p class="card-text">Data vendita: {{$comics->sale_date}}</p>
                        <p class="card-text">Tipo: {{$comics->type}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

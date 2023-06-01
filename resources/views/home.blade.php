@extends('layouts.app')

@section('content')
    <h2>Home</h2>
    <div class="my-2">
        <a href="{{ route('comics.index') }}">Lista dei fumetti</a>
    </div>
@endsection
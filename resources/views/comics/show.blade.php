@extends('layout.main')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="d-flex">
          <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
          <div>
            <h1>{{ $comic->title }}</h1>
            <h2>Serie: {{ $comic->series }}</h2>
            <h2>Tipologia: {{ $comic->type }}</h2>
            <p>Data di uscita: {{ $comic->sale_date }}</p>
            <p>{{ $comic->description }}</p>
            <h4>Prezzo: {{ $comic->price }}</h4>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection

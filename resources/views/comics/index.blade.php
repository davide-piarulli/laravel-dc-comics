@extends('layout.main')

@section('content')
  <h1>Elenco fumetti</h1>
  <div class="container">
    <div class="row row-cols-3">
      @foreach ($comics as $comic)
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src={{ $comic->thumb }} class="card-img-top" alt={{ $comic->title }}>
            <div class="card-body">
              <h5 class="card-title">{{ $comic->title }}</h5>
              <p class="card-text">{{ $comic->series }}</p>
              <p class="card-text">{{ $comic->type }}</p>
              <p class="card-text">{{ $comic->price }}</p>
              <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary">Dettaglio</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection

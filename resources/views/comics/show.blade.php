@extends('layout.main')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="d-flex">
          <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
          <div>
            <h1>{{ $comic->title }}</h1>
            <div class="d-flex">

              <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning me-2 "><i
                  class="fa-solid fa-pencil"></i></a>

              <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
              </form>
            </div>


            <h2>Serie: {{ $comic->series }}</h2>
            <h2>Tipologia: {{ $comic->type }}</h2>
            <p>Data di uscita: {{ $comic->sale_date }}</p>
            <p>{{ $comic->description }}</p>
            @php
              $artists_array = explode(',', $comic['artists']);
              $writers_array = explode(',', $comic['writers']);
            @endphp
            <ul>
              Artisti:
              @foreach ($artists_array as $item)
                <li>{{ $item }}</li>
              @endforeach
            </ul>

            <ul>
              Scrittori:
              @foreach ($writers_array as $item)
                <li>{{ $item }}</li>
              @endforeach
            </ul>
            <h4>Prezzo: {{ $comic->price }}</h4>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection

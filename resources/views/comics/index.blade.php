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

              <div class="d-flex">
                <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary">Dettaglio</a>

                <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning me-2 "><i
                    class="fa-solid fa-pencil"></i></a>

                <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection

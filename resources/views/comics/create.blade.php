@extends('layout.main')

@section('content')
  <div class="container mb-5 ">
    <div class="row">
      <div class="col">
        <h1 class="mb-5">Inserisci nuovo Comic</h1>
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
      </div>
    </div>
    <div class="row">
      <div class="col">

        <form action="{{ route('comics.store') }}" method="post">
          @csrf
          <div class="mb-3">
            <label for="title" class="form-label ">Titolo</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
              value="{{ old('title') }}">
            @error('title')
              <small class="text-danger">
                {{ $message }}
              </small>
            @enderror
          </div>
          <div class="mb-3">
            <label for="thumb" class="form-label ">Immagine</label>
            <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror"
              value="{{ old('thumb') }}">
            @error('thumb')
              <small class="text-danger">
                {{ $message }}
              </small>
            @enderror
          </div>
          <div class="mb-3">
            <label for="price" class="form-label ">Prezzo</label>
            <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror"
              value="{{ old('price') }}">
            @error('price')
              <small class="text-danger">
                {{ $message }}
              </small>
            @enderror
          </div>
          <div class="mb-3">
            <label for="series" class="form-label ">Serie</label>
            <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror"
              value="{{ old('series') }}">
            @error('series')
              <small class="text-danger">
                {{ $message }}
              </small>
            @enderror
          </div>
          <div class="mb-3">
            <label for="sale_date" class="form-label ">Data di uscita</label>
            <input type="text" name="sale_date" id="sale_date"
              class="form-control @error('sale_date') is-invalid @enderror" value="{{ old('sale_date') }}">
            @error('sale_date')
              <small class="text-danger">
                {{ $message }}
              </small>
            @enderror
          </div>
          <div class="mb-3">
            <label for="type" class="form-label ">Tipo</label>
            <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror"
              value="{{ old('type') }}">
            @error('type')
              <small class="text-danger">
                {{ $message }}
              </small>
            @enderror
          </div>
          <div class="mb-3">
            <label for="artists" class="form-label ">Artisti</label>
            <input type="text" name="artists" id="artists"
              class="form-control @error('artists') is-invalid @enderror" value="{{ old('artists') }}">
            @error('artists')
              <small class="text-danger">
                {{ $message }}
              </small>
            @enderror
          </div>

          <div class="mb-3">
            <label for="writers" class="form-label ">Scrittori</label>
            <input type="text" name="writers" id="writers"
              class="form-control @error('writers') is-invalid @enderror" value="{{ old('writers') }}">
            @error('writers')
              <small class="text-danger">
                {{ $message }}
              </small>
            @enderror
          </div>

          <div class="mb-3">
            <label for="description" class="form-label ">Descrizione</label>
            <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}
            </textarea>
            @error('description')
              <small class="text-danger">
                {{ $message }}
              </small>
            @enderror
          </div>
          <button type="submit" class="btn btn-success mb-5">Crea nuovo Comic</button>
          <button type="reset" class="btn btn-danger mb-5">Cancella</button>
        </form>
      </div>
    </div>
  </div>
@endsection

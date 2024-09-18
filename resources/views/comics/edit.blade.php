
@extends('layout.main')

@section('content')
<div class="container">
    <div class="row">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

        @endif
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="title">Title</label><br>
            <input type="text" id="title" class="form-control @error('title')
            is-invalid

            @enderror" name="title" placeholder="titolo" value="{{ old('title', $comic->title) }}"><br>
            @error('title')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror


            <label for="description">Description</label><br>
            <textarea class="form-control @error('description')
            is-invalid

            @enderror" name="description" id="description" cols="50" rows="5" placeholder="descrizione">{{ old('description', $comic->description) }}</textarea><br>
            @error('description')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror
            <label for="thumb">Url image</label><br>
            <input class="form-control @error('thumb')
            is-invalid

            @enderror" type="text" id="thumb" name="thumb" placeholder="url di riferimento" value="{{ old('thumb', $comic->thumb) }}"><br>
            @error('thumb')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror
            <label for="price">Prezzo</label><br>
            <input type="text" id="price" name="price"  class="form-control @error('price')
            is-invalid

            @enderror" placeholder="prezzo" value="{{ old('price', $comic->price) }}"><br>
            @error('price')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror
            <button type="submit">Modifica card</button><br>
        </form>
    </div>
</div>
@endsection

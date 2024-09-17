
@extends('layout.main')

@section('content')
<div class="container">
    <div class="row">

        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="title">Title</label><br>
            <input type="text" id="title" name="title" value="{{$comic->title}}" placeholder="titolo"><br>
            <label for="description">Description</label><br>
            <textarea name="description" id="description" cols="50" rows="5" placeholder="descrizione">{{$comic->description}}</textarea><br>
            <label for="thumb">Url image</label><br>
            <input type="text" id="thumb" name="thumb" value="{{$comic->thumb}}" placeholder="url di riferimento"><br>
            <label for="price">Prezzo</label><br>
            <input type="text" id="price" name="price" value="{{$comic->price}}" placeholder="prezzo"><br>
            <button type="submit">Modifica card</button><br>
        </form>
    </div>
</div>
@endsection

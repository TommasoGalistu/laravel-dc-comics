
@extends('layout.main')

@section('content')
<div class="container">
    <div class="row">

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <label for="title">Title</label><br>
            <input type="text" id="title" name="title" placeholder="titolo"><br>
            <label for="description">Description</label><br>
            <textarea name="description" id="description" cols="50" rows="5" placeholder="descrizione"></textarea><br>
            <label for="thumb">Url image</label><br>
            <input type="text" id="thumb" name="thumb" placeholder="url di riferimento"><br>
            <label for="price">Prezzo</label><br>
            <input type="text" id="price" name="price" placeholder="prezzo"><br>
            <button type="submit">Aggiungi card</button><br>
        </form>
    </div>
</div>
@endsection

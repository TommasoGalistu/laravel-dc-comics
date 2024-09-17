@extends('layout.main')


@section('content')

<div class="container">
    <form  class="d-flex flex-column" action="{{  route('wines.update', $wine->id)}}" method="POST">

        @csrf
        @method('PUT')

        <label for="wine">Wine</label>
        <input type="text" name="wine" value="{{ $wine->wine }}">
        <label for="winery">Winery</label>
        <input type="text" name="winery" value="{{ $wine->winery }}">
        <label for="average_rating">Winery</label>
        <input type="text" name="average_rating" value="{{ $wine->average_rating }}">
        <label for="num_reviews">Winery</label>
        <input type="text" name="num_reviews" value="{{ $wine->num_reviews }}">
        <label for="url">Winery</label>
        <input type="text" name="url" value="{{ $wine->url }}">
        <button class="btn btn-primary" type="submit">Modifica</button>
    </form>
</div>

@endsection

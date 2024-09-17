@extends('layout.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="d-inline">Nome vino: {{ $wine->wine }}</h2>
            <a class="btn btn-warning" href="{{route('wines.edit', $wine)}}"><i class="fa-solid fa-pencil"></i></a>
            <form class="d-inline" action="{{route('wines.destroy', $wine)}}" onsubmit="confirm('sei sicuro???')" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
            </form>

            <p>Cantina: {{$wine->winery}}</p>
            <p>Rating: {{ $wine->average_rating }}</p>
            <img src="{{ $wine->url }}" alt="{{ $wine->wine }}">
            <a class="btn btn-primary" href="{{ route('wines.index') }}">Torna indietro</a>
        </div>
    </div>
</div>

@endsection

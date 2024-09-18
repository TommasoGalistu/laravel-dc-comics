
@extends('layout.main')

@section('content')
{{-- @dd($data[0]->description) --}}
<div class="container">
    @if (session('validated'))
    <div class="alert alert-success">
        <p class="">Il nuovo elemento è stato creato con successo!!!</p>
    </div>
    @endif
    <h1 class="d-inline">{{$data->title}} </h1>
    <div class="contModify d-inline">
        <a class="btn btn-warning" href="{{route('comics.edit', $data)}}"><i class="fa-solid fa-pencil"></i></a>
        <form class="d-inline" action="{{ route('comics.destroy', $data->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash "></i></button>
        </form>
        <a class="" href=""></a>

    </div>
    <p>Numero Scheda: {{$data->id}}</p>
    <p>{{$data->description}}</p>

</div>

@endsection

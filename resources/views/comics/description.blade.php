
@extends('layout.main')

@section('content')
{{-- @dd($data[0]->description) --}}
<div class="container">
    <h1 class="d-inline">{{$data->title}} </h1>
    <div class="contModify d-inline">
        <a class="btn btn-warning" href="{{route('comics.edit', $data)}}"><i class="fa-solid fa-pencil"></i></a>
        <a class="btn btn-danger" href=""><i class="fa-solid fa-trash"></i></a>

    </div>
    <p>Numero Scheda: {{$data->id}}</p>
    <p>{{$data->description}}</p>

</div>

@endsection

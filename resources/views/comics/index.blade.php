
@extends('layout.main')

@section('content')
{{-- @dd($data[0]->description) --}}
<div class="container">
    @if (session('delete'))
    <div class="alert alert-success">
        <p class="">L'elemento è stato eliminato con successo!!!</p>
    </div>
    @endif
 <div class="row gap-3">
     @foreach ($data as $hero)
     {{-- @dd($hero->thumb) --}}
     <div class="card" style="width: 18rem;">
         <img style="height: 8rem; width: 3rem" src="{{ $hero->thumb }}" class="imgHero" alt="{{$hero->title}}">

         <div class="card-body">
           <h5 class="card-title">{{$hero->title}}</h5>

           <p class="card-text">Prezzo: {{$hero->price}}</p>
           <p class="card-text">Genere: {{$hero->series}}</p>
           <p class="card-text">Tipo: {{$hero->type}}</p>
           <p class="card-text">Giorno di vendita: {{ $hero->sale_date }}</p>

           <a href="{{ route('comics.show', $hero)}}" class="btn btn-primary">Go somewhere</a>
         </div>
       </div>

     @endforeach

</div>
</div>

@endsection

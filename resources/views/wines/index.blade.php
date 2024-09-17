@extends('layout.main')


@section('content')

<div class="container">
    <div class="row flex-wrap">
        @foreach ($wines as $wine)
        <div class="col">
            <div class="card" style="width: 15rem;">

                <div class="card-body">
                  <h5 class="card-title">Vino :{{$wine->wine}}</h5>

                  <a href="{{ route('wines.show', $wine) }}" class="btn btn-primary">Scopri di più</a>
                </div>
              </div>
        </div>

        @endforeach
    </div>
</div>

@endsection

{{-- @php
    $cards = config('dataCard')
@endphp --}}

@extends('layout.main')

@section('content')
<div class="containerAll content">
    <div class="contImg">
      <div class="immagineJumbo"></div>
    </div>
    <div class="mainContainer">
        <div class="button">
            <span class="bottone"><strong>CURRENT SERIES</strong></span>
        </div>
        <div class="containerCard">
            @foreach ($cards as $card)
                <div class="card">
                    <img src="{{$card['thumb']}}" :alt="{{$card['type']}}" />
                    <span>{{ $card['series'] }}</span>
                </div>
            @endforeach
        </div>
        <div class="viewContinue">
          <span class="bottone"><strong>LOAD MORE</strong></span>
        </div>
    </div>
  </div>
@endsection

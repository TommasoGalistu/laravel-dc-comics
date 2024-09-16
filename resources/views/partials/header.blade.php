@php
    $menuItems = config('menu');

@endphp


<div class="containerAll header">
    <div class="mainContainer">
      <div class="contImg ">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo dc" />

      </div>

      <ul>

            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('comics.index') }}">Comic</a></li>

      </ul>
    </div>
  </div>



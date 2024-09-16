@php
    $images = config('imageData');

@endphp

<footer>
    {{-- parte sopra --}}
    <div class="containerAll up">
        <div class="mainContainer">
            @foreach ($images as $image)

            <div class="contImgText">
                    <div class="contImg">
                        <img
                        src="{{ Vite::asset($image['src']) }}"
                        alt=""
                        />
                </div>
                <span>{{ $image['text'] }}</span>
            </div>
            @endforeach
        </div>
      </div>

      {{-- policy --}}
      <div class="containerAll middle">
        <div class="mainContainer">
          <div class="contListe">
            <div>
              <h3>DC COMICS</h3>
              <ul>
                <li>Characters</li>
                <li>Comics</li>
                <li>Movies</li>
                <li>TV</li>
                <li>Games</li>
                <li>Videos</li>
                <li>News</li>
              </ul>
              <h3>SHOP</h3>
              <ul>
                <li>Shop DC</li>
                <li>Shop DC Collectibles</li>
              </ul>
            </div>
            <div>
              <h3>DC</h3>
              <ul>
                <li>Terms Of Use</li>
                <li>Pivacy policy(New)</li>
                <li>Ad Choices</li>
                <li>Advertising</li>
                <li>Jobs</li>
                <li>Subsciptions</li>
                <li>Talent Workshops</li>
                <li>CPSC Certificates</li>
                <li>Rating</li>
                <li>Shop Help</li>
                <li>Contact Us</li>
              </ul>
            </div>
            <div>
              <h3>SITES</h3>
              <ul>
                <li>DC</li>
                <li>MAD Magazine</li>
                <li>DC Kids</li>
                <li>DC Universe</li>
                <li>DC Power Visa</li>
              </ul>
            </div>
          </div>
          <div class="contImg"></div>
        </div>
      </div>

      {{-- parte finale --}}
      <div class="containerAll down">
        <div class="mainContainer">
          <button>SIGN-UP NOW!</button>
          <div class="contLink">
            <span>FOLLOW US</span>
            <img src="{{ Vite::asset('/resources/img/downFooter/footer-facebook.png') }}" alt="" />
            <img src="{{ Vite::asset('/resources/img/downFooter/footer-periscope.png') }}" alt="" />
            <img src="{{ Vite::asset('/resources/img/downFooter/footer-pinterest.png') }}" alt="" />
            <img src="{{ Vite::asset('/resources/img/downFooter/footer-twitter.png') }}" alt="" />
            <img src="{{ Vite::asset('/resources/img/downFooter/footer-youtube.png') }}" alt="" />

          </div>
        </div>
      </div>
</footer>

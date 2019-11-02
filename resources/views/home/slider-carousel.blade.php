<div class="slide-one-item home-slider owl-carousel">


    @foreach ($featuredVenues as $featuredVenue)
      <div class="site-blocks-cover" style="background-image: url({{ $featuredVenue->getFirstMediaUrl('main_photo') }});" data-aos="fade" data-stellar-background-ratio="0.5">
          <div class="text">
              <h2>{{ $featuredVenue->name }}</h2>
              <p class="location"><span class="property-icon icon-room"></span>{{ $featuredVenue->address }}</p>
              <p class="mb-2"><strong>{{ $featuredVenue->price_per_hour }}</strong></p>
              <p class="mb-0"><a href="#" class="text-uppercase small letter-spacing-1 font-weight-bold">More Details</a></p>
          </div>
      </div>
    @endforeach

    </div>
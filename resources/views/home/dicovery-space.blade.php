 <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-7">
          <div class="site-section-title text-center">
            <h2>Dicovery space in....</h2>
          </div>
        </div>
      </div>
      <div class="row block-13">

        <div class="nonloop-block-13 owl-carousel">

            @foreach ($locations as $location)
                <div class="slide-item">
                    <div class="team-member text-center">
                    <img src="{{ $location->getFirstMediaUrl('photo') }}" alt="{{ $location->name }}" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                    <div class="text p-3">
                        <h2 class="mb-2 font-weight-light text-black h4">{{ $location->name }}</h2>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>

        </div>
      </div>
    </div>
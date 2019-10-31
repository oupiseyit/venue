 <div class="site-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center mb-5">
                    <div class="site-section-title">
                        <h2>inspiring-venues ...</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($event_types as $event_type)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <a href="#" class="service text-center border rounded">
                            <span class="icon flaticon-house"></span>
                            <h2 class="service-heading">{{ $event_type->title }}</h2>
                            <p><span class="read-more">Learn More</span></p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
 <div class="site-section site-section-sm bg-light mb-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <div class="site-section-title">
                        <h2>New  Venue for You</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                @foreach ($newestVenue as $venue)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <a href="property-details.html" class="prop-entry d-block">
                            <figure>
                                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                            </figure>
                            <div class="prop-text">
                                <div class="inner">
                                    <span class="price rounded">$1,930,000</span>
                                    <h3 class="title">853 S Lucerne Blvd</h3>
                                    <p class="location">Los Angeles, CA 90005</p>
                                </div>
                                <div class="prop-more-info">
                                    <div class="inner d-flex">
                                        <div class="col">
                                            <span>Area:</span>
                                            <strong>240m<sup>2</sup></strong>
                                        </div>
                                        <div class="col">
                                            <span>Beds:</span>
                                            <strong>2</strong>
                                        </div>
                                        <div class="col">
                                            <span>Baths:</span>
                                            <strong>2</strong>
                                        </div>
                                        <div class="col">
                                            <span>Garages:</span>
                                            <strong>1</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                @endforeach
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="site-pagination">
                            <a href="#" class="active">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <span>...</span>
                            <a href="#">10</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
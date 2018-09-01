@extends('layouts.app')

@section('head-extra')
  <style type="text/css">
    nav .nav-background img, nav .nav-background .pattern {
      filter: none;
    }

    nav .nav-background {
      opacity: .9;
    }
  </style>
@endsection

@section('header-type')
	nav-full-header
@endsection

@section('nav-sliders-bg')
			<div class="nav-background">
        <img class="active" src="img/slide2.png" alt="cityscape">
        <img src="img/slide3.png" alt="cityscape">
        <img src="img/slide5.3.png" alt="cityscape">
      </div>
@endsection

@section('nav-sliders-slide')
			<div class="nav-header valign-wrapper">
        <div class="carousel carousel-slider center" data-indicators="true">
          <div class="carousel-item white-text" href="#one!">
            <div class="container valign-wrapper cyan-text text-lighten-2">
              <h1>KUNBU.MV</h1>
              <div class="tagline cyan-text text-lighten-2">Discover Maldives. Transfer to anywhere, anytime.</div>
            </div>
          </div>
          <div class="carousel-item white-text" href="#two!">
            <div class="container valign-wrapper cyan-text text-lighten-5">
              <h1>DISCOVER MALDIVES</h1>
              <div class="tagline">A complete sea transfer management system for the first time in maldives.</div>
            </div>
          </div>
          <div class="carousel-item white-text" href="#three!">
            <div class="container valign-wrapper cyan-text">
              <h1>RESERVE YOUR TRANSFER</h1>
              <div class="tagline cyan-text">Reserve transfer to any location, any time.</div>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('nav-extra')
		<div class="search-wrapper-1">
      <div class="container">
        <div class="row">
          <div class="col s12">
            <div class="title grey-text text-darken-3 center"><i class="material-icons large">search</i></br><small>Search Transfer / Farry</small></div>
          </div>
          <form class="">
            <div class="input-field col s12 m4"> 
              <input type="date" class="datepicker" id="dateon" name="dateon" placeholder="Select Date">
              <label for="dateon">Date</label>
            </div>
            <div class="input-field col s12 m4">
              <select id="island-from" name="island-from" placeholder="Enter Island / Atoll">
                <option value="" disabled selected>Choose island</option>
                @foreach($islands as $island)
                <option value="{{ $island->id }}">{{ $island->atoll }}. {{ $island->island }}</option>
                @endforeach
              </select>
              <label for="island-from" class="active">From</label>
            </div>
            <div class="input-field col s12 m4">
              <select id="island-to" name="island-to" placeholder="Enter Island / Atoll">
                <option value="" disabled selected>Choose island</option>
                @foreach($islands as $island)
                <option value="{{ $island->id }}">{{ $island->atoll }}. {{ $island->island }}</option>
                @endforeach
              </select>
              <label for="island-to" class="active">From</label>
            </div>
            <div class="input-field col s12 center">
              <button class="waves-effect waves-light btn cyan darken-2 grey-text text-lighten-3" type="button" id="submit-search"><i class="material-icons left">search</i>search</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <nav>
      <!-- Fixed Masonry Filters -->
      <div class="categories-wrapper grey darken-3">
        <div class="categories-container">
          <ul class="categories container">
            <li class="active"><a href="#all">All</a></li>
            <li><a href="#topselling">Top selling</a></li>
            <li><a href="#featured">Featured</a></li>
          </ul>
        </div>
      </div>

    </nav>
@endsection

@section('content')
		<!-- Vessels -->
    <div id="vessels" class="section gray">
      <div class="container">
        <div class="gallery row">
          @foreach($vessels as $vessel)
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter topselling">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <span class="offerpromo green lighten-1">20 seats available for Today</span>
                <img class="responsive-img" src="{{ url($vessel->image_path) }}" alt="{{ $vessel->name }}">
                <span class="rating">
                  <i class="material-icons">star</i>
                  <i class="material-icons">star</i>
                  <i class="material-icons">star</i>
                  <i class="material-icons">star_half</i>
                  <i class="material-icons">star_border</i>
                </span>
              </a>
              <div class="gallery-header">
                <span class="title">{{ $vessel->name }}</span></br>
                <span>Travels To: Rasdhoo, Ukulhas, Mathiveri, Male' &amp; Airport</span></br>
                <span>Speed: {{ $vessel->speed }}</span></br>
                <span>Capacity: {{ $vessel->capacity_seat }} seats</span></br>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Nevi</h3>
                  <span class="price">Price: N/A</span>
                  <span class="capacity">Seat Capacity: {{ $vessel->capacity_seat }} seats, Speed: {{ $vessel->speed }}</span>
                </div>
                <p class="description">{{ $vessel->description }}</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                  </div>
                </div>

                <div class="check-availability-wrapper grey lighten-5 z-depth-2">
                  <div class="row">
                    <div class="col s12">
                      <div class="card card-check-availability">
                        <div class="card-content">
                          <span class="card-title">Cheack Availability</br><small>Fill below form and click search to check availability and reserve seat.</small></span>
                          <form>
                            <div class="row">
                              <div class="input-field col s12 m6 l3">
                                <input id="email" type="date" class="datepicker">
                                <label for="email" data-error="wrong" data-success="right" class="active">Date</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <select>
                                  <option value="" disabled selected>Choose an option</option>
                                  <option value="1">Mathiveri</option>
                                  <option value="2">Ukulhas</option>
                                  <option value="3">Rasdhoo</option>
                                  <option value="4">Male'</option>
                                  <option value="5">Airport</option>
                                </select>
                                <label>From</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <select>
                                  <option value="" disabled selected>Choose an option</option>
                                  <option value="1">Mathiveri</option>
                                  <option value="2">Ukulhas</option>
                                  <option value="3">Rasdhoo</option>
                                  <option value="4">Male'</option>
                                  <option value="5">Airport</option>
                                </select>
                                <label>To</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <input placeholder="Enter Number of Seats" id="numberofseats" type="number" min="0" max="27" step="1" class="validate">
                                <label for="numberofseats">Number of Seats</label>
                              </div>

                              <div class="col s12">
                                <button class="waves-effect waves-light btn cyan"><i class="material-icons left">search</i>search</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>

                    <div class="col l4 m6 s12">
                      <div class="card-schedule-item card hoverable">
                        <div class="card-content">
                          <span class="card-title">Private Hire</br><small>{{ date('d M Y') }}</small></span>
                          <p>
                            Travels to: Mathiveri , Ukulhas, Rasdhoo, Male' &amp; Airport
                            <span style="display: block">Seats Available: 20 seats</span>
                            <span style="display: block">Depurture Time: Any</span>
                          </p>
                        </div>
                        <div class="card-action">
                          <a class="waves-effect waves-light btn green" href="#private-hire">Private Hire</a>
                        </div>
                      </div>
                    </div>

                    @foreach($vessel->schedules as $schedule)
                    <div class="col l4 m6 s12">
                      <div class="card-schedule-item card hoverable">
                        <div class="card-content">
                          <span class="card-title">{{ $schedule->name }}</br><small>{{ date('d M Y') }}</small></span>
                          <p>
                            Travels to: 
                            @foreach($schedule->routes as $route)
                            {{ $route->island->island }}, 
                            @endforeach
                            <span style="display: block">Seats Available: 20 seats</span>
                            <span style="display: block">Shedule Starts: {{ $schedule->start_time }}</span>
                          </p>
                        </div>
                        <div class="card-action">
                          <a class="modal-trigger waves-effect waves-light btn grey" onclick="showRoutes({{ $schedule->id }})" data-schedule-name="{{ $schedule->name }}">More</a>
                          <a class="waves-effect waves-light btn cyan" href="#book-seat">Book Seat</a>
                        </div>
                      </div>
                    </div>
                    @endforeach

                  </div>
                </div>

                <div class="reviews-wrapper">
                  <div class="row">
                    <div class="col s12 new-review">
                      <span class="title">Customer Reviews</br><small>Please login to review. / Type your message and click review button.</small></span>
                      <!-- <form>
                        <textarea id="textarea1" class="materialize-textarea" placeholder="Enter message"></textarea>
                      </form> -->
                    </div>
                    <div class="col s12">
                      <div class="review">
                        <img src="img/review-user.png" alt="" class="circle responsive-img user-image">
                        <div class="content">
                          <span class="user-name">Ahmed Mahfooz</span>
                          <span class="rating">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star_half</i>
                            <i class="material-icons">star_border</i>
                          </span>
                          This is a square image. Add the "circle" class to it to make it appear circular.
                        </div>
                      </div>
                    </div>
                    <div class="col s12">
                      <div class="review">
                        <img src="img/review-user.png" alt="" class="circle responsive-img user-image">
                        <div class="content">
                          <span class="user-name">Ahmed Rimah</span>
                          <span class="rating">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star_half</i>
                            <i class="material-icons">star_border</i>
                            <i class="material-icons">star_border</i>
                          </span>
                          Praesent cumque molestie molestiae, purus assumenda consectetur veniam dui taciti neque aperiam. Id scelerisque repudiandae, ullamcorper? Odit ipsum irure etiam.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light green tooltipped" data-position="bottom" data-delay="50" data-tooltip="Contact Informations" onclick="loadContactInfo({{ $vessel->id }})"><i class="material-icons">phone</i></a>
                <a class="btn-floating btn-large waves-effect waves-light grey tooltipped" data-position="bottom" data-delay="50" data-tooltip="Send a Message" onclick="sendMessage({{ $vessel->id }})"><i class="material-icons">message</i></a>
                <a class="btn-floating btn-large waves-effect waves-light cyan tooltipped" data-position="bottom" data-delay="50" data-tooltip="Locate Vessel" onclick="loadLocation({{ $vessel->tracking_id }})"><i class="material-icons">location_on</i></a> 
                <a class="btn-floating btn-large waves-effect waves-light red tooltipped" data-position="bottom" data-delay="50" data-tooltip="Like" onclick="addToFavorite({{ $vessel->id }})"><i class="material-icons">favorite</i></a> 
              </div>
            </div>
          </div>
          @endforeach
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter featured">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <span class="offerpromo grey lighten-1">Featured</span>
                <img class="responsive-img" src="http://placehold.it/350x250" alt="Vessel Name : Number of Seats Left">
                <span class="rating">
                  <i class="material-icons">star</i>
                  <i class="material-icons">star</i>
                  <i class="material-icons">star</i>
                  <i class="material-icons">star_half</i>
                  <i class="material-icons">star_border</i>
                </span>
              </a>
              <div class="gallery-header">
                <span class="title">Corel</span></br>
                <span>Travels To: Rasdhoo, Ukulhas, Mathiveri, Male' &amp; Airport</span></br>
                <span>Speed: 48.25 km/h</span></br>
                <span>Capacity: 27 seats</span></br>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Corel</h3>
                  <span class="price">Price: N/A</span>
                  <span class="capacity">Seat Capacity: 27 seats, Speed: 48.25 km/h</span>
                </div>
                <p class="description">iterally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                  </div>
                </div>

                <div class="check-availability-wrapper grey lighten-5 z-depth-2">
                  <div class="row">
                    <div class="col s12">
                      <div class="card card-check-availability">
                        <div class="card-content">
                          <span class="card-title">Cheack Availability</br><small>Fill below form and click search to check availability and reserve seat.</small></span>
                          <form>
                            <div class="row">
                              <div class="input-field col s12 m6 l3">
                                <input id="email" type="date" class="datepicker">
                                <label for="email" data-error="wrong" data-success="right" class="active">Date</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <select>
                                  <option value="" disabled selected>Choose an option</option>
                                  <option value="1">Mathiveri</option>
                                  <option value="2">Ukulhas</option>
                                  <option value="3">Rasdhoo</option>
                                  <option value="4">Male'</option>
                                  <option value="5">Airport</option>
                                </select>
                                <label>From</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <select>
                                  <option value="" disabled selected>Choose an option</option>
                                  <option value="1">Mathiveri</option>
                                  <option value="2">Ukulhas</option>
                                  <option value="3">Rasdhoo</option>
                                  <option value="4">Male'</option>
                                  <option value="5">Airport</option>
                                </select>
                                <label>To</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <input placeholder="Enter Number of Seats" id="numberofseats" type="number" min="0" max="27" step="1" class="validate">
                                <label for="numberofseats">Number of Seats</label>
                              </div>

                              <div class="col s12">
                                <button class="waves-effect waves-light btn cyan"><i class="material-icons left">search</i>search</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>

                    <div class="col l4 m6 s12">
                      <div class="card-schedule-item card hoverable">
                        <div class="card-content">
                          <span class="card-title">Private Hire</br><small>25 April, 2017</small></span>
                          <p>
                            Travels to: Mathiveri , Ukulhas, Rasdhoo, Male' &amp; Airport
                            <span style="display: block">Seats Available: 20 seats</span>
                            <span style="display: block">Depurture Time: Any</span>
                          </p>
                        </div>
                        <div class="card-action">
                          <a class="waves-effect waves-light btn green" href="#">Private Hire</a>
                        </div>
                      </div>
                    </div>

                    <div class="col l4 m6 s12">
                      <div class="card-schedule-item card hoverable">
                        <div class="card-content">
                          <span class="card-title">Male' to Alif Alif (Aa) Atoll</br><small>25 April, 2017</small></span>
                          <p>
                            Travels to: Male', Airport, Rasdhoo, Ukulhas &amp; Mathiveri
                            <span style="display: block">Seats Available: 20 seats</span>
                            <span style="display: block">Shedule Starts: 10:30 AM</span>
                          </p>
                        </div>
                        <div class="card-action">
                          <a class="modal-trigger waves-effect waves-light btn grey" href="#modal-schedule-more">More</a>
                          <a class="waves-effect waves-light btn cyan" href="#">Book Seat</a>
                        </div>
                      </div>
                    </div>

                    <div class="col l4 m6 s12">
                      <div class="card-schedule-item card hoverable">
                        <div class="card-content">
                          <span class="card-title">Alif Alif (Aa) Atoll to Male'</br><small>25 April, 2017</small></span>
                          <p>
                            Travels to: Mathiveri , Ukulhas, Rasdhoo, Male &amp; Airport
                            <span style="display: block">Seats Available: 20 seats</span>
                            <span style="display: block">Shedule Starts: Mathiveri: 12:30 PM</span>
                          </p>
                        </div>
                        <div class="card-action">
                          <a class="modal-trigger waves-effect waves-light btn grey" href="#modal-schedule-more">More</a>
                          <a class="waves-effect waves-light btn cyan" href="#">Book Seat</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="reviews-wrapper">
                  <div class="row">
                    <div class="col s12 new-review">
                      <span class="title">Customer Reviews</br><small>Please login to review. / Type your message and click review button.</small></span>
                      <!-- <form>
                        <textarea id="textarea1" class="materialize-textarea" placeholder="Enter message"></textarea>
                      </form> -->
                    </div>
                    <div class="col s12">
                      <div class="review">
                        <img src="img/review-user.png" alt="" class="circle responsive-img user-image">
                        <div class="content">
                          <span class="user-name">Ahmed Mahfooz</span>
                          <span class="rating">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star_half</i>
                            <i class="material-icons">star_border</i>
                          </span>
                          This is a square image. Add the "circle" class to it to make it appear circular.
                        </div>
                      </div>
                    </div>
                    <div class="col s12">
                      <div class="review">
                        <img src="img/review-user.png" alt="" class="circle responsive-img user-image">
                        <div class="content">
                          <span class="user-name">Ahmed Rimah</span>
                          <span class="rating">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star_half</i>
                            <i class="material-icons">star_border</i>
                            <i class="material-icons">star_border</i>
                          </span>
                          Praesent cumque molestie molestiae, purus assumenda consectetur veniam dui taciti neque aperiam. Id scelerisque repudiandae, ullamcorper? Odit ipsum irure etiam.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">phone</i></a>
                <a class="btn-floating btn-large waves-effect waves-light grey"><i class="material-icons">message</i></a>
                <a class="btn-floating btn-large waves-effect waves-light cyan"><i class="material-icons">location_on</i></a> 
                <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">favorite</i></a> 
              </div>
            </div>
          </div>
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter topselling">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <span class="offerpromo red lighten-1">Only 2 seats left for Today</span>
                <img class="responsive-img" src="http://placehold.it/350x250" alt="Vessel Name : Number of Seats Left">
                <span class="rating">
                  <i class="material-icons">star</i>
                  <i class="material-icons">star</i>
                  <i class="material-icons">star</i>
                  <i class="material-icons">star_half</i>
                  <i class="material-icons">star_border</i>
                </span>
              </a>
              <div class="gallery-header">
                <span class="title">Fulhangi Speed 1</span></br>
                <span>Travels To: Rasdhoo, Ukulhas, Mathiveri, Male' &amp; Airport</span></br>
                <span>Speed: 40.75 km/h</span></br>
                <span>Capacity: 24 seats</span></br>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Fulhangi Speed 1</h3>
                  <span class="price">Price: N/A</span>
                  <span class="capacity">Seat Capacity: 24 seats, Speed: 40.75 km/h</span>
                </div>
                <p class="description">iterally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                  </div>
                </div>

                <div class="check-availability-wrapper grey lighten-5 z-depth-2">
                  <div class="row">
                    <div class="col s12">
                      <div class="card card-check-availability">
                        <div class="card-content">
                          <span class="card-title">Cheack Availability</br><small>Fill below form and click search to check availability and reserve seat.</small></span>
                          <form>
                            <div class="row">
                              <div class="input-field col s12 m6 l3">
                                <input id="email" type="date" class="datepicker">
                                <label for="email" data-error="wrong" data-success="right" class="active">Date</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <select>
                                  <option value="" disabled selected>Choose an option</option>
                                  <option value="1">Mathiveri</option>
                                  <option value="2">Ukulhas</option>
                                  <option value="3">Rasdhoo</option>
                                  <option value="4">Male'</option>
                                  <option value="5">Airport</option>
                                </select>
                                <label>From</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <select>
                                  <option value="" disabled selected>Choose an option</option>
                                  <option value="1">Mathiveri</option>
                                  <option value="2">Ukulhas</option>
                                  <option value="3">Rasdhoo</option>
                                  <option value="4">Male'</option>
                                  <option value="5">Airport</option>
                                </select>
                                <label>To</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <input placeholder="Enter Number of Seats" id="numberofseats" type="number" min="0" max="27" step="1" class="validate">
                                <label for="numberofseats">Number of Seats</label>
                              </div>

                              <div class="col s12">
                                <button class="waves-effect waves-light btn cyan"><i class="material-icons left">search</i>search</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>

                    <div class="col l4 m6 s12">
                      <div class="card-schedule-item card hoverable">
                        <div class="card-content">
                          <span class="card-title">Private Hire</br><small>25 April, 2017</small></span>
                          <p>
                            Travels to: Mathiveri , Ukulhas, Rasdhoo, Male' &amp; Airport
                            <span style="display: block">Seats Available: 20 seats</span>
                            <span style="display: block">Depurture Time: Any</span>
                          </p>
                        </div>
                        <div class="card-action">
                          <a class="waves-effect waves-light btn green" href="#">Private Hire</a>
                        </div>
                      </div>
                    </div>

                    <div class="col l4 m6 s12">
                      <div class="card-schedule-item card hoverable">
                        <div class="card-content">
                          <span class="card-title">Male' to Alif Alif (Aa) Atoll</br><small>25 April, 2017</small></span>
                          <p>
                            Travels to: Male', Airport, Rasdhoo, Ukulhas &amp; Mathiveri
                            <span style="display: block">Seats Available: 20 seats</span>
                            <span style="display: block">Shedule Starts: 10:30 AM</span>
                          </p>
                        </div>
                        <div class="card-action">
                          <a class="modal-trigger waves-effect waves-light btn grey" href="#modal-schedule-more">More</a>
                          <a class="waves-effect waves-light btn cyan" href="#">Book Seat</a>
                        </div>
                      </div>
                    </div>

                    <div class="col l4 m6 s12">
                      <div class="card-schedule-item card hoverable">
                        <div class="card-content">
                          <span class="card-title">Alif Alif (Aa) Atoll to Male'</br><small>25 April, 2017</small></span>
                          <p>
                            Travels to: Mathiveri , Ukulhas, Rasdhoo, Male &amp; Airport
                            <span style="display: block">Seats Available: 20 seats</span>
                            <span style="display: block">Shedule Starts: Mathiveri: 12:30 PM</span>
                          </p>
                        </div>
                        <div class="card-action">
                          <a class="modal-trigger waves-effect waves-light btn grey" href="#modal-schedule-more">More</a>
                          <a class="waves-effect waves-light btn cyan" href="#">Book Seat</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="reviews-wrapper">
                  <div class="row">
                    <div class="col s12 new-review">
                      <span class="title">Customer Reviews</br><small>Please login to review. / Type your message and click review button.</small></span>
                      <!-- <form>
                        <textarea id="textarea1" class="materialize-textarea" placeholder="Enter message"></textarea>
                      </form> -->
                    </div>
                    <div class="col s12">
                      <div class="review">
                        <img src="img/review-user.png" alt="" class="circle responsive-img user-image">
                        <div class="content">
                          <span class="user-name">Ahmed Mahfooz</span>
                          <span class="rating">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star_half</i>
                            <i class="material-icons">star_border</i>
                          </span>
                          This is a square image. Add the "circle" class to it to make it appear circular.
                        </div>
                      </div>
                    </div>
                    <div class="col s12">
                      <div class="review">
                        <img src="img/review-user.png" alt="" class="circle responsive-img user-image">
                        <div class="content">
                          <span class="user-name">Ahmed Rimah</span>
                          <span class="rating">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star_half</i>
                            <i class="material-icons">star_border</i>
                            <i class="material-icons">star_border</i>
                          </span>
                          Praesent cumque molestie molestiae, purus assumenda consectetur veniam dui taciti neque aperiam. Id scelerisque repudiandae, ullamcorper? Odit ipsum irure etiam.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">phone</i></a>
                <a class="btn-floating btn-large waves-effect waves-light grey"><i class="material-icons">message</i></a>
                <a class="btn-floating btn-large waves-effect waves-light cyan"><i class="material-icons">location_on</i></a> 
                <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">favorite</i></a> 
              </div>
            </div>
          </div>
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter topselling">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <span class="offerpromo green lighten-1">15 seats left for Today</span>
                <img class="responsive-img" src="http://placehold.it/350x250" alt="Vessel Name : Number of Seats Left">
                <span class="rating">
                  <i class="material-icons">star</i>
                  <i class="material-icons">star</i>
                  <i class="material-icons">star_half</i>
                  <i class="material-icons">star_border</i>
                  <i class="material-icons">star_border</i>
                </span>
              </a>
              <div class="gallery-header">
                <span class="title">Fulhangi Speed 2</span></br>
                <span>Travels To: Gulhi, Maafushi, Male' &amp; Airport</span></br>
                <span>Speed: 48.25 km/h</span></br>
                <span>Capacity: 27 seats</span></br>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Fulhangi Speed 2</h3>
                  <span class="price">Price: N/A</span>
                  <span class="capacity">Seat Capacity: 27 seats, Speed: 48.25 km/h</span>
                </div>
                <p class="description">iterally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                  </div>
                </div>

                <div class="check-availability-wrapper grey lighten-5 z-depth-2">
                  <div class="row">
                    <div class="col s12">
                      <div class="card card-check-availability">
                        <div class="card-content">
                          <span class="card-title">Cheack Availability</br><small>Fill below form and click search to check availability and reserve seat.</small></span>
                          <form>
                            <div class="row">
                              <div class="input-field col s12 m6 l3">
                                <input id="email" type="date" class="datepicker">
                                <label for="email" data-error="wrong" data-success="right" class="active">Date</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <select>
                                  <option value="" disabled selected>Choose an option</option>
                                  <option value="1">Mathiveri</option>
                                  <option value="2">Ukulhas</option>
                                  <option value="3">Rasdhoo</option>
                                  <option value="4">Male'</option>
                                  <option value="5">Airport</option>
                                </select>
                                <label>From</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <select>
                                  <option value="" disabled selected>Choose an option</option>
                                  <option value="1">Mathiveri</option>
                                  <option value="2">Ukulhas</option>
                                  <option value="3">Rasdhoo</option>
                                  <option value="4">Male'</option>
                                  <option value="5">Airport</option>
                                </select>
                                <label>To</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <input placeholder="Enter Number of Seats" id="numberofseats" type="number" min="0" max="27" step="1" class="validate">
                                <label for="numberofseats">Number of Seats</label>
                              </div>

                              <div class="col s12">
                                <button class="waves-effect waves-light btn cyan"><i class="material-icons left">search</i>search</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>

                    <div class="col l4 m6 s12">
                      <div class="card-schedule-item card hoverable">
                        <div class="card-content">
                          <span class="card-title">Private Hire</br><small>25 April, 2017</small></span>
                          <p>
                            Travels to: Gulhi, Maafushi, Male' &amp; Airport
                            <span style="display: block">Seats Available: 20 seats</span>
                            <span style="display: block">Depurture Time: Any</span>
                          </p>
                        </div>
                        <div class="card-action">
                          <a class="waves-effect waves-light btn green" href="#">Private Hire</a>
                        </div>
                      </div>
                    </div>

                    <div class="col l4 m6 s12">
                      <div class="card-schedule-item card hoverable">
                        <div class="card-content">
                          <span class="card-title">Inside Male Atoll</br><small>25 April, 2017</small></span>
                          <p>
                            Travels to: Male', Airport, Gulhi &amp; Maafushi
                            <span style="display: block">Seats Available: 20 seats</span>
                            <span style="display: block">Shedule Starts: 10:30 AM</span>
                          </p>
                        </div>
                        <div class="card-action">
                          <a class="modal-trigger waves-effect waves-light btn grey" href="#modal-schedule-more">More</a>
                          <a class="waves-effect waves-light btn cyan" href="#">Book Seat</a>
                        </div>
                      </div>
                    </div>

                    <div class="col l4 m6 s12">
                      <div class="card-schedule-item card hoverable">
                        <div class="card-content">
                          <span class="card-title">Inside Male Atoll</br><small>25 April, 2017</small></span>
                          <p>
                            Travels to: Gulhi, Maafushi, Male &amp; Airport
                            <span style="display: block">Seats Available: 20 seats</span>
                            <span style="display: block">Shedule Starts: Mathiveri: 12:30 PM</span>
                          </p>
                        </div>
                        <div class="card-action">
                          <a class="modal-trigger waves-effect waves-light btn grey" href="#modal-schedule-more">More</a>
                          <a class="waves-effect waves-light btn cyan" href="#">Book Seat</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="reviews-wrapper">
                  <div class="row">
                    <div class="col s12 new-review">
                      <span class="title">Customer Reviews</br><small>Please login to review. / Type your message and click review button.</small></span>
                      <!-- <form>
                        <textarea id="textarea1" class="materialize-textarea" placeholder="Enter message"></textarea>
                      </form> -->
                    </div>
                    <div class="col s12">
                      <div class="review">
                        <img src="img/review-user.png" alt="" class="circle responsive-img user-image">
                        <div class="content">
                          <span class="user-name">Ahmed Mahfooz</span>
                          <span class="rating">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star_half</i>
                            <i class="material-icons">star_border</i>
                          </span>
                          This is a square image. Add the "circle" class to it to make it appear circular.
                        </div>
                      </div>
                    </div>
                    <div class="col s12">
                      <div class="review">
                        <img src="img/review-user.png" alt="" class="circle responsive-img user-image">
                        <div class="content">
                          <span class="user-name">Ahmed Rimah</span>
                          <span class="rating">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star_half</i>
                            <i class="material-icons">star_border</i>
                            <i class="material-icons">star_border</i>
                          </span>
                          Praesent cumque molestie molestiae, purus assumenda consectetur veniam dui taciti neque aperiam. Id scelerisque repudiandae, ullamcorper? Odit ipsum irure etiam.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">phone</i></a>
                <a class="btn-floating btn-large waves-effect waves-light grey"><i class="material-icons">message</i></a>
                <a class="btn-floating btn-large waves-effect waves-light cyan"><i class="material-icons">location_on</i></a> 
                <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">favorite</i></a> 
              </div>
            </div>
          </div>
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter topselling">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <span class="offerpromo green lighten-1">Only 8 seats left for Today</span>
                <img class="responsive-img" src="http://placehold.it/350x250" alt="Vessel Name : Number of Seats Left">
                <span class="rating">
                  <i class="material-icons">star</i>
                  <i class="material-icons">star</i>
                  <i class="material-icons">star</i>
                  <i class="material-icons">star_half</i>
                  <i class="material-icons">star_border</i>
                </span>
              </a>
              <div class="gallery-header">
                <span class="title">Fulhangi Speed 3</span></br>
                <span>Travels To: Rasdhoo,Thohdoo, Male' &amp; Airport</span></br>
                <span>Speed: 48.25 km/h</span></br>
                <span>Capacity: 27 seats</span></br>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Fulhangi Speed 3</h3>
                  <span class="price">Price: N/A</span>
                  <span class="capacity">Seat Capacity: 24 seats, Speed: 40.75 km/h</span>
                </div>
                <p class="description">iterally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                  </div>
                </div>

                <div class="check-availability-wrapper grey lighten-5 z-depth-2">
                  <div class="row">
                    <div class="col s12">
                      <div class="card card-check-availability">
                        <div class="card-content">
                          <span class="card-title">Cheack Availability</br><small>Fill below form and click search to check availability and reserve seat.</small></span>
                          <form>
                            <div class="row">
                              <div class="input-field col s12 m6 l3">
                                <input id="email" type="date" class="datepicker">
                                <label for="email" data-error="wrong" data-success="right" class="active">Date</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <select>
                                  <option value="" disabled selected>Choose an option</option>
                                  <option value="1">Mathiveri</option>
                                  <option value="2">Ukulhas</option>
                                  <option value="3">Rasdhoo</option>
                                  <option value="4">Male'</option>
                                  <option value="5">Airport</option>
                                </select>
                                <label>From</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <select>
                                  <option value="" disabled selected>Choose an option</option>
                                  <option value="1">Mathiveri</option>
                                  <option value="2">Ukulhas</option>
                                  <option value="3">Rasdhoo</option>
                                  <option value="4">Male'</option>
                                  <option value="5">Airport</option>
                                </select>
                                <label>To</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <input placeholder="Enter Number of Seats" id="numberofseats" type="number" min="0" max="27" step="1" class="validate">
                                <label for="numberofseats">Number of Seats</label>
                              </div>

                              <div class="col s12">
                                <button class="waves-effect waves-light btn cyan"><i class="material-icons left">search</i>search</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>

                    <div class="col l4 m6 s12">
                      <div class="card-schedule-item card hoverable">
                        <div class="card-content">
                          <span class="card-title">Private Hire</br><small>25 April, 2017</small></span>
                          <p>
                            Travels to: Thohdoo, Rasdhoo, Male' &amp; Airport
                            <span style="display: block">Seats Available: 20 seats</span>
                            <span style="display: block">Depurture Time: Any</span>
                          </p>
                        </div>
                        <div class="card-action">
                          <a class="waves-effect waves-light btn green" href="#">Private Hire</a>
                        </div>
                      </div>
                    </div>

                    <div class="col l4 m6 s12">
                      <div class="card-schedule-item card hoverable">
                        <div class="card-content">
                          <span class="card-title">Male' to Alif Alif (Aa) Atoll</br><small>25 April, 2017</small></span>
                          <p>
                            Travels to: Male', Airport, Rasdhoo &amp; Thohdoo
                            <span style="display: block">Seats Available: 20 seats</span>
                            <span style="display: block">Shedule Starts: 10:30 AM</span>
                          </p>
                        </div>
                        <div class="card-action">
                          <a class="modal-trigger waves-effect waves-light btn grey" href="#modal-schedule-more">More</a>
                          <a class="waves-effect waves-light btn cyan" href="#">Book Seat</a>
                        </div>
                      </div>
                    </div>

                    <div class="col l4 m6 s12">
                      <div class="card-schedule-item card hoverable">
                        <div class="card-content">
                          <span class="card-title">Alif Alif (Aa) Atoll to Male'</br><small>25 April, 2017</small></span>
                          <p>
                            Travels to: Thohdoo, Rasdhoo, Male &amp; Airport
                            <span style="display: block">Seats Available: 20 seats</span>
                            <span style="display: block">Shedule Starts: Mathiveri: 12:30 PM</span>
                          </p>
                        </div>
                        <div class="card-action">
                          <a class="modal-trigger waves-effect waves-light btn grey" href="#modal-schedule-more">More</a>
                          <a class="waves-effect waves-light btn cyan" href="#">Book Seat</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="reviews-wrapper">
                  <div class="row">
                    <div class="col s12 new-review">
                      <span class="title">Customer Reviews</br><small>Please login to review. / Type your message and click review button.</small></span>
                      <!-- <form>
                        <textarea id="textarea1" class="materialize-textarea" placeholder="Enter message"></textarea>
                      </form> -->
                    </div>
                    <div class="col s12">
                      <div class="review">
                        <img src="img/review-user.png" alt="" class="circle responsive-img user-image">
                        <div class="content">
                          <span class="user-name">Ahmed Mahfooz</span>
                          <span class="rating">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star_half</i>
                            <i class="material-icons">star_border</i>
                          </span>
                          This is a square image. Add the "circle" class to it to make it appear circular.
                        </div>
                      </div>
                    </div>
                    <div class="col s12">
                      <div class="review">
                        <img src="img/review-user.png" alt="" class="circle responsive-img user-image">
                        <div class="content">
                          <span class="user-name">Ahmed Rimah</span>
                          <span class="rating">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star_half</i>
                            <i class="material-icons">star_border</i>
                            <i class="material-icons">star_border</i>
                          </span>
                          Praesent cumque molestie molestiae, purus assumenda consectetur veniam dui taciti neque aperiam. Id scelerisque repudiandae, ullamcorper? Odit ipsum irure etiam.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">phone</i></a>
                <a class="btn-floating btn-large waves-effect waves-light grey"><i class="material-icons">message</i></a>
                <a class="btn-floating btn-large waves-effect waves-light cyan"><i class="material-icons">location_on</i></a> 
                <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">favorite</i></a> 
              </div>
            </div>
          </div>
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter featured">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <span class="offerpromo grey lighten-1">Featured</span>
                <img class="responsive-img" src="http://placehold.it/350x250" alt="Vessel Name : Number of Seats Left">
                <span class="rating">
                  <i class="material-icons">star</i>
                  <i class="material-icons">star</i>
                  <i class="material-icons">star</i>
                  <i class="material-icons">star_half</i>
                  <i class="material-icons">star_border</i>
                </span>
              </a>
              <div class="gallery-header">
                <span class="title">Corel Ranger</span></br>
                <span>Travels To: Rasdhoo, Ukulhas, Mathiveri, Male' &amp; Airport</span></br>
                <span>Speed: 49.15 km/h</span></br>
                <span>Capacity: 20 seats</span></br>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Corel Ranger</h3>
                  <span class="price">Price: N/A</span>
                  <span class="capacity">Seat Capacity: 20 seats, Speed: 49.15 km/h</span>
                </div>
                <p class="description">iterally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                  </div>
                </div>

                <div class="check-availability-wrapper grey lighten-5 z-depth-2">
                  <div class="row">
                    <div class="col s12">
                      <div class="card card-check-availability">
                        <div class="card-content">
                          <span class="card-title">Cheack Availability</br><small>Fill below form and click search to check availability and reserve seat.</small></span>
                          <form>
                            <div class="row">
                              <div class="input-field col s12 m6 l3">
                                <input id="email" type="date" class="datepicker">
                                <label for="email" data-error="wrong" data-success="right" class="active">Date</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <select>
                                  <option value="" disabled selected>Choose an option</option>
                                  <option value="1">Mathiveri</option>
                                  <option value="2">Ukulhas</option>
                                  <option value="3">Rasdhoo</option>
                                  <option value="4">Male'</option>
                                  <option value="5">Airport</option>
                                </select>
                                <label>From</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <select>
                                  <option value="" disabled selected>Choose an option</option>
                                  <option value="1">Mathiveri</option>
                                  <option value="2">Ukulhas</option>
                                  <option value="3">Rasdhoo</option>
                                  <option value="4">Male'</option>
                                  <option value="5">Airport</option>
                                </select>
                                <label>To</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <input placeholder="Enter Number of Seats" id="numberofseats" type="number" min="0" max="27" step="1" class="validate">
                                <label for="numberofseats">Number of Seats</label>
                              </div>

                              <div class="col s12">
                                <button class="waves-effect waves-light btn cyan"><i class="material-icons left">search</i>search</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>

                    <div class="col l4 m6 s12">
                      <div class="card-schedule-item card hoverable">
                        <div class="card-content">
                          <span class="card-title">Private Hire</br><small>25 April, 2017</small></span>
                          <p>
                            Travels to: Mathiveri , Ukulhas, Rasdhoo, Male' &amp; Airport
                            <span style="display: block">Seats Available: 20 seats</span>
                            <span style="display: block">Depurture Time: Any</span>
                          </p>
                        </div>
                        <div class="card-action">
                          <a class="waves-effect waves-light btn green" href="#">Private Hire</a>
                        </div>
                      </div>
                    </div>

                    <div class="col l4 m6 s12">
                      <div class="card-schedule-item card hoverable">
                        <div class="card-content">
                          <span class="card-title">Male' to Alif Alif (Aa) Atoll</br><small>25 April, 2017</small></span>
                          <p>
                            Travels to: Male', Airport, Rasdhoo, Ukulhas &amp; Mathiveri
                            <span style="display: block">Seats Available: 20 seats</span>
                            <span style="display: block">Shedule Starts: 10:30 AM</span>
                          </p>
                        </div>
                        <div class="card-action">
                          <a class="modal-trigger waves-effect waves-light btn grey" href="#modal-schedule-more">More</a>
                          <a class="waves-effect waves-light btn cyan" href="#">Book Seat</a>
                        </div>
                      </div>
                    </div>

                    <div class="col l4 m6 s12">
                      <div class="card-schedule-item card hoverable">
                        <div class="card-content">
                          <span class="card-title">Alif Alif (Aa) Atoll to Male'</br><small>25 April, 2017</small></span>
                          <p>
                            Travels to: Mathiveri , Ukulhas, Rasdhoo, Male &amp; Airport
                            <span style="display: block">Seats Available: 20 seats</span>
                            <span style="display: block">Shedule Starts: Mathiveri: 12:30 PM</span>
                          </p>
                        </div>
                        <div class="card-action">
                          <a class="modal-trigger waves-effect waves-light btn grey" href="#modal-schedule-more">More</a>
                          <a class="waves-effect waves-light btn cyan" href="#">Book Seat</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="reviews-wrapper">
                  <div class="row">
                    <div class="col s12 new-review">
                      <span class="title">Customer Reviews</br><small>Please login to review. / Type your message and click review button.</small></span>
                      <!-- <form>
                        <textarea id="textarea1" class="materialize-textarea" placeholder="Enter message"></textarea>
                      </form> -->
                    </div>
                    <div class="col s12">
                      <div class="review">
                        <img src="img/review-user.png" alt="" class="circle responsive-img user-image">
                        <div class="content">
                          <span class="user-name">Ahmed Mahfooz</span>
                          <span class="rating">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star_half</i>
                            <i class="material-icons">star_border</i>
                          </span>
                          This is a square image. Add the "circle" class to it to make it appear circular.
                        </div>
                      </div>
                    </div>
                    <div class="col s12">
                      <div class="review">
                        <img src="img/review-user.png" alt="" class="circle responsive-img user-image">
                        <div class="content">
                          <span class="user-name">Ahmed Rimah</span>
                          <span class="rating">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star_half</i>
                            <i class="material-icons">star_border</i>
                            <i class="material-icons">star_border</i>
                          </span>
                          Praesent cumque molestie molestiae, purus assumenda consectetur veniam dui taciti neque aperiam. Id scelerisque repudiandae, ullamcorper? Odit ipsum irure etiam.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">phone</i></a>
                <a class="btn-floating btn-large waves-effect waves-light grey"><i class="material-icons">message</i></a>
                <a class="btn-floating btn-large waves-effect waves-light cyan"><i class="material-icons">location_on</i></a> 
                <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">favorite</i></a> 
              </div>
            </div>
          </div>
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter featured">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <span class="offerpromo grey lighten-1">Featured</span>
                <img class="responsive-img" src="http://placehold.it/350x250" alt="Vessel Name : Number of Seats Left">
                <span class="rating">
                  <i class="material-icons">star</i>
                  <i class="material-icons">star</i>
                  <i class="material-icons">star_half</i>
                  <i class="material-icons">star_border</i>
                  <i class="material-icons">star_border</i>
                </span>
              </a>
              <div class="gallery-header">
                <span class="title">iCom 1</span></br>
                <span>Travels To: Himmafushi, Thulusdhoo, Male' &amp; Airport</span></br>
                <span>Speed: 48.25 km/h</span></br>
                <span>Capacity: 27 seats</span></br>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>iCom 1</h3>
                  <span class="price">Price: N/A</span>
                  <span class="capacity">Seat Capacity: 27 seats, Speed: 48.25 km/h</span>
                </div>
                <p class="description">iterally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                  </div>
                </div>

                <div class="check-availability-wrapper grey lighten-5 z-depth-2">
                  <div class="row">
                    <div class="col s12">
                      <div class="card card-check-availability">
                        <div class="card-content">
                          <span class="card-title">Cheack Availability</br><small>Fill below form and click search to check availability and reserve seat.</small></span>
                          <form>
                            <div class="row">
                              <div class="input-field col s12 m6 l3">
                                <input id="email" type="date" class="datepicker">
                                <label for="email" data-error="wrong" data-success="right" class="active">Date</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <select>
                                  <option value="" disabled selected>Choose an option</option>
                                  <option value="1">Mathiveri</option>
                                  <option value="2">Ukulhas</option>
                                  <option value="3">Rasdhoo</option>
                                  <option value="4">Male'</option>
                                  <option value="5">Airport</option>
                                </select>
                                <label>From</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <select>
                                  <option value="" disabled selected>Choose an option</option>
                                  <option value="1">Mathiveri</option>
                                  <option value="2">Ukulhas</option>
                                  <option value="3">Rasdhoo</option>
                                  <option value="4">Male'</option>
                                  <option value="5">Airport</option>
                                </select>
                                <label>To</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <input placeholder="Enter Number of Seats" id="numberofseats" type="number" min="0" max="27" step="1" class="validate">
                                <label for="numberofseats">Number of Seats</label>
                              </div>

                              <div class="col s12">
                                <button class="waves-effect waves-light btn cyan"><i class="material-icons left">search</i>search</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>

                    <div class="col l4 m6 s12">
                      <div class="card-schedule-item card hoverable">
                        <div class="card-content">
                          <span class="card-title">Private Hire</br><small>25 April, 2017</small></span>
                          <p>
                            Travels to: Himmafushi, Thulusdhoo, Male' &amp; Airport
                            <span style="display: block">Seats Available: 20 seats</span>
                            <span style="display: block">Depurture Time: Any</span>
                          </p>
                        </div>
                        <div class="card-action">
                          <a class="waves-effect waves-light btn green" href="#">Private Hire</a>
                        </div>
                      </div>
                    </div>

                    <div class="col l4 m6 s12">
                      <div class="card-schedule-item card hoverable">
                        <div class="card-content">
                          <span class="card-title">Male' to Alif Alif (Aa) Atoll</br><small>25 April, 2017</small></span>
                          <p>
                            Travels to: Male', Airport, Himmafushi &amp; Thulusdhoo
                            <span style="display: block">Seats Available: 20 seats</span>
                            <span style="display: block">Shedule Starts: 10:30 AM</span>
                          </p>
                        </div>
                        <div class="card-action">
                          <a class="modal-trigger waves-effect waves-light btn grey" href="#modal-schedule-more">More</a>
                          <a class="waves-effect waves-light btn cyan" href="#">Book Seat</a>
                        </div>
                      </div>
                    </div>

                    <div class="col l4 m6 s12">
                      <div class="card-schedule-item card hoverable">
                        <div class="card-content">
                          <span class="card-title">Alif Alif (Aa) Atoll to Male'</br><small>25 April, 2017</small></span>
                          <p>
                            Travels to: Himmafushi, Thulusdhoo, Male &amp; Airport
                            <span style="display: block">Seats Available: 20 seats</span>
                            <span style="display: block">Shedule Starts: Mathiveri: 12:30 PM</span>
                          </p>
                        </div>
                        <div class="card-action">
                          <a class="modal-trigger waves-effect waves-light btn grey" href="#modal-schedule-more">More</a>
                          <a class="waves-effect waves-light btn cyan" href="#">Book Seat</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="reviews-wrapper">
                  <div class="row">
                    <div class="col s12 new-review">
                      <span class="title">Customer Reviews</br><small>Please login to review. / Type your message and click review button.</small></span>
                      <!-- <form>
                        <textarea id="textarea1" class="materialize-textarea" placeholder="Enter message"></textarea>
                      </form> -->
                    </div>
                    <div class="col s12">
                      <div class="review">
                        <img src="img/review-user.png" alt="" class="circle responsive-img user-image">
                        <div class="content">
                          <span class="user-name">Ahmed Mahfooz</span>
                          <span class="rating">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star_half</i>
                            <i class="material-icons">star_border</i>
                          </span>
                          This is a square image. Add the "circle" class to it to make it appear circular.
                        </div>
                      </div>
                    </div>
                    <div class="col s12">
                      <div class="review">
                        <img src="img/review-user.png" alt="" class="circle responsive-img user-image">
                        <div class="content">
                          <span class="user-name">Ahmed Rimah</span>
                          <span class="rating">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star_half</i>
                            <i class="material-icons">star_border</i>
                            <i class="material-icons">star_border</i>
                          </span>
                          Praesent cumque molestie molestiae, purus assumenda consectetur veniam dui taciti neque aperiam. Id scelerisque repudiandae, ullamcorper? Odit ipsum irure etiam.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">phone</i></a>
                <a class="btn-floating btn-large waves-effect waves-light grey"><i class="material-icons">message</i></a>
                <a class="btn-floating btn-large waves-effect waves-light cyan"><i class="material-icons">location_on</i></a> 
                <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">favorite</i></a> 
              </div>
            </div>
          </div>
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter topselling">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <span class="offerpromo red lighten-1">Only 4 seats left for Today</span>
                <img class="responsive-img" src="http://placehold.it/350x250" alt="Vessel Name : Number of Seats Left">
                <span class="rating">
                  <i class="material-icons">star</i>
                  <i class="material-icons">star</i>
                  <i class="material-icons">star_half</i>
                  <i class="material-icons">star_border</i>
                  <i class="material-icons">star_border</i>
                </span>
              </a>
              <div class="gallery-header">
                <span class="title">iCom 2</span></br>
                <span>Travels To: Maafushi, Gulhi, Male' &amp; Airport</span></br>
                <span>Speed: 48.25 km/h</span></br>
                <span>Capacity: 27 seats</span></br>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>iCom 2</h3>
                  <span class="price">Price: N/A</span>
                  <span class="capacity">Seat Capacity: 27 seats, Speed: 48.25 km/h</span>
                </div>
                <p class="description">iterally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                  </div>
                </div>

                <div class="check-availability-wrapper grey lighten-5 z-depth-2">
                  <div class="row">
                    <div class="col s12">
                      <div class="card card-check-availability">
                        <div class="card-content">
                          <span class="card-title">Cheack Availability</br><small>Fill below form and click search to check availability and reserve seat.</small></span>
                          <form>
                            <div class="row">
                              <div class="input-field col s12 m6 l3">
                                <input id="email" type="date" class="datepicker">
                                <label for="email" data-error="wrong" data-success="right" class="active">Date</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <select>
                                  <option value="" disabled selected>Choose an option</option>
                                  <option value="1">Mathiveri</option>
                                  <option value="2">Ukulhas</option>
                                  <option value="3">Rasdhoo</option>
                                  <option value="4">Male'</option>
                                  <option value="5">Airport</option>
                                </select>
                                <label>From</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <select>
                                  <option value="" disabled selected>Choose an option</option>
                                  <option value="1">Mathiveri</option>
                                  <option value="2">Ukulhas</option>
                                  <option value="3">Rasdhoo</option>
                                  <option value="4">Male'</option>
                                  <option value="5">Airport</option>
                                </select>
                                <label>To</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <input placeholder="Enter Number of Seats" id="numberofseats" type="number" min="0" max="27" step="1" class="validate">
                                <label for="numberofseats">Number of Seats</label>
                              </div>

                              <div class="col s12">
                                <button class="waves-effect waves-light btn cyan"><i class="material-icons left">search</i>search</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>

                    <div class="col l4 m6 s12">
                      <div class="card-schedule-item card hoverable">
                        <div class="card-content">
                          <span class="card-title">Private Hire</br><small>25 April, 2017</small></span>
                          <p>
                            Travels to: Maafushi, Gulhi, Male' &amp; Airport
                            <span style="display: block">Seats Available: 20 seats</span>
                            <span style="display: block">Depurture Time: Any</span>
                          </p>
                        </div>
                        <div class="card-action">
                          <a class="waves-effect waves-light btn green" href="#">Private Hire</a>
                        </div>
                      </div>
                    </div>

                    <div class="col l4 m6 s12">
                      <div class="card-schedule-item card hoverable">
                        <div class="card-content">
                          <span class="card-title">Male' Maafushi</br><small>25 April, 2017</small></span>
                          <p>
                            Travels to: Male', Airport, Maafushi &amp; Gulhi
                            <span style="display: block">Seats Available: 20 seats</span>
                            <span style="display: block">Shedule Starts: 10:30 AM</span>
                          </p>
                        </div>
                        <div class="card-action">
                          <a class="modal-trigger waves-effect waves-light btn grey" href="#modal-schedule-more">More</a>
                          <a class="waves-effect waves-light btn cyan" href="#">Book Seat</a>
                        </div>
                      </div>
                    </div>

                    <div class="col l4 m6 s12">
                      <div class="card-schedule-item card hoverable">
                        <div class="card-content">
                          <span class="card-title">Maafushi to Male'</br><small>25 April, 2017</small></span>
                          <p>
                            Travels to: Maafushi, Gulhi, Male &amp; Airport
                            <span style="display: block">Seats Available: 20 seats</span>
                            <span style="display: block">Shedule Starts: Mathiveri: 12:30 PM</span>
                          </p>
                        </div>
                        <div class="card-action">
                          <a class="modal-trigger waves-effect waves-light btn grey" href="#modal-schedule-more">More</a>
                          <a class="waves-effect waves-light btn cyan" href="#">Book Seat</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="reviews-wrapper">
                  <div class="row">
                    <div class="col s12 new-review">
                      <span class="title">Customer Reviews</br><small>Please login to review. / Type your message and click review button.</small></span>
                      <!-- <form>
                        <textarea id="textarea1" class="materialize-textarea" placeholder="Enter message"></textarea>
                      </form> -->
                    </div>
                    <div class="col s12">
                      <div class="review">
                        <img src="img/review-user.png" alt="" class="circle responsive-img user-image">
                        <div class="content">
                          <span class="user-name">Ahmed Mahfooz</span>
                          <span class="rating">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star_half</i>
                            <i class="material-icons">star_border</i>
                          </span>
                          This is a square image. Add the "circle" class to it to make it appear circular.
                        </div>
                      </div>
                    </div>
                    <div class="col s12">
                      <div class="review">
                        <img src="img/review-user.png" alt="" class="circle responsive-img user-image">
                        <div class="content">
                          <span class="user-name">Ahmed Rimah</span>
                          <span class="rating">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star_half</i>
                            <i class="material-icons">star_border</i>
                            <i class="material-icons">star_border</i>
                          </span>
                          Praesent cumque molestie molestiae, purus assumenda consectetur veniam dui taciti neque aperiam. Id scelerisque repudiandae, ullamcorper? Odit ipsum irure etiam.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">phone</i></a>
                <a class="btn-floating btn-large waves-effect waves-light grey"><i class="material-icons">message</i></a>
                <a class="btn-floating btn-large waves-effect waves-light cyan"><i class="material-icons">location_on</i></a> 
                <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">favorite</i></a> 
              </div>
            </div>
          </div>
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter topselling">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <span class="offerpromo green lighten-1">11 seats available for Today</span>
                <img class="responsive-img" src="http://placehold.it/350x250" alt="Vessel Name : Number of Seats Left">
                <span class="rating">
                  <i class="material-icons">star</i>
                  <i class="material-icons">star</i>
                  <i class="material-icons">star</i>
                  <i class="material-icons">star_half</i>
                  <i class="material-icons">star_border</i>
                </span>
              </a>
              <div class="gallery-header">
                <span class="title">Nevi 2</span></br>
                <span>Travels To: Rasdhoo, Ukulhas, Mathiveri, Male' &amp; Airport</span></br>
                <span>Speed: 48.25 km/h</span></br>
                <span>Capacity: 27 seats</span></br>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Nevi 2</h3>
                  <span class="price">Price: N/A</span>
                  <span class="capacity">Seat Capacity: 27 seats, Speed: 48.25 km/h</span>
                </div>
                <p class="description">iterally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                  </div>
                </div>

                <div class="check-availability-wrapper grey lighten-5 z-depth-2">
                  <div class="row">
                    <div class="col s12">
                      <div class="card card-check-availability">
                        <div class="card-content">
                          <span class="card-title">Cheack Availability</br><small>Fill below form and click search to check availability and reserve seat.</small></span>
                          <form>
                            <div class="row">
                              <div class="input-field col s12 m6 l3">
                                <input id="email" type="date" class="datepicker">
                                <label for="email" data-error="wrong" data-success="right" class="active">Date</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <select>
                                  <option value="" disabled selected>Choose an option</option>
                                  <option value="1">Mathiveri</option>
                                  <option value="2">Ukulhas</option>
                                  <option value="3">Rasdhoo</option>
                                  <option value="4">Male'</option>
                                  <option value="5">Airport</option>
                                </select>
                                <label>From</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <select>
                                  <option value="" disabled selected>Choose an option</option>
                                  <option value="1">Mathiveri</option>
                                  <option value="2">Ukulhas</option>
                                  <option value="3">Rasdhoo</option>
                                  <option value="4">Male'</option>
                                  <option value="5">Airport</option>
                                </select>
                                <label>To</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <input placeholder="Enter Number of Seats" id="numberofseats" type="number" min="0" max="27" step="1" class="validate">
                                <label for="numberofseats">Number of Seats</label>
                              </div>

                              <div class="col s12">
                                <button class="waves-effect waves-light btn cyan"><i class="material-icons left">search</i>search</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>

                    <div class="col l4 m6 s12">
                      <div class="card-schedule-item card hoverable">
                        <div class="card-content">
                          <span class="card-title">Private Hire</br><small>25 April, 2017</small></span>
                          <p>
                            Travels to: Mathiveri , Ukulhas, Rasdhoo, Male' &amp; Airport
                            <span style="display: block">Seats Available: 20 seats</span>
                            <span style="display: block">Depurture Time: Any</span>
                          </p>
                        </div>
                        <div class="card-action">
                          <a class="waves-effect waves-light btn green" href="#">Private Hire</a>
                        </div>
                      </div>
                    </div>

                    <div class="col l4 m6 s12">
                      <div class="card-schedule-item card hoverable">
                        <div class="card-content">
                          <span class="card-title">Male' to Alif Alif (Aa) Atoll</br><small>25 April, 2017</small></span>
                          <p>
                            Travels to: Male', Airport, Rasdhoo, Ukulhas &amp; Mathiveri
                            <span style="display: block">Seats Available: 20 seats</span>
                            <span style="display: block">Shedule Starts: 10:30 AM</span>
                          </p>
                        </div>
                        <div class="card-action">
                          <a class="modal-trigger waves-effect waves-light btn grey" href="#modal-schedule-more">More</a>
                          <a class="waves-effect waves-light btn cyan" href="#">Book Seat</a>
                        </div>
                      </div>
                    </div>

                    <div class="col l4 m6 s12">
                      <div class="card-schedule-item card hoverable">
                        <div class="card-content">
                          <span class="card-title">Alif Alif (Aa) Atoll to Male'</br><small>25 April, 2017</small></span>
                          <p>
                            Travels to: Mathiveri , Ukulhas, Rasdhoo, Male &amp; Airport
                            <span style="display: block">Seats Available: 20 seats</span>
                            <span style="display: block">Shedule Starts: Mathiveri: 12:30 PM</span>
                          </p>
                        </div>
                        <div class="card-action">
                          <a class="modal-trigger waves-effect waves-light btn grey" href="#modal-schedule-more">More</a>
                          <a class="waves-effect waves-light btn cyan" href="#">Book Seat</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="reviews-wrapper">
                  <div class="row">
                    <div class="col s12 new-review">
                      <span class="title">Customer Reviews</br><small>Please login to review. / Type your message and click review button.</small></span>
                      <!-- <form>
                        <textarea id="textarea1" class="materialize-textarea" placeholder="Enter message"></textarea>
                      </form> -->
                    </div>
                    <div class="col s12">
                      <div class="review">
                        <img src="img/review-user.png" alt="" class="circle responsive-img user-image">
                        <div class="content">
                          <span class="user-name">Ahmed Mahfooz</span>
                          <span class="rating">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star_half</i>
                            <i class="material-icons">star_border</i>
                          </span>
                          This is a square image. Add the "circle" class to it to make it appear circular.
                        </div>
                      </div>
                    </div>
                    <div class="col s12">
                      <div class="review">
                        <img src="img/review-user.png" alt="" class="circle responsive-img user-image">
                        <div class="content">
                          <span class="user-name">Ahmed Rimah</span>
                          <span class="rating">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star_half</i>
                            <i class="material-icons">star_border</i>
                            <i class="material-icons">star_border</i>
                          </span>
                          Praesent cumque molestie molestiae, purus assumenda consectetur veniam dui taciti neque aperiam. Id scelerisque repudiandae, ullamcorper? Odit ipsum irure etiam.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">phone</i></a>
                <a class="btn-floating btn-large waves-effect waves-light grey"><i class="material-icons">message</i></a>
                <a class="btn-floating btn-large waves-effect waves-light cyan"><i class="material-icons">location_on</i></a> 
                <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">favorite</i></a> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Vessels -->

    <!-- Mobile App -->
    <div id="mobileapp-ad" class="section cyan">
      <div class="container">
        <div class="row marg-bottom-0">
          <div class="col s12">
            <div class="title white-text center">Download Our Mobile App</br><small>Check availability and reserve your transfer to anywhere in the Maldives. One platform to power them all.</small></div>
            <div class="app-download">
              <a href="#"><img src="img/play_store.png"></a>
              <a href="#"><img src="img/app_store.png"></a>
            </div>
            <img class="responsive-img appdemo-img" src="img/app-demo.png">
          </div>
        </div>
      </div>
    </div>
    <!-- End of Mobile App -->
@endsection

@section('body-extra')
@endsection
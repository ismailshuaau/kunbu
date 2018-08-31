@extends('layouts.app')

@section('head-extra')
@endsection

@section('nav-sliders-bg')
			<div class="nav-background">
        <div class="pattern active" style="background-image: url('http://placehold.it/1400x300');"></div>
      </div>
@endsection

@section('nav-sliders-slide')
        <div class="nav-header center">
          <h1>LOGISTICS</h1>
          <div class="tagline">Charter and transfer your cargo to any location in the Maldives.</div>
        </div>
@endsection

@section('nav-extra')
    <nav>
      <!-- Fixed Masonry Filters -->
      <div class="categories-wrapper grey darken-3">
        <div class="categories-container">
          <ul class="categories container">
            <li class="active"><a href="#all">All</a></li>
            <li><a href="#topselling">Speed Cargo</a></li>
            <li><a href="#featured">Ferry Cargo</a></li>
            <li><a href="#sacred">Boat Cargo</a></li>
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
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter topselling">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <!-- <span class="offerpromo green lighten-1">20 seats available for Today</span> -->
                <img class="responsive-img" src="img/charter-1.png" alt="Vessel Name : Capacity">
                <!-- <span class="rating">
                  <i class="material-icons">star</i>
                  <i class="material-icons">star</i>
                  <i class="material-icons">star</i>
                  <i class="material-icons">star_half</i>
                  <i class="material-icons">star_border</i>
                </span> -->
              </a>
              <div class="gallery-header">
                <span class="title">Kanduroadhi 1</span></br>
                <span>Travels To: Rasdhoo, Ukulhas, Mathiveri, Male' &amp; Airport</span></br>
                <span>Speed: 20.25 km/h</span></br>
                <span>Capacity: 15,000 Kg</span></br>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Kanduroadhi 1</h3>
                  <span class="price">Price: N/A</span>
                  <span class="capacity">Capacity: 15,000 Kg, Speed: 20.25 km/h</span>
                </div>
                <p class="description">iterally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice.</p>

                <!-- <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                  </div>
                </div> -->

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
                                <label class="active">From</label>
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
                                <label class="active">To</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <select>
                                  <option value="" disabled selected>Choose cargo type</option>
                                  <option value="1">Typ Info 1</option>
                                  <option value="2">Type Info 2</option>
                                  <option value="3">Type Info 3</option>
                                  <option value="4">Type Info 4</option>
                                  <option value="5">Type Info 5</option>
                                </select>
                                <label class="active">Type</label>
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
                          <span class="card-title">Charter</br><small>25 April, 2017</small></span>
                          <p>
                            Travels to: Mathiveri , Ukulhas, Rasdhoo, Male' &amp; Airport
                            <span style="display: block">Capacity: 15,000 Kg</span>
                            <span style="display: block">Depurture Time: Any</span>
                          </p>
                        </div>
                        <div class="card-action">
                          <a class="waves-effect waves-light btn green" href="#charter-space">Charter</a>
                        </div>
                      </div>
                    </div>

                    <div class="col l4 m6 s12">
                      <div class="card-schedule-item card hoverable">
                        <div class="card-content">
                          <span class="card-title">Male' to Aa.Ukulhas</br><small>25 April, 2017</small></span>
                          <p>
                            Travelling to: Male', Ukulhas
                            <span style="display: block">Capacity Available: 5780 Kg</span>
                            <span style="display: block">Shedule Starts: 10:30 AM</span>
                            <span style="display: block">Status: Open for public</span>
                          </p>
                        </div>
                        <div class="card-action">
                          <a class="waves-effect waves-light btn cyan" href="#book-space">Book Space</a>
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
                <a class="btn-floating btn-large waves-effect waves-light green tooltipped" data-position="bottom" data-delay="50" data-tooltip="Contact Informations"><i class="material-icons">phone</i></a>
                <a class="btn-floating btn-large waves-effect waves-light grey tooltipped" data-position="bottom" data-delay="50" data-tooltip="Send a Message"><i class="material-icons">message</i></a>
                <a class="btn-floating btn-large waves-effect waves-light cyan tooltipped" data-position="bottom" data-delay="50" data-tooltip="Locate Vessel"><i class="material-icons">location_on</i></a> 
                <a class="btn-floating btn-large waves-effect waves-light red tooltipped" data-position="bottom" data-delay="50" data-tooltip="Like"><i class="material-icons">favorite</i></a> 
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
                                <label class="active">From</label>
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
                                <label class="active">To</label>
                              </div>

                              <div class="input-field col s12 m6 l3">
                                <select>
                                  <option value="" disabled selected>Choose an option</option>
                                  <option value="1">Typ Info 1</option>
                                  <option value="2">Type Info 2</option>
                                  <option value="3">Type Info 3</option>
                                  <option value="4">Type Info 4</option>
                                  <option value="5">Type Info 5</option>
                                </select>
                                <label class="active">Type</label>
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
@endsection

@section('body-extra')
@endsection
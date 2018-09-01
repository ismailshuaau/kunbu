@extends('layouts.app')

@section('head-extra')
  <style type="text/css">
    nav .nav-background img, nav .nav-background .pattern {
      filter: none;
    }

    nav .nav-background {
      opacity: .8;
    }
  </style>
@endsection

@section('nav-sliders-bg')
			<div class="nav-background">
        <div class="pattern active" style="background-image: url('img/vessels.png');"></div>
      </div>
@endsection

@section('nav-sliders-slide')
        <div class="nav-header center">
          <h1>VESSELS</h1>
          <div class="tagline">Transfer to almost every atoll in the Maldives</div>
        </div>
@endsection

@section('nav-extra')
    <nav>
      <!-- Fixed Masonry Filters -->
      <div class="categories-wrapper grey darken-3">
        <div class="categories-container">
          <ul class="categories container">
            <li class="active"><a href="#all">All</a></li>
            @foreach($types as $type)
            <li><a href="#{{ str_replace(' ', '', $type->name) }}">{{ $type->name }}</a></li>
            @endforeach
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
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter {{ str_replace(' ', '', $vessel->type->name) }}">
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
                          <a class="waves-effect waves-light btn green" onclick="privateHire({{ $vessel->id }})">Private Hire</a>
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
                          <a class="waves-effect waves-light btn cyan" onclick="bookSeat({{ $vessel->id }}, {{ $schedule->id }})">Book Seat</a>
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

        </div>
      </div>
    </div>
    <!-- End of Vessels -->
@endsection

@section('body-extra')
  <script type="text/javascript">
    $(document).ready(function() {
      Materialize.updateTextFields();
      $('select').material_select();
    });

    function showRoutes(id) {
      console.log($('this').attr('data-schedule-name'));
      $.ajax( "operator/schedule/getroutes?id="+id)
      .done(function(data) {
        var obj = jQuery.parseJSON(data);
        console.log(obj);
        var finalTableData = '';
        $.each(obj, function( index, value ){
          console.log(value);
          finalTableData = finalTableData + '<tr><td>'+value.island+'</td><td>'+value.depurture_time+'</td><td>'+value.jetty+'</td></tr>';
        });
        $('#tableRotesList > tbody').html(finalTableData);
        console.log(finalTableData);
        $('#modal-schedule-more').modal('open');

      })
      .fail(function() {
        swal("Failed", "Failed to process", "error");
      });

    }

    function bookSeat(vesselid, scheduleid) {
      $('#bookingvesselid').val(vesselid);
      $('#bookingscheduleid').val(scheduleid);
      $('#book-seat').modal('open');
    }

    function privateHire(vesselid) {
      $('#hirevesselid').val(vesselid);
      $('#private-hire').modal('open');
    }
  </script>
@endsection
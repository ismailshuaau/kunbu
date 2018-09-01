<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A sea transfer management and booking system. Cheack availability and book your transfer to any island in the Maldives.">
    <meta name="author" content="Ahmed Mahfooz[ahmed.mahfooz@voidbinary.com]">

    <title>Kunbu - Discover Maldives</title>

    <!-- Lato Font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <!-- Stylesheet -->
    <link href="{{ url('sass/kunbu.css') }}" rel="stylesheet">
    <link href="{{ url('sass/ionicons.css') }}" rel="stylesheet">
    <link href="{{ url('css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/select2-materialize.css') }}" rel="stylesheet">
    <link href="{{ url('css/loadingbar.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('css/sweetalert.css') }}" rel="stylesheet" type="text/css" >

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Header extra -->
    @yield('head-extra')

  </head>

  <body class="@yield('body-class')">

    <!-- Navbar and Header -->
    <nav class="nav-extended @yield('header-type') cyan lighten-2">
      @yield('nav-sliders-bg')

      <div class="nav-wrapper container">
        <a href="{{ url('home') }}" class="brand-logo">kunbu.mv</a>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="{{ url('home') }}">Home</a></li>
          <li><a href="{{ url('destinations') }}" id="menu-destination">Destinations</a></li>
          <li><a href="{{ url('vessels') }}">Vessels</a></li>
          <li><a href="{{ url('logistics') }}">Logistics</a></li>
          <li><a href="{{ url('excursion') }}">Excursion</a></li>
          <li><a href="{{ url('about') }}">About</a></li>
          <li><a href="{{ url('login') }}">Login</a></li>
          <li><a href="{{ url('register') }}">Register</a></li>
        </ul>

      </div>

      @yield('nav-sliders-slide')
      
    </nav>

    @yield('nav-extra')

    <ul class="side-nav" id="nav-mobile">
      <li><a href="{{ url('home') }}"><i class="material-icons">home</i>Home</a></li>
      <li><a href="{{ url('destinations') }}"><i class="material-icons">place</i>Destinations</a></li>
      <li><a href="{{ url('vessels') }}"><i class="material-icons">directions_boat</i>Vessels</a></li>
      <li><a href="{{ url('logistics') }}"><i class="material-icons">directions_boat</i>Logistics</a></li>
      <li><a href="{{ url('about') }}"><i class="material-icons">directions_boat</i>Excursion</a></li>
      <li><a href="{{ url('about') }}"><i class="material-icons">info</i>About</a></li>
      <li><a href="{{ url('login') }}"><i class="material-icons">lock</i>Login</a></li>
      <li><a href="{{ url('register') }}"><i class="material-icons">person</i>Register</a></li>
    </ul>

    @yield('content')

    <!-- Footer -->
    <footer class="grey darken-3">
      <div class="container">
        <div class="center">
          <span class="white-text">&copy; 2018. A product of Void Binary Pvt Ltd.</span>
        </div>
      </div>
    </footer>
    <!-- End of Footer -->

    <!-- Modal Schedule More/Schedule Details -->
    <div id="modal-schedule-more" class="modal modal-fixed-footer">
      <div class="modal-header center grey white-text">
        <h5>Alif Alif (Aa) Atoll to Male'<br/><small>20 seats available for Today</small></h5>
      </div>
      <div class="modal-content">
        <p>
          <b>Travels From:</b> Mathiveri, Ukulhas, Rasdhoo to Male', Hulhumale </br>
          <!-- <b>Trip Duration:</b> 90 mins </br> -->
          <b>Schedule Starts:</b> 6:00 AM @ Mathiveri </br>
        </p>

        <table class="striped highlight responsive-table" id="tableRotesList">
          <thead>
            <tr>
                <th>Island</th>
                <th>Depurture Time</th>
                <th>Depurture Jetty</th>
            </tr>
          </thead>

          <tbody id="schedule-more-tbody">
            <tr>
              <td>Mathiveri</td>
              <td>06:00 AM</td>
              <td>Mathiveri Jetty</td>
            </tr>
            <tr>
              <td>Ukulhas</td>
              <td>07:00 AM</td>
              <td>Ukulhas MTCC Jetty</td>
            </tr>
            <tr>
              <td>Rasdhoo</td>
              <td>08:00 AM</td>
              <td>Rasdhoo Jetty</td>
            </tr>
            <tr>
              <td>Hulhule Airport</td>
              <td>09:30 AM</td>
              <td>Jetty No 2</td>
            </tr>
            <tr>
              <td>Male'</td>
              <td>09:45 AM</td>
              <td>Jetty No 6</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
      </div>
    </div>

    <div id="modal-location" class="modal modal-fixed-footer">
      <div class="modal-header center cyan white-text">
        <h5>Locate Vessel<br/><small>Current location of the vessel.</small></h5>
      </div>
      <div class="modal-content">
        <div class="map-wrapper" style="width: 100%;">
          <div class="map" id="map" style="width: 100%;">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">close</a>
      </div>
    </div>

    <div id="modal-message" class="modal modal-fixed-footer">
      <div class="modal-header center cyan white-text">
        <h5>Contact<br/><small>Send a message to the vessel owner.</small></h5>
      </div>
      <div class="modal-content">
        <form id="messageForm" method="POST" action="message">
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
          <input type="hidden" name="messagevesselid" id="messagevesselid">
          <div class="row">
            <div class="input-field col s12 m6">
              <input placeholder="Enter First Name" id="firstname" name="firstname" type="text" class="validate">
              <label for="firstname">First Name</label>
            </div>
            <div class="input-field col s12 m6">
              <input placeholder="Enter Last Name" id="lastname" name="lastname" type="text" class="validate">
              <label for="lastname">Last Name</label>
            </div>
            <div class="input-field col s12 m6">
              <input placeholder="Enter Mobile Number" id="mobilenum" name="mobilenum" type="text" class="validate">
              <label for="mobilenum">Mobile</label>
            </div>
            <div class="input-field col s12 m6">
              <input placeholder="Enter Email Address" id="email" name="email" type="email" class="validate">
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea placeholder="Enter your Message" id="message" name="message" class="materialize-textarea"></textarea>
              <label for="message">Message</label>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" onclick="$('#messageForm').submit()">send message</a>
      </div>
    </div>

    <div id="book-seat" class="modal modal-fixed-footer">
      <div class="modal-header center cyan white-text">
        <h5>Book Seat<br/><small>Fill the form below and click reserve.</small></h5>
      </div>
      <div class="modal-content">
        <form id="bookingForm" method="POST" action="booking">
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
          <input type="hidden" name="bookingvesselid" id="bookingvesselid">
          <input type="hidden" name="bookingscheduleid" id="bookingscheduleid">
          <div class="row">
            <div class="input-field col s12 m6">
              <input placeholder="Enter First Name" id="firstname" name="firstname" type="text" class="validate">
              <label for="firstname">First Name</label>
            </div>
            <div class="input-field col s12 m6">
              <input placeholder="Enter Last Name" id="lastname" name="lastname" type="text" class="validate">
              <label for="lastname">Last Name</label>
            </div>
            <div class="input-field col s12 m6">
              <input placeholder="Enter Mobile Number" id="mobilenum" name="mobilenum" type="text" class="validate">
              <label for="mobilenum">Mobile</label>
            </div>
            <div class="input-field col s12 m6">
              <input placeholder="Enter Email Address" id="email" name="email" type="email" class="validate">
              <label for="email">Email</label>
            </div>
            <div class="input-field col s12 m6">
              <select id="islandfrom" name="islandfrom">
                <option value="" disabled selected>Choose an option</option>
                <option value="Aa.Mathiveri">Aa. Mathiveri</option>
                <option value="Aa.Bodufolhudhoo">Aa. Bodufolhudhoo</option>
                <option value="Aa.Ukulhas">Aa. Ukulhas</option>
                <option value="Aa.Rasdhoo">Aa. Rasdhoo</option>
                <option value="K.Male">K. Male'</option>
                <option value="K.Airport">K. Airport</option>
              </select>
              <label class="active">From</label>
            </div>
            <div class="input-field col s12 m6">
              <select id="islandto" name="islandto">
                <option value="" disabled selected>Choose an option</option>
                <option value="Aa.Mathiveri">Aa. Mathiveri</option>
                <option value="Aa.Bodufolhudhoo">Aa. Bodufolhudhoo</option>
                <option value="Aa.Ukulhas">Aa. Ukulhas</option>
                <option value="Aa.Rasdhoo">Aa. Rasdhoo</option>
                <option value="K.Male">K. Male'</option>
                <option value="K.Airport">K. Airport</option>
              </select>
              <label class="active">To</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6">
              <select id="tickettype" name="tickettype">
                <option value="" disabled selected>Choose ticket type</option>
                <option value="1">One Way</option>
                <option value="2">Two Way</option>
              </select>
              <label class="active">Ticket Type</label>
            </div>
            <div class="input-field col s12 m6">
              <input placeholder="Enter Number of Seats" id="noofseats" name="noofseats" type="number" class="validate">
              <label for="noofseats">No of Seats</label>
            </div>
            <div class="input-field col s12">
              <textarea placeholder="Enter a message if required!" id="message" name="message" class="materialize-textarea"></textarea>
              <label for="message">Message</label>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" onclick="$('#bookingForm').submit()">Reserve</a>
      </div>
    </div>

    <div id="private-hire" class="modal modal-fixed-footer">
      <div class="modal-header center green white-text">
        <h5>Private Hire<br/><small>Fill the form below and click request.</small></h5>
      </div>
      <div class="modal-content">
        <form>
          <div class="row">
            <div class="input-field col s12 m6">
              <input placeholder="Enter First Name" id="firstname" type="text" class="validate">
              <label for="firstname">First Name</label>
            </div>
            <div class="input-field col s12 m6">
              <input placeholder="Enter Last Name" id="lastname" type="text" class="validate">
              <label for="lastname">Last Name</label>
            </div>
            <div class="input-field col s12 m6">
              <input placeholder="Enter Mobile Number" id="mobilenum" type="text" class="validate">
              <label for="mobilenum">Mobile</label>
            </div>
            <div class="input-field col s12 m6">
              <input placeholder="Enter Email Address" id="email" type="email" class="validate">
              <label for="email">Email</label>
            </div>
            <div class="input-field col s12 m6">
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
            <div class="input-field col s12 m6">
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
          </div>
          <div class="row">
            <div class="input-field col s12 m6">
              <select>
                <option value="" disabled selected>Choose trip type</option>
                <option value="1">One Way</option>
                <option value="2">Two Way</option>
              </select>
              <label class="active">Trip Type</label>
            </div>
            <div class="input-field col s12 m6">
              <input placeholder="Time of depurture" id="depurturetime" type="text" class="timepicker">
              <label for="depurturetime">Depurture Time</label>
            </div>
            <div class="input-field col s12">
              <textarea placeholder="Enter a message if required!" id="message" name="message" class="materialize-textarea"></textarea>
              <label for="message">Textarea</label>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Request</a>
      </div>
    </div>


    <!-- Core Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{ url('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ url('js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ url('js/materialize.min.js') }}"></script>
    <script src="{{ url('js/color-thief.min.js') }}"></script>
    <script src="{{ url('js/galleryExpand.js') }}"></script>
    <script src="{{ url('js/init.js') }}"></script>
    <script src="{{ url('js/sweetalert.min.js') }}"></script>
    
    @if(session()->has('error_message'))
      <script>swal("{{ session()->get('error_caption') }}", "{{ session()->get('error_message') }}", "{{ session()->get('error_type') }}");</script>
    @endif

    <!-- Javascript Libs -->
    <script src="{{ url('js/select2.full.min.js') }}"></script>

    <!-- Body extra -->
    @yield('body-extra')


    <script type="text/javascript">
      $(document).ready(function(){
        $('.modal').modal();
        $('.datepicker').pickadate({
          weekdaysFull: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
          showWeekdaysFull: undefined,
        });
        $('.datepicker').pickadate('picker').set('select', new Date());
        $('#dateon').pickadate('picker').set('select', new Date());
        $('.timepicker').pickatime({
          default: 'now', // Set default time
          fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
          twelvehour: false, // Use AM/PM or 24-hour format
          donetext: 'OK', // text for done-button
          cleartext: 'Clear', // text for clear-button
          canceltext: 'Cancel', // Text for cancel-button
          autoclose: true, // automatic close timepicker
          ampmclickable: true, // make AM PM clickable
          aftershow: function(){} //Function for after opening timepicker  
        });
        // $('select').material_select();
        $('select').select2();
        $('input.autocomplete').autocomplete({
          data: {
            "AA.Ukulhas": null,
            "AA.Rasdhoo": null,
          },
          limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
          onAutocomplete: function(val) {
            // Callback function when value is autcompleted.
          },
          minLength: 0, // The minimum length of the input for the autocomplete to start. Default: 1.
        });
      });
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5kyE2CtivpQeEKqywp3iAsb2Y9bGJlQM&callback=initMap" async defer></script>

    <script type="text/javascript">
      function loadLocation(id) {
        swal({
          title: "<p class='swal-caption'>Loading<br/><small>Please wait your request is being processed.</small></p>",
          text: '<div class="preloader-wrapper big active"><div class="spinner-layer spinner-green-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>',
          html: true,
          showConfirmButton: false  
        });
        // $('.showSweetAlert > p[style="display: block;"]')('<div class="preloader-wrapper big active"><div class="spinner-layer spinner-green-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>');

        $.ajax("followme?id="+id)
        .done(function(data) {
          if(data == '') {
            $('.showSweetAlert > p[style="display: block;"]')('');
            swal({
              title: "<p class='center swal-warning'><i class='material-icons large'>info</i></p><p class='swal-caption'>Cannot Locate!<br/><small>Sorry but we cannot locate the vessel at this moment.</small></p>", 
              text: "",
              html: true, 
              confirmButtonColor: "#757575",
              // type: "warning"
            });
          } else {
            swal.close();
            var obj = jQuery.parseJSON(data);
            console.log(obj);
            // console.log(obj.devices.id.)
            var locationOfDevice = {lat: Number(obj.devices[id].la), lng: Number(obj.devices[id].lo)};
            var map = new google.maps.Map(document.getElementById('map'), {
              center: locationOfDevice,
              // mapTypeId: 'satellite',
              scrollwheel: false,
              // Apply the map style array to the map.
              // styles: styleArray,
              zoom: 19,
              
            });

            var image = 'img/map.png';
            var marker = new google.maps.Marker({
              position: locationOfDevice,
              map: map,
              icon: image,
              animation: google.maps.Animation.DROP,
              title: 'Vessl Name'
            });
            $('#modal-location').modal('open');
          }
        })
        .fail(function() {
          swal("Error!", "Cannot connet to the server.", "warning");
        });
      }

      function loadContactInfo(id) {
        swal({
          title: "<p class='swal-caption'>Contact Information</p><br/><p><b>Male\' Ticket: </b>+960-9999999</p><p><b>Owner: </b>+960-9999999</p><p><b>Email: </b>info@kunbu.mv</p>",
          text: '',
          html: true,
          showConfirmButton: true,
          confirmButtonColor: "#757575",

        });
      }

      function sendMessage(id) {
        $('#messagevesselid').val(id);
        $('#modal-message').modal('open');
      }

      function addToFavorite(id) {
        swal({
          title: "<p class='center swal-favorite'><i class='material-icons large'>favorite</i></p><p class='swal-caption'>Add to Favotite!<br/><small>Are you sure you want to add this vessel to your favorite list?</small></p>",
          text: '',
          html: true,
          showConfirmButton: true,
          confirmButtonColor: "#757575",

        });
      }
    </script>

    

  </body>
</html>

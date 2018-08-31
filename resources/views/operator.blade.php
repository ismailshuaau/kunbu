@extends('layouts.app')

@section('head-extra')
@endsection

@section('header-type')
    nav-full-header
@endsection

@section('body-class')
    grey darken-3
@endsection

@section('nav-sliders-bg')
      <div class="nav-background">
        <img class="active" src="http://placehold.it/1400x700" alt="cityscape">
      </div>
@endsection

@section('nav-sliders-slide')
@endsection

@section('nav-extra')
@endsection

@section('content')
    <div class="register">
      <div class="container">
        <div class="row">
          <div class="col s12 m10 offset-m1 l8 offset-l2">
            <div class="card" style="padding-bottom: 30px;">
              <div class="card-content">
                <p class="center grey-text text-darken-3"><i class="material-icons large">person_add</i></p>
                <h5 class="center grey-text text-darken-3">Register Operator</h5>
              </div>


              <div class="card-tabs">
                <ul class="tabs tabs-fixed-width" style="overflow: hidden;">
                  <li class="tab"><a class="active" href="#userinfo">Operator Information</a></li>
                  <li id="tab-vesselinfo" class="tab disabled"><a href="#vesselinfo">Vessel Information</a></li>
                  <!-- <li class="tab"><a href="#test6">Test 3</a></li> -->
                </ul>
              </div>
              <div class="card-content grey lighten-4">
                <div id="userinfo">
                  <form id="operator-info">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="input-field">
                      <input placeholder="Enter Full Name" id="fullname" name="fullname" type="text" class="validate">
                      <label for="fullname">Full Name</label>
                    </div>
                    <div class="input-field">
                      <input placeholder="Enter Email" id="email" name="email" type="email" class="validate">
                      <label for="email">Email</label>
                    </div>
                    <div class="input-field">
                      <input placeholder="Enter Mobile Number" id="tel" name="tel" type="tel" class="validate">
                      <label for="tel">Mobile</label>
                    </div>
                    <div class="input-field">
                      <input placeholder="Enter Username" id="username" name="username" type="text" class="validate">
                      <label for="username">Username</label>
                    </div>
                    <div class="input-field">
                      <input placeholder="Enter Password" id="password" name="password" type="password" class="validate">
                      <label for="password">Password</label>
                    </div>
                    <div class="input-field">
                      <input placeholder="Enter Password Again" id="confirmpassword" name="confirmpassword" type="password" class="validate">
                      <label for="confirmpassword">Confirm Password</label>
                    </div>
                    <div class="input-field center">
                      <a class="btn waves-effect waves-light cyan" onclick="validateAndNext();" href="#">Next</a>
                    </div>
                  </form>
                </div>
                <div id="vesselinfo">
                  <form id="vessel-info">
                    <div class="input-field">
                      <select placeholder="Enter Vessel Type" id="vesseltype" name="vesseltype">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">Speed Launch</option>
                        <option value="2">Ferry</option>
                        <option value="3">Dhoani</option>
                      </select>
                      <label for="vesseltype">Vessel Type</label>
                    </div>
                    <div class="input-field">
                      <input placeholder="Enter Vessel Name" id="vesselname" name="vesselname" type="text" class="validate">
                      <label for="vesselname">Vessel Name</label>
                    </div>
                    <div class="input-field">
                      <input placeholder="Enter Registration Number" id="registrationnumber" name="registrationnumber" type="text" class="validate">
                      <label for="registrationnumber">Reg Number</label>
                    </div>
                    <div class="input-field">
                      <input placeholder="Enter Seat Capacity" id="capacity_seats" name="capacity_seats" type="text" class="validate">
                      <label for="tel">No. of Seats</label>
                    </div>
                    <div class="input-field">
                      <input placeholder="Enter Volume" id="capacity_volume" name="capacity_volume" type="text" class="validate">
                      <label for="tel">Volume</label>
                    </div>
                    <div class="input-field">
                      <input placeholder="Enter Weight" id="capacity_weight" name="capacity_weight" type="text" class="validate">
                      <label for="tel">Weight</label>
                    </div>
                    <div class="input-field">
                      <input placeholder="Enter Speed in Km" id="speed" name="speed" type="text" class="validate">
                      <label for="speed">Speed</label>
                    </div>
                    <div class="input-field center">
                      <button class="btn waves-effect waves-light" onclick="Register()" type="button">Register</button>
                    </div>
                  </form>
                </div>
              </div>

              <br/>
              <p class="center"><a href="register">Click here for USER registration.</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('body-extra')
    <script type="text/javascript">
      $(document).ready(function(){
        // $('.modal').modal();
        $('.datepicker').pickadate();
        $('select').material_select();
        $('input.autocomplete').autocomplete({
          data: {
            "AA.Ukulhas": null,
            "AA.Rasdhoo": null,
          },
          limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
          onAutocomplete: function(val) {
            // Callback function when value is autcompleted.
          },
          minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
        });
        Materialize.updateTextFields();
      });

      function validateAndNext() {
        //validate
        $('#tab-vesselinfo').removeClass("disabled");
        $('ul.tabs').tabs('select_tab', 'vesselinfo');
      }

      function Register() {
        var serializedData = $('#operator-info, #vessel-info').serialize();
        console.log(serializedData);
        $.ajax({
            url: 'registeroperator',
            contentType: 'application/json',
            data: serializedData,
            dataType: "json",
            success: function( data, textStatus, jQxhr ){
                console.log(data);
            },
            error: function( jqXhr, textStatus, errorThrown ){
                console.log( errorThrown );
            }
        });
      }
    </script>
@endsection
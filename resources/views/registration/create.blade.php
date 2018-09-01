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
            <div class="card-panel">
              <p class="center grey-text text-darken-3"><i class="material-icons large">person_add</i></p>
              <h5 class="center grey-text text-darken-3">Register</h5>
              <form method="POST" action="/registerUser">
                {{ csrf_field() }}
                <div class="input-field">
                  <input placeholder="Enter Full Name" id="username" name="username" type="text" class="validate">
                  <label for="username">Full Name</label>
                </div>
                <div class="input-field">
                  <input placeholder="Enter Email" id="email" name="email" type="email" class="validate">
                  <label for="email">Email</label>
                </div>
                <div class="input-field">
                  <input placeholder="Enter Mobile Number" id="tel" name="mobile" type="tel" class="validate">
                  <label for="tel">Mobile</label>
                </div>
                <div class="input-field">
                  <input placeholder="Enter Username" id="username" name="name" type="text" class="validate">
                  <label for="username">Username</label>
                </div>
                <div class="input-field">
                  <input placeholder="Enter Password" id="password" name="password" type="password" class="validate">
                  <label for="password">Password</label>
                </div>
                <div class="input-field">
                  <input placeholder="Enter Password Again" id="password" name="password" type="password" class="validate">
                  <label for="password">Confirm Password</label>
                </div>
                <div class="input-field center">
                  <button class="btn waves-effect waves-light">Register</button>
                  <button class="btn waves-effect waves-light blue darken-3"><i class="ion-social-facebook left"></i> Facebook</button>
                </div>
              </form>
              <br/>
              <p class="center"><a href="operator">Click here for OPERATOR registration.</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('body-extra')
  <script type="text/javascript">
    $(document).ready(function() {
      Materialize.updateTextFields();
    });
  </script>
@endsection
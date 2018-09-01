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
        <img class="active" src="{{ url('img/slide5.3.png') }}" alt="cityscape">
      </div>
@endsection

@section('nav-sliders-slide')
@endsection

@section('nav-extra')
@endsection

@section('content')
    <div class="login">
      <div class="container">
        <div class="row">
          <div class="col s12 m10 offset-m1 l8 offset-l2">
            <div class="card-panel">
              <p class="center grey-text text-darken-3"><i class="material-icons large">fingerprint</i></p>
              <h5 class="center grey-text text-darken-3">Login</h5>
              <form method="POST" action="login">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="input-field">
                  <input placeholder="Enter Email" id="email" name="email" type="email" class="validate">
                  <label for="email">Email</label>
                </div>
                <div class="input-field">
                  <input placeholder="Enter Password" id="password" name="password" type="password" class="validate">
                  <label for="password">Password</label>
                </div>
                <div class="input-field center">
                  <button class="btn waves-effect waves-light" type="submit">Login</button>
                  <button class="btn waves-effect waves-light blue darken-3"><i class="ion-social-facebook left"></i> Facebook</button>
                </div>
              </form>
              <br/>
              <p class="center"><a href="{{url ('login') }}">Click here for USER login.</a></p>
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
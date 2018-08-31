@extends('layouts.app')

@section('head-extra')
@endsection

@section('header-type')
    nav-full-header
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
    <div class="login">
      <div class="container">
        <div class="row">
          <div class="col s12 m6 offset-m3">
            <div class="card-panel">
              <p class="center grey-text text-darken-3"><i class="material-icons large">fingerprint</i></p>
              <h5 class="center grey-text text-darken-3">Login</h5>
              <form>
                <div class="input-field">
                  <input placeholder="Enter Username" id="username" name="username" type="text" class="validate">
                  <label for="username">Username</label>
                </div>
                <div class="input-field">
                  <input placeholder="Enter Password" id="password" name="password" type="password" class="validate">
                  <label for="password">Password</label>
                </div>
                <div class="input-field center">
                  <button class="btn waves-effect waves-light">Login</button>
                  <button class="btn waves-effect waves-light blue darken-3"><i class="ion-social-facebook left"></i> Facebook</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('body-extra')
@endsection
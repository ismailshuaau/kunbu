<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Directory listing application">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <title>Dashboard - Operator</title>

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-title" content="Pixus CMS">
  <link rel="icon" sizes="192x192" href="img/android-icon-192x192.png">
  <link rel="icon" sizes="128x128" href="img/android-icon-128x128.png"/>

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="grey">
  <meta name="apple-mobile-web-app-title" content="Pixus CMS">
  <link rel="apple-touch-icon-precomposed" href="img/ios-icon-180x180.png">
  <link rel="apple-touch-icon" href="img/ios-icon-180x180.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/ios-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/ios-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/ios-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/ios-icon-180x180.png"/>
  <link rel="apple-touch-startup-image" href="img/ios-startup.png">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-config" content="browserconfig.xml"/>
  <meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
  <meta name="msapplication-TileColor" content="#f5f5f5">

  <link rel="shortcut icon" href="img/icon.png">

  <!--Import Google Icon Font-->
  <!-- <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
  <link type="text/css" rel="stylesheet" href="{{ url('op-assets/assets/materialicon/material-icons.css') }}"  media="all"/>

  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="{{ url('op-assets/sass/materialize.css') }}"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="{{ url('op-assets/sass/pixuscloud.css') }}"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="{{ url('op-assets/css/ionicons.css') }}"  media="all"/>

  <link type="text/css" rel="stylesheet" href="{{ url('op-assets/css/sweetalert/sweetalert.css') }}"  media="screen,projection"/>


</head>

<body class="grey lighten-4">

  <nav class="z-depth-3">
    <div class="nav-wrapper">
      <div class="side-nav-margin-left-on-large margin-left-10-m">
        <a href="index.php" class="brand-logo">Kunbu.mv</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
      <ul class="right hide-on-med-and-down">
        <li><a href="#!" onclick="toggleFullScreen();" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Fullscreen"><i class="material-icons">aspect_ratio</i></a></li>
        <li><a href="#!" onclick="location.reload();" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Reload"><i class="material-icons">refresh</i></a></li>
        <li><a href="settings" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Settings"><i class="material-icons">person</i></a></li>
        <li><a href="logout" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Logout"><i class="material-icons">lock</i></a></li>
      </ul>
      <ul class="side-nav fixed" id="mobile-demo">
        <li class="z-depth-1">
          <div class="userView">
            <div class="background grey darken-3">
            </div>
            <a href="#!name"><span class="white-text name">{{ Auth::user()->name }}</span></a>
            <a href="#!email"><span class="white-text email">{{ Auth::user()->email }}</span></a>
          </div>
        </li>
        <li class="active"><a href="dashboard"><i class="material-icons">dashboard</i>Dashboard</a></li>
        <li><div class="divider"></div></li>
        {{-- <li><a href="vessels"><i class="material-icons">directions_boat</i>Vessels</a></li> --}}
        {{-- <li><a href="schedule"><i class="material-icons">event</i>Schedule</a></li> --}}
        <li><a href="tickets"><i class="material-icons">event_seat</i>Tickets</a></li>
        {{-- <li><a href="hire"><i class="material-icons">star</i>Hire</a></li> --}}
        {{-- <li><a href="messages"><i class="material-icons">message</i>Messages</a></li> --}}
        <li><div class="divider"></div></li>
        {{-- <li><a href="users"><i class="material-icons">people</i>Users</a></li> --}}
        <li><a href="settings"><i class="material-icons">settings</i>Settings</a></li>
        <li><a href="logout"><i class="material-icons">lock</i>Logout</a></li>i>
        
      </ul>
    </div>
  </nav>

  <nav class="grey darken-2 nav-breadcrumb">
    <div class="nav-wrapper side-nav-margin-left-on-large margin-left-10-m">
      <div class="col s12">
        <a href="index.php" class="breadcrumb">Kunbu</a>
        <a href="#!" class="breadcrumb">Dashboard</a>
      </div>
    </div>
  </nav>

  <main class="side-nav-margin-left-on-large">

    <div class="row margin-left-m10-lg">
      <div class="user-info-container ">
        <img src="{{ url('op-assets/img/user-bg.jpg') }}">
        <div class="col s12">
          <div class="card-panel card-user">
            <img src="{{ url('op-assets/img/user_default.png') }}" class="user-image">
            <h5 class="name">{{ Auth::user()->name }}</h5>
            <p class="designation">{{ Auth::user()->email }}</p>
          </div>
        </div>
      </div>
    </div>
    
  </main>

  <!--Import jQuery before materialize.js-->
  <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
  <script type="text/javascript" src="{{ url('op-assets/js/jquery-2.1.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('op-assets/js/bin/materialize.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('op-assets/js/init.js') }}"></script>

  <script type="text/javascript">
    $( document ).ready(function(){
      $(".button-collapse").sideNav();
      $('.modal').modal();
      Materialize.updateTextFields();
      $('.dropdown-button').dropdown({
        inDuration: 300,
        outDuration: 225,
        constrain_width: true, // Does not change width of dropdown to that of the activator
        hover: true, // Activate on hover
        gutter: 0, // Spacing from edge
        beloworigin: true, // Displays dropdown below the button
        alignment: 'left' // Displays dropdown with edge aligned to the left of button
      });
    });
  </script>

  <script type="text/javascript" src="{{ url('op-assets/js/chartsjs/Chart.min.js') }}"></script>

  <script type="text/javascript" src="{{ url('op-assets/js/sweetalert/sweetalert.min.js') }}"></script>

  @if(session()->has('error_message'))
    <script>swal("{{ session()->get('error_caption') }}", "{{ session()->get('error_message') }}", "{{ session()->get('error_type') }}");</script>
  @endif

</body>

</html>
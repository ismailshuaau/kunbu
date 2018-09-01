<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Directory listing application">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <title>Tickets - Operator</title>

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

  <link type="text/css" rel="stylesheet" href="{{ url('op-assets/css/datatable/jquery.dataTables.css') }}"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="{{ url('op-assets/css/datatable/dataTables.material.css') }}"  media="screen,projection"/>


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
        <li><a href="dashboard"><i class="material-icons">dashboard</i>Dashboard</a></li>
        <li><div class="divider"></div></li>
        <li class="active"><a href="tickets"><i class="material-icons">event_seat</i>Tickets</a></li>
        <li><div class="divider"></div></li>
        <li><a href="logout"><i class="material-icons">lock</i>Logout</a></li>i>
        
      </ul>
    </div>
  </nav>

  <nav class="grey darken-2 nav-breadcrumb">
    <div class="nav-wrapper side-nav-margin-left-on-large margin-left-10-m">
      <div class="col s12">
        <a href="index.php" class="breadcrumb">Kunbu</a>
        <a href="#!" class="breadcrumb">Tickets</a>
      </div>
    </div>
  </nav>

  <main class="side-nav-margin-left-on-large">

    <div class="row margin-left-m10-lg">

      <div class="col s12">
        <div class="card-panel">
          <table class="highlight responsive-table">
            <thead>
              <tr>
                  <th data-field="id">Id</th>
                  <th data-field="name">Name</th>
                  <th data-field="from">From</th>
                  <th data-field="to">To</th>
                  <th data-field="noofseats">No. of Seats</th>
                  <th data-field="email">Email</th>
                  <th data-field="mobile">Mobile</th>
                  <th data-field="status">Status</th>
                  <th data-field="actions">Actions</th>
            </thead>

            <tbody>
              @foreach ($tickets as $schedule)
                <tr>
                  <td>{{ $schedule->id }}</td>
                  <td>{{ $schedule->first_name }} {{ $schedule->last_name }}</td>
                  <td>{{ $schedule->island_from }}</td>
                  <td>{{ $schedule->island_to }}</td>
                  <td>{{ $schedule->no_of_seats }}</td>
                  <td>{{ $schedule->email }}</td>
                  <td>{{ $schedule->mobile }}</td>
                  @if($schedule->isPaid == true)
                    <td>Confirmed and Paid</td>
                  @elseif($schedule->status == true)
                    <td>Confirmed</td>
                  @else
                    <td>Pending Confirmation</td>
                  @endif
                  <td>
                    @if($schedule->status == false)
                    <button class="btn-floating waves-effect waves-light cyan darken-2 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Approve Ticket" onclick="approveTicket({{ $schedule->id }})"><i class="material-icons">check</i></button>
                    @endif
                    @if(($schedule->status == true) && ($schedule->isPaid == false))
                    <a class="btn-floating btn-small waves-effect waves-light green darken-2 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Mark as Paid" onclick="markPaid({{ $schedule->id }})"><i class="material-icons">credit_card</i></a>
                    @endif
                    @if($schedule->status == false)
                    <a class="btn-floating btn-small waves-effect waves-light deep-orange darken-2 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Delete Ticket" onclick="deleteEntity({{ $schedule->id }})"><i class="material-icons">delete</i></a>
                    @endif
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

    </div>
    
  </main>

  <!-- Modal Create New -->
  <div id="createNewVessel" class="modal modal-fixed-footer">
    <div class="modal-content">
      <div class="row">
        <div class="col s12"><p>Create a new schedule.</br><small>Fill below form to create a new vessel. All the fields are required.</small></p></div>
      </div>

      <form id="newScheduleForm" name="newScheduleForm" method="post" action="schedule/create" class="">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div class="row">
          <div class="input-field col s12">
            <input placeholder="Enter Schedule Name" id="schedulename" name="schedulename" type="text" class="validate">
            <label for="schedulename">Schedule Name</label>
          </div>
          <div class="input-field col s12 m6">
            <input placeholder="Enter Start Time" id="starttime" name="starttime" type="text" class="validate">
            <label for="starttime">Starts At</label>
          </div>
          <div class="input-field col s12 m6">
            <input placeholder="Enter Seating Price" id="price" name="price" type="text" class="validate">
            <label for="price">Price</label>
          </div>
        </div>
      </form>
    </div>
    <div class="modal-footer">
      <button href="#!" class="modal-action waves-effect waves-green btn-flat" onclick="$('#newScheduleForm').submit()">Create<i class="material-icons right">add</i></button>
    </div>
  </div>

  <!-- Modal Create Slider Slide -->
  <div id="modalCreateSlide" class="modal modal-fixed-footer">
    <div class="modal-content">
      <div class="row">
        <div class="col s12">
          <h5>New Route</h5>
          <p><small>Complete the below form to create a new route item.</small></p>
        </div>
      </div>
      <form id="formCreateSlide" method="post" action="schedule/createroute" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="hidden" name="routescheduleid" id="routescheduleid">
        <div class="row">
          <div class="input-field col s12">
            <input placeholder="Enter jetty info" id="jetty" name="jetty" type="text" class="validate">
            <label for="jetty">Jetty</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input placeholder="Enter depurture Time 11:30 AM" id="depurturetime" name="depurturetime" type="text" class="validate">
            <label for="depurturetime">Depurture Time</label>
          </div>
        </div>
      </form>
    </div>
    <div class="modal-footer">
      <a onclick="$('#formCreateSlide').submit()" class=" modal-action modal-close waves-effect waves-green btn-flat">Create</a>
    </div>
  </div>

  <div id="modalRoutesList" class="modal modal-fixed-footer">
    <div class="modal-content">
      <div class="row">
        <div class="col s12">
          <h5>Routes</h5>
          <p><small>Delete routes and create new routes..</small></p>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          <table id="tableSlideList">
            <thead>
              <tr>
                  <th>Id</th>
                  <th>Island</th>
                  <th>Jetty</th>
                  <th>Depurture Time</th>
                  <th>Action</th>
              </tr>
            </thead>

            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <a onclick="" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>

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

  <script type="text/javascript" src="{{ url('op-assets/js/datatable/jquery.dataTables.js') }}"></script>
  <script type="text/javascript" src="{{ url('op-assets/js/datatable/dataTables.material.js') }}"></script>
  <script type="text/javascript">
    $( document ).ready(function(){
      $('table').DataTable();
      $('select').material_select();
    });
  </script>

  <!-- Approval and Cancellation -->
  <script type="text/javascript">

    function loadRoutes(id) {
      $.ajax( "schedule/getroutes?id="+id)
      .done(function(data) {
        var obj = jQuery.parseJSON(data);
        console.log(obj);
        var finalTableData = '';
        $.each(obj, function( index, value ){
          console.log(value);
          finalTableData = finalTableData + '<tr><td>'+value.id+'</td><td>'+value.island+'</td><td>'+value.jetty+'</td><td>'+value.depurture_time+'</td><td><a class="btn-floating btn-small waves-effect waves-light deep-orange darken-2 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Delete Route" onclick="deleteRoute('+value.id+')"><i class="material-icons">delete</i></a></td></tr>';
        });
        $('#tableSlideList > tbody').html(finalTableData);
        console.log(finalTableData);
        $('#modalRoutesList').modal('open');

      })
      .fail(function() {
        swal("Failed", "Failed to process", "error");
      });

    }

    function newRoute(id) {
      $('#routescheduleid').val(id);
      $('#modalCreateSlide').modal('open');
    }

    function approveTicket(id) {
      swal({
        title: 'Approve!',
        text: 'Are you sure you want to approve this ticket.?',
        type: "info",
        showCancelButton: true,
        confirmButtonColor: "#0cbccd",
        confirmButtonText: "Approve",
        cancelButtonText: "Cancel",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm){
        if (isConfirm) {

          $.get( "tickets/approve?id="+id )
          .done(function() {
            swal("Changed!", "Approved successfully. Refresh page to see changes.", "success");
          })
          .fail(function() {
            swal("Failed", "Failed to process", "error");
          });
          
        } else {
          swal("Cancelled", "No changes made.", "error");
        }
      });
    }

    function markPaid(id) {
      swal({
        title: 'Mark Paid!',
        text: 'Are you sure you want to mark this ticket as paid.?',
        type: "info",
        showCancelButton: true,
        confirmButtonColor: "#0cbccd",
        confirmButtonText: "Paid",
        cancelButtonText: "Cancel",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm){
        if (isConfirm) {

          $.get( "tickets/paid?id="+id )
          .done(function() {
            swal("Changed!", "Completed successfully. Refresh page to see changes.", "success");
          })
          .fail(function() {
            swal("Failed", "Failed to process", "error");
          });
          
        } else {
          swal("Cancelled", "No changes made.", "error");
        }
      });
    }

    function deleteEntity(id) {
      //$('#deleteUser').modal('open');
      swal({
        title: "Are you sure?",
        text: "You will not be able to recover this data. Schedule will be deleted.",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete!",
        cancelButtonText: "No, cancel!",
        closeOnConfirm: true,
        closeOnCancel: true
      },
      function(isConfirm){
        if (isConfirm) {
          window.location.assign("schedule/delete?id="+id);
        }
      });
    }

    function toggleStatus(id, state) {
      var statetitle;
      var statetext;
        statetitle = 'Toggle!';
        statetext = 'Toggle status, Only admin will be able to view unpublished data. Public will see published data.';

      swal({
        title: statetitle,
        text: statetext,
        type: "info",
        showCancelButton: true,
        confirmButtonColor: "#00acc1",
        confirmButtonText: "Yes!",
        cancelButtonText: "No!",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm){
        if (isConfirm) {

          $.ajax( "vessels/toggle?id="+id+"&c="+state )
          .done(function() {
            swal("Changed!", "Status changed successfully.", "success");
          })
          .fail(function() {
            swal("Failed", "Failed to process", "error");
          });
          
        } else {
          swal("Cancelled", "No changes made.", "error");
        }
      });
    }

  </script>

</body>

</html>
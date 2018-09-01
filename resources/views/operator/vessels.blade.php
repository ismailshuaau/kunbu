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
            <a href="#!name"><span class="white-text name">{{ session('user')->name }}</span></a>
            <a href="#!email"><span class="white-text email">{{ session('user')->email }}</span></a>
          </div>
        </li>
        <li><a href="dashboard"><i class="material-icons">dashboard</i>Dashboard</a></li>
        <li><div class="divider"></div></li>
        <li class="active"><a href="vessels"><i class="material-icons">directions_boat</i>Vessels</a></li>
        <li><a href="schedule"><i class="material-icons">event</i>Schedule</a></li>
        <li><a href="tickets"><i class="material-icons">event_seat</i>Tickets</a></li>
        <li><a href="hire"><i class="material-icons">star</i>Hire</a></li>
        <li><a href="messages"><i class="material-icons">message</i>Messages</a></li>
        <li><div class="divider"></div></li>
        <li><a href="users"><i class="material-icons">people</i>Users</a></li>
        <li><a href="settings"><i class="material-icons">settings</i>Settings</a></li>
        <li><a href="logout"><i class="material-icons">lock</i>Logout</a></li>i>
        
      </ul>
    </div>
  </nav>

  <nav class="grey darken-2 nav-breadcrumb">
    <div class="nav-wrapper side-nav-margin-left-on-large margin-left-10-m">
      <div class="col s12">
        <a href="index.php" class="breadcrumb">Kunbu</a>
        <a href="#!" class="breadcrumb">Vessels</a>
      </div>
    </div>
  </nav>

  <div class="fixed-action-btn">
    <a class="btn-floating btn-large cyan darken-3 hoverable tooltipped modal-trigger" data-position="left" data-delay="50" data-tooltip="New Vessel" href="#createNewVessel">
      <i class="large material-icons">add</i>
    </a>
  </div>

  <main class="side-nav-margin-left-on-large">

    <div class="row margin-left-m10-lg">

      <div class="col s12">
        <div class="card-panel">
          <table class="highlight responsive-table">
            <thead>
              <tr>
                  <th data-field="id">Id</th>
                  <th data-field="name">Image</th>
                  <th data-field="name">Name</th>
                  <th data-field="desc">Description</th>
                  <th data-field="reg">Reg Num</th>
                  <th data-field="seats">No. Seats</th>
                  <th data-field="weight">No. Weight</th>
                  <th data-field="volume">No. Volume</th>
                  <th data-field="speed">Speed</th>
                  <th data-field="status">Status</th>
                  <th data-field="actions">Actions</th>
            </thead>

            <tbody>
              @foreach ($vessels as $download)
                <tr>
                  <td>{{ $download->id }}</td>
                  <td><img src="{{ url($download->image_path) }}" style="width: 100px;"></td>
                  <td>{{ $download->name }}</td>
                  <td>{{ $download->description }}</td>
                  <td>{{ $download->reg_number }}</td>
                  <td>{{ $download->capacity_seat }}</td>
                  <td>{{ $download->capacity_weight }}</td>
                  <td>{{ $download->capacity_volume }}</td>
                  <td>{{ $download->speed }}</td>
                  @if($download->status == true)
                    <td>Published</td>
                  @else
                    <td>Unpublished</td>
                  @endif
                  <td>
                    <button class="btn-floating waves-effect waves-light cyan darken-2 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Edit Vessel" onclick="updateEntity({{ $download->id }})"><i class="material-icons">create</i></button>
                    <button class="btn-floating waves-effect waves-light green darken-2 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Update Image" onclick="updateImage({{ $download->id }})"><i class="material-icons">add_a_photo</i></button>
                      <a class="btn-floating btn-small waves-effect waves-light deep-orange darken-2 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Delete Vessel" onclick="deleteEntity({{ $download->id }})"><i class="material-icons">delete</i></a>
                      <a class="btn-floating btn-small waves-effect waves-light lime darken-2 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Toggle Status" onclick="toggleStatus({{ $download->id }},{{ $download->status }})"><i class="material-icons">visibility</i></a></td>
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
        <div class="col s12"><p>Create a new vessel.</br><small>Fill below form to create a new vessel. All the fields are required.</small></p></div>
      </div>

      <form id="newVesselForm" name="newVesselForm" method="post" action="vessels/create" class="">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div class="row">
          <div class="input-field col s12 m6">
            <select placeholder="Enter Vessel Type" id="vesseltype" name="vesseltype">
              <option value="" disabled selected>Choose your option</option>
              @foreach($types as $type)
              <option value="{{ $type->id }}">{{ $type->name }}</option>
              @endforeach
            </select>
            <label for="vesseltype">Vessel Type</label>
          </div>
          <div class="input-field col s12 m6">
            <input placeholder="Enter Tracking Id" id="trackingid" name="trackingid" type="text" class="validate">
            <label for="trackingid">Tracking Id</label>
          </div>
          <div class="input-field col s12">
            <input placeholder="Enter Vessel Name" id="vesselname" name="vesselname" type="text" class="validate">
            <label for="vesselname">Vessel Name</label>
          </div>
          <div class="input-field col s12 m6">
            <input placeholder="Enter Registration Number" id="registrationnumber" name="registrationnumber" type="text" class="validate">
            <label for="registrationnumber">Reg Number</label>
          </div>
          <div class="input-field col s12 m6">
            <input placeholder="Enter Seat Capacity" id="capacity_seats" name="capacity_seats" type="text" class="validate">
            <label for="tel">No. of Seats</label>
          </div>
          <div class="input-field col s12 m4">
            <input placeholder="Enter Volume" id="capacity_volume" name="capacity_volume" type="text" class="validate">
            <label for="tel">Volume</label>
          </div>
          <div class="input-field col s12 m4">
            <input placeholder="Enter Weight" id="capacity_weight" name="capacity_weight" type="text" class="validate">
            <label for="tel">Weight</label>
          </div>
          <div class="input-field col s12 m4">
            <input placeholder="Enter Speed in Km" id="speed" name="speed" type="text" class="validate">
            <label for="speed">Speed</label>
          </div>
          <div class="input-field col s12">
            <textarea placeholder="Enter Description" id="description" name="description" class="materialize-textarea"></textarea>
            <label for="description">Description</label>
          </div>

        </div>
      </form>
    </div>
    <div class="modal-footer">
      <button href="#!" class="modal-action waves-effect waves-green btn-flat" onclick="$('#newVesselForm').submit()">Create<i class="material-icons right">add</i></button>
    </div>
  </div>

  <!-- Modal Update User -->
  <div id="updateUser" class="modal modal-fixed-footer">
    <div class="modal-content">
      <div class="row">
        <div class="col s12"><p>Update user.</br><small>Change below form to update the user. All the fields are required.</small></p></div>
      </div>

      <form id="formUpdate" name="formUpdate" method="post" action="vessels/update" class="">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input id="vesselid" name="vesselid" type="hidden" value="">
        <div class="row">
          <div class="input-field col s12 m6">
            <select placeholder="Enter Vessel Type" id="vesseltype" name="vesseltype">
              <option value="" disabled selected>Choose your option</option>
              @foreach($types as $type)
              <option value="{{ $type->id }}">{{ $type->name }}</option>
              @endforeach
            </select>
            <label for="vesseltype">Vessel Type</label>
          </div>
          <div class="input-field col s12 m6">
            <input placeholder="Enter Tracking Id" id="trackingid" name="trackingid" type="text" class="validate">
            <label for="trackingid">Tracking Id</label>
          </div>
          <div class="input-field col s12">
            <input placeholder="Enter Vessel Name" id="vesselname" name="vesselname" type="text" class="validate">
            <label for="vesselname">Vessel Name</label>
          </div>
          <div class="input-field col s12 m6">
            <input placeholder="Enter Registration Number" id="registrationnumber" name="registrationnumber" type="text" class="validate">
            <label for="registrationnumber">Reg Number</label>
          </div>
          <div class="input-field col s12 m6">
            <input placeholder="Enter Seat Capacity" id="capacity_seats" name="capacity_seats" type="text" class="validate">
            <label for="tel">No. of Seats</label>
          </div>
          <div class="input-field col s12 m4">
            <input placeholder="Enter Volume" id="capacity_volume" name="capacity_volume" type="text" class="validate">
            <label for="tel">Volume</label>
          </div>
          <div class="input-field col s12 m4">
            <input placeholder="Enter Weight" id="capacity_weight" name="capacity_weight" type="text" class="validate">
            <label for="tel">Weight</label>
          </div>
          <div class="input-field col s12 m4">
            <input placeholder="Enter Speed in Km" id="speed" name="speed" type="text" class="validate">
            <label for="speed">Speed</label>
          </div>
          <div class="input-field col s12">
            <textarea placeholder="Enter Description" id="description" name="description" class="materialize-textarea"></textarea>
            <label for="description">Description</label>
          </div>

        </div>
      </form>
    </div>
    <div class="modal-footer">
      <button href="#!" class="modal-action waves-effect waves-green btn-flat" onclick="$('#formUpdate').submit()">Update<i class="material-icons right">edit</i></button>
    </div>
  </div>

  <div id="modalUpdateImage" class="modal">
    <div class="modal-content">
      <h5>Update Vessel Images</h5>
      <p><small>Update vessel primary image, <br>Note: the best resolution for primary image is 480x320px</small></p>
      <form id="formUpdateImage" method="post" action="vessels/updateimage" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="hidden" name="imagevesselid" id="imagevesselid">
        <div class="row">
          <div class="file-field input-field">
            <div class="btn">
              <span>Image File</span>
              <input type="file" id="file" name="file">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="modal-footer">
      <a onclick="#" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
      <a onclick="$('#formUpdateImage').submit()" class=" modal-action modal-close waves-effect waves-green btn-flat">Change</a>
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

    function updateEntity(id) {
      $.ajax( "vessels/get?&id="+id)
      .done(function(data) {
        var obj = jQuery.parseJSON(data);
        console.log(obj);
        $('#formUpdate').find('#vesselid').val(obj.id);
        $('#formUpdate').find('#vesselname').val(obj.name);
        $('#formUpdate').find('#trackingid').val(obj.tracking_id);
        $('#formUpdate').find('#registrationnumber').val(obj.reg_number);
        $('#formUpdate').find('#capacity_seats').val(obj.capacity_seat);
        $('#formUpdate').find('#capacity_weight').val(obj.capacity_weight);
        $('#formUpdate').find('#capacity_volume').val(obj.capacity_volume);
        $('#formUpdate').find('#speed').val(obj.speed);
        $('#formUpdate').find('#description').val(obj.description);
        Materialize.updateTextFields();
        $('#updateUser').modal('open');
      })
      .fail(function() {
        swal("Failed", "Failed to process", "error");
      });
    }

    function updateImage(id) {
      $('#imagevesselid').val(id);
      $('#modalUpdateImage').modal('open');
    }

    function deleteEntity(id) {
      //$('#deleteUser').modal('open');
      swal({
        title: "Are you sure?",
        text: "You will not be able to recover this data. Vessel will be deleted.",
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
          window.location.assign("vessels/delete?id="+id);
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
<!--
=========================================================
 Material Dashboard - v2.1.1
=========================================================

 Product Page: https://www.creative-tim.com/product/material-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/material-dashboard/blob/master/LICENSE.md)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<!doctype html>
<html lang="en">

<head>
  <title>{{ $active_mn }}</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <meta name="csrf-token" content="{{ csrf_token() }}"> 
  <!-- <script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script> -->
  
  <link href="{{ asset('dropzone/dropzone.min.css') }}" rel="stylesheet">
  <script type="text/javascript" src="{{ asset('dropzone/dropzone.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>

  <!-- Text Editor Trial -->
<link href="https://cdn.jsdelivr.net/npm/froala-editor@3.0.6/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@3.0.6/js/froala_editor.pkgd.min.js"></script>
  <!-- END ! -->
<style type="text/css">
.loader {
    border: 16px solid #f3f3f3; /* Light grey */
    border-top: 16px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 120px;
    height: 120px;
    animation: spin 2s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          {{ $active_mn }}
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  {{ $active_mn === 'home' ? 'active':'' }}   ">
            <a class="nav-link" href="/home">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item  {{ $active_mn === 'verify' ? 'active' : '' }}  ">
            <a class="nav-link" href="/verify-page">
              <i class="material-icons">verified_user</i>
              <p>Pendaftar</p>
            </a>
          </li>
          <!-- <li class="nav-item active  ">
            <a class="nav-link" href="#0">
              <i class="material-icons">folder_open</i>
              <p>Document</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="#0">
              <i class="material-icons">autorenew</i>
              <p>Waiting Grade</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="#0">
              <i class="material-icons">notifications_active</i>
              <p>Completed</p>
            </a>
          </li> -->
          <li class="nav-item  {{ $active_mn === 'exam' ? 'active':'' }} ">
            <a class="nav-link" href="/exam-dashboard">
              <i class="material-icons">assignment</i>
              <p>Create Exam</p>
            </a>
          </li>

          <li class="nav-item {{ $active_mn === 'frontend' ? 'active':'' }}  ">
            <a class="nav-link" href="/frontend">
              <i class="material-icons">brush</i>
              <p>Frontend</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">notifications</i> Notifications
                </a>
              </li>
              
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      @yield('content')

      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

    <script type="text/javascript" src="{{ asset('material-dashboard/js/core/bootstrap-material-design.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('material-dashboard/js/core/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('material-dashboard/js/core/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('material-dashboard/js/plugins/bootstrap-notify.js') }}"></script>
    <script type="text/javascript" src="{{ asset('material-dashboard/js/plugins/chartist.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('material-dashboard/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('material-dashboard/js/material-dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('material-dashboard/js/material-dashboard.js.map') }}"></script>
    <script type="text/javascript" src="{{ asset('material-dashboard/js/material-dashboard.min.js') }}"></script>

    <script type="text/javascript">
      
      $("#btn-del").click(function(){
        $(".modal-body  input[name=id]").val($( this ).val());
        console.log($( this ).val());
      });


    </script>



    <!-- Modal -->
<div class="modal fade" id="remarkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Alasan untuk menghapus data?

        <div class="form-group">
          <label for="id">ID number</label>
          <input type="text" class="form-control" name="id" disabled="true">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">remark</label>
          <!-- <input type="text" class="form-control" name="id"> -->
          <textarea class="form-control" id="remark" rows="3"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <span class="btn btn-primary" id="delete-ok" data-dismiss="modal" onclick ="del()">Delete</span>
      </div>
    </div>
  </div>
</div>


<div class="modal fade bd-example-modal-lg" id="lookUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <span class="btn btn-primary" id="delete-ok" data-dismiss="modal" onclick ="del()">Delete</span> -->
      </div>
    </div>
  </div>
</div>

  <script type="text/javascript">
function get_data_content(){
  $.ajax({
    method:"get",
    url:"/get-tbody-content"}
    ).done(function( result ){
      $("#tbody-content").html(result);
  });
}

function del_content(_id){
  $.ajax({
    method:"get",
    url:"/del_content/"+_id
  }).done(function( result ){
    if (result ==='done') {
      get_data_content();
    }
  });
}



      get_data_content();
    $( document ).ready(function(){

      $("#form-content").hide();
      $("#add").click(function(){
        $("#content-list").hide();
        $("#form-content").show();
        $(this).hide();
      });
      $("#close-content").click(function(){
        get_data_content();
        $("#form-content").hide();
        $("#add").show();
        $("#content-list").show();
      });
    });

    function del(){
       let _nik    =$("input[name=id]").val();
        let _remark =$("#remark").val() 
            $.ajax({
              method: "post",
              url: "/do_delete",
              data: {nik: _nik, remark:_remark}
            })
            .done(function( result ) {
              // $("#result .card-body").html(result);
              // let res = JSON.stringify( result );
              // alert(result);
               $.notify({
                    icon: "add_alert",
                    message: "Delete data success"

                },{
                    type: 'success',
                    timer: 4000,
                    placement: {
                        from: "top",
                        align: "center"
                    }
                });
            });
    }

    $(".btn-lookup").click(function(){
      let _nik    =$(this).val();
        
            $.ajax({
              method: "post",
              url: "/get-calon",
              data: {nik: _nik}
            })
            .done(function( result ) {
              $("#lookUp .modal-body").html(result);
              // let res = JSON.stringify( result );
              // alert(result);
               // $.notify({
               //      icon: "add_alert",
               //      message: "Delete data success"

               //  },{
               //      type: 'success',
               //      timer: 4000,
               //      placement: {
               //          from: "top",
               //          align: "center"
               //      }
               //  });
            });
    });
// Generate


    $("#generate").click(function(){
      let kelas_id = $("select[name=kelas_id]").val();
      
      $.ajax(
      {
        method : "POST",
        url: "/generate",
        data : {
          kelas_id : kelas_id
          
        }
      }
        ).done(function( result ){
          if (result.message){
              location.reload();
          }
      });
    });
// end Generate


    $('#update-address').click(function(){
      let address = $("#inputAddress").val();
      let address2 = $("#inputAddress2").val();
      let city = $("#inputCity").val();
      let state = $("#inputState").val();
      let zip = $("#inputZip").val();
      let kontak = $("#inputKontak").val();
      let logo = $("#inputLogo").val();

      $.ajax(
      {
        method : "POST",
        url: "/update-address",
        data : {
          address:address,
          address2:address2,
          city:city,
          state:state,
          zip:zip,
          kontak : kontak,
          logo: logo
        }
      }
        ).done(function( result ){
        console.log(result);
      });
    });

    $("#update-kontak").click(function(){
      let kontakName = $("#iKontakname").val();
      let kontakNumber = $("#iKontaknumber").val();
      $.ajax(
      {
        method : "POST",
        url: "/update-kontak",
        data : {
          kontakName : kontakName,
          kontakNumber : kontakNumber
        }
      }
        ).done(function( result ){
          location.reload();
      });
    });
// save
    $("#save-content").click(function(){
      let title = $("#inputTitle").val();
      let content_val = $("#inputContent").val();
      let highlight =$("#inputHighlight").val();
      let dataParse = {
        title: title,
        content_val : content_val,
        highlight : highlight
      };

      $.ajax({
        method : "POST",
        url: "/create-content",
        data : dataParse
      }).done(function( result ){
        let dt_table = JSON.parse(result);
        let strdata= "";
        for(let i=0; i < dt_table.length; i++){
          strdata +='';
        }
        console.log(dt_table.length);
      });
    });

    // edit 

    $("#edit-content").click(function(){
      let title = $("#inputTitle").val();
      let content_val = $("#inputContent").val();
      let highlight =$("#inputHighlight").val();
      let id_content = $("#id_content").val();
      let dataParse = {
        title: title,
        id_content: id_content,
        content_val : content_val,
        highlight : highlight
      };
      console.log(dataParse);
      $.ajax({
        method : "POST",
        url: "/update-content",
        data : dataParse
      }).done(function( result ){
        let dt_table = JSON.parse(result);
        let strdata= "";
        for(let i=0; i < dt_table.length; i++){
          strdata +='';
        }
        console.log(dt_table.length);
      });
    });
  </script>
  <script type="text/javascript">
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });


      var editor = new FroalaEditor('textarea',{
        heightMin:320
      });


function edit_content(_id){
  $.ajax({
    method:"get",
    url:"/edit_content/"+_id
  }).done(function( result ){
    
      // get_data_content();
      var form_data = JSON.parse( result );
      $("#inputTitle").val(form_data.xs1);
      $("#inputContent").val(form_data.xs2);

      
      $(function(){
        editor[3].html.set(form_data.xs2);
        $("#inputContent").froalaEditor('html.set', '<p>My custom paragraph.</p>');
      });
      
      if (form_data.xn1 === 1) {
        $("#inputHighlight").attr('checked','checked');
        $("#inputHighlight").val('1');
      }
      $("#save-content").attr("id","submit_update");
      
      $("#content-list").hide();
      $("#form-content").show();
      $("#add").hide();
  });
  
}

(function () {
      const editorInstance = new FroalaEditor('textarea', {
        enter: FroalaEditor.ENTER_P,
        events: {
          contentChanged: function () {
            console.log('content changed')
          }
        }
      })
    })()
  </script>
</body>

</html>

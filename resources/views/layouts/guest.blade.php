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
    <title>{{ config('app.name', 'Home') }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <!-- Material Kit CSS -->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('dropzone/dropzone.min.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('dropzone/dropzone.min.js') }}"></script>
    <!-- Icon -->
    <link rel="icon" type="image/gif" href="{{ asset('images/logo-nurul-yaqin.png') }}" />
    <script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <!-- <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script> -->
  
  <!-- Logo website -->
  <!-- <link rel="icon" type="image/gif" href="{{ asset('images/logo-nurul-yaqin.png') }}" /> -->


    <meta name="csrf-token" content="{{ csrf_token() }}">


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


    
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand text-uppercase" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo-nurul-yaqin.png') }}" style="width: 40px; height: 40px;">   
                     SDIT NURUL YAQIN 
                    
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <!-- @guest
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
                        @endguest -->
                    </ul>
                </div>
            </div>
        </nav>
    <div class="containter">
        <div class="row justify-content-md-center"> 
            <div class="col-md-8 col-sm-12">
                @yield('content')    



            </div>
        </div>  
    </div>



    <script type="text/javascript" src="{{ asset('material-dashboard/js/core/bootstrap-material-design.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('material-dashboard/js/core/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('material-dashboard/js/core/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('material-dashboard/js/plugins/bootstrap-notify.js') }}"></script>
    <script type="text/javascript" src="{{ asset('material-dashboard/js/plugins/chartist.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('material-dashboard/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('material-dashboard/js/material-dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('material-dashboard/js/material-dashboard.js.map') }}"></script>
    <script type="text/javascript" src="{{ asset('material-dashboard/js/material-dashboard.min.js') }}"></script>


    <!-- Bootstrap -->
    
    
    <script type="text/javascript">
        $("input[type=number]").change(function() {
            let _val = $(this).val();
            if (_val < 0 ) {
                $(this).val("0");
            }
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
    </script>

</body>

</html>

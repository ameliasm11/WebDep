<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DEP Web</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="../images/logoDEP.png">

    <link rel="stylesheet" href="{{ asset('plugins/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/css/cs-skin-elastic.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="/pathto/css/sweetalert.css"> -->
    <!-- <link rel="stylesheet" href="asset/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{ asset ('plugins/scss/style.css') }}">
    <link href="{{ asset ('plugins/css/lib/vector-map/jqvmap.min.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="../images/nav_logo.png" alt="Logo" width="50%"></a>
                <a class="navbar-brand hidden" href="./"><img src="../images/logoDEP.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{route('dashboard')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                     <h3 class="menu-title">Main Menu</h3>
                    @foreach($modules as $module)
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="menu-icon {{$module->icon}}"></i>{{$module->name}}</a>
                        <ul class="sub-menu children dropdown-menu">
                            @foreach($module->Menus as $menu)
                            <li>
                                <i class="fa fa-pencil-square-o"></i>
                                <a href="{{route($menu->url)}}">{{$menu->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}<span class="caret"></span>
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="{{route('superadmin.logout')}}"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
        @yield('content')

        <script src="{{ asset ('plugins/js/vendor/jquery-2.1.4.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="{{ asset ('plugins/js/plugins.js') }}"></script>
        <script src="{{ asset ('plugins/js/main.js') }}"></script>

        <script src="{{ asset ('plugins/js/lib/chart-js/Chart.bundle.js') }}"></script>
        <script src="{{ asset ('plugins/js/dashboard.js') }}"></script>
        <script src="{{ asset ('plugins/js/widgets.js') }}"></script>
        <script src="{{ asset ('plugins/js/lib/vector-map/jquery.vmap.js') }}"></script>
        <script src="{{ asset ('plugins/js/lib/vector-map/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset ('plugins/js/lib/vector-map/jquery.vmap.sampledata.js') }}"></script>
        <script src="{{ asset ('plugins/js/lib/vector-map/country/jquery.vmap.world.js') }}"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>
    <script>
      var msg = '{{Session::get('alert')}}';
      var exist = '{{Session::has('alert')}}';
      if(exist){
        alert(msg);
      }
    </script>
    <script type="text/javascript" src="runtime.8047209dd56822f5e7b5.js"></script>
    <script type="text/javascript" src="polyfills.ecb2495e9de4e2f3c01a.js"></script>
    <script type="text/javascript" src="scripts.806effac119676237f10.js"></script>
    <script type="text/javascript" src="main.d54cb410a96a4eeea23e.js"></script>

</body>
</html>

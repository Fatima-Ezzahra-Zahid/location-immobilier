<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../My portfolio/assets/img/favicon.png" rel="icon">
    <title>ADMIN</title>
    <script src="{{ asset('vendors/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('vendors/js/poper.js') }}" defer></script>
    <script src="{{ asset('vendors/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('vendors/js/swiper.min.js') }}" defer></script>
    <script src="{{ asset('js/scriptadmin.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/21508b4b05.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,500&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('vendors/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleDashbord.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendors/fontawesome5/css/fontawesome-all.min.css')}}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    
</head>

<body>
<div class="wrapper">
         




 <nav id="sidebar" class="active">
            <div class="sidebar-header">
                <img src="{{'image/logo.png'}}" alt="bootraper logo" class="app-logo">
            </div>
            <ul class="list-unstyled components text-secondary">


                <li>
                    <a href="dashbord.php"><i class="fas fa-home"></i> Home</a>
                </li>
                <li>
                    <a href="#uielementsmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-layer-group"></i>Properties</a>
                    <ul class="collapse list-unstyled" id="uielementsmenu">
                        <li>
                            <a href="Count.php"> Properties</a>
                        </li>
                        <li>
                            <a href="addCount.php">Add Properties</a>
                        </li>
                    </ul>
                </li>


           
                    <a href="#authmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-user-shield"></i> Authentication</a>
                    <ul class="collapse list-unstyled" id="authmenu">
                        <li>
                            <a href="login.php"><i class="fas fa-lock"></i> Login</a>
                        </li>
                    </ul>    
                </li>    
            </ul>
        </nav>

      
    <div id="body" class="active">
            
        <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-outline-secondary default-secondary-menu"><i class="fas fa-bars"></i><span></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="" class="nav-item nav-link dropdown-toggle text-secondary" data-toggle="dropdown"><i class="fas fa-user"></i> <span></span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="logout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
        </nav>

              
            
     
        @yield('content')






          
    </div>

    

</div>

</body>

</html>
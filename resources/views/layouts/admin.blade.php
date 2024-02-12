<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>   
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    @yield('css')    

    <link rel="stylesheet" href="{{ asset('css/adminnew.css') }}">
    <style>
        .navbar {
            background: chocolate;
            border: 1px solid chocolate;
            color: #fff;
        }
        .btn-purple {
            background: chocolate;
            border: 1px solid chocolate;
            color: #fff;
        }
        .btn-purple:hover {
            background: chocolate;
            border: 1px solid chocolate;
            color: #fff;
        }
        .dropdown {
            background: chocolate;
            border: 1px solid chocolate;
            color: #fff;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="{{ asset('img/logotigatuju.png') }}"  alt="tigatuju" width="90%">  
            </div>
            <ul class="list-unstyled components">
                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.index') }}"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
                </li>
                 
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-shopping-basket" aria-hidden="true"></i> Produk</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li class="{{ Request::is('admin/kategori') ? 'active' : '' }}">
                            <a href="{{ route('kategori') }}"><i class="fa fa-tags" aria-hidden="true"></i>  Kategori</a>
                        </li>
                        <li class="{{ Request::is('admin/produk') ? 'active' : '' }}" >
                            <a href="{{ route('produk') }}"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>  Detail Produk</a>
                        </li>
                    </ul>
                </li>
                <hr>
                <li class="">
                    <a href=""><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                  </li>
            </ul>
        </nav>


        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="text-white ml-2"><h5><strong>@yield('header')</strong></h5></div>     
                
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="dropdown ml-auto">
                            <button class="btn dropdown-toggle mr-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Klik Saya   <i class="fa fa-user" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu mr-2" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="https://www.malasngoding.com/category/html">HTML</a>
                                <a class="dropdown-item" href="https://www.malasngoding.com/category/bootstrap-4">Bootstrap 4</a>
                                <a class="dropdown-item" href="https://www.malasngoding.com/category/codeigniter">CodeIgniter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            @yield('content')
        </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.4/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="assets/js/popper.js"></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });

    </script>

    @yield('js')
    </body>

</html>

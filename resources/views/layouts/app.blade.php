<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FISTMILE') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('js/bonus.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <link rel="stylesheet" href="style2.css">
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <script type="text/javascript">
            //คำสั่ง Jquery เริ่มทำงาน เมื่อ โหลดหน้า Page เสร็จ 
            $(function(){
                //กำหนดให้  Plug-in dataTable ทำงาน ใน ตาราง Html ที่มี id เท่ากับ example
                $('#example').dataTable();
            });
        </script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<style>
label{
    font-family: "Times New Roman", Times, serif;
}
h3{
    font-family: Georgia, Verdana, sans-serif;
}
body {
    position: relative;
    overflow-x: hidden;
}

body, html {
    height: 100%;
}

.nav .open > a {
    background-color: transparent;
}

    .nav .open > a:hover {
        background-color: transparent;
    }

    .nav .open > a:focus {
        background-color: transparent;
    }

#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

    #wrapper.toggled {
        padding-left: 220px;
    }

        #wrapper.toggled #sidebar-wrapper {
            width: 220px;
        }

        #wrapper.toggled #page-content-wrapper {
            margin-right: -220px;
            position: absolute;
        }

#sidebar-wrapper {
    background: #1a1a1a;
    height: 100%;
    left: 220px;
    margin-left: -220px;
    overflow-x: hidden;
    overflow-y: auto;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    -webkit-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    transition: all 0.5s ease;
    width: 0;
    z-index: 1000;
}

    #sidebar-wrapper::-webkit-scrollbar {
        display: none;
    }


#page-content-wrapper {
    padding-top: 70px;
    width: 100%;
}


.sidebar-nav {
    list-style: none;
    margin: 0;
    padding: 0;
    position: absolute;
    top: 0;
    width: 220px;
}

    .sidebar-nav li {
        display: inline-block;
        line-height: 20px;
        position: relative;
        width: 100%;
    }

        .sidebar-nav li:before {
            background-color: #1c1c1c;
            content: '';
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            -webkit-transition: width 0.2s ease-in;
            -moz-transition: width 0.2s ease-in;
            -ms-transition: width 0.2s ease-in;
            -o-transition: width 0.2s ease-in;
            transition: width 0.2s ease-in;
            width: 3px;
            z-index: -1;
        }

        .sidebar-nav li:before {
            background-color: #6bb4e7;
        }

        .sidebar-nav li:hover:before {
            -webkit-transition: width 0.2s ease-in;
            -moz-transition: width 0.2s ease-in;
            -ms-transition: width 0.2s ease-in;
            -o-transition: width 0.2s ease-in;
            transition: width 0.2s ease-in;
            width: 100%;
        }

        .sidebar-nav li a {
            color: #dddddd;
            display: block;
            padding: 10px 15px 10px 30px;
            text-decoration: none;
        }

        .sidebar-nav li.open:hover before {
            -webkit-transition: width 0.2s ease-in;
            -moz-transition: width 0.2s ease-in;
            -ms-transition: width 0.2s ease-in;
            -o-transition: width 0.2s ease-in;
            transition: width 0.2s ease-in;
            width: 100%;
        }

    .sidebar-nav .dropdown-menu {
        background-color: #222222;
        -ms-border-radius: 0;
        border-radius: 0;
        border: none;
        -webkit-box-shadow: none;
        -ms-box-shadow: none;
        box-shadow: none;
        margin: 0;
        padding: 0;
        position: relative;
        width: 100%;
    }

    .sidebar-nav li a:hover, .sidebar-nav li a:active, .sidebar-nav li a:focus, .sidebar-nav li.open a:hover, .sidebar-nav li.open a:active, .sidebar-nav li.open a:focus {
        background-color: transparent;
        color: #ffffff;
        text-decoration: none;
    }

    .sidebar-nav > .sidebar-brand {
        font-size: 20px;
        height: 65px;
        line-height: 44px;
    }

.hamburger {
    background: transparent;
    border: none;
    display: block;
    height: 32px;
    margin-left: 15px;
    position: fixed;
    top: 20px;
    width: 32px;
    z-index: 999;
}

    .hamburger:hover {
        outline: none;
    }

    .hamburger:focus {
        outline: none;
    }

    .hamburger:active {
        outline: none;
    }

    .hamburger.is-closed:before {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        content: '';
        display: block;
        font-size: 14px;
        line-height: 32px;
        -ms-opacity: 0;
        opacity: 0;
        text-align: center;
        width: 100px;
    }

    .hamburger.is-closed:hover before {
        -webkit-transform: translate3d(-100px, 0, 0);
        -moz-transform: translate3d(-100px, 0, 0);
        -ms-transform: translate3d(-100px, 0, 0);
        -o-transform: translate3d(-100px, 0, 0);
        transform: translate3d(-100px, 0, 0);
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        display: block;
        -ms-opacity: 1;
        opacity: 1;
    }

    .hamburger.is-closed:hover .hamb-top {
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        top: 0;
    }

    .hamburger.is-closed:hover .hamb-bottom {
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        bottom: 0;
    }

    .hamburger.is-closed .hamb-top {
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        top: 5px;
    }

    .hamburger.is-closed .hamb-middle {
        margin-top: -2px;
        top: 50%;
    }

    .hamburger.is-closed .hamb-bottom {
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        bottom: 5px;
    }

    .hamburger.is-closed .hamb-top, .hamburger.is-closed .hamb-middle, .hamburger.is-closed .hamb-bottom, .hamburger.is-open .hamb-top, .hamburger.is-open .hamb-middle, .hamburger.is-open .hamb-bottom {
        height: 4px;
        left: 0;
        position: absolute;
        width: 100%;
    }

    .hamburger.is-open .hamb-top {
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        transform: rotate(45deg);
        -webkit-transition: -webkit-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        -moz-transition: -moz-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        -ms-transition: -ms-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        -o-transition: -o-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        transition: transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        margin-top: -2px;
        top: 50%;
    }

    .hamburger.is-open .hamb-middle {
        display: none;
    }

    .hamburger.is-open .hamb-bottom {
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transition: -webkit-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        -moz-transition: -moz-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        -ms-transition: -ms-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        -o-transition: -o-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        transition: transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        margin-top: -2px;
        top: 50%;
    }

    .hamburger.is-open:before {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        content: '';
        display: block;
        font-size: 14px;
        line-height: 32px;
        -ms-opacity: 0;
        opacity: 0;
        text-align: center;
        width: 100px;
    }

    .hamburger.is-open:hover before {
        -webkit-transform: translate3d(-100px, 0, 0);
        -moz-transform: translate3d(-100px, 0, 0);
        -ms-transform: translate3d(-100px, 0, 0);
        -o-transform: translate3d(-100px, 0, 0);
        transform: translate3d(-100px, 0, 0);
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        display: block;
        -ms-opacity: 1;
        opacity: 1;
    }


.overlay {
    position: fixed;
    display: none;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #000000;
    background-color: rgba(0, 0, 0, 0.3);
    z-index: 1;
}

.hamb-bottom, .hamb-middle, .hamb-top {
    background-color: black;
}
</style>
<div id="wrapper" class="">
    <div class="overlay" style="display: none;"></div>
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
       <ul class="nav sidebar-nav">
          <li class="sidebar-brand">
            <a href="{{ url('/building') }}">
                {{ config('app.name', 'FISTMILE') }}
            </a>
          </li>
          <li>
            <a href="{{ url('/building') }}"><i class="glyphicon glyphicon-list-alt"></i>&nbsp; Bilding List</a>
          </li>
          <li>
             <a href="https://github.com/FragCoder/bootstrap-left-slide-menu"><i class="glyphicon glyphicon-facetime-video"></i> Video</a>
          </li>
          <li>
             <a href="https://github.com/FragCoder/bootstrap-left-slide-menu"><i class="glyphicon glyphicon-headphones"></i> Music</a>
          </li>
          <li>
             <a href="https://github.com/FragCoder/bootstrap-left-slide-menu"><i class="glyphicon glyphicon-cloud"></i> Cloud</a>
          </li>
          <li>
             <a href="https://github.com/FragCoder/bootstrap-left-slide-menu"><i class="glyphicon glyphicon-th"></i> Apps</a>
          </li>
          <li>
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();"><i class="glyphicon glyphicon-log-out"></i> 
             {{ __('Logout') }}
            </a>
          </li>
       </ul>
    </nav>
    
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
                <div id="page-content-wrapper">
                    <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                    <span class="hamb-top"></span>
                    <span class="hamb-middle"></span>
                    <span class="hamb-bottom"></span>
                    </button>
                 </div>
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
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script>
        $(document).ready(function () {
    var trigger = $('.hamburger'),
        overlay = $('.overlay'),
       isClosed = false;

    function buttonSwitch() {

        if (isClosed === true) {
            overlay.hide();
            trigger.removeClass('is-open');
            trigger.addClass('is-closed');
            isClosed = false;
        } else {
            overlay.show();
            trigger.removeClass('is-closed');
            trigger.addClass('is-open');
            isClosed = true;
        }
    }

    trigger.click(function () {
        buttonSwitch();
    });

    $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
    });
});
    </script>
</body>
</html>

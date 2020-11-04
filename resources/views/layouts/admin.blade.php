<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Minimal an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <script src="{{ asset('js/jquery.dataTables.minjs') }}"></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel='stylesheet' type='text/css'/>
    <link href="{{ asset('css/custom2.css') }}" rel='stylesheet' type='text/css'/>
    <link href="{{ asset('css/datatables.min.css') }}" rel="stylesheet" type='text/css'>
    <link href="{{ asset('css/bootstrap.4.5.2.css.bootstrap.ccs') }}" rel="stylesheet" type='text/css'>
    <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type='text/css'>
    <!-- Custom Theme files -->
    <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css'/>
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.css') }}"></script>

    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <script src="{{ asset('js/jquery1.min.js') }}" type="text/javascript"></script>
    <!-- Mainly scripts -->

    <script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
    <!-- Custom and plugin javascript -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom_1.css') }}" rel="stylesheet">


    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/screenfull.js') }}"></script>
    <script src="{{ asset('js/datatables.min.js') }}"></script>
    <script>
        $(function () {
            $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

            if (!screenfull.enabled) {
                return false;
            }


            $('#toggle').click(function () {
                screenfull.toggle($('#container')[0]);
            });


        });
    </script>

    <!----->

    <!--pie-chart--->


    <!--skycons-icons-->
    <!--//skycons-icons-->
</head>
<body>
<div id="wrapper">
    <div>

        <!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
            <div class="navbar-header">

                <h1><a class="navbar navbar-brand">CONSTRUCTION</a></h1>
            </div>
            <div class=" border-bottom">
                <div class="full-left">
                    <section class="full-top">

                        <button id="toggle"><i class="fa fa-arrows-alt"></i></button>
                    </section>

                    <form class=" navbar-left-right">
                        <input type="text" value="Search..." onfocus="this.value = '';"
                               onblur="if (this.value == '') {this.value = 'Search...';}">
                        <input type="submit" value="" class="fa fa-search">
                    </form>
                    <div class="clearfix"></div>
                </div>


                <!-- Brand and toggle get grouped for better mobile display -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="drop-men">
                    <ul class=" nav_1">

                        <li class="dropdown at-drop">
                            <a href="#" class="dropdown-toggle dropdown-at " data-toggle="dropdown"><i
                                    class="fa fa-globe"></i> <span class="number">5</span></a>
                            <ul class="dropdown-menu menu1 " role="menu">
                                <li><a href="#">

                                        <div class="user-new">
                                            <p>New user registered</p>
                                            <span>40 seconds ago</span>
                                        </div>
                                        <div class="user-new-left">

                                            <i class="fa fa-user-plus"></i>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user-new">
                                            <p>Someone special liked this</p>
                                            <span>3 minutes ago</span>
                                        </div>
                                        <div class="user-new-left">

                                            <i class="fa fa-heart"></i>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user-new">
                                            <p>John cancelled the event</p>
                                            <span>4 hours ago</span>
                                        </div>
                                        <div class="user-new-left">

                                            <i class="fa fa-times"></i>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user-new">
                                            <p>The server is status is stable</p>
                                            <span>yesterday at 08:30am</span>
                                        </div>
                                        <div class="user-new-left">

                                            <i class="fa fa-info"></i>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user-new">
                                            <p>New comments waiting approval</p>
                                            <span>Last Week</span>
                                        </div>
                                        <div class="user-new-left">

                                            <i class="fa fa-rss"></i>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li><a href="#" class="view">View all messages</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span
                                    class=" name-caret">Rackham<i class="caret"></i></span><img
                                    src="{{URL::asset('/images/wo.jpg')}}"></a>
                            <ul class="dropdown-menu " role="menu">
                                <li><a href="profile.html"><i class="fa fa-user"></i>Edit Profile</a></li>
                                <li><a href="inbox.html"><i class="fa fa-envelope"></i>Inbox</a></li>
                                <li><a href="calendar.html"><i class="fa fa-calendar"></i>Calender</a></li>
                                <li><a href="inbox.html"><i class="fa fa-clipboard"></i>Tasks</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                this.closest('form').submit();"><i class="nav-icon fa fa-power-off"></i>
                                            {{ __('Logout') }}
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div><!-- /.navbar-collapse -->
                <div class="clearfix">

                </div>

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">

                            <li>
                                <a href="{{route('admin.index')}}" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span
                                        class="nav-label">Dashboards</span> </a>
                            </li>

                            <li>
                                <a href="{{route('show.booking')}}" class=" hvr-bounce-to-right"><i class="fa fa-inbox nav_icon"></i>
                                    <span class="nav-label">Booking Panel</span> </a>
                            </li>

                           {{-- <li>
                                <a href="gallery.html" class=" hvr-bounce-to-right"><i
                                        class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Gallery</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-desktop nav_icon"></i> <span
                                        class="nav-label">Pages</span></a>

                            </li>
                            <li>
                            <li><a href="#" class=" hvr-bounce-to-right"><i class="fa fa-users nav_icon"></i>Registered
                                    Users</a></li>
                            </li>--}}


                        </ul>
                    </div>
                </div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="content-main">

                <!--banner-->

                <!--//banner-->
                <!--content-->
                <div class="clearfix"></div>
            @yield('content')
            <!--//content-->


                <!---->
                <div class="clearfix"></div>
                <div class="copy">
                    <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/"
                                                                                target="_blank">W3layouts</a></p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!---->

    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/datatables.min.js') }}"></script>

    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.minjs') }}"></script>


    <!--scrolling js-->
    <script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <!--//scrolling js-->

@yield('scripts')
</body>
</html>


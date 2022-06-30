<!doctype html>
<html class="no-js" lang="en">

@include('layouts.head')

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="wrapper">
           @include('layouts.header')

            <div class="page-wrap">
                @include('layouts.sidebar')

                <div class="main-content">
                   @yield('content')
                </div>

                


                <footer class="footer">
                    <div class="w-100 clearfix">
                        <span class="text-center text-sm-left d-md-inline-block">Copyright © 2022 SIA Parking System v1.0. Tim 4. All Rights Reserved.</span>
                    </div>
                </footer>

            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="{{  asset("backend/plugins/popper.js/dist/umd/popper.min.js")}}"></script>
        <script src="{{  asset("backend/plugins/bootstrap/dist/js/bootstrap.min.js")}}"></script>
        <script src="{{  asset("backend/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js")}}"></script>
        <script src="{{  asset("backend/plugins/screenfull/dist/screenfull.js")}}"></script>
        <script src="{{  asset("backend/plugins/datatables.net/js/jquery.dataTables.min.js")}}"></script>
        <script src="{{  asset("backend/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
        <script src="{{  asset("backend/plugins/datatables.net-responsive/js/dataTables.responsive.min.js")}}"></script>
        <script src="{{  asset("backend/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js")}}"></script>
        <script src="{{  asset("backend/plugins/jvectormap/jquery-jvectormap.min.js")}}"></script>
        <script src="{{  asset("backend/plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js")}}"></script>
        <script src="{{  asset("backend/plugins/moment/moment.js")}}"></script>
        <script src="{{  asset("backend/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js")}}"></script>
        <script src="{{  asset("backend/plugins/d3/dist/d3.min.js")}}"></script>
        <script src="{{  asset("backend/plugins/c3/c3.min.js")}}"></script>
        <script src="{{  asset("backend/js/tables.js")}}"></script>
        <script src="{{  asset("backend/js/widgets.js")}}"></script>
        <script src="{{  asset("backend/js/charts.js")}}"></script>
        <script src="{{  asset("backend/dist/js/theme.min.js")}}"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>

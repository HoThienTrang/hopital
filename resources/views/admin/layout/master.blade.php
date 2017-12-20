<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        {{ Html::style(mix('css/all.css')) }}
        {{ Html::script(mix('js/jquery/dist/jquery.min.js')) }}
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    @include('admin.layout._left_bar')
                </div>
                <div class="top_nav">
                    @include('admin.layout._top_menu')
                </div>

                <div class="right_col" role="main">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- Bootstrap -->
        {{ Html::script(mix('js/common/bootstrap/dist/js/bootstrap.min.js')) }}
        <!-- FastClick -->
        {{ Html::script(mix('js/common/fastclick/lib/fastclick.js')) }}
        <!-- NProgress -->
        {{ Html::script(mix('js/common/nprogress/nprogress.js')) }}
        <!-- gauge.js -->
        {{ Html::script(mix('js/common/gauge.js/dist/gauge.min.js')) }}
        <!-- bootstrap-progressbar -->
        {{ Html::script(mix('js/common/bootstrap-progressbar/bootstrap-progressbar.min.js')) }}
        <!-- iCheck -->
        {{ Html::script(mix('js/common/icheck/icheck.min.js')) }}
        <!-- Skycons -->
        {{ Html::script(mix('js/common/skycons/skycons.js')) }}
        <!-- Flot -->
        {{ Html::script(mix('js/common/flot/jquery.flot.js')) }}
        {{ Html::script(mix('js/common/flot/jquery.flot.pie.js')) }}
        {{ Html::script(mix('js/common/flot/jquery.flot.time.js')) }}
        {{ Html::script(mix('js/common/flot/jquery.flot.stack.js')) }}
        {{ Html::script(mix('js/common/flot/jquery.flot.resize.js')) }}
        <!-- Flot plugins -->
        {{ Html::script(mix('js/common/flot.orderbars/js/jquery.flot.orderBars.js')) }}
        {{ Html::script(mix('js/common/flot.curvedlines/curvedLines.js')) }}
        <!-- JQVMap -->
        {{ Html::script(mix('js/common/jqvmap/dist/jquery.vmap.js')) }}
        {{ Html::script(mix('js/common/jqvmap/dist/maps/jquery.vmap.world.js')) }}
        {{ Html::script(mix('js/common/jqvmap/examples/js/jquery.vmap.sampledata.js')) }}
        <!-- bootstrap-daterangepicker -->
        {{ Html::script(mix('js/common/moment/min/moment.min.js')) }}
        {{ Html::script(mix('js/common/bootstrap-daterangepicker/daterangepicker.js')) }}
        <!-- Custom Theme Scripts -->
        {{ Html::script(mix('js/admin/build/js/custom.min.js')) }}
    </body>
</html>

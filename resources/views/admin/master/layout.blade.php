<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    {{-- css --}}
</head>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            {{-- left bar --}}
            <div class="col-md-3 left_col">
                @include('admin.master._left_bar')
            </div>
            {{-- header --}}
            <div class="top_nav">
                @include('admin.master._header')
            </div>
            {{-- content --}}
            <div class="right_col" role="main">
                @yield('content')
            </div>
            {{-- footer --}}
            @include('admin.master._footer')

        </div>
    </div>
</body>
</html>



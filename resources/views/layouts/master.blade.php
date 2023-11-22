<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

     <!-- Summernote Css links -->
     <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
     <!-- Datatables Css links -->
     <link href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
<body>

    @include('layouts.inc.admin-navbar')

    <div id="layoutSidenav">
        @include('layouts.inc.admin-sidebar')

        <div id="layoutSidenav_content">
            <main>
                  @yield('content')
            </main>
            @include('layouts.inc.admin-footer')
        </div>
    </div>


    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/scripts.js') }}" crossorigin="anonymous"></script>

    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}" crossorigin="anonymous"></script>

    <!-- Summernote JS links -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#my_summernote").summernote({
                height : 200,
            });
            $('.dropdown-toggle').dropdown();
        });
    </script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#my_DataTable").DataTable();
        });
    </script>
</body>
</html>
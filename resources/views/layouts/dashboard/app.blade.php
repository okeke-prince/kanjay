<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Kanjay Travels & Tours || Dashboard
    </title>


    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <link href="{{ asset('admin/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/css/nucleo-svg.css') }}" rel="stylesheet" />

    <link href="{{ asset('admin/assets/css/nucleo-svg.css') }}" rel="stylesheet" />

    <link id="pagestyle" href="{{ asset('admin/assets/css/soft-ui-dashboard.minf2ad.css?v=1.0.7') }}" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">


</head>

<body class="g-sidenav-show  bg-gray-100">

    @include('layouts.dashboard.sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        @include('layouts.dashboard.nav')


        <div class="container-fluid py-4">

            @yield('content')

        </div>

    </main>



    <script src="{{ asset('admin/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/chartjs.min.js') }}"></script>

    <script src="{{ asset('admin/assets/js/soft-ui-dashboard.minf2ad.js?v=1.0.7') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('editor');
    </script>

    <!-- Include success toastr notifications -->
    @if(Session::has('success'))
    @section('toastr-success')
    <script>
        toastr.success("{{ Session::get('success') }}");
    </script>
    @show
    @endif

    <!-- Include error toastr notifications -->
    @if(Session::has('error'))
    @section('toastr-error')
    <script>
        toastr.error("{{ Session::get('error') }}");
    </script>
    @show
    @endif

    <!-- Include warning toastr notifications -->
    @if(Session::has('warning'))
    @section('toastr-warning')
    <script>
        toastr.warning("{{ Session::get('warning') }}");
    </script>
    @show
    @endif

</body>


</html>
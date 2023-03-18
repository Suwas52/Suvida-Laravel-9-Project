<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <title>User Dashboard</title>

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap.min.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/font-awesome.css')}}" />

    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/login.css')}}" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
</head>

<body>


    <!-- ***** Header Area Start ***** -->
    @include('frontend.body.header')
    <!-- ***** Header Area End ***** -->


    <!-- Main page Starts -->
    @yield('user')
    <!-- End main page -->




    <!-- ***** Footer Start ***** -->
    @include('frontend.body.footer')

    <!-- jQuery -->
    <script src="{{asset('frontend/assets/js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('frontend/assets/js/popper.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{asset('frontend/assets/js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/imgfix.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/mixitup.js')}}"></script>
    <script src="{{asset('frontend/assets/js/accordions.js')}}"></script>

    <!-- Global Init -->
    <script src="{{asset('frontend/assets/js/custom.js')}}"></script>
    <script src="{{asset('frontend/assets/js/script.js')}}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch (type) {
        case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

        case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

        case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

        case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
    }
    @endif
    </script>
</body>

</html>
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

    <title>Suvida</title>

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap.min.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/font-awesome.css')}}" />

    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/login.css')}}" />

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    @include('frontend.body.header')
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="{{asset('frontend/assets/images/video.mp4')}}" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="loginBox">
                <div class="glass">
                    <h3 class="lh3">Sign in Here</h3>
                    <form method="POST" id="myForm" action="{{ route('login') }}">
                        @csrf
                        <div class="inputBox form-group">
                            <input type="text" id="email" name="email" placeholder="Email" required />
                            <span><i class="fa fa-user"></i></span>
                        </div>
                        <div class="inputBox form-group">
                            <input type="password" id="password" name="password" placeholder="Password" required />
                            <span><i class="fa fa-lock"></i></span>
                        </div>

                        <input type="submit" name="login" value="Login" />
                    </form>
                    <a href="#" class="a">Forget Password</a>
                    <h5 class="l5">Sign Up Using</h5>
                    <ul class="lul">
                        <!-- <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google"></i></a>
                        </li> -->
                    </ul>
                    <h4>Create account? <a href="{{route('register')}}">Sign Up</a></h4>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <div class="content">
        @yield('main')
    </div>

    <!-- ***** Footer Start ***** -->
    @include('frontend.body.footer')
    <!-- ***** Footer Ends ***** -->

    <!-- serachbar -->

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

    <script src="{{asset('backend/assets/js/validate.min.js')}}"></script>
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
    <script type="text/javascript">
    $(document).ready(function() {
        $('#myForm').validate({
            rules: {
                email: {
                    required: true,
                },
                password: {
                    required: true,
                },

            },
            messages: {
                email: {
                    required: 'Please Enter Email ',
                },
                password: {
                    required: 'Please Enter Password ',
                },

            },
            errorElement: 'danger',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            },
        });
    });
    </script>
</body>

</html>
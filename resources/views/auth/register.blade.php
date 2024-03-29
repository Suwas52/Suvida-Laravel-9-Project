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

    <title>Bike Suvida Register-Page</title>

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap.min.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/font-awesome.css')}}" />

    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/login.css')}}" />
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
                    <h3 class="lh3">Register</h3>
                    <form method="POST" id="myForm" action="{{ route('register') }}">
                        @csrf
                        <div class="inputBox form-group">
                            <input type="text" id="name" name="name" placeholder="Name" />
                            <span><i class="fa fa-user"></i></span>
                            <x-input-error :messages="$errors->get('name')" class="mt-1 " />
                        </div>
                        <div class="inputBox form-group">
                            <input type="text" id="email" name="email" placeholder="Email" />
                            <span><i class="fa fa-mail-bulk"></i></span>
                            <x-input-error :messages="$errors->get('email')" class="mt-1" />
                        </div>
                        <div class="inputBox form-group">
                            <input type="password" id="password" name="password" placeholder="Password" />
                            <span><i class="fa fa-lock"></i></span>
                            <x-input-error :messages="$errors->get('password')" class="mt-1" />
                        </div>
                        <div class="inputBox form-group">
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                placeholder="Confirm password" />
                            <span><i class="fa fa-lock"></i></span>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1" />
                        </div>
                        <input type="submit" name="login" value="Register" />
                    </form>

                    <!-- <h4>Already have an Account? <a href="{{route('login')}}">Sign In</a></h4> -->
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
    <!-- ***** Footer End ***** -->

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


    <script src="{{asset('backend/assets/js/validate.min.js')}}"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#myForm').validate({
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                },
                password: {
                    required: true,
                },
                password_confirmation: {
                    required: true,
                },

            },
            messages: {
                name: {
                    required: 'Please Enter Name ',
                },
                email: {
                    required: 'Please Enter Email ',
                },
                password: {
                    required: 'Please Enter Password ',
                },
                password_confirmation: {
                    required: 'Please Enter Confirm Password ',
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
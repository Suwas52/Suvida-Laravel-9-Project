<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('backend/assets/css/login.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <div class="wrapper bg-white">
        <div class="text-center">

            <svg xmlns="http://www.w3.org/2000/svg" class="mb-2" width="50" height="50" fill=" #23395d"
                class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
        </div>
        <div class="h2 text-center">Admin </div>

        <form class="pt-2" id="myForm" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group py-3">
                <label for="inputEmailAddress" class="form-label">Email </label>
                <div class="input-field ">
                    <span class="far fa-user p-2"></span>
                    <input type="text" id="email" name="email" placeholder="Email Address">
                </div>
            </div>
            <div class="form-group py-1 pb-2">
                <label for="inputEmailAddress" class="form-label">Password</label>
                <div class="input-field ">
                    <span class="fas fa-lock p-2"></span>
                    <input type="password" id="password" name="password" placeholder="Password">
                    <button class="btn bg-white text-muted">
                        <span class=" far fa-eye-slash"></span>
                    </button>
                </div>
            </div>
            <div class="d-flex align-items-start">
                <div class="remember">
                    <label class="option text-muted"> Remember me
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="ml-auto">
                    <a href="#" id="forgot">Forgot Password?</a>
                </div>
            </div>
            <button class="btn btn-block text-center my-3">Log in</button>
        </form>
    </div>

    <script src="{{asset('backend/assets/js/validate.min.js')}}"></script>

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
            errorElement: 'span',
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
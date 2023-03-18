<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{csrf_token()}}" />

    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <title>Suvida</title>

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap.min.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/font-awesome.css')}}" />

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/login.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/compare.css')}}" />

    <!-- <link rel="stylesheet" href="{{asset('frontend/assets/css/slider-range.css')}}" /> -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <!-- price range slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" type="text/css"
        media="all" />




    <style>
    .sidebar-widget {
        position: relative;
        padding: 30px;
        border: 1px solid #ececec;
        border-radius: 15px;
        -webkit-box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.05);
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.05);
    }

    .section-title.style-1 {
        position: relative;
        border-bottom: 1px solid #ececec;
        padding-bottom: 20px;
        font-size: 24px;
    }

    .mb-30 {
        margin-bottom: 30px !important;
    }

    .range .price-filter {
        display: block;
        margin-top: 20px;
    }

    .range #slider-range {
        -webkit-box-shadow: none;
        box-shadow: none;
        border: none;
        height: 4px;
        border-radius: 0px;
        background: #3BB77E;
        color: #3BB77E;
    }

    .text-brand {
        color: #3BB77E !important;

    }



    .range .list-group {
        display: flex;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0;
        border-radius: .25rem;
    }

    .list-group-item {
        padding: 1rem 3.5rem;
    }

    .btn.btn-sm,
    .button.btn-sm {
        padding: 8px 18px;
        font-size: 12px;
        text-transform: none;
        line-height: 1.8;
    }

    .inputBox {

        display: none;
    }

    .inputBox active {
        display: block;
    }

    .bike_name .title {
        font-size: 20px;


    }



    .price p {
        color: #24272c;
        font-size: 15px;
        line-height: 20px;
        margin: 5px 0 0;
        position: relative;
    }

    .nav-bike {
        background: #fff;
        box-shadow: 0 2px 1px 0 rgb(36 39 44 / 15%);
        width: 100%;
    }

    .nav-bike .ul-bike {
        padding: 15px 30px;

        font-weight: 400;
        line-height: 1.5;
    }



    .ul-link a {
        color: rgb(75, 82, 82);
        font-size: 14px;
    }

    .font {
        /* display: none; */
    }
    </style>
</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <!-- <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div> -->
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    @include('frontend.body.header')
    <!-- ***** Header Area End ***** -->

    <div class="content">
        @yield('main')
    </div>

    <!-- ***** Footer Start ***** -->
    @include('frontend.body.footer')
    <!-- ***** Footer End ***** -->


    <!-- serachbar -->

    <!-- jQuery -->
    <script src="{{asset('frontend/assets/js/jquery-2.1.0.min.js')}}">
    </script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> -->

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
    <!-- <script src="{{asset('frontend/assets/js/slider-range.js')}}"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript">
    </script>


    <!-- Global Init -->
    <script src="{{asset('frontend/assets/js/custom.js')}}"></script>
    <script src="{{asset('frontend/assets/js/script.js')}}"></script>
    <!-- <script src="{{asset('frontend/assets/js/search.js')}}"></script> -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>




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

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper(".card_slider", {
        slidesPerView: 2,

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

    });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
    var availableTags = [];
    $.ajax({
        method: "GET",
        url: "/models-list",
        success: function(response) {
            startAutoComplete(response)
        }
    });

    function startAutoComplete(availableTags) {
        $("#search-box").autocomplete({
            source: availableTags
        });
        $("#search-compare_1").autocomplete({
            source: availableTags
        });
        $("#search-compare_2").autocomplete({
            source: availableTags
        });
        $("#model_name").autocomplete({
            source: availableTags
        });
    }
    </script>

    <script>
    const addBtn = document.querySelector('.search-form');

    const box = document.querySelector('#search-btn');
    </script>





</body>

</html>
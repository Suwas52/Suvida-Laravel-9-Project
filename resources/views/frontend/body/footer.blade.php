<style>
    .round-btn {
        display: inline;
        height: 40px;
        width: 40px;
        background: #fff;
        border-radius: 50%;
        float: left;
        margin: 15px 8px;
        box-shadow: 2px 2px 5px 0px rgb(82, 0, 67);
        border: 1px solid;
        /*border: 1px solid #622657;*/
    }

    .round-btn a {
        display: block !important;
        padding: 7px 12px;
        font-size: 18px;
        border-radius: 50%;
    }

    .round-btn .icon {
        padding: 3px;
    }

    .round-btn .icon img {
        height: 24px;
        width: 32px;
        margin-top: 6px;
    }

    .btn-facebook a {
        color: #3b5998;
        padding: 8px 13px;
    }

    .btn-linkedin a {
        color: #007bb6;
    }

    .btn-twitter a {
        color: #1c9deb;
    }

    .btn-instagram a {
        color: #dd3f5c;
    }

    .btn-whatsapp a {
        color: #155E54;
    }

    .btn-envelop a {
        color: #D6403A;
        font-size: 15px;
        padding: 9px 12px;
    }

    .standard_header .standard_social_links {
        margin-left: 1rem;
    }

    .footer-wrap {
        padding-top: 43px;
        background-size: cover;
    }

    .footer-wrap h3 {
        color: #fff;
        font-size: 17px;
        text-transform: uppercase;
        margin-bottom: 25px;
    }

    .footer-wrap p {
        font-size: 13px;
        line-height: 24px;
        color: #b3b3b3;
        margin-top: 15px;
    }

    .footer-wrap p a {
        color: #fff;
        text-decoration: underline;
        font-style: italic;
    }

    .footer-wrap p a:hover {
        text-decoration: none;
        color: #ff7800;
    }

    .footer-links li a {
        font-size: 13px;
        line-height: 30px;
        color: #ccc;
        text-decoration: none;
    }


    .footer-links li:before {
        content: "\f105";
        font-family: 'FontAwesome';
        padding-right: 10px;
        color: #ccc;
    }

    .footer-category li a {
        font-size: 13px;
        line-height: 30px;
        color: #ccc;
        text-decoration: none;
    }

    .footer-category li:before {
        content: "\f105";
        font-family: 'FontAwesome';
        padding-right: 10px;
        color: #b3b3b3;
    }

    .address {

        color: #b3b3b3;
        font-size: 14px;
        position: relative;
        padding-left: 30px;
        line-height: 30px;
    }

    .address:before {
        content: "\f277";
        font-family: 'FontAwesome';
        position: absolute;
        top: 0;
        left: 0;
    }

    .info a {

        color: #b3b3b3;
        font-size: 14px;
        line-height: 30px;
        font-weight: normal;
    }

    .fa-phone:before {
        content: "\f095";
    }

    .info a {

        color: #b3b3b3;
        font-size: 14px;
        line-height: 30px;
        font-weight: normal;
    }

    .fa-fax:before {
        content: "\f1ac";
    }

    .copyright {
        border-top: 1px solid #111;
        font-size: 14px;
        color: #ccc;
        padding-top: 15px;
        text-align: center;
        padding-bottom: 15px;
        background: #222;
    }

    footer .second_class {
        border-bottom: 1px solid #444;
        padding-bottom: 25px;
    }

    footer .first_class {
        padding-bottom: 21px;
        border-bottom: 1px solid #444;
    }

    footer .first_class p,
    footer .first_class h3 {
        margin: 0 0;

    }

    footer {
        background: #333;
        padding: 30px 0px 0px 0px;
    }

    footer .newsletter input[type="text"] {
        width: 100%;
        background: #fff;
        color: #333;
        border: 1px solid #222;
        padding: 14px 20px;
        border-radius: 50px;
        margin-top: 12px;
    }

    .newsletter .newsletter_submit_btn {
        background: #fff;
        position: absolute;
        right: 30px;
        border: 0;
        top: 26px;
        font-size: 17px;
        color: #333;
    }


    footer .second_class_bdr {
        padding-top: 25px;
        border-top: 1px solid #222;
    }

    footer .btn-facebook a {
        padding: 6px 14px !important;
    }

    footer .btn-envelop a {
        color: #D6403A;
        font-size: 15px;
        padding: 12px 12px;
    }

    footer .round-btn a {
        padding: 6px 12px;
    }

    footer .round-btn {
        box-shadow: 2px 2px 5px 0px #222 !important;
    }

    footer .round-btn {
        margin: 15px 4px;
    }

    footer dl,
    ol,
    ul {
        padding-left: 5px;
    }

    footer li {
        list-style: none;
    }
</style>

<footer class="container-fluid">
    <div class="footer-wrap">
        <div class="container first_class">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <h3>BE THE FIRST TO KNOW</h3>
                    <p>Get all the latest information on Bikes, Scooters. Sign up for our newsletter today.</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    
                    <form class="newsletter" action="{{route('add-subscriber')}}" method="post">
                        @csrf

                        <input type="text" name="email"  placeholder="Email Address" >
                        <span class="text-danger">
                            @error('email')
                            {{$message}}
                            @enderror
                        </span>
                        <button class="newsletter_submit_btn" type="submit"><i class="fa fa-paper-plane"></i></button>
                    </form>

                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="col-md-12">
                        <div class="standard_social_links">
                            <div>
                                <li class="round-btn btn-facebook"><a href="https://www.facebook.com/su.waas.5/"><i class="fab fa-facebook-f"></i></a>

                                </li>
                                <li class="round-btn btn-linkedin"><a href="https://www.linkedin.com/in/subash-danuwar/"><i class="fab fa-linkedin-in"
                                            aria-hidden="true"></i></a>

                                </li>
                                <li class="round-btn btn-twitter"><a href="https://twitter.com/suwas_danuwar"><i class="fab fa-twitter"
                                            aria-hidden="true"></i></a>
                                </li>
                                <li class="round-btn btn-instagram"><a href="https://www.instagram.com/su_waas52/"><i class="fab fa-instagram"
                                            aria-hidden="true"></i></a>

                                </li>
                                <li class="round-btn btn-github"><a href="https://github.com/suwas52"><i class="fab fa-github"
                                            aria-hidden="true"></i></a>

                                </li>
                                <li class="round-btn btn-envelop"><a href="https://www.messenger.com/t/2234162790040870"><i class="fa fa-envelope"
                                            aria-hidden="true"></i></a>

                                </li>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <h3 style="text-align: right;">Stay Connected</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="second_class">
            <div class="container second_class_bdr">
                <div class="row">
                    <div class="col-md-4 col-sm-6">

                        <div class="footer-logo"><img src="{{asset('frontend/assets/images/logo.png')}}"
                                style="height: 60px; width: 60px" alt="logo">
                        </div>
                        <p>Your one-stop platform to find Latest Bikes, Scooters, Used Bikes, Used Scooters.</p>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <h3>Quick LInks</h3>
                        <ul class="footer-links">
                            <li><a href="{{route('main')}}">Home</a>
                            </li>
                            @php
                            $bike = App\Models\Vehicle::where('vehicle_name','Bike')->first();
                            $scooter = App\Models\Vehicle::where('vehicle_name','Scooter')->first();
                           
                            $best_bikes =App\Models\Category::where('category_name','Best')->where('vehicle_id',$bike->id)->first(); 
                            $best_scooter =App\Models\Category::where('category_name','Best')->where('vehicle_id',$scooter->id)->first(); 
                            
                            @endphp
                            
                            <li><a href="{{ url('vehicle/'.$best_bikes->id.'/'.$best_bikes->category_slug )}}">Best Bikes</a>
                            </li>
                            <li><a href="{{ url('vehicle/'.$best_scooter->id.'/'.$best_scooter->category_slug )}}">Best Scooters</a>
                            </li>
                            <li><a href="{{route('contact.admin')}}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h3>OUR SERVICES</h3>
                        <ul class="footer-category">
                                <li><a href="{{route('test.ride')}}">Test Ride</a>
                                </li>
                            <li><a href="{{route('compare')}}">Compare Vehicles</a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h3>Contact Us</h3>
                        <ul class="footer-links">
                            <li><a href="{{route('contact.admin')}}">+977-9842069250</a>
                            </li>

                            <li><a href="{{route('contact.admin')}}">suvidaservice@gmaill.com</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">

            <div class="container-fluid">
                <div class="copyright">Copyright 2022 | All Rights Reserved by Suvida</div>
            </div>

        </div>
    </div>

</footer>



<script src="https://kit.fontawesome.com/fddf5c0916.js" crossorigin="anonymous"></script>
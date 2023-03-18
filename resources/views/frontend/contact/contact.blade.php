@extends('frontend.master')
@section('main')

<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/bike-landscape.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2>Feel free to <em>Contact Us</em></h2>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- ***** Features Item Start ***** -->
<section class="section" id="features">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>contact <em> info</em></h2>
                    <img src="{{asset('frontend/assets/images/logo.png')}}" style="height: 100px; width: 100px" alt="logo">

                </div>
            </div>

            <div class="col-md-4">
                <div class="icon">
                    <i class="fa fa-phone"></i>
                </div>

                <h5><a href="#">+977-9842069250</a></h5>

                <br>
            </div>

            <div class="col-md-4">
                <div class="icon">
                    <i class="fa fa-envelope"></i>
                </div>

                <h5><a href="#">suvidaservice@gmaill.com</a></h5>

                <br>
            </div>

            <div class="col-md-4">
                <div class="icon">
                    <i class="fa fa-map-marker"></i>
                </div>

                <h5>Nepal</h5>

                <br>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Item End ***** -->

<!-- ***** Contact Us Area Starts ***** -->
<section class="section" id="contact-us" style="margin-top: 0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div id="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56547.726708215785!2d85.40715213882974!3d27.648264532380317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1aa64a37499d%3A0x77c794ac234add76!2sSuryabinayak!5e0!3m2!1sen!2snp!4v1672585622437!5m2!1sen!2snp"
                        width="100%" height="600px" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="contact-form section-bg" style="background-image: url(assets/images/contact.jpg)">
                    <form id="contact" action="{{route('contact')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" placeholder="Your Name*">
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" placeholder="Your Email*">
                                </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="subject" type="text" placeholder="Subject">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" placeholder="Message"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" class="main-button">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
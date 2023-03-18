 @extends('frontend.master')
 @section('main')

 <!-- ***** Header Area Start ***** -->
 @include('frontend.home.main_banner')
 <!-- ***** Header Area End ***** -->

 <!-- ***** Header Area Start ***** -->
 @include('frontend.home.bike_in_spotlight')
 <!-- ***** Header Area End ***** -->

 <!-- ***** popular brand Starts ***** -->
 @include('frontend.home.popular_brand')
 <!-- ***** popular brand Ends ***** -->

 <!-- *****Best Bikes Starts ***** -->
 @include('frontend.home.bikes_feature')
 <!-- ***** Bikes Ends ***** -->

 <!-- *****Best Scooter Starts ***** -->
 @include('frontend.home.scooters_feature')
 <!-- ***** Scooter Ends ***** -->

 <!-- *****Latest Scooter Starts ***** -->
 @include('frontend.home.top_scooters')
 <!-- ***** Latest Scooter Ends ***** -->

 <!-- *****Popular Scooter Starts ***** -->
 @include('frontend.home.popular_scooter')
 <!-- ***** Scooter Ends ***** -->


 <!-- ***** Call to Action Start ***** -->
 <section class="section section-bg" id="call-to-action"
     style="background-image: url({{asset('frontend/assets/images/bike-landscape.jpg')}})">
     <div class="container">
         <div class="row">
             <div class="col-lg-10 offset-lg-1">
                 <div class="cta-content">
                     <h2>Send us a <em>message</em></h2>
                     <p>
                         We would love to respond to our queries and help you get your new and latest Bikes and
                         Scooters.
                         Let us help you, feel free to get in touch with us.
                     </p>
                     <div class="main-button">
                         <a href="{{route('contact.admin')}}">Contact us</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- ***** Call to Action End ***** -->

 @endsection
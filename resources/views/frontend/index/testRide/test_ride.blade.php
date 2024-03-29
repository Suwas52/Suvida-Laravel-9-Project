@extends('frontend.master')
@section('main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{asset('backend/assets/js/validate.min.js')}}"></script>
<!-- ***** Call to Action Start ***** -->
<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/bike-landscape.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">


                    <br>
                    <br>
                    <h2> <em>Test</em><span> Ride</span>
                    </h2>



                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->

<!-- ***** Fleet Starts ***** -->
<section class="section" id="trainers">

    <div class="col-12 col-md-10 col-lg-6 mx-auto mt-5 p-3 mb-5">

        <div class="card shadow ">
            <div class="card-header">
                <div class="card-title">
                    <h4 class="text-center"><strong>Test Ride Form</strong> </h4>

                </div>
            </div>
            <div class="card-body">

                <form action="{{route('add.test.ride')}}"  method="post">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="firstname"> <span class="text-danger align-middle">* </span>
                                <strong>First Name</strong> :</label>
                            <input type="text" class="form-control" name="first_name" id="firstname"
                                placeholder="First Name">
                                <span class="text-danger">
                                    @error('first_name')
                                    {{$message}}
                                    @enderror
                                </span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname"><span class="text-danger align-middle">* </span>Last Name:</label>
                            <input type="text" class="form-control" name="last_name" id="lastname"
                                placeholder="Last Name">
                                <span class="text-danger">
                                    @error('last_name')
                                    {{$message}}
                                    @enderror
                                </span>

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email"><span class="text-danger align-middle">* </span>Email:</label>
                            <input type="text" class="form-control" name="email" id="email"
                                placeholder="Enter Email Address">
                                <span class="text-danger">
                                    @error('email')
                                    {{$message}}
                                    @enderror
                                </span>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone"><span class="text-danger align-middle">* </span>Mobile:</label>
                            <input type="tel" class="form-control" name="phone_no" id="phone"
                                placeholder="Enter Mobile Number">
                                <span class="text-danger">
                                    @error('phone_no')
                                    {{$message}}
                                    @enderror
                                </span>

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="model_name" class="col-form-label"><span class="text-danger align-middle">*
                                </span>Model Name:</label>
                            <input class="form-control" name="model_name" type="text" id="model_name"
                                placeholder="Enter Models Name">
                                <span class="text-danger">
                                    @error('model_name')
                                    {{$message}}
                                    @enderror
                                </span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="datetime-local" class="col-form-label"><span class="text-danger align-middle">*
                                </span>Date and Time :</label>
                            <input class="form-control" name="book_time" type="datetime-local" id="datetime-local"
                               required >
                                <span class="text-danger">
                                    @error('book_time')
                                    {{$message}}
                                    @enderror
                                </span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="district"><span class="text-danger align-middle">* </span>District:</label>
                            <input type="text" class="form-control" name="district" id="district"
                                placeholder="District Name">
                                <span class="text-danger">
                                    @error('district')
                                    {{$message}}
                                    @enderror
                                </span>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="zone"><span class="text-danger align-middle">* </span>Zone:</label>
                            <input type="text" class="form-control" name="zone" id="zone" placeholder="Zone Name">
                            <span class="text-danger">
                                @error('zone')
                                {{$message}}
                                @enderror
                            </span>

                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="city"><span class="text-danger align-middle">* </span>City:</label>
                            <input type="text" class="form-control" name="city" id="city" placeholder="City Name">
                            <span class="text-danger">
                                @error('city')
                                {{$message}}
                                @enderror
                            </span>

                        </div>

                        <div class="form-group col-md-6">
                            <label for="location"><span class="text-danger align-middle">* </span>Location:</label>
                            <input type="text" class="form-control" name="address" id="location"
                                placeholder="Location Name">
                                <span class="text-danger">
                                    @error('address')
                                    {{$message}}
                                    @enderror
                                </span>

                        </div>
                    </div>
                    <div class="form-row">
                        

                        <div class="form-group col-md-12">
                            <label for="license_no"><span class="text-danger align-middle">* </span>Driver's License No:</label>
                            <input type="text" class="form-control" name="license_no" id="license_no"
                                placeholder="Enter your License Number">
                                <span class="text-danger">
                                    @error('license_no')
                                    {{$message}}
                                    @enderror
                                </span>

                        </div>
                    </div>
                    <button type="submit" class="btn btn-success d-block ">Submit</button>

                </form>

            </div>
        </div>
    </div>
</section>

<!-- ***** Fleet Ends ***** -->
@endsection
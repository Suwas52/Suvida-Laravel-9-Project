@extends('frontend.master')
@section('main')
<section class="section section-bg" id="call-to-action"
    style="background-image: url({{asset($model->model_thumbnail) }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2>PreBook<em> Now</em></h2>

                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">PreBooking Form</h3>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{ url('/' . $model->model_thumbnail) }}" alt="" class="img-fluid mb-3" width="30%">
                    </div>
                    <div class="detail">
                        <form action="{{route('add.prebook')}}" method="post">
                            @csrf
                            <input type="hidden" name="model_id" id="id" value="{{ $model->id }}" class="form-control">

                            <div class="card shadow ">

                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="text-center">Model: <strong>{{$model->model_name}}</strong></h3>
                                    </div>

                                    <div class="card-body m-4 p-3">

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="firstname"> <span class="text-danger align-middle">* </span>
                                                    <strong>First Name</strong> :</label>
                                                <input type="text" class="form-control" id="firstname"
                                                    placeholder="First Name" name="first_name" >
                                                    @error('first_name')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="lastname"><span class="text-danger align-middle">*
                                                    </span><strong>Last
                                                        Name:</strong> </label>
                                                <input type="text" class="form-control" id="lastname"
                                                    placeholder="Last Name" name="last_name">
                                                    @error('last_name')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="email"><span class="text-danger align-middle">*
                                                    </span><strong>Email:</strong> </label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="Enter Email Address">
                                                    @error('email')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror

                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="phone"><span class="text-danger align-middle">*
                                                    </span><strong>Mobile:</strong> </label>
                                                <input type="tel" class="form-control" id="phone" name="phone_no"
                                                    placeholder="Enter Mobile Number">
                                                    @error('phone_no')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror

                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="datetime-local"><span class="text-danger align-middle">*
                                                    </span><strong>Prebook Date:</strong></label>
                                                <input type="datetime-local" class="form-control" id="datetime-local" name="prebook_time"
                                                    placeholder="Zone Name" required>
                                                    

                                            </div>
                                                
                                            <div class="form-group col">
                                                <label for="color"><span class="text-danger align-middle">*
                                                    </span><strong>Model Color:</strong> </label>
                                      
                                                    <select name="model_color" id="select" class="form-control ">
                                                        <option disabled="" selected="">Model Color</option>
                                                        @php
                                                        $colors= explode("," , $model->model_color)
                                                        @endphp
                                                        
                                                        @foreach($colors as $color)
                    
                                                            <option value="{{$color}}">{{$color}}</option>                   
                    
                                                        @endforeach
                                                        
                                                    </select>
                                                    <span class="text-danger">
                                                        @error('model_color')
                                                        {{$message}}
                                                        @enderror
                                                    </span>

                                            </div>
                                                


                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6 ">
                                                <label for="district"><span class="text-danger align-middle">*
                                                    </span><strong>District:</strong> </label>
                                                <input type="text" class="form-control" id="district" name="district"
                                                    placeholder="District Name">
                                                    <span class="text-danger">
                                                        @error('district')
                                                        {{$message}}
                                                        @enderror
                                                    </span>

                                            </div>
                                            <div class="form-group col-6">
                                                <label for="city"><span class="text-danger align-middle">*
                                                    </span><strong>City:</strong> </label>
                                                <input type="text" class="form-control" id="city" name="city"
                                                    placeholder="City Name">
                                                    <span class="text-danger">
                                                        @error('city')
                                                        {{$message}}
                                                        @enderror
                                                    </span>

                                            </div>

                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6 ">
                                                <label for="zone"><span class="text-danger align-middle">*
                                                    </span><strong>Zone:</strong></label>
                                                <input type="text" class="form-control" id="zone" name="zone"
                                                    placeholder="Zone Name">
                                                    <span class="text-danger">
                                                        @error('zone')
                                                        {{$message}}
                                                        @enderror
                                                    </span>

                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="location"><span class="text-danger align-middle">*
                                                    </span><strong>Location:</strong> </label>
                                                <input type="text" class="form-control" id="location" name="address"
                                                    placeholder="Location Name">
                                                    <span class="text-danger">
                                                        @error('address')
                                                        {{$message}}
                                                        @enderror
                                                    </span>

                                            </div>
                                        </div>
                                            

                                        
                                        <button type="submit" class="btn btn-primary d-block ">Prebook</button>




                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
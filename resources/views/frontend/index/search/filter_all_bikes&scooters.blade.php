@extends('frontend.master')
@section('main')
<!-- ***** Call to Action Start ***** -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/bike-landscape.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">


                    <br>
                    <br>
                    <h2>Filter <em> Bikes <em> and</em> Scooters</em>
                    </h2>



                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->

<!-- ***** Fleet Starts ***** -->
<section class="section" id="trainers">
    <div class="container">
        <div class="row mt-4">
            <!-- upcoming vehicle -->

            <div class="col-lg-3 col-12 card">

                <div class="card-header">
                    <h4 class="text-center">Filter</h4>
                </div>

                <div class="row">
                    <form action="{{route('all.filter')}}" method="post">
                        @csrf


                        <div class="sidebar-widget price_range range mb-30">
                            <div class="price-filter mb-4">
                                <div class="price-filter-inner">
                                    <h5 class="mb-4 text-center">Filter by Price</h5>
                                    <div id="slider-range" class=" mb-2 price-filter-range" data-min="0"
                                        data-max="2000000">
                                    </div>

                                    <input type="hidden" class="form-control input-sm" id="price_range"
                                        name="price_range" value="">
                                    <input type="text" class="form-control input-sm" id="amount"
                                        value="Rs. 0 - Rs. 2000000" readonly="">

                                    <br>

                                    <button type="submit" class="btn btn-sm btn-success ">Filters</button>


                                </div>
                            </div>
                            <div class="list-group">

                                <div class="list-group-item mb-10 mt-10">

                                    <div class="card-header mb-2 p-3"><strong>Brand</strong> </div>

                                    @if(!empty($_GET['brand']))
                                    @php
                                    $filterBrand = explode(',',$_GET['brand']);
                                    @endphp
                                    @endif
                                    <div class="custome-checkbox">
                                        @foreach($brands as $brand)
                                        @php
                                        $model =App\Models\VehicleModel::where('brand_id',$brand->id)->get();
                                        @endphp
                                        <input class="form-check-input " type="checkbox" name="brand[]"
                                            id="exampleCheckbox{{$brand->id}}" value="{{$brand->brand_slug}}"
                                            @if(!empty($filterBrand) && in_array($brand->brand_slug,$filterBrand))
                                        checked @endif
                                        onchange="this.form.submit()">
                                        <label class="form-check-label mb-2"
                                            for="exampleCheckbox{{$brand->id}}"><span>{{$brand->brand_name}}
                                                ({{count($model)}})</span></label>
                                        <br>
                                        @endforeach
                                    </div>


                                </div>
                                <div class="list-group-item mb-10 mt-10">

                                    <div class="card-header mb-2 p-3"> <strong>Vehicle</strong> </div>

                                    @if(!empty($_GET['vehicle']))
                                    @php
                                    $filterVehicle = explode(',',$_GET['vehicle']);
                                    @endphp
                                    @endif
                                    <div class="custome-checkbox">
                                        @foreach($vehicles as $vehicle)
                                        @php
                                        $model =App\Models\VehicleModel::where('vehicle_id',$vehicle->id)->get();
                                        @endphp
                                        <input class="form-check-input " type="checkbox" name="vehicle[]"
                                            id="exampleVehicle{{$vehicle->id}}" value="{{$vehicle->vehicle_slug}}"
                                            @if(!empty($filterVehicle) &&
                                            in_array($vehicle->vehicle_slug,$filterVehicle))
                                        checked @endif
                                        onchange="this.form.submit()">
                                        <label class="form-check-label mb-2"
                                            for="exampleVehicle{{$vehicle->id}}"><span>{{$vehicle->vehicle_name}}
                                                ({{count($model)}})</span></label>
                                        <br>
                                        @endforeach
                                    </div>


                                </div>
                            </div>

                        </div>
                    </form>

                </div>
            </div>

            <!--end upcoming vehicle -->
            <div class="col-lg-9 col-12 ">
                <div class="row">
                    <div class="col-12 card p-3 brand-des">
                        <h5> Brand</h5>
                        @php 
                        $totalModels = App\Models\VehicleModel::count();
                        @endphp
                        
                        <p class="fs-2">There are {{$totalModels}} bikes and scooters currently on sale from various manufacturers starting from 100,821. The most popular products under this bracket are the Yamaha MT 15 V2 (Rs. 4.30Lakh), Hero Splendor Plus (Rs. 286,930) and Yamaha R15 V4 (Rs. 4.07 Lakh) (all prices on-road). To know more about the latest prices of Bikes & Scooters in Nepal in your city, download BikeDekho App & get details on offers, variants, specifications, pictures, mileage, reviews and other details, please select your desired bike from the list below.</p>
                    </div>
                    <hr>
                    <button class="btn btn-link read" style="color:dark-blue;">Read More </button>
                    <div class="col-12 card-header">
                        <div class="row">
                            <div class="col-lg-12">


                                <h5>All</h5>
                            </div>

                        </div>



                    </div>
                    <div class="col-12 card">
                        <div class="row">


                            @foreach($models as $bike)
                            <div class="col-lg-4 mt-2">
                                <div class="trainer-item">
                                    <a href="{{ url('model/details/'.$bike->id.'/'.$bike->model_slug )}}"
                                        class=" image-thumb">
                                        <div><img src="{{asset($bike->model_thumbnail)}}" alt="" /></div>
                                    </a>
                                    <div class="down-content">

                                        <div class="bike_name">
                                            <a class="title" title="Model Name"
                                                href="{{ url('model/details/'.$bike->id.'/'.$bike->model_slug )}}">{{$bike->model_name}}
                                            </a>
                                        </div>
                                        <div class="price">
                                            <p>Rs. {{$bike->price}} </p>
                                        </div>

                                        <p>
                                            <i class="fa fa-dashboard"></i> {{$bike->mileage}} km/hr
                                            &nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-cube"></i> {{$bike->displacement}} cc &nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-cog"></i> {{$bike->emission_type}} &nbsp;&nbsp;&nbsp;
                                        </p>

                                        <ul class="social-icons text-center">

                                            @php 
                                            $user_booking = App\Models\Booking::where('bike_id',$bike->id)->where('user_id',Auth::id())->where('status', 'Pending' )->first();
                                             @endphp
                                            @if($user_booking)
                                            <a @disabled(true)
                                                        class="primaryButton   btn-dcb p-2 text-success" style="border:1px solid green">
                                                        <span class=""><i class="fa fa-cart-circle-check "></i></span>
                                                                Already Booked</a>
                                            
                                                    
                                                   
                                                    @else
                                                    @if($bike['category']['category_name'] == "Upcoming")
                                                    <a href="{{ route('prebook',$bike->id) }}"
                                                        class="primaryButton  btn-dcb p-2"
                                                        style="border:1px solid red"><span><i
                                                                class="fa fa-cart-plus">
                                                            </i>
                                                            PreBook
                                                            Now</a>
                                                    @else
                                                    
                                                    <a href="{{ route('booking',$bike->id) }}"
                                                class="primaryButton  btn-dcb p-2"
                                                style="border:1px solid red"><span><i
                                                        class="fa fa-cart-plus">
                                                    </i>
                                                    Book
                                                    Now</a>
                                                    @endif
                                                    @endif         
    
    
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                    </div>
                </div>

            </div>




        </div>
       
    </div>
</section>
<script >
    let showDes = document.querySelector(".brand-des");
    document.querySelector(".read").onclick = () => {
    showDes.classList.toggle("all-des");
};
</script>
<!-- ***** Fleet Ends ***** -->

<!-- price-range-slider -->
<script type="text/javascript">
$(document).ready(function() {
    if ($('#slider-range').length > 0) {
        const min_price = parseInt($('#slider-range').data('min'));
        const max_price = parseInt($('#slider-range').data('max'));
        let price_range = min_price + "-" + max_price;


        let price = price_range.split('-');



        $("#slider-range").slider({
            range: true,

            min: min_price,
            max: max_price,
            values: price,


            slide: function(event, ui) {

                $("#amount").val('Rs. ' + ui.values[0] + "-" + 'Rs. ' + ui.values[1]);
                $("#price_range").val(ui.values[0] + "-" + ui.values[1]);

            }
        });
    }
})
</script>
@endsection
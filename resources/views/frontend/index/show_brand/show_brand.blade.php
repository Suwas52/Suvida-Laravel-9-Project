@extends('frontend.master')
<style>
    .scrollable-menu {
    height: auto;
    max-height: 150px;
    overflow-x: hidden;
}
</style>
@section('main')
<!-- ***** Call to Action Start ***** -->

<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/bike-landscape.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">


                    <br>
                    <br>
                    <h2> <em>{{$brand->brand_name}}</em><span> Brand</span>
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
            <div class="col-lg-9 col-12 ">
                <div class="row">
                    <div class="col-12 card p-3 brand-des  ">
                        <h5>{{$brand->brand_name}} Brand</h5>
                        <p class="fs-2">{{$brand->description}}</p>
                    </div>
                    <hr>
                    <button  class="btn btn-link read"  style="color:dark-blue;">Read More </button>
                    <div class="col-12 card-header">
                        <div class="row">
                            <div class="col-lg-9">
                                <h5>{{$brand->brand_name}} Bikes and Scooters Series</h5>
                            </div>
                            <div class="col-lg-3">


                              
                        

                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Change Brand
                            </button>
                            <div class="dropdown-menu scrollable-menu" aria-labelledby="dropdownMenuButton">
                                @if(count($brands) >0)
                                    @foreach($brands as $brand)
                                    <a class="dropdown-item" href="{{ url('/brand/'.$brand->id.'/'.$brand->brand_slug )}}">{{$brand->brand_name}}</a>
                                     @endforeach
                                @endif
                            </div>
                          </div>
                        

                                

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
                                            <a href="{{ route('booking',$bike->id) }}"
                                                class="primaryButton  btn-dcb p-2" style="border:1px solid red"><span><i
                                                        class="fa fa-cart-plus"> </i>
                                                    Book
                                                    Now</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                    </div>
                </div>

            </div>

            <!-- upcoming vehicle -->

            <div class="col-lg-3 col-12 card">

                <div class="card-header text-center">
                    <h5><strong>Upcoming Bike </strong></h5>
                </div>
                <div class="row">

                    @foreach($model_Upcoming as $bike)
                    <div class=" col-lg-10 m-3">
                        <div class="trainer-item">
                            <a href="{{ url('model/details/'.$bike->id.'/'.$bike->model_slug )}}" class=" image-thumb">
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

                                @php 
                                $prebookSetup = App\Models\PrebookSetup::where('model_id',$bike->id)->first();
                                @endphp
                                @if($prebookSetup )
                                <p>Expected Launch: {{$prebookSetup->launch_date}}
                                </p>
                                @else
                                @endif

                                <ul class="social-icons text-center">
                                    <a href="{{ route('booking',$bike->id) }}" class="primaryButton  btn-dcb p-2"
                                        style="border:1px solid red"><span><i class="fa fa-cart-plus"> </i>
                                            Pre Booking
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!--end upcoming vehicle -->


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
@endsection
<section class="section" id="trainers">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">

                    <h2>
                        <em> Bikes</em> in Spotlight
                    </h2>

                    <hr>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card-shadow">
                    <div class="card-header">
                        <div class="nav">
                            <ul class="nav nav-tabs justify-content-center " role="presentation">
                                <li class="ul-bike nav-item">
                                    <a href="#bike" data-bs-toggle="tab" id="bike-tab" role="tab" aria-controls="bike"
                                        area-selected="true" class="nav-link active">Most Popular</a>
                                </li>
                                <li class="ul-bike nav-item">
                                    <a href="#sport" data-bs-toggle="tab" id="sport-tab" role="tab"
                                        aria-controls="sport" area-selected="true" class="nav-link">Sports Bikes</a>
                                </li>
                                <li class="ul-bike nav-item">
                                    <a href="#mileage" data-bs-toggle="tab" id="mileage-tab" role="tab"
                                        aria-controls="mileage" area-selected="true" class="nav-link">Best Mileage
                                        Bikes</a>
                                </li>
                                <li class="ul-bike nav-item">
                                    <a href="#cruiser" data-bs-toggle="tab" id="cruiser-tab" role="tab" aria-controls="cruiser"
                                        area-selected="true" class="nav-link">Cruiser Bikes</a>
                                </li>
                                <li class="ul-bike nav-item">
                                    <a href="#commuter" data-bs-toggle="tab" id="commuter-tab" role="tab" aria-controls="commuter"
                                        area-selected="true" class="nav-link">Commuter Bikes</a>
                                </li>
                                <li class="ul-bike nav-item">
                                    <a href="#offRoad" data-bs-toggle="tab" id="offRoad-tab" role="tab" aria-controls="offRoad"
                                        area-selected="true" class="nav-link">Off Road Bikes</a>
                                </li>
                                <li class="ul-bike nav-item">
                                    <a href="#upcoming" data-bs-toggle="tab" id="upcoming-tab" role="tab" aria-controls="upcoming"
                                        area-selected="true" class="nav-link">Upcoming Bikes</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabControl">
                        <div class="tab-pane fade show active" role="tab-pane" id="bike" aria-labelledby="bike-tab">
                            <div class="col-12 card">
                                
                                <div class="row">

                                    <div class=" swiper card_slider">
                                        <div class="swiper-wrapper mt-4">
                                            @foreach($popular_bikes as $bike)
                                            <div class="col-lg-3 mt-2 swiper-slide ">
                                                <div class="trainer-item">
                                                    <a href="{{ url('model/details/'.$bike->id.'/'.$bike->model_slug )}}"
                                                        class=" image-thumb">
                                                        <div><img src="{{asset($bike->model_thumbnail)}}" alt="" />
                                                        </div>
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
                                                            <i class="fa fa-cube"></i> {{$bike->displacement}} cc
                                                            &nbsp;&nbsp;&nbsp;
                                                            <i class="fa fa-cog"></i> {{$bike->emission_type}}
                                                            &nbsp;&nbsp;&nbsp;
                                                        </p>

                                                        <ul class="social-icons text-center">
                                                            @if($bike['category']['category_name'] == "Upcoming")
                                                            <h1>pre booking</h1>
                                                            @else
                                                            
                                                            <a href="{{ route('booking',$bike->id) }}"
                                                                class="primaryButton  btn-dcb p-2"
                                                                style="border:1px solid red"><span><i
                                                                        class="fa fa-cart-plus">
                                                                    </i>
                                                                    Book
                                                                    Now</a>
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

                        <div class=" tab-pane fade show " role=" tab-pane" id="sport" aria-labelledby="sport-tab">
                            <div class="col-12 card">
                               
                                <div class="row">

                                    <div class=" swiper card_slider">
                                        <div class="swiper-wrapper mt-4">
                                            @foreach($sport as $bike)
                                            <div class="col-lg-3 mt-2 swiper-slide">
                                                <div class="trainer-item">
                                                    <a href="{{ url('model/details/'.$bike->id.'/'.$bike->model_slug )}}"
                                                        class=" image-thumb">
                                                        <div><img src="{{asset($bike->model_thumbnail)}}" alt="" />
                                                        </div>
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
                                                            <i class="fa fa-cube"></i> {{$bike->displacement}} cc
                                                            &nbsp;&nbsp;&nbsp;
                                                            <i class="fa fa-cog"></i> {{$bike->emission_type}}
                                                            &nbsp;&nbsp;&nbsp;
                                                        </p>

                                                        <ul class="social-icons text-center">
                                                            <a href="{{ route('booking',$bike->id) }}"
                                                                class="primaryButton  btn-dcb p-2"
                                                                style="border:1px solid red"><span><i
                                                                        class="fa fa-cart-plus">
                                                                    </i>
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
                        </div>

                        <div class="tab-pane fade show " role="tab-pane" id="mileage" aria-labelledby="mileage-tab">
                            <div class="col-12 card">
                                
                                
                                <div class="row">

                                    <div class=" swiper card_slider">
                                        <div class="swiper-wrapper mt-4">
                                            @foreach($best_mileage as $bike)
                                            <div class="col-lg-3 mt-2 swiper-slide">
                                                <div class="trainer-item">
                                                    <a href="{{ url('model/details/'.$bike->id.'/'.$bike->model_slug )}}"
                                                        class=" image-thumb">
                                                        <div><img src="{{asset($bike->model_thumbnail)}}" alt="" />
                                                        </div>
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
                                                            <i class="fa fa-cube"></i> {{$bike->displacement}} cc
                                                            &nbsp;&nbsp;&nbsp;
                                                            <i class="fa fa-cog"></i> {{$bike->emission_type}}
                                                            &nbsp;&nbsp;&nbsp;
                                                        </p>

                                                        <ul class="social-icons text-center">
                                                            <a href="{{ route('booking',$bike->id) }}"
                                                                class="primaryButton  btn-dcb p-2"
                                                                style="border:1px solid red"><span><i
                                                                        class="fa fa-cart-plus">
                                                                    </i>
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
                        </div>
                        <!-- end div -->

                        <div class="tab-pane fade show" role="tab-pane" id="cruiser" aria-labelledby="cruiser-tab">
                            <div class="col-12 card">

                                <div class="row">

                                    <div class=" swiper card_slider">
                                        <div class="swiper-wrapper mt-4">
                                            @foreach($cruiser as $bike)
                                            <div class="col-lg-3 mt-2 swiper-slide">
                                                <div class="trainer-item">
                                                    <a href="{{ url('model/details/'.$bike->id.'/'.$bike->model_slug )}}"
                                                        class=" image-thumb">
                                                        <div><img src="{{asset($bike->model_thumbnail)}}" alt="" />
                                                        </div>
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
                                                            <i class="fa fa-cube"></i> {{$bike->displacement}} cc
                                                            &nbsp;&nbsp;&nbsp;
                                                            <i class="fa fa-cog"></i> {{$bike->emission_type}}
                                                            &nbsp;&nbsp;&nbsp;
                                                        </p>

                                                        <ul class="social-icons text-center">
                                                            <a href="{{ route('booking',$bike->id) }}"
                                                                class="primaryButton  btn-dcb p-2"
                                                                style="border:1px solid red"><span><i
                                                                        class="fa fa-cart-plus">
                                                                    </i>
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
                        </div>

                        <div class="tab-pane fade show" role="tab-pane" id="commuter" aria-labelledby="commuter-tab">
                            <div class="col-12 card">

                                <div class="row">

                                    <div class=" swiper card_slider">
                                        <div class="swiper-wrapper mt-4">
                                            @foreach($commuter as $bike)
                                            <div class="col-lg-3 mt-2 swiper-slide">
                                                <div class="trainer-item">
                                                    <a href="{{ url('model/details/'.$bike->id.'/'.$bike->model_slug )}}"
                                                        class=" image-thumb">
                                                        <div><img src="{{asset($bike->model_thumbnail)}}" alt="" />
                                                        </div>
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
                                                            <i class="fa fa-cube"></i> {{$bike->displacement}} cc
                                                            &nbsp;&nbsp;&nbsp;
                                                            <i class="fa fa-cog"></i> {{$bike->emission_type}}
                                                            &nbsp;&nbsp;&nbsp;
                                                        </p>

                                                        <ul class="social-icons text-center">
                                                            <a href="{{ route('booking',$bike->id) }}"
                                                                class="primaryButton  btn-dcb p-2"
                                                                style="border:1px solid red"><span><i
                                                                        class="fa fa-cart-plus">
                                                                    </i>
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
                        </div>

                        <div class="tab-pane fade show" role="tab-pane" id="offRoad" aria-labelledby="offRoad-tab">
                            <div class="col-12 card">
                                <div class="row">

                                    <div class=" swiper card_slider">
                                        <div class="swiper-wrapper mt-4">
                                            @foreach($off_road as $bike)
                                            <div class="col-lg-3 mt-2 swiper-slide">
                                                <div class="trainer-item">
                                                    <a href="{{ url('model/details/'.$bike->id.'/'.$bike->model_slug )}}"
                                                        class=" image-thumb">
                                                        <div><img src="{{asset($bike->model_thumbnail)}}" alt="" />
                                                        </div>
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
                                                            <i class="fa fa-cube"></i> {{$bike->displacement}} cc
                                                            &nbsp;&nbsp;&nbsp;
                                                            <i class="fa fa-cog"></i> {{$bike->emission_type}}
                                                            &nbsp;&nbsp;&nbsp;
                                                        </p>

                                                        <ul class="social-icons text-center">
                                                            <a href="{{ route('booking',$bike->id) }}"
                                                                class="primaryButton  btn-dcb p-2"
                                                                style="border:1px solid red"><span><i
                                                                        class="fa fa-cart-plus">
                                                                    </i>
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
                        </div>
                        <div class="tab-pane fade show" role="tab-pane" id="upcoming" aria-labelledby="upcoming-tab">
                            <div class="col-12 card">
                                <div class="row">

                                    <div class=" swiper card_slider">
                                        <div class="swiper-wrapper mt-4">
                                            @foreach($Upcoming_bike as $bike)
                                            <div class="col-lg-3 mt-2 swiper-slide">
                                                <div class="trainer-item">
                                                    <a href="{{ url('model/details/'.$bike->id.'/'.$bike->model_slug )}}"
                                                        class=" image-thumb">
                                                        <div><img src="{{asset($bike->model_thumbnail)}}" alt="" />
                                                        </div>
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
                                                            <i class="fa fa-cube"></i> {{$bike->displacement}} cc
                                                            &nbsp;&nbsp;&nbsp;
                                                            <i class="fa fa-cog"></i> {{$bike->emission_type}}
                                                            &nbsp;&nbsp;&nbsp;
                                                        </p>

                                                        <ul class="social-icons text-center">
                                                            <a href="{{ route('booking',$bike->id) }}"
                                                                class="primaryButton  btn-dcb p-2"
                                                                style="border:1px solid red"><span><i
                                                                        class="fa fa-cart-plus">
                                                                    </i>
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
                        </div>
                    </div>


                </div>
            </div>


        </div>

        <br />

        <div class="main-button text-center">
            <a href="{{route('all.filter.bikes&scooters')}}">All
                Bikes and Scooters
            </a>
        </div>
    </div>
</section>
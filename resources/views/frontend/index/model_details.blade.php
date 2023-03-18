@extends('frontend.master')
@section('main')

<style>
/* rating */
.rating-css div {
    color: #ffe400;
    font-size: 20px;
    font-family: sans-serif;
    font-weight: 800;
    text-align: center;
    text-transform: uppercase;
    padding: 20px 0;
    height: 100px;
    width: 200px;
    margin-left: 105px;
}

.rating-css input {
    display: none;
}

.rating-css input+label {
    font-size: 30px;
    text-shadow: 2px 1px 0 #8f8420;
    cursor: pointer;
}

.rating-css input:checked+label~label {
    color: #b4afaf;
}

.rating-css label:active {
    transform: scale(0.8);
    transition: 0.3s ease;
}
</style>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('add.rating')}}" method="post">
                @csrf

                <input type="hidden" value="{{$models->id}}" name="model_id">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Rates this {{$models->model_name}}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="rating-css">
                        <div class="star-icon">
                            @if($user_rating)
                            @for($i =1; $i<=$user_rating->stars_rated; $i++)
                                <input type="radio" value="{{$i}}" name="product_rating" checked id="rating{{$i}}">
                                <label for="rating{{$i}}" class="fa fa-star"></label>
                                @endfor
                                @for($j = $user_rating->stars_rated+1; $j<=5; $j++) <input type="radio" value="{{$j}}"
                                    name="product_rating" id="rating{{$j}}">
                                    <label for="rating{{$j}}" class="fa fa-star"></label>
                                    @endfor


                                    @else
                                    <input type="radio" value="1" name="product_rating" checked id="rating1">
                                    <label for="rating1" class="fa fa-star"></label>
                                    <input type="radio" value="2" name="product_rating" id="rating2">
                                    <label for="rating2" class="fa fa-star"></label>
                                    <input type="radio" value="3" name="product_rating" id="rating3">
                                    <label for="rating3" class="fa fa-star"></label>
                                    <input type="radio" value="4" name="product_rating" id="rating4">
                                    <label for="rating4" class="fa fa-star"></label>
                                    <input type="radio" value="5" name="product_rating" id="rating5">
                                    <label for="rating5" class="fa fa-star"></label>
                                    @endif



                                    <p class="span">Your rating</p>

                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary " value="Submit" />
                </div>
            </form>
        </div>
    </div>
</div>

<!-- End Modal -->

<!-- ***** Call to Action Start ***** -->
<section class="section section-bg" id="call-to-action"
    style="background-image: url({{asset($models->model_thumbnail) }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br />
                    <br />
                    <br>
                    <br>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->

<!-- ***** Fleet Starts ***** -->
<section class="section" id="trainers">
    <div class="container model_data">
        <div class="nav-bike ">
            <ul class="nav nav-tabs justify-content-center " role="presentation">
                <li class="ul-bike nav-item">
                    <a href="#bike" data-bs-toggle="tab" id="bike-tab" role="tab" aria-controls="bike"
                        area-selected="true" class="nav-link active">Bike</a>
                </li>
                <li class="ul-bike nav-item">
                    <a href="#price" data-bs-toggle="tab" id="price-tab" role="tab" aria-controls="price"
                        area-selected="true" class="nav-link">Price</a>
                </li>
                <li class="ul-bike nav-item">
                    <a href="#offer" data-bs-toggle="tab" id="offer-tab" role="tab" aria-controls="offer"
                        area-selected="true" class="nav-link">Booking</a>
                </li>
                <li class="ul-bike nav-item">
                    <a href="#specs" data-bs-toggle="tab" role="tab" aria-controls="specs" area-selected="true"
                        class="nav-link">Specs</a>
                </li>
                <li class="ul-bike nav-item">
                    <a href="#review" data-bs-toggle="tab" role="tab" aria-controls="review" area-selected="true"
                        class="nav-link">Review</a>
                </li>
            </ul>
            <ul class="nav p-0">
                <li class="ul-bike " style="font-size: 13px;  ">
                    <a href="" style=" color:black;">Home <span>></span></a>
                </li>





                <li class="ul-bike " style="font-size: 13px;">
                    <a href="" style=" color:black;">{{$models['brand']['brand_name']}} <span>></span></a>
                </li>

            </ul>
            <hr>
            <div class="tab-content" id="myTabControl">
                <div class="tab-pane fade show active" role="tab-pane" id="bike" aria-labelledby="bike-tab">
                    <div class="d-flex">
                        <div class="row justify-content-start"
                            style="max-height: 400px; width: 400px; margin-left: 20px; margin-bottom: 20px;">

                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">

                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{asset($models->model_thumbnail)}}"
                                            alt="First slide" />
                                    </div>
                                    @foreach( $multiImg as $multiImgs)
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset($multiImgs->photo_name)}}"
                                            alt="Second slide" />
                                    </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            <br />
                            <br />
                        </div>
                        <div class="row justify-content-center"
                            style="max-height: 400px; width: 400px; margin-left: 20px; margin-bottom: 20px">
                            <div class=" bike-content" style="padding: 20px; margin: 10px; line-height: 40px;">


                                <h5> <strong>{{$models->model_name}}</strong> </h5>

                                <div class="span">
                                    <span style="color:rgb(199, 80, 25)">Rs.
                                        {{$models->price}}
                                    </span>

                                    @php
                                    $ratedNo = number_format($rating_value);
                                    @endphp
                                    <div class="rating">
                                        @for($i =1; $i<=$ratedNo; $i++) <i class="fa fa-star checked"></i>

                                            @endfor
                                            @for($j = $ratedNo+1; $j<=5; $j++) <i class="fa fa-star"></i>@endfor

                                                <span>{{$ratings->count() }} Rating</span>
                                    </div>



                                    <ul class="social-icons mt-2">
                                        <span class="primaryButton  btn-dcb p-2"
                                            style="background-color: #d02f2f; color:#fff">View February
                                            Offers</span>


                                    </ul>
                                </div>
                                <div class="short-desc">
                                    <span>Don't miss out on the best offers this February</span>
                                </div>
                            </div>
                        </div>

                        <div class=" row justify-content-end ">

                            <div class=" font"
                                style="background-color:#e9e9e9 ;height: 38px; width:39px; border-radius: 50% ; margin-top:22px; margin-left:10px">
                                <span class="" style=" justify-content: center; ">

                                    @php
                                    $user_fav =
                                    App\Models\Wishlist::where('model_id',$models->id)->where('user_id',Auth::id())->first();
                                    @endphp


                                    @if(!$user_fav)
                                    <form action="{{route('add.wishlist')}}" method="post">
                                        @csrf

                                        @auth
                                        <input type="hidden" name="model_id" value="{{ $models->id }}">
                                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                        @endauth

                                        <button type="submit" style="border-radius:50%" class="btn btn-primary ">

                                            <i class=" fa-regular fa-heart  "></i>
                                        </button>

                                    </form>
                                    @else
                                    <a href="" style="border-radius:50%" class="btn btn-primary ">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                    @endif

                                </span>

                            </div>
                        </div>


                    </div>

                </div>

                <div class=" tab-pane fade show " role=" tab-pane" id="price" aria-labelledby="price-tab">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="d-flex justfly-content-starts p-2">
                                <img src="{{asset($models->model_thumbnail) }}" style="height: 15rem;" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class=" bike-content" style="padding: 20px; margin: 10px; line-height: 30px;">


                                <h5>On Road Price of <strong>{{$models->model_name}}</strong>
                                </h5>
                                <hr>
                                <div class="span" style="color:rgb(199, 80, 25)">
                                    <span>Rs.
                                        <del>3,99,900 </del> &nbsp; 3,59,900
                                    </span>
                                </div>


                                <p>
                                    <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;
                                    <i class="fa fa-cube"></i> 1800 cc &nbsp;&nbsp;&nbsp;
                                    <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade show " role="tab-pane" id="offer" aria-labelledby="offer-tab">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="d-flex justfly-content-starts p-2">
                                <img src="{{asset($models->model_thumbnail) }}" style="height: 15rem;" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class=" bike-content" style="padding: 20px; margin: 10px; line-height: 40px;">

                                <h5> <strong>{{$models->model_name}}</strong> </h5>

                                <div class="span" style="color:rgb(199, 80, 25)">
                                    <ul class="social-icons mt-2">
                                        @if($models['category']['category_name'] == "Upcoming")
                                        <a href="{{ route('prebook',$models->id) }}"
                                            class="primaryButton  btn-dcb p-2"
                                            style="border:1px solid red"><span><i
                                                    class="fa fa-cart-plus">
                                                </i>
                                                PreBook
                                                Now</a>
                                        @else
                                        
                                        <a href="{{ route('booking',$models->id) }}"
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
                    </div>
                </div>
                <!-- end div -->


                <div class="tab-pane fade show" role="tab-pane" id="specs" aria-labelledby="specs-tab">
                    <div class="row" id="tab">
                        <div class="col-lg-4">
                            <ul>

                                <li>
                                    <a href="#tabs-1"><i class="fa fa-cog"></i>
                                        Engine </a>
                                </li>
                                <li>
                                    <a href="#tabs-2"><i class="fa fa-plus-circle"></i>
                                        Safety</a>
                                </li>
                                <li>
                                    <a href="#tabs-3"><i class="fa fa-info-circle"></i>
                                        Performance</a>
                                </li>
                                <li>
                                    <a href="#tabs-4"><i class="fa-solid fa-weight-scale"></i>
                                        Dimensions </a>
                                </li>
                                <li>
                                    <a href="#tabs-5"><i class="fa-sharp fa-solid fa-bolt"></i>
                                        Electricals</a>
                                </li>
                                <li>
                                    <a href="#tabs-6"><i class="fa-solid fa-shield"></i>
                                        Tyres and Brakes</a>
                                </li>
                                <li>
                                    <a href="#tabs-7"><i class="fa-solid fa-arrow-up-wide-short"></i>
                                        Underpinnings</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-8">
                            <section class="tabs-content" style="width: 100%">
                                <article id="tabs-1">
                                    <h4>Engine and Transmission</h4>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Engine Type</label>

                                            <p>{{$models->engine_type}}</p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Displacement</label>

                                            <p>{{$models->displacement}}<span> CC
                                                </span> </p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label> Max Power</label>

                                            <p>{{$models->max_power}}</p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Max Torque</label>

                                            <p>{{$models->max_torque}}</p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Mileage</label>

                                            <p>{{$models->mileage}} <span> KMpl</span></p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Emission Type</label>

                                            <p>{{$models->emission_type}} </p>

                                        </div>

                                        <div class="col-sm-6">
                                            <label>Braking Type</label>

                                            <p>{{$models->braking_type}} </p>
                                        </div>


                                        <div class="col-sm-6">
                                            <label>ABS</label>

                                            <p>{{$models->abs}}</p>
                                        </div>


                                    </div>
                                </article>
                                <article id="tabs-2">
                                    <h4>Features and Safety</h4>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Speedometer</label>

                                            <p>{{$models->speedometer}}</p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Tripmeter</label>

                                            <p>{{$models->tripmeter}}<span>
                                                </span> </p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Odometer</label>

                                            <p>{{$models->odometer}}</p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Techometer </label>

                                            <p>{{$models->techometer }}</p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Seat Type</label>

                                            <p>{{$models->seat_type}} </p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Riding Mode </label>

                                            <p>{{$models->riding_mode}} </p>

                                        </div>

                                        <div class="col-sm-6">
                                            <label> Rain Mode</label>

                                            <p>{{$models->rain_mode}} </p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Braking Type</label>

                                            <p>{{$models->braking_type}}</p>
                                        </div>

                                    </div>
                                </article>
                                <article id="tabs-3">
                                    <h4>Mileage and Performance</h4>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Mileage </label>

                                            <p>{{$models->mileage}}</p>
                                        </div>


                                        <div class="col-sm-6">
                                            <label>Top Speed </label>

                                            <p>{{$models->top_speed}} <span> KM/H</span></p>
                                        </div>


                                    </div>
                                </article>
                                <article id="tabs-4">
                                    <h4>Dimensions and Capacity</h4>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Fuel Capacity</label>

                                            <p>{{$models->fuel_capacity}}</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Width</label>

                                            <p>{{$models->width}}</p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Weight </label>

                                            <p>{{$models->weight}}</p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Length</label>

                                            <p>{{$models->length}}</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Height</label>

                                            <p>{{$models->height}}</p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Saddle Height</label>

                                            <p>{{$models->saddle_height}}</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Ground Clearance </label>

                                            <p>{{$models->ground_clearance}}</p>
                                        </div>
                                    </div>
                                </article>
                                <article id="tabs-5">
                                    <h4>Electricals</h4>
                                    <div class="row">

                                        <div class="col-sm-6">
                                            <label>Headlight</label>

                                            <p>{{$models->headlight}}</p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Tail Light</label>

                                            <p>{{$models->tail_light}}</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Tail Light</label>

                                            <p>{{$models->brake_front}}</p>
                                        </div>

                                    </div>
                                </article>
                                <article id="tabs-6">
                                    <h4>Tyres and Brakes</h4>
                                    <div class="row">

                                        <div class="col-sm-6">
                                            <label>Front Brake</label>

                                            <p>{{$models->brake_front}}</p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Rear Brake</label>

                                            <p>{{$models->brake_rear}}</p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Front Tyre </label>

                                            <p>{{$models->tyre_front}}</p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Rear Tyre </label>

                                            <p>{{$models->tyre_rear}}</p>
                                        </div>

                                    </div>

                                </article>
                                <article id="tabs-7">
                                    <h4>Underpinnings</h4>

                                    <div class="row">

                                        <div class="col-sm-6">
                                            <label>Suspension Front </label>

                                            <p>{{$models->suspension_front}}</p>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Suspension Rear </label>

                                            <p>{{$models->suspension_rear}}</p>
                                        </div>



                                    </div>

                                </article>
                            </section>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade show" role="tab-pane" id="review" aria-labelledby="review-tab">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="d-flex justfly-content-starts p-2">
                                <img src="{{asset($models->model_thumbnail) }}" style="height: 15rem;" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class=" bike-content" style="padding: 20px; margin: 10px; line-height: 30px;">




                                <h4> <strong>{{$models->model_name}}</strong> </h4>
                                <hr>
                                <div class="rating">
                                    @for($i =1; $i<=$ratedNo; $i++) <i class="fa fa-star checked"></i>

                                        @endfor
                                        @for($j = $ratedNo+1; $j<=5; $j++) <i class="fa fa-star"></i>@endfor

                                            <span>{{$ratings->count() }} Rating</span>
                                </div>


                                <div class="col-md-6">

                                </div>










                            </div>
                        </div>

                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-4">
                            <button type="button" class="btn btn-link" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Rating this {{$models['vehicle']['vehicle_name']}}
                            </button>
                            <a href="{{url('/add-review/'.$models->model_slug)}}">
                                Review this {{$models['vehicle']['vehicle_name']}}
                            </a>

                        </div>
                        <div class="col-lg-8">
                            <div class="user-review">
                                @foreach($reviews as $review)
                                <label for="">{{$review['user']['name']}}</label>
                                @if($review->user_id== Auth::id())
                                <a href="{{ url('/edit-review/'.$models->id.'/'.$models->model_slug)}}"><i
                                        class="fa-solid fa-pen-to-square text-info"></i></a>

                                <a href="{{route('delete.review',$review->id)}}">
                                    <i class="fa-solid fa-trash text-danger"></i>
                                </a>
                                @endif
                                <br>
                                @php
                                $rating =
                                App\Models\Rating::where('model_id',$models->id)->where('user_id',$review['user']['id'])->first();
                                @endphp
                                @if($rating)
                                @php
                                $ratedNo =$rating->stars_rated;
                                @endphp
                                @for($i =1; $i<=$ratedNo; $i++) <i class="fa fa-star checked"></i> @endfor
                                    @for($j = $ratedNo+1; $j<=5; $j++) <i class="fa fa-star"></i>@endfor
                                        @endif
                                        <small>Review on {{$review->created_at->format('d M Y')}}</small>
                                        <p>{{$review->user_review}}</p>
                                        @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ***** Fleet Ends ***** -->

@endsection
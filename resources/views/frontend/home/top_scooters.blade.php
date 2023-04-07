<section class="section" id="trainers">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>{{$category_3->category_name}} <em>{{$category_3['vehicle']['vehicle_name']}}</em></h2>
                    <hr>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card shadow swiper card_slider">
                <div class="swiper-wrapper mt-4">
                    

                        @foreach($category_3_model as $bike)
                        <div class="col-lg-3 swiper-slide ">
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

                                    <p>
                                        <i class="fa fa-dashboard"></i> {{$bike->mileage}} km/hr &nbsp;&nbsp;&nbsp;
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
                                                <a href="{{ route('booking',$bike->id) }}"
                                                    class="primaryButton  btn-dcb p-2"
                                                    style="border:1px solid red"><span><i
                                                            class="fa fa-cart-plus">
                                                        </i></span> 
                                                        Book
                                                        Now</a>
                                                @endif         


                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                </div>
                <div id="sp" class=" swiper-button-next"></div>
                <div id="sp" class=" swiper-button-prev"></div>
            </div>
            
        </div>


        <br />

        <div class="main-button text-center">
            <a href="{{ url('vehicle/'.$category_3->id.'/'.$category_3->category_slug )}}">All
                {{$category_3->category_name}}
                {{$category_3['vehicle']['vehicle_name']}}</a>
        </div>
    </div>
</section>
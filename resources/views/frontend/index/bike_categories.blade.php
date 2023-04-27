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
                    @foreach($categories as $category)

                    <br>
                    <br>
                    <h2>Our Range Of <em>{{$category->category_name}}</em>
                        <span> {{$category['vehicle']['vehicle_name']}}</span>
                    </h2>

                    @endforeach

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
            <div class="col-lg-12 col-12 ">
                <div class="row">
                    <div class="col-12 card p-3 brand-des  ">
                        <h5 class=" mb-3">{{$category->category_name}} {{$category['vehicle']['vehicle_name']}} in Nepal</h5>
                        <p class="fs-2">{{$category->description}}</p>
                    </div>
                    <hr>
                    <button  class="btn btn-link read"  style="color:dark-blue;">Read More </button>
                    <div class="col-12 card-header">
                        <div class="row">
                            <div class="col-lg-9 mb-3">
                                <h5>{{$category->category_name}}  {{$category['vehicle']['vehicle_name']}}</h5>
                            </div>
                            <div class="col-lg-3">


                              
                        

                        



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

                    </div>
                </div>

            </div>

            <!-- upcoming vehicle -->

            
            
        </div>

        <!--end upcoming vehicle -->

        <br>

        <nav>
            <ul class="pagination pagination-lg justify-content-center">
                
               {{$models->links()}}
                
            </ul>
        </nav>


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
@extends('frontend.master')
@section('main')
<!-- ***** Call to Action Start ***** -->
<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/bike-landscape.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">


                </div>
            </div>
        </div>
    </div>
</section>


<!-- ***** Call to Action End ***** -->

<!-- ***** Fleet Starts ***** -->
<section class="section" id="trainers">
    <div class="container">



        <div class="row">
            @foreach($models as $bike)
            <div class="col-lg-3">
                <div class="trainer-item">
                    <a href="{{ url('model/details/'.$bike->id.'/'.$bike->model_slug )}} class=" image-thumb">
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
                            <a href="{{ route('booking',$bike->id) }}" class="primaryButton  btn-dcb p-2"
                                style="border:1px solid red"><span><i class="fa fa-cart-plus"> </i> Book Now</a>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <br>

        <nav>
            <ul class="pagination pagination-lg justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>

    </div>
</section>
<!-- ***** Fleet Ends ***** -->
@endsection
@extends('frontend.master')
@section('main')

<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/bike-landscape.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2>Compared Bikes <em>Specification</em></h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Specification start -->
<div class="spec-text">
    <h1>Specifications</h1>
</div>
<div class="container">
    <div class="card shadow">


        <div class="card body">
            <table class="table table-borderless m-3">
                <thead>
                    <tr>
                        <th scope="col"><i class=" fa-solid fa-motorcycle"></i>
                            <strong>Basic Informations</strong>
                        </th>
                        <th scope="col">{{$models_1->model_name}}</th>
                        <th scope="col">{{$models_2->model_name}}</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Model Image</th>
                        <td><img src="{{asset($models_1->model_thumbnail)}}" alt="" width="100"></td>
                        <td><img src="{{asset($models_2->model_thumbnail)}}" alt="" width="100"></td>
                    </tr>
                    <tr>
                        <th>On Road Price</th>
                        <td>Rs. {{$models_1->price}}</td>
                        <td>Rs. {{$models_2->price}}</td>
                    </tr>

                    <tr>
                        <th>Mileage</th>
                        <td>{{$models_1->mileage}} kmpl</td>
                        <td>{{$models_2->mileage}} kmpl</td>
                    </tr>


                    <tr>
                        <th scope="row">User Rating</th>

                        <td>
                            @php
                            $ratedNo = number_format($rating_value_model_1,1);
                            @endphp
                            <div class="rating">
                                <p></p>{{ $ratedNo}}
                                @for($i =1; $i<=$ratedNo; $i++) <i class="fa fa-star checked"></i>

                                    @endfor
                                    @for($j = $ratedNo+1; $j<=5; $j++) <i class="fa fa-star"></i>@endfor
                                        @if($reviews_count>0)
                                        <small>{{$reviews_count}} Reviews</small>
                                        @else
                                        <small>No Reviews</small>
                                        @endif
                            </div>
                        </td>
                        <td>
                            @php
                            $ratedNo2 = number_format($rating_value_models_2,1);
                            @endphp
                            <div class="rating">
                                <p></p>{{ $ratedNo2}}
                                @for($i =1; $i<=$ratedNo2; $i++) <i class="fa fa-star checked"></i>

                                    @endfor
                                    @for($j = $ratedNo2+1; $j<=5; $j++) <i class="fa fa-star"></i>@endfor
                                        @if($reviews_count2>0)
                                        <small>{{$reviews_count2}} Reviews</small>
                                        @else
                                        <small>No Reviews</small>
                                        @endif
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Colours</th>
                        <td>
                            <span class="dot1"></span>
                            <span class="dot2"></span>
                            <span class="dot3"></span>
                        </td>
                        <td>
                            <span class="dot4"></span>
                            <span class="dot5"></span>
                            <span class="dot6"></span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Body Type</th>
                        <td>Sports Bike</td>
                        <td>Sports Bike</td>
                    </tr>

                    <tr>
                        <th scope="col"><i class="fa fa-cog"></i> <strong>Engine & Transmission</strong> </th>

                    </tr>
                    <tr>
                        <th scope="row">Engine Type</th>
                        <td>
                            {{$models_1->engine_type}}</td>
                        <td>
                            {{$models_2->engine_type}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Displacement</th>
                        <td>
                            {{$models_1->displacement}}</td>
                        <td>
                            {{$models_2->displacement}}</td>

                    </tr>
                    <tr>
                        <th scope="row">Max Power</th>
                        <td>{{$models_1->max_power}}</td>
                        <td>{{$models_2->max_power}}</td>

                    </tr>
                    <tr>
                        <th scope="row">Max Torque</th>
                        <td>{{$models_1->max_torque}}</td>
                        <td>{{$models_2->max_torque}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Cooling System</th>
                        <td>Air Cooled</td>
                        <td>Air Cooled</td>
                    </tr>

                </tbody>
                <thead>
                    <tr>
                        <th scope="col"><i class="fa fa-plus-circle"></i> <strong>Safety and Features</strong> </th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Speedometer</th>
                        <td> Digital</td>
                        <td> Digital</td>
                    </tr>
                    <tr>
                        <th scope="row">Tachometer</th>
                        <td>Digital</td>
                        <td>Digital</td>

                    </tr>
                    <tr>
                        <th scope="row">Odometer</th>
                        <td>Digital</td>
                        <td>Digital</td>
                    </tr>
                    <tr>
                        <th scope="row">Tripmeter</th>
                        <td>Digital</td>
                        <td>Digital</td>
                    </tr>
                    <tr>
                        <th scope="row">Fuel Gauge</th>
                        <td>Digital</td>
                        <td>Digital</td>
                    </tr>
                    <tr>
                        <th scope="row">Riding Modes</th>
                        <td><i class="fa fa-check" style="font-size:24px;color: green"></i></td>
                        <td></td>
                    </tr>

            </table>
        </div>
    </div>
</div>



@endsection
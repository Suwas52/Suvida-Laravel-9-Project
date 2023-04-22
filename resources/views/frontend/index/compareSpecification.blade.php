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
            <table class="table table-borderless m-3 compare-table">
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
                        <th scope="row">Colors</th>
                        <td>
                            <span style="height:25px; width:25px; background-color:{{$models_1->model_color}};border-radius: 50%;display: inline-block"></span>
                            
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
                </tbody>

                <thead>
                    <tr>
                        <th scope="col"><i class="fa fa-cog"></i> <strong>Engine & Transmission</strong> </th>

                    </tr>
                </thead>
                <tbody>
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
                        <th scope="row">No. Of Cylinders </th>
                        <td>{{$models_1->no_of_cylinders}}</td>
                        <td>{{$models_2->no_of_cylinders}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Valve Per Cylinder</th>
                        <td>{{$models_1->valve_per_cylinder}}</td>
                        <td>{{$models_2->valve_per_cylinder}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Cooling System</th>
                        <td>{{$models_1->cooling_system}}</td>
                        <td>{{$models_2->cooling_system}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Starting</th>
                        <td>{{$models_1->starting}}</td>
                        <td>{{$models_2->starting}}</td>
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
                        <td> {{$models_1->speedometer}}</td>
                        <td> {{$models_2->speedometer}}</td>
                        
                    </tr>
                    <tr>
                        <th scope="row">Tachometer</th>
                        <td> {{$models_1->techometer}}</td>
                        <td> {{$models_2->techometer}}</td>

                    </tr>
                    <tr>
                        <th scope="row">Odometer</th>
                        <td> {{$models_1->odometer}}</td>
                        <td> {{$models_2->odometer}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Tripmeter</th>
                        <td> {{$models_1->tripmeter}}</td>
                        <td> {{$models_2->tripmeter}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Fuel Gauge</th>
                        <td> {{$models_1->fuel_gauge}}</td>
                        <td> {{$models_2->fuel_gauge}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Clock</th>
                        <td> {{$models_1->clock}}</td>
                        <td> {{$models_2->clock}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Seat Type</th>
                        <td> {{$models_1->seat_type}}</td>
                        <td> {{$models_2->seat_type}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Riding Modes</th>
                        @if($models_1->riding_mode == "Yes")
                        <td><i class="fa fa-check" style="font-size:24px;color: green"></i></td>
                        @else
                        <td><i class="fa-solid fa-x" style="font-size:24px;color: red"></i></td>
                        @endif

                        @if($models_2->riding_mode == "Yes")
                        <td><i class="fa fa-check" style="font-size:24px;color: green"></i></td>
                        @else
                        <i class=""></i>
                        <td><i class=" fa-solid fa-x" style="font-size:24px;color: red"></i></td>
                        @endif
                    </tr>
                    
                </tbody>
                <thead>
                    <tr>
                        <th scope="col"><i class="fa-solid fa-gauge"></i> <strong>Performance</strong> </th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Mileage</th>
                        <td> {{$models_1->mileage}} <span> kmpl</span></td>
                        <td> {{$models_2->mileage}} <span> kmpl</span></td>
                    </tr>
                    <tr>
                        <th scope="row">Top Speed</th>
                        <td> {{$models_1->speed}} <span> kmph</span></td>
                        <td> {{$models_2->speed}} <span> kmph</span></td>
                    </tr>
                    <tr>
                        <th scope="row">Braking Type</th>
                        <td> {{$models_1->braking_type}} </td>
                        <td> {{$models_2->braking_type}} </td>
                    </tr>
                    
                </tbody>
                <thead>
                    <tr>
                        <th scope="col"><i class="fa-solid fa-shuffle"></i> <strong>Chassis and Suspension</strong> </th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Body Type</th>
                        <td> {{$models_1->body_type}} </td>
                        <td> {{$models_2->body_type}} </td>
                    </tr>
                    <tr>
                        <th scope="row">Suspension Front</th>
                        <td> {{$models_1->suspension_front}} </td>
                        <td> {{$models_2->suspension_front}} </td>
                    </tr>
                    <tr>
                        <th scope="row">Suspension Rear</th>
                        <td> {{$models_1->suspension_rear}} </td>
                        <td> {{$models_2->suspension_rear}} </td>
                    </tr>
                    
                </tbody>
                <thead>
                    <tr>
                        <th scope="col"><i class="fa-solid fa-weight-scale"></i> <strong>Dimensions and Capacity</strong> </th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Width</th>
                        <td> {{$models_1->width}} <span> mm</span></td>
                        <td> {{$models_2->width}} <span> mm</span></td>
                    </tr>
                    <tr>
                        <th scope="row">Height</th>
                        <td> {{$models_1->height}} <span> mm</span></td>
                        <td> {{$models_2->height}} <span> mm</span></td>
                    </tr>
                    <tr>
                        <th scope="row">Length</th>
                        <td> {{$models_1->length}} <span> mm</span></td>
                        <td> {{$models_2->length}} <span> mm</span></td>
                    </tr>
                    <tr>
                        <th scope="row">Fuel Capacity</th>
                        <td> {{$models_1->fuel_capacity}} <span> L</span></td>
                        <td> {{$models_2->fuel_capacity}} <span> L</span></td>
                    </tr>
                    <tr>
                        <th scope="row">Saddle Height</th>
                        <td> {{$models_1->saddle_height}} <span> mm</span></td>
                        <td> {{$models_2->saddle_height}} <span> mm</span></td>
                    </tr>
                    <tr>
                        <th scope="row">Ground Clearance</th>
                        <td> {{$models_1->ground_clearance}} <span> mm</span></td>
                        <td> {{$models_2->ground_clearance}} <span> mm</span></td>
                    </tr>
                    <tr>
                        <th scope="row">Kerb Weight</th>
                        <td> {{$models_1->weight}} <span> mm</span></td>
                        <td> {{$models_2->weight}} <span> mm</span></td>
                    </tr>
                    
                    
                </tbody>

                <thead>
                    <tr>
                        <th scope="col"><i class="fa-solid fa-plug"></i> <strong>Electricals</strong> </th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Head Light</th>
                        <td> {{$models_1->headlight}} </td>
                        <td> {{$models_2->headlight}} </td>
                    </tr>
                    <tr>
                        <th scope="row">Tail Light</th>
                        <td> {{$models_1->tail_light}} </td>
                        <td> {{$models_2->tail_light}} </td>
                    </tr>
                </tbody>

                <thead>
                    <tr>
                        <th scope="col"><i class="fa-solid fa-dharmachakra"></i> <strong>Tyres and Brakes</strong> </th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Front Tyre</th>
                        <td> {{$models_1->tyre_front}} </td>
                        <td> {{$models_2->tyre_front}} </td>
                    </tr>
                    <tr>
                        <th scope="row">Rear Tyre</th>
                        <td> {{$models_1->tyre_rear}} </td>
                        <td> {{$models_2->tyre_rear}} </td>
                    </tr>
                    <tr>
                        <th scope="row">Front Brake</th>
                        <td> {{$models_1->brake_front}} </td>
                        <td> {{$models_2->brake_front}} </td>
                    </tr>
                    <tr>
                        <th scope="row">Rear Brake</th>
                        <td> {{$models_1->brake_rear}} </td>
                        <td> {{$models_2->brake_rear}} </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
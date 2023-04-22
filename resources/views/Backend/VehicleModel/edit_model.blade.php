@extends('admin.admin_dashboard')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-1">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li><a href="{{route('all.model')}}">All Model</a></li>
                            <li class="active">Edit Model</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Vehicle</strong> Model
                </div>
                <div class="card-body p-4">
                    <form id="myForm" method="post" action="{{route('update.model')}}">
                        @csrf


                        <input type="hidden" name="id" value="{{$models->id}}">

                        <div class="form-body mt-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="border border-3 p-4 rounded">
                                        <div class="form-group mb-3">
                                            <label for="model_name" class="form-label">Model Name</label>
                                            <input type="text" name="model_name" class="form-control" id="model_name"
                                                value="{{$models->model_name}}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="engine_type" class="form-label">Engine Type</label>
                                            <input type="text" name="engine_type" class="form-control" id="engine_type"
                                                value="{{$models->engine_type}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="displacement" class="form-label">Displacement</label>
                                            <input type="text" name="displacement" class="form-control"
                                                id="displacement" value="{{$models->displacement}}">
                                        </div>

                                        <div class=" mb-3">
                                            <label for="model_color" class="form-label">Model
                                                Color</label>
                                            <input type="text" name="model_color" class="form-control visually-hidden"
                                                data-role="tagsinput" value="{{$models->model_color}} ">
                                        </div>

                                        <div class="mb-3">
                                            <label for="mileage" class="form-label">Mileage</label>
                                            <input type="text" name="mileage" class="form-control" id="mileage"
                                                value="{{$models->mileage}}">
                                        </div>


                                        <div class="mb-3">
                                            <label for="width" class="form-label">Width</label>
                                            <input type="text" name="width" class="form-control" id="width"
                                                value="{{$models->width}}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="height" class="form-label">Height</label>
                                            <input type="text" name="height" class="form-control" id="height"
                                                value="{{$models->height}}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="saddle_height" class="form-label">Saddle Height</label>
                                            <input type="text" name="saddle_height" class="form-control"
                                                id="saddle_height" value="{{$models->saddle_height}}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="ground_clearance" class="form-label">Ground Clearance</label>
                                            <input type="text" name="ground_clearance" class="form-control"
                                                id="ground_clearance" value="{{$models->ground_clearance}}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="length" class="form-label">Length</label>
                                            <input type="text" name="length" class="form-control" id="length"
                                                value="{{$models->length}}">
                                        </div>



                                        <div class="mb-3">
                                            <label for="seat_type" class="form-label">Seat Types</label>
                                            <input type="text" name="seat_type" class="form-control" id="seat_type"
                                                value="{{$models->seat_type}}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="suspension_front" class="form-label">Suspension Front</label>
                                            <input type="text" name="suspension_front" class="form-control"
                                                id="suspension_front" value="{{$models->suspension_front}}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="suspension_rear" class="form-label">Suspension Rear</label>
                                            <input type="text" name="suspension_rear" class="form-control"
                                                id="suspension_rear" value="{{$models->suspension_rear}}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="tyre_front" class="form-label">Front Tyre Size</label>
                                            <input type="text" name="tyre_front" class="form-control" id="tyre_front"
                                                value="{{$models->tyre_front}}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="tyre_rear" class="form-label">Rear Tyre Size</label>
                                            <input type="text" name="tyre_rear" class="form-control" id="tyre_rear"
                                                value="{{$models->tyre_rear}}">
                                        </div>


                                        <div class="mb-3">
                                            <label for="top_speed" class="form-label">Top Speed</label>
                                            <input type="text" name="top_speed" class="form-control" id="top_speed"
                                                value="{{$models->top_speed}}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="braking" class="form-label">Body Type</label>
                                            <div class="col col-md-6">
                                                <div class="form-check">
                                                    <div class="row">
                                                        <div class="col col-md-9">
                                                            <div class="radio">
                                                                <label for="Sport" class="form-check-label ">
                                                                    <input type="radio" id="Sport" name="body_type"
                                                                        value="Sport" class="form-check-input"
                                                                        {{ $models->body_type == 'Sport' ? 'checked' : '' }}>
                                                                    Sport
                                                                </label>
                                                            </div>

                                                            <div class="radio">
                                                                <label for="Off Road" class="form-check-label ">
                                                                    <input type="radio" id="Off Road" name="body_type"
                                                                        value="Off Road" class="form-check-input"
                                                                        {{ $models->body_type == 'Off Road' ? 'checked' : '' }}>Off
                                                                    Road
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label for="Dual Purpose" class="form-check-label ">
                                                                    <input type="radio" id="Dual Purpose"
                                                                        name="body_type" value="Dual Purpose"
                                                                        class="form-check-input"
                                                                        {{ $models->body_type == 'Dual Purpose' ? 'checked' : '' }}>Dual
                                                                    Purpose
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label for="Adventure" class="form-check-label ">
                                                                    <input type="radio" id="Adventure"
                                                                        name="body_type" value="Adventure"
                                                                        class="form-check-input"
                                                                        {{ $models->body_type == 'Adventure' ? 'checked' : '' }}>Adventure
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col col-md-3">
                                                            <div class="radio">
                                                                <label for="Naked" class="form-check-label ">
                                                                    <input type="radio" id="Naked" name="body_type"
                                                                        value="Naked" class="form-check-input"
                                                                        {{ $models->body_type == 'Naked' ? 'checked' : '' }}>Naked
                                                                </label>
                                                            </div>

                                                            <div class="radio">
                                                                <label for="Scooter" class="form-check-label ">
                                                                    <input type="radio" id="Scooter" name="body_type"
                                                                        value="Scooter" class="form-check-input"
                                                                        {{ $models->body_type == 'Scooter' ? 'checked' : '' }}>Scooter
                                                                </label>
                                                            </div>

                                                            <div class="radio">
                                                                <label for="Cruiser" class="form-check-label ">
                                                                    <input type="radio" id="Cruiser" name="body_type"
                                                                        value="Cruiser" class="form-check-input"
                                                                        {{ $models->body_type == 'Cruiser' ? 'checked' : '' }}>Cruiser
                                                                </label>
                                                            </div>

                                                            <div class="radio">
                                                                <label for="Commuter" class="form-check-label ">
                                                                    <input type="radio" id="Commuter" name="body_type"
                                                                        value="Commuter" class="form-check-input"
                                                                        {{ $models->body_type == 'Commuter' ? 'checked' : '' }}>Commuter
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="mb-3">
                                            <label for="riding_mode" class="form-label">Riding Modes
                                                </label>
                                            <input type="text" name="riding_mode" class="form-control visually-hidden"
                                                data-role="tagsinput" value="{{$models->riding_mode}} ">
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="border border-3 p-4 rounded">
                                        <div class="row g-3">
                                            <div class="col-6">
                                                <label for="brand" class="form-label">Brand Name</label>
                                                <select name="brand_id" class="form-control mb-3" id="brand">
                                                    <option> Select Brand</option>
                                                    @foreach($brands as $brand)
                                                    <option value="{{$brand->id}}"
                                                        {{$brand->id ==$models->brand_id ? 'selected' : '' }}>
                                                        {{$brand->brand_name}}
                                                    </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <label for="vehicle" class="form-label">Vehicle Name</label>
                                                <select name="vehicle_id" class="form-control mb-3" id="vehicle">
                                                    <option>Select Vehicle</option>
                                                    @foreach($vehicles as $vehicle)
                                                    <option value="{{$vehicle->id}}"
                                                        {{$vehicle->id ==$models->vehicle_id ? 'selected' : ''}}>
                                                        {{$vehicle->vehicle_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <label for="category_id" class="form-label">Category Name</label>
                                                <select name="category_id" class="form-control mb-3" id="category_id">
                                                    <option>Select Category</option>
                                                    @foreach($categories as $category)
                                                    <option value="{{$category->id}}"
                                                        {{$category->id ==$models->category_id ? 'selected' : ''}}>
                                                        {{$category->category_name}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="weight" class="form-label">weight</label>
                                                <input name="weight" type="text" class="form-control mb-3" id="weight"
                                                    value="{{$models->weight}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="max_power" class="form-label">Power</label>
                                                <input type="text" name="max_power" class="form-control mb-3"
                                                    id="max_power" value="{{$models->max_power}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="max_torque" class="form-label">Torque</label>
                                                <input type="text" name="max_torque" class="form-control mb-3"
                                                    id="max_torque" value="{{$models->max_torque}}">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="no_of_cylinders" class="form-label">No. of Cylinders</label>
                                                <input type="text" name="no_of_cylinders" class="form-control mb-3"
                                                    id="no_of_cylinders" value="{{$models->no_of_cylinders}}">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="valve_per_cylinder" class="form-label">Valve Per Cylinder</label>
                                                <input type="text" name="valve_per_cylinder" class="form-control mb-3"
                                                    id="valve_per_cylinder" value="{{$models->valve_per_cylinder}}">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="bore" class="form-label">Bore</label>
                                                <input type="text" name="bore" class="form-control mb-3"
                                                    id="bore" value="{{$models->bore}}">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="stroke" class="form-label">Stroke</label>
                                                <input type="text" name="stroke" class="form-control mb-3"
                                                    id="stroke" value="{{$models->stroke}}">
                                            </div>


                                            <div class="col-md-6">
                                                <label for="emission_type" class="form-label">Emission Type</label>
                                                <input type="text" name="emission_type" class="form-control"
                                                    id="emission_type" value="{{$models->emission_type}}">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="price" class="form-label">Price</label>
                                                <input name="price" type="text" class="form-control mb-3" id="price"
                                                    value="{{$models->price}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="braking" class="form-label">Braking Type</label>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="radio">
                                                            <label for="radio1" class="form-check-label ">
                                                                <input class="form-check-input" type="radio" id="radio1"
                                                                    name="braking_type" value="ABS"
                                                                    {{ $models->braking_type == 'ABS' ? 'checked' : '' }}>ABS
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="radio2" class="form-check-label mb-3">
                                                                <input class="form-check-input " type="radio"
                                                                    id="radio2" name="braking_type" value="Non ABS"
                                                                    {{ $models->braking_type == 'Non ABS' ? 'checked' : '' }}>Non
                                                                ABS
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="braking" class="form-label">Fuel Supply </label>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="radio">
                                                            <label for="radio1" class="form-check-label ">
                                                                <input class="form-check-input" type="radio"
                                                                    id="Fuel Injection" name="fuel_supply"
                                                                    value="Fuel Injection"
                                                                    {{ $models->fuel_supply == 'Fuel Injection' ? 'checked' : '' }}>Fuel
                                                                Injection
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="radio2" class="form-check-label mb-3">
                                                                <input class="form-check-input" type="radio"
                                                                    id="Carboretor" name="fuel_supply"
                                                                    value="Carboretor"
                                                                    {{ $models->fuel_supply == 'Carboretor' ? 'checked' : '' }}>Carboretor
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-md-6">
                                                <label for="braking" class="form-label">Starting
                                                </label>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="radio">
                                                            <label for="radio1" class="form-check-label ">
                                                                <input class=" form-check-input" type="radio"
                                                                    id="radio1" name="starting" value="Self Start Only"
                                                                    {{ $models->starting == 'Self Start Only' ? 'checked' : '' }}>Self Start Only

                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="radio2" class="form-check-label mb-3">
                                                                <input class="form-check-input" type="radio" id="radio2"
                                                                    name="starting" value="Kick and Self Start"
                                                                    {{ $models->starting == 'Kick and Self Start' ? 'checked' : '' }}>Kick
                                                                and
                                                                Self Start
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="braking" class="form-label">Cooling System </label>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="radio">
                                                            <label for="Liquid Cooled" class="form-check-label ">
                                                                <input type="radio" id="Liquid Cooled"
                                                                    name="cooling_system" value="Liquid Cooled"
                                                                    class="form-check-input"
                                                                    {{ $models->cooling_system == 'Liquid Cooled' ? 'checked' : '' }}>Liquid
                                                                Cooled

                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="Air Cooled" class="form-check-label mb-3">
                                                                <input type="radio" id="Air Cooled"
                                                                    name="cooling_system" value="Air Cooled"
                                                                    class="form-check-input"
                                                                    {{ $models->cooling_system == 'Air Cooled' ? 'checked' : '' }}>Air
                                                                Cooled
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="braking" class="form-label">Clock</label>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="radio">
                                                            <label for="Digital" class="form-check-label ">
                                                                <input type="radio" id="Digital" name="clock"
                                                                    value="Digital" class="form-check-input"
                                                                    {{ $models->clock == 'Digital' ? 'checked' : '' }}>Digital

                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="Analogue" class="form-check-label mb-3">
                                                                <input type="radio" id="Analogue" name="clock"
                                                                    value="Analogue" class="form-check-input"
                                                                    {{ $models->clock == 'Analogue' ? 'checked' : '' }}>Analogue
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="braking" class="form-label">Speedometer</label>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="radio">
                                                            <label for="Digital" class="form-check-label ">
                                                                <input type="radio" id="Digital" name="speedometer"
                                                                    value="Digital" class="form-check-input"
                                                                    {{ $models->speedometer == 'Digital' ? 'checked' : '' }}>Digital

                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="Analogue" class="form-check-label mb-3">
                                                                <input type="radio" id="Analogue" name="speedometer"
                                                                    value="Analogue" class="form-check-input"
                                                                    {{ $models->speedometer == 'Analogue' ? 'checked' : '' }}>Analogue
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="braking" class="form-label">Techometer</label>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="radio">
                                                            <label for="Digital" class="form-check-label ">
                                                                <input type="radio" id="Digital" name="techometer"
                                                                    value="Digital" class="form-check-input"
                                                                    {{ $models->techometer == 'Digital' ? 'checked' : '' }}>Digital

                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="Analogue" class="form-check-label mb-3">
                                                                <input type="radio" id="Analogue" name="techometer"
                                                                    value="Analogue" class="form-check-input"
                                                                    {{ $models->techometer == 'Analogue' ? 'checked' : '' }}>Analogue
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="braking" class="form-label">Odometer</label>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="radio">
                                                            <label for="Digital" class="form-check-label ">
                                                                <input type="radio" id="Digital" name="odometer"
                                                                    value="Digital" class="form-check-input"
                                                                    {{ $models->odometer == 'Digital' ? 'checked' : '' }}>Digital

                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="Analogue" class="form-check-label mb-3">
                                                                <input type="radio" id="Analogue" name="odometer"
                                                                    value="Analogue" class="form-check-input"
                                                                    {{ $models->odometer == 'Analogue' ? 'checked' : '' }}>Analogue
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="braking" class="form-label">Tripmeter</label>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="radio">
                                                            <label for="Digital" class="form-check-label ">
                                                                <input type="radio" id="Digital" name="tripmeter"
                                                                    value="Digital" class="form-check-input"
                                                                    {{ $models->tripmeter == 'Digital' ? 'checked' : '' }}>Digital

                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="Analogue" class="form-check-label mb-3">
                                                                <input type="radio" id="Analogue" name="tripmeter"
                                                                    value="Analogue" class="form-check-input"
                                                                    {{ $models->tripmeter == 'Analogue' ? 'checked' : '' }}>Analogue
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="braking" class="form-label">Fuel Gauge</label>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="radio">
                                                            <label for="Digital" class="form-check-label ">
                                                                <input type="radio" id="Digital" name="fuel_gauge"
                                                                    value="Digital" class="form-check-input"
                                                                    {{ $models->fuel_gauge == 'Digital' ? 'checked' : '' }}>Digital

                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="Analogue" class="form-check-label mb-3">
                                                                <input type="radio" id="Analogue" name="fuel_gauge"
                                                                    value="Analogue" class="form-check-input"
                                                                    {{ $models->fuel_gauge == 'Analogue' ? 'checked' : '' }}>Analogue
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <label for="braking" class="form-label">Head Light</label>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="radio">
                                                            <label for="LED" class="form-check-label ">
                                                                <input type="radio" id="LED" name="headlight"
                                                                    value="LED" class="form-check-input"
                                                                    {{ $models->headlight == 'LED' ? 'checked' : '' }}>LED

                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="Halogen" class="form-check-label ">
                                                                <input type="radio" id="Halogen" name="headlight"
                                                                    value="Halogen" class="form-check-input"
                                                                    {{ $models->headlight == 'Halogen' ? 'checked' : '' }}>Halogen

                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="Bulb" class="form-check-label mb-3">
                                                                <input type="radio" id="Bulb" name="headlight"
                                                                    value="Bulb" class="form-check-input"
                                                                    {{ $models->headlight == 'Bulb' ? 'checked' : '' }}>Bulb
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="braking" class="form-label">Tail Light</label>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="radio">
                                                            <label for="LED" class="form-check-label ">
                                                                <input type="radio" id="LED" name="tail_light"
                                                                    value="LED" class="form-check-input"
                                                                    {{ $models->tail_light == 'LED' ? 'checked' : '' }}>LED

                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="Halogen" class="form-check-label ">
                                                                <input type="radio" id="Halogen" name="tail_light"
                                                                    value="Halogen" class="form-check-input"
                                                                    {{ $models->tail_light == 'Halogen' ? 'checked' : '' }}>Halogen

                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="Bulb" class="form-check-label mb-3">
                                                                <input type="radio" id="Bulb" name="tail_light"
                                                                    value="Bulb" class="form-check-input"
                                                                    {{ $models->tail_light == 'Bulb' ? 'checked' : '' }}>Bulb
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="braking" class="form-label">Brake Front</label>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="radio">
                                                            <label for="Disc" class="form-check-label ">
                                                                <input type="radio" id="Disc" name="brake_front"
                                                                    value="Disc" class="form-check-input"
                                                                    {{ $models->brake_front == 'Disc' ? 'checked' : '' }}>Disc

                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="Drum" class="form-check-label mb-3">
                                                                <input type="radio" id="Drum" name="brake_front"
                                                                    value="Drum" class="form-check-input"
                                                                    {{ $models->brake_front == 'Drum' ? 'checked' : '' }}>Drum
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="braking" class="form-label">Brake Rear</label>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="radio">
                                                            <label for="Disc" class="form-check-label ">
                                                                <input type="radio" id="Disc" name="brake_rear"
                                                                    value="Disc" class="form-check-input"
                                                                    {{ $models->brake_rear == 'Disc' ? 'checked' : '' }}>Disc

                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="Drum" class="form-check-label mb-3">
                                                                <input type="radio" id="Drum" name="brake_rear"
                                                                    value="Drum" class="form-check-input"
                                                                    {{ $models->brake_rear == 'Drum' ? 'checked' : '' }}>Drum
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        
                                            <div class="col-md-6">
                                                <label for="braking" class="form-label">ABS</label>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="radio">
                                                            <label for="Single Channel" class="form-check-label ">
                                                                <input type="radio" id="Single Channel" name="abs"
                                                                    value="Single Channel" class="form-check-input"
                                                                    {{ $models->abs == 'Single Channel' ? 'checked' : '' }}>Single
                                                                Channel

                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="Dual Channel" class="form-check-label mb-3">
                                                                <input type="radio" id="Dual Channel" name="abs"
                                                                    value="Dual Channel" class="form-check-input"
                                                                    {{ $models->abs == 'Dual Channel' ? 'checked' : '' }}>Dual
                                                                Channel
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="gear_box" class="form-label">Gear Box</label>
                                                <input type="text" name="gear_box" class="form-control" id="gear_box"
                                                    value="{{$models->gear_box}}">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="fuel_capacity" class="form-label">Fuel Capacity</label>
                                                <input type="text" name="fuel_capacity" class="form-control"
                                                    id="fuel_capacity" value="{{$models->fuel_capacity}}">
                                            </div>

                                            <div class="col-12">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea name="description" class="form-control mb-3" id="description"
                                                    rows="3">{{$models->description}}</textarea>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-secondary">
                                    <input type="submit" class="btn btn-primary px-4" value="Submit" />
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Main Image</strong>
        </div>
        <div class="card-body">
            <form id="myForm" method="post" action="{{route('update.model.img')}}" enctype="multipart/form-data">
                @csrf


                <input type="hidden" name="id" value="{{$models->id}}">
                <input type="hidden" name="old_img" value="{{$models->model_thumbnail}}">

                <div class="mb-3">
                    <label for="formFile" class="form-label">Update Main Image </label>
                    <input class="form-control" name="model_thumbnail" type="file" id="formFile">
                </div>
                <div class="mb-3">
                    <img src="{{asset($models->model_thumbnail)}}" style="height:100px; width:100px">
                </div>

                <div class="col-sm-6 text-secondary">
                    <input type="submit" class="btn btn-primary px-4" value="Submit" />
                </div>
            </form>
        </div>
    </div>
</div>
<div class="content">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Multi Image Update</strong>
        </div>
        <div class="table-stats order-table ov-h">
            <table class="table ">
                <thead>
                    <tr>
                        <th class="serial">SN</th>
                        <th>Image</th>
                        <th>Change Image</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <form id="myForm" method="post" action="{{route('update.model.multiimg')}}"
                        enctype="multipart/form-data">
                        @csrf

                        @foreach($multiImg as $key => $imgs)
                        <tr>
                            <td scope="row">{{$key+1}}</td>

                            <td>
                                <img src="{{asset($imgs->photo_name)}}" style="height:80; width:60px">
                            </td>
                            <td>
                                <input type="file" class="form-group" name="multi_img[{{$imgs->id}}]">
                            </td>
                            <td>
                                <input type="submit" class="btn btn-success" value="update">
                                <a href="{{route('multi.img.delete',$imgs->id)}}" class="btn btn-danger"
                                    id="delete">Delete</a>
                            </td>

                        </tr>
                        @endforeach

                    </form>

                </tbody>
            </table>
        </div> <!-- /.table-stats -->
    </div>
</div>
<!--/.col-->

<script type="text/javascript">
$(document).ready(function() {
    $('#myForm').validate({
        rules: {
            model_name: {
                required: true,
            },
            engine_type: {
                required: true,
            },

        },
        messages: {
            model_name: {
                required: 'Please Enter Product Name',
            },
            engine_type: {
                required: 'Please Enter Short Description',
            },

        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },
    });
});
</script>

<script type="text/javascript">
function mainThamUrl(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#mainThmb').attr('src', e.target.result).width(80).height(80);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>

<script>
$(document).ready(function() {
    $('#multiImg').on('change', function() { //on file input change
        if (window.File && window.FileReader && window.FileList && window
            .Blob) //check File API supported browser
        {
            var data = $(this)[0].files; //this file data

            $.each(data, function(index, file) { //loop though each file
                if (/(\.|\/)(gif|jpeg|jpg|png)$/i.test(file
                        .type)) { //check supported file type
                    var fRead = new FileReader(); //new filereader
                    fRead.onload = (function(file) { //trigger function on successful read
                        return function(e) {
                            var img = $('<img/>').addClass('thumb').attr('src', e
                                    .target.result).width(100)
                                .height(80); //create image element 
                            $('#preview_img').append(
                                img); //append image to output element
                        };
                    })(file);
                    fRead.readAsDataURL(file); //URL representing the file's data.
                }
            });

        } else {
            alert("Your browser doesn't support File API!"); //if File API is absent
        }
    });
});
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="vehicle_id"]').on('change', function() {
            var vehicle_id = $(this).val();
            if (vehicle_id) {
                $.ajax({
                    url: " {{ url('/category/ajax') }}/" + vehicle_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="category_id"]').html('');
                        var d = $('select[name="category_id"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="category_id"]').append(
                                '<option value="' + value.id + '">' + value
                                .category_name + '</option>');
                        });
                    },
                });
            } else {
                alert('danger');
            }
        });
    });
    </script>

@endsection
@extends('admin.admin_dashboard')
@section('content')
<style>
    body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
</style>
<div class="container" >
    <div class="main-body">
    
          <!-- Breadcrumb -->
          
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('all.model')}}">All Models</a></li>
              <li class="breadcrumb-item active" aria-current="page">Vehicle Model Profile</li>
              
              
            </ol>

           
            
          </nav>

          
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-3 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{asset($model->model_thumbnail)}}" width="200" height="200"
                                            alt="model">
                  </div>
                </div>
              </div>
              <a class="btn btn-outline-primary text-center" href="{{route('edit.model',$model->id)}}">Spec Edit</a>
             
            </div>
            <div class="col-md-9">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Model Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$model->model_name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Engine</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$model->engine_type}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Displacement</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$model->displacement}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Price</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$model->price}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Max Torque</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$model->max_torque}}
                    </div>
                  </div>
                  
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Max Power</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$model->max_power}}
                    </div>
                  </div>
                  
                  

                  
                  
                  
                </div>
              </div>

              



            </div>
          </div>
          <div class="row">
            
            {{-- left-row --}}
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Category</h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model['category']['category_name']}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Model Color</h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->model_color}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Fuel Supply</h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->fuel_supply}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">No of Cylinder </h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->no_of_cylinders}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Velve Per Cylinder </h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->valve_per_cylinder}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Bore </h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->bore}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Stroke</h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->stroke}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Mileage </h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->mileage}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Starting</h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->model_color}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Body Type</h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->body_type}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Cooling System</h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->cooling_system}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Fuel Capacity</h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->fuel_capacity}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Braking Type</h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->braking_type}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Model Color</h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->model_color}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Suspension Front</h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->suspension_front}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Suspension Rear</h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->suspension_rear}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Front Tyre</h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->tyre_front}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Rear Tyre </h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->tyre_rear}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Riding Mode</h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->riding_mode}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Abs</h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->abs}}
                      </div>
                    </div>
                    <hr>
                    

                    
                    
                    
                  
                </div>
                
              </div>
              
            </div>
            

            {{-- right-row --}}
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">

                  <div class="row">
                    <div class="col-sm-6">
                      <h6 class="mb-0">Brand</h6>
                    </div>
                    <div class="col-sm-6 text-secondary">
                        {{$model['brand']['brand_name']}}
                    </div>
                  </div>
                  <hr>
                  
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Clock </h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->clock}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Speedometer </h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->speedometer}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Techometer</h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->techometer}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Odometer</h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->odometer}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Fuel Gauge</h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->fuel_gauge}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Tripmeter </h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->tripmeter}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Gear Box</h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->gear_box}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Emission Type </h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->emission_type}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Weight </h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->weight}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Width </h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->width}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">height </h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->height}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Saddle Height </h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->saddle_height}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Ground Clearance</h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->ground_clearance}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Length</h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->length}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Headlight</h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->headlight}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Tail Light </h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->tail_light}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Seat Type </h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->seat_type}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Brake Front</h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->brake_front}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6 class="mb-0">Rear Brake</h6>
                      </div>
                      <div class="col-sm-6 text-secondary">
                          {{$model->brake_rear}}
                      </div>
                    </div>
                    <hr>
                    
                    
                  
                </div>
              </div>
            </div>
          </div>

        </div>
          </div>
          



          

        </div>
        </div>
    
  
    
 @endsection
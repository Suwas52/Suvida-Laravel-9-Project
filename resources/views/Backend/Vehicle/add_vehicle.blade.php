@extends('admin.admin_dashboard')
@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Vehicle</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li><a href="{{route('all.vehicle')}}">All Vehicle</a></li>
                            <li class="active">Add Vehicle</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <form method="post" action="{{route('store.vehicle')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header"><strong>Add Vehicle</strong></div>
                        <div class="card-body card-block">
                            <div class="form-group hello"><label for="vehicle" class=" form-control-label">Vehicle
                                    Name</label><input type="text" name="vehicle_name" id="vehicle"
                                    placeholder="Enter Vehicle Name" class="form-control"></div>
                            <div class="form-group"><label for="vehicle_image" class=" form-control-label">Vehicle
                                    Photo</label><input type="file" name="vehicle_image" id="vehicle_image"
                                    class="form-control"></div>
                            <img src="{{url('upload/NoImage.jpg')}}" alt="Admin" style="width:100px; height:100px">
                            <div class="col-sm-6 text-secondary">
                                <input type="submit" class="btn btn-primary px-4" value="Submit" />
                            </div>
                        </div>



                    </form>
                </div>

            </div>


        </div>
    </div>
</div><!-- .content -->
@endsection
@extends('admin.admin_dashboard')
@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Vehicle Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <a href="{{route('add.vehicle')}}" class="btn btn-primary">Add Vehicle</a>
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

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">All Vehicle </strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Vehicle Name</th>
                                    <th>Vehicle Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vehicles as $key => $vehicle)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$vehicle->vehicle_name}}</td>
                                    <td><img src="{{asset($vehicle->vehicle_image)}}" style="width:60px; height:50px"
                                            alt="Logo">
                                    </td>
                                    <td>
                                        <a href="{{route('edit.vehicle',$vehicle->id)}}"
                                            class="btn btn-primary"><span class="fa-solid fa-pen-to-square"></span></a>
                                        <a href="{{route('delete.vehicle',$vehicle->id)}}"
                                            class="btn btn-danger" id="delete"><span class="fa-solid fa-delete-left"></span></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection
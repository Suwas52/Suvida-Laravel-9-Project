@extends('admin.admin_dashboard')
@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>All Model Prebook </h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li class="active">All Model Prebook</li>
                            
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
                        <strong class="card-title">All Bookings </strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Image</th>
                                    <th>User Name</th>
                                    <th>Bike</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($prebook as $key => $user_prebook)
                                <tr>
                                    <td class="serial">{{$key+1}}.</td>
                                    <td >
                                        <img class="rounded-circle" src="{{(!empty($user_prebook->userId->photo))?url('upload/userImages/'.$user_prebook->userId->photo):url('upload/NoImage.jpg')}}" alt="user" style="height:50px" width="50px">
                                       
                                    </td>
                                    <td> <span class="name">{{$user_prebook['userId']['name']}}</span> </td>
                                    <td> <span class="product">{{$user_prebook['bikeId']['model_name']}}</span>
                                    </td>
                                    <td> <span class="product">{{$user_prebook->created_at}}</span>
                                    </td>

                                    <td>
                                        @if($user_prebook->status == "Pending")
                                                <a href="{{route('prebook.verify',$user_prebook->id)}}"><span
                                                    class="badge badge-primary">Verify</span></a>
                                                <a href="{{route('prebook.reject',$user_prebook->id)}}"><span
                                                        class="badge badge-danger">Reject</span></a>
                                            
                                        @elseif($user_prebook->status == "Rejected")

                                        <a ><span
                                            class="badge badge-danger">Rejected</span></a>

                                            @else
                                        <a ><span
                                            class="badge badge-success">Verified</span></a>

                                        @endif

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
@extends('admin.admin_dashboard')
@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <strong class="card-title text-center">All Users </strong>
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
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key => $user)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td >
                                        <img class="rounded-circle" src="{{(!empty($user->photo))?url('upload/userImages/'.$user->photo):url('upload/NoImage.jpg')}}" alt="user" style="height:60px" width="60px">
                                    </td>
                                    
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        @if($user->UserOnline())
                                        <span class="badge badge-pill badge-success">Active</span>
                                        @else
                                        <span class="badge badge-pill badge-info">{{Carbon\Carbon::parse($user->status_seen)->diffForHumans()}}</span>
                                        @endif
                                        
                                       
                                    
                                    </td>
                                    
                                    <td>
                                        <a href="" class="btn btn-danger">Delete</a>
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
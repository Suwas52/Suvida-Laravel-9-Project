@extends('admin.admin_dashboard')
@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>All Users </h1>
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
                                        <img class="rounded-circle" src="{{(!empty($user->photo))?url('upload/userImages/'.$user->photo):url('upload/NoImage.jpg')}}" alt="user" style="height:50px" width="50px">
                                    </td>
                                    
                                    <td><a href="{{route('user.details',$user->id)}}">{{$user->name}}</a></td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        @if($user->UserOnline())
                                        <span class="badge badge-pill badge-success">Active</span>
                                        @else
                                        <span class="badge badge-pill badge-info">{{Carbon\Carbon::parse($user->status_seen)->diffForHumans()}}</span>
                                        @endif
                                        
                                       
                                    
                                    </td>
                                    
                                    <td>
                                        <a href="{{route('delete.user',$user->id)}}" class="btn btn-danger" title="Delete-User" id="delete"><span class="fa fa-trash"></a>
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
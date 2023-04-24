@extends('admin.admin_dashboard')
@section('content')

<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Newsletters Dashboard</h1>
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
                        <strong class="card-title">Emails</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Email</th>
                                    <th>Subscribed on</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($emails as $key => $subscriber) 
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$subscriber->email}}</td>
                                    <td>{{date('d-m-Y h:i:s',strtotime($subscriber['created_at']))}}</td>
                                    <td>
                                        @if($subscriber->status==1)
                                        <a href="{{route('subscribe.inactive',$subscriber->id)}}"
                                            class="badge rounded-pill bg-success text-light"><i
                                                class="fa-solid fa-check"></i></a>

                                        @else <a href="{{route('subscribe.active',$subscriber->id)}}"
                                            class="badge rounded-pill bg-danger text-light ">
                                            <i class="fa-solid fa-x"></i></a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('delete.subscriber',$subscriber->id)}}" class="btn btn-danger" id="delete"><span class="fa fa-trash"></span></a>
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
</div>
<!-- .content 
</div>
-->
@endsection
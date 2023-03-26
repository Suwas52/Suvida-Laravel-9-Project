@extends('admin.admin_dashboard')
@section('content')

<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>All Brand Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <a href="{{route('add.brand')}}" class="btn btn-primary">Add Brand</a>
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
                        <strong class="card-title">All Brand </strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Brand Name</th>
                                    <th>Brand Logo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($brands as $key => $item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->brand_name}}</td>
                                    <td><img src="{{asset($item->brand_logo)}}" style="width:60px; height:50px"
                                            alt="Logo">
                                    </td>
                                    <td>
                                        <a href="{{route('edit.brand',$item->id)}}" class="btn btn-primary"><span
                                                class="fa-solid fa-pen-to-square"></span></a>
                                        <a href="{{route('delete.brand',$item->id)}}" class="btn btn-danger" id="delete"><span
                                                class="fa-solid fa-delete-left"></span></a>
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
@extends('admin.admin_dashboard')
@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>All Vehicle Model</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <a href="{{route('add.model')}}" class="btn btn-primary">Add Model</a>
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
                        <strong class="card-title">All Model </strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Model</th>
                                    <th>Image</th>
                                    <th>Displacement</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($models as $key => $model)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$model->model_name}}</td>
                                    <td><img src="{{asset($model->model_thumbnail)}}" style="width:60px; height:50px"
                                            alt="model">
                                    </td>
                                    <td>{{$model->displacement}}</td>
                                    <td>@if($model->status == 1)
                                        <a href="{{route('model.inactive',$model->id)}}"
                                            class="badge rounded-pill bg-success text-light"><i
                                                class="fa-solid fa-check"></i></a>

                                        @else <a href="{{route('model.active',$model->id)}}"
                                            class="badge rounded-pill bg-danger text-light ">
                                            <i class="fa-solid fa-x"></i></a>
                                        @endif
                                    </td>

                                    <td>
                                        <a href="{{route('edit.model',$model->id)}}" class="btn btn-primary"
                                            title="Edit-Data"><span class="fa-solid fa-pen-to-square"></span></a>
                                        <a href="{{route('delete.model',$model->id)}}" class="btn btn-danger"
                                            title="Delete-Data"><span class="fa-solid fa-delete-left"></span></a>
                                        <a href="" class="btn btn-info" title="View-Data"><span
                                                class="fa-solid fa-eye"></span></a>

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
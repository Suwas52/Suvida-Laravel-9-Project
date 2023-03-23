@extends('admin.admin_dashboard')
@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Prebook Setup</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <a href="{{route('add.prebook.setup')}}" class="btn btn-primary">Add Prebook Setup</a>
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
                                    
                                    <th> Model </th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Launch Date</th>
                                    <th>Limit No</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($prebook_setup as $key => $setup)
                                <tr>
                                    <td class="serial">{{$key+1}}.</td>
                                    
                                    <td>
                                        {{$setup['model']['model_name']}}
                                    </td>
                                   
                                    <td>
                                        {{$setup->start_time}}
                                    </td>
                                    <td>
                                        {{$setup->end_time}}
                                    </td>
                                    <td>
                                        {{$setup->launch_date}}
                                    </td>
                                    <td>
                                        {{$setup->limit_no}}
                                    </td>
                                    <td>
                                        <a href="{{route('edit.prebook.setup',$setup->id)}}" class="btn btn-primary"
                                            title="Edit-Data"><span class="fa-solid fa-pen-to-square"></span></a>
                                        <a href="{{route('delete.prebook.setup',$setup->id)}}" class="btn btn-danger"
                                            title="Delete-Data"><span class="fa-solid fa-delete-left"></span></a>
                                       

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
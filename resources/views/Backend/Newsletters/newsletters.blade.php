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
                                    <th>Emails</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($emails as $key => $email) 
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$email->emails}}</td>
                                    <td>
                                        <a href="{{url('/delete/'.$email->id)}}" class="btn btn-danger"><span class="fa-solid fa-delete-left"></span></a>
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
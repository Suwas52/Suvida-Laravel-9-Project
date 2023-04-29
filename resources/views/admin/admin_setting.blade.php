@extends('admin.admin_dashboard')
@section('content')
<div class="animated fadeIn">

 
    <div class="row">

        <div class="col-lg-12" >
            <div class="card">
                <div class="card-header h2 text-center mt-4">Admin Setting</div>
                <div class="card-body card-block">
                    <a href="{{route('become.admin')}}">
                        <div class="form-group my-4">
                            <div class="input-group">
                                <div class="input-group-addon px-4">Register Admin</div>
                                <h3></h3>
                                <div class="text-center">
                                    <div class="btn btn-success"><i class="fa fa-user"></i></div>ph
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('admin.change.password')}}">
                        <div class="form-group my-4">
                            <div class="input-group">
                                <div class="input-group-addon px-4">Change Password</div>
                                <h3></h3>
                                <div class="text-center">
                                    <div class="btn btn-success"><i class="fa-solid fa-key"></i></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    


                </div>
            </div>
        </div>

    </div>
</div>
@endsection
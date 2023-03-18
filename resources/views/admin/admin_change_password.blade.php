@extends('admin.admin_dashboard')
@section('content')
<div class="animated fadeIn">


    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header h3 text-center">Admin Change Password</div>
                <div class="card-body card-block">
                    <form method="post" action="{{route('admin.password.update')}}">
                        @csrf


                        @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{session('success')}}
                        </div>
                        @elseif(session('error'))
                        <div class="alert alert-danger" role="alert">{{session('error')}}</div>
                        @endif

                        <div class=" form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa-sharp fa-solid fa-key"></i></div>
                                <input type="password" name="old_password" class="form-control  @error('old_password')is-invalid
                                            @enderror " id="current_password" placeholder="Old Password">
                                @error('old_password')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa-sharp fa-solid fa-key"></i></div>
                                <input type="password" name="new_password" placeholder="New Password" class="form-control @error('new_password')is-invalid
                                            @enderror " id="new_password">
                                @error('new_password')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa-sharp fa-solid fa-key"></i></div>
                                <input type="password" name="new_password_confirmation" class="form-control"
                                    placeholder=" Confirm Password" id="new_password_confirmation">
                            </div>
                        </div>

                        <div class="form-actions form-group"><button type="submit"
                                class="btn btn-success btn-sm">Change</button></div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
@extends('dashboard')
@section('user')

<section class="section section-bg" id="call-to-action"
    style="background-image: url({{asset('frontend/assets/images/bike-landscape.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2>User <em>Dashboard</em></h2>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- ***** Our Classes Start ***** -->
<section class="section" id="our-classes">
    <div class="container">
        <br>
        <br>
        <br>
        <div class="row" id="tab">
            <div class="col-lg-4">
                <ul>
                    <li>
                        <div class="nav-link  " data-bs-toggle="tab" href="#tabs-1" role="tab" aria-controls="dashboard"
                            aria-selected="false">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{(!empty($userData->photo))?url('upload/userImages/'.$userData->photo):url('upload/NoImage.jpg')}}"
                                    alt="User" class="rounded-circle p-1 bg-transparent"
                                    style="width:150px; height:150px">
                                <div class="mt-3">
                                    <h4 class="mb-2">{{$userData->name}}</h4>
                                    <p class="text-muted font-size-sm">{{$userData->address}}</p>

                                </div>
                            </div>
                        </div>

                    </li>
                    <li><a href='#tabs-2'><i class="fa fa-list"></i> Booking</a></a></li>


                    <li><a href='#tabs-4'><i class="fa fa-sign-in"></i> Account Details</a></a></li>
                    <li><a href='#tabs-5'><i class="fa fa-save"></i> Account Security</a></a></li>
                    <li><a href="{{route('user.logout')}}"><i class="fa fa-sign-out"></i>Logout</a></a></li>
                </ul>
            </div>
            <div class="col-lg-8 ">
                <section class=' tabs-content'>

                    <div id='tabs-2'>

                        <div class="card shadow">


                            <div class="card-header">
                                <strong class="card-title text-center">Your Booking list</strong>
                            </div>



                            <div class="card-body">

                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Vehicle Name</th>
                                            <th>Image</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    @php
                                    $booking
                                    =App\Models\Booking::with('rBike')->where('user_id',Auth::id())->latest()->get();
                                    @endphp
                                    <tbody>
                                        @foreach($booking as $key => $booking)
                                        <tr>
                                            <td>{{ $key+1}} </td>
                                            <td>{{ $booking['rBike']['model_name']}} </td>
                                            <td> <a href="{{ url('model/details/'.$booking->rBike->id.'/'.$booking->rBike->model_slug )}}"
                                                    title="View Bike"><img
                                                        src="{{ asset( $booking->rBike->model_thumbnail) }}"
                                                        width="100"></a></td>
                                            <td>Rs.{{$booking['rBike']['price']}}
                                            </td>
                                            <td class="">
                                                @if($booking->status == 1)
                                                <a class="btn btn-success" disabled><i
                                                        class="fa-solid fa-check"></i></a>
                                                @else
                                                <a href=" {{route('remove.booking',$booking->id)}}"
                                                    class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                                @endif


                                            </td>
                                            <td class="text-center">
                                                @if($booking->status == 1)
                                                <div class="badge rounded-pill  text-success w-100">Booking
                                                    Complete</div>
                                                @else
                                                <div class="badge rounded-pill  text-danger w-100">Booking
                                                    Request</div>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>


                    <div id='tabs-4'>
                        <div class="card shadow">
                            <div class="card-header">
                                <h5 class="text-center">Account Details</h5>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{route('user.profile.store')}}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label>User Name <span class="required">*</span></label>
                                            <input required="" class="form-control" name="username" type="text"
                                                value="{{$userData->username}}" />
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Full Name <span class="required">*</span></label>
                                            <input required="" class="form-control" name="name" type="text"
                                                value="{{$userData->name}}" />
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Email <span class="required">*</span></label>
                                            <input required="" class="form-control" name="email" type="email"
                                                value="{{$userData->email}}" />
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Phone <span class="required">*</span></label>
                                            <input required="" class="form-control" name="phone" type="text"
                                                value="{{$userData->phone}}" />
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Address <span class="required">*</span></label>
                                            <input required="" class="form-control" name="address" type="text"
                                                value="{{$userData->address}}" />
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Photo <span class="required">*</span></label>
                                            <input class="form-control" name="photo" type="file" id="image" />
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div class="col-sm-9 text-secondary">
                                                <img src="{{(!empty($userData->photo))?url('upload/userImages/'.$userData->photo):url('upload/NoImage.jpg')}}"
                                                    alt="User" class="rounded-circle p-1 bg-secondary "
                                                    style="width:100px; height:100px; ">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-success" name="submit"
                                                value="Submit">Save Change</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id='tabs-5'>
                        <div class="card shadow">
                            <div class="card-header">
                                <h5 class="text-center">Account Security</h5>
                            </div>
                            <div class="card-body">

                                <form method="post" action="{{route('user.password.update')}}">
                                    @csrf


                                    @if(session('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{session('success')}}
                                    </div>
                                    @elseif(session('error'))
                                    <div class="alert alert-danger" role="alert">{{session('error')}}</div>
                                    @endif
                                    <div class="row">

                                        <div class="form-group col-md-12">
                                            <label>Current Password
                                                <span class="required">*</span></label>
                                            <input type="password" name="old_password" class="form-control  @error('old_password')is-invalid
                                            @enderror " id="current_password" placeholder="Old Password">
                                            @error('old_password')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>New Password <span class="required">*</span></label>
                                            <input type="password" name="new_password" placeholder="New Password" class="form-control @error('new_password')is-invalid
                                            @enderror " id="new_password">
                                            @error('new_password')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Confirm Password
                                                <span class="required">*</span></label>
                                            <input type="password" name="new_password_confirmation" class="form-control"
                                                placeholder=" Confirm Password" id="new_password_confirmation">
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-success" name="submit" value="Submit">
                                                Save Change
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>
</section>
<!-- ***** Our Classes End ***** -->

@endsection
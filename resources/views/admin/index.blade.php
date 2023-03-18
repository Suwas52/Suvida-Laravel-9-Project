@extends('admin.admin_dashboard')
@section('content')

<div class="content">
    <div class="animated fadeIn mt-4">
        <!-- Widgets  -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                                <i class=" fa-solid fa-motorcycle"></i>
                            </div>
                            @php

                            $totalVehicle =App\Models\VehicleModel::count();
                            @endphp
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{$totalVehicle}}</span></div>
                                    <a href="{{route('all.model')}}" class="stat-heading">Total Vehicle</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-2">
                                <i class="fa fa-cart-plus"></i>
                            </div>
                            @php

                            $totalBooking =App\Models\Booking::count();
                            @endphp
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{$totalBooking}}</span></div>
                                    <div class="stat-heading">Total Booking</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-3">
                                <i class="pe-7s-browser"></i>
                            </div>
                            @php

                            $totalBrand =App\Models\Brand::count();
                            @endphp
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{$totalBrand}}</span></div>
                                    <a href="{{route('all.brand')}}" class="stat-heading">Brands</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-4">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            @php

                            $totalUsers =App\Models\User::where('role','user')->count();
                            @endphp
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{$totalUsers}}</span></div>
                                    <div class="stat-heading">Users</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Widgets -->

        <!-- Orders -->
        <div class="orders">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <strong class="card-title text-center">ALL BOOKING </strong>

                        </div>



                        <div class="card-body--">
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">SN</th>
                                            <th class="avatar">Image</th>
                                            <th>Bike ID</th>
                                            <th>User Name</th>
                                            <th>Bike Name</th>
                                            <th>Date</th>

                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    @php
                                    $booking = App\Models\Booking::latest()->get();
                                    @endphp
                                    <tbody>
                                        @foreach($booking as $key => $user_book )

                                        <tr>
                                            <td class="serial">{{$key+1}}.</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle"
                                                            src="{{ url('upload/userImages/' . $user_book->rUser->photo) }}"
                                                            alt=""></a>
                                                </div>
                                            </td>
                                            <td> {{$user_book['rUser']['id']}}</td>
                                            <td> <span class="name">{{$user_book['rUser']['name']}}</span> </td>
                                            <td> <span class="product">{{$user_book['rBike']['model_name']}}</span>
                                            </td>
                                            <td> <span class="product">{{$user_book->created_at}}</span>
                                            </td>

                                            <td>
                                                @if($user_book->status == '1')

                                                <a href="{{route('remove.verify',$user_book->id)}}"><span
                                                        class="badge badge-complete">Complete</span></a>
                                                @else

                                                <a href="{{route('booking.verify',$user_book->id)}}"><span
                                                        class="badge badge-danger">Verify</span></a>

                                                @endif

                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div> <!-- /.card -->
                </div> <!-- /.col-lg-8 -->


            </div>
        </div>
        <!-- /.orders -->

    </div>
</div>
@endsection
@extends('frontend.master')
@section('main')
    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/bike-landscape.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">


                        <br>
                        <br>
                        <h2><span>Booking</span> </>
                        </h2>



                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->
    <!-- Wishlist -->

    <div class="container ">
        <div class="card shadow">

            <div class="card body">

                <div class="card-header text-center">
                    <strong class="card-title ">YOUR BOOKING LIST</strong>
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
                                <th class="text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($userBooking as $key => $booking)
                                <tr>
                                    <td>{{ $key + 1 }} </td>
                                    <td>{{ $booking['rBike']['model_name'] }} </td>
                                    <td> 
                                        <a href="{{ url('model/details/' . $booking->rBike->id . '/' . $booking->rBike->model_slug) }}"
                                            title="View Bike">
                                            <img src="{{ asset($booking->rBike->model_thumbnail) }}"
                                                width="100"></a></td>
                                    <td>Rs.{{ $booking['rBike']['price'] }}
                                    </td>
                                    <td class="">
                                        @if ($booking->status == 1)
                                            <a class="btn btn-success" disabled><i class="fa-solid fa-check"></i></a>
                                        @else
                                            <a href=" {{ route('remove.booking', $booking->id) }}" class="btn btn-danger"><i
                                                    class="fa-solid fa-trash"></i></a>
                                        @endif


                                    </td>
                                    <td class="text-center">
                                        @if ($booking->status == 1)
                                            <div class="badge rounded-pill  text-success w-100">Booking
                                                Complete</div>
                                        @else
                                            <div class="badge rounded-pill  text-danger w-100">Booking
                                                Request</div>
                                        @endif
                                    </td>
                            @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>

    <!-- Wishlist -->
@endsection

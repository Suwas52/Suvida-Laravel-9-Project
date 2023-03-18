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
                    <h2><span>Wishlist</span> </>
                    </h2>



                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->
<!-- Wishlist -->

<div class="container">
    <div class="card shadow">

        <div class="card body">

            <div class="card-header text-center">
                <strong class="card-title ">Your Wishlist</strong>
            </div>



            <div class="card-body">

                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Vehicle Model</th>

                            <th>Image</th>
                            <th>Price</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($wishlist as $key => $wishlists)
                        <tr>
                            <td>{{$key+1}}</td>

                            <td>{{$wishlists['model']['model_name']}}</td>

                            </td>

                            <td><img src="{{ asset( $wishlists->model->model_thumbnail) }}" width="100"> </td>
                            <td>Rs.{{$wishlists['model']['price']}}
                            <td class="text-center">
                                <a href="{{route('wishlist.remove',$wishlists->id)}}" class="btn btn-danger"><i
                                        class="fa-solid fa-trash"></i></a>
                                <a href="{{ url('model/details/'.$wishlists->model->id.'/'.$wishlists->model->model_slug )}}"
                                    title="View Bike" class="btn btn-info"><i class="fa-regular fa-eye"></i></a>
                                <a href="{{ route('booking',$wishlists->model->id) }}"
                                    class="primaryButton  btn-dcb p-2" style="border:1px solid red"><span><i
                                            class="fa fa-cart-plus"> </i> Book Now</a>
                            </td>

                        </tr>

                        @endforeach



                    </tbody>
                </table>
            </div>


        </div>
    </div>
</div>

<!-- Wishlist -->
@endsection
@extends('frontend.master')
@section('main')

<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/bike-landscape.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2>Confused? <em>Easy Way to Compare</em> Bikes and Scooters</h2>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- ***** Compare start ***** -->
<div class="wrapper">
    <h1>Compare Bikes <em>&</em> Scooters</h1>

    <div class="container">

        <div class="card shadow">

            <form method="post" action="{{route('compare.models')}}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6 " style="padding:60px">
                        <div class="card">
                            <div class="card-body">
                                <!-- First card content goes here -->
                                <div class="circle" style="margin-left:90px">
                                    <div class="plus">
                                        <button id="search-btn" style="border: none; background-color: transparent;"><i
                                                class="fa-solid fa-plus " style="font-size:50px;margin:35px auto;"></i>
                                        </button>

                                        <div class="search-form">
                                            <input class="form-group" type="search" name="model_1" id="search-compare_1"
                                                placeholder="Search" />
                                        </div>
                                    </div>

                                </div>
                                <div for="add-bike" class="Add-text">
                                    <p for="add-bike">Add Model</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6" style="padding:60px">
                        <div class="card">
                            <div class="card-body">
                                <div class="circle" style="margin-left:90px">
                                    <div class="plus">
                                        <button class="faq-toggle"
                                            style="border: none; background-color: transparent;"><i
                                                class="fa-solid fa-plus " style="font-size:50px;margin:35px auto;"></i>
                                        </button>
                                        <div class="card-shadow">
                                            <input type="search" name="model_2" id="search-compare_2"
                                                placeholder="Search" />
                                        </div>

                                    </div>

                                </div>
                                <div for="add-bike" class="Add-text">
                                    <p for="add-bike">Add Model</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary p-3" style="margin-left:480px; margin-bottom:20px;">Compare
                    Model</button>
            </form>

        </div>
    </div>
</div>
<!-- ***** Compare end ***** -->
@endsection
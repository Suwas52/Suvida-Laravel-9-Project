@extends('frontend.master')
@section('main')
<!-- ***** Call to Action Start ***** -->
<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/bike-landscape.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <h2>All <em>Brand</em></h2>
                    <br>
                    <br>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->

<!-- ***** Fleet Starts ***** -->
<section class="section" id="trainers">
    <div class="container">
        <br>
        <br>



        <div class="row">
            @php
            $brands =App\Models\Brand::orderBy('brand_name','ASC')->get();
            @endphp

            @foreach($brands as $brand)

            <div class="col-lg-2 ">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="{{asset($brand->brand_logo)}}" alt="" />
                    </div>

                </div>
            </div>

            @endforeach
        </div>
    </div>

    <br>

    <nav>
        <ul class="pagination pagination-lg justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>

    </div>
</section>
<!-- ***** Fleet Ends ***** -->
@endsection
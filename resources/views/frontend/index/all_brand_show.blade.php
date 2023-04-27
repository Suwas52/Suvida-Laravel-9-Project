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
        <div class="row mt-4">
            <div class="col-lg-12 col-12 ">
                <div class="row">
                    <div class="col-12 card p-3 brand-des  ">
                        <h5 class=" mb-3">All Brand Available in Nepal</h5>
                        <p class="fs-2">Suvida brings complete range of new bikes in Nepal. You can search bikes by applying filters such as by budget, by preferred price, by bodytype, by brand. Also stay updated with upcoming motorcycles in Nepal, compare two wheelers in your price range and stay tuned to latest bike news.</p>
                    </div>
                    <hr>
                    <button  class="btn btn-link read"  style="color:dark-blue;">Read More </button>
                    
                    <div class="col-12 card">
                        <div class="row">
                            @php
                            $brands =App\Models\Brand::orderBy('brand_name','ASC')->paginate(12);
                            @endphp

                                @foreach($brands as $brand)

                                <div class="col-lg-3 mt-3 ">
                                    <div class="trainer-item">
                                        <div class="image-thumb">
                                            <img src="{{asset($brand->brand_logo)}}" alt="" />
                                        </div>

                                    </div>
                                </div>

                                @endforeach

                        </div>

                    </div>
                </div>

            </div>

            <!-- upcoming vehicle -->

            
            
        </div>



    </div>

    <br>

    <nav>
        <ul class="pagination pagination-lg justify-content-center">
           {{$brands->links()}}
        </ul>
    </nav>

    </div>
</section>
<script >
    let showDes = document.querySelector(".brand-des");
    document.querySelector(".read").onclick = () => {
    showDes.classList.toggle("all-des");
};
</script>
<!-- ***** Fleet Ends ***** -->
@endsection
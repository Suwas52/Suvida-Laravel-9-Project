
<section class="section" id="trainers">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 ">
                <div class="section-heading">
                    <h2>Popular <em>Brand</em></h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card shadow swiper card_slider">
                <div class="swiper-wrapper mt-4">
                    @php
                    $popular_brands =App\Models\Brand::orderBy('brand_name','ASC')->limit(12)->get();
                    @endphp

                    @foreach($popular_brands as $brand)

                    <div class="col-lg-2 swiper-slide">
                        <div class="trainer-item">
                            <a href="{{ url('/brand/'.$brand->id.'/'.$brand->brand_slug )}}" class="image-thumb">
                                <img src="{{asset($brand->brand_logo)}}" alt="" />
                            </a>

                        </div>
                    </div>

                    @endforeach
                </div>
                 <div id="sp" class=" swiper-button-next"></div> 
                 <div id="sp" class=" swiper-button-prev"></div> 
            </div>
            <div class="swiper-pagination"></div>
        </div>


        <br />

        <div class="main-button text-center">
            <a href="{{route('all.brand.show')}}">All Brand</a>
        </div>
    </div>
</section>
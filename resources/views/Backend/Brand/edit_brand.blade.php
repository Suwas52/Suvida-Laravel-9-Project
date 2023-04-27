@extends('admin.admin_dashboard')
@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Brand</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Brand</a></li>
                            <li class="active">Edit Brand</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <form method="post" action="{{route('update.brand')}}" enctype="multipart/form-data">
                        @csrf


                        <input type="hidden" name="id" value="{{$brands->id}}">
                        <input type="hidden" name="old_img" value="{{$brands->brand_logo}}">

                        <div class="card-header"><strong>Edit Brand</strong></div>
                        <div class="card-body card-block">
                            <div class="form-group "><label for="brand" class=" form-control-label">Brand
                                    Name</label><input type="text" name="brand_name" id="brand"
                                    placeholder="Enter Brand Name" class="form-control" value="{{$brands->brand_name}}">
                            </div>
                            <div class="form-group"><label for="brand_logo" class=" form-control-label">Brand
                                    Photo</label><input type="file" name="brand_logo" id="brand_logo"
                                    class="form-control"></div>
                            <img src="{{asset($brands->brand_logo)}}" alt="brand_logo"
                                style="width:100px; height:100px">
                                <div class="form-group">
                                    <label for="description" class="form-control-label">Description</label>
                                    <textarea name="description" id="description" class="form-control mb-3" id="description"
                                        rows="4" placeholder="{{$brands->description}}"></textarea>
                                </div>
                            <div class="col-sm-6 text-secondary">
                                <input type="submit" class="btn btn-primary px-4 mt-2" value="Submit" />
                            </div>
                        </div>



                    </form>
                </div>

            </div>


        </div>
    </div>
</div><!-- .content -->
@endsection
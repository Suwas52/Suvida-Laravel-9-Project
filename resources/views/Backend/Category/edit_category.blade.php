@extends('admin.admin_dashboard')
@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Category</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li><a href="{{route('all.category')}}">All Category</a></li>
                            <li class="active">Edit Category</li>
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
                    <form method="post" action="{{route('update.category')}}">
                        @csrf

                        <input type="hidden" name="id" value="{{$category->id}}">

                        <div class="card-header"><strong>Edit Category</strong></div>
                        <div class="card-body card-block">
                            <div class="form-group "><label class=" form-control-label">Vehicle
                                    Name</label><select name="vehicle_name" id="select" class="form-control">

                                    @foreach($vehicles as $vehicle )
                                    <option value="{{$vehicle->id}}"
                                        {{$vehicle->id == $category->vehicle_id ? 'selected' : '';}}>
                                        {{$vehicle->vehicle_name}}
                                    </option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group"><label for="category_name" class=" form-control-label">Category
                                    Name</label><input type="text" name="category_name" id="category_name"
                                    placeholder="Enter Category Name" class="form-control"
                                    value="{{$category->category_name}}">
                            </div>
                            <div class="col-sm-6 text-secondary">
                                <input type="submit" class="btn btn-primary px-4" value="Submit" />
                            </div>
                        </div>



                    </form>
                </div>

            </div>


        </div>
    </div>
</div><!-- .content -->
@endsection
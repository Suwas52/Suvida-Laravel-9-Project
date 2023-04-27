@extends('admin.admin_dashboard')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                            <li class="active">Add Category</li>
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
                    <form method="post" id="myForm" action="{{route('store.category')}}">
                        @csrf
                        <div class="card-header"><strong>Add Category</strong></div>
                        <div class="card-body card-block">
                            <div class="form-group "><label class=" form-control-label">Vehicle
                                    Name</label><select name="vehicle_name" id="select" class="form-control">
                                    <option value="0">Please select Vehicle</option>


                                    @foreach($vehicles as $vehicle )
                                    <option value="{{$vehicle->id}}">{{$vehicle->vehicle_name}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group"><label for="category_name" class=" form-control-label">Category
                                    Name</label><input type="text" name="category_name" id="category_name"
                                    placeholder="Enter Category Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="description" class="form-control-label">Description</label>
                                <textarea name="description" id="description" class="form-control mb-3" id="description"
                                    rows="4" placeholder="Enter the description about This brand"></textarea>
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
<script type="text/javascript">
    $(document).ready(function() {
        $('#myForm').validate({
            rules: {
                
                category_name: {
                    required: true,
                },
    
            },
            messages: {
                
                category_name: {
                    required: 'Please Enter  Category Name',
                },
    
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            },
        });
    });
    </script>
@endsection
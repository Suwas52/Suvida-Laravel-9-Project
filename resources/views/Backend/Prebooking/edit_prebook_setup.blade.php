@extends('admin.admin_dashboard')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add Prebook Setup</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li><a href="{{route('show.prebooksetup')}}">All Prebook Setup</a></li>
                            <li class="active">Add Prebook Setup</li>
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
                    <form method="post" action="{{route('update.prebook.setup')}}">
                        @csrf
                        
                        <input type="hidden" name="id" value="{{$editPrebook_setup->id}}">

                        <div class="card-header"><strong>Setup Prebook</strong></div>
                        <div class="card-body card-block">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-row">
                                    <div class="col-6">
                                        <label for="vehicle" class="form-label">Vehicle Name</label>
                                        <select name="vehicle_id" class="form-control mb-3" id="vehicle">
                                            
                                            @foreach($vehicles as $vehicle)
                                            <option value="{{$vehicle->id}}"
                                                {{$vehicle->id ==$editPrebook_setup->vehicle_id ? 'selected' : '' }}>
                                                {{$vehicle->vehicle_name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="model_id" class="form-label">Upcoming Model Name</label>
                                        <select name="model_id" class="form-control mb-3" id="model_id">
                                            <option>Select Model</option>
                                            @foreach($models as $model)
                                            <option value="{{$model->id}}"
                                                {{$model->id ==$editPrebook_setup->model_id ? 'selected' : '' }}>
                                                {{$model->model_name}}
                                            </option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                   
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="datetime-local-start" class=" form-control-label">Prebook Start Time
                                        </label>
                                        
                                            <input type="datetime-local" class="form-control" id="datetime-local-start" name="start_time"
                                                value="{{$editPrebook_setup->start_time}}">

                                        
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="datetime-local-end" class="form-control-label">Prebook End Time
                                        </label>
                                        
                                            <input type="datetime-local" class="form-control" id="datetime-local-end" name="end_time"
                                            value="{{$editPrebook_setup->end_time}}">

                                        
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="datetime-local-end" class="form-control-label">Launch Date
                                        </label>
                                        
                                            <input type="datetime-local" class="form-control" id="datetime-local-end" name="launch_date"
                                            value="{{$editPrebook_setup->launch_date}}" >

                                        
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="limit_no" class=" form-control-label">Model Limit No
                                        </label>
                                        
                                            <input type="text" class="form-control" id="limit_no" name="limit_no"
                                            value="{{$editPrebook_setup->limit_no}}">

                                        
                                    </div>
                                </div>
                               
                                <button type="submit" class="btn btn-primary d-block ">Prebook Setup</button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>


        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="vehicle_id"]').on('change', function() {
            var vehicle_id = $(this).val();
            if (vehicle_id) {
                $.ajax({
                    url: " {{ url('/vehiclemodel/ajax') }}/" + vehicle_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="model_id"]').html('');
                        var d = $('select[name="model_id"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="model_id"]').append(
                                '<option value="' + value.id + '">' + value
                                .model_name + '</option>');
                        });
                    },
                });
            } else {
                alert('danger');
            }
        });
    });
</script>

@endsection
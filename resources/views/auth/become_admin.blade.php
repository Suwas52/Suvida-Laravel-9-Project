@extends('admin.admin_dashboard')
@section('content')
<style>
    .gradient-custom {
/* fallback for old browsers */
background: #f093fb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
}

.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="breadcrumbs mb-3">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add Brand</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li><a href="{{route('all.brand')}}">All Brand</a></li>
                            <li class="active">Add Brand</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form method="POST" action="{{route('admin.register')}}">
                @csrf

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                      <label class="form-label" for="name">Admin Name</label>
                    <input type="text" id="name" name="name" class="form-control form-control-lg" placeholder=" Admin Name"/>
                    <span class="text-danger">
                        @error('name')
                        {{$message}}
                        @enderror
                    </span>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="username">Admin Username</label>
                    <input type="text" id="username" name="username" placeholder="Admin Username"class="form-control form-control-lg"  />
                    
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                      <label class="form-label" for="email">Admin Email</label>
                    <input type="text" id="email" name="email" class="form-control form-control-lg" placeholder=" Admin Email"/>
                    <span class="text-danger">
                        @error('email')
                        {{$message}}
                        @enderror
                    </span>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="phone">Admin Phone No</label>
                    <input type="text" id="phone" name="phone" placeholder="Admin Username"class="form-control form-control-lg" />

                    
                  </div>

                </div>
              </div>

              

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                      <label class="form-label" for="password">Password</label>
                    <input type="text" id="password" name="password" class="form-control form-control-lg" placeholder="Admin Password" />
                    <span class="text-danger">
                        @error('password')
                        {{$message}}
                        @enderror
                    </span>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="password_confirmation">Confirm Password</label>
                    <input type="text" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password "class="form-control form-control-lg" />
                    
                  </div>

                </div>
              </div>


              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
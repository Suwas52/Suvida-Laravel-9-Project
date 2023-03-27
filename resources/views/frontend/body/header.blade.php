<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="{{route('main')}}" class="logo"><img src="{{asset('frontend/assets/images/logo.png')}}"
                            style="height: 60px; width: 60px; margin-left: -50px" alt="" /><em style="
                    position: absolute;
                    width: 69px;
                    height: 34px;
                    left: 60px;
                    top: 13px;
                    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial,
                      sans-serif;
                    font-style: normal;
                    font-size: 18px;
                    line-height: 34px;
                    color: #fff;
                    margin-left: -50px;
                  ">Suvida</em></a>

                    <ul class="nav">
                        <li><a href="{{route('main')}}" class="active">Home</a></li>

                        @php
                        $vehicles = App\Models\Vehicle::orderBy('vehicle_name','ASC')->limit(3)->get();
                        @endphp

                        @foreach($vehicles as $vehicle)
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true"
                                aria-expanded="false">{{$vehicle->vehicle_name}}</a>
                            @php
                            $categories
                            =App\Models\Category::where('vehicle_id',$vehicle->id)->orderBy('category_name','ASC')->get();
                            @endphp

                            <div class="dropdown-menu">
                                @foreach($categories as $category)
                                <a class="dropdown-item"
                                    href="{{ url('vehicle/'.$category->id.'/'.$category->category_slug )}}">{{$category->category_name}}
                                    <span>
                                        {{$category['vehicle']['vehicle_name']}}</span>
                                </a>

                                @endforeach
                            </div>
                        </li>
                        @endforeach

                        <li><a href="{{route('user.booking')}}">Booking</a>
                        </li>
                        <li><a href="{{route('test.ride')}}">Test Ride</a>
                        </li>

                        <li><a href="{{route('compare')}}">Compare</a></li>

                        <li><a href="{{route('contact.admin')}}">Contact</a></li>
                    </ul>
                    <ul class="nav-auth">
                        <li>
                            <a>
                                <div class="fas fa-search" id="search-btn">

                                </div>
                            </a>
                        </li>

                        @auth

                        <li>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true"
                            aria-expanded="false"><img src="{{asset('frontend/assets/images/notification.png')}}"
                                    style="height: 30px; width: 30px; margin-bottom: 5px" alt="" /></a>
                                    <div class="dropdown-menu">
                                        
                                        <div class="message media-body m-3">
                                            
                                            @php
                                            $user = Auth::user();
                                            @endphp

                                            @forelse($user->notifications as $notification)
                                            <a href="#">{{$notification->data['message']}}</a>
                                            
                                            <span class="time float-right ml-3">Just now</span>
                                            @empty

                                            @endforelse
                                            
                                            
                                           
                                    </div>             

                        <li>
                            @php
                            $totalWishlist = App\Models\Wishlist::where('user_id',Auth::user()->id)->count();
                            @endphp

                            <a href="{{route('wishlist')}}"><img src="{{asset('frontend/assets/images/wishlist.png')}}"
                                    style="height: 30px; width: 30px; margin-bottom: 5px" alt="" />
                                @if($totalWishlist >0)

                                <span>({{$totalWishlist}})</span>

                                @else
                                @endif
                            </a>
                        </li>
                        @php
                        $userData = App\Models\User::where('id',Auth::user()->id)->first();
                        @endphp

                        <li>
                            <a href="#" class="dropdown-toggle active text-center" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img class="user-avatar rounded-circle mx-4 mb-2"
                                    src="{{(!empty($userData->photo))?url('upload/userImages/'.$userData->photo):url('upload/NoImage.jpg')}}"
                                    alt="User Avatar">
                            </a>

                            <div class="dropdown-menu">
                                <a class="nav-link" href="{{route('dashboard')}}"><i class="fa fa-user"></i> My
                                    Profile</a>

                                <a class="nav-link" href="{{route('dashboard')}}"><i
                                        class="fa fa-toolbox"></i>Settings</a>

                                <a class="nav-link " href="{{route('user.logout')}}"><i
                                        class="fa fa-sign-out"></i>Logout</a>
                            </div>
                        </li>
                        @else
                        <li>
                            <a href="{{route('login')}}"><img src="{{asset('frontend/assets/images/login-icon.png')}}"
                                    style="height: 35px; width: 35px" alt="" />Log In</a>
                        </li>

                        <li>
                            <a href="{{route('register')}}"><img src="{{asset('frontend/assets/images/signup.png')}}"
                                    style="height: 30px; width: 30px; margin-bottom: 5px" alt="" />Sign Up</a>
                        </li>
                        @endauth
                    </ul>

                    <a class="menu-trigger">
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
    <form action="{{route('model.search')}}" method="post">
        @csrf
        <div class="search-form">
            <input type="search" name="search" id="search-box" placeholder="Search" />
            <span for="search-box" id="search-btn" class=" fas fa-search"></span>

            <!-- <button type="submit"><i class="fas fa-search"></i></button> -->
        </div>
    </form>
</header>
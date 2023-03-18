<header id="header" class="header">
    <div class="top-left">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('admin.dashboard')}}"><img
                    src="{{asset('backend/assets/images/logo.png')}}" alt="Logo"><em style="position: absolute; width: 69px; height: 34px;left: 145px;top:13px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                            font-style:normal;
                            font-size: 18px;
                            line-height: 34px;
                            color: red;
                            margin-left:-50px; ">SUVIDA</em></a>
            <a class="navbar-brand hidden" href="./"><img src="{{asset('backend/assets/images/logo2.png')}}"
                    alt="Logo"></a>
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div class="top-right ">
        <div class="header-menu">
            <div class="header-left">
                <button class="search-trigger"><i class="fa fa-search"></i></button>
                <div class="form-inline">
                    <form class="search-form">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                        <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                    </form>
                </div>

                <div class="dropdown for-notification">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="notification"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell"></i>
                        <span class="count bg-danger">3</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="notification">
                        <p class="red">You have 3 Notification</p>
                        <a class="dropdown-item media" href="#">
                            <i class="fa fa-check"></i>
                            <p>Server #1 overloaded.</p>
                        </a>
                        <a class="dropdown-item media" href="#">
                            <i class="fa fa-info"></i>
                            <p>Server #2 overloaded.</p>
                        </a>
                        <a class="dropdown-item media" href="#">
                            <i class="fa fa-warning"></i>
                            <p>Server #3 overloaded.</p>
                        </a>
                    </div>
                </div>

                <div class="dropdown for-message">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-envelope"></i>
                        <span class="count bg-primary">4</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="message">
                        <p class="red">You have 4 Mails</p>
                        <a class="dropdown-item media" href="#">
                            <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                            <div class="message media-body">
                                <span class="name float-left">Jonathan Smith</span>
                                <span class="time float-right">Just now</span>
                                <p>Hello, this is an example msg</p>
                            </div>
                        </a>
                        <a class="dropdown-item media" href="#">
                            <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                            <div class="message media-body">
                                <span class="name float-left">Jack Sanders</span>
                                <span class="time float-right">5 minutes ago</span>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                        </a>
                        <a class="dropdown-item media" href="#">
                            <span class="photo media-left"><img alt="avatar"
                                    src="{{asset('backend/assets/images/avatar/3.jpg')}}"></span>
                            <div class="message media-body">
                                <span class="name float-left">Cheryl Wheeler</span>
                                <span class="time float-right">10 minutes ago</span>
                                <p>Hello, this is an example msg</p>
                            </div>
                        </a>
                        <a class="dropdown-item media" href="#">
                            <span class="photo media-left"><img alt="avatar"
                                    src="{{asset('backend/assets/images/avatar/4.jpg')}}"></span>
                            <div class="message media-body">
                                <span class="name float-left">Rachel Santos</span>
                                <span class="time float-right">15 minutes ago</span>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            @php
            $id = Auth::user()->id;
            $adminData= App\Models\User::find($id);
            @endphp
            <div class="user-area dropdown float-right ">
                <a href="#" class="dropdown-toggle active text-center" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <img class="user-avatar rounded-circle p-2"
                        src="{{(!empty($adminData->photo))?url('upload/adminImages/'.$adminData->photo):url('upload/NoImage.jpg')}}"
                        alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu m-3">
                    <a class="nav-link border-0 p-3" href="{{route('admin.profile')}}">
                        <img class="user-avatar rounded-circle mx-4 mb-2"
                            src="{{(!empty($adminData->photo))?url('upload/adminImages/'.$adminData->photo):url('upload/NoImage.jpg')}}"
                            alt="User Avatar">
                        <p class="text-center mb-2">{{Auth::user()->name}}</p>
                    </a>
                    <div class="mt-1 ps-2 ">
                        <a class="nav-link" href="#"><i class="fa fa-bell"></i>Notifications <span
                                class="count">13</span></a>
                        <a class="nav-link" href="{{route('admin.setting')}}"><i
                                class="fa-solid fa-gear"></i>Settings</a>
                        <a class="nav-link text-danger" href="{{route('admin.logout')}}"><i
                                class="fa-solid fa-right-from-bracket"> </i>Logout</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>
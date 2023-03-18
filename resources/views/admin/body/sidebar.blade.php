<aside id="left-panel" class="left-panel mt-4">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">

                    <a href="{{route('admin.dashboard')}}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>

                <li>
                    <a href="{{route('all.brand')}}"> <i class="menu-icon fa-solid fa-b"></i>Brand</a>

                </li>

                <li>
                    <a href="{{route('all.vehicle')}}"> <i class="menu-icon fa-solid fa-motorcycle"></i>Vehicle</a>
                </li>
                

                <li class="menu-item-has-children dropdown">
                    <a  class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cart-plus"></i>Booking</a>
                    <ul class="sub-menu children dropdown-menu">                            
                       
                        <li><i class="fa fa-bars"></i><a href="{{ route('showBookings') }}"> All Booking</a></li>

                    </ul>
                </li>


                <li>
                    <a href="{{route('all.category')}}"> <i class="menu-icon fa fa-tasks"></i>Category</a>
                </li>

                <li>
                    <a href="{{route('all.model')}}"> <i class="menu-icon fa-sharp fa-solid fa-sitemap"></i>Model</a>
                </li>

                <li>
                    <a href="{{route('newsletters')}}"> <i class="menu-icon fa-sharp fa-solid fa-n"></i>Newsletters</a>
                </li>

                <li>
                    <a href="{{route('contactpage')}}"> <i class="menu-icon fa-sharp fa-solid fa-c"></i>Contact</a>
                </li>

                <li>
                    <a href="{{route('all.users')}}"> <i class="menu-icon fa-solid fa-users"></i>Users</a>
                </li>
                <li>
                    <a href="{{route('showPrebook')}}"> <i class="menu-icon fa-solid fa-users"></i>Prebookings</a>
                </li>

               


                <!---

                <li class=" menu-title">Bike and Scooter</li>

                <li class="menu-item-has-children dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="menu-icon fa fa-book"></i>File Manger</a>


                    <ul class="sub-menu children dropdown-menu">
                        <li> <a href="app-emailbox.html"><i class="fa-regular fa-envelope"></i>Email</a>
                        </li>
                        <li> <a href="app-chat-box.html"><i class="bx bx-right-arrow-alt"></i>Chat Box</a>
                        </li>
                        <li> <a href="app-file-manager.html"><i class="bx bx-right-arrow-alt"></i>File Manager</a>
                        </li>
                        <li> <a href="app-contact-list.html"><i class="bx bx-right-arrow-alt"></i>Contatcs</a>
                        </li>
                        <li> <a href="app-to-do.html"><i class="bx bx-right-arrow-alt"></i>Todo List</a>
                        </li>
                        <li> <a href="app-invoice.html"><i class="bx bx-right-arrow-alt"></i>Invoice</a>
                        </li>
                        <li> <a href="app-fullcalender.html"><i class="bx bx-right-arrow-alt"></i>Calendar</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="menu-icon fa fa-cogs"></i>Components</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                        <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>

                        <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                        <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                        <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                        <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                        <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                        <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                        <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
                    </ul>
                </li>


                <li class="menu-title">Icons</li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="menu-icon fa fa-tasksfa fa-tasks"></i>Icons</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font
                                Awesome</a></li>
                        <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a>
                        </li>
                        <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                        <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="menu-icon fa fa-glass"></i>Authentication</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                        <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a>
                        </li>
                    </ul>
                </li> --->
            </ul>
        </div>
    </nav>
</aside>
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        {!! Html::image('back/img/profile_small.jpg', 'Image Profil', ['class'=>'img-circle']) !!}
                         </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->name }}</strong>
                        </span> <span class="text-muted text-xs block">{{ Auth::user()->roles->name }} <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/logout') }}">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="active">
                <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-cogs"></i> <span class="nav-label">Master Data</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ url('family') }}"><i class="fa fa-users"></i>Family</a></li>
                    <li><a href="{{ url('category') }}"><i class="fa fa-users"></i>Catagory</a></li>
                    <li><a href="{{ url('unit') }}"><i class="fa fa-users"></i>Unit</a></li>
                    <li><a href="{{ url('product') }}"><i class="fa fa-users"></i>Product</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-cogs"></i> <span class="nav-label">Setting</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ url('user') }}"><i class="fa fa-users"></i>User Management</a></li>
                    <li><a href="{{ url('role') }}"><i class="fa fa-users"></i>Role</a></li>
                    <li><a href="{{ url('menu') }}"><i class="fa fa-users"></i>Menu</a></li>
                </ul>
            </li>
            <li class="landing_link">
                <a href="{{ url('speedshop') }}"><i class="fa fa-star"></i> <span class="nav-label">Landing Page</span> <span class="label label-warning pull-right">NEW</span></a>
            </li>
            
        </ul>

    </div>
</nav>

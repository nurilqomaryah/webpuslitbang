<div id="wrapper">
    <nav class="navbar navbar-default top-navbar" role="navigation">
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <ul class="dropdown-menu dropdown-user">
                    <li>
                        <a href=""><i class="fa fa-user fa-fw"></i> Edit Profil</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href=""><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">Puslitbangwas</div>
                </a>
                <!-- Divider -->
                <hr class="sidebar-divider my-0">
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('crud/users/index')}}">
                        <i class="fa fa-sitemap"></i></i>
                        <span>Management User</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('users/index')}}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Management Role</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('users/index')}}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Management Category</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('users/index')}}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Management Tag</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('users/index')}}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Manajemen Post</span></a>
                </li>
            </ul>
        </div>
    </nav>
</div>











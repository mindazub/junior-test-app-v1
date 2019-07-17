<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/dist/img/admin6.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> {{ __('Online') }}</a>
            </div>
        </div>

        <!-- search form (Optional) -->
{{--        <form action="#" method="get" class="sidebar-form">--}}
{{--            <div class="input-group">--}}
{{--                <input type="text" name="q" class="form-control" placeholder="Search...">--}}
{{--                <span class="input-group-btn">--}}
{{--              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>--}}
{{--              </button>--}}
{{--            </span>--}}
{{--            </div>--}}
{{--        </form>--}}
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="header">{{ __('SIMPLE TABLES') }}</li>

            <li><a href="{{ url(app()->getLocale() . '/dashboard/user') }}"><i class="fa fa-user"></i> <span>{{ __('Users') }}</span></a></li>
            <li><a href="{{ url(app()->getLocale() . '/dashboard/employee') }}"><i class="fa fa-address-book"></i> <span>{{ __('Employees') }}</span></a></li>
            <li><a href="{{ url(app()->getLocale() . '/dashboard/company') }}"><i class="fa fa-columns"></i> <span>{{ __('Companies') }}</span></a></li>

            <li class="header">{{ __('DATATABLES') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="{{ url(app()->getLocale() . '/'.'dashboard/users-datatable') }}"><i class="fa fa-user"></i> <span>{{ __('Users') }}</span></a></li>
            <li><a href="{{ url(app()->getLocale() . '/'.'dashboard/employee-datatable') }}"><i class="fa fa-address-book"></i> <span>{{ __('Employees') }}</span></a></li>
            <li><a href="{{ url(app()->getLocale() . '/'.'dashboard/company-datatable') }}"><i class="fa fa-columns"></i> <span>{{ __('Companies') }}</span></a></li>

{{--            <li class="header">{{ __('API') }}</li>--}}
{{--            <li><a href="{{ url(app()->getLocale() . '/'.'nytimes') }}"><i class="fa fa-user"></i> <span>{{ __('NYT Vue News') }}</span></a></li>--}}
            <li class="header">{{ __('CV') }}</li>

            <li><a href="{{ url(app()->getLocale() . '/'.'dashboard/cv-webdev') }}"><i class="fa fa-laptop"></i> <span>CV 4 Web Dev</span></a></li>
            <li><a href="{{ url(app()->getLocale() . '/'.'dashboard/cv-university') }}"><i class="fa fa-university"></i> <span>CV 4 Scientist</span></a></li>

            <li class="header">{{ __('CONTROL') }}</li>
{{--            <li><a href="{{ route('dashboard.settings') }}"><i class="fa fa-cog"></i><span>Settings</span></a></li>--}}
            <li>

                <a href="{{ route('logout', app()->getLocale()) }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i>
                    <span>{{ __('Logout') }}</span>
                </a>

                <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </li>

        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

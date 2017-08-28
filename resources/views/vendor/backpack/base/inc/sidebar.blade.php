@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="https://placehold.it/160x160/00a65a/ffffff/&text={{ mb_substr(Auth::user()->name, 0, 1) }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li class="header">{{ trans('backpack::base.administration') }}</li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>

          <li class="header">{{ trans('backpack_custom.schedule') }}</li>
          <li><a href="{{ url('admin/periods') }}"><i class="fa fa-calendar"></i> <span>{{ trans('backpack_custom.periods') }}</span></a></li>
          <li><a href="{{ url('admin/performances') }}"><i class="fa fa-calendar-check-o"></i> <span>{{ trans('backpack_custom.performances') }}</span></a></li>

          <li class="treeview">
            <a href="#"><i class="fa fa-cog"></i><span>{{ trans('backpack_custom.settings') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url('admin/productions') }}"><i class="fa fa-music"></i> <span>{{ trans('backpack_custom.productions') }}</span></a></li>
              <li><a href="{{ url('admin/cities') }}"><i class="fa fa-building"></i> <span>{{ trans('backpack_custom.cities') }}</span></a></li>
              <li><a href="{{ url('admin/locations') }}"><i class="fa fa-bank"></i> <span>{{ trans('backpack_custom.locations') }}</span></a></li>
              <li><a href="{{ url('admin/timezones') }}"><i class="fa fa-map-o"></i> <span>{{ trans('backpack_custom.timezones') }}</span></a></li>
            </ul>
          </li>
          <!-- ======================================= -->
          <li class="header">{{ trans('backpack::base.user') }}</li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif

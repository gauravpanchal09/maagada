@inject('request', 'Illuminate\Http\Request')

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{ asset('dist/img/avatar5.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{ $request->segment(1) === 'home' ? 'active' : '' }}">
            <a href="{{ url('/') }}">
                <i class="fa fa-dashboard"></i> <span>{{ __('Dashboard') }}</span>
            </a>
        </li>
        <!-- <li class="{{ $request->segment(1) === 'hospitals' ? 'active' : '' }}">
            <a href="{{ route('hospitals.index') }}">
                <i class="fa fa-hospital-o"></i> <span>{{ __('Hospitals') }}</span>
            </a>
        </li> -->
        <li class="{{ $request->segment(1) === 'patients' ? 'active' : '' }}">
            <a href="{{ route('patients.index') }}">
                <i class="fa fa-users"></i> <span>{{ __('Patients') }}</span>
            </a>
        </li>
        <!-- <li class="{{ $request->segment(1) === 'hospital-patients' ? 'active' : '' }}">
            <a href="{{ route('hospital-patients.index') }}">
                <i class="fa fa-ambulance"></i> <span>{{ __('Hospital Patients') }}</span>
            </a>
        </li> -->
        <li class="treeview {{ $request->segment(1) === 'tests' ? 'active' : '' }}">
            <a href="#">
                <i class="fa fa-medkit"></i> <span>{{ __('Tests') }}</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <!-- <li class="{{ $request->segment(2) === 'anc' ? 'active' : '' }}">
                    <a href="{{ route('anc.create') }}"><i class="fa fa-circle-o"></i>{{ __('ANC') }}</a>
                </li> -->
                <li class="{{ $request->segment(2) === 'in' ? 'active' : '' }}">
                    <a href="{{ route('in.create') }}"><i class="fa fa-circle-o"></i>{{ __('Infertility') }}</a>
                </li>
                <!-- <li class="{{ $request->segment(2) === 'pl' ? 'active' : '' }}">
                    <a href="{{ route('pl.create') }}"><i class="fa fa-circle-o"></i>{{ __('Gynae') }}</a>
                </li> -->
            </ul>
        </li>
        <!-- <li class="{{ $request->segment(1) === 'monthly-pregnancies' ? 'active' : '' }}">
            <a href="{{ route('monthly-pregnancies.index') }}">
                <i class="fa fa-calendar-plus-o"></i> <span>{{ __('Monthly Pregnancies') }}</span>
            </a>
        </li> -->
        <li class="{{ $request->segment(1) === 'reports' ? 'active' : '' }}">
            <a href="{{ route('reports.index') }}">
                <i class="fa fa-file"></i> <span>{{ __('Reports') }}</span>
            </a>
        </li>
    </ul>
</section>
<!-- /.sidebar -->

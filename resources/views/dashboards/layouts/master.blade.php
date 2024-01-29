<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>
		@include('dashboards.layouts.head')
        @include('dashboards.messages_alert')

    </head>

	<body class="main-body app sidebar-mini">
		<!-- Loader -->
		<div id="global-loader">
			<img src="{{URL::asset('Dashboard/img/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->
        <!-- main-sidebar -->
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        <aside class="app-sidebar sidebar-scroll">
            <div class="main-sidebar-header active">
                <a class="desktop-logo logo-light active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('Dashboard/img/brand/logo.png')}}" class="main-logo" alt="logo"></a>
                <a class="desktop-logo logo-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('Dashboard/img/brand/logo-white.png')}}" class="main-logo dark-theme" alt="logo"></a>
                <a class="logo-icon mobile-logo icon-light active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('Dashboard/img/brand/favicon.png')}}" class="logo-icon" alt="logo"></a>
                <a class="logo-icon mobile-logo icon-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('Dashboard/img/brand/favicon-white.png')}}" class="logo-icon dark-theme" alt="logo"></a>
            </div>
            <div class="main-sidemenu">
                <div class="app-sidebar__user clearfix">
                    <div class="dropdown user-pro-body">
                        <div class="">
                            @if(auth()->guard('admin')->check() && auth()->guard('admin')->user()->image->file_name)
                                <!-- Display admin's image -->
                                <img alt="admin-img" class="avatar avatar-xl brround" src="{{ URL::asset('attachments/Admins/' . auth()->guard('admin')->user()->image->file_name) }}">
                            @elseif(auth()->check() && auth()->user()->image->file_name)
                                <!-- Display user's image -->
                                <img alt="user-img" class="avatar avatar-xl brround" src="{{ URL::asset('attachments/Patients/' . auth()->user()->image->file_name) }}">
                            @endif
                        </div>
                        <div class="user-info">
                            <h4 class="font-weight-semibold mt-3 mb-0">{{auth()->user()->name}}</h4>
                            <span class="mb-0 text-muted">{{auth()->user()->email}}</span>
                        </div>
                    </div>
                </div>
                @if(auth()->guard('admin')->user())
                @include('dashboards.layouts.main-sidebar.admin-sidebar-main')
                @else
                    @include('dashboards.layouts.main-sidebar.patient-sidebar-main')
                @endif
            </div>
        </aside>
        <!-- main-sidebar -->
		<!-- main-content -->
		<div class="main-content app-content">
			@include('dashboards.layouts.main-header')
			<!-- container -->
			<div class="container-fluid">
				@yield('page-header')
				@yield('content')
				@include('dashboards.layouts.sidebar')
				@include('dashboards.layouts.models')
            	@include('dashboards.layouts.footer')
				@include('dashboards.layouts.footer-scripts')
	</body>
</html>

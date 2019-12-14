<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="../"><!--end::Base Path -->
        <meta charset="utf-8"/>

        <title>BPLC | Teachers Dashboard</title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Asap+Condensed:500">        <!--end::Fonts -->

                    <!--begin::Page Vendors Styles(used by this page) -->
                            <link href="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
                        <!--end::Page Vendors Styles -->
        
        
<!--begin:: Global Mandatory Vendors -->
<link href="{{asset('assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css" />
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
{{-- <link href="{{asset('assets/vendors/general/tether/dist/css/tether.css')}}" rel="stylesheet" type="text/css" /> --}}
<link href="{{asset('assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css')}}" rel="stylesheet" type="text/css" />
{{-- <link href="{{asset('assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css')}}" rel="stylesheet" type="text/css" /> --}}
{{-- <link href="{{asset('assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css')}}" rel="stylesheet" type="text/css" /> --}}
<link href="{{asset('assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
{{-- <link href="{{asset('assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css')}}" rel="stylesheet" type="text/css" /> --}}
<link href="{{asset('assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css')}}" rel="stylesheet" type="text/css" />
{{-- <link href="{{asset('assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css')}}" rel="stylesheet" type="text/css" /> --}}
{{-- <link href="{{asset('assets/vendors/general/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/general/nouislider/distribute/nouislider.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/general/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/general/quill/dist/quill.snow.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/general/@yaireo/tagify/dist/tagify.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/general/summernote/dist/summernote.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/general/animate.css/animate.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/general/toastr/build/toastr.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/general/dual-listbox/dist/dual-listbox.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/general/morris.js/morris.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/general/sweetalert2/dist/sweetalert2.css')}}" rel="stylesheet" type="text/css" /> --}}
{{-- <link href="{{asset('assets/vendors/general/socicon/css/socicon.css')}}" rel="stylesheet" type="text/css" /> --}}
<link href="{{asset('assets/vendors/custom/vendors/line-awesome/css/line-awesome.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/custom/vendors/flaticon/flaticon.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/custom/vendors/flaticon2/flaticon.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css" />
<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Styles(used by all pages) -->
                    
                    <link href="{{asset('assets/css/demo8/style.bundle.css')}}" rel="stylesheet" type="text/css" />
                <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
                <!--end::Layout Skins -->

        <link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.ico')}}" />
    </head>
    <!-- end::Head -->

    <!-- begin::Body -->
    <body  style="background-image: url({{asset('assets/media/demos/demo8/bg-1.jpg)')}}"  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading"  >

       
    	<!-- begin:: Page -->
	<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " >
	<div class="kt-header-mobile__logo">
		<a href="demo8/index.html">
			<img alt="Logo" src="{{asset('assets/media/logos/logo-8-sm.png')}}"/>
		</a>
	</div>
	<div class="kt-header-mobile__toolbar">
		
		<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
		<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more-1"></i></button>
	</div>
</div>
<!-- end:: Header Mobile -->
	<div class="kt-grid kt-grid--hor kt-grid--root">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
				<!-- begin:: Header -->
<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed "  data-ktheader-minimize="on" >
	<div class="kt-header__top">
		<div class="kt-container ">
			<!-- begin:: Brand -->
<div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
	<div class="kt-header__brand-logo">
		<a href="demo8/index.html">
			<img alt="Logo" src="{{asset('assets/media/logos/logo-8.png')}}" class="kt-header__brand-logo-default"/>
			<img alt="Logo" src="{{asset('assets/media/logos/logo-8-inverse.png')}}" class="kt-header__brand-logo-sticky"/>			
		</a>		
	</div> 
</div>
<!-- end:: Brand -->			<!-- begin:: Header Topbar -->
<div class="kt-header__topbar">
	{{-- <!--begin: Search -->
	<div class="kt-header__topbar-item kt-header__topbar-item--search">
		<div class="kt-header__topbar-wrapper">
			<div class="kt-quick-search kt-quick-search--inline kt-quick-search--result-compact" id="kt_quick_search_inline">
    <form method="get" class="kt-quick-search__form">
        <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
            <input type="text" class="form-control kt-quick-search__input" placeholder="Search...">
            <div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close" style="display: none;"></i></span></div>
        </div>
    </form>
    <div id="kt_quick_search_toggle" data-toggle="dropdown" data-offset="0px,10px"></div>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
        <div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">

        </div>
    </div>
</div>
		</div>
	</div>
	<!--end: Search --> --}}

	<!--begin: Notifications -->
	<div class="kt-header__topbar-item dropdown">
		<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,10px">
			<span class="kt-header__topbar-icon">
				<i class="flaticon2-bell-alarm-symbol"></i>
				<span class="kt-badge kt-badge--success kt-hidden"></span>
			</span>
		</div>
		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
			<form>
                <!--begin: Head -->
    <div class="kt-head kt-head--skin-light kt-head--fit-x kt-head--fit-b">
        <h3 class="kt-head__title">
            User Notifications
            &nbsp;
            <span class="btn btn-label-primary btn-sm btn-bold btn-font-md">23 new</span>
        </h3>
        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
            <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications" role="tab" aria-selected="true">Alerts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#topbar_notifications_events" role="tab" aria-selected="false">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs" role="tab" aria-selected="false">Logs</a>
            </li>
        </ul>
    </div>
<!--end: Head -->

<div class="tab-content">
    <div class="tab-pane active show" id="topbar_notifications_notifications" role="tabpanel">
        <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
            <a href="#" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-line-chart kt-font-success"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                        New order has been received
                    </div>
                    <div class="kt-notification__item-time">
                        2 hrs ago
                    </div>
                </div>
            </a>
            <a href="#" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-box-1 kt-font-brand"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                        New customer is registered
                    </div>
                    <div class="kt-notification__item-time">
                        3 hrs ago
                    </div>
                </div>
            </a>
            <a href="#" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-chart2 kt-font-danger"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                        Application has been approved
                    </div>
                    <div class="kt-notification__item-time">
                        3 hrs ago
                    </div>
                </div>
            </a>
            <a href="#" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-image-file kt-font-warning"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                        New file has been uploaded
                    </div>
                    <div class="kt-notification__item-time">
                        5 hrs ago
                    </div>
                </div>
            </a>
            <a href="#" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-drop kt-font-info"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                        New user feedback received
                    </div>
                    <div class="kt-notification__item-time">
                        8 hrs ago
                    </div>
                </div>
            </a>
            <a href="#" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-pie-chart-2 kt-font-success"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                        System reboot has been successfully completed
                    </div>
                    <div class="kt-notification__item-time">
                        12 hrs ago
                    </div>
                </div>
            </a>
            <a href="#" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-favourite kt-font-danger"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                        New order has been placed
                    </div>
                    <div class="kt-notification__item-time">
                        15 hrs ago
                    </div>
                </div>
            </a>
            <a href="#" class="kt-notification__item kt-notification__item--read">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-safe kt-font-primary"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                        Company meeting canceled
                    </div>
                    <div class="kt-notification__item-time">
                        19 hrs ago
                    </div>
                </div>
            </a>
            <a href="#" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-psd kt-font-success"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                        New report has been received
                    </div>
                    <div class="kt-notification__item-time">
                        23 hrs ago
                    </div>
                </div>
            </a>
            <a href="#" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon-download-1 kt-font-danger"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                        Finance report has been generated
                    </div>
                    <div class="kt-notification__item-time">
                        25 hrs ago
                    </div>
                </div>
            </a>
            <a href="#" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon-security kt-font-warning"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                        New customer comment recieved
                    </div>
                    <div class="kt-notification__item-time">
                        2 days ago
                    </div>
                </div>
            </a>
            <a href="#" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-pie-chart kt-font-success"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                        New customer is registered
                    </div>
                    <div class="kt-notification__item-time">
                        3 days ago
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
        <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
            <a href="#" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-psd kt-font-success"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                        New report has been received
                    </div>
                    <div class="kt-notification__item-time">
                        23 hrs ago
                    </div>
                </div>
            </a>
            <a href="#" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon-download-1 kt-font-danger"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                        Finance report has been generated
                    </div>
                    <div class="kt-notification__item-time">
                        25 hrs ago
                    </div>
                </div>
            </a>
            <a href="#" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-line-chart kt-font-success"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                        New order has been received
                    </div>
                    <div class="kt-notification__item-time">
                        2 hrs ago
                    </div>
                </div>
            </a>
            <a href="#" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-box-1 kt-font-brand"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                        New customer is registered
                    </div>
                    <div class="kt-notification__item-time">
                        3 hrs ago
                    </div>
                </div>
            </a>
            <a href="#" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-chart2 kt-font-danger"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                        Application has been approved
                    </div>
                    <div class="kt-notification__item-time">
                        3 hrs ago
                    </div>
                </div>
            </a>
            <a href="#" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-image-file kt-font-warning"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                        New file has been uploaded
                    </div>
                    <div class="kt-notification__item-time">
                        5 hrs ago
                    </div>
                </div>
            </a>
            <a href="#" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-drop kt-font-info"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                        New user feedback received
                    </div>
                    <div class="kt-notification__item-time">
                        8 hrs ago
                    </div>
                </div>
            </a>
            <a href="#" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-pie-chart-2 kt-font-success"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                        System reboot has been successfully completed
                    </div>
                    <div class="kt-notification__item-time">
                        12 hrs ago
                    </div>
                </div>
            </a>
            <a href="#" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-favourite kt-font-brand"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                        New order has been placed
                    </div>
                    <div class="kt-notification__item-time">
                        15 hrs ago
                    </div>
                </div>
            </a>
            <a href="#" class="kt-notification__item kt-notification__item--read">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-safe kt-font-primary"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                        Company meeting canceled
                    </div>
                    <div class="kt-notification__item-time">
                        19 hrs ago
                    </div>
                </div>
            </a>
            <a href="#" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-psd kt-font-success"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                        New report has been received
                    </div>
                    <div class="kt-notification__item-time">
                        23 hrs ago
                    </div>
                </div>
            </a>
            <a href="#" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon-download-1 kt-font-danger"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                        Finance report has been generated
                    </div>
                    <div class="kt-notification__item-time">
                        25 hrs ago
                    </div>
                </div>
            </a>
            <a href="#" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon-security kt-font-warning"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                        New customer comment recieved
                    </div>
                    <div class="kt-notification__item-time">
                        2 days ago
                    </div>
                </div>
            </a>
            <a href="#" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-pie-chart kt-font-success"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                        New customer is registered
                    </div>
                    <div class="kt-notification__item-time">
                        3 days ago
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
        <div class="kt-grid kt-grid--ver" style="min-height: 200px;">
            <div class="kt-grid kt-grid--hor kt-grid__item kt-grid__item--fluid kt-grid__item--middle">
                <div class="kt-grid__item kt-grid__item--middle kt-align-center">
                    All caught up!
                    <br>No new notifications.
                </div>
            </div>
        </div>
    </div>
</div>
            </form>
		</div>
	</div>
	<!--end: Notifications -->

	<!--begin: Quick actions -->
	<div class="kt-header__topbar-item dropdown">
		<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,10px">
			<span class="kt-header__topbar-icon"><i class="flaticon2-gear"></i></span>
		</div>
		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
			<form>
                <!--begin: Head -->
    <div class="kt-head kt-head--skin-light">
        <h3 class="kt-head__title">
            User Quick Actions 
            <span class="kt-space-15"></span>
            <span class="btn btn-success btn-sm btn-bold btn-font-md">23 tasks pending</span>
        </h3>
    </div>
<!--end: Head -->

<!--begin: Grid Nav -->
<div class="kt-grid-nav kt-grid-nav--skin-light">
    <div class="kt-grid-nav__row">
        <a href="#" class="kt-grid-nav__item">
            <span class="kt-grid-nav__icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"/>
        <path d="M4.3618034,10.2763932 L4.8618034,9.2763932 C4.94649941,9.10700119 5.11963097,9 5.30901699,9 L15.190983,9 C15.4671254,9 15.690983,9.22385763 15.690983,9.5 C15.690983,9.57762255 15.6729105,9.65417908 15.6381966,9.7236068 L15.1381966,10.7236068 C15.0535006,10.8929988 14.880369,11 14.690983,11 L4.80901699,11 C4.53287462,11 4.30901699,10.7761424 4.30901699,10.5 C4.30901699,10.4223775 4.32708954,10.3458209 4.3618034,10.2763932 Z M14.6381966,13.7236068 L14.1381966,14.7236068 C14.0535006,14.8929988 13.880369,15 13.690983,15 L4.80901699,15 C4.53287462,15 4.30901699,14.7761424 4.30901699,14.5 C4.30901699,14.4223775 4.32708954,14.3458209 4.3618034,14.2763932 L4.8618034,13.2763932 C4.94649941,13.1070012 5.11963097,13 5.30901699,13 L14.190983,13 C14.4671254,13 14.690983,13.2238576 14.690983,13.5 C14.690983,13.5776225 14.6729105,13.6541791 14.6381966,13.7236068 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>
        <path d="M17.369,7.618 C16.976998,7.08599734 16.4660031,6.69750122 15.836,6.4525 C15.2059968,6.20749878 14.590003,6.085 13.988,6.085 C13.2179962,6.085 12.5180032,6.2249986 11.888,6.505 C11.2579969,6.7850014 10.7155023,7.16999755 10.2605,7.66 C9.80549773,8.15000245 9.45550123,8.72399671 9.2105,9.382 C8.96549878,10.0400033 8.843,10.7539961 8.843,11.524 C8.843,12.3360041 8.96199881,13.0779966 9.2,13.75 C9.43800119,14.4220034 9.7774978,14.9994976 10.2185,15.4825 C10.6595022,15.9655024 11.1879969,16.3399987 11.804,16.606 C12.4200031,16.8720013 13.1129962,17.005 13.883,17.005 C14.681004,17.005 15.3879969,16.8475016 16.004,16.5325 C16.6200031,16.2174984 17.1169981,15.8010026 17.495,15.283 L19.616,16.774 C18.9579967,17.6000041 18.1530048,18.2404977 17.201,18.6955 C16.2489952,19.1505023 15.1360064,19.378 13.862,19.378 C12.6999942,19.378 11.6325049,19.1855019 10.6595,18.8005 C9.68649514,18.4154981 8.8500035,17.8765035 8.15,17.1835 C7.4499965,16.4904965 6.90400196,15.6645048 6.512,14.7055 C6.11999804,13.7464952 5.924,12.6860058 5.924,11.524 C5.924,10.333994 6.13049794,9.25950479 6.5435,8.3005 C6.95650207,7.34149521 7.5234964,6.52600336 8.2445,5.854 C8.96550361,5.18199664 9.8159951,4.66400182 10.796,4.3 C11.7760049,3.93599818 12.8399943,3.754 13.988,3.754 C14.4640024,3.754 14.9609974,3.79949954 15.479,3.8905 C15.9970026,3.98150045 16.4939976,4.12149906 16.97,4.3105 C17.4460024,4.49950095 17.8939979,4.7339986 18.314,5.014 C18.7340021,5.2940014 19.0909985,5.62999804 19.385,6.022 L17.369,7.618 Z" id="C" fill="#000000"/>
    </g>
</svg>            </span>
            <span class="kt-grid-nav__title">Accounting</span>
            <span class="kt-grid-nav__desc">eCommerce</span>
        </a>
        <a href="#" class="kt-grid-nav__item">
            <span class="kt-grid-nav__icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"/>
        <path d="M14.8571499,13 C14.9499122,12.7223297 15,12.4263059 15,12.1190476 L15,6.88095238 C15,5.28984632 13.6568542,4 12,4 L11.7272727,4 C10.2210416,4 9,5.17258756 9,6.61904762 L10.0909091,6.61904762 C10.0909091,5.75117158 10.823534,5.04761905 11.7272727,5.04761905 L12,5.04761905 C13.0543618,5.04761905 13.9090909,5.86843034 13.9090909,6.88095238 L13.9090909,12.1190476 C13.9090909,12.4383379 13.8240964,12.7385644 13.6746497,13 L10.3253503,13 C10.1759036,12.7385644 10.0909091,12.4383379 10.0909091,12.1190476 L10.0909091,9.5 C10.0909091,9.06606198 10.4572216,8.71428571 10.9090909,8.71428571 C11.3609602,8.71428571 11.7272727,9.06606198 11.7272727,9.5 L11.7272727,11.3333333 L12.8181818,11.3333333 L12.8181818,9.5 C12.8181818,8.48747796 11.9634527,7.66666667 10.9090909,7.66666667 C9.85472911,7.66666667 9,8.48747796 9,9.5 L9,12.1190476 C9,12.4263059 9.0500878,12.7223297 9.14285008,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L14.8571499,13 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>
        <path d="M9,10.3333333 L9,12.1190476 C9,13.7101537 10.3431458,15 12,15 C13.6568542,15 15,13.7101537 15,12.1190476 L15,10.3333333 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9,10.3333333 Z M10.0909091,11.1212121 L12,12.5 L13.9090909,11.1212121 L13.9090909,12.1190476 C13.9090909,13.1315697 13.0543618,13.952381 12,13.952381 C10.9456382,13.952381 10.0909091,13.1315697 10.0909091,12.1190476 L10.0909091,11.1212121 Z" id="Combined-Shape" fill="#000000"/>
    </g>
</svg>            </span>
            <span class="kt-grid-nav__title">Administration</span>
            <span class="kt-grid-nav__desc">Console</span>
        </a>
    </div>
    <div class="kt-grid-nav__row">
        <a href="#" class="kt-grid-nav__item">
            <span class="kt-grid-nav__icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"/>
        <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" id="Combined-Shape" fill="#000000"/>
        <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" id="Path" fill="#000000" opacity="0.3"/>
    </g>
</svg>            </span>
            <span class="kt-grid-nav__title">Projects</span>
            <span class="kt-grid-nav__desc">Pending Tasks</span>
        </a>
        <a href="#" class="kt-grid-nav__item">
            <span class="kt-grid-nav__icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
        <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg>            </span>
            <span class="kt-grid-nav__title">Customers</span>
            <span class="kt-grid-nav__desc">Latest cases</span>
        </a>
    </div>
</div>
<!--end: Grid Nav -->            </form>
		</div>
	</div>
	<!--end: Quick actions -->

	<!--begin: User bar -->
	<div class="kt-header__topbar-item kt-header__topbar-item--user">
		<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,10px">
			<span class="kt-header__topbar-welcome kt-visible-desktop">Hi,</span>
			<span class="kt-header__topbar-username kt-visible-desktop">Nick</span>
			<img alt="Pic" src="{{asset('assets/media/users/300_21.jpg')}}"/>
			<span class="kt-header__topbar-icon kt-bg-brand kt-font-lg kt-font-bold kt-font-light kt-hidden">S</span>
			<span class="kt-header__topbar-icon kt-hidden"><i class="flaticon2-user-outline-symbol"></i></span>
		</div>
		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
			<!--begin: Head -->
    <div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
        <div class="kt-user-card__avatar">
            <img class="kt-hidden-" alt="Pic" src="{{asset('assets/media/users/300_25.jpg')}}" />
            <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
            <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
        </div>
        <div class="kt-user-card__name">
            Sean Stone
        </div>
        <div class="kt-user-card__badge">
            <span class="btn btn-label-primary btn-sm btn-bold btn-font-md">23 messages</span>
        </div>
    </div>
<!--end: Head -->

<!--begin: Navigation -->
<div class="kt-notification">
    <a href="demo8/custom/apps/user/profile-1/personal-information.html" class="kt-notification__item">
        <div class="kt-notification__item-icon">
            <i class="flaticon2-calendar-3 kt-font-success"></i>
        </div>
        <div class="kt-notification__item-details">
            <div class="kt-notification__item-title kt-font-bold">
                My Profile
            </div>
            <div class="kt-notification__item-time">
                Account settings and more
            </div>
        </div>
    </a>
    <a href="demo8/custom/apps/user/profile-3.html" class="kt-notification__item">
        <div class="kt-notification__item-icon">
            <i class="flaticon2-mail kt-font-warning"></i>
        </div>
        <div class="kt-notification__item-details">
            <div class="kt-notification__item-title kt-font-bold">
                My Messages
            </div>
            <div class="kt-notification__item-time">
                Inbox and tasks
            </div>
        </div>
    </a>
    <a href="demo8/custom/apps/user/profile-2.html" class="kt-notification__item">
        <div class="kt-notification__item-icon">
            <i class="flaticon2-rocket-1 kt-font-danger"></i>
        </div>
        <div class="kt-notification__item-details">
            <div class="kt-notification__item-title kt-font-bold">
                My Activities
            </div>
            <div class="kt-notification__item-time">
                Logs and notifications
            </div>
        </div>
    </a>
    <a href="demo8/custom/apps/user/profile-3.html" class="kt-notification__item">
        <div class="kt-notification__item-icon">
            <i class="flaticon2-hourglass kt-font-brand"></i>
        </div>
        <div class="kt-notification__item-details">
            <div class="kt-notification__item-title kt-font-bold">
                My Tasks
            </div>
            <div class="kt-notification__item-time">
                latest tasks and projects
            </div>
        </div>
    </a>

    <a href="demo8/custom/apps/user/profile-1/overview.html" class="kt-notification__item">
        <div class="kt-notification__item-icon">
            <i class="flaticon2-cardiogram kt-font-warning"></i>
        </div>
        <div class="kt-notification__item-details">
            <div class="kt-notification__item-title kt-font-bold">
                Billing
            </div>
            <div class="kt-notification__item-time">
                billing & statements <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded">2 pending</span>
            </div>
        </div>
    </a>
    <div class="kt-notification__custom kt-space-between">
        <a href="demo8/custom/user/login-v2.html" target="_blank" class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>

        <a href="demo8/custom/user/login-v2.html" target="_blank" class="btn btn-clean btn-sm btn-bold">Upgrade Plan</a>
    </div>
</div>
<!--end: Navigation -->
		</div>
	</div>
	<!--end: User bar -->


</div>
<!-- end:: Header Topbar -->
		</div>
	</div>
	<div class="kt-header__bottom">
		<div class="kt-container ">
			<!-- begin: Header Menu -->
<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
    <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile "  >
        <ul class="kt-menu__nav ">
            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"  
                data-ktmenu-submenu-toggle="hover" aria-haspopup="false">
                <a  href="#" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Overview</span></a>
            </li>

            <li class="kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel"  
                data-ktmenu-submenu-toggle="hover" aria-haspopup="false">
                <a  href="#" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Personal Information</span></a>
            </li>

            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"  
                data-ktmenu-submenu-toggle="hover" aria-haspopup="false">
                <a  href="#" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Class Schedule</span></a>
            </li>

    </div>
</div>
<!-- end: Header Menu -->		</div>
	</div>
</div>
<!-- end:: Header -->
				<div class="kt-container  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch">
					<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
													<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
									
<!-- begin:: Subheader -->
{{-- <div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container ">
        <div class="kt-subheader__main">
            
            <h3 class="kt-subheader__title">
                                    Edit User                           
            </h3>

            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            
            <div class="kt-subheader__group" id="kt_subheader_search">
                <span class="kt-subheader__desc" id="kt_subheader_total">
                                            Alex Stone                                    </span>
                
                            </div>

                    </div>   

    </div>
</div> --}}
<!-- end:: Subheader -->


@php 
    $active_tabpanel = session('tabpanel') ? session('tabpanel') : 'Profile';        
@endphp

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet kt-portlet--tabs">
<div class="kt-portlet__head">
    <div class="kt-portlet__head-toolbar">
        <ul class="nav nav-tabs nav-tabs-space-xl nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand" role="tablist">
            <li class="nav-item">

                <a class="nav-link {{$active_tabpanel == "Profile" ? 'active' : '' }}" data-toggle="tab" href="#kt_user_edit_tab_1" role="tab">

                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" id="Mask" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" id="Mask-Copy" fill="#000000" fill-rule="nonzero"/>
                        </g>
</svg>                        Profile
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{$active_tabpanel == "Education" ? 'active' : '' }}" data-toggle="tab" href="#kt_user_edit_tab_5" role="tab">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect id="bound" x="0" y="0" width="24" height="24"/>
                            <path d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z" id="Combined-Shape" fill="#000000"/>
                            <path d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z" id="Path-41-Copy" fill="#000000" opacity="0.3"/>
                        </g>
                    </svg>
                             Education
                </a>
            </li>
            
            
            <li class="nav-item">
                <a class="nav-link {{$active_tabpanel == "Work Experience" ? 'active' : '' }}" data-toggle="tab" href="#kt_user_edit_tab_1" role="tab">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect id="bound" x="0" y="0" width="24" height="24"/>
                            <path d="M3.51471863,18.6568542 L13.4142136,8.75735931 C13.8047379,8.36683502 14.4379028,8.36683502 14.8284271,8.75735931 L16.2426407,10.1715729 C16.633165,10.5620972 16.633165,11.1952621 16.2426407,11.5857864 L6.34314575,21.4852814 C5.95262146,21.8758057 5.31945648,21.8758057 4.92893219,21.4852814 L3.51471863,20.0710678 C3.12419433,19.6805435 3.12419433,19.0473785 3.51471863,18.6568542 Z" id="Rectangle-2" fill="#000000" opacity="0.3"/>
                            <path d="M9.87867966,6.63603897 L13.4142136,3.10050506 C13.8047379,2.70998077 14.4379028,2.70998077 14.8284271,3.10050506 L21.8994949,10.1715729 C22.2900192,10.5620972 22.2900192,11.1952621 21.8994949,11.5857864 L18.363961,15.1213203 C17.9734367,15.5118446 17.3402718,15.5118446 16.9497475,15.1213203 L9.87867966,8.05025253 C9.48815536,7.65972824 9.48815536,7.02656326 9.87867966,6.63603897 Z" id="Rectangle-77" fill="#000000"/>
                            <path d="M17.3033009,4.86827202 L18.0104076,4.16116524 C18.2056698,3.96590309 18.5222523,3.96590309 18.7175144,4.16116524 L20.8388348,6.28248558 C21.0340969,6.47774772 21.0340969,6.79433021 20.8388348,6.98959236 L20.131728,7.69669914 C19.9364658,7.89196129 19.6198833,7.89196129 19.4246212,7.69669914 L17.3033009,5.5753788 C17.1080387,5.38011665 17.1080387,5.06353416 17.3033009,4.86827202 Z" id="Rectangle" fill="#000000" opacity="0.3"/>
                        </g>
                    </svg>            Work Experience
                </a>
            </li>
            
            
            <li class="nav-item">
                <a class="nav-link {{$active_tabpanel == "Account" ? 'active' : '' }}" data-toggle="tab" href="#kt_user_edit_tab_2" role="tab">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect id="bound" x="0" y="0" width="24" height="24"/>
                            <path d="M6,2 L18,2 C19.6568542,2 21,3.34314575 21,5 L21,19 C21,20.6568542 19.6568542,22 18,22 L6,22 C4.34314575,22 3,20.6568542 3,19 L3,5 C3,3.34314575 4.34314575,2 6,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" id="Combined-Shape" fill="#000000"/>
                        </g>
                    </svg>           Account
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{$active_tabpanel == "Change Password" ? 'active' : '' }}" data-toggle="tab" href="#kt_user_edit_tab_3" role="tab">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect id="bound" x="0" y="0" width="24" height="24"/>
    <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" id="Path-50" fill="#000000" opacity="0.3"/>
    <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" id="Mask" fill="#000000" opacity="0.3"/>
    <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" id="Mask-Copy" fill="#000000" opacity="0.3"/>
</g>
</svg>                        Change Password
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{$active_tabpanel == "Settings" ? 'active' : '' }}" data-toggle="tab" href="#kt_user_edit_tab_4" role="tab">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect id="bound" x="0" y="0" width="24" height="24"/>
                            <path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" id="Combined-Shape" fill="#000000"/>
                        </g>
                    </svg>           Settings
                </a>
            </li>
        </ul>
    </div>
</div>


<div class="kt-portlet__body">
    
        <div class="tab-content">
            <div class="tab-pane {{$active_tabpanel == "Profile" ? 'active' : '' }}" id="kt_user_edit_tab_1" role="tabpanel">
            <form class="kt-form kt-form--label-right" action="{{ url('/profile') }}" method="POST" enctype="multipart/form-data" >
                <div class="kt-form kt-form--label-right">
                    <div class="kt-form__body">
                        <div class="kt-section kt-section--first">
                            <div class="kt-section__body">
                                <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h3 class="kt-section__title kt-section__title-sm">Personal Info:</h3>
                                    </div>
                                </div>
                                
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Avatar</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <div class="kt-avatar kt-avatar--outline kt-avatar--circle" id="kt_apps_user_add_avatar">
                                            <div class="kt-avatar__holder" style="background-image: url(&quot;/storage/avatar/{{!empty($teachers_profile) ? $teachers_profile->avatar : 'default.png' }}&quot;);"></div>
                                            <!-- <div class="kt-avatar__holder" style="background-image: url(&quot;http://keenthemes.com/metronic/preview/default/custom/user/assets/media/users/100_2.jpg&quot;);"></div>  -->
                                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                                <i class="fa fa-pen"></i>
                                                <input type="file" name="avatar" id="avatar" accept=".png, .jpg, .jpeg">
                                                @if ($errors->has('avatar'))
                                                    <div id="avatar-error" class="error invalid-feedback">{{ $errors->first('avatar') }}</div>
                                                @endif        
                                            </label>
                                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                                                <i class="fa fa-times"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">First Name</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <input id="firstname" name="firstname" type="text" placeholder="First Name" value="{{!empty($teachers_profile) ? $teachers_profile->firstname : old('firstname') }}"
                                               class="{{ $errors->has('firstname') ? 'form-control is-invalid' : 'form-control'}}">                                                

                                        @if ($errors->has('firstname'))
                                            <div id="firstname-error" class="error invalid-feedback">{{ $errors->first('firstname') }}</div>
                                        @endif                                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Middle Name</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">                                        
                                            <input id="middlename" name="middlename" class="form-control" type="text" placeholder="Middle Name" value="{{!empty($teachers_profile) ? $teachers_profile->middlename : old('middlename') }}">
                                    </div>
                                </div>				
                                
                                
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Last Name</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <input id="lastname" name="lastname" type="text" placeholder="Last Name" value="{{!empty($teachers_profile) ? $teachers_profile->lastname : old('lastname') }}"
                                            class="{{ $errors->has('lastname') ? 'form-control is-invalid' : 'form-control'}}">

                                        @if ($errors->has('lastname'))
                                            <div id="lastname-error" class="error invalid-feedback">{{ $errors->first('lastname') }}</div>
                                        @endif   
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Gender</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <div class="kt-radio-inline">
                                            @if(!empty($teachers_profile))    
                                                <label class="kt-radio kt-radio--solid kt-radio--success">
                                                    {{-- "{{ $errors->has('email') ? 'email-error' : ''}}" --}}
                                                <input id="gender"  name="gender" type="radio" value="male" checked="{{$teachers_profile->gender = 'male' ? 'checked' : '' }}"> Male
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio kt-radio--solid kt-radio--brand">
                                                        <input id="gender"  name="gender" type="radio" value="female" checked="{{$teachers_profile->gender = 'female' ? 'checked' : '' }}"> Female 
                                                        <span></span>
                                                </label>													                                                        
                                            @else
                                                <label class="kt-radio kt-radio--solid kt-radio--success">
                                                        <input id="gender"  name="gender" type="radio" value="male" checked="checked"> Male
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio kt-radio--solid kt-radio--brand">
                                                            <input id="gender"  name="gender" type="radio" value="female"> Female 
                                                            <span></span>
                                                    </label>													        
                                            @endif    

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Birth Date</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <div class="input-group">

                                            <input type="text" id="kt_datepicker_3" name="birthdate" placeholder="mm/dd/yyyy" 
                                                value="{{!empty($teachers_profile) ? date('m/d/Y', strtotime($teachers_profile->birthdate)) : old('birthdate') }}"
                                                class="{{ $errors->has('birthdate') ? 'form-control is-invalid' : 'form-control'}}">    

                                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-calendar"></i></span></div>

                                            @if ($errors->has('birthdate'))
                                                <div id="birthdate-error" class="error invalid-feedback">{{ $errors->first('birthdate') }}</div>
                                            @endif   
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Address</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                            <div class="input-group">
                                                {{--<input type="text" name="name" id="name" value="{{ old('name', $user->name) }}"> --}}
                                                <textarea class="form-control" id="address" name="address" rows="3" placeholder="Address">{{!empty($teachers_profile) ? $teachers_profile->address : old('address') }}</textarea>
                                            </div>
                                    </div>
                                </div>
                                    
                                 <div class="form-group row">
                                        <label class="col-form-label col-lg-3 col-sm-12">Country</label>
                                        <div class="col-lg-4 col-md-9 col-sm-12">
                                            <select name="country" id="country" data-size="7" data-live-search="true"
                                                    class="{{ $errors->has('country') ? 'form-control is-invalid kt-selectpicker' : 'form-control kt-selectpicker'}}">    

                                                    <option value="">Select</option>
                                                    @foreach($countries as $country)
                                                        @if (!empty($teachers_profile)) 
                                                            <option value="{{$country->id}}" {{$teachers_profile->countryid == $country->id ? '  selected="selected"' : '' }}>{{$country->name}}</option>
                                                        @else
                                                            <option value="{{$country->id}}">{{$country->name}}</option>
                                                        @endif
                                                    @endforeach

                                            </select>
                                            @if ($errors->has('country'))
                                                <div id="country-error" class="invalid-feedback">{{ $errors->first('country') }}</div>
                                            @endif   
                                        </div>
                                    </div>

                                    <div class="form-group form-group-last row">
                                        <label class="col-form-label col-lg-3 col-sm-12">Contact Phone</label>
                                        <div class="col-lg-4 col-md-9 col-sm-12">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                <input id="contactno" name="contactno" type="text" class="form-control" placeholder="Contact Phone" value="{{!empty($teachers_profile) ? $teachers_profile->contactno : old('contactno') }}">
                                            </div>													
                                        </div>
                                    </div>


                            </div>
                        </div>
                    </div>
                </div>


                <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <div class="row">
                                <div class="col-lg-3 col-xl-3">
                                </div>
                                <div class="col-lg-9 col-xl-9">
                                    <button type="submit" class="btn btn-success">Save Changes</button>&nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
            </form>

            </div>
            
            <div class="tab-pane" id="kt_user_edit_tab_2" role="tabpanel">
                <form class="kt-form kt-form--label-right">
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="kt-section__body">
                            <div class="row">
                                <label class="col-xl-3"></label>
                                <div class="col-lg-9 col-xl-6">
                                    <h3 class="kt-section__title kt-section__title-sm">Account:</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12">Username</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    {{-- <div class="kt-spinner kt-spinner--sm kt-spinner--success kt-spinner--right kt-spinner--input"> --}}
                                        <input class="form-control" type="text" value="{{ Auth::user()->name }}">
                                    {{-- </div> --}}


                                    
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12">Email Address</label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class=" flaticon-multimedia-2
                                            "></i></span></div>
                                        <input type="email" class="form-control" value="{{ Auth::user()->email }}" placeholder="Email" aria-describedby="basic-addon1">
                                    </div>
                                    <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                                </div>
                            </div>


                            {{-- <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <h3 class="kt-section__title kt-section__title-sm">Security:</h3>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Login verification</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <button type="button" class="btn btn-label-brand btn-bold btn-sm kt-margin-t-5 kt-margin-b-5">Setup login verification</button>
                                        <span class="form-text text-muted">
                                    After you log in, you will be asked for additional information to confirm your identity and protect your account from being compromised. 
                                    <a href="#" class="kt-link">Learn more</a>.
                                    </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Password reset verification</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="kt-checkbox-single">
                                            <label class="kt-checkbox">
                                                <input type="checkbox"> Require personal information to reset your password.
                                                <span></span>
                                            </label>
                                        </div>
                                        <span class="form-text text-muted">
                                    For extra security, this requires you to confirm your email or phone number when you reset your password.
                                    <a href="#" class="kt-link">Learn more</a>.
                                </span>
                                    </div>
                                </div>
                                <div class="form-group row kt-margin-t-10 kt-margin-b-10">
                                    <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <button type="button" class="btn btn-label-danger btn-bold btn-sm kt-margin-t-5 kt-margin-b-5">Deactivate your account ?</button>
                                    </div>
                                </div>                                                --}}


                        </div>
                    </div>
                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <div class="row">
                            <div class="col-lg-3 col-xl-3">
                            </div>
                            <div class="col-lg-9 col-xl-9">
                                <button type="reset" class="btn btn-success">Save Changes</button>&nbsp;
                                {{-- <button type="reset" class="btn btn-secondary">Cancel</button> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </form>                
            </div>
            

            {{-- 
                References: 
                https://github.com/5balloons/change-password-laravel/blob/master/app/Http/Controllers/HomeController.php 
                https://github.com/5balloons/change-password-laravel/blob/master/resources/views/auth/changepassword.blade.php
            --}}
            <div class="tab-pane {{$active_tabpanel == "Change Password" ? 'active' : '' }}" id="kt_user_edit_tab_3" role="tabpanel">
                <div class="kt-form kt-form--label-right">
                    
                    {{-- <div class="tab-pane active" id="kt_user_edit_tab_1" role="tabpanel"> --}}
                    <form class="kt-form kt-form--label-right" action="{{ url('/changepassword') }}" method="POST" enctype="multipart/form-data">
                    {{-- <form class="kt-form kt-form--label-right"> --}}
                    <div class="kt-portlet__body">
                        <div class="kt-section kt-section--first">
                            <div class="kt-section__body">

                                @if (session('password-error'))
                                    <div class="alert alert-solid-danger alert-bold fade show kt-margin-t-20 kt-margin-b-40" role="alert">
                                        <div class="alert-icon"><i class="fa fa-exclamation-triangle"></i></div>
                                        <div class="alert-text">{!! session('password-error') !!}</div>
                                        {{-- <div class="alert-text">Configure user passwords to expire periodically. Users will need warning that their passwords are going to expire, <br>or they might inadvertently get locked out of the system!</div> --}}
                                        <div class="alert-close">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true"><i class="la la-close"></i></span>
                                            </button>
                                        </div>
                                    </div>                                
                                @endif

                                {{-- <div class="alert alert-solid-danger alert-bold fade show kt-margin-t-20 kt-margin-b-40" role="alert">
                                    <div class="alert-icon"><i class="fa fa-exclamation-triangle"></i></div>
                                    <div class="alert-text">Configure user passwords to expire periodically. Users will need warning that their passwords are going to expire, <br>or they might inadvertently get locked out of the system!</div>
                                    <div class="alert-close">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="la la-close"></i></span>
                                        </button>
                                    </div>
                                </div> --}}

                                <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h3 class="kt-section__title kt-section__title-sm">Change Or Recover Your Password:</h3>
                                    </div>
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                {{-- <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">First Name</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <input id="firstname" name="firstname" type="text" placeholder="First Name" value="{{!empty($teachers_profile) ? $teachers_profile->firstname : old('firstname') }}"
                                               class="{{ $errors->has('firstname') ? 'form-control is-invalid' : 'form-control'}}">                                                

                                        @if ($errors->has('firstname'))
                                            <div id="firstname-error" class="error invalid-feedback">{{ $errors->first('firstname') }}</div>
                                        @endif                                        
                                    </div>
                                </div> --}}

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Current Password</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <input id="currentpassword" name="currentpassword" type="text" value="{{ old('currentpassword') }}" placeholder="Current password"
                                        class="{{ $errors->has('currentpassword') ? 'form-control is-invalid' : 'form-control'}}">     
                                        
                                        @if ($errors->has('currentpassword'))
                                            <div id="currentpassword-error" class="error invalid-feedback">{{ $errors->first('currentpassword') }}</div>
                                        @endif                                        

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">New Password</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">                                            
                                        <input id="newpassword" name="newpassword" type="text" value="{{ old('newpassword') }}" placeholder="New password"
                                        class="{{ $errors->has('newpassword') ? 'form-control is-invalid' : 'form-control'}}">     

                                        @if ($errors->has('newpassword'))
                                            <div id="newpassword-error" class="error invalid-feedback">{{ $errors->first('newpassword') }}</div>
                                        @endif                                        

                                    </div>
                                </div>


                                <div class="form-group form-group-last row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Verify Password</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <input id="new-password-confirm" name="new-password-confirm" type="text" class="form-control" value="{{ old('new-password-confirm') }}" placeholder="Verify password">
                                    </div>
                                </div>                                       

                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <div class="row">
                                <div class="col-lg-3 col-xl-3">
                                </div>
                                <div class="col-lg-9 col-xl-9">
                                        <button type="submit" class="btn btn-brand btn-bold">Change Password</button>&nbsp;
                                        {{-- <button type="reset" class="btn btn-secondary">Cancel</button>											</div> --}}
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

            {{-- <div class="tab-pane" id="kt_user_edit_tab_4" role="tabpanel">
                <div class="kt-form kt-form--label-right">
                    <div class="kt-form__body">
                        <div class="kt-section kt-section--first">
                            <div class="kt-section__body">
                                <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h3 class="kt-section__title kt-section__title-sm">Setup Email Notification:</h3>
                                    </div>
                                </div>
                                <div class="form-group form-group-sm row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Email Notification</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <span class="kt-switch">
                                                        <label>
                                                            <input type="checkbox" checked="checked" name="email_notification_1">
                                                            <span></span>
                                        </label>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group form-group-last row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Send Copy To Personal Email</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <span class="kt-switch">
                                                        <label>
                                                            <input type="checkbox" name="email_notification_2">
                                                            <span></span>
                                        </label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>

                        <div class="kt-section kt-section--first">
                            <div class="kt-section__body">
                                <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h3 class="kt-section__title kt-section__title-sm">Activity Related Emails:</h3>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">When To Email</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="kt-checkbox-list">
                                            <label class="kt-checkbox">
                                                <input type="checkbox"> You have new notifications.
                                                <span></span>
                                            </label>
                                            <label class="kt-checkbox">
                                                <input type="checkbox"> You're sent a direct message
                                                <span></span>
                                            </label>
                                            <label class="kt-checkbox">
                                                <input type="checkbox" checked="checked"> Someone adds you as a connection
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-group-last row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">When To Escalate Emails</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="kt-checkbox-list">
                                            <label class="kt-checkbox kt-checkbox--brand">
                                                <input type="checkbox"> Upon new order.
                                                <span></span>
                                            </label>
                                            <label class="kt-checkbox kt-checkbox--brand">
                                                <input type="checkbox"> New membership approval
                                                <span></span>
                                            </label>
                                            <label class="kt-checkbox kt-checkbox--brand">
                                                <input type="checkbox" checked="checked"> Member registration
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>

                        <div class="kt-section kt-section--first">
                            <div class="kt-section__body">
                                <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h3 class="kt-section__title kt-section__title-sm">Updates From Keenthemes:</h3>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Email You With</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="kt-checkbox-list">
                                            <label class="kt-checkbox">
                                                <input type="checkbox"> News about Metronic product and feature updates
                                                <span></span>
                                            </label>
                                            <label class="kt-checkbox">
                                                <input type="checkbox"> Tips on getting more out of Keen
                                                <span></span>
                                            </label>
                                            <label class="kt-checkbox">
                                                <input type="checkbox" checked="checked"> Things you missed since you last logged into Keen
                                                <span></span>
                                            </label>
                                            <label class="kt-checkbox">
                                                <input type="checkbox" checked="checked"> News about Metronic on partner products and other services
                                                <span></span>
                                            </label>
                                            <label class="kt-checkbox">
                                                <input type="checkbox" checked="checked"> Tips on Metronic business products
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}





            <!--start: kt_user_edit_tab_5 -->
            {{-- <div class="tab-pane" id="kt_user_edit_tab_5" role="tabpanel">
            <div class="kt-form kt-form--label-right">
                <form class="kt-form kt-form--label-right">
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="kt-section__body">
                                

                            <div class="row">
                                <label class="col-xl-3"></label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <h3 class="kt-section__title kt-section__title-sm">Education Info:</h3>
                                </div>
                            </div>

                            <div id="kt_repeater_3">
                            <div class="form-group  row">
                                <label  class="col-lg-3 col-form-label"></label>
                                <div data-repeater-list="" class="col-lg-9">                               
                                    <div data-repeater-item class="row kt-margin-b-10">
                                        <div class="col-lg-3">
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-danger" placeholder="School Name">
                                            </div>
                                        </div>


                                        <div class="col-lg-3">
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-danger" placeholder="Education Degree">
                                                </div>
                                            </div>   
                                            
                                            <div class="col-lg-3">
                                                    <div class='input-group' id='kt_daterangepicker_2'>
                                                            <input type='text' class="form-control" readonly  placeholder="Study Duration"/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
                                                            </div>
                                                        </div>
                                                </div>    
                                                    

                                        <div class="col-lg-2">
                                            <a href="javascript:;" data-repeater-delete="" class="btn btn-danger btn-icon">
                                                <i class="la la-remove"></i>
                                            </a>
                                        </div>                     
                                    </div>                                                        
                                </div>                 
                            </div>
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col">
                                    <div data-repeater-create="" class="btn btn btn-warning">
                                        <span>
                                            <i class="la la-plus"></i>
                                            <span>Add Education</span>
                                        </span>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                        
                                                         

                        </div>
                    </div>
                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <div class="row">
                            <div class="col-lg-3 col-xl-3">
                            </div>
                            <div class="col-lg-9 col-xl-9">
                                    <button type="reset" class="btn btn-brand btn-bold">Change Password</button>&nbsp;
                                    <button type="reset" class="btn btn-secondary">Cancel</button>											</div>
                        </div>
                    </div>
                </div> --}}
            </form>


                
                {{-- <div class="kt-separator kt-separator--space-lg kt-separator--fit kt-separator--border-solid"></div>
                    
                <div class="kt-form__actions">
                    <div class="row">
                        <div class="col-xl-3"></div>
                        <div class="col-lg-9 col-xl-6">
                            <a href="#" class="btn btn-label-brand btn-bold">Save changes</a>
                            <a href="#" class="btn btn-clean btn-bold">Cancel</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <!--end: kt_user_edit_tab_5 -->



        

        </div>

</div>
</div>	
</div>
<!-- end:: Content -->

				<!-- begin:: Footer -->
<div class="kt-footer  kt-grid__item" id="kt_footer">
	<div class="kt-container ">
		<div class="kt-footer__wrapper">
			<div class="kt-footer__copyright">
				2019&nbsp;&copy;&nbsp;<a href="#" target="_blank" class="kt-link">Bright Panda Learning Center</a>
			</div>
			<div class="kt-footer__menu">
				{{-- <a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">About</a>
				<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">Team</a>
				<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">Contact</a> --}}
			</div>
		</div>
	</div>
</div>
<!-- end:: Footer -->			</div>
		</div>
	</div>
	
<!-- end:: Page -->
    
    <!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
		<i class="fa fa-arrow-up"></i>
</div>
<!-- end::Scrolltop -->

<!-- end::Demo Panel -->	
	


        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#716aca","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <!-- end::Global Config -->

    	<!--begin:: Global Mandatory Vendors -->
<script src="{{asset('assets/vendors/general/jquery/dist/jquery.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/popper.js/dist/umd/popper.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/js-cookie/src/js.cookie.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/moment/min/moment.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/sticky-js/dist/sticky.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/wnumb/wNumb.js')}}" type="text/javascript"></script>
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
{{-- <script src="{{asset('assets/vendors/general/jquery-form/dist/jquery.form.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/block-ui/jquery.blockUI.js')}}" type="text/javascript"></script> --}}
<script src="{{asset('assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js')}}" type="text/javascript"></script>
{{-- <script src="{{asset('assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js')}}" type="text/javascript"></script> --}}
<script src="{{asset('assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
{{-- <script src="{{asset('assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js')}}" type="text/javascript"></script> --}}
<script src="{{asset('assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js')}}" type="text/javascript"></script>
{{-- <script src="{{asset('assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/js/vendors/bootstrap-switch.init.js')}}" type="text/javascript"></script> --}}
<script src="{{asset('assets/vendors/general/select2/dist/js/select2.full.js')}}" type="text/javascript"></script>
{{-- <script src="{{asset('assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/typeahead.js/dist/typeahead.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/handlebars/dist/handlebars.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/nouislider/distribute/nouislider.js')}}" type="text/javascript"></script> --}}

<script src="{{asset('assets/vendors/general/owl.carousel/dist/owl.carousel.js')}}" type="text/javascript"></script>

{{-- <script src="{{asset('assets/vendors/general/autosize/dist/autosize.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/clipboard/dist/clipboard.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/dropzone/dist/dropzone.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/js/vendors/dropzone.init.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/quill/dist/quill.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/@yaireo/tagify/dist/tagify.polyfills.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/@yaireo/tagify/dist/tagify.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/summernote/dist/summernote.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/markdown/lib/markdown.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/js/vendors/bootstrap-markdown.init.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/js/vendors/bootstrap-notify.init.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/jquery-validation/dist/jquery.validate.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/jquery-validation/dist/additional-methods.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/js/vendors/jquery-validation.init.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/toastr/build/toastr.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/dual-listbox/dist/dual-listbox.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/raphael/raphael.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/morris.js/morris.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/chart.js/dist/Chart.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/waypoints/lib/jquery.waypoints.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/counterup/jquery.counterup.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/es6-promise-polyfill/promise.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/sweetalert2/dist/sweetalert2.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/js/vendors/sweetalert2.init.js')}}" type="text/javascript"></script> --}} --}}
<script src="{{asset('assets/vendors/general/jquery.repeater/src/lib.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/jquery.repeater/src/jquery.input.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/jquery.repeater/src/repeater.js')}}" type="text/javascript"></script>
{{-- <script src="{{asset('assets/vendors/general/dompurify/dist/purify.js')}}" type="text/javascript"></script> --}}
<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
    	    	   
		    	   <script src="{{asset('assets/js/demo8/scripts.bundle.js')}}" type="text/javascript"></script>
				<!--end::Global Theme Bundle -->

                    <!--begin::Page Vendors(used by this page) -->
                            <script src="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script>
                            <script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
                            <script src="{{asset('assets/vendors/custom/gmaps/gmaps.js')}}" type="text/javascript"></script>
                        <!--end::Page Vendors -->
         
                    <!--begin::Page Scripts(used by this page) -->
                    <script src="{{asset('assets/js/demo8/pages/dashboard.js')}}" type="text/javascript"></script>
                    <!--end::Page Scripts -->
                    
                    <script src="{{asset('assets/js/demo8/pages/crud/forms/widgets/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
                    <script src="{{asset('assets/js/demo8/pages/crud/forms/widgets/bootstrap-daterangepicker.min.js')}}" type="text/javascript"></script>
                    <script src="{{asset('assets/js/demo8/pages/crud/forms/widgets/bootstrap-select.min.js')}}" type="text/javascript"></script>                    
                    <script src="{{asset('assets/js/demo8/pages/crud/forms/widgets/form-repeater.min.js')}}" type="text/javascript"></script>

                    {{-- <script src="./assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
                    <script src="./assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
                    <script src="./assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script> --}}
            </body>
    <!-- end::Body -->
</html>



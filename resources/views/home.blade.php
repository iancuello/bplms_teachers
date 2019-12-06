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

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Asap+Condensed:500">        <!--end::Fonts -->

                    <!--begin::Page Vendors Styles(used by this page) -->
                            <link href="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
                        <!--end::Page Vendors Styles -->
        
        
<!--begin:: Global Mandatory Vendors -->
<link href="{{asset('assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css" />
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
{{-- <link href="{{asset('assets/vendors/general/tether/dist/css/tether.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/general/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css" />
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
<link href="{{asset('assets/vendors/general/sweetalert2/dist/sweetalert2.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/general/socicon/css/socicon.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/custom/vendors/line-awesome/css/line-awesome.css')}}" rel="stylesheet" type="text/css" />  --}}
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

	{{-- <!--begin: Quick actions -->
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
	<!--end: Quick actions --> --}}

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
        <a href="{{ route('logout') }}" target="_blank" class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>
        {{ csrf_field() }}
        {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form> --}}

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
                        <li class="kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel"  
                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                            <a  href="demo8/index.html" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Personal Information</span>
                                <i class="kt-menu__hor-arrow la la-angle-down"></i>
                                <i class="kt-menu__ver-arrow la la-angle-right"></i>
                            </a>
                            <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left"><ul class="kt-menu__subnav"><li class="kt-menu__item "  aria-haspopup="true">
                                
                                    <a  href="/teachers" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-line-chart"></i><span class="kt-menu__link-text">Profile Overview</span></a></li><li class="kt-menu__item "  aria-haspopup="true">
                                    <a  href="/teachers_personal" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-user"></i><span class="kt-menu__link-text">Personal Information</span></a></li><li class="kt-menu__item "  aria-haspopup="true">
                                    <a  href="/teachers_account" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-settings"></i><span class="kt-menu__link-text">Account Information</span></a></li><li class="kt-menu__item "  aria-haspopup="true">
                                    <a  href="/teachers_password" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-safe-shield-protection"></i><span class="kt-menu__link-text">Change Password</span></a></li></ul></div></li><li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"  data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                    <a  href="/teachers_schedule" class="kt-menu__link "><i ></i><span class="kt-menu__link-text">Class Schedule</span></a></li><li class="kt-menu__item "  aria-haspopup="true">

                                    <a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Class Schedule</span><i class="kt-menu__hor-arrow la la-angle-down"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a> 

                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left"><ul class="kt-menu__subnav"><li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                                    <a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-architecture-and-city"></i><span class="kt-menu__link-text">Forms & Controls</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a><div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right"><ul class="kt-menu__subnav"><li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Form Controls</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a><div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right"><ul class="kt-menu__subnav"><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/controls/base.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Base Inputs</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/controls/input-group.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Input Groups</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/controls/checkbox.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Checkbox</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/controls/radio.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Radio</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/controls/switch.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Switch</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/controls/option.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Mega Options</span></a></li></ul></div></li><li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Form Widgets</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a><div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right"><ul class="kt-menu__subnav"><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/widgets/bootstrap-datepicker.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Datepicker</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/widgets/bootstrap-datetimepicker.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Datetimepicker</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/widgets/bootstrap-timepicker.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Timepicker</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/widgets/bootstrap-daterangepicker.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Daterangepicker</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/widgets/tagify.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Tagify</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/widgets/bootstrap-touchspin.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Touchspin</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/widgets/bootstrap-maxlength.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Maxlength</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/widgets/bootstrap-switch.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Switch</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/widgets/bootstrap-multipleselectsplitter.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Multiple Select Splitter</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/widgets/bootstrap-select.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Bootstrap Select</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/widgets/select2.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Select2</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/widgets/typeahead.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Typeahead</span></a></li></ul></div></li><li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Form Widgets 2</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a><div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right"><ul class="kt-menu__subnav"><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/widgets/nouislider.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">noUiSlider</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/widgets/form-repeater.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Form Repeater</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/widgets/ion-range-slider.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Ion Range Slider</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/widgets/input-mask.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Input Masks</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/widgets/quill.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Quill Text Editor</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/widgets/summernote.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Summernote WYSIWYG</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/widgets/bootstrap-markdown.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Markdown Editor</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/widgets/autosize.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Autosize</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/widgets/clipboard.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Clipboard</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/widgets/dropzone.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Dropzone</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/widgets/recaptcha.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Google reCaptcha</span></a></li></ul></div></li><li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Form Layouts</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a><div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right"><ul class="kt-menu__subnav"><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/layouts/default-forms.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Default Forms</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/layouts/multi-column-forms.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Multi Column Forms</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/layouts/action-bars.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Basic Action Bars</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/layouts/sticky-action-bar.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Sticky Action Bar</span></a></li></ul></div></li><li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Form Validation</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a><div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right"><ul class="kt-menu__subnav"><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/validation/states.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Validation States</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/validation/form-controls.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Form Controls</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/forms/validation/form-widgets.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Form Widgets</span></a></li></ul></div></li></ul></div></li><li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-browser-2"></i><span class="kt-menu__link-text">KTDatatable</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a><div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right"><ul class="kt-menu__subnav"><li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Base</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a><div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right"><ul class="kt-menu__subnav"><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/metronic-datatable/base/data-local.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Local Data</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/metronic-datatable/base/data-json.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">JSON Data</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/metronic-datatable/base/data-ajax.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Ajax Data</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/metronic-datatable/base/html-table.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">HTML Table</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/metronic-datatable/base/local-sort.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Local Sort</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/metronic-datatable/base/translation.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Translation</span></a></li></ul></div></li><li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Advanced</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a><div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right"><ul class="kt-menu__subnav"><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/metronic-datatable/advanced/record-selection.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Record Selection</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/metronic-datatable/advanced/row-details.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Row Details</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/metronic-datatable/advanced/modal.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Modal Examples</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/metronic-datatable/advanced/column-rendering.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Column Rendering</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/metronic-datatable/advanced/column-width.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Column Width</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/metronic-datatable/advanced/vertical.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Vertical Scrolling</span></a></li></ul></div></li><li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Child Datatables</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a><div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right"><ul class="kt-menu__subnav"><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/metronic-datatable/child/data-local.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Local Data</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/metronic-datatable/child/data-ajax.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Remote Data</span></a></li></ul></div></li><li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">API</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a><div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right"><ul class="kt-menu__subnav"><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/metronic-datatable/api/methods.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">API Methods</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/metronic-datatable/api/events.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Events</span></a></li></ul></div></li></ul></div></li><li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-list-3"></i><span class="kt-menu__link-text">Datatables.net</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a><div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right"><ul class="kt-menu__subnav"><li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Basic</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a><div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right"><ul class="kt-menu__subnav"><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/datatables/basic/basic.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Basic Tables</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/datatables/basic/scrollable.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Scrollable Tables</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/datatables/basic/headers.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Complex Headers</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/datatables/basic/paginations.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Pagination Options</span></a></li></ul></div></li><li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Advanced</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a><div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right"><ul class="kt-menu__subnav"><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/datatables/advanced/column-rendering.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Column Rendering</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/datatables/advanced/multiple-controls.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Multiple Controls</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/datatables/advanced/column-visibility.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Column Visibility</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/datatables/advanced/row-callback.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Row Callback</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/datatables/advanced/row-grouping.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Row Grouping</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/datatables/advanced/footer-callback.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Footer Callback</span></a></li></ul></div></li><li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Data sources</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a><div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right"><ul class="kt-menu__subnav"><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/datatables/data-sources/html.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">HTML</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/datatables/data-sources/javascript.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Javascript</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/datatables/data-sources/ajax-client-side.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Ajax Client-side</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/datatables/data-sources/ajax-server-side.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Ajax Server-side</span></a></li></ul></div></li><li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Search Options</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a><div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right"><ul class="kt-menu__subnav"><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/datatables/search-options/column-search.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Column Search</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/datatables/search-options/advanced-search.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Advanced Search</span></a></li></ul></div></li><li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Extensions</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a><div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right"><ul class="kt-menu__subnav"><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/datatables/extensions/buttons.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Buttons</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/datatables/extensions/colreorder.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">ColReorder</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/datatables/extensions/keytable.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">KeyTable</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/datatables/extensions/responsive.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Responsive</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/datatables/extensions/rowgroup.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">RowGroup</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/datatables/extensions/rowreorder.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">RowReorder</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/datatables/extensions/scroller.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Scroller</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/datatables/extensions/select.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Select</span></a></li></ul></div></li></ul></div></li><li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-list-3"></i><span class="kt-menu__link-text">File Upload</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a><div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right"><ul class="kt-menu__subnav"><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/file-upload/dropzonejs.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">DropzoneJS</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/crud/file-upload/uppy.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Uppy</span></a></li></ul></div></li></ul></div></li><li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"  data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Apps</span><i class="kt-menu__hor-arrow la la-angle-down"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a><div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left"><ul class="kt-menu__subnav"><li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-cube-1"></i><span class="kt-menu__link-text">Users</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a><div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right"><ul class="kt-menu__subnav"><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/user/list-default.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">List - Default</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/user/list-datatable.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">List - Datatable</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/user/list-columns-1.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">List - Columns 1</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/user/list-columns-2.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">List - Columns 2</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/user/add-user.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Add User</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/user/edit-user.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Edit User</span></a></li><li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Profile 1</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a><div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right"><ul class="kt-menu__subnav"><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/user/profile-1/overview.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Overview</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/user/profile-1/personal-information.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Personal Information</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/user/profile-1/account-information.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Account Information</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/user/profile-1/change-password.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Change Password</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/user/profile-1/email-settings.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Email Settings</span></a></li></ul></div></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/user/profile-2.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Profile 2</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/user/profile-3.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Profile 3</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/user/profile-4.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Profile 4</span></a></li></ul></div></li><li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-writing"></i><span class="kt-menu__link-text">Contacts</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a><div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right"><ul class="kt-menu__subnav"><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/contacts/list-columns.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">List - Columns</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/contacts/list-datatable.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">List - Datatable</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/contacts/view-contact.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">View Contact</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/contacts/add-contact.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Add Contact</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/contacts/edit-cotact.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Edit Contact</span></a></li></ul></div></li><li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-writing"></i><span class="kt-menu__link-text">Chat</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a><div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right"><ul class="kt-menu__subnav"><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/chat/private.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Private</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/chat/group.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Group</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/chat/popup.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Popup</span></a></li></ul></div></li><li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-telegram-logo"></i><span class="kt-menu__link-text">Projects</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a><div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right"><ul class="kt-menu__subnav"><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/projects/list-columns-1.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">List - Columns 1</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/projects/list-columns-2.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">List - Columns 2</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/projects/list-columns-3.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">List - Columns 3</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/projects/list-columns-4.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">List - Columns 4</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/projects/list-datatable.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">List - Datatable</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/projects/view-project.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">View Project</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/projects/add-project.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Add Project</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/projects/edit-project.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Edit Project</span></a></li></ul></div></li><li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-rocket"></i><span class="kt-menu__link-text">Support Center</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a><div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right"><ul class="kt-menu__subnav"><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/support-center/home-1.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Home 1</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/support-center/home-2.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Home 2</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/support-center/faq-1.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">FAQ 1</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/support-center/faq-2.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">FAQ 2</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/support-center/faq-3.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">FAQ 3</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/support-center/feedback.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Feedback</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/support-center/license.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">License</span></a></li></ul></div></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/apps/inbox.html" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-rocket"></i><span class="kt-menu__link-text">Inbox</span><span class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger kt-badge--inline">new</span></span></a></li></ul></div></li><li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"  data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a  href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Pages</span><i class="kt-menu__hor-arrow la la-angle-down"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a><div class="kt-menu__submenu  kt-menu__submenu--fixed kt-menu__submenu--center" style="width:1000px"><div class="kt-menu__subnav"><ul class="kt-menu__content"><li class="kt-menu__item "><h3 class="kt-menu__heading kt-menu__toggle"><span class="kt-menu__link-text">Pricing Tables</span><i class="kt-menu__ver-arrow la la-angle-right"></i></h3><ul class="kt-menu__inner"><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/pages/pricing/pricing-1.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Pricing Tables 1</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/pages/pricing/pricing-2.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Pricing Tables 2</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/pages/pricing/pricing-3.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Pricing Tables 3</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/pages/pricing/pricing-4.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Pricing Tables 4</span></a></li></ul></li><li class="kt-menu__item "><h3 class="kt-menu__heading kt-menu__toggle"><span class="kt-menu__link-text">Wizards</span><i class="kt-menu__ver-arrow la la-angle-right"></i></h3><ul class="kt-menu__inner"><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/pages/wizard/wizard-1.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Wizard 1</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/pages/wizard/wizard-2.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Wizard 2</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/pages/wizard/wizard-3.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Wizard 3</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/pages/wizard/wizard-4.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Wizard 4</span></a></li></ul></li><li class="kt-menu__item "><h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Invoices & FAQ</span><i class="kt-menu__ver-arrow la la-angle-right"></i></h3><ul class="kt-menu__inner"><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/pages/invoices/invoice-1.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Invoice 1</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/pages/invoices/invoice-2.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Invoice 2</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/pages/faq/faq-1.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">FAQ 1</span></a></li></ul></li><li class="kt-menu__item "><h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">User Pages</span><i class="kt-menu__ver-arrow la la-angle-right"></i></h3><ul class="kt-menu__inner"><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/pages/user/login-1.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Login 1</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/pages/user/login-2.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Login 2</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/pages/user/login-3.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Login 3</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/pages/user/login-4.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Login 4</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/pages/user/login-5.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Login 5</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/pages/user/login-6.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Login 6</span></a></li></ul></li><li class="kt-menu__item "><h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Error Pages</span><i class="kt-menu__ver-arrow la la-angle-right"></i></h3><ul class="kt-menu__inner"><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/pages/error/error-1.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Error 1</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/pages/error/error-2.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Error 2</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/pages/error/error-3.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Error 3</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/pages/error/error-4.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Error 4</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/pages/error/error-5.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Error 5</span></a></li><li class="kt-menu__item "  aria-haspopup="true"><a  href="demo8/custom/pages/error/error-6.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Error 6</span></a></li></ul></li></ul></div></div></li>        </ul>
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
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
				
                Teachers                            </h3>

                            <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                                            <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a class="kt-subheader__breadcrumbs-link">
                            Profile Overview                     </a>
                                        <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
                </div>
                    </div>
      
    </div>
</div>
<!-- end:: Subheader -->

<!-- begin:: Content -->
	<div class="kt-container  kt-grid__item kt-grid__item--fluid">
		<!--Begin::Dashboard 4-->

		<!--Begin:: App Content-->
		<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
				<div class="row">
					<div class="col-xl-12">
						<div class="kt-portlet">
							{{-- <div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h3 class="kt-portlet__head-title">Change Password <small>change or reset your account password</small></h3>
								</div>
								
							</div> --}}
							<form class="kt-form kt-form--label-right">
								<div class="kt-portlet__body">
									<div class="kt-section kt-section--first">
										<div class="kt-section__body">


                                    <!--Begin::Section-->
									<div class="row">
										<div class="col-xl-4">

											<!--begin:: Widgets/Daily Sales-->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-widget14">
													<div class="kt-widget14__header kt-margin-b-30">
														<h3 class="kt-widget14__title">
															Daily Sales
														</h3>
														<span class="kt-widget14__desc">
															Check out each collumn for more details
														</span>
													</div>
													<div class="kt-widget14__chart" style="height:120px;">
														<canvas id="kt_chart_daily_sales"></canvas>
													</div>
												</div>
											</div>

											<!--end:: Widgets/Daily Sales-->
										</div>
									</div>
									<!--End::Section-->






                                    <!--Begin::Section-->
                                    <div class="row">
                                    <div class="col-xl-6">

                                        <!--Begin::Portlet-->
                                        <div class="kt-portlet kt-portlet--height-fluid">
                                            <div class="kt-portlet__head">
                                                <div class="kt-portlet__head-label">
                                                    <h3 class="kt-portlet__head-title">
                                                        Recent Activities
                                                    </h3>
                                                </div>
                                                <div class="kt-portlet__head-toolbar">
                                                    <div class="dropdown dropdown-inline">
                                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="flaticon-more-1"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">

                                                            <!--begin::Nav-->
                                                            <ul class="kt-nav">
                                                                <li class="kt-nav__head">
                                                                    Export Options
                                                                    <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                                                                </li>
                                                                <li class="kt-nav__separator"></li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon flaticon2-drop"></i>
                                                                        <span class="kt-nav__link-text">Activity</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                                                        <span class="kt-nav__link-text">FAQ</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon flaticon2-link"></i>
                                                                        <span class="kt-nav__link-text">Settings</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#" class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                                                        <span class="kt-nav__link-text">Support</span>
                                                                        <span class="kt-nav__link-badge">
                                                                            <span class="kt-badge kt-badge--success">5</span>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__separator"></li>
                                                                <li class="kt-nav__foot">
                                                                    <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
                                                                    <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                                                </li>
                                                            </ul>

                                                            <!--end::Nav-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-portlet__body">

                                                <!--Begin::Timeline 3 -->
                                                <div class="kt-timeline-v2">
                                                    <div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
                                                        <div class="kt-timeline-v2__item">
                                                            <span class="kt-timeline-v2__item-time">10:00</span>
                                                            <div class="kt-timeline-v2__item-cricle">
                                                                <i class="fa fa-genderless kt-font-danger"></i>
                                                            </div>
                                                            <div class="kt-timeline-v2__item-text  kt-padding-top-5">
                                                                Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
                                                                incididunt ut labore et dolore magna
                                                            </div>
                                                        </div>
                                                        <div class="kt-timeline-v2__item">
                                                            <span class="kt-timeline-v2__item-time">12:45</span>
                                                            <div class="kt-timeline-v2__item-cricle">
                                                                <i class="fa fa-genderless kt-font-success"></i>
                                                            </div>
                                                            <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
                                                                AEOL Meeting With
                                                            </div>
                                                            <div class="kt-list-pics kt-list-pics--sm kt-padding-l-20">
                                                                <a href="#"><img src="./assets/media/users/100_4.jpg" title=""></a>
                                                                <a href="#"><img src="./assets/media/users/100_13.jpg" title=""></a>
                                                                <a href="#"><img src="./assets/media/users/100_11.jpg" title=""></a>
                                                                <a href="#"><img src="./assets/media/users/100_14.jpg" title=""></a>
                                                            </div>
                                                        </div>
                                                        <div class="kt-timeline-v2__item">
                                                            <span class="kt-timeline-v2__item-time">14:00</span>
                                                            <div class="kt-timeline-v2__item-cricle">
                                                                <i class="fa fa-genderless kt-font-brand"></i>
                                                            </div>
                                                            <div class="kt-timeline-v2__item-text kt-padding-top-5">
                                                                Make Deposit <a href="#" class="kt-link kt-link--brand kt-font-bolder">USD 700</a> To ESL.
                                                            </div>
                                                        </div>
                                                        <div class="kt-timeline-v2__item">
                                                            <span class="kt-timeline-v2__item-time">16:00</span>
                                                            <div class="kt-timeline-v2__item-cricle">
                                                                <i class="fa fa-genderless kt-font-warning"></i>
                                                            </div>
                                                            <div class="kt-timeline-v2__item-text kt-padding-top-5">
                                                                Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
                                                                incididunt ut labore et dolore magna elit enim at minim<br>
                                                                veniam quis nostrud
                                                            </div>
                                                        </div>
                                                        <div class="kt-timeline-v2__item">
                                                            <span class="kt-timeline-v2__item-time">17:00</span>
                                                            <div class="kt-timeline-v2__item-cricle">
                                                                <i class="fa fa-genderless kt-font-info"></i>
                                                            </div>
                                                            <div class="kt-timeline-v2__item-text kt-padding-top-5">
                                                                Placed a new order in <a href="#" class="kt-link kt-link--brand kt-font-bolder">SIGNATURE MOBILE</a> marketplace.
                                                            </div>
                                                        </div>
                                                        <div class="kt-timeline-v2__item">
                                                            <span class="kt-timeline-v2__item-time">16:00</span>
                                                            <div class="kt-timeline-v2__item-cricle">
                                                                <i class="fa fa-genderless kt-font-brand"></i>
                                                            </div>
                                                            <div class="kt-timeline-v2__item-text kt-padding-top-5">
                                                                Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
                                                                incididunt ut labore et dolore magna elit enim at minim<br>
                                                                veniam quis nostrud
                                                            </div>
                                                        </div>
                                                        <div class="kt-timeline-v2__item">
                                                            <span class="kt-timeline-v2__item-time">17:00</span>
                                                            <div class="kt-timeline-v2__item-cricle">
                                                                <i class="fa fa-genderless kt-font-danger"></i>
                                                            </div>
                                                            <div class="kt-timeline-v2__item-text kt-padding-top-5">
                                                                Received a new feedback on <a href="#" class="kt-link kt-link--brand kt-font-bolder">FinancePro App</a> product.
                                                            </div>
                                                        </div>
                                                        <div class="kt-timeline-v2__item">
                                                            <span class="kt-timeline-v2__item-time">15:30</span>
                                                            <div class="kt-timeline-v2__item-cricle">
                                                                <i class="fa fa-genderless kt-font-danger"></i>
                                                            </div>
                                                            <div class="kt-timeline-v2__item-text kt-padding-top-5">
                                                                New notification message has been received on <a href="#" class="kt-link kt-link--brand kt-font-bolder">LoopFin Pro</a> product.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--End::Timeline 3 -->
                                            </div>
                                        </div>

                                        <!--End::Portlet-->
                                    </div>
                                    <div class="col-xl-6">

                                        <!--Begin::Portlet-->
                                        <div class="kt-portlet kt-portlet--height-fluid">
                                            <div class="kt-portlet__head">
                                                <div class="kt-portlet__head-label">
                                                    <h3 class="kt-portlet__head-title">
                                                        Recent Notifications
                                                    </h3>
                                                </div>
                                                <div class="kt-portlet__head-toolbar">
                                                    <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#kt_widget3_tab1_content" role="tab">
                                                                Today
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#kt_widget3_tab2_content" role="tab">
                                                                Month
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="kt-portlet__body">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="kt_widget3_tab1_content">

                                                        <!--Begin::Timeline 3 -->
                                                        <div class="kt-timeline-v3">
                                                            <div class="kt-timeline-v3__items">
                                                                <div class="kt-timeline-v3__item kt-timeline-v3__item--info">
                                                                    <span class="kt-timeline-v3__item-time">09:00</span>
                                                                    <div class="kt-timeline-v3__item-desc">
                                                                        <span class="kt-timeline-v3__item-text">
                                                                            Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                                                                        </span><br>
                                                                        <span class="kt-timeline-v3__item-user-name">
                                                                            <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                                                                                By Bob
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="kt-timeline-v3__item kt-timeline-v3__item--warning">
                                                                    <span class="kt-timeline-v3__item-time">10:00</span>
                                                                    <div class="kt-timeline-v3__item-desc">
                                                                        <span class="kt-timeline-v3__item-text">
                                                                            Lorem ipsum dolor sit amit
                                                                        </span><br>
                                                                        <span class="kt-timeline-v3__item-user-name">
                                                                            <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                                                                                By Sean
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="kt-timeline-v3__item kt-timeline-v3__item--brand">
                                                                    <span class="kt-timeline-v3__item-time">11:00</span>
                                                                    <div class="kt-timeline-v3__item-desc">
                                                                        <span class="kt-timeline-v3__item-text">
                                                                            Lorem ipsum dolor sit amit eiusmdd tempor
                                                                        </span><br>
                                                                        <span class="kt-timeline-v3__item-user-name">
                                                                            <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                                                                                By James
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="kt-timeline-v3__item kt-timeline-v3__item--success">
                                                                    <span class="kt-timeline-v3__item-time">12:00</span>
                                                                    <div class="kt-timeline-v3__item-desc">
                                                                        <span class="kt-timeline-v3__item-text">
                                                                            Lorem ipsum dolor
                                                                        </span><br>
                                                                        <span class="kt-timeline-v3__item-user-name">
                                                                            <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                                                                                By James
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="kt-timeline-v3__item kt-timeline-v3__item--danger">
                                                                    <span class="kt-timeline-v3__item-time">14:00</span>
                                                                    <div class="kt-timeline-v3__item-desc">
                                                                        <span class="kt-timeline-v3__item-text">
                                                                            Lorem ipsum dolor sit amit,consectetur eiusmdd
                                                                        </span><br>
                                                                        <span class="kt-timeline-v3__item-user-name">
                                                                            <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                                                                                By Derrick
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="kt-timeline-v3__item kt-timeline-v3__item--info">
                                                                    <span class="kt-timeline-v3__item-time">15:00</span>
                                                                    <div class="kt-timeline-v3__item-desc">
                                                                        <span class="kt-timeline-v3__item-text">
                                                                            Lorem ipsum dolor sit amit,consectetur
                                                                        </span><br>
                                                                        <span class="kt-timeline-v3__item-user-name">
                                                                            <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                                                                                By Iman
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="kt-timeline-v3__item kt-timeline-v3__item--brand">
                                                                    <span class="kt-timeline-v3__item-time">17:00</span>
                                                                    <div class="kt-timeline-v3__item-desc">
                                                                        <span class="kt-timeline-v3__item-text">
                                                                            Lorem ipsum dolor sit consectetur eiusmdd tempor
                                                                        </span><br>
                                                                        <span class="kt-timeline-v3__item-user-name">
                                                                            <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                                                                                By Aziko
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!--End::Timeline 3 -->
                                                    </div>
                                                    <div class="tab-pane" id="kt_widget3_tab2_content">

                                                        <!--Begin::Timeline 3 -->
                                                        <div class="kt-timeline-v3">
                                                            <div class="kt-timeline-v3__items">
                                                                <div class="kt-timeline-v3__item kt-timeline-v3__item--info">
                                                                    <span class="kt-timeline-v3__item-time kt-font-success">09:00</span>
                                                                    <div class="kt-timeline-v3__item-desc">
                                                                        <span class="kt-timeline-v3__item-text">
                                                                            Contrary to popular belief, Lorem Ipsum is not simply random text.
                                                                        </span><br>
                                                                        <span class="kt-timeline-v3__item-user-name">
                                                                            <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                                                                                By Bob
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="kt-timeline-v3__item kt-timeline-v3__item--warning">
                                                                    <span class="kt-timeline-v3__item-time kt-font-warning">10:00</span>
                                                                    <div class="kt-timeline-v3__item-desc">
                                                                        <span class="kt-timeline-v3__item-text">
                                                                            There are many variations of passages of Lorem Ipsum available.
                                                                        </span><br>
                                                                        <span class="kt-timeline-v3__item-user-name">
                                                                            <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                                                                                By Sean
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="kt-timeline-v3__item kt-timeline-v3__item--brand">
                                                                    <span class="kt-timeline-v3__item-time kt-font-primary">11:00</span>
                                                                    <div class="kt-timeline-v3__item-desc">
                                                                        <span class="kt-timeline-v3__item-text">
                                                                            Contrary to popular belief, Lorem Ipsum is not simply random text.
                                                                        </span><br>
                                                                        <span class="kt-timeline-v3__item-user-name">
                                                                            <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                                                                                By James
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="kt-timeline-v3__item kt-timeline-v3__item--success">
                                                                    <span class="kt-timeline-v3__item-time kt-font-success">12:00</span>
                                                                    <div class="kt-timeline-v3__item-desc">
                                                                        <span class="kt-timeline-v3__item-text">
                                                                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced.
                                                                        </span><br>
                                                                        <span class="kt-timeline-v3__item-user-name">
                                                                            <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                                                                                By James
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="kt-timeline-v3__item kt-timeline-v3__item--danger">
                                                                    <span class="kt-timeline-v3__item-time kt-font-warning">14:00</span>
                                                                    <div class="kt-timeline-v3__item-desc">
                                                                        <span class="kt-timeline-v3__item-text">
                                                                            Latin words, combined with a handful of model sentence structures.
                                                                        </span><br>
                                                                        <span class="kt-timeline-v3__item-user-name">
                                                                            <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                                                                                By Derrick
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="kt-timeline-v3__item kt-timeline-v3__item--info">
                                                                    <span class="kt-timeline-v3__item-time kt-font-info">15:00</span>
                                                                    <div class="kt-timeline-v3__item-desc">
                                                                        <span class="kt-timeline-v3__item-text">
                                                                            Contrary to popular belief, Lorem Ipsum is not simply random text.
                                                                        </span><br>
                                                                        <span class="kt-timeline-v3__item-user-name">
                                                                            <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                                                                                By Iman
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="kt-timeline-v3__item kt-timeline-v3__item--brand">
                                                                    <span class="kt-timeline-v3__item-time kt-font-danger">17:00</span>
                                                                    <div class="kt-timeline-v3__item-desc">
                                                                        <span class="kt-timeline-v3__item-text">
                                                                            Lorem Ipsum is therefore always free from repetition, injected humour.
                                                                        </span><br>
                                                                        <span class="kt-timeline-v3__item-user-name">
                                                                            <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                                                                                By Aziko
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!--End::Timeline 3 -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--End::Portlet-->
                                    </div>
                                </div>










                                <!--Begin::Section-->
                                <div class="row">
                                <div class="col-xl-4">

                                    <!--begin:: Widgets/Tasks -->
                                    <div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
                                        <div class="kt-portlet__head">
                                            <div class="kt-portlet__head-label">
                                                <h3 class="kt-portlet__head-title">
                                                    Tasks
                                                </h3>
                                            </div>
                                            <div class="kt-portlet__head-toolbar">
                                                <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#kt_widget2_tab1_content" role="tab">
                                                            Today
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#kt_widget2_tab2_content" role="tab">
                                                            Week
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#kt_widget2_tab3_content" role="tab">
                                                            Month
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="kt-portlet__body">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="kt_widget2_tab1_content">
                                                    <div class="kt-widget2">
                                                        <div class="kt-widget2__item kt-widget2__item--primary">
                                                            <div class="kt-widget2__checkbox">
                                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            <div class="kt-widget2__info">
                                                                <a href="#" class="kt-widget2__title">
                                                                    Make Metronic Great Again.Lorem Ipsum Amet
                                                                </a>
                                                                <a href="#" class="kt-widget2__username">
                                                                    By Bob
                                                                </a>
                                                            </div>
                                                            <div class="kt-widget2__actions">
                                                                <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                                                    <i class="flaticon-more-1"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                                                    <ul class="kt-nav">
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                                                <span class="kt-nav__link-text">Reports</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                                <span class="kt-nav__link-text">Messages</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                                                <span class="kt-nav__link-text">Charts</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                                                <span class="kt-nav__link-text">Members</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                                                <span class="kt-nav__link-text">Settings</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="kt-widget2__item kt-widget2__item--warning">
                                                            <div class="kt-widget2__checkbox">
                                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            <div class="kt-widget2__info">
                                                                <a href="#" class="kt-widget2__title">
                                                                    Prepare Docs For Metting On Monday
                                                                </a>
                                                                <a href="#" class="kt-widget2__username">
                                                                    By Sean
                                                                </a>
                                                            </div>
                                                            <div class="kt-widget2__actions">
                                                                <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                                                    <i class="flaticon-more-1"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                                                    <ul class="kt-nav">
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                                                <span class="kt-nav__link-text">Reports</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                                <span class="kt-nav__link-text">Messages</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                                                <span class="kt-nav__link-text">Charts</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                                                <span class="kt-nav__link-text">Members</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                                                <span class="kt-nav__link-text">Settings</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="kt-widget2__item kt-widget2__item--brand">
                                                            <div class="kt-widget2__checkbox">
                                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            <div class="kt-widget2__info">
                                                                <a href="#" class="kt-widget2__title">
                                                                    Make Widgets Great Again.Estudiat Communy Elit
                                                                </a>
                                                                <a href="#" class="kt-widget2__username">
                                                                    By Aziko
                                                                </a>
                                                            </div>
                                                            <div class="kt-widget2__actions">
                                                                <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                                                    <i class="flaticon-more-1"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                                                    <ul class="kt-nav">
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                                                <span class="kt-nav__link-text">Reports</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                                <span class="kt-nav__link-text">Messages</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                                                <span class="kt-nav__link-text">Charts</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                                                <span class="kt-nav__link-text">Members</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                                                <span class="kt-nav__link-text">Settings</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="kt-widget2__item kt-widget2__item--success">
                                                            <div class="kt-widget2__checkbox">
                                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            <div class="kt-widget2__info">
                                                                <a href="#" class="kt-widget2__title">
                                                                    Make Metronic Great Again. Lorem Ipsum
                                                                </a>
                                                                <a class="kt-widget2__username">
                                                                    By James
                                                                </a>
                                                            </div>
                                                            <div class="kt-widget2__actions">
                                                                <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                                                    <i class="flaticon-more-1"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                                                    <ul class="kt-nav">
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                                                <span class="kt-nav__link-text">Reports</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                                <span class="kt-nav__link-text">Messages</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                                                <span class="kt-nav__link-text">Charts</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                                                <span class="kt-nav__link-text">Members</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                                                <span class="kt-nav__link-text">Settings</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="kt-widget2__item kt-widget2__item--danger">
                                                            <div class="kt-widget2__checkbox">
                                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            <div class="kt-widget2__info">
                                                                <a href="#" class="kt-widget2__title">
                                                                    Completa Financial Report For Emirates Airlines
                                                                </a>
                                                                <a href="#" class="kt-widget2__username">
                                                                    By Bob
                                                                </a>
                                                            </div>
                                                            <div class="kt-widget2__actions">
                                                                <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                                                    <i class="flaticon-more-1"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                                                    <ul class="kt-nav">
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                                                <span class="kt-nav__link-text">Reports</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                                <span class="kt-nav__link-text">Messages</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                                                <span class="kt-nav__link-text">Charts</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                                                <span class="kt-nav__link-text">Members</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                                                <span class="kt-nav__link-text">Settings</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="kt-widget2__item kt-widget2__item--info">
                                                            <div class="kt-widget2__checkbox">
                                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            <div class="kt-widget2__info">
                                                                <a href="#" class="kt-widget2__title">
                                                                    Completa Financial Report For Emirates Airlines
                                                                    </p>
                                                                    <a href="#" class="kt-widget2__username">
                                                                        By Sean
                                                                    </a>
                                                            </div>
                                                            <div class="kt-widget2__actions">
                                                                <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                                                    <i class="flaticon-more-1"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                                                    <ul class="kt-nav">
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                                                <span class="kt-nav__link-text">Reports</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                                <span class="kt-nav__link-text">Messages</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                                                <span class="kt-nav__link-text">Charts</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                                                <span class="kt-nav__link-text">Members</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                                                <span class="kt-nav__link-text">Settings</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="kt_widget2_tab2_content">
                                                    <div class="kt-widget2">
                                                        <div class="kt-widget2__item kt-widget2__item--success">
                                                            <div class="kt-widget2__checkbox">
                                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            <div class="kt-widget2__info">
                                                                <a href="#" class="kt-widget2__title">
                                                                    Make Metronic Great Again.Lorem Ipsum
                                                                </a>
                                                                <a class="kt-widget2__username">
                                                                    By James
                                                                </a>
                                                            </div>
                                                            <div class="kt-widget2__actions">
                                                                <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                                                    <i class="flaticon-more-1"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                                                    <ul class="kt-nav">
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                                                <span class="kt-nav__link-text">Reports</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                                <span class="kt-nav__link-text">Messages</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                                                <span class="kt-nav__link-text">Charts</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                                                <span class="kt-nav__link-text">Members</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                                                <span class="kt-nav__link-text">Settings</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="kt-widget2__item kt-widget2__item--warning">
                                                            <div class="kt-widget2__checkbox">
                                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            <div class="kt-widget2__info">
                                                                <a href="#" class="kt-widget2__title">
                                                                    Prepare Docs For Metting On Monday
                                                                </a>
                                                                <a href="#" class="kt-widget2__username">
                                                                    By Sean
                                                                </a>
                                                            </div>
                                                            <div class="kt-widget2__actions">
                                                                <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                                                    <i class="flaticon-more-1"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                                                    <ul class="kt-nav">
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                                                <span class="kt-nav__link-text">Reports</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                                <span class="kt-nav__link-text">Messages</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                                                <span class="kt-nav__link-text">Charts</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                                                <span class="kt-nav__link-text">Members</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                                                <span class="kt-nav__link-text">Settings</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="kt-widget2__item kt-widget2__item--danger">
                                                            <div class="kt-widget2__checkbox">
                                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            <div class="kt-widget2__info">
                                                                <a href="#" class="kt-widget2__title">
                                                                    Completa Financial Report For Emirates Airlines
                                                                </a>
                                                                <a href="#" class="kt-widget2__username">
                                                                    By Bob
                                                                </a>
                                                            </div>
                                                            <div class="kt-widget2__actions">
                                                                <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                                                    <i class="flaticon-more-1"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                                                    <ul class="kt-nav">
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                                                <span class="kt-nav__link-text">Reports</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                                <span class="kt-nav__link-text">Messages</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                                                <span class="kt-nav__link-text">Charts</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                                                <span class="kt-nav__link-text">Members</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                                                <span class="kt-nav__link-text">Settings</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="kt-widget2__item kt-widget2__item--primary">
                                                            <div class="kt-widget2__checkbox">
                                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            <div class="kt-widget2__info">
                                                                <a href="#" class="kt-widget2__title">
                                                                    Make Metronic Great Again.Lorem Ipsum Amet
                                                                </a>
                                                                <a href="#" class="kt-widget2__username">
                                                                    By Bob
                                                                </a>
                                                            </div>
                                                            <div class="kt-widget2__actions">
                                                                <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                                                    <i class="flaticon-more-1"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                                                    <ul class="kt-nav">
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                                                <span class="kt-nav__link-text">Reports</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                                <span class="kt-nav__link-text">Messages</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                                                <span class="kt-nav__link-text">Charts</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                                                <span class="kt-nav__link-text">Members</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                                                <span class="kt-nav__link-text">Settings</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="kt-widget2__item kt-widget2__item--info">
                                                            <div class="kt-widget2__checkbox">
                                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            <div class="kt-widget2__info">
                                                                <a href="#" class="kt-widget2__title">
                                                                    Completa Financial Report For Emirates Airlines
                                                                </a>
                                                                <a href="#" class="kt-widget2__username">
                                                                    By Sean
                                                                </a>
                                                            </div>
                                                            <div class="kt-widget2__actions">
                                                                <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                                                    <i class="flaticon-more-1"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                                                    <ul class="kt-nav">
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                                                <span class="kt-nav__link-text">Reports</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                                <span class="kt-nav__link-text">Messages</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                                                <span class="kt-nav__link-text">Charts</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                                                <span class="kt-nav__link-text">Members</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                                                <span class="kt-nav__link-text">Settings</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="kt-widget2__item kt-widget2__item--brand">
                                                            <div class="kt-widget2__checkbox">
                                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            <div class="kt-widget2__info">
                                                                <a href="#" class="kt-widget2__title">
                                                                    Make Widgets Great Again.Estudiat Communy Elit
                                                                    </p>
                                                                    <a href="#" class="kt-widget2__username">
                                                                        By Aziko
                                                                    </a>
                                                            </div>
                                                            <div class="kt-widget2__actions">
                                                                <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                                                    <i class="flaticon-more-1"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                                                    <ul class="kt-nav">
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                                                <span class="kt-nav__link-text">Reports</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                                <span class="kt-nav__link-text">Messages</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                                                <span class="kt-nav__link-text">Charts</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                                                <span class="kt-nav__link-text">Members</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                                                <span class="kt-nav__link-text">Settings</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="kt_widget2_tab3_content">
                                                    <div class="kt-widget2">
                                                        <div class="kt-widget2__item kt-widget2__item--warning">
                                                            <div class="kt-widget2__checkbox">
                                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            <div class="kt-widget2__info">
                                                                <a href="#" class="kt-widget2__title">
                                                                    Make Metronic Great Again.Lorem Ipsum
                                                                </a>
                                                                <a class="kt-widget2__username">
                                                                    By James
                                                                </a>
                                                            </div>
                                                            <div class="kt-widget2__actions">
                                                                <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                                                    <i class="flaticon-more-1"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                                                    <ul class="kt-nav">
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                                                <span class="kt-nav__link-text">Reports</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                                <span class="kt-nav__link-text">Messages</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                                                <span class="kt-nav__link-text">Charts</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                                                <span class="kt-nav__link-text">Members</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                                                <span class="kt-nav__link-text">Settings</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="kt-widget2__item kt-widget2__item--danger">
                                                            <div class="kt-widget2__checkbox">
                                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            <div class="kt-widget2__info">
                                                                <a href="#" class="kt-widget2__title">
                                                                    Completa Financial Report For Emirates Airlines
                                                                </a>
                                                                <a href="#" class="kt-widget2__username">
                                                                    By Bob
                                                                </a>
                                                            </div>
                                                            <div class="kt-widget2__actions">
                                                                <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                                                    <i class="flaticon-more-1"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                                                    <ul class="kt-nav">
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                                                <span class="kt-nav__link-text">Reports</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                                <span class="kt-nav__link-text">Messages</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                                                <span class="kt-nav__link-text">Charts</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                                                <span class="kt-nav__link-text">Members</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                                                <span class="kt-nav__link-text">Settings</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="kt-widget2__item kt-widget2__item--brand">
                                                            <div class="kt-widget2__checkbox">
                                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            <div class="kt-widget2__info">
                                                                <a href="#" class="kt-widget2__title">
                                                                    Make Widgets Great Again.Estudiat Communy Elit
                                                                </a>
                                                                <a href="#" class="kt-widget2__username">
                                                                    By Aziko
                                                                </a>
                                                            </div>
                                                            <div class="kt-widget2__actions">
                                                                <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                                                    <i class="flaticon-more-1"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                                                    <ul class="kt-nav">
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                                                <span class="kt-nav__link-text">Reports</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                                <span class="kt-nav__link-text">Messages</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                                                <span class="kt-nav__link-text">Charts</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                                                <span class="kt-nav__link-text">Members</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                                                <span class="kt-nav__link-text">Settings</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="kt-widget2__item kt-widget2__item--info">
                                                            <div class="kt-widget2__checkbox">
                                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            <div class="kt-widget2__info">
                                                                <a href="#" class="kt-widget2__title">
                                                                    Completa Financial Report For Emirates Airlines
                                                                </a>
                                                                <a href="#" class="kt-widget2__username">
                                                                    By Sean
                                                                </a>
                                                            </div>
                                                            <div class="kt-widget2__actions">
                                                                <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                                                    <i class="flaticon-more-1"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                                                    <ul class="kt-nav">
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                                                <span class="kt-nav__link-text">Reports</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                                <span class="kt-nav__link-text">Messages</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                                                <span class="kt-nav__link-text">Charts</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                                                <span class="kt-nav__link-text">Members</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                                                <span class="kt-nav__link-text">Settings</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="kt-widget2__item kt-widget2__item--success">
                                                            <div class="kt-widget2__checkbox">
                                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            <div class="kt-widget2__info">
                                                                <a href="#" class="kt-widget2__title">
                                                                    Completa Financial Report For Emirates Airlines
                                                                </a>
                                                                <a href="#" class="kt-widget2__username">
                                                                    By Bob
                                                                </a>
                                                            </div>
                                                            <div class="kt-widget2__actions">
                                                                <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                                                    <i class="flaticon-more-1"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                                                    <ul class="kt-nav">
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                                                <span class="kt-nav__link-text">Reports</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                                <span class="kt-nav__link-text">Messages</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                                                <span class="kt-nav__link-text">Charts</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                                                <span class="kt-nav__link-text">Members</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                                                <span class="kt-nav__link-text">Settings</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="kt-widget2__item kt-widget2__item--primary">
                                                            <div class="kt-widget2__checkbox">
                                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                                                    <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            <div class="kt-widget2__info">
                                                                <a href="#" class="kt-widget2__title">
                                                                    Make Metronic Great Again.Lorem Ipsum Amet
                                                                </a>
                                                                <a href="#" class="kt-widget2__username">
                                                                    By Bob
                                                                </a>
                                                            </div>
                                                            <div class="kt-widget2__actions">
                                                                <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                                                    <i class="flaticon-more-1"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                                                    <ul class="kt-nav">
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                                                <span class="kt-nav__link-text">Reports</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                                <span class="kt-nav__link-text">Messages</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                                                <span class="kt-nav__link-text">Charts</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                                                <span class="kt-nav__link-text">Members</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a href="#" class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                                                <span class="kt-nav__link-text">Settings</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--end:: Widgets/Tasks -->
                                </div>



                            </div>

                            <!--End::Section-->                                


                                


                                            
                                    



                                            



										</div>
									</div>
								</div>
								
							</form>
						</div>
					</div>
				</div>
			</div>
			<!--End::Section-->

<!--End::Dashboard 4-->	</div>
<!-- end:: Content -->							</div>
											</div>
				</div>

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
<script src="{{asset('assets/vendors/general/block-ui/jquery.blockUI.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/js/vendors/bootstrap-switch.init.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/select2/dist/js/select2.full.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/typeahead.js/dist/typeahead.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/handlebars/dist/handlebars.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/nouislider/distribute/nouislider.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/owl.carousel/dist/owl.carousel.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/autosize/dist/autosize.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/clipboard/dist/clipboard.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/dropzone/dist/dropzone.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/js/vendors/dropzone.init.js')}}" type="text/javascript"></script> --}}
{{-- <script src="{{asset('assets/vendors/general/quill/dist/quill.js')}}" type="text/javascript"></script>
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
<script src="{{asset('assets/vendors/general/morris.js/morris.js')}}" type="text/javascript"></script>--}}
<script src="{{asset('assets/vendors/general/chart.js/dist/Chart.bundle.js')}}" type="text/javascript"></script>
{{-- <script src="{{asset('assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/waypoints/lib/jquery.waypoints.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/counterup/jquery.counterup.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/es6-promise-polyfill/promise.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/sweetalert2/dist/sweetalert2.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/js/vendors/sweetalert2.init.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/jquery.repeater/src/lib.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/jquery.repeater/src/jquery.input.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/jquery.repeater/src/repeater.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/dompurify/dist/purify.js')}}" type="text/javascript"></script> --}}
<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
    	    	   
		    	   <script src="{{asset('assets/js/demo8/scripts.bundle.js')}}" type="text/javascript"></script>
				<!--end::Global Theme Bundle -->

                    <!--begin::Page Vendors(used by this page) -->
                            <script src="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script>
                            {{-- <script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
                            <script src="{{asset('assets/vendors/custom/gmaps/gmaps.js')}}" type="text/javascript"></script> --}}
                        <!--end::Page Vendors -->
         
                    <!--begin::Page Scripts(used by this page) -->
                    <script src="{{asset('assets/js/demo8/pages/dashboard.js')}}" type="text/javascript"></script>
                    <!--end::Page Scripts -->
                    
                    <script src="{{asset('assets/js/demo8/pages/crud/forms/widgets/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
                    <script src="{{asset('assets/js/demo8/pages/crud/forms/widgets/bootstrap-daterangepicker.min.js')}}" type="text/javascript"></script>
                    <script src="{{asset('assets/js/demo8/pages/crud/forms/widgets/bootstrap-select.min.js')}}" type="text/javascript"></script>                    
                    <script src="{{asset('assets/js/demo8/pages/crud/forms/widgets/form-repeater.min.js')}}" type="text/javascript"></script>
            </body>
    <!-- end::Body -->
</html>



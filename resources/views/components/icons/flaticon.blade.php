<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
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
<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Metronic | Flaticon</title>
		<meta name="description" content="Flaticon icons">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

		<!--end::Web font -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="../../../../vendors/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="../../../../vendors/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="../../../../vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
		<link href="../../../../vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
		<link href="../../../../vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
		<link href="../../../../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="../../../../vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="../../../../vendors/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
		<link href="../../../../vendors/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="../../../../vendors/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
		<link href="../../../../vendors/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="../../../../vendors/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="../../../../vendors/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="../../../../vendors/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
		<link href="../../../../vendors/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet" type="text/css" />
		<link href="../../../../vendors/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="../../../../vendors/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="../../../../vendors/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="../../../../vendors/animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="../../../../vendors/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="../../../../vendors/jstree/dist/themes/default/style.css" rel="stylesheet" type="text/css" />
		<link href="../../../../vendors/morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="../../../../vendors/chartist/dist/chartist.min.css" rel="stylesheet" type="text/css" />
		<link href="../../../../vendors/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" type="text/css" />
		<link href="../../../../vendors/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="../../../../vendors/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="../../../../vendors/vendors/flaticon/css/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="../../../../vendors/vendors/metronic/css/styles.css" rel="stylesheet" type="text/css" />
		<link href="../../../../vendors/vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles -->
		<link href="../../assets/demo/base/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="../../assets/demo/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Global Theme Styles -->
		<link rel="shortcut icon" href="../../assets/demo/media/img/logo/favicon.ico" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- BEGIN: Header -->
			<header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">

						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand  m-brand--skin-dark ">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="../../index" class="m-brand__logo-wrapper">
										<img alt="" src="../../assets/demo/media/img/logo/logo_default_dark.png" />
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">

									<!-- BEGIN: Left Aside Minimize Toggle -->
									<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Responsive Aside Left Menu Toggler -->
									<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Responsive Header Menu Toggler -->
									<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Topbar Toggler -->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
										<i class="flaticon-more"></i>
									</a>

									<!-- BEGIN: Topbar Toggler -->
								</div>
							</div>
						</div>

						<!-- END: Brand -->
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

							<!-- BEGIN: Horizontal Menu -->
							<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
							<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
								<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
									<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i
											 class="m-menu__link-icon flaticon-add"></i><span class="m-menu__link-text">Actions</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
										<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
											<ul class="m-menu__subnav">
												<li class="m-menu__item " aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-file"></i><span class="m-menu__link-text">Create New Post</span></a></li>
												<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-diagram"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap">
																<span class="m-menu__link-text">Generate Reports</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--success">2</span></span> </span></span></a></li>
												<li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i class="m-menu__link-icon flaticon-business"></i><span
														 class="m-menu__link-text">Manage Orders</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
													<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right"><span class="m-menu__arrow "></span>
														<ul class="m-menu__subnav">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Latest Orders</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Pending Orders</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Processed Orders</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Delivery Reports</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Payments</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Customers</span></a></li>
														</ul>
													</div>
												</li>
												<li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="#" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-chat-1"></i><span class="m-menu__link-text">Customer
															Feedbacks</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
													<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right"><span class="m-menu__arrow "></span>
														<ul class="m-menu__subnav">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Customer Feedbacks</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Supplier Feedbacks</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Reviewed Feedbacks</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Resolved Feedbacks</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Feedback Reports</span></a></li>
														</ul>
													</div>
												</li>
												<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">Register Member</span></a></li>
											</ul>
										</div>
									</li>
									<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i
											 class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-text">Reports</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
										<div class="m-menu__submenu  m-menu__submenu--fixed m-menu__submenu--left" style="width:1000px"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
											<div class="m-menu__subnav">
												<ul class="m-menu__content">
													<li class="m-menu__item">
														<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Finance Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
														<ul class="m-menu__inner">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-map"></i><span class="m-menu__link-text">Annual Reports</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-user"></i><span class="m-menu__link-text">HR Reports</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-clipboard"></i><span class="m-menu__link-text">IPO Reports</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-1"></i><span class="m-menu__link-text">Finance Margins</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-2"></i><span class="m-menu__link-text">Revenue Reports</span></a></li>
														</ul>
													</li>
													<li class="m-menu__item">
														<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Project Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
														<ul class="m-menu__inner">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Coca
																		Cola CRM</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Delta
																		Airlines Booking Site</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Malibu
																		Accounting</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Vineseed
																		Website Rewamp</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Zircon
																		Mobile App</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Mercury
																		CMS</span></a></li>
														</ul>
													</li>
													<li class="m-menu__item">
														<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">HR Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
														<ul class="m-menu__inner">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Staff
																		Directory</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Client
																		Directory</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Salary
																		Reports</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Staff
																		Payslips</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Corporate
																		Expenses</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Project
																		Expenses</span></a></li>
														</ul>
													</li>
													<li class="m-menu__item">
														<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Reporting Apps</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
														<ul class="m-menu__inner">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Report Adjusments</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Sources & Mediums</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Reporting Settings</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Conversions</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Report Flows</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Audit & Logs</span></a></li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</li>
									<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i
											 class="m-menu__link-icon flaticon-paper-plane"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Apps</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--brand m-badge--wide">new</span></span>
												</span></span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
										<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
											<ul class="m-menu__subnav">
												<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-business"></i><span class="m-menu__link-text">eCommerce</span></a></li>
												<li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="../../crud/datatable_v1" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-computer"></i><span
														 class="m-menu__link-text">Audience</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
													<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right"><span class="m-menu__arrow "></span>
														<ul class="m-menu__subnav">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">Active Users</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-interface-1"></i><span class="m-menu__link-text">User Explorer</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-lifebuoy"></i><span class="m-menu__link-text">Users Flows</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-1"></i><span class="m-menu__link-text">Market Segments</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic"></i><span class="m-menu__link-text">User Reports</span></a></li>
														</ul>
													</div>
												</li>
												<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-map"></i><span class="m-menu__link-text">Marketing</span></a></li>
												<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-2"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap">
																<span class="m-menu__link-text">Campaigns</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--success">3</span></span> </span></span></a></li>
												<li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i class="m-menu__link-icon flaticon-infinity"></i><span
														 class="m-menu__link-text">Cloud Manager</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
													<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span class="m-menu__arrow "></span>
														<ul class="m-menu__subnav">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-add"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap">
																			<span class="m-menu__link-text">File Upload</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--danger">3</span></span> </span></span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-signs-1"></i><span class="m-menu__link-text">File Attributes</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-folder"></i><span class="m-menu__link-text">Folders</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-cogwheel-2"></i><span class="m-menu__link-text">System Settings</span></a></li>
														</ul>
													</div>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>

							<!-- END: Horizontal Menu -->

							<!-- BEGIN: Topbar -->
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">
										<li class="m-nav__item m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width m-dropdown--skin-light	m-list-search m-list-search--skin-light" m-dropdown-toggle="click" id="m_quicksearch"
										 m-quicksearch-mode="dropdown" m-dropdown-persistent="1">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-nav__link-icon"><i class="flaticon-search-1"></i></span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
												<div class="m-dropdown__inner ">
													<div class="m-dropdown__header">
														<form class="m-list-search__form">
															<div class="m-list-search__form-wrapper">
																<span class="m-list-search__form-input-wrapper">
																	<input id="m_quicksearch_input" autocomplete="off" type="text" name="q" class="m-list-search__form-input" value="" placeholder="Search...">
																</span>
																<span class="m-list-search__form-icon-close" id="m_quicksearch_close">
																	<i class="la la-remove"></i>
																</span>
															</div>
														</form>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__scrollable m-scrollable" data-scrollable="true" data-height="300" data-mobile-height="200">
															<div class="m-dropdown__content">
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width" m-dropdown-toggle="click"
										 m-dropdown-persistent="1">
											<a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
												<span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
												<span class="m-nav__link-icon"><i class="flaticon-alarm"></i></span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center" style="background: url(../../assets/app/media/img/misc/notification_bg.jpg); background-size: cover;">
														<span class="m-dropdown__header-title">9 New</span>
														<span class="m-dropdown__header-subtitle">User Notifications</span>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
																<li class="nav-item m-tabs__item">
																	<a class="nav-link m-tabs__link active" data-toggle="tab" href="#topbar_notifications_notifications" role="tab">
																		Alerts
																	</a>
																</li>
																<li class="nav-item m-tabs__item">
																	<a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_events" role="tab">Events</a>
																</li>
																<li class="nav-item m-tabs__item">
																	<a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_logs" role="tab">Logs</a>
																</li>
															</ul>
															<div class="tab-content">
																<div class="tab-pane active" id="topbar_notifications_notifications" role="tabpanel">
																	<div class="m-scrollable" data-scrollable="true" data-height="250" data-mobile-height="200">
																		<div class="m-list-timeline m-list-timeline--skin-light">
																			<div class="m-list-timeline__items">
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
																					<span class="m-list-timeline__text">12 new users registered</span>
																					<span class="m-list-timeline__time">Just now</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge"></span>
																					<span class="m-list-timeline__text">System shutdown <span class="m-badge m-badge--success m-badge--wide">pending</span></span>
																					<span class="m-list-timeline__time">14 mins</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge"></span>
																					<span class="m-list-timeline__text">New invoice received</span>
																					<span class="m-list-timeline__time">20 mins</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge"></span>
																					<span class="m-list-timeline__text">DB overloaded 80% <span class="m-badge m-badge--info m-badge--wide">settled</span></span>
																					<span class="m-list-timeline__time">1 hr</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge"></span>
																					<span class="m-list-timeline__text">System error - <a href="#" class="m-link">Check</a></span>
																					<span class="m-list-timeline__time">2 hrs</span>
																				</div>
																				<div class="m-list-timeline__item m-list-timeline__item--read">
																					<span class="m-list-timeline__badge"></span>
																					<span href="" class="m-list-timeline__text">New order received <span class="m-badge m-badge--danger m-badge--wide">urgent</span></span>
																					<span class="m-list-timeline__time">7 hrs</span>
																				</div>
																				<div class="m-list-timeline__item m-list-timeline__item--read">
																					<span class="m-list-timeline__badge"></span>
																					<span class="m-list-timeline__text">Production server down</span>
																					<span class="m-list-timeline__time">3 hrs</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge"></span>
																					<span class="m-list-timeline__text">Production server up</span>
																					<span class="m-list-timeline__time">5 hrs</span>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
																	<div class="m-scrollable" data-scrollable="true" data-height="250" data-mobile-height="200">
																		<div class="m-list-timeline m-list-timeline--skin-light">
																			<div class="m-list-timeline__items">
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
																					<a href="" class="m-list-timeline__text">New order received</a>
																					<span class="m-list-timeline__time">Just now</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge m-list-timeline__badge--state1-danger"></span>
																					<a href="" class="m-list-timeline__text">New invoice received</a>
																					<span class="m-list-timeline__time">20 mins</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
																					<a href="" class="m-list-timeline__text">Production server up</a>
																					<span class="m-list-timeline__time">5 hrs</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
																					<a href="" class="m-list-timeline__text">New order received</a>
																					<span class="m-list-timeline__time">7 hrs</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
																					<a href="" class="m-list-timeline__text">System shutdown</a>
																					<span class="m-list-timeline__time">11 mins</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
																					<a href="" class="m-list-timeline__text">Production server down</a>
																					<span class="m-list-timeline__time">3 hrs</span>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
																	<div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
																		<div class="m-stack__item m-stack__item--center m-stack__item--middle">
																			<span class="">All caught up!<br>No new logs.</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="m-nav__item m-topbar__quick-actions m-topbar__quick-actions--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light"
										 m-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-nav__link-badge m-badge m-badge--dot m-badge--info m--hide"></span>
												<span class="m-nav__link-icon"><i class="flaticon-share"></i></span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center" style="background: url(../../assets/app/media/img/misc/quick_actions_bg.jpg); background-size: cover;">
														<span class="m-dropdown__header-title">Quick Actions</span>
														<span class="m-dropdown__header-subtitle">Shortcuts</span>
													</div>
													<div class="m-dropdown__body m-dropdown__body--paddingless">
														<div class="m-dropdown__content">
															<div class="data" data="false" data-height="380" data-mobile-height="200">
																<div class="m-nav-grid m-nav-grid--skin-light">
																	<div class="m-nav-grid__row">
																		<a href="#" class="m-nav-grid__item">
																			<i class="m-nav-grid__icon flaticon-file"></i>
																			<span class="m-nav-grid__text">Generate Report</span>
																		</a>
																		<a href="#" class="m-nav-grid__item">
																			<i class="m-nav-grid__icon flaticon-time"></i>
																			<span class="m-nav-grid__text">Add New Event</span>
																		</a>
																	</div>
																	<div class="m-nav-grid__row">
																		<a href="#" class="m-nav-grid__item">
																			<i class="m-nav-grid__icon flaticon-folder"></i>
																			<span class="m-nav-grid__text">Create New Task</span>
																		</a>
																		<a href="#" class="m-nav-grid__item">
																			<i class="m-nav-grid__icon flaticon-clipboard"></i>
																			<span class="m-nav-grid__text">Completed Tasks</span>
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="m-nav__item m-topbar__languages m-dropdown m-dropdown--small m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--mobile-full-width" m-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-nav__link-text">
													<img class="m-topbar__language-selected-img" src="../../assets/app/media/img/flags/020-flag.svg">
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center" style="background: url(../../assets/app/media/img/misc/quick_actions_bg.jpg); background-size: cover;">
														<span class="m-dropdown__header-subtitle">Select your language</span>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav m-nav--skin-light">
																<li class="m-nav__item m-nav__item--active">
																	<a href="#" class="m-nav__link m-nav__link--active">
																		<span class="m-nav__link-icon"><img class="m-topbar__language-img" src="../../assets/app/media/img/flags/020-flag.svg"></span>
																		<span class="m-nav__link-title m-topbar__language-text m-nav__link-text">USA</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="#" class="m-nav__link">
																		<span class="m-nav__link-icon"><img class="m-topbar__language-img" src="../../assets/app/media/img/flags/015-china.svg"></span>
																		<span class="m-nav__link-title m-topbar__language-text m-nav__link-text">China</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="#" class="m-nav__link">
																		<span class="m-nav__link-icon"><img class="m-topbar__language-img" src="../../assets/app/media/img/flags/016-spain.svg"></span>
																		<span class="m-nav__link-title m-topbar__language-text m-nav__link-text">Spain</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="#" class="m-nav__link">
																		<span class="m-nav__link-icon"><img class="m-topbar__language-img" src="../../assets/app/media/img/flags/014-japan.svg"></span>
																		<span class="m-nav__link-title m-topbar__language-text m-nav__link-text">Japan</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="#" class="m-nav__link">
																		<span class="m-nav__link-icon"><img class="m-topbar__language-img" src="../../assets/app/media/img/flags/017-germany.svg"></span>
																		<span class="m-nav__link-title m-topbar__language-text m-nav__link-text">Germany</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
										 m-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__userpic">
													<img src="../../assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt="" />
												</span>
												<span class="m-topbar__username m--hide">Nick</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center" style="background: url(../../assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
														<div class="m-card-user m-card-user--skin-dark">
															<div class="m-card-user__pic">
																<img src="../../assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt="" />

																<!--
						<span class="m-type m-type--lg m--bg-danger"><span class="m--font-light">S<span><span>
						-->
															</div>
															<div class="m-card-user__details">
																<span class="m-card-user__name m--font-weight-500">Mark Andre</span>
																<a href="" class="m-card-user__email m--font-weight-300 m-link">mark.andre@gmail.com</a>
															</div>
														</div>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav m-nav--skin-light">
																<li class="m-nav__section m--hide">
																	<span class="m-nav__section-text">Section</span>
																</li>
																<li class="m-nav__item">
																	<a href="../../header/profile" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-profile-1"></i>
																		<span class="m-nav__link-title">
																			<span class="m-nav__link-wrap">
																				<span class="m-nav__link-text">My Profile</span>
																				<span class="m-nav__link-badge"><span class="m-badge m-badge--success">2</span></span>
																			</span>
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="../../header/profile" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-share"></i>
																		<span class="m-nav__link-text">Activity</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="../../header/profile" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-chat-1"></i>
																		<span class="m-nav__link-text">Messages</span>
																	</a>
																</li>
																<li class="m-nav__separator m-nav__separator--fit">
																</li>
																<li class="m-nav__item">
																	<a href="../../header/profile" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-info"></i>
																		<span class="m-nav__link-text">FAQ</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="../../header/profile" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																		<span class="m-nav__link-text">Support</span>
																	</a>
																</li>
																<li class="m-nav__separator m-nav__separator--fit">
																</li>
																<li class="m-nav__item">
																	<a href="../../snippets/pages/user/login-1" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Logout</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li id="m_quick_sidebar_toggle" class="m-nav__item">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-nav__link-icon"><i class="flaticon-grid-menu"></i></span>
											</a>
										</li>
									</ul>
								</div>
							</div>

							<!-- END: Topbar -->
						</div>
					</div>
				</div>
			</header>

			<!-- END: Header -->

			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

					<!-- BEGIN: Aside Menu -->
					<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
						<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
							<li class="m-menu__item " aria-haspopup="true"><a href="../../index" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Dashboard</span>
											<span class="m-menu__link-badge"><span class="m-badge m-badge--danger">2</span></span> </span></span></a></li>
							<li class="m-menu__section ">
								<h4 class="m-menu__section-text">Components</h4>
								<i class="m-menu__section-icon flaticon-more-v2"></i>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text">Base</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Base</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/base/state" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">State Colors</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/base/typography" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Typography</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/base/stack" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Stack</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/base/tables" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Tables</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/base/progress" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Progress</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/base/modal" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Modal</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/base/alerts" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Alerts</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/base/popover" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Popover</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/base/tooltip" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Tooltip</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/base/blockui" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Block UI</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/base/spinners" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Spinners</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/base/scrollable" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Scrollable</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/base/dropdown" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Dropdown</span></a></li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Tabs</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../components/base/tabs/bootstrap" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Bootstrap
																Tabs</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../components/base/tabs/line" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Line Tabs</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/base/accordions" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Accordions</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/base/navs" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Navs</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/base/lists" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Lists</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/base/treeview" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Tree View</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/base/bootstrap-notify" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Bootstrap
													Notify</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/base/toastr" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Toastr</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/base/sweetalert2" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">SweetAlert2</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu m-menu__item--open m-menu__item--expanded" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-share"></i><span
									 class="m-menu__link-text">Icons</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="../../components/icons/flaticon" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Flaticon</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/icons/fontawesome5" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Fontawesome 5</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/icons/lineawesome" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Lineawesome</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/icons/socicons" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Socicons</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-web"></i><span class="m-menu__link-text">Buttons</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Buttons</span></span></li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Button Base</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../components/buttons/base/default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Default
																Style</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../components/buttons/base/square" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Square
																Style</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../components/buttons/base/pill" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pill Style</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../components/buttons/base/air" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Air Style</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/buttons/group" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Button Group</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/buttons/dropdown" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Button Dropdown</span></a></li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Button Icon</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../components/buttons/icon/lineawesome" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Lineawesome
																Icons</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../components/buttons/icon/fontawesome" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Fontawesome
																Icons</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../components/buttons/icon/flaticon" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Flaticon
																Icons</span></a></li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-interface-1"></i><span class="m-menu__link-text">Portlets</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Portlets</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/portlets/base" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Base Portlets</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/portlets/advanced" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Advanced
													Portlets</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/portlets/creative" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Creative
													Portlets</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/portlets/tabbed" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Tabbed Portlets</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/portlets/draggable" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Draggable
													Portlets</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/portlets/tools" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Portlet Tools</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/portlets/sticky-head" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Sticky Head</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-interface-6"></i><span class="m-menu__link-text">Timeline</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Timeline</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/timeline/timeline-1" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Timeline 1</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/timeline/timeline-2" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Timeline 2</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-network"></i><span class="m-menu__link-text">Widgets</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Widgets</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/widgets/general" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">General Widgets</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/widgets/chart" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Chart Widgets</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-calendar"></i><span class="m-menu__link-text">Calendar</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Calendar</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/calendar/basic" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Basic Calendar</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/calendar/list-view" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">List Views</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/calendar/google" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Google Calendar</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/calendar/external-events" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">External
													Events</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/calendar/background-events" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Background
													Events</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-diagram"></i><span class="m-menu__link-text">Charts</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Charts</span></span></li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">amCharts</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../components/charts/amcharts/charts" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">amCharts
																Charts</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../components/charts/amcharts/stock-charts" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">amCharts
																Stock Charts</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../components/charts/amcharts/maps" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">amCharts
																Maps</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/charts/flotcharts" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Flot Charts</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/charts/google-charts" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Google
													Charts</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/charts/morris-charts" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Morris
													Charts</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-placeholder-1"></i><span class="m-menu__link-text">Maps</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Maps</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/maps/google-maps" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Google Maps</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/maps/jqvmap" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">JQVMap</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-signs-2"></i><span class="m-menu__link-text">Utils</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Utils</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/utils/session-timeout" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Session
													Timeout</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/utils/idle-timer" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Idle Timer</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__section ">
								<h4 class="m-menu__section-text">CRUD</h4>
								<i class="m-menu__section-icon flaticon-more-v2"></i>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-interface-7"></i><span class="m-menu__link-text">Forms
										& Controls</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Forms & Controls</span></span></li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Form Controls</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/controls/base" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Base Inputs</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/controls/checkbox-radio" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Checkbox
																& Radio</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/controls/input-group" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Input
																Groups</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/controls/switch" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Switch</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/controls/option" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Mega Options</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Form Widgets</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/widgets/bootstrap-datepicker" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Datepicker</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/widgets/bootstrap-datetimepicker" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Datetimepicker</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/widgets/bootstrap-timepicker" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Timepicker</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/widgets/bootstrap-daterangepicker" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Daterangepicker</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/widgets/bootstrap-touchspin" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Touchspin</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/widgets/bootstrap-maxlength" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Maxlength</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/widgets/bootstrap-switch" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Switch</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/widgets/bootstrap-multipleselectsplitter" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Multiple
																Select Splitter</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/widgets/bootstrap-select" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Bootstrap
																Select</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/widgets/select2" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Select2</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/widgets/typeahead" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Typeahead</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/widgets/nouislider" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">noUiSlider</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/widgets/form-repeater" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form
																Repeater</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/widgets/ion-range-slider" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Ion
																Range Slider</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/widgets/input-mask" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Input Masks</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/widgets/summernote" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Summernote
																WYSIWYG</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/widgets/bootstrap-markdown" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Markdown
																Editor</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/widgets/autosize" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Autosize</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/widgets/clipboard" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Clipboard</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/widgets/dropzone" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Dropzone</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/widgets/recaptcha" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Google
																reCaptcha</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Form Layouts</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/layouts/default-forms" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Default
																Forms</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/layouts/multi-column-forms" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Multi
																Column Forms</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/layouts/action-bars" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Basic
																Action Bars</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/layouts/sticky-action-bar" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Sticky
																Action Bar</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Form Validation</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/validation/states" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Validation
																States</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/validation/form-controls" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form
																Controls</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/forms/validation/form-widgets" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form
																Widgets</span></a></li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-interface-8"></i><span class="m-menu__link-text">Metronic
										Wizard</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/wizard/wizard-1" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Wizard 1</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/wizard/wizard-2" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Wizard 2</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/wizard/wizard-3" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Wizard 3</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/wizard/wizard-4" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Wizard 4</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/wizard/wizard-5" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Wizard 5</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-tabs"></i><span class="m-menu__link-text">Metronic
										Datatable</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Metronic Datatable</span></span></li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Base</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/metronic-datatable/base/data-local" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Local
																Data</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/metronic-datatable/base/data-json" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">JSON
																Data</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/metronic-datatable/base/data-ajax" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Ajax
																Data</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/metronic-datatable/base/html-table" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">HTML
																Table</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/metronic-datatable/base/record-selection" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Record
																Selection</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/metronic-datatable/base/local-sort" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Local
																Sort</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/metronic-datatable/base/row-details" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Row
																Details</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/metronic-datatable/base/column-rendering" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Column
																Rendering</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/metronic-datatable/base/column-width" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Column
																Width</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/metronic-datatable/base/responsive-columns" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Responsive
																Columns</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/metronic-datatable/base/translation" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Translation</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Scrolling</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/metronic-datatable/scrolling/vertical" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Vertical
																Scrolling</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/metronic-datatable/scrolling/horizontal" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Horizontal
																Scrolling</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/metronic-datatable/scrolling/both" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Both
																Scrolling</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Locked Columns</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/metronic-datatable/locked/left" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Left
																Locked Columns</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/metronic-datatable/locked/right" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Right
																Locked Columns</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/metronic-datatable/locked/both" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Both
																Locked Columns</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/metronic-datatable/locked/html-table" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">HTML
																Table</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Child Datatables</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/metronic-datatable/child/data-local" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Local
																Data</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/metronic-datatable/child/data-ajax" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Remote
																Data</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">API</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/metronic-datatable/api/methods" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">API
																Methods</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/metronic-datatable/api/events" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Events</span></a></li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-list-3"></i><span class="m-menu__link-text">DataTables</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">DataTables</span></span></li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Basic</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/datatables/basic/basic" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Basic Tables</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/datatables/basic/scrollable" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Scrollable
																Tables</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/datatables/basic/headers" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Complex
																Headers</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/datatables/basic/paginations" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pagination
																Options</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Advanced</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/datatables/advanced/column-rendering" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Column
																Rendering</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/datatables/advanced/multiple-controls" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Multiple
																Controls</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/datatables/advanced/column-visibility" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Column
																Visibility</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/datatables/advanced/row-callback" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Row
																Callback</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/datatables/advanced/row-grouping" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Row
																Grouping</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/datatables/advanced/footer-callback" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Footer
																Callback</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Data sources</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/datatables/data-sources/html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">HTML</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/datatables/data-sources/javascript" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Javascript</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/datatables/data-sources/ajax-client-side" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Ajax
																Client-side</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/datatables/data-sources/ajax-server-side" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Ajax
																Server-side</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Search Options</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/datatables/search-options/column-search" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Column
																Search</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/datatables/search-options/advanced-search" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Advanced
																Search</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Extensions</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/datatables/extensions/buttons" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Buttons</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/datatables/extensions/colreorder" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">ColReorder</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/datatables/extensions/keytable" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">KeyTable</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/datatables/extensions/responsive" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Responsive</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/datatables/extensions/rowgroup" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">RowGroup</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/datatables/extensions/rowreorder" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">RowReorder</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/datatables/extensions/scroller" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Scroller</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../crud/datatables/extensions/select" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Select</span></a></li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li class="m-menu__section ">
								<h4 class="m-menu__section-text">Snippets</h4>
								<i class="m-menu__section-icon flaticon-more-v2"></i>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-interface-9"></i><span class="m-menu__link-text">Pricing
										Tables</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Pricing Tables</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../snippets/general/pricing-tables/pricing-table-1" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pricing
													Tables v1</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../snippets/general/pricing-tables/pricing-table-2" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pricing
													Tables v2</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../snippets/general/pricing-tables/pricing-table-3" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pricing
													Tables v3</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../snippets/general/pricing-tables/pricing-table-4" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pricing
													Tables v4</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-piggy-bank"></i><span class="m-menu__link-text">Invoices</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Invoices</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../snippets/invoices/invoice-1" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Invoice v1</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../snippets/invoices/invoice-2" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Invoice v2</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-exclamation"></i><span class="m-menu__link-text">FAQS</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">FAQS</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../snippets/faq/faq-1" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">FAQ v1</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-suitcase"></i><span class="m-menu__link-text">Custom
										Pages</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Custom Pages</span></span></li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">User Pages</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="../../snippets/pages/user/login-1" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Login
																- 1</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="../../snippets/pages/user/login-2" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Login
																- 2</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="../../snippets/pages/user/login-3" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Login
																- 3</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="../../snippets/pages/user/login-4" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Login
																- 4</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="../../snippets/pages/user/login-5" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Login
																- 5</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="../../snippets/pages/user/login-6" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Login
																- 6</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Error Pages</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="../../snippets/pages/errors/error-1" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Error
																1</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="../../snippets/pages/errors/error-2" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Error
																2</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="../../snippets/pages/errors/error-3" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Error
																3</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="../../snippets/pages/errors/error-4" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Error
																4</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="../../snippets/pages/errors/error-5" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Error
																5</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="../../snippets/pages/errors/error-6" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Error
																6</span></a></li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>

					<!-- END: Aside Menu -->
				</div>

				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">

					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">Flaticon</h3>
								<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
									<li class="m-nav__item m-nav__item--home">
										<a href="#" class="m-nav__link m-nav__link--icon">
											<i class="m-nav__link-icon la la-home"></i>
										</a>
									</li>
									<li class="m-nav__separator">-</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">Icons</span>
										</a>
									</li>
									<li class="m-nav__separator">-</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">Flaticon</span>
										</a>
									</li>
								</ul>
							</div>
							<div>
								<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
									<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
										<i class="la la-plus m--hide"></i>
										<i class="la la-ellipsis-h"></i>
									</a>
									<div class="m-dropdown__wrapper">
										<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
										<div class="m-dropdown__inner">
											<div class="m-dropdown__body">
												<div class="m-dropdown__content">
													<ul class="m-nav">
														<li class="m-nav__section m-nav__section--first m--hide">
															<span class="m-nav__section-text">Quick Actions</span>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-share"></i>
																<span class="m-nav__link-text">Activity</span>
															</a>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-chat-1"></i>
																<span class="m-nav__link-text">Messages</span>
															</a>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-info"></i>
																<span class="m-nav__link-text">FAQ</span>
															</a>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																<span class="m-nav__link-text">Support</span>
															</a>
														</li>
														<li class="m-nav__separator m-nav__separator--fit">
														</li>
														<li class="m-nav__item">
															<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
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

					<!-- END: Subheader -->
					<div class="m-content">
						<div class="row">
							<div class="col-md-12">

								<!--begin::Portlet-->
								<div class="m-portlet">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
												<h3 class="m-portlet__head-text">
													Flaticon Icons
												</h3>
											</div>
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-email-black-circular-button"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-email-black-circular-button </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-map"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-map </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-alert-off"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-alert-off </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-alert"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-alert </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-computer"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-computer </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-responsive"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-responsive </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-presentation"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-presentation </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-arrows"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-arrows </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-rocket"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-rocket </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-reply"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-reply </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-gift"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-gift </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-confetti"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-confetti </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-piggy-bank"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-piggy-bank </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-support"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-support </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-delete"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-delete </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-eye"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-eye </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-multimedia"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-multimedia </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-whatsapp"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-whatsapp </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-multimedia-2"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-multimedia-2 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-email"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-email </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-presentation-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-presentation-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-trophy"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-trophy </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-psd"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-psd </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-layer"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-layer </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-doc"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-doc </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-file"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-file </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-network"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-network </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-bus-stop"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-bus-stop </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-globe"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-globe </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-upload"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-upload </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-squares"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-squares </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-technology"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-technology </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-up-arrow"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-up-arrow </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-browser"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-browser </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-speech-bubble"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-speech-bubble </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-coins"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-coins </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-open-box"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-open-box </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-speech-bubble-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-speech-bubble-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-attachment"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-attachment </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-photo-camera"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-photo-camera </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-skype-logo"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-skype-logo </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-linkedin-logo"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-linkedin-logo </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-twitter-logo"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-twitter-logo </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-facebook-letter-logo"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-facebook-letter-logo </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-calendar-with-a-clock-time-tools"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-calendar-with-a-clock-time-tools </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-youtube"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-youtube </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-add-circular-button"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-add-circular-button </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-more-v2"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-more-v2 </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-search"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-search </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-search-magnifier-interface-symbol"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-search-magnifier-interface-symbol </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-questions-circular-button"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-questions-circular-button </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-refresh"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-refresh </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-logout"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-logout </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-event-calendar-symbol"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-event-calendar-symbol </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-laptop"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-laptop </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-tool"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-tool </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-graphic"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-graphic </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-symbol"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-symbol </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-graphic-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-graphic-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-clock"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-clock </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-squares-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-squares-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-black"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-black </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-book"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-book </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-cogwheel"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-cogwheel </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-exclamation"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-exclamation </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-add-label-button"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-add-label-button </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-delete-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-delete-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-interface"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-interface </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-more"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-more </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-warning-sign"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-warning-sign </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-calendar"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-calendar </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-instagram-logo"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-instagram-logo </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-linkedin"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-linkedin </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-facebook-logo-button"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-facebook-logo-button </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-twitter-logo-button"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-twitter-logo-button </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-cancel"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-cancel </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-exclamation-square"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-exclamation-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-buildings"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-buildings </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-danger"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-danger </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-technology-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-technology-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-letter-g"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-letter-g </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-interface-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-interface-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-circle"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-circle </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-pin"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-pin </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-close"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-close </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-clock-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-clock-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-apps"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-apps </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-user"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-user </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-menu-button"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-menu-button </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-settings"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-settings </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-home"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-home </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-clock-2"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-clock-2 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-lifebuoy"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-lifebuoy </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-cogwheel-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-cogwheel-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-paper-plane"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-paper-plane </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-statistics"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-statistics </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-diagram"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-diagram </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-line-graph"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-line-graph </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-customer"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-customer </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-visible"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-visible </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-shopping-basket"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-shopping-basket </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-price-tag"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-price-tag </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-businesswoman"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-businesswoman </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-medal"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-medal </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-like"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-like </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-edit"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-edit </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-avatar"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-avatar </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-download"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-download </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-home-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-home-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-mail"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-mail </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-mail-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-mail-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-warning"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-warning </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-cart"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-cart </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-bag"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-bag </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-pie-chart"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-pie-chart </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-graph"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-graph </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-interface-2"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-interface-2 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-chat"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-chat </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-envelope"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-envelope </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-chat-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-chat-1 </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-interface-3"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-interface-3 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-background"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-background </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-file-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-file-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-interface-4"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-interface-4 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-multimedia-3"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-multimedia-3 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-list"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-list </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-time"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-time </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-profile"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-profile </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-imac"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-imac </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-medical"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-medical </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-music"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-music </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-plus"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-plus </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-exclamation-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-exclamation-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-info"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-info </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-menu-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-menu-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-menu-2"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-menu-2 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-share"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-share </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-interface-5"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-interface-5 </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-signs"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-signs </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-tabs"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-tabs </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-multimedia-4"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-multimedia-4 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-upload-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-upload-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-web"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-web </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-placeholder"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-placeholder </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-placeholder-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-placeholder-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-layers"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-layers </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-interface-6"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-interface-6 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-interface-7"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-interface-7 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-interface-8"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-interface-8 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-tool-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-tool-1 </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-settings-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-settings-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-alarm"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-alarm </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-search-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-search-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-time-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-time-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-stopwatch"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-stopwatch </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-folder"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-folder </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-folder-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-folder-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-folder-2"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-folder-2 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-folder-3"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-folder-3 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-file-2"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-file-2 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-list-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-list-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-list-2"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-list-2 </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-calendar-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-calendar-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-time-2"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-time-2 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-interface-9"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-interface-9 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-app"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-app </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-suitcase"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-suitcase </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-grid-menu-v2"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-grid-menu-v2 </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-more-v6"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-more-v6 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-more-v5"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-more-v5 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-add"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-add </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-multimedia-5"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-multimedia-5 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-more-v4"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-more-v4 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-placeholder-2"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-placeholder-2 </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-map-location"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-map-location </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-users"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-users </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-profile-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-profile-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-lock"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-lock </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-sound"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-sound </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-star"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-star </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-placeholder-3"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-placeholder-3 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-bell"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-bell </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-paper-plane-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-paper-plane-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-users-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-users-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-more-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-more-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-up-arrow-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-up-arrow-1 </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-grid-menu"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-grid-menu </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-alarm-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-alarm-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-earth-globe"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-earth-globe </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-alert-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-alert-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-internet"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-internet </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-user-ok"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-user-ok </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-user-add"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-user-add </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-user-settings"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-user-settings </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-truck"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-truck </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-analytics"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-analytics </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-notes"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-notes </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-tea-cup"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-tea-cup </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-exclamation-2"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-exclamation-2 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-technology-2"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-technology-2 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-location"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-location </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-edit-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-edit-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-home-2"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-home-2 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-dashboard"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-dashboard </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-information"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-information </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-light"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-light </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-car"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-car </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-business"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-business </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-squares-2"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-squares-2 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-signs-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-signs-1 </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-mark"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-mark </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-squares-3"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-squares-3 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-comment"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-comment </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-shapes"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-shapes </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-clipboard"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-clipboard </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-squares-4"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-squares-4 </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-delete-2"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-delete-2 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-bell-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-bell-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-list-3"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-list-3 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-infinity"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-infinity </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-chat-2"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-chat-2 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-calendar-2"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-calendar-2 </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-signs-2"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-signs-2 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-time-3"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-time-3 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-calendar-3"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-calendar-3 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-interface-10"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-interface-10 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-interface-11"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-interface-11 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-folder-4"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-folder-4 </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-alert-2"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-alert-2 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-cogwheel-2"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-cogwheel-2 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-graphic-2"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-graphic-2 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-rotate"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-rotate </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-feed"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-feed </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-safe-shield-protection"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-safe-shield-protection </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-box"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-box </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-security"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-security </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-download-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-download-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-box-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-box-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-pie-chart-1"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-pie-chart-1 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="flaticon-notepad"></i>
													</div>
													<div class="m-demo-icon__class">
														flaticon-notepad </div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!--end::Portlet-->
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- end:: Body -->

			<!-- begin::Footer -->
			<footer class="m-grid__item		m-footer ">
				<div class="m-container m-container--fluid m-container--full-height m-page__container">
					<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
						<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
								2017 &copy; Metronic theme by <a href="https://keenthemes.com" class="m-link">Keenthemes</a>
							</span>
						</div>
						<div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
							<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">About</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">Privacy</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">T&C</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">Purchase</span>
									</a>
								</li>
								<li class="m-nav__item m-nav__item">
									<a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
										<i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>

			<!-- end::Footer -->
		</div>

		<!-- end:: Page -->

		<!-- begin::Quick Sidebar -->
		<div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
			<div class="m-quick-sidebar__content m--hide">
				<span id="m_quick_sidebar_close" class="m-quick-sidebar__close"><i class="la la-close"></i></span>
				<ul id="m_quick_sidebar_tabs" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
					<li class="nav-item m-tabs__item">
						<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_quick_sidebar_tabs_messenger" role="tab">Messages</a>
					</li>
					<li class="nav-item m-tabs__item">
						<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_settings" role="tab">Settings</a>
					</li>
					<li class="nav-item m-tabs__item">
						<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_logs" role="tab">Logs</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="m_quick_sidebar_tabs_messenger" role="tabpanel">
						<div class="m-messenger m-messenger--message-arrow m-messenger--skin-light">
							<div class="m-messenger__messages m-scrollable">
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-pic">
											<img src="../../assets/app/media/img//users/user3.jpg" alt="" />
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													Megan wrote
												</div>
												<div class="m-messenger__message-text">
													Hi Bob. What time will be the meeting ?
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													Hi Megan. It's at 2.30PM
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-pic">
											<img src="../../assets/app/media/img//users/user3.jpg" alt="" />
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													Megan wrote
												</div>
												<div class="m-messenger__message-text">
													Will the development team be joining ?
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													Yes sure. I invited them as well
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__datetime">2:30PM</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-pic">
											<img src="../../assets/app/media/img//users/user3.jpg" alt="" />
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													Megan wrote
												</div>
												<div class="m-messenger__message-text">
													Noted. For the Coca-Cola Mobile App project as well ?
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													Yes, sure.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													Please also prepare the quotation for the Loop CRM project as well.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__datetime">3:15PM</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-no-pic m--bg-fill-danger">
											<span>M</span>
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													Megan wrote
												</div>
												<div class="m-messenger__message-text">
													Noted. I will prepare it.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--out">
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-text">
													Thanks Megan. I will see you later.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-messenger__wrapper">
									<div class="m-messenger__message m-messenger__message--in">
										<div class="m-messenger__message-pic">
											<img src="../../assets/app/media/img//users/user3.jpg" alt="" />
										</div>
										<div class="m-messenger__message-body">
											<div class="m-messenger__message-arrow"></div>
											<div class="m-messenger__message-content">
												<div class="m-messenger__message-username">
													Megan wrote
												</div>
												<div class="m-messenger__message-text">
													Sure. See you in the meeting soon.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__seperator"></div>
							<div class="m-messenger__form">
								<div class="m-messenger__form-controls">
									<input type="text" name="" placeholder="Type here..." class="m-messenger__form-input">
								</div>
								<div class="m-messenger__form-tools">
									<a href="" class="m-messenger__form-attachment">
										<i class="la la-paperclip"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="m_quick_sidebar_tabs_settings" role="tabpanel">
						<div class="m-list-settings m-scrollable">
							<div class="m-list-settings__group">
								<div class="m-list-settings__heading">General Settings</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">Email Notifications</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" checked="checked" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">Site Tracking</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">SMS Alerts</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">Backup Storage</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">Audit Logs</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" checked="checked" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
							</div>
							<div class="m-list-settings__group">
								<div class="m-list-settings__heading">System Settings</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">System Logs</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">Error Reporting</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">Applications Logs</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">Backup Servers</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" checked="checked" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
								<div class="m-list-settings__item">
									<span class="m-list-settings__item-label">Audit Logs</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="m_quick_sidebar_tabs_logs" role="tabpanel">
						<div class="m-list-timeline m-scrollable">
							<div class="m-list-timeline__group">
								<div class="m-list-timeline__heading">
									System Logs
								</div>
								<div class="m-list-timeline__items">
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">12 new users registered <span class="m-badge m-badge--warning m-badge--wide">important</span></a>
										<span class="m-list-timeline__time">Just now</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">System shutdown</a>
										<span class="m-list-timeline__time">11 mins</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
										<a href="" class="m-list-timeline__text">New invoice received</a>
										<span class="m-list-timeline__time">20 mins</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
										<a href="" class="m-list-timeline__text">Database overloaded 89% <span class="m-badge m-badge--success m-badge--wide">resolved</span></a>
										<span class="m-list-timeline__time">1 hr</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">System error</a>
										<span class="m-list-timeline__time">2 hrs</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">Production server down <span class="m-badge m-badge--danger m-badge--wide">pending</span></a>
										<span class="m-list-timeline__time">3 hrs</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">Production server up</a>
										<span class="m-list-timeline__time">5 hrs</span>
									</div>
								</div>
							</div>
							<div class="m-list-timeline__group">
								<div class="m-list-timeline__heading">
									Applications Logs
								</div>
								<div class="m-list-timeline__items">
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">New order received <span class="m-badge m-badge--info m-badge--wide">urgent</span></a>
										<span class="m-list-timeline__time">7 hrs</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">12 new users registered</a>
										<span class="m-list-timeline__time">Just now</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">System shutdown</a>
										<span class="m-list-timeline__time">11 mins</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
										<a href="" class="m-list-timeline__text">New invoices received</a>
										<span class="m-list-timeline__time">20 mins</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
										<a href="" class="m-list-timeline__text">Database overloaded 89%</a>
										<span class="m-list-timeline__time">1 hr</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">System error <span class="m-badge m-badge--info m-badge--wide">pending</span></a>
										<span class="m-list-timeline__time">2 hrs</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">Production server down</a>
										<span class="m-list-timeline__time">3 hrs</span>
									</div>
								</div>
							</div>
							<div class="m-list-timeline__group">
								<div class="m-list-timeline__heading">
									Server Logs
								</div>
								<div class="m-list-timeline__items">
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">Production server up</a>
										<span class="m-list-timeline__time">5 hrs</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">New order received</a>
										<span class="m-list-timeline__time">7 hrs</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">12 new users registered</a>
										<span class="m-list-timeline__time">Just now</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">System shutdown</a>
										<span class="m-list-timeline__time">11 mins</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
										<a href="" class="m-list-timeline__text">New invoice received</a>
										<span class="m-list-timeline__time">20 mins</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
										<a href="" class="m-list-timeline__text">Database overloaded 89%</a>
										<span class="m-list-timeline__time">1 hr</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">System error</a>
										<span class="m-list-timeline__time">2 hrs</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">Production server down</a>
										<span class="m-list-timeline__time">3 hrs</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
										<a href="" class="m-list-timeline__text">Production server up</a>
										<span class="m-list-timeline__time">5 hrs</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
										<a href="" class="m-list-timeline__text">New order received</a>
										<span class="m-list-timeline__time">1117 hrs</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- end::Quick Sidebar -->

		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>

		<!-- end::Scroll Top -->

		<!-- begin::Quick Nav -->
		<ul class="m-nav-sticky" style="margin-top: 30px;">
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Purchase" data-placement="left">
				<a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank"><i class="la la-cart-arrow-down"></i></a>
			</li>
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">
				<a href="https://keenthemes.com/metronic/documentation" target="_blank"><i class="la la-code-fork"></i></a>
			</li>
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
				<a href="https://keenthemes.com/forums/forum/support/metronic5/" target="_blank"><i class="la la-life-ring"></i></a>
			</li>
		</ul>

		<!-- begin::Quick Nav -->

		<!--begin:: Global Mandatory Vendors -->
		<script src="../../../../vendors/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="../../../../vendors/popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="../../../../vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="../../../../vendors/js-cookie/src/js.cookie.js" type="text/javascript"></script>
		<script src="../../../../vendors/moment/min/moment.min.js" type="text/javascript"></script>
		<script src="../../../../vendors/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
		<script src="../../../../vendors/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="../../../../vendors/wnumb/wNumb.js" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="../../../../vendors/jquery.repeater/src/lib.js" type="text/javascript"></script>
		<script src="../../../../vendors/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
		<script src="../../../../vendors/jquery.repeater/src/repeater.js" type="text/javascript"></script>
		<script src="../../../../vendors/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
		<script src="../../../../vendors/block-ui/jquery.blockUI.js" type="text/javascript"></script>
		<script src="../../../../vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
		<script src="../../../../vendors/js/framework/components/plugins/forms/bootstrap-datepicker.init.js" type="text/javascript"></script>
		<script src="../../../../vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<script src="../../../../vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
		<script src="../../../../vendors/js/framework/components/plugins/forms/bootstrap-timepicker.init.js" type="text/javascript"></script>
		<script src="../../../../vendors/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
		<script src="../../../../vendors/js/framework/components/plugins/forms/bootstrap-daterangepicker.init.js" type="text/javascript"></script>
		<script src="../../../../vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
		<script src="../../../../vendors/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
		<script src="../../../../vendors/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
		<script src="../../../../vendors/js/framework/components/plugins/forms/bootstrap-switch.init.js" type="text/javascript"></script>
		<script src="../../../../vendors/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
		<script src="../../../../vendors/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
		<script src="../../../../vendors/select2/dist/js/select2.full.js" type="text/javascript"></script>
		<script src="../../../../vendors/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
		<script src="../../../../vendors/handlebars/dist/handlebars.js" type="text/javascript"></script>
		<script src="../../../../vendors/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
		<script src="../../../../vendors/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
		<script src="../../../../vendors/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
		<script src="../../../../vendors/inputmask/dist/inputmask/inputmask.phone.extensions.js" type="text/javascript"></script>
		<script src="../../../../vendors/nouislider/distribute/nouislider.js" type="text/javascript"></script>
		<script src="../../../../vendors/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
		<script src="../../../../vendors/autosize/dist/autosize.js" type="text/javascript"></script>
		<script src="../../../../vendors/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
		<script src="../../../../vendors/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
		<script src="../../../../vendors/dropzone/dist/dropzone.js" type="text/javascript"></script>
		<script src="../../../../vendors/summernote/dist/summernote.js" type="text/javascript"></script>
		<script src="../../../../vendors/markdown/lib/markdown.js" type="text/javascript"></script>
		<script src="../../../../vendors/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
		<script src="../../../../vendors/js/framework/components/plugins/forms/bootstrap-markdown.init.js" type="text/javascript"></script>
		<script src="../../../../vendors/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
		<script src="../../../../vendors/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
		<script src="../../../../vendors/js/framework/components/plugins/forms/jquery-validation.init.js" type="text/javascript"></script>
		<script src="../../../../vendors/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
		<script src="../../../../vendors/js/framework/components/plugins/base/bootstrap-notify.init.js" type="text/javascript"></script>
		<script src="../../../../vendors/toastr/build/toastr.min.js" type="text/javascript"></script>
		<script src="../../../../vendors/jstree/dist/jstree.js" type="text/javascript"></script>
		<script src="../../../../vendors/raphael/raphael.js" type="text/javascript"></script>
		<script src="../../../../vendors/morris.js/morris.js" type="text/javascript"></script>
		<script src="../../../../vendors/chartist/dist/chartist.js" type="text/javascript"></script>
		<script src="../../../../vendors/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
		<script src="../../../../vendors/js/framework/components/plugins/charts/chart.init.js" type="text/javascript"></script>
		<script src="../../../../vendors/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
		<script src="../../../../vendors/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
		<script src="../../../../vendors/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
		<script src="../../../../vendors/counterup/jquery.counterup.js" type="text/javascript"></script>
		<script src="../../../../vendors/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
		<script src="../../../../vendors/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
		<script src="../../../../vendors/js/framework/components/plugins/base/sweetalert2.init.js" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle -->
		<script src="../../assets/demo/base/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->
	</body>

	<!-- end::Body -->
</html>

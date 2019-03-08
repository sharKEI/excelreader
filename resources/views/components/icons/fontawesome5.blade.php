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
		<title>Metronic | Fontawesome 5 Icons</title>
		<meta name="description" content="">
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
										<li class="m-menu__item " aria-haspopup="true"><a href="../../components/icons/flaticon" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Flaticon</span></a></li>
										<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="../../components/icons/fontawesome5" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Fontawesome
													5</span></a></li>
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
								<h3 class="m-subheader__title m-subheader__title--separator">Fontawesome 5 Icons</h3>
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
											<span class="m-nav__link-text">Fontawesome 5</span>
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
													FontAwesome Icons
												</h3>
											</div>
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-500px"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-500px </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-accessible-icon"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-accessible-icon </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-accusoft"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-accusoft </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-address-book"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-address-book </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-address-card"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-address-card </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-adjust"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-adjust </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-adn"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-adn </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-adversal"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-adversal </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-affiliatetheme"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-affiliatetheme </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-air-freshener"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-air-freshener </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-algolia"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-algolia </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-align-center"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-align-center </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-align-justify"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-align-justify </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-align-left"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-align-left </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-align-right"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-align-right </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-allergies"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-allergies </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-amazon"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-amazon </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-amazon-pay"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-amazon-pay </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-ambulance"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-ambulance </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-american-sign-language-interpreting"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-american-sign-language-interpreting </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-amilia"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-amilia </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-anchor"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-anchor </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-android"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-android </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-angellist"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-angellist </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-angle-double-down"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-angle-double-down </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-angle-double-left"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-angle-double-left </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-angle-double-right"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-angle-double-right </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-angle-double-up"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-angle-double-up </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-angle-down"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-angle-down </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-angle-left"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-angle-left </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-angle-right"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-angle-right </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-angle-up"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-angle-up </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-angry"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-angry </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-angrycreative"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-angrycreative </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-angular"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-angular </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-app-store"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-app-store </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-app-store-ios"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-app-store-ios </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-apper"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-apper </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-apple"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-apple </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-apple-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-apple-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-apple-pay"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-apple-pay </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-archive"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-archive </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-archway"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-archway </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-arrow-alt-circle-down"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-arrow-alt-circle-down </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-arrow-alt-circle-left"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-arrow-alt-circle-left </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-arrow-alt-circle-right"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-arrow-alt-circle-right </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-arrow-alt-circle-up"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-arrow-alt-circle-up </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-arrow-circle-down"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-arrow-circle-down </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-arrow-circle-left"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-arrow-circle-left </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-arrow-circle-right"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-arrow-circle-right </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-arrow-circle-up"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-arrow-circle-up </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-arrow-down"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-arrow-down </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-arrow-left"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-arrow-left </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-arrow-right"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-arrow-right </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-arrow-up"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-arrow-up </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-arrows-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-arrows-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-arrows-alt-h"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-arrows-alt-h </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-arrows-alt-v"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-arrows-alt-v </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-assistive-listening-systems"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-assistive-listening-systems </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-asterisk"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-asterisk </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-asymmetrik"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-asymmetrik </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-at"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-at </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-atlas"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-atlas </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-atom"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-atom </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-audible"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-audible </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-audio-description"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-audio-description </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-autoprefixer"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-autoprefixer </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-avianex"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-avianex </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-aviato"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-aviato </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-award"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-award </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-aws"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-aws </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-backspace"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-backspace </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-backward"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-backward </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-balance-scale"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-balance-scale </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-ban"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-ban </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-band-aid"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-band-aid </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-bandcamp"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-bandcamp </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-barcode"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-barcode </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-bars"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-bars </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-baseball-ball"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-baseball-ball </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-basketball-ball"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-basketball-ball </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-bath"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-bath </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-battery-empty"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-battery-empty </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-battery-full"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-battery-full </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-battery-half"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-battery-half </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-battery-quarter"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-battery-quarter </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-battery-three-quarters"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-battery-three-quarters </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-bed"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-bed </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-beer"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-beer </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-behance"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-behance </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-behance-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-behance-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-bell"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-bell </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-bell-slash"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-bell-slash </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-bezier-curve"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-bezier-curve </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-bicycle"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-bicycle </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-bimobject"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-bimobject </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-binoculars"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-binoculars </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-birthday-cake"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-birthday-cake </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-bitbucket"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-bitbucket </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-bitcoin"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-bitcoin </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-bity"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-bity </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-black-tie"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-black-tie </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-blackberry"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-blackberry </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-blender"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-blender </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-blind"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-blind </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-blogger"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-blogger </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-blogger-b"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-blogger-b </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-bluetooth"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-bluetooth </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-bluetooth-b"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-bluetooth-b </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-bold"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-bold </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-bolt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-bolt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-bomb"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-bomb </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-bone"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-bone </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-bong"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-bong </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-book"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-book </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-book-open"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-book-open </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-book-reader"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-book-reader </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-bookmark"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-bookmark </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-bowling-ball"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-bowling-ball </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-box"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-box </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-box-open"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-box-open </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-boxes"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-boxes </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-braille"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-braille </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-brain"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-brain </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-briefcase"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-briefcase </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-briefcase-medical"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-briefcase-medical </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-broadcast-tower"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-broadcast-tower </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-broom"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-broom </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-brush"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-brush </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-btc"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-btc </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-bug"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-bug </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-building"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-building </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-bullhorn"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-bullhorn </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-bullseye"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-bullseye </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-burn"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-burn </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-buromobelexperte"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-buromobelexperte </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-bus"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-bus </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-bus-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-bus-alt </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-buysellads"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-buysellads </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-calculator"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-calculator </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-calendar"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-calendar </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-calendar-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-calendar-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-calendar-check"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-calendar-check </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-calendar-minus"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-calendar-minus </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-calendar-plus"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-calendar-plus </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-calendar-times"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-calendar-times </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-camera"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-camera </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-camera-retro"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-camera-retro </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-cannabis"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cannabis </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-capsules"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-capsules </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-car"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-car </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-car-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-car-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-car-battery"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-car-battery </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-car-crash"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-car-crash </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-car-side"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-car-side </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-caret-down"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-caret-down </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-caret-left"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-caret-left </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-caret-right"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-caret-right </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-caret-square-down"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-caret-square-down </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-caret-square-left"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-caret-square-left </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-caret-square-right"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-caret-square-right </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-caret-square-up"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-caret-square-up </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-caret-up"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-caret-up </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-cart-arrow-down"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cart-arrow-down </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-cart-plus"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cart-plus </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-cc-amazon-pay"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cc-amazon-pay </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-cc-amex"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cc-amex </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-cc-apple-pay"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cc-apple-pay </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-cc-diners-club"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cc-diners-club </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-cc-discover"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cc-discover </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-cc-jcb"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cc-jcb </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-cc-mastercard"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cc-mastercard </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-cc-paypal"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cc-paypal </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-cc-stripe"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cc-stripe </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-cc-visa"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cc-visa </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-centercode"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-centercode </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-certificate"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-certificate </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-chalkboard"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-chalkboard </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-chalkboard-teacher"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-chalkboard-teacher </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-charging-station"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-charging-station </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-chart-area"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-chart-area </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-chart-bar"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-chart-bar </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-chart-line"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-chart-line </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-chart-pie"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-chart-pie </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-check"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-check </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-check-circle"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-check-circle </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-check-double"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-check-double </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-check-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-check-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-chess"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-chess </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-chess-bishop"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-chess-bishop </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-chess-board"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-chess-board </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-chess-king"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-chess-king </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-chess-knight"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-chess-knight </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-chess-pawn"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-chess-pawn </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-chess-queen"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-chess-queen </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-chess-rook"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-chess-rook </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-chevron-circle-down"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-chevron-circle-down </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-chevron-circle-left"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-chevron-circle-left </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-chevron-circle-right"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-chevron-circle-right </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-chevron-circle-up"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-chevron-circle-up </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-chevron-down"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-chevron-down </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-chevron-left"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-chevron-left </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-chevron-right"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-chevron-right </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-chevron-up"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-chevron-up </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-child"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-child </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-chrome"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-chrome </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-church"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-church </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-circle"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-circle </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-circle-notch"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-circle-notch </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-clipboard"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-clipboard </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-clipboard-check"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-clipboard-check </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-clipboard-list"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-clipboard-list </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-clock"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-clock </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-clone"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-clone </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-closed-captioning"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-closed-captioning </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-cloud"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cloud </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-cloud-download-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cloud-download-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-cloud-upload-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cloud-upload-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-cloudscale"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cloudscale </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-cloudsmith"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cloudsmith </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-cloudversify"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cloudversify </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-cocktail"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cocktail </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-code"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-code </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-code-branch"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-code-branch </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-codepen"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-codepen </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-codiepie"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-codiepie </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-coffee"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-coffee </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-cog"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cog </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-cogs"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cogs </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-coins"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-coins </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-columns"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-columns </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-comment"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-comment </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-comment-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-comment-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-comment-dots"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-comment-dots </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-comment-slash"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-comment-slash </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-comments"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-comments </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-compact-disc"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-compact-disc </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-compass"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-compass </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-compress"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-compress </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-concierge-bell"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-concierge-bell </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-connectdevelop"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-connectdevelop </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-contao"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-contao </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-cookie"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cookie </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-cookie-bite"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cookie-bite </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-copy"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-copy </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-copyright"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-copyright </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-couch"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-couch </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-cpanel"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cpanel </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-creative-commons"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-creative-commons </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-creative-commons-by"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-creative-commons-by </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-creative-commons-nc"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-creative-commons-nc </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-creative-commons-nc-eu"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-creative-commons-nc-eu </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-creative-commons-nc-jp"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-creative-commons-nc-jp </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-creative-commons-nd"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-creative-commons-nd </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-creative-commons-pd"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-creative-commons-pd </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-creative-commons-pd-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-creative-commons-pd-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-creative-commons-remix"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-creative-commons-remix </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-creative-commons-sa"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-creative-commons-sa </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-creative-commons-sampling"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-creative-commons-sampling </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-creative-commons-sampling-plus"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-creative-commons-sampling-plus </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-creative-commons-share"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-creative-commons-share </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-credit-card"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-credit-card </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-crop"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-crop </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-crop-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-crop-alt </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-crosshairs"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-crosshairs </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-crow"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-crow </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-crown"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-crown </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-css3"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-css3 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-css3-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-css3-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-cube"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cube </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-cubes"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cubes </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-cut"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cut </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-cuttlefish"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-cuttlefish </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-d-and-d"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-d-and-d </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-dashcube"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-dashcube </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-database"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-database </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-deaf"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-deaf </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-delicious"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-delicious </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-deploydog"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-deploydog </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-deskpro"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-deskpro </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-desktop"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-desktop </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-deviantart"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-deviantart </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-diagnoses"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-diagnoses </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-dice"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-dice </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-dice-five"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-dice-five </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-dice-four"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-dice-four </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-dice-one"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-dice-one </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-dice-six"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-dice-six </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-dice-three"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-dice-three </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-dice-two"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-dice-two </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-digg"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-digg </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-digital-ocean"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-digital-ocean </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-digital-tachograph"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-digital-tachograph </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-directions"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-directions </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-discord"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-discord </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-discourse"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-discourse </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-divide"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-divide </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-dizzy"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-dizzy </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-dna"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-dna </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-dochub"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-dochub </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-docker"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-docker </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-dollar-sign"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-dollar-sign </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-dolly"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-dolly </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-dolly-flatbed"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-dolly-flatbed </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-donate"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-donate </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-door-closed"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-door-closed </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-door-open"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-door-open </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-dot-circle"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-dot-circle </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-dove"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-dove </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-download"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-download </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-draft2digital"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-draft2digital </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-drafting-compass"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-drafting-compass </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-draw-polygon"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-draw-polygon </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-dribbble"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-dribbble </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-dribbble-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-dribbble-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-dropbox"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-dropbox </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-drum"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-drum </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-drum-steelpan"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-drum-steelpan </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-drupal"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-drupal </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-dumbbell"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-dumbbell </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-dyalog"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-dyalog </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-earlybirds"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-earlybirds </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-ebay"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-ebay </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-edge"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-edge </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-edit"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-edit </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-eject"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-eject </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-elementor"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-elementor </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-ellipsis-h"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-ellipsis-h </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-ellipsis-v"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-ellipsis-v </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-ello"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-ello </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-ember"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-ember </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-empire"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-empire </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-envelope"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-envelope </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-envelope-open"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-envelope-open </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-envelope-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-envelope-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-envira"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-envira </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-equals"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-equals </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-eraser"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-eraser </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-erlang"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-erlang </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-ethereum"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-ethereum </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-etsy"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-etsy </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-euro-sign"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-euro-sign </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-exchange-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-exchange-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-exclamation"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-exclamation </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-exclamation-circle"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-exclamation-circle </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-exclamation-triangle"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-exclamation-triangle </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-expand"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-expand </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-expand-arrows-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-expand-arrows-alt </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-expeditedssl"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-expeditedssl </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-external-link-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-external-link-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-external-link-square-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-external-link-square-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-eye"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-eye </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-eye-dropper"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-eye-dropper </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-eye-slash"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-eye-slash </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-facebook"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-facebook </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-facebook-f"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-facebook-f </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-facebook-messenger"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-facebook-messenger </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-facebook-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-facebook-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-fast-backward"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-fast-backward </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-fast-forward"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-fast-forward </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-fax"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-fax </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-feather"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-feather </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-feather-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-feather-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-female"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-female </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-fighter-jet"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-fighter-jet </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-file"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-file </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-file-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-file-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-file-archive"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-file-archive </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-file-audio"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-file-audio </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-file-code"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-file-code </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-file-contract"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-file-contract </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-file-download"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-file-download </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-file-excel"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-file-excel </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-file-export"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-file-export </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-file-image"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-file-image </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-file-import"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-file-import </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-file-invoice"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-file-invoice </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-file-invoice-dollar"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-file-invoice-dollar </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-file-medical"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-file-medical </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-file-medical-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-file-medical-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-file-pdf"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-file-pdf </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-file-powerpoint"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-file-powerpoint </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-file-prescription"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-file-prescription </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-file-signature"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-file-signature </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-file-upload"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-file-upload </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-file-video"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-file-video </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-file-word"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-file-word </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-fill"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-fill </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-fill-drip"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-fill-drip </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-film"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-film </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-filter"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-filter </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-fingerprint"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-fingerprint </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-fire"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-fire </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-fire-extinguisher"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-fire-extinguisher </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-firefox"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-firefox </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-first-aid"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-first-aid </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-first-order"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-first-order </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-first-order-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-first-order-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-firstdraft"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-firstdraft </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-fish"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-fish </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-flag"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-flag </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-flag-checkered"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-flag-checkered </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-flask"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-flask </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-flickr"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-flickr </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-flipboard"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-flipboard </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-flushed"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-flushed </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-fly"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-fly </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-folder"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-folder </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-folder-open"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-folder-open </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-font"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-font </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-font-awesome"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-font-awesome </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-font-awesome-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-font-awesome-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-font-awesome-flag"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-font-awesome-flag </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-font-awesome-logo-full"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-font-awesome-logo-full </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-fonticons"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-fonticons </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-fonticons-fi"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-fonticons-fi </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-football-ball"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-football-ball </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-fort-awesome"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-fort-awesome </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-fort-awesome-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-fort-awesome-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-forumbee"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-forumbee </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-forward"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-forward </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-foursquare"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-foursquare </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-free-code-camp"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-free-code-camp </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-freebsd"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-freebsd </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-frog"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-frog </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-frown"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-frown </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-frown-open"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-frown-open </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-fulcrum"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-fulcrum </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-futbol"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-futbol </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-galactic-republic"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-galactic-republic </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-galactic-senate"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-galactic-senate </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-gamepad"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-gamepad </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-gas-pump"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-gas-pump </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-gavel"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-gavel </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-gem"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-gem </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-genderless"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-genderless </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-get-pocket"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-get-pocket </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-gg"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-gg </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-gg-circle"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-gg-circle </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-gift"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-gift </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-git"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-git </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-git-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-git-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-github"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-github </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-github-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-github-alt </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-github-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-github-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-gitkraken"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-gitkraken </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-gitlab"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-gitlab </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-gitter"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-gitter </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-glass-martini"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-glass-martini </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-glass-martini-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-glass-martini-alt </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-glasses"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-glasses </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-glide"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-glide </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-glide-g"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-glide-g </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-globe"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-globe </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-globe-africa"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-globe-africa </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-globe-americas"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-globe-americas </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-globe-asia"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-globe-asia </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-gofore"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-gofore </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-golf-ball"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-golf-ball </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-goodreads"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-goodreads </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-goodreads-g"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-goodreads-g </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-google"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-google </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-google-drive"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-google-drive </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-google-play"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-google-play </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-google-plus"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-google-plus </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-google-plus-g"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-google-plus-g </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-google-plus-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-google-plus-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-google-wallet"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-google-wallet </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-graduation-cap"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-graduation-cap </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-gratipay"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-gratipay </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-grav"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-grav </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-greater-than"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-greater-than </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-greater-than-equal"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-greater-than-equal </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-grimace"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-grimace </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-grin"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-grin </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-grin-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-grin-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-grin-beam"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-grin-beam </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-grin-beam-sweat"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-grin-beam-sweat </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-grin-hearts"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-grin-hearts </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-grin-squint"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-grin-squint </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-grin-squint-tears"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-grin-squint-tears </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-grin-stars"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-grin-stars </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-grin-tears"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-grin-tears </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-grin-tongue"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-grin-tongue </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-grin-tongue-squint"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-grin-tongue-squint </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-grin-tongue-wink"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-grin-tongue-wink </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-grin-wink"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-grin-wink </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-grip-horizontal"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-grip-horizontal </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-grip-vertical"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-grip-vertical </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-gripfire"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-gripfire </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-grunt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-grunt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-gulp"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-gulp </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-h-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-h-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-hacker-news"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hacker-news </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-hacker-news-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hacker-news-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-hackerrank"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hackerrank </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-hand-holding"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hand-holding </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-hand-holding-heart"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hand-holding-heart </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-hand-holding-usd"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hand-holding-usd </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-hand-lizard"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hand-lizard </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-hand-paper"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hand-paper </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-hand-peace"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hand-peace </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-hand-point-down"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hand-point-down </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-hand-point-left"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hand-point-left </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-hand-point-right"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hand-point-right </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-hand-point-up"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hand-point-up </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-hand-pointer"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hand-pointer </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-hand-rock"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hand-rock </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-hand-scissors"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hand-scissors </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-hand-spock"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hand-spock </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-hands"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hands </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-hands-helping"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hands-helping </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-handshake"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-handshake </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-hashtag"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hashtag </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-hdd"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hdd </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-heading"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-heading </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-headphones"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-headphones </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-headphones-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-headphones-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-headset"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-headset </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-heart"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-heart </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-heartbeat"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-heartbeat </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-helicopter"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-helicopter </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-highlighter"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-highlighter </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-hips"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hips </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-hire-a-helper"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hire-a-helper </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-history"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-history </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-hockey-puck"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hockey-puck </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-home"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-home </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-hooli"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hooli </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-hornbill"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hornbill </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-hospital"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hospital </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-hospital-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hospital-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-hospital-symbol"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hospital-symbol </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-hot-tub"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hot-tub </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-hotel"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hotel </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-hotjar"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hotjar </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-hourglass"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hourglass </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-hourglass-end"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hourglass-end </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-hourglass-half"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hourglass-half </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-hourglass-start"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hourglass-start </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-houzz"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-houzz </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-html5"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-html5 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-hubspot"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-hubspot </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-i-cursor"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-i-cursor </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-id-badge"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-id-badge </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-id-card"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-id-card </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-id-card-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-id-card-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-image"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-image </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-images"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-images </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-imdb"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-imdb </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-inbox"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-inbox </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-indent"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-indent </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-industry"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-industry </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-infinity"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-infinity </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-info"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-info </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-info-circle"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-info-circle </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-instagram"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-instagram </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-internet-explorer"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-internet-explorer </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-ioxhost"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-ioxhost </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-italic"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-italic </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-itunes"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-itunes </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-itunes-note"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-itunes-note </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-java"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-java </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-jedi-order"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-jedi-order </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-jenkins"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-jenkins </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-joget"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-joget </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-joint"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-joint </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-joomla"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-joomla </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-js"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-js </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-js-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-js-square </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-jsfiddle"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-jsfiddle </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-kaggle"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-kaggle </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-key"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-key </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-keybase"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-keybase </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-keyboard"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-keyboard </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-keycdn"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-keycdn </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-kickstarter"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-kickstarter </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-kickstarter-k"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-kickstarter-k </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-kiss"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-kiss </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-kiss-beam"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-kiss-beam </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-kiss-wink-heart"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-kiss-wink-heart </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-kiwi-bird"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-kiwi-bird </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-korvue"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-korvue </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-language"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-language </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-laptop"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-laptop </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-laptop-code"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-laptop-code </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-laravel"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-laravel </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-lastfm"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-lastfm </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-lastfm-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-lastfm-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-laugh"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-laugh </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-laugh-beam"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-laugh-beam </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-laugh-squint"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-laugh-squint </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-laugh-wink"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-laugh-wink </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-layer-group"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-layer-group </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-leaf"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-leaf </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-leanpub"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-leanpub </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-lemon"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-lemon </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-less"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-less </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-less-than"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-less-than </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-less-than-equal"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-less-than-equal </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-level-down-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-level-down-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-level-up-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-level-up-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-life-ring"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-life-ring </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-lightbulb"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-lightbulb </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-line"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-line </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-link"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-link </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-linkedin"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-linkedin </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-linkedin-in"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-linkedin-in </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-linode"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-linode </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-linux"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-linux </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-lira-sign"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-lira-sign </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-list"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-list </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-list-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-list-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-list-ol"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-list-ol </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-list-ul"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-list-ul </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-location-arrow"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-location-arrow </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-lock"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-lock </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-lock-open"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-lock-open </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-long-arrow-alt-down"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-long-arrow-alt-down </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-long-arrow-alt-left"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-long-arrow-alt-left </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-long-arrow-alt-right"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-long-arrow-alt-right </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-long-arrow-alt-up"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-long-arrow-alt-up </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-low-vision"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-low-vision </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-luggage-cart"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-luggage-cart </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-lyft"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-lyft </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-magento"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-magento </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-magic"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-magic </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-magnet"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-magnet </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-mailchimp"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-mailchimp </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-male"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-male </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-mandalorian"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-mandalorian </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-map"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-map </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-map-marked"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-map-marked </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-map-marked-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-map-marked-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-map-marker"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-map-marker </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-map-marker-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-map-marker-alt </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-map-pin"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-map-pin </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-map-signs"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-map-signs </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-markdown"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-markdown </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-marker"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-marker </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-mars"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-mars </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-mars-double"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-mars-double </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-mars-stroke"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-mars-stroke </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-mars-stroke-h"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-mars-stroke-h </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-mars-stroke-v"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-mars-stroke-v </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-mastodon"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-mastodon </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-maxcdn"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-maxcdn </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-medal"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-medal </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-medapps"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-medapps </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-medium"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-medium </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-medium-m"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-medium-m </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-medkit"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-medkit </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-medrt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-medrt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-meetup"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-meetup </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-megaport"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-megaport </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-meh"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-meh </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-meh-blank"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-meh-blank </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-meh-rolling-eyes"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-meh-rolling-eyes </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-memory"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-memory </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-mercury"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-mercury </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-microchip"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-microchip </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-microphone"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-microphone </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-microphone-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-microphone-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-microphone-alt-slash"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-microphone-alt-slash </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-microphone-slash"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-microphone-slash </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-microscope"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-microscope </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-microsoft"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-microsoft </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-minus"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-minus </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-minus-circle"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-minus-circle </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-minus-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-minus-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-mix"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-mix </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-mixcloud"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-mixcloud </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-mizuni"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-mizuni </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-mobile"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-mobile </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-mobile-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-mobile-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-modx"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-modx </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-monero"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-monero </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-money-bill"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-money-bill </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-money-bill-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-money-bill-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-money-bill-wave"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-money-bill-wave </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-money-bill-wave-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-money-bill-wave-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-money-check"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-money-check </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-money-check-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-money-check-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-monument"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-monument </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-moon"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-moon </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-mortar-pestle"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-mortar-pestle </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-motorcycle"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-motorcycle </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-mouse-pointer"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-mouse-pointer </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-music"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-music </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-napster"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-napster </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-neos"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-neos </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-neuter"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-neuter </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-newspaper"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-newspaper </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-nimblr"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-nimblr </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-nintendo-switch"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-nintendo-switch </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-node"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-node </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-node-js"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-node-js </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-not-equal"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-not-equal </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-notes-medical"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-notes-medical </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-npm"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-npm </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-ns8"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-ns8 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-nutritionix"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-nutritionix </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-object-group"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-object-group </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-object-ungroup"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-object-ungroup </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-odnoklassniki"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-odnoklassniki </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-odnoklassniki-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-odnoklassniki-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-oil-can"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-oil-can </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-old-republic"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-old-republic </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-opencart"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-opencart </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-openid"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-openid </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-opera"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-opera </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-optin-monster"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-optin-monster </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-osi"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-osi </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-outdent"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-outdent </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-page4"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-page4 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-pagelines"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-pagelines </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-paint-brush"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-paint-brush </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-paint-roller"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-paint-roller </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-palette"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-palette </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-palfed"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-palfed </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-pallet"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-pallet </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-paper-plane"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-paper-plane </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-paperclip"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-paperclip </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-parachute-box"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-parachute-box </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-paragraph"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-paragraph </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-parking"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-parking </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-passport"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-passport </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-paste"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-paste </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-patreon"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-patreon </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-pause"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-pause </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-pause-circle"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-pause-circle </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-paw"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-paw </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-paypal"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-paypal </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-pen"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-pen </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-pen-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-pen-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-pen-fancy"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-pen-fancy </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-pen-nib"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-pen-nib </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-pen-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-pen-square </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-pencil-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-pencil-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-pencil-ruler"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-pencil-ruler </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-people-carry"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-people-carry </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-percent"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-percent </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-percentage"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-percentage </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-periscope"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-periscope </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-phabricator"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-phabricator </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-phoenix-framework"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-phoenix-framework </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-phoenix-squadron"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-phoenix-squadron </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-phone"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-phone </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-phone-slash"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-phone-slash </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-phone-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-phone-square </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-phone-volume"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-phone-volume </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-php"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-php </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-pied-piper"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-pied-piper </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-pied-piper-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-pied-piper-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-pied-piper-hat"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-pied-piper-hat </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-pied-piper-pp"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-pied-piper-pp </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-piggy-bank"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-piggy-bank </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-pills"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-pills </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-pinterest"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-pinterest </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-pinterest-p"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-pinterest-p </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-pinterest-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-pinterest-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-plane"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-plane </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-plane-arrival"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-plane-arrival </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-plane-departure"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-plane-departure </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-play"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-play </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-play-circle"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-play-circle </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-playstation"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-playstation </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-plug"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-plug </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-plus"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-plus </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-plus-circle"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-plus-circle </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-plus-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-plus-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-podcast"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-podcast </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-poo"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-poo </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-poop"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-poop </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-portrait"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-portrait </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-pound-sign"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-pound-sign </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-power-off"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-power-off </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-prescription"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-prescription </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-prescription-bottle"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-prescription-bottle </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-prescription-bottle-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-prescription-bottle-alt </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-print"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-print </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-procedures"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-procedures </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-product-hunt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-product-hunt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-project-diagram"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-project-diagram </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-pushed"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-pushed </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-puzzle-piece"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-puzzle-piece </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-python"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-python </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-qq"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-qq </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-qrcode"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-qrcode </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-question"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-question </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-question-circle"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-question-circle </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-quidditch"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-quidditch </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-quinscape"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-quinscape </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-quora"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-quora </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-quote-left"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-quote-left </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-quote-right"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-quote-right </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-r-project"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-r-project </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-random"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-random </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-ravelry"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-ravelry </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-react"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-react </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-readme"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-readme </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-rebel"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-rebel </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-receipt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-receipt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-recycle"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-recycle </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-red-river"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-red-river </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-reddit"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-reddit </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-reddit-alien"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-reddit-alien </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-reddit-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-reddit-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-redo"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-redo </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-redo-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-redo-alt </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-registered"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-registered </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-rendact"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-rendact </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-renren"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-renren </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-reply"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-reply </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-reply-all"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-reply-all </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-replyd"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-replyd </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-researchgate"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-researchgate </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-resolving"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-resolving </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-retweet"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-retweet </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-rev"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-rev </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-ribbon"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-ribbon </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-road"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-road </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-robot"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-robot </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-rocket"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-rocket </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-rocketchat"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-rocketchat </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-rockrms"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-rockrms </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-route"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-route </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-rss"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-rss </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-rss-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-rss-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-ruble-sign"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-ruble-sign </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-ruler"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-ruler </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-ruler-combined"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-ruler-combined </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-ruler-horizontal"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-ruler-horizontal </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-ruler-vertical"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-ruler-vertical </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-rupee-sign"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-rupee-sign </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-sad-cry"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-sad-cry </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-sad-tear"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-sad-tear </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-safari"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-safari </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-sass"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-sass </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-save"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-save </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-schlix"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-schlix </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-school"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-school </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-screwdriver"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-screwdriver </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-scribd"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-scribd </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-search"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-search </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-search-minus"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-search-minus </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-search-plus"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-search-plus </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-searchengin"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-searchengin </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-seedling"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-seedling </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-sellcast"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-sellcast </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-sellsy"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-sellsy </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-server"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-server </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-servicestack"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-servicestack </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-shapes"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-shapes </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-share"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-share </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-share-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-share-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-share-alt-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-share-alt-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-share-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-share-square </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-shekel-sign"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-shekel-sign </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-shield-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-shield-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-ship"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-ship </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-shipping-fast"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-shipping-fast </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-shirtsinbulk"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-shirtsinbulk </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-shoe-prints"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-shoe-prints </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-shopping-bag"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-shopping-bag </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-shopping-basket"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-shopping-basket </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-shopping-cart"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-shopping-cart </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-shopware"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-shopware </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-shower"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-shower </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-shuttle-van"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-shuttle-van </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-sign"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-sign </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-sign-in-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-sign-in-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-sign-language"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-sign-language </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-sign-out-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-sign-out-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-signal"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-signal </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-signature"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-signature </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-simplybuilt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-simplybuilt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-sistrix"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-sistrix </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-sitemap"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-sitemap </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-sith"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-sith </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-skull"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-skull </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-skyatlas"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-skyatlas </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-skype"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-skype </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-slack"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-slack </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-slack-hash"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-slack-hash </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-sliders-h"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-sliders-h </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-slideshare"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-slideshare </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-smile"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-smile </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-smile-beam"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-smile-beam </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-smile-wink"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-smile-wink </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-smoking"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-smoking </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-smoking-ban"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-smoking-ban </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-snapchat"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-snapchat </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-snapchat-ghost"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-snapchat-ghost </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-snapchat-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-snapchat-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-snowflake"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-snowflake </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-solar-panel"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-solar-panel </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-sort"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-sort </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-sort-alpha-down"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-sort-alpha-down </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-sort-alpha-up"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-sort-alpha-up </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-sort-amount-down"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-sort-amount-down </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-sort-amount-up"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-sort-amount-up </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-sort-down"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-sort-down </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-sort-numeric-down"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-sort-numeric-down </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-sort-numeric-up"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-sort-numeric-up </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-sort-up"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-sort-up </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-soundcloud"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-soundcloud </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-spa"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-spa </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-space-shuttle"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-space-shuttle </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-speakap"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-speakap </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-spinner"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-spinner </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-splotch"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-splotch </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-spotify"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-spotify </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-spray-can"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-spray-can </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-square-full"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-square-full </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-squarespace"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-squarespace </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-stack-exchange"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-stack-exchange </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-stack-overflow"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-stack-overflow </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-stamp"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-stamp </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-star"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-star </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-star-half"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-star-half </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-star-half-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-star-half-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-star-of-life"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-star-of-life </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-staylinked"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-staylinked </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-steam"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-steam </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-steam-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-steam-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-steam-symbol"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-steam-symbol </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-step-backward"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-step-backward </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-step-forward"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-step-forward </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-stethoscope"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-stethoscope </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-sticker-mule"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-sticker-mule </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-sticky-note"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-sticky-note </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-stop"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-stop </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-stop-circle"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-stop-circle </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-stopwatch"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-stopwatch </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-store"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-store </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-store-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-store-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-strava"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-strava </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-stream"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-stream </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-street-view"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-street-view </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-strikethrough"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-strikethrough </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-stripe"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-stripe </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-stripe-s"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-stripe-s </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-stroopwafel"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-stroopwafel </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-studiovinari"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-studiovinari </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-stumbleupon"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-stumbleupon </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-stumbleupon-circle"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-stumbleupon-circle </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-subscript"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-subscript </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-subway"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-subway </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-suitcase"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-suitcase </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-suitcase-rolling"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-suitcase-rolling </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-sun"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-sun </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-superpowers"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-superpowers </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-superscript"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-superscript </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-supple"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-supple </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-surprise"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-surprise </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-swatchbook"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-swatchbook </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-swimmer"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-swimmer </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-swimming-pool"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-swimming-pool </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-sync"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-sync </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-sync-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-sync-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-syringe"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-syringe </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-table"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-table </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-table-tennis"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-table-tennis </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-tablet"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-tablet </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-tablet-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-tablet-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-tablets"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-tablets </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-tachometer-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-tachometer-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-tag"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-tag </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-tags"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-tags </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-tape"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-tape </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-tasks"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-tasks </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-taxi"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-taxi </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-teamspeak"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-teamspeak </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-teeth"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-teeth </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-teeth-open"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-teeth-open </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-telegram"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-telegram </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-telegram-plane"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-telegram-plane </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-tencent-weibo"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-tencent-weibo </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-terminal"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-terminal </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-text-height"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-text-height </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-text-width"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-text-width </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-th"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-th </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-th-large"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-th-large </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-th-list"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-th-list </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-theater-masks"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-theater-masks </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-themeco"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-themeco </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-themeisle"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-themeisle </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-thermometer"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-thermometer </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-thermometer-empty"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-thermometer-empty </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-thermometer-full"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-thermometer-full </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-thermometer-half"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-thermometer-half </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-thermometer-quarter"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-thermometer-quarter </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-thermometer-three-quarters"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-thermometer-three-quarters </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-thumbs-down"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-thumbs-down </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-thumbs-up"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-thumbs-up </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-thumbtack"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-thumbtack </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-ticket-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-ticket-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-times"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-times </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-times-circle"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-times-circle </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-tint"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-tint </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-tint-slash"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-tint-slash </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-tired"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-tired </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-toggle-off"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-toggle-off </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-toggle-on"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-toggle-on </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-toolbox"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-toolbox </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-tooth"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-tooth </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-trade-federation"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-trade-federation </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-trademark"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-trademark </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-traffic-light"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-traffic-light </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-train"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-train </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-transgender"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-transgender </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-transgender-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-transgender-alt </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-trash"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-trash </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-trash-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-trash-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-tree"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-tree </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-trello"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-trello </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-tripadvisor"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-tripadvisor </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-trophy"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-trophy </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-truck"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-truck </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-truck-loading"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-truck-loading </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-truck-monster"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-truck-monster </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-truck-moving"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-truck-moving </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-truck-pickup"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-truck-pickup </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-tshirt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-tshirt </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-tty"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-tty </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-tumblr"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-tumblr </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-tumblr-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-tumblr-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-tv"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-tv </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-twitch"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-twitch </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-twitter"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-twitter </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-twitter-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-twitter-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-typo3"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-typo3 </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-uber"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-uber </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-uikit"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-uikit </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-umbrella"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-umbrella </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-umbrella-beach"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-umbrella-beach </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-underline"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-underline </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-undo"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-undo </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-undo-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-undo-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-uniregistry"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-uniregistry </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-universal-access"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-universal-access </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-university"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-university </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-unlink"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-unlink </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-unlock"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-unlock </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-unlock-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-unlock-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-untappd"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-untappd </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-upload"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-upload </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-usb"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-usb </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-user"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-user </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-user-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-user-alt </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-user-alt-slash"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-user-alt-slash </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-user-astronaut"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-user-astronaut </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-user-check"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-user-check </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-user-circle"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-user-circle </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-user-clock"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-user-clock </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-user-cog"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-user-cog </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-user-edit"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-user-edit </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-user-friends"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-user-friends </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-user-graduate"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-user-graduate </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-user-lock"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-user-lock </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-user-md"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-user-md </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-user-minus"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-user-minus </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-user-ninja"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-user-ninja </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-user-plus"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-user-plus </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-user-secret"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-user-secret </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-user-shield"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-user-shield </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-user-slash"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-user-slash </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-user-tag"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-user-tag </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-user-tie"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-user-tie </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-user-times"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-user-times </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-users"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-users </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-users-cog"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-users-cog </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-ussunnah"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-ussunnah </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-utensil-spoon"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-utensil-spoon </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-utensils"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-utensils </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-vaadin"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-vaadin </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-vector-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-vector-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-venus"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-venus </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-venus-double"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-venus-double </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-venus-mars"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-venus-mars </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-viacoin"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-viacoin </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-viadeo"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-viadeo </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-viadeo-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-viadeo-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-vial"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-vial </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-vials"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-vials </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-viber"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-viber </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-video"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-video </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-video-slash"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-video-slash </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-vimeo"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-vimeo </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-vimeo-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-vimeo-square </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-vimeo-v"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-vimeo-v </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-vine"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-vine </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-vk"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-vk </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-vnv"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-vnv </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-volleyball-ball"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-volleyball-ball </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-volume-down"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-volume-down </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-volume-off"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-volume-off </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-volume-up"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-volume-up </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-vuejs"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-vuejs </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-walking"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-walking </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-wallet"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-wallet </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-warehouse"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-warehouse </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-weebly"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-weebly </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-weibo"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-weibo </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-weight"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-weight </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-weight-hanging"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-weight-hanging </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-weixin"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-weixin </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-whatsapp"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-whatsapp </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-whatsapp-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-whatsapp-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-wheelchair"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-wheelchair </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-whmcs"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-whmcs </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-wifi"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-wifi </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-wikipedia-w"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-wikipedia-w </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-window-close"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-window-close </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-window-maximize"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-window-maximize </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-window-minimize"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-window-minimize </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-window-restore"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-window-restore </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-windows"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-windows </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-wine-glass"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-wine-glass </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-wine-glass-alt"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-wine-glass-alt </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-wix"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-wix </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-wolf-pack-battalion"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-wolf-pack-battalion </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-won-sign"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-won-sign </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-wordpress"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-wordpress </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-wordpress-simple"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-wordpress-simple </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-wpbeginner"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-wpbeginner </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-wpexplorer"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-wpexplorer </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-wpforms"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-wpforms </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-wrench"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-wrench </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-x-ray"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-x-ray </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-xbox"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-xbox </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-xing"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-xing </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-xing-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-xing-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-y-combinator"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-y-combinator </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-yahoo"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-yahoo </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-yandex"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-yandex </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-yandex-international"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-yandex-international </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-yelp"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-yelp </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fa fa-yen-sign"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-yen-sign </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-yoast"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-yoast </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-youtube"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-youtube </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-youtube-square"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-youtube-square </div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="m-demo-icon">
													<div class="m-demo-icon__preview">
														<i class="fab fa-zhihu"></i>
													</div>
													<div class="m-demo-icon__class">
														fa-zhihu </div>
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

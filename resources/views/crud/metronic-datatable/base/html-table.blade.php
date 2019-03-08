<!DOCTYPE html>

<!--
Author: Nik Fadhil
Website: http://10.192.249.119/insights/
Contact: fadhil.kamil@tnb.com.my
-->

<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Metronic | HTML Table</title>
		<meta name="description" content="Datatable HTML table">
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
		<link href="assets/vendors/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="assets/vendors/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/jstree/dist/themes/default/style.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/chartist/dist/chartist.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/vendors/flaticon/css/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/vendors/metronic/css/styles.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles -->
		<link href="assets/demo/base/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="../../../assets/demo/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Global Theme Styles -->
		<link rel="shortcut icon" href="assets/demo/media/img/logo/favicon.ico" />
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
									<a href="../../../index" class="m-brand__logo-wrapper">
										<img alt="" src="../../../assets/demo/media/img/logo/logo_default_dark.png" />
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
												<li class="m-menu__item " aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-file"></i><span class="m-menu__link-text">Create New Post</span></a></li>
												<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-diagram"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap">
																<span class="m-menu__link-text">Generate Reports</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--success">2</span></span> </span></span></a></li>
												<li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i class="m-menu__link-icon flaticon-business"></i><span
														 class="m-menu__link-text">Manage Orders</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
													<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right"><span class="m-menu__arrow "></span>
														<ul class="m-menu__subnav">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Latest Orders</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Pending Orders</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Processed Orders</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Delivery Reports</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Payments</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Customers</span></a></li>
														</ul>
													</div>
												</li>
												<li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="#" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-chat-1"></i><span class="m-menu__link-text">Customer
															Feedbacks</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
													<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right"><span class="m-menu__arrow "></span>
														<ul class="m-menu__subnav">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Customer Feedbacks</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Supplier Feedbacks</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Reviewed Feedbacks</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Resolved Feedbacks</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Feedback Reports</span></a></li>
														</ul>
													</div>
												</li>
												<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">Register Member</span></a></li>
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
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-map"></i><span class="m-menu__link-text">Annual Reports</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-user"></i><span class="m-menu__link-text">HR Reports</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-clipboard"></i><span class="m-menu__link-text">IPO Reports</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-1"></i><span class="m-menu__link-text">Finance Margins</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-2"></i><span class="m-menu__link-text">Revenue Reports</span></a></li>
														</ul>
													</li>
													<li class="m-menu__item">
														<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Project Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
														<ul class="m-menu__inner">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Coca
																		Cola CRM</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Delta
																		Airlines Booking Site</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Malibu
																		Accounting</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Vineseed
																		Website Rewamp</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Zircon
																		Mobile App</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Mercury
																		CMS</span></a></li>
														</ul>
													</li>
													<li class="m-menu__item">
														<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">HR Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
														<ul class="m-menu__inner">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Staff
																		Directory</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Client
																		Directory</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Salary
																		Reports</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Staff
																		Payslips</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Corporate
																		Expenses</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Project
																		Expenses</span></a></li>
														</ul>
													</li>
													<li class="m-menu__item">
														<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Reporting Apps</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
														<ul class="m-menu__inner">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Report Adjusments</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Sources & Mediums</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Reporting Settings</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Conversions</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Report Flows</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><span class="m-menu__link-text">Audit & Logs</span></a></li>
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
												<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-business"></i><span class="m-menu__link-text">eCommerce</span></a></li>
												<li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../crud/datatable_v1" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-computer"></i><span
														 class="m-menu__link-text">Audience</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
													<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right"><span class="m-menu__arrow "></span>
														<ul class="m-menu__subnav">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">Active Users</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-interface-1"></i><span class="m-menu__link-text">User Explorer</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-lifebuoy"></i><span class="m-menu__link-text">Users Flows</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-1"></i><span class="m-menu__link-text">Market Segments</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic"></i><span class="m-menu__link-text">User Reports</span></a></li>
														</ul>
													</div>
												</li>
												<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-map"></i><span class="m-menu__link-text">Marketing</span></a></li>
												<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-2"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap">
																<span class="m-menu__link-text">Campaigns</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--success">3</span></span> </span></span></a></li>
												<li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i class="m-menu__link-icon flaticon-infinity"></i><span
														 class="m-menu__link-text">Cloud Manager</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
													<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span class="m-menu__arrow "></span>
														<ul class="m-menu__subnav">
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-add"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap">
																			<span class="m-menu__link-text">File Upload</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--danger">3</span></span> </span></span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-signs-1"></i><span class="m-menu__link-text">File Attributes</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-folder"></i><span class="m-menu__link-text">Folders</span></a></li>
															<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="../../../header/actions" class="m-menu__link "><i class="m-menu__link-icon flaticon-cogwheel-2"></i><span class="m-menu__link-text">System Settings</span></a></li>
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
													<div class="m-dropdown__header m--align-center" style="background: url(../../../assets/app/media/img/misc/notification_bg.jpg); background-size: cover;">
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
													<div class="m-dropdown__header m--align-center" style="background: url(../../../assets/app/media/img/misc/quick_actions_bg.jpg); background-size: cover;">
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
													<img class="m-topbar__language-selected-img" src="../../../assets/app/media/img/flags/020-flag.svg">
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center" style="background: url(../../../assets/app/media/img/misc/quick_actions_bg.jpg); background-size: cover;">
														<span class="m-dropdown__header-subtitle">Select your language</span>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav m-nav--skin-light">
																<li class="m-nav__item m-nav__item--active">
																	<a href="#" class="m-nav__link m-nav__link--active">
																		<span class="m-nav__link-icon"><img class="m-topbar__language-img" src="../../../assets/app/media/img/flags/020-flag.svg"></span>
																		<span class="m-nav__link-title m-topbar__language-text m-nav__link-text">USA</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="#" class="m-nav__link">
																		<span class="m-nav__link-icon"><img class="m-topbar__language-img" src="../../../assets/app/media/img/flags/015-china.svg"></span>
																		<span class="m-nav__link-title m-topbar__language-text m-nav__link-text">China</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="#" class="m-nav__link">
																		<span class="m-nav__link-icon"><img class="m-topbar__language-img" src="../../../assets/app/media/img/flags/016-spain.svg"></span>
																		<span class="m-nav__link-title m-topbar__language-text m-nav__link-text">Spain</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="#" class="m-nav__link">
																		<span class="m-nav__link-icon"><img class="m-topbar__language-img" src="../../../assets/app/media/img/flags/014-japan.svg"></span>
																		<span class="m-nav__link-title m-topbar__language-text m-nav__link-text">Japan</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="#" class="m-nav__link">
																		<span class="m-nav__link-icon"><img class="m-topbar__language-img" src="../../../assets/app/media/img/flags/017-germany.svg"></span>
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
													<img src="../../../assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt="" />
												</span>
												<span class="m-topbar__username m--hide">Nick</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center" style="background: url(../../../assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
														<div class="m-card-user m-card-user--skin-dark">
															<div class="m-card-user__pic">
																<img src="../../../assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt="" />

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
																	<a href="../../../header/profile" class="m-nav__link">
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
																	<a href="../../../header/profile" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-share"></i>
																		<span class="m-nav__link-text">Activity</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="../../../header/profile" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-chat-1"></i>
																		<span class="m-nav__link-text">Messages</span>
																	</a>
																</li>
																<li class="m-nav__separator m-nav__separator--fit">
																</li>
																<li class="m-nav__item">
																	<a href="../../../header/profile" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-info"></i>
																		<span class="m-nav__link-text">FAQ</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="../../../header/profile" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																		<span class="m-nav__link-text">Support</span>
																	</a>
																</li>
																<li class="m-nav__separator m-nav__separator--fit">
																</li>
																<li class="m-nav__item">
																	<a href="../../../snippets/pages/user/login-1" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Logout</a>
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
							<li class="m-menu__item " aria-haspopup="true"><a href="../../../index" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Dashboard</span>
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
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/base/state" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">State Colors</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/base/typography" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Typography</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/base/stack" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Stack</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/base/tables" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Tables</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/base/progress" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Progress</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/base/modal" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Modal</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/base/alerts" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Alerts</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/base/popover" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Popover</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/base/tooltip" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Tooltip</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/base/blockui" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Block UI</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/base/spinners" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Spinners</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/base/scrollable" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Scrollable</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/base/dropdown" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Dropdown</span></a></li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Tabs</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/base/tabs/bootstrap" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Bootstrap
																Tabs</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/base/tabs/line" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Line Tabs</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/base/accordions" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Accordions</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/base/navs" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Navs</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/base/lists" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Lists</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/base/treeview" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Tree View</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/base/bootstrap-notify" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Bootstrap
													Notify</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/base/toastr" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Toastr</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/base/sweetalert2" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">SweetAlert2</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-share"></i><span class="m-menu__link-text">Icons</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/icons/flaticon" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Flaticon</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/icons/fontawesome5" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Fontawesome
													5</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/icons/lineawesome" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Lineawesome</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/icons/socicons" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Socicons</span></a></li>
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
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/buttons/base/default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Default
																Style</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/buttons/base/square" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Square
																Style</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/buttons/base/pill" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pill
																Style</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/buttons/base/air" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Air Style</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/buttons/group" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Button Group</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/buttons/dropdown" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Button
													Dropdown</span></a></li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Button Icon</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/buttons/icon/lineawesome" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Lineawesome
																Icons</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/buttons/icon/fontawesome" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Fontawesome
																Icons</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/buttons/icon/flaticon" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Flaticon
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
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/portlets/base" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Base Portlets</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/portlets/advanced" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Advanced
													Portlets</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/portlets/creative" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Creative
													Portlets</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/portlets/tabbed" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Tabbed
													Portlets</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/portlets/draggable" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Draggable
													Portlets</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/portlets/tools" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Portlet Tools</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/portlets/sticky-head" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Sticky
													Head</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-interface-6"></i><span class="m-menu__link-text">Timeline</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Timeline</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/timeline/timeline-1" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Timeline 1</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/timeline/timeline-2" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Timeline 2</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-network"></i><span class="m-menu__link-text">Widgets</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Widgets</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/widgets/general" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">General
													Widgets</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/widgets/chart" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Chart Widgets</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-calendar"></i><span class="m-menu__link-text">Calendar</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Calendar</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/calendar/basic" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Basic Calendar</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/calendar/list-view" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">List Views</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/calendar/google" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Google
													Calendar</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/calendar/external-events" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">External
													Events</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/calendar/background-events" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Background
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
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/charts/amcharts/charts" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">amCharts
																Charts</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/charts/amcharts/stock-charts" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">amCharts
																Stock Charts</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/charts/amcharts/maps" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">amCharts
																Maps</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/charts/flotcharts" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Flot Charts</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/charts/google-charts" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Google
													Charts</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/charts/morris-charts" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Morris
													Charts</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-placeholder-1"></i><span class="m-menu__link-text">Maps</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Maps</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/maps/google-maps" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Google Maps</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/maps/jqvmap" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">JQVMap</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-signs-2"></i><span class="m-menu__link-text">Utils</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Utils</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/utils/session-timeout" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Session
													Timeout</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../components/utils/idle-timer" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Idle Timer</span></a></li>
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
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/controls/base" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Base Inputs</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/controls/checkbox-radio" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Checkbox
																& Radio</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/controls/input-group" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Input
																Groups</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/controls/switch" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Switch</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/controls/option" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Mega
																Options</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Form Widgets</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/widgets/bootstrap-datepicker" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Datepicker</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/widgets/bootstrap-datetimepicker" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Datetimepicker</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/widgets/bootstrap-timepicker" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Timepicker</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/widgets/bootstrap-daterangepicker" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Daterangepicker</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/widgets/bootstrap-touchspin" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Touchspin</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/widgets/bootstrap-maxlength" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Maxlength</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/widgets/bootstrap-switch" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Switch</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/widgets/bootstrap-multipleselectsplitter" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Multiple
																Select Splitter</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/widgets/bootstrap-select" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Bootstrap
																Select</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/widgets/select2" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Select2</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/widgets/typeahead" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Typeahead</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/widgets/nouislider" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">noUiSlider</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/widgets/form-repeater" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form
																Repeater</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/widgets/ion-range-slider" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Ion
																Range Slider</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/widgets/input-mask" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Input
																Masks</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/widgets/summernote" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Summernote
																WYSIWYG</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/widgets/bootstrap-markdown" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Markdown
																Editor</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/widgets/autosize" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Autosize</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/widgets/clipboard" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Clipboard</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/widgets/dropzone" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Dropzone</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/widgets/recaptcha" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Google
																reCaptcha</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Form Layouts</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/layouts/default-forms" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Default
																Forms</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/layouts/multi-column-forms" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Multi
																Column Forms</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/layouts/action-bars" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Basic
																Action Bars</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/layouts/sticky-action-bar" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Sticky
																Action Bar</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Form Validation</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/validation/states" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Validation
																States</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/validation/form-controls" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form
																Controls</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/forms/validation/form-widgets" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form
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
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/wizard/wizard-1" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Wizard 1</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/wizard/wizard-2" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Wizard 2</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/wizard/wizard-3" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Wizard 3</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/wizard/wizard-4" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Wizard 4</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/wizard/wizard-5" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Form Wizard 5</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu m-menu__item--open m-menu__item--expanded" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-tabs"></i><span
									 class="m-menu__link-text">Metronic Datatable</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Metronic Datatable</span></span></li>
										<li class="m-menu__item  m-menu__item--submenu m-menu__item--open m-menu__item--expanded" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Base</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/metronic-datatable/base/data-local" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Local
																Data</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/metronic-datatable/base/data-json" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">JSON
																Data</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/metronic-datatable/base/data-ajax" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Ajax
																Data</span></a></li>
													<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="../../../crud/metronic-datatable/base/html-table" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
															 class="m-menu__link-text">HTML Table</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/metronic-datatable/base/record-selection" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Record
																Selection</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/metronic-datatable/base/local-sort" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Local
																Sort</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/metronic-datatable/base/row-details" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Row
																Details</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/metronic-datatable/base/column-rendering" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Column
																Rendering</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/metronic-datatable/base/column-width" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Column
																Width</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/metronic-datatable/base/responsive-columns" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Responsive
																Columns</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/metronic-datatable/base/translation" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Translation</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Scrolling</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/metronic-datatable/scrolling/vertical" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Vertical
																Scrolling</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/metronic-datatable/scrolling/horizontal" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Horizontal
																Scrolling</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/metronic-datatable/scrolling/both" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Both
																Scrolling</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Locked Columns</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/metronic-datatable/locked/left" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Left
																Locked Columns</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/metronic-datatable/locked/right" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Right
																Locked Columns</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/metronic-datatable/locked/both" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Both
																Locked Columns</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/metronic-datatable/locked/html-table" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">HTML
																Table</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Child Datatables</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/metronic-datatable/child/data-local" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Local
																Data</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/metronic-datatable/child/data-ajax" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Remote
																Data</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">API</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/metronic-datatable/api/methods" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">API
																Methods</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/metronic-datatable/api/events" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Events</span></a></li>
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
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/datatables/basic/basic" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Basic
																Tables</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/datatables/basic/scrollable" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Scrollable
																Tables</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/datatables/basic/headers" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Complex
																Headers</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/datatables/basic/paginations" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pagination
																Options</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Advanced</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/datatables/advanced/column-rendering" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Column
																Rendering</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/datatables/advanced/multiple-controls" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Multiple
																Controls</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/datatables/advanced/column-visibility" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Column
																Visibility</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/datatables/advanced/row-callback" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Row
																Callback</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/datatables/advanced/row-grouping" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Row
																Grouping</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/datatables/advanced/footer-callback" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Footer
																Callback</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Data sources</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/datatables/data-sources/html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">HTML</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/datatables/data-sources/javascript" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Javascript</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/datatables/data-sources/ajax-client-side" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Ajax
																Client-side</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/datatables/data-sources/ajax-server-side" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Ajax
																Server-side</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Search Options</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/datatables/search-options/column-search" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Column
																Search</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/datatables/search-options/advanced-search" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Advanced
																Search</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Extensions</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/datatables/extensions/buttons" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Buttons</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/datatables/extensions/colreorder" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">ColReorder</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/datatables/extensions/keytable" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">KeyTable</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/datatables/extensions/responsive" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Responsive</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/datatables/extensions/rowgroup" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">RowGroup</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/datatables/extensions/rowreorder" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">RowReorder</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/datatables/extensions/scroller" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Scroller</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a href="../../../crud/datatables/extensions/select" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Select</span></a></li>
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
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../snippets/general/pricing-tables/pricing-table-1" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pricing
													Tables v1</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../snippets/general/pricing-tables/pricing-table-2" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pricing
													Tables v2</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../snippets/general/pricing-tables/pricing-table-3" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pricing
													Tables v3</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../snippets/general/pricing-tables/pricing-table-4" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pricing
													Tables v4</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-piggy-bank"></i><span class="m-menu__link-text">Invoices</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Invoices</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../snippets/invoices/invoice-1" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Invoice v1</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../snippets/invoices/invoice-2" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Invoice v2</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-exclamation"></i><span class="m-menu__link-text">FAQS</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">FAQS</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="../../../snippets/faq/faq-1" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">FAQ v1</span></a></li>
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
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="../../../snippets/pages/user/login-1" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Login
																- 1</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="../../../snippets/pages/user/login-2" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Login
																- 2</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="../../../snippets/pages/user/login-3" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Login
																- 3</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="../../../snippets/pages/user/login-4" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Login
																- 4</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="../../../snippets/pages/user/login-5" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Login
																- 5</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="../../../snippets/pages/user/login-6" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Login
																- 6</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Error Pages</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="../../../snippets/pages/errors/error-1" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Error
																1</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="../../../snippets/pages/errors/error-2" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Error
																2</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="../../../snippets/pages/errors/error-3" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Error
																3</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="../../../snippets/pages/errors/error-4" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Error
																4</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="../../../snippets/pages/errors/error-5" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Error
																5</span></a></li>
													<li class="m-menu__item " aria-haspopup="true"><a target="_blank" href="../../../snippets/pages/errors/error-6" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Error
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
								<h3 class="m-subheader__title m-subheader__title--separator">HTML Table</h3>
								<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
									<li class="m-nav__item m-nav__item--home">
										<a href="#" class="m-nav__link m-nav__link--icon">
											<i class="m-nav__link-icon la la-home"></i>
										</a>
									</li>
									<li class="m-nav__separator">-</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">Metronic Datatable</span>
										</a>
									</li>
									<li class="m-nav__separator">-</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">Base</span>
										</a>
									</li>
									<li class="m-nav__separator">-</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">HTML Table</span>
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
						<div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30" role="alert">
							<div class="m-alert__icon">
								<i class="flaticon-exclamation m--font-brand"></i>
							</div>
							<div class="m-alert__text">
								The Metronic Datatable component supports initialization from HTML table. It also defines the schema model of the data source. In addition to the visualization, the Datatable provides built-in support for operations over data such as
								sorting, filtering and paging performed in user browser(frontend).
							</div>
						</div>
						<div class="m-portlet m-portlet--mobile">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<h3 class="m-portlet__head-text">
											Datatable initilized from HTML table
										</h3>
									</div>
								</div>
								<div class="m-portlet__head-tools">
									<ul class="m-portlet__nav">
										<li class="m-portlet__nav-item">
											<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
												<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
													<i class="la la-ellipsis-h m--font-brand"></i>
												</a>
												<div class="m-dropdown__wrapper">
													<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
													<div class="m-dropdown__inner">
														<div class="m-dropdown__body">
															<div class="m-dropdown__content">
																<ul class="m-nav">
																	<li class="m-nav__section m-nav__section--first">
																		<span class="m-nav__section-text">Quick Actions</span>
																	</li>
																	<li class="m-nav__item">
																		<a href="" class="m-nav__link">
																			<i class="m-nav__link-icon flaticon-share"></i>
																			<span class="m-nav__link-text">Create Post</span>
																		</a>
																	</li>
																	<li class="m-nav__item">
																		<a href="" class="m-nav__link">
																			<i class="m-nav__link-icon flaticon-chat-1"></i>
																			<span class="m-nav__link-text">Send Messages</span>
																		</a>
																	</li>
																	<li class="m-nav__item">
																		<a href="" class="m-nav__link">
																			<i class="m-nav__link-icon flaticon-multimedia-2"></i>
																			<span class="m-nav__link-text">Upload File</span>
																		</a>
																	</li>
																	<li class="m-nav__section">
																		<span class="m-nav__section-text">Useful Links</span>
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
																	<li class="m-nav__separator m-nav__separator--fit m--hide">
																	</li>
																	<li class="m-nav__item m--hide">
																		<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="m-portlet__body">

								<!--begin: Search Form -->
								<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
									<div class="row align-items-center">
										<div class="col-xl-8 order-2 order-xl-1">
											<div class="form-group m-form__group row align-items-center">
												<div class="col-md-4">
													<div class="m-form__group m-form__group--inline">
														<div class="m-form__label">
															<label>Status:</label>
														</div>
														<div class="m-form__control">
															<select class="form-control m-bootstrap-select" id="m_form_status">
																<option value="">All</option>
																<option value="1">Pending</option>
																<option value="2">Delivered</option>
																<option value="3">Canceled</option>
															</select>
														</div>
													</div>
													<div class="d-md-none m--margin-bottom-10"></div>
												</div>
												<div class="col-md-4">
													<div class="m-form__group m-form__group--inline">
														<div class="m-form__label">
															<label class="m-label m-label--single">Type:</label>
														</div>
														<div class="m-form__control">
															<select class="form-control m-bootstrap-select" id="m_form_type">
																<option value="">All</option>
																<option value="1">Online</option>
																<option value="2">Retail</option>
																<option value="3">Direct</option>
															</select>
														</div>
													</div>
													<div class="d-md-none m--margin-bottom-10"></div>
												</div>
												<div class="col-md-4">
													<div class="m-input-icon m-input-icon--left">
														<input type="text" class="form-control m-input" placeholder="Search..." id="generalSearch">
														<span class="m-input-icon__icon m-input-icon__icon--left">
															<span><i class="la la-search"></i></span>
														</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 order-1 order-xl-2 m--align-right">
											<a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
												<span>
													<i class="la la-cart-plus"></i>
													<span>New Order</span>
												</span>
											</a>
											<div class="m-separator m-separator--dashed d-xl-none"></div>
										</div>
									</div>
								</div>

								<!--end: Search Form -->

								<!--begin: Datatable -->
								<table class="m-datatable" id="html_table" width="100%">
									<thead>
										<tr>
											<th title="Field #1" data-field="OrderID">Order ID</th>
											<th title="Field #2" data-field="Owner">Owner</th>
											<th title="Field #3" data-field="Contact">Contact</th>
											<th title="Field #4" data-field="CarMake">Car Make</th>
											<th title="Field #5" data-field="CarModel">Car Model</th>
											<th title="Field #6" data-field="Color">Color</th>
											<th title="Field #7" data-field="DepositPaid">Deposit Paid</th>
											<th title="Field #8" data-field="OrderDate">Order Date</th>
											<th title="Field #9" data-field="Status">Status</th>
											<th title="Field #10" data-field="Type">Type</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>57520-0405</td>
											<td>Sunny Garton</td>
											<td>(288) 1417941</td>
											<td>GMC</td>
											<td>Savana 2500</td>
											<td>Yellow</td>
											<td>$99799.94</td>
											<td>2016-03-23</td>
											<td>5</td>
											<td>2</td>
										</tr>
										<tr>
											<td>43269-858</td>
											<td>Sandor Engley</td>
											<td>(411) 8011040</td>
											<td>Chevrolet</td>
											<td>Avalanche</td>
											<td>Fuscia</td>
											<td>$88746.22</td>
											<td>2017-06-04</td>
											<td>4</td>
											<td>3</td>
										</tr>
										<tr>
											<td>68084-462</td>
											<td>Morgan Cradey</td>
											<td>(818) 9105042</td>
											<td>Dodge</td>
											<td>Dakota</td>
											<td>Maroon</td>
											<td>$57944.55</td>
											<td>2017-08-03</td>
											<td>3</td>
											<td>2</td>
										</tr>
										<tr>
											<td>44356-0001</td>
											<td>Tedd Alton</td>
											<td>(906) 2530404</td>
											<td>Pontiac</td>
											<td>Grand Prix</td>
											<td>Khaki</td>
											<td>$45530.20</td>
											<td>2017-10-10</td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>55550-031</td>
											<td>Barrie Bedow</td>
											<td>(658) 1061197</td>
											<td>Ford</td>
											<td>Focus</td>
											<td>Goldenrod</td>
											<td>$87192.06</td>
											<td>2016-03-08</td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>63304-963</td>
											<td>Rhoda Marunchak</td>
											<td>(677) 6736776</td>
											<td>Mazda</td>
											<td>MX-3</td>
											<td>Maroon</td>
											<td>$41307.59</td>
											<td>2017-09-14</td>
											<td>6</td>
											<td>3</td>
										</tr>
										<tr>
											<td>52685-372</td>
											<td>Andie Mitro</td>
											<td>(700) 3368557</td>
											<td>Volkswagen</td>
											<td>rio</td>
											<td>Green</td>
											<td>$85507.97</td>
											<td>2016-09-15</td>
											<td>6</td>
											<td>1</td>
										</tr>
										<tr>
											<td>36987-2160</td>
											<td>Amalita Bimrose</td>
											<td>(904) 5507463</td>
											<td>BMW</td>
											<td>Z4</td>
											<td>Fuscia</td>
											<td>$37483.51</td>
											<td>2016-09-15</td>
											<td>3</td>
											<td>2</td>
										</tr>
										<tr>
											<td>24451-133</td>
											<td>Karie Worham</td>
											<td>(462) 5326515</td>
											<td>Ford</td>
											<td>F-Series</td>
											<td>Pink</td>
											<td>$85033.65</td>
											<td>2016-07-09</td>
											<td>5</td>
											<td>1</td>
										</tr>
										<tr>
											<td>35000-861</td>
											<td>Faythe Hallede</td>
											<td>(933) 6821247</td>
											<td>Volkswagen</td>
											<td>Passat</td>
											<td>Indigo</td>
											<td>$42290.64</td>
											<td>2017-12-30</td>
											<td>2</td>
											<td>3</td>
										</tr>
										<tr>
											<td>53808-0542</td>
											<td>Ann McEneny</td>
											<td>(376) 7411921</td>
											<td>Mitsubishi</td>
											<td>Truck</td>
											<td>Goldenrod</td>
											<td>$86250.58</td>
											<td>2016-08-25</td>
											<td>3</td>
											<td>1</td>
										</tr>
										<tr>
											<td>57520-0003</td>
											<td>Madlin Dwyer</td>
											<td>(766) 5636320</td>
											<td>Cadillac</td>
											<td>SRX</td>
											<td>Aquamarine</td>
											<td>$11677.10</td>
											<td>2016-06-12</td>
											<td>6</td>
											<td>2</td>
										</tr>
										<tr>
											<td>0113-0133</td>
											<td>Leigha Collie</td>
											<td>(319) 3956979</td>
											<td>Buick</td>
											<td>LaCrosse</td>
											<td>Puce</td>
											<td>$94831.05</td>
											<td>2017-04-21</td>
											<td>2</td>
											<td>3</td>
										</tr>
										<tr>
											<td>51346-034</td>
											<td>Katharyn Chestnutt</td>
											<td>(657) 6308909</td>
											<td>Honda</td>
											<td>CR-V</td>
											<td>Maroon</td>
											<td>$25070.74</td>
											<td>2016-07-11</td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>60681-3007</td>
											<td>Arvin Seeks</td>
											<td>(552) 2929300</td>
											<td>Honda</td>
											<td>Odyssey</td>
											<td>Pink</td>
											<td>$41313.17</td>
											<td>2016-04-01</td>
											<td>2</td>
											<td>3</td>
										</tr>
										<tr>
											<td>0498-0303</td>
											<td>Ase Nisot</td>
											<td>(403) 4296284</td>
											<td>Infiniti</td>
											<td>G</td>
											<td>Blue</td>
											<td>$90017.64</td>
											<td>2017-11-16</td>
											<td>4</td>
											<td>3</td>
										</tr>
										<tr>
											<td>53808-0409</td>
											<td>Garrick Dell Casa</td>
											<td>(343) 8426891</td>
											<td>Mazda</td>
											<td>Miata MX-5</td>
											<td>Aquamarine</td>
											<td>$78992.14</td>
											<td>2016-12-25</td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>63533-855</td>
											<td>Verna Baulcombe</td>
											<td>(796) 5887012</td>
											<td>Chevrolet</td>
											<td>Sportvan G30</td>
											<td>Fuscia</td>
											<td>$37750.91</td>
											<td>2017-05-28</td>
											<td>1</td>
											<td>3</td>
										</tr>
										<tr>
											<td>67905-0001</td>
											<td>Prisca Caplin</td>
											<td>(830) 6693996</td>
											<td>Suzuki</td>
											<td>XL-7</td>
											<td>Red</td>
											<td>$97040.79</td>
											<td>2017-08-25</td>
											<td>1</td>
											<td>2</td>
										</tr>
										<tr>
											<td>60793-702</td>
											<td>Ingrid Shearston</td>
											<td>(292) 8303449</td>
											<td>Mazda</td>
											<td>Miata MX-5</td>
											<td>Indigo</td>
											<td>$12149.48</td>
											<td>2017-07-13</td>
											<td>1</td>
											<td>3</td>
										</tr>
										<tr>
											<td>49726-015</td>
											<td>Charyl Whatham</td>
											<td>(986) 6439973</td>
											<td>Infiniti</td>
											<td>QX</td>
											<td>Teal</td>
											<td>$36981.71</td>
											<td>2016-03-09</td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>62037-571</td>
											<td>Binni Dahlgren</td>
											<td>(531) 5332825</td>
											<td>Subaru</td>
											<td>Outback</td>
											<td>Purple</td>
											<td>$21571.25</td>
											<td>2017-05-12</td>
											<td>6</td>
											<td>1</td>
										</tr>
										<tr>
											<td>53041-577</td>
											<td>Penelope Blodgett</td>
											<td>(804) 5739334</td>
											<td>Audi</td>
											<td>A4</td>
											<td>Puce</td>
											<td>$29247.95</td>
											<td>2017-12-09</td>
											<td>5</td>
											<td>3</td>
										</tr>
										<tr>
											<td>21695-358</td>
											<td>Rodger Dreschler</td>
											<td>(216) 6854372</td>
											<td>Toyota</td>
											<td>Tercel</td>
											<td>Indigo</td>
											<td>$46646.70</td>
											<td>2017-11-17</td>
											<td>6</td>
											<td>1</td>
										</tr>
										<tr>
											<td>11673-334</td>
											<td>Hyman Zupo</td>
											<td>(567) 5305184</td>
											<td>Chrysler</td>
											<td>300M</td>
											<td>Khaki</td>
											<td>$29053.82</td>
											<td>2017-05-23</td>
											<td>5</td>
											<td>2</td>
										</tr>
										<tr>
											<td>55154-9552</td>
											<td>Layney Godfery</td>
											<td>(996) 8983350</td>
											<td>Chevrolet</td>
											<td>G-Series G20</td>
											<td>Pink</td>
											<td>$26531.06</td>
											<td>2016-07-28</td>
											<td>6</td>
											<td>3</td>
										</tr>
										<tr>
											<td>0043-0483</td>
											<td>Alaine Demeter</td>
											<td>(515) 8238975</td>
											<td>Chevrolet</td>
											<td>Camaro</td>
											<td>Khaki</td>
											<td>$27047.36</td>
											<td>2016-05-29</td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>30142-580</td>
											<td>Barnard Widmore</td>
											<td>(879) 7495854</td>
											<td>Buick</td>
											<td>Century</td>
											<td>Yellow</td>
											<td>$96899.19</td>
											<td>2017-01-15</td>
											<td>2</td>
											<td>2</td>
										</tr>
										<tr>
											<td>33992-0367</td>
											<td>Prentice Attoc</td>
											<td>(351) 4876964</td>
											<td>Dodge</td>
											<td>Ram 1500</td>
											<td>Mauv</td>
											<td>$80621.00</td>
											<td>2017-01-24</td>
											<td>3</td>
											<td>3</td>
										</tr>
										<tr>
											<td>59676-303</td>
											<td>Clemente Strotone</td>
											<td>(478) 5830844</td>
											<td>Volvo</td>
											<td>V40</td>
											<td>Blue</td>
											<td>$59405.83</td>
											<td>2017-10-07</td>
											<td>5</td>
											<td>1</td>
										</tr>
										<tr>
											<td>50436-8900</td>
											<td>Flossie McNickle</td>
											<td>(355) 8351331</td>
											<td>Cadillac</td>
											<td>STS</td>
											<td>Turquoise</td>
											<td>$34319.43</td>
											<td>2016-10-09</td>
											<td>3</td>
											<td>3</td>
										</tr>
										<tr>
											<td>76485-1008</td>
											<td>Ransell Gorman</td>
											<td>(683) 9308375</td>
											<td>Suzuki</td>
											<td>Daewoo Magnus</td>
											<td>Pink</td>
											<td>$65930.71</td>
											<td>2016-08-14</td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>53748-0001</td>
											<td>Ashlin Serrels</td>
											<td>(148) 7615615</td>
											<td>Dodge</td>
											<td>Ram Van B350</td>
											<td>Red</td>
											<td>$55164.54</td>
											<td>2016-01-01</td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>54569-2131</td>
											<td>Maddie Grzesiewicz</td>
											<td>(210) 7160855</td>
											<td>Suzuki</td>
											<td>Daewoo Lacetti</td>
											<td>Turquoise</td>
											<td>$55608.85</td>
											<td>2017-03-14</td>
											<td>5</td>
											<td>2</td>
										</tr>
										<tr>
											<td>36987-2929</td>
											<td>Chloe Rive</td>
											<td>(880) 8421287</td>
											<td>Volvo</td>
											<td>S40</td>
											<td>Green</td>
											<td>$86818.31</td>
											<td>2016-09-07</td>
											<td>5</td>
											<td>3</td>
										</tr>
										<tr>
											<td>48878-3130</td>
											<td>Corrina Alejandro</td>
											<td>(111) 7600534</td>
											<td>Lexus</td>
											<td>IS</td>
											<td>Mauv</td>
											<td>$78084.99</td>
											<td>2017-04-01</td>
											<td>5</td>
											<td>3</td>
										</tr>
										<tr>
											<td>66116-255</td>
											<td>Marlie Headland</td>
											<td>(198) 7739502</td>
											<td>Ford</td>
											<td>Club Wagon</td>
											<td>Aquamarine</td>
											<td>$36877.30</td>
											<td>2017-03-10</td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>11822-0580</td>
											<td>Luigi Hakonsen</td>
											<td>(654) 3244640</td>
											<td>Ferrari</td>
											<td>F430</td>
											<td>Aquamarine</td>
											<td>$67046.17</td>
											<td>2017-03-20</td>
											<td>2</td>
											<td>3</td>
										</tr>
										<tr>
											<td>21695-018</td>
											<td>Gerrilee Peever</td>
											<td>(606) 4122139</td>
											<td>Ford</td>
											<td>F250</td>
											<td>Puce</td>
											<td>$81644.51</td>
											<td>2017-06-09</td>
											<td>6</td>
											<td>3</td>
										</tr>
										<tr>
											<td>51655-535</td>
											<td>Gare Saltman</td>
											<td>(850) 6274752</td>
											<td>BMW</td>
											<td>Z4</td>
											<td>Maroon</td>
											<td>$83053.46</td>
											<td>2017-01-03</td>
											<td>6</td>
											<td>2</td>
										</tr>
										<tr>
											<td>65841-615</td>
											<td>Jenine Needham</td>
											<td>(214) 4760284</td>
											<td>Lexus</td>
											<td>ES</td>
											<td>Maroon</td>
											<td>$34229.35</td>
											<td>2017-04-24</td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>55316-001</td>
											<td>Dorie Northam</td>
											<td>(826) 1678506</td>
											<td>Ford</td>
											<td>E-Series</td>
											<td>Orange</td>
											<td>$90136.54</td>
											<td>2016-02-11</td>
											<td>2</td>
											<td>3</td>
										</tr>
										<tr>
											<td>0363-0292</td>
											<td>Shandra Ellins</td>
											<td>(852) 1196158</td>
											<td>Peugeot</td>
											<td>207</td>
											<td>Khaki</td>
											<td>$35832.68</td>
											<td>2017-03-11</td>
											<td>5</td>
											<td>1</td>
										</tr>
										<tr>
											<td>0069-0336</td>
											<td>Kissee Hanniger</td>
											<td>(426) 2854500</td>
											<td>Ford</td>
											<td>F-Series</td>
											<td>Fuscia</td>
											<td>$79807.16</td>
											<td>2016-11-08</td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>60505-3114</td>
											<td>Rustin Hadlington</td>
											<td>(104) 4263614</td>
											<td>Chevrolet</td>
											<td>Avalanche</td>
											<td>Purple</td>
											<td>$99608.14</td>
											<td>2017-08-10</td>
											<td>1</td>
											<td>3</td>
										</tr>
										<tr>
											<td>10157-9848</td>
											<td>Judon Goshawk</td>
											<td>(661) 4327077</td>
											<td>Chevrolet</td>
											<td>Suburban 1500</td>
											<td>Green</td>
											<td>$66690.72</td>
											<td>2017-03-27</td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>21130-255</td>
											<td>Tatiana Pighills</td>
											<td>(112) 1506817</td>
											<td>Saab</td>
											<td>9-7X</td>
											<td>Green</td>
											<td>$96123.78</td>
											<td>2016-05-29</td>
											<td>1</td>
											<td>2</td>
										</tr>
										<tr>
											<td>0179-0048</td>
											<td>Putnam Ledger</td>
											<td>(321) 4078941</td>
											<td>Hyundai</td>
											<td>Sonata</td>
											<td>Mauv</td>
											<td>$72072.03</td>
											<td>2017-03-16</td>
											<td>5</td>
											<td>3</td>
										</tr>
										<tr>
											<td>51079-585</td>
											<td>Matelda Paoli</td>
											<td>(170) 3548706</td>
											<td>Cadillac</td>
											<td>Escalade</td>
											<td>Aquamarine</td>
											<td>$47504.67</td>
											<td>2017-11-09</td>
											<td>1</td>
											<td>3</td>
										</tr>
										<tr>
											<td>52605-114</td>
											<td>Emelda Bromley</td>
											<td>(908) 1111260</td>
											<td>Cadillac</td>
											<td>Eldorado</td>
											<td>Violet</td>
											<td>$76298.53</td>
											<td>2017-09-07</td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>63739-440</td>
											<td>Osbourne Lovelady</td>
											<td>(740) 1751528</td>
											<td>Mercury</td>
											<td>Montego</td>
											<td>Aquamarine</td>
											<td>$53923.20</td>
											<td>2016-04-14</td>
											<td>6</td>
											<td>3</td>
										</tr>
										<tr>
											<td>49738-294</td>
											<td>Robena Glavin</td>
											<td>(810) 7765558</td>
											<td>Mercury</td>
											<td>Sable</td>
											<td>Yellow</td>
											<td>$62232.17</td>
											<td>2017-07-14</td>
											<td>6</td>
											<td>1</td>
										</tr>
										<tr>
											<td>42361-012</td>
											<td>Camilla Baulk</td>
											<td>(779) 6981767</td>
											<td>Chevrolet</td>
											<td>Corvette</td>
											<td>Indigo</td>
											<td>$54690.91</td>
											<td>2017-01-08</td>
											<td>3</td>
											<td>2</td>
										</tr>
										<tr>
											<td>49348-262</td>
											<td>Christye Vaughton</td>
											<td>(438) 5193522</td>
											<td>Toyota</td>
											<td>Prius</td>
											<td>Purple</td>
											<td>$98305.65</td>
											<td>2017-07-24</td>
											<td>4</td>
											<td>3</td>
										</tr>
										<tr>
											<td>36987-1811</td>
											<td>Clevie Leigh</td>
											<td>(396) 8634896</td>
											<td>Dodge</td>
											<td>Durango</td>
											<td>Khaki</td>
											<td>$60964.44</td>
											<td>2017-05-07</td>
											<td>6</td>
											<td>3</td>
										</tr>
										<tr>
											<td>64117-303</td>
											<td>Whitney Ponsford</td>
											<td>(673) 1130882</td>
											<td>Ford</td>
											<td>Aerostar</td>
											<td>Pink</td>
											<td>$85280.39</td>
											<td>2016-04-26</td>
											<td>1</td>
											<td>2</td>
										</tr>
										<tr>
											<td>42291-623</td>
											<td>Jessa Surcombe</td>
											<td>(601) 1587857</td>
											<td>Eagle</td>
											<td>Summit</td>
											<td>Orange</td>
											<td>$53986.25</td>
											<td>2017-02-10</td>
											<td>4</td>
											<td>2</td>
										</tr>
										<tr>
											<td>30142-094</td>
											<td>Adriana Burren</td>
											<td>(440) 2251804</td>
											<td>Mitsubishi</td>
											<td>Pajero</td>
											<td>Violet</td>
											<td>$97882.21</td>
											<td>2016-09-12</td>
											<td>1</td>
											<td>3</td>
										</tr>
										<tr>
											<td>51263-3186</td>
											<td>Horace Tordoff</td>
											<td>(678) 2317500</td>
											<td>Mazda</td>
											<td>Tribute</td>
											<td>Purple</td>
											<td>$95632.69</td>
											<td>2016-03-26</td>
											<td>5</td>
											<td>3</td>
										</tr>
										<tr>
											<td>63824-332</td>
											<td>Pren Pridden</td>
											<td>(913) 4311438</td>
											<td>Audi</td>
											<td>5000S</td>
											<td>Red</td>
											<td>$93877.62</td>
											<td>2016-01-24</td>
											<td>2</td>
											<td>3</td>
										</tr>
										<tr>
											<td>0143-9720</td>
											<td>Marie-ann Filler</td>
											<td>(484) 6135393</td>
											<td>Pontiac</td>
											<td>Aztek</td>
											<td>Teal</td>
											<td>$22723.45</td>
											<td>2016-12-08</td>
											<td>4</td>
											<td>3</td>
										</tr>
										<tr>
											<td>16571-161</td>
											<td>Danette Haffenden</td>
											<td>(489) 2543953</td>
											<td>Dodge</td>
											<td>Ram 1500</td>
											<td>Orange</td>
											<td>$10292.53</td>
											<td>2017-03-11</td>
											<td>2</td>
											<td>3</td>
										</tr>
										<tr>
											<td>63629-2883</td>
											<td>Stafani McKoy</td>
											<td>(432) 6686608</td>
											<td>Chevrolet</td>
											<td>Tahoe</td>
											<td>Pink</td>
											<td>$99609.20</td>
											<td>2017-06-20</td>
											<td>1</td>
											<td>3</td>
										</tr>
										<tr>
											<td>0904-5832</td>
											<td>Lara Abbott</td>
											<td>(237) 9384521</td>
											<td>Toyota</td>
											<td>TundraMax</td>
											<td>Blue</td>
											<td>$52242.14</td>
											<td>2017-06-10</td>
											<td>3</td>
											<td>1</td>
										</tr>
										<tr>
											<td>59212-700</td>
											<td>Raul Northage</td>
											<td>(253) 5887016</td>
											<td>Ford</td>
											<td>E-Series</td>
											<td>Green</td>
											<td>$68197.04</td>
											<td>2016-06-24</td>
											<td>6</td>
											<td>2</td>
										</tr>
										<tr>
											<td>51060-032</td>
											<td>Chilton Whitsun</td>
											<td>(329) 2987085</td>
											<td>Ford</td>
											<td>Aspire</td>
											<td>Purple</td>
											<td>$56011.17</td>
											<td>2017-11-23</td>
											<td>4</td>
											<td>2</td>
										</tr>
										<tr>
											<td>59630-700</td>
											<td>Rafi Colborn</td>
											<td>(192) 2882855</td>
											<td>Mercedes-Benz</td>
											<td>CLK-Class</td>
											<td>Fuscia</td>
											<td>$23274.81</td>
											<td>2016-02-13</td>
											<td>5</td>
											<td>1</td>
										</tr>
										<tr>
											<td>0093-5112</td>
											<td>Linette McTrustie</td>
											<td>(641) 3793535</td>
											<td>Hyundai</td>
											<td>Elantra</td>
											<td>Fuscia</td>
											<td>$18160.67</td>
											<td>2017-09-08</td>
											<td>2</td>
											<td>2</td>
										</tr>
										<tr>
											<td>0615-7708</td>
											<td>Amery Stanbury</td>
											<td>(508) 4948485</td>
											<td>Lexus</td>
											<td>ES</td>
											<td>Indigo</td>
											<td>$70975.25</td>
											<td>2017-09-08</td>
											<td>6</td>
											<td>3</td>
										</tr>
										<tr>
											<td>17134-001</td>
											<td>Lucienne Cribbins</td>
											<td>(663) 8840396</td>
											<td>Lexus</td>
											<td>LX</td>
											<td>Red</td>
											<td>$15265.75</td>
											<td>2017-11-26</td>
											<td>6</td>
											<td>1</td>
										</tr>
										<tr>
											<td>36987-1004</td>
											<td>Bambi Speares</td>
											<td>(737) 3105005</td>
											<td>GMC</td>
											<td>Safari</td>
											<td>Mauv</td>
											<td>$54689.90</td>
											<td>2017-03-29</td>
											<td>1</td>
											<td>2</td>
										</tr>
										<tr>
											<td>37000-235</td>
											<td>Jordana Quarrington</td>
											<td>(863) 3743669</td>
											<td>Kia</td>
											<td>Rio</td>
											<td>Goldenrod</td>
											<td>$86580.92</td>
											<td>2017-01-27</td>
											<td>4</td>
											<td>3</td>
										</tr>
										<tr>
											<td>68645-474</td>
											<td>Winston Rockcliff</td>
											<td>(769) 7553052</td>
											<td>Land Rover</td>
											<td>LR2</td>
											<td>Pink</td>
											<td>$11848.40</td>
											<td>2016-05-06</td>
											<td>2</td>
											<td>3</td>
										</tr>
										<tr>
											<td>41167-1000</td>
											<td>Templeton O&#39;Neill</td>
											<td>(980) 2904092</td>
											<td>Volkswagen</td>
											<td>Tiguan</td>
											<td>Goldenrod</td>
											<td>$56468.93</td>
											<td>2016-12-24</td>
											<td>6</td>
											<td>3</td>
										</tr>
										<tr>
											<td>0536-1034</td>
											<td>Rosmunda Sonnenschein</td>
											<td>(714) 9618845</td>
											<td>Lexus</td>
											<td>IS</td>
											<td>Purple</td>
											<td>$53269.11</td>
											<td>2016-06-12</td>
											<td>5</td>
											<td>2</td>
										</tr>
										<tr>
											<td>41190-187</td>
											<td>Roxie Fluit</td>
											<td>(332) 1504442</td>
											<td>BMW</td>
											<td>7 Series</td>
											<td>Pink</td>
											<td>$79219.56</td>
											<td>2016-09-27</td>
											<td>6</td>
											<td>2</td>
										</tr>
										<tr>
											<td>49349-945</td>
											<td>Welsh Aucourte</td>
											<td>(247) 5299486</td>
											<td>Mitsubishi</td>
											<td>Pajero</td>
											<td>Goldenrod</td>
											<td>$48145.23</td>
											<td>2016-07-09</td>
											<td>3</td>
											<td>2</td>
										</tr>
										<tr>
											<td>43269-663</td>
											<td>Phillie Malafe</td>
											<td>(670) 3383610</td>
											<td>Mercedes-Benz</td>
											<td>C-Class</td>
											<td>Green</td>
											<td>$11035.03</td>
											<td>2017-02-22</td>
											<td>6</td>
											<td>1</td>
										</tr>
										<tr>
											<td>43772-0041</td>
											<td>Ian Frank</td>
											<td>(923) 6861524</td>
											<td>Land Rover</td>
											<td>Range Rover</td>
											<td>Blue</td>
											<td>$81421.33</td>
											<td>2016-08-27</td>
											<td>5</td>
											<td>2</td>
										</tr>
										<tr>
											<td>11822-2106</td>
											<td>Abigael Palfreyman</td>
											<td>(770) 9723386</td>
											<td>Cadillac</td>
											<td>Escalade</td>
											<td>Crimson</td>
											<td>$80044.93</td>
											<td>2017-12-02</td>
											<td>1</td>
											<td>2</td>
										</tr>
										<tr>
											<td>53808-0906</td>
											<td>Witty Heathfield</td>
											<td>(962) 3363202</td>
											<td>Acura</td>
											<td>TL</td>
											<td>Crimson</td>
											<td>$40180.47</td>
											<td>2016-05-17</td>
											<td>6</td>
											<td>3</td>
										</tr>
										<tr>
											<td>55315-101</td>
											<td>Kali Francois</td>
											<td>(973) 5236609</td>
											<td>Mazda</td>
											<td>Miata MX-5</td>
											<td>Yellow</td>
											<td>$52649.53</td>
											<td>2017-09-19</td>
											<td>3</td>
											<td>3</td>
										</tr>
										<tr>
											<td>13925-166</td>
											<td>Normand Will</td>
											<td>(246) 9613578</td>
											<td>Chevrolet</td>
											<td>3500</td>
											<td>Pink</td>
											<td>$31188.48</td>
											<td>2017-12-06</td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>49288-0154</td>
											<td>Lela Krystof</td>
											<td>(808) 3541728</td>
											<td>Volkswagen</td>
											<td>Fox</td>
											<td>Khaki</td>
											<td>$43836.00</td>
											<td>2017-07-09</td>
											<td>5</td>
											<td>2</td>
										</tr>
										<tr>
											<td>16729-199</td>
											<td>Christos Deval</td>
											<td>(198) 8598436</td>
											<td>BMW</td>
											<td>760</td>
											<td>Green</td>
											<td>$43115.86</td>
											<td>2017-12-06</td>
											<td>3</td>
											<td>3</td>
										</tr>
										<tr>
											<td>65862-373</td>
											<td>Lotty Calkin</td>
											<td>(720) 3833073</td>
											<td>Lincoln</td>
											<td>Mark VII</td>
											<td>Purple</td>
											<td>$10178.54</td>
											<td>2017-07-23</td>
											<td>4</td>
											<td>3</td>
										</tr>
										<tr>
											<td>76237-127</td>
											<td>Brion Miell</td>
											<td>(287) 8318618</td>
											<td>Nissan</td>
											<td>Xterra</td>
											<td>Orange</td>
											<td>$63572.17</td>
											<td>2016-08-31</td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>46122-243</td>
											<td>Hortensia Baudain</td>
											<td>(434) 8231794</td>
											<td>Plymouth</td>
											<td>Voyager</td>
											<td>Fuscia</td>
											<td>$63938.58</td>
											<td>2017-03-24</td>
											<td>6</td>
											<td>1</td>
										</tr>
										<tr>
											<td>64679-669</td>
											<td>Rowland Scruby</td>
											<td>(592) 8009749</td>
											<td>Porsche</td>
											<td>928</td>
											<td>Goldenrod</td>
											<td>$99189.60</td>
											<td>2017-03-03</td>
											<td>2</td>
											<td>2</td>
										</tr>
										<tr>
											<td>49643-011</td>
											<td>Upton Spofforth</td>
											<td>(302) 1857925</td>
											<td>Pontiac</td>
											<td>Grand Prix</td>
											<td>Pink</td>
											<td>$35148.80</td>
											<td>2016-07-12</td>
											<td>5</td>
											<td>2</td>
										</tr>
										<tr>
											<td>42549-644</td>
											<td>Harley Bruni</td>
											<td>(779) 3050689</td>
											<td>Mercury</td>
											<td>Grand Marquis</td>
											<td>Fuscia</td>
											<td>$97733.62</td>
											<td>2016-03-19</td>
											<td>5</td>
											<td>3</td>
										</tr>
										<tr>
											<td>41163-165</td>
											<td>Pip Robbs</td>
											<td>(948) 4283792</td>
											<td>Audi</td>
											<td>S4</td>
											<td>Blue</td>
											<td>$41526.96</td>
											<td>2017-06-25</td>
											<td>6</td>
											<td>1</td>
										</tr>
										<tr>
											<td>68788-9682</td>
											<td>Willem Cohane</td>
											<td>(701) 5976730</td>
											<td>Infiniti</td>
											<td>G</td>
											<td>Orange</td>
											<td>$10349.20</td>
											<td>2017-04-10</td>
											<td>1</td>
											<td>3</td>
										</tr>
										<tr>
											<td>49288-0653</td>
											<td>Gardner Meenehan</td>
											<td>(538) 3910849</td>
											<td>Subaru</td>
											<td>Justy</td>
											<td>Indigo</td>
											<td>$60413.42</td>
											<td>2016-11-10</td>
											<td>4</td>
											<td>3</td>
										</tr>
										<tr>
											<td>36987-2652</td>
											<td>Amabel Prothero</td>
											<td>(252) 5323275</td>
											<td>Chevrolet</td>
											<td>Corvette</td>
											<td>Teal</td>
											<td>$13648.25</td>
											<td>2017-09-07</td>
											<td>3</td>
											<td>1</td>
										</tr>
										<tr>
											<td>0574-0134</td>
											<td>Gerri Ryde</td>
											<td>(510) 4933127</td>
											<td>Hyundai</td>
											<td>Sonata</td>
											<td>Red</td>
											<td>$67214.42</td>
											<td>2017-12-08</td>
											<td>3</td>
											<td>1</td>
										</tr>
										<tr>
											<td>53808-0162</td>
											<td>Margret Hedling</td>
											<td>(124) 2372004</td>
											<td>GMC</td>
											<td>Rally Wagon 3500</td>
											<td>Mauv</td>
											<td>$22642.03</td>
											<td>2017-06-29</td>
											<td>1</td>
											<td>2</td>
										</tr>
										<tr>
											<td>58118-0903</td>
											<td>Katheryn Brew</td>
											<td>(506) 8391624</td>
											<td>Dodge</td>
											<td>D250 Club</td>
											<td>Yellow</td>
											<td>$30806.36</td>
											<td>2017-03-23</td>
											<td>4</td>
											<td>3</td>
										</tr>
										<tr>
											<td>58118-2520</td>
											<td>Alan Smeaton</td>
											<td>(325) 2384358</td>
											<td>Suzuki</td>
											<td>XL-7</td>
											<td>Pink</td>
											<td>$13784.36</td>
											<td>2017-03-21</td>
											<td>3</td>
											<td>2</td>
										</tr>
										<tr>
											<td>59667-0082</td>
											<td>Carmel Imort</td>
											<td>(531) 3432225</td>
											<td>Volkswagen</td>
											<td>GTI</td>
											<td>Khaki</td>
											<td>$98866.12</td>
											<td>2017-08-21</td>
											<td>1</td>
											<td>2</td>
										</tr>
										<tr>
											<td>49288-0068</td>
											<td>Locke Volleth</td>
											<td>(361) 7007114</td>
											<td>Ford</td>
											<td>F150</td>
											<td>Khaki</td>
											<td>$61288.24</td>
											<td>2017-06-04</td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>49349-043</td>
											<td>Faith Cabedo</td>
											<td>(601) 4763463</td>
											<td>Ford</td>
											<td>F-Series</td>
											<td>Blue</td>
											<td>$60272.02</td>
											<td>2017-06-02</td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>67877-291</td>
											<td>Amity Backs</td>
											<td>(313) 9853625</td>
											<td>GMC</td>
											<td>Jimmy</td>
											<td>Fuscia</td>
											<td>$90951.56</td>
											<td>2016-06-28</td>
											<td>4</td>
											<td>2</td>
										</tr>
										<tr>
											<td>45802-532</td>
											<td>Mitchel Chastang</td>
											<td>(731) 9523654</td>
											<td>Mercedes-Benz</td>
											<td>S-Class</td>
											<td>Orange</td>
											<td>$80858.40</td>
											<td>2017-03-20</td>
											<td>1</td>
											<td>2</td>
										</tr>
										<tr>
											<td>54569-5746</td>
											<td>Shaylynn Constantine</td>
											<td>(686) 6542051</td>
											<td>Volkswagen</td>
											<td>Passat</td>
											<td>Goldenrod</td>
											<td>$84827.23</td>
											<td>2016-10-22</td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>55289-002</td>
											<td>Ilyssa Martinot</td>
											<td>(420) 5275289</td>
											<td>GMC</td>
											<td>Yukon</td>
											<td>Red</td>
											<td>$89978.75</td>
											<td>2017-03-06</td>
											<td>6</td>
											<td>2</td>
										</tr>
										<tr>
											<td>43353-860</td>
											<td>Rikki Munsey</td>
											<td>(407) 8413268</td>
											<td>Pontiac</td>
											<td>Grand Prix</td>
											<td>Violet</td>
											<td>$46834.24</td>
											<td>2016-09-12</td>
											<td>3</td>
											<td>1</td>
										</tr>
										<tr>
											<td>68084-657</td>
											<td>Patrizius Keenlayside</td>
											<td>(295) 9595934</td>
											<td>GMC</td>
											<td>Terrain</td>
											<td>Teal</td>
											<td>$57538.42</td>
											<td>2017-12-01</td>
											<td>5</td>
											<td>1</td>
										</tr>
										<tr>
											<td>64169-001</td>
											<td>Blondelle Hedderly</td>
											<td>(552) 2204043</td>
											<td>Toyota</td>
											<td>Land Cruiser</td>
											<td>Khaki</td>
											<td>$72124.84</td>
											<td>2017-08-31</td>
											<td>2</td>
											<td>2</td>
										</tr>
										<tr>
											<td>60949-180</td>
											<td>Quentin Simonato</td>
											<td>(897) 9636432</td>
											<td>Ford</td>
											<td>Taurus</td>
											<td>Khaki</td>
											<td>$34544.72</td>
											<td>2016-02-06</td>
											<td>6</td>
											<td>1</td>
										</tr>
										<tr>
											<td>63739-564</td>
											<td>Kathye Perview</td>
											<td>(865) 7040623</td>
											<td>Chevrolet</td>
											<td>Express 1500</td>
											<td>Turquoise</td>
											<td>$36008.69</td>
											<td>2016-07-25</td>
											<td>5</td>
											<td>3</td>
										</tr>
										<tr>
											<td>36987-1440</td>
											<td>Odele Tolley</td>
											<td>(988) 5120277</td>
											<td>Ford</td>
											<td>Focus</td>
											<td>Red</td>
											<td>$81104.80</td>
											<td>2016-08-27</td>
											<td>6</td>
											<td>1</td>
										</tr>
										<tr>
											<td>55714-2246</td>
											<td>Benedetta Maddick</td>
											<td>(310) 7569773</td>
											<td>Mazda</td>
											<td>Protege</td>
											<td>Orange</td>
											<td>$17787.67</td>
											<td>2016-11-29</td>
											<td>1</td>
											<td>2</td>
										</tr>
										<tr>
											<td>65862-082</td>
											<td>Linn Douthwaite</td>
											<td>(952) 4093814</td>
											<td>Land Rover</td>
											<td>Range Rover</td>
											<td>Indigo</td>
											<td>$15916.36</td>
											<td>2017-11-07</td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>55154-5414</td>
											<td>Don Dillon</td>
											<td>(760) 4882500</td>
											<td>Mercedes-Benz</td>
											<td>G-Class</td>
											<td>Fuscia</td>
											<td>$23127.86</td>
											<td>2016-08-17</td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>0085-4324</td>
											<td>Leupold McKibben</td>
											<td>(897) 6073357</td>
											<td>Suzuki</td>
											<td>Sidekick</td>
											<td>Turquoise</td>
											<td>$31641.64</td>
											<td>2016-01-06</td>
											<td>6</td>
											<td>1</td>
										</tr>
										<tr>
											<td>55111-547</td>
											<td>Dale Swatheridge</td>
											<td>(194) 6840331</td>
											<td>Lincoln</td>
											<td>Town Car</td>
											<td>Goldenrod</td>
											<td>$86517.51</td>
											<td>2017-08-16</td>
											<td>2</td>
											<td>3</td>
										</tr>
										<tr>
											<td>24658-212</td>
											<td>Donaugh Heijnen</td>
											<td>(196) 5505530</td>
											<td>Hyundai</td>
											<td>Accent</td>
											<td>Purple</td>
											<td>$37404.91</td>
											<td>2017-06-17</td>
											<td>3</td>
											<td>2</td>
										</tr>
										<tr>
											<td>61919-070</td>
											<td>Fancie Erdely</td>
											<td>(292) 2228338</td>
											<td>Ford</td>
											<td>F250</td>
											<td>Pink</td>
											<td>$17711.38</td>
											<td>2017-03-20</td>
											<td>4</td>
											<td>2</td>
										</tr>
										<tr>
											<td>55526-0003</td>
											<td>Benedicta Dewen</td>
											<td>(857) 3113277</td>
											<td>Oldsmobile</td>
											<td>Regency</td>
											<td>Aquamarine</td>
											<td>$52831.64</td>
											<td>2016-03-17</td>
											<td>3</td>
											<td>3</td>
										</tr>
										<tr>
											<td>68788-9667</td>
											<td>Pru Lund</td>
											<td>(316) 7295392</td>
											<td>Mercedes-Benz</td>
											<td>E-Class</td>
											<td>Green</td>
											<td>$76319.10</td>
											<td>2016-04-19</td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>58517-420</td>
											<td>Lorelei Shernock</td>
											<td>(281) 1440426</td>
											<td>Buick</td>
											<td>Skyhawk</td>
											<td>Red</td>
											<td>$36420.72</td>
											<td>2017-09-09</td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>52125-849</td>
											<td>Durant Simeone</td>
											<td>(524) 5992372</td>
											<td>Dodge</td>
											<td>Ram 2500</td>
											<td>Orange</td>
											<td>$95440.61</td>
											<td>2017-09-23</td>
											<td>6</td>
											<td>2</td>
										</tr>
										<tr>
											<td>13733-016</td>
											<td>Nevsa Szymonwicz</td>
											<td>(613) 8997916</td>
											<td>Mercury</td>
											<td>Villager</td>
											<td>Khaki</td>
											<td>$23166.43</td>
											<td>2016-06-02</td>
											<td>2</td>
											<td>3</td>
										</tr>
										<tr>
											<td>68759-003</td>
											<td>Saundra Cobbe</td>
											<td>(296) 9487001</td>
											<td>MINI</td>
											<td>Clubman</td>
											<td>Puce</td>
											<td>$95816.39</td>
											<td>2017-10-24</td>
											<td>2</td>
											<td>2</td>
										</tr>
										<tr>
											<td>10356-816</td>
											<td>Read McGucken</td>
											<td>(664) 3466779</td>
											<td>Nissan</td>
											<td>Titan</td>
											<td>Aquamarine</td>
											<td>$47930.34</td>
											<td>2017-07-16</td>
											<td>4</td>
											<td>3</td>
										</tr>
										<tr>
											<td>64679-571</td>
											<td>Arte Cookson</td>
											<td>(107) 6746895</td>
											<td>Oldsmobile</td>
											<td>Bravada</td>
											<td>Yellow</td>
											<td>$91819.86</td>
											<td>2017-11-29</td>
											<td>6</td>
											<td>1</td>
										</tr>
										<tr>
											<td>49349-756</td>
											<td>Minda Kelbie</td>
											<td>(194) 7502539</td>
											<td>Mitsubishi</td>
											<td>Truck</td>
											<td>Goldenrod</td>
											<td>$53620.96</td>
											<td>2016-09-05</td>
											<td>2</td>
											<td>2</td>
										</tr>
										<tr>
											<td>0173-0526</td>
											<td>Andrus Heindrich</td>
											<td>(718) 7603415</td>
											<td>Isuzu</td>
											<td>Trooper</td>
											<td>Teal</td>
											<td>$75990.04</td>
											<td>2016-12-05</td>
											<td>3</td>
											<td>2</td>
										</tr>
										<tr>
											<td>65862-161</td>
											<td>Lianne Caygill</td>
											<td>(419) 3596732</td>
											<td>Ford</td>
											<td>Galaxie</td>
											<td>Violet</td>
											<td>$21504.90</td>
											<td>2016-09-25</td>
											<td>4</td>
											<td>2</td>
										</tr>
										<tr>
											<td>51346-131</td>
											<td>Olga Marcu</td>
											<td>(346) 3327634</td>
											<td>Lexus</td>
											<td>GS</td>
											<td>Mauv</td>
											<td>$94533.22</td>
											<td>2017-05-10</td>
											<td>6</td>
											<td>3</td>
										</tr>
										<tr>
											<td>43742-0290</td>
											<td>Elisabet Grevel</td>
											<td>(447) 4742839</td>
											<td>Volkswagen</td>
											<td>rio</td>
											<td>Turquoise</td>
											<td>$74498.76</td>
											<td>2016-03-13</td>
											<td>1</td>
											<td>2</td>
										</tr>
										<tr>
											<td>0591-3545</td>
											<td>Leena Klossmann</td>
											<td>(200) 2382063</td>
											<td>Dodge</td>
											<td>Stratus</td>
											<td>Crimson</td>
											<td>$92245.64</td>
											<td>2017-08-03</td>
											<td>2</td>
											<td>3</td>
										</tr>
										<tr>
											<td>50383-901</td>
											<td>Cassi Riddell</td>
											<td>(796) 2457039</td>
											<td>Audi</td>
											<td>TT</td>
											<td>Pink</td>
											<td>$94025.81</td>
											<td>2017-12-02</td>
											<td>6</td>
											<td>1</td>
										</tr>
										<tr>
											<td>55648-701</td>
											<td>Gerda Brookwood</td>
											<td>(125) 6915988</td>
											<td>Toyota</td>
											<td>Matrix</td>
											<td>Mauv</td>
											<td>$63526.25</td>
											<td>2016-06-28</td>
											<td>5</td>
											<td>2</td>
										</tr>
										<tr>
											<td>63148-801</td>
											<td>Tremaine Losselyong</td>
											<td>(303) 7787574</td>
											<td>Lamborghini</td>
											<td>Diablo</td>
											<td>Indigo</td>
											<td>$64343.47</td>
											<td>2017-07-18</td>
											<td>5</td>
											<td>3</td>
										</tr>
										<tr>
											<td>25225-019</td>
											<td>Brenden Szabo</td>
											<td>(313) 2886570</td>
											<td>Lincoln</td>
											<td>Mark VIII</td>
											<td>Maroon</td>
											<td>$50659.46</td>
											<td>2017-05-23</td>
											<td>5</td>
											<td>1</td>
										</tr>
										<tr>
											<td>0378-2073</td>
											<td>Oliy Snoddin</td>
											<td>(369) 6044644</td>
											<td>Audi</td>
											<td>S4</td>
											<td>Purple</td>
											<td>$17617.90</td>
											<td>2017-01-04</td>
											<td>5</td>
											<td>2</td>
										</tr>
										<tr>
											<td>52536-250</td>
											<td>Gabbie Hissett</td>
											<td>(553) 1304721</td>
											<td>Acura</td>
											<td>Vigor</td>
											<td>Crimson</td>
											<td>$11001.42</td>
											<td>2017-12-09</td>
											<td>1</td>
											<td>3</td>
										</tr>
										<tr>
											<td>0574-0193</td>
											<td>Rebekkah Bulman</td>
											<td>(793) 1299031</td>
											<td>Dodge</td>
											<td>Dakota</td>
											<td>Orange</td>
											<td>$74947.08</td>
											<td>2017-01-17</td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>68151-0177</td>
											<td>Wenonah Moorrud</td>
											<td>(685) 7544227</td>
											<td>Volvo</td>
											<td>S40</td>
											<td>Turquoise</td>
											<td>$59060.04</td>
											<td>2016-05-29</td>
											<td>5</td>
											<td>1</td>
										</tr>
										<tr>
											<td>10812-529</td>
											<td>Raychel Tidcombe</td>
											<td>(103) 6332543</td>
											<td>Ford</td>
											<td>Expedition</td>
											<td>Violet</td>
											<td>$52124.91</td>
											<td>2016-10-31</td>
											<td>1</td>
											<td>3</td>
										</tr>
										<tr>
											<td>49348-541</td>
											<td>Dalia O&#39;Hickey</td>
											<td>(864) 8682546</td>
											<td>Chevrolet</td>
											<td>Avalanche 2500</td>
											<td>Teal</td>
											<td>$64946.01</td>
											<td>2017-09-17</td>
											<td>1</td>
											<td>3</td>
										</tr>
									</tbody>
								</table>

								<!--end: Datatable -->
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
											<img src="../../../assets/app/media/img//users/user3.jpg" alt="" />
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
											<img src="../../../assets/app/media/img//users/user3.jpg" alt="" />
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
											<img src="../../../assets/app/media/img//users/user3.jpg" alt="" />
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
											<img src="../../../assets/app/media/img//users/user3.jpg" alt="" />
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
		<script src="assets/vendors/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="assets/vendors/popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="assets/vendors/js-cookie/src/js.cookie.js" type="text/javascript"></script>
		<script src="assets/vendors/moment/min/moment.min.js" type="text/javascript"></script>
		<script src="assets/vendors/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
		<script src="assets/vendors/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="assets/vendors/wnumb/wNumb.js" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="assets/vendors/jquery.repeater/src/lib.js" type="text/javascript"></script>
		<script src="assets/vendors/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
		<script src="assets/vendors/jquery.repeater/src/repeater.js" type="text/javascript"></script>
		<script src="assets/vendors/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
		<script src="assets/vendors/block-ui/jquery.blockUI.js" type="text/javascript"></script>
		<script src="assets/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
		<script src="assets/vendors/js/framework/components/plugins/forms/bootstrap-datepicker.init.js" type="text/javascript"></script>
		<script src="assets/vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<script src="assets/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
		<script src="assets/vendors/js/framework/components/plugins/forms/bootstrap-timepicker.init.js" type="text/javascript"></script>
		<script src="assets/vendors/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
		<script src="assets/vendors/js/framework/components/plugins/forms/bootstrap-daterangepicker.init.js" type="text/javascript"></script>
		<script src="assets/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
		<script src="assets/vendors/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
		<script src="assets/vendors/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
		<script src="assets/vendors/js/framework/components/plugins/forms/bootstrap-switch.init.js" type="text/javascript"></script>
		<script src="assets/vendors/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
		<script src="assets/vendors/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
		<script src="assets/vendors/select2/dist/js/select2.full.js" type="text/javascript"></script>
		<script src="assets/vendors/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
		<script src="assets/vendors/handlebars/dist/handlebars.js" type="text/javascript"></script>
		<script src="assets/vendors/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
		<script src="assets/vendors/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
		<script src="assets/vendors/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
		<script src="assets/vendors/inputmask/dist/inputmask/inputmask.phone.extensions.js" type="text/javascript"></script>
		<script src="assets/vendors/nouislider/distribute/nouislider.js" type="text/javascript"></script>
		<script src="assets/vendors/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
		<script src="assets/vendors/autosize/dist/autosize.js" type="text/javascript"></script>
		<script src="assets/vendors/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
		<script src="assets/vendors/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
		<script src="assets/vendors/dropzone/dist/dropzone.js" type="text/javascript"></script>
		<script src="assets/vendors/summernote/dist/summernote.js" type="text/javascript"></script>
		<script src="assets/vendors/markdown/lib/markdown.js" type="text/javascript"></script>
		<script src="assets/vendors/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
		<script src="assets/vendors/js/framework/components/plugins/forms/bootstrap-markdown.init.js" type="text/javascript"></script>
		<script src="assets/vendors/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
		<script src="assets/vendors/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
		<script src="assets/vendors/js/framework/components/plugins/forms/jquery-validation.init.js" type="text/javascript"></script>
		<script src="assets/vendors/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
		<script src="assets/vendors/js/framework/components/plugins/base/bootstrap-notify.init.js" type="text/javascript"></script>
		<script src="assets/vendors/toastr/build/toastr.min.js" type="text/javascript"></script>
		<script src="assets/vendors/jstree/dist/jstree.js" type="text/javascript"></script>
		<script src="assets/vendors/raphael/raphael.js" type="text/javascript"></script>
		<script src="assets/vendors/morris.js/morris.js" type="text/javascript"></script>
		<script src="assets/vendors/chartist/dist/chartist.js" type="text/javascript"></script>
		<script src="assets/vendors/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
		<script src="assets/vendors/js/framework/components/plugins/charts/chart.init.js" type="text/javascript"></script>
		<script src="assets/vendors/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
		<script src="assets/vendors/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
		<script src="assets/vendors/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
		<script src="assets/vendors/counterup/jquery.counterup.js" type="text/javascript"></script>
		<script src="assets/vendors/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
		<script src="assets/vendors/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
		<script src="assets/vendors/js/framework/components/plugins/base/sweetalert2.init.js" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle -->
		<script src="assets/demo/base/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts -->
		<script src="assets/demo/custom/crud/metronic-datatable/base/html-table.js" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>

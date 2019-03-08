<!DOCTYPE html>

<!--
Author: Nik Fadhil
Contact: fadhil.kamil@tnb.com.my
-->

<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>INSIGHTS</title>
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
		<link rel="shortcut icon" href="assets/demo/media/img/logo/faviconX.ico" />
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
										<img alt="" src="assets/demo/media/img/logo/logo.png" />
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

							<!-- END: Horizontal Menu -->

							<!-- BEGIN: Topbar -->

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
							<li class="m-menu__item  m-menu__item--active" aria-haspopup="true">
								<a href="index" class="m-menu__link ">
									<i class="m-menu__link-icon flaticon-line-graph"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">Dashboard</span>
											<span class="m-menu__link-badge">
											</span>
										</span>
									</span>
								</a>
							</li>
							<li class="m-menu__section ">
								<h4 class="m-menu__section-text">Reports</h4>
								<i class="m-menu__section-icon flaticon-more-v2"></i>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text">Assessment Reports FY2018</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item " aria-haspopup="true"><a href="data/report/fy2018/Requirement_Study_for_GIS_Data_Analytics_in_dPET_20181224_Rev0.pptx" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">dPET</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="data/report/fy2018/Requirement_Study_for_GIS_Data_Analytics_in_DNMP_20181227_Rev0.pptx" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">DNMP</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="data/report/fy2018/Final_Report_MRU_Assessment_20181224_Rev0.pptx" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">MRU Boundary</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="data/report/fy2018/Final_Report_Land_Based_20181227_Rev0.pptx" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Land Based Data</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="data/report/fy2018/Final_Report_Land_Parcel_20181227_Rev0.pptx" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Land Parcel (NDCDB)</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="data/report/fy2018/Requirement_Study_for_GIS_Data_Analytics_in_Technical Losses_20181227_Rev0.pptx" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Technical Losses</span></a></li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
					<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
						<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
							<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="index" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Dashboard</span>
							<span class="m-menu__link-badge"></span> </span></span></a></li>
										</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">


									</ul>
								</div>
							<!-- </li>
						</ul> -->

					</div>
					<!-- END: Aside Menu -->
				</div>

				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">

					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">Dashboard</h3>
								<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
									<li class="m-nav__item m-nav__item--home">
										<a href="#" class="m-nav__link m-nav__link--icon">
											<i class="m-nav__link-icon la la-home"></i>
										</a>
									</li>
									<li class="m-nav__separator">-</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">Data Health Check</span>
										</a>
									</li>
								</ul>
							</div>

						</div>
					</div>

					<!-- END: Subheader -->
					<div class="m-content">
						<div class="m-portlet m-portlet--mobile">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<h3 class="m-portlet__head-text">
											<!-- Title -->
										</h3>
									</div>
								</div>
								<div class="m-portlet__head-tools">
									<ul class="m-portlet__nav">


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
															<label>Area:</label>
														</div>
														<div class="m-form__control">
															<select class="form-control m-bootstrap-select" id="m_form_status">
																<option value="">All</option>
																<option value="1">Cheras</option>
																<option value="2">Kuala Selangor</option>
																<option value="3"> Putrajaya</option>
																<option value="4"> Sungai Besar</option>
															</select>
														</div>
													</div>
													<div class="d-md-none m--margin-bottom-10"></div>
												</div>
												<div class="col-md-4">
													<div class="m-form__group m-form__group--inline">
														<div class="m-form__label">
															<label class="m-label m-label--single">Quarter:</label>
														</div>
														<div class="m-form__control">
															<select class="form-control m-bootstrap-select" id="m_form_type">
																<option value="">All</option>
																<option value="1">Q5 (2018)</option>
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

										</div>
									</div>
								</div>

								<!--end: Search Form -->

								<!--begin: Datatable -->
								<table class="m-datatable" id="html_table" width="100%">
									<thead>
										<tr>
											<th title="No" data-field="No">No</th>
											<th title="Object" data-field="Obj">Object</th>
											<th title="Attribute Accuracy - FL or label Check" data-field="AttCom">Attribute Accuracy</th>
											<th title="Attribute Completeness - null record check" data-field="AttAcc">Attribute Completeness</th>
											<th title="Spatial Accuracy - less than 5 m" data-field="SpaAcc">Spatial Accuracy</th>
											<th title="Area" data-field="Area">Area</th>
											<th title="Type" data-field="Quarter">Quarter</th>

										</tr>
									</thead>
									<tbody>
										<!--begin: Cheras -->
										<tr>
											<td>01</td>
											<td>PMU, PPU and SSU</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/26. PPU-SSU.xlsx" style="color:white">89% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/26. PPU-SSU.xlsx" style="color:white">100%</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/26. PPU-SSU.xlsx" style="color:white">100% </a></span></td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>02</td>
											<td>Distribution PE</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/27. Distribution PE.xlsx" style="color:white">99% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/27. Distribution PE.xlsx" style="color:white">97% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/27. Distribution PE.xlsx" style="color:white">100% </a></span></td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>03</td>
											<td>LVDB</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/18. LVDB-FP.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/18. LVDB-FP.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>04</td>
											<td>Pole</td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/crs/19. Pole.xlsx" style="color:white">1% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/19. Pole.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>05</td>
											<td>Busbar</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/28. Busbar.xlsx" style="color:white">98% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/28. Busbar.xlsx" style="color:white">95% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>06</td>
											<td>Circuit Breaker</td>
											<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/crs/30. Circuit Breaker.xlsx" style="color:white">58% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/30. Circuit Breaker.xlsx" style="color:white">96% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>07</td>
											<td>Distribution Transformer</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/7. Distribution Transformer.xlsx" style="color:white">89% </a></span></td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/crs/7. Distribution Transformer.xlsx" style="color:white">0% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>08</td>
											<td>Feeder Point</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/22. Feeder Point.xlsx" style="color:white">87% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/22. Feeder Point.xlsx" style="color:white">93% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>09</td>
											<td>LV Cable Joint</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/6. LV Cable Joint.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/crs/6. LV Cable Joint.xlsx" style="color:white">54% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>10</td>
											<td>LV Feeder Point</td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/crs/23. LV Feeder Point.xlsx" style="color:white">0% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/23. LV Feeder Point.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>11</td>
											<td>LV Fuse</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/10. LV Fuse.xlsx" style="color:white">93% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/10. LV Fuse.xlsx" style="color:white">91% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>1</td>
											<td>1</td>
										<tr>
											<td>12</td>
											<td>LV OH Conductor</td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>13</td>
											<td>LV UG Conductor</td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/crs/4. LV UG Conductor.xlsx" style="color:white">0% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/4. LV UG Conductor.xlsx" style="color:white">99% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>14</td>
											<td>Main Transformer</td>
											<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/crs/8. Main Transformer.xlsx" style="color:white">68% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/8. Main Transformer.xlsx" style="color:white">92% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>15</td>
											<td>MV Cable Joint</td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/crs/5. MV Cable Joint.xlsx" style="color:white">0% </a></span></td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/crs/5. MV Cable Joint.xlsx" style="color:white">0% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>16</td>
											<td>MV OH Conductor</td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/crs/1. MV OH Conductor.xlsx" style="color:white">0% </a></span></td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/crs/1. MV OH Conductor.xlsx" style="color:white">13% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>17</td>
											<td>MV UG Conductor</td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/crs/3. MV UG Conductor.xlsx" style="color:white">0% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/3. MV UG Conductor.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>18</td>
											<td>RMU</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/17. Ring Main Unit.xlsx" style="color:white">83% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/17. Ring Main Unit.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>19</td>
											<td>Street Light</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/15. Street Light.xlsx" style="color:white">98% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/15. Street Light.xlsx" style="color:white">98% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>20</td>
											<td>Switch Bank</td>
											<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/crs/29. Switch Bank.xlsx" style="color:white">64% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/crs/29. Switch Bank.xlsx" style="color:white">94% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>1</td>
											<td>1</td>
										</tr>
										<!--end: Cheras -->

										<!--begin: Putrajaya -->
										<tr>
											<td>01</td>
											<td>PMU, PPU and SSU</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/26. PPU-SSU.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/26. PPU-SSU.xlsx" style="color:white">100%</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/26. PPU-SSU.xlsx" style="color:white">100% </a></span></td>
											<td>3</td>
											<td>1</td>
										</tr>
										<tr>
											<td>02</td>
											<td>Distribution PE</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/27. Distribution PE.xlsx" style="color:white">97% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/27. Distribution PE.xlsx" style="color:white">97% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/27. Distribution PE.xlsx" style="color:white">100% </a></span></td>
											<td>3</td>
											<td>1</td>
										</tr>
										<tr>
											<td>03</td>
											<td>LVDB</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/18. LVDB-FP.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/18. LVDB-FP.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>3</td>
											<td>1</td>
										</tr>
										<tr>
											<td>04</td>
											<td>Pole</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/19. Pole.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ptj/19. Pole.xlsx" style="color:white">0% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>3</td>
											<td>1</td>
										</tr>
										<tr>
											<td>05</td>
											<td>Busbar</td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ptj/28. Busbar.xlsx" style="color:white">10% </a></span></td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ptj/28. Busbar.xlsx" style="color:white">4% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>3</td>
											<td>1</td>
										</tr>
										<tr>
											<td>06</td>
											<td>Circuit Breaker</td>
											<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/ptj/30. Circuit Breaker.xlsx" style="color:white">69% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/30. Circuit Breaker.xlsx" style="color:white">88% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>3</td>
											<td>1</td>
										</tr>
										<tr>
											<td>07</td>
											<td>Distribution Transformer</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/7. Distribution Transformer.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/7. Distribution Transformer.xlsx" style="color:white">97% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>3</td>
											<td>1</td>
										</tr>
										<tr>
											<td>08</td>
											<td>Feeder Point</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/22. Feeder Point.xlsx" style="color:white">99% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/22. Feeder Point.xlsx" style="color:white">83% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>3</td>
											<td>1</td>
										</tr>
										<tr>
											<td>09</td>
											<td>LV Cable Joint</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/6. LV Cable Joint.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/6. LV Cable Joint.xlsx" style="color:white">93% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>3</td>
											<td>1</td>
										</tr>
										<tr>
											<td>10</td>
											<td>LV Feeder Point</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/23. LV Feeder Point.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--success m-success--wide"><a href="data/dhc/2018_q5/ptj/23. LV Feeder Point.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>3</td>
											<td>1</td>
										</tr>
										<tr>
											<td>11</td>
											<td>LV Fuse</td>
											<td><span class="m-badge m-badge--success m-success--wide"><a href="data/dhc/2018_q5/ptj/10. LV Fuse.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--warning m-success--wide"><a href="data/dhc/2018_q5/ptj/10. LV Fuse.xlsx" style="color:white">74% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>3</td>
											<td>1</td>
										<tr>
											<td>12</td>
											<td>LV OH Conductor</td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>3</td>
											<td>1</td>
										</tr>
										<tr>
											<td>13</td>
											<td>LV UG Conductor</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/4. LV UG Conductor.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/4. LV UG Conductor.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>3</td>
											<td>1</td>
										</tr>
										<tr>
											<td>14</td>
											<td>Main Transformer</td>
											<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/ptj/8. Main Transformer.xlsx" style="color:white">71% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/8. Main Transformer.xlsx" style="color:white">94% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>3</td>
											<td>1</td>
										</tr>
										<tr>
											<td>15</td>
											<td>MV Cable Joint</td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ptj/5. MV Cable Joint.xlsx" style="color:white">0% </a></span></td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ptj/5. MV Cable Joint.xlsx" style="color:white">0% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>3</td>
											<td>1</td>
										</tr>
										<tr>
											<td>16</td>
											<td>MV OH Conductor</td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>3</td>
											<td>1</td>
										</tr>
										<tr>
											<td>17</td>
											<td>MV UG Conductor</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/3. MV UG Conductor.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/3. MV UG Conductor.xlsx" style="color:white">99% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>3</td>
											<td>1</td>
										</tr>
										<tr>
											<td>18</td>
											<td>RMU</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/17. Ring Main Unit.xlsx" style="color:white">97% </a></span></td>
											<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/ptj/17. Ring Main Unit.xlsx" style="color:white">66% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>3</td>
											<td>1</td>
										</tr>
										<tr>
											<td>19</td>
											<td>Street Light</td>
											<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/ptj/15. Street Light.xlsx" style="color:white">75% </a></span></td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ptj/15. Street Light.xlsx" style="color:white">0% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>3</td>
											<td>1</td>
										</tr>
										<tr>
											<td>20</td>
											<td>Switch Bank</td>
											<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/ptj/29. Switch Bank.xlsx" style="color:white">75% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ptj/29. Switch Bank.xlsx" style="color:white">87% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>3</td>
											<td>1</td>
										</tr>
										<!--end: Putrajaya -->

										<!--begin: Kuala Selangor -->
										<tr>
											<td>01</td>
											<td>PMU, PPU and SSU</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/26. PPU-SSU.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/26. PPU-SSU.xlsx" style="color:white">100%</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/26. PPU-SSU.xlsx" style="color:white">100% </a></span></td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>02</td>
											<td>Distribution PE</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/27. Distribution PE.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/27. Distribution PE.xlsx" style="color:white">93% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/27. Distribution PE.xlsx" style="color:white">100% </a></span></td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>03</td>
											<td>LVDB</td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ksl/18. LVDB-FP.xlsx" style="color:white">33% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/18. LVDB-FP.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>04</td>
											<td>Pole</td>
											<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/ksl/19. Pole.xlsx" style="color:white">70% </a></span></td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ksl/19. Pole.xlsx" style="color:white">0% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>05</td>
											<td>Busbar</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/28. Busbar.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ksl/28. Busbar.xlsx" style="color:white">2% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>06</td>
											<td>Circuit Breaker</td>
											<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/ksl/30. Circuit Breaker.xlsx" style="color:white">60% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/30. Circuit Breaker.xlsx" style="color:white">85% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>07</td>
											<td>Distribution Transformer</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/7. Distribution Transformer.xlsx" style="color:white">90% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/7. Distribution Transformer.xlsx" style="color:white">99% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>08</td>
											<td>Feeder Point</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/22. Feeder Point.xlsx" style="color:white">99% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/22. Feeder Point.xlsx" style="color:white">84% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>09</td>
											<td>LV Cable Joint</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/6. LV Cable Joint.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/ksl/6. LV Cable Joint.xlsx" style="color:white">76% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>10</td>
											<td>LV Feeder Point</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/23. LV Feeder Point.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/23. LV Feeder Point.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>11</td>
											<td>LV Fuse</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/10. LV Fuse.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ksl/10. LV Fuse.xlsx" style="color:white">20% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>12</td>
											<td>LV OH Conductor</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/2. LV OH Conductor.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ksl/2. LV OH Conductor.xlsx" style="color:white">0% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>13</td>
											<td>LV UG Conductor</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/4. LV UG Conductor.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/4. LV UG Conductor.xlsx" style="color:white">99% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>14</td>
											<td>Main Transformer</td>
											<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/ksl/8. Main Transformer.xlsx" style="color:white">75% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/8. Main Transformer.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>15</td>
											<td>MV Cable Joint</td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ksl/5. MV Cable Joint.xlsx" style="color:white">0% </a></span></td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ksl/5. MV Cable Joint.xlsx" style="color:white">0% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>16</td>
											<td>MV OH Conductor</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/1. MV OH Conductor.xlsx" style="color:white">100% </a></span></td>
											<<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ksl/1. MV OH Conductor.xlsx" style="color:white">4% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>17</td>
											<td>MV UG Conductor</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/3. MV UG Conductor.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/3. MV UG Conductor.xlsx" style="color:white">91% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>18</td>
											<td>RMU</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/17. Ring Main Unit.xlsx" style="color:white">91% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/17. Ring Main Unit.xlsx" style="color:white">91% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>19</td>
											<td>Street Light</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/15. Street Light.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/ksl/15. Street Light.xlsx" style="color:white">1% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>20</td>
											<td>Switch Bank</td>
											<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/ksl/29. Switch Bank.xlsx" style="color:white">73% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/ksl/29. Switch Bank.xlsx" style="color:white">89% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>2</td>
											<td>1</td>
										</tr>
										<!--end: Kuala Selangor -->
										<!--begin: Sungai Besar -->
										<tr>
											<td>01</td>
											<td>PMU, PPU and SSU</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/26. PPU-SSU.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/26. PPU-SSU.xlsx" style="color:white">100%</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/26. PPU-SSU.xlsx" style="color:white">100% </a></span></td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>02</td>
											<td>Distribution PE</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/27. Distribution PE.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/sbr/27. Distribution PE.xlsx" style="color:white">79% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/27. Distribution PE.xlsx" style="color:white">100% </a></span></td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>03</td>
											<td>LVDB</td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/sbr/18. LVDB-FP.xlsx" style="color:white">41% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/18. LVDB-FP.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>04</td>
											<td>Pole</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/19. Pole.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/sbr/19. Pole.xlsx" style="color:white">1% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>05</td>
											<td>Busbar</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/28. Busbar.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/sbr/28. Busbar.xlsx" style="color:white">2% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>06</td>
											<td>Circuit Breaker</td>
											<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/sbr/30. Circuit Breaker.xlsx" style="color:white">72% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/30. Circuit Breaker.xlsx" style="color:white">80% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>07</td>
											<td>Distribution Transformer</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/7. Distribution Transformer.xlsx" style="color:white">98% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/7. Distribution Transformer.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>08</td>
											<td>Feeder Point</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/22. Feeder Point.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/22. Feeder Point.xlsx" style="color:white">93% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>09</td>
											<td>LV Cable Joint</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/6. LV Cable Joint.xlsx" style="color:white">88% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/6. LV Cable Joint.xlsx" style="color:white">85% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>10</td>
											<td>LV Feeder Point</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/23. LV Feeder Point.xlsx" style="color:white">88% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/23. LV Feeder Point.xlsx" style="color:white">85% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>11</td>
											<td>LV Fuse</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/10. LV Fuse.xlsx" style="color:white">98% </a></span></td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/sbr/10. LV Fuse.xlsx" style="color:white">10% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>12</td>
											<td>LV OH Conductor</td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/sbr/2. LV OH Conductor.xlsx" style="color:white">0% </a></span></td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/sbr/2. LV OH Conductor.xlsx" style="color:white">0% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>13</td>
											<td>LV UG Conductor</td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/sbr/4. LV UG Conductor.xlsx" style="color:white">0% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/4. LV UG Conductor.xlsx" style="color:white">99% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>14</td>
											<td>Main Transformer</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/8. Main Transformer.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/8. Main Transformer.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>15</td>
											<td>MV Cable Joint</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/5. MV Cable Joint.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/sbr/5. MV Cable Joint.xlsx" style="color:white">0% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>16</td>
											<td>MV OH Conductor</td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/sbr/1. MV OH Conductor.xlsx" style="color:white">0% </a></span></td>
											<<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/sbr/1. MV OH Conductor.xlsx" style="color:white">0% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>17</td>
											<td>MV UG Conductor</td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/sbr/3. MV UG Conductor.xlsx" style="color:white">0% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/3. MV UG Conductor.xlsx" style="color:white">88% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>18</td>
											<td>RMU</td>
											<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/sbr/17. Ring Main Unit.xlsx" style="color:white">78% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/17. Ring Main Unit.xlsx" style="color:white">87% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>19</td>
											<td>Street Light</td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/15. Street Light.xlsx" style="color:white">100% </a></span></td>
											<td><span class="m-badge m-badge--danger m-badge--wide"><a href="data/dhc/2018_q5/sbr/15. Street Light.xlsx" style="color:white">0% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>4</td>
											<td>1</td>
										</tr>
										<tr>
											<td>20</td>
											<td>Switch Bank</td>
											<td><span class="m-badge m-badge--warning m-badge--wide"><a href="data/dhc/2018_q5/sbr/29. Switch Bank.xlsx" style="color:white">66% </a></span></td>
											<td><span class="m-badge m-badge--success m-badge--wide"><a href="data/dhc/2018_q5/sbr/29. Switch Bank.xlsx" style="color:white">93% </a></span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td>4</td>
											<td>1</td>
										</tr>
										<!--end: Sungai Besar -->
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
								2018 &copy; INSIGHTS by <a href="" class="m-link">GIS Mapping & Analysis</a>
							</span>
						</div>
						<div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
							<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">

							</ul>
						</div>
					</div>
				</div>
			</footer>

			<!-- end::Footer -->
		</div>

		<!-- end:: Page -->

		<!-- begin::Quick Sidebar -->

		<!-- end::Quick Sidebar -->

		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>

		<!-- end::Scroll Top -->

		<!-- begin::Quick Nav -->

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
		<script src="assets/demo/custom/crud/metronic-datatable/base/html-table-insight.js" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>

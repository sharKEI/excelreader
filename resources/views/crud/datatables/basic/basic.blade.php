<!DOCTYPE html>

<!--
-->
<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>INSIGHTS</title>
		<meta name="description" content="Basic datatables examples">
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
		<link href="../../../../../vendors/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="../../../../../vendors/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="../../../../../vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
		<link href="../../../../../vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
		<link href="../../../../../vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
		<link href="../../../../../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="../../../../../vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="../../../../../vendors/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
		<link href="../../../../../vendors/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="../../../../../vendors/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
		<link href="../../../../../vendors/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="../../../../../vendors/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="../../../../../vendors/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="../../../../../vendors/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
		<link href="../../../../../vendors/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet" type="text/css" />
		<link href="../../../../../vendors/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="../../../../../vendors/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="../../../../../vendors/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="../../../../../vendors/animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="../../../../../vendors/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="../../../../../vendors/jstree/dist/themes/default/style.css" rel="stylesheet" type="text/css" />
		<link href="../../../../../vendors/morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="../../../../../vendors/chartist/dist/chartist.min.css" rel="stylesheet" type="text/css" />
		<link href="../../../../../vendors/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" type="text/css" />
		<link href="../../../../../vendors/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="../../../../../vendors/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="../../../../../vendors/vendors/flaticon/css/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="../../../../../vendors/vendors/metronic/css/styles.css" rel="stylesheet" type="text/css" />
		<link href="../../../../../vendors/vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles -->
		<link href="../../../assets/demo/base/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="../../../assets/demo/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Global Theme Styles -->

		<!--begin::Page Vendors Styles -->
		<link href="../../../assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="../../../assets/vendors/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Page Vendors Styles -->
		<link rel="shortcut icon" href="../../../assets/demo/media/img/logo/favicon.ico" />
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
										<!--<img alt="" src="../../../assets/demo/media/img/logo/logo_default_dark.png" />-->
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
							<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="index" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Dashboard</span>
							<span class="m-menu__link-badge"></span> </span></span></a></li>
										</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">


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
								<h3 class="m-subheader__title m-subheader__title--separator">Data Health Check</h3>
							</div>

						</div>
					</div>

					<!-- END: Subheader -->
					<div class="m-content">









						<div class="m-portlet m-portlet--mobile">
						<!--  Cheras -->
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<h3 class="m-portlet__head-text">
											Cheras
										</h3>

									</div>

								</div>
								<div class="m-portlet__head-tools">
									<ul class="m-portlet__nav">
									</ul>
								</div>
							</div>
							<div class="m-portlet__body">

								<!--begin: Datatable -->
								<table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_0">
									<thead>
										<tr>
											<th>No</th>
											<th>Object</th>
											<th>Completeness</th>
											<th>Attribute Accuracy</th>
											<th>Spatial Accuracy</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>PMU, PPU and SSU</td>
											<td><span class="m-badge m-badge--success m-badge--wide">89%</span></td>
											<td><span class="m-badge m-badge--success m-badge--wide">100%</span></td>
											<td><span class="m-badge m-badge--success m-badge--wide">100%</span></td>
										</tr>
										<tr>
											<td>2</td>
											<td>Distribution PE</td>
											<td><span class="m-badge m-badge--success m-badge--wide">100%</span></td>
											<td><span class="m-badge m-badge--success m-badge--wide">100%</span></td>
											<td><span class="m-badge m-badge--success m-badge--wide">100%</span></td>
										</tr>
										<tr>
											<td>3</td>
											<td>LVDB</td>
											<td><span class="m-badge m-badge--danger m-badge--wide">27%</span></td>
											<td><span class="m-badge m-badge--success m-badge--wide">100%</span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
										</tr>
										<tr>
											<td>4</td>
											<td>Pole</td>
											<td><span class="m-badge m-badge--success m-badge--wide">100%</span></td>
											<td><span class="m-badge m-badge--danger m-badge--wide">1%</span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
										</tr>
										<tr>
											<td>5</td>
											<td>Busbar</td>
											<td><span class="m-badge m-badge--success m-badge--wide">98%</span></td>
											<td><span class="m-badge m-badge--success m-badge--wide">95%</span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
										</tr>
										<tr>
											<td>6</td>
											<td>Circuit Breaker</td>
											<td><span class="m-badge m-badge--warning m-badge--wide">58%</span></td>
											<td><span class="m-badge m-badge--success m-badge--wide">96%</span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
										</tr>
										<tr>
											<td>7</td>
											<td>Distribution Transformer</td>
											<td><span class="m-badge m-badge--success m-badge--wide">89%</span></td>
											<td><span class="m-badge m-badge--danger m-badge--wide">0%</span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
										</tr>
										<tr>
											<td>8</td>
											<td>Feeder Point</td>
											<td><span class="m-badge m-badge--success m-badge--wide">87%</span></td>
											<td><span class="m-badge m-badge--success m-badge--wide">93%</span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
										</tr>
										<tr>
											<td>9</td>
											<td>LV Cable Joint</td>
											<td><span class="m-badge m-badge--success m-badge--wide">100%</span></td>
											<td><span class="m-badge m-badge--warning m-badge--wide">54%</span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
										</tr>
										<tr>
											<td>10</td>
											<td>LV Feeder Point</td>
											<td><span class="m-badge m-badge--danger m-badge--wide">0%</span></td>
											<td><span class="m-badge m-badge--success m-badge--wide">100%</span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
										</tr>
										<tr>
											<td>11</td>
											<td>LV Fuse</td>
											<td><span class="m-badge m-badge--success m-badge--wide">93%</span></td>
											<td><span class="m-badge m-badge--success m-badge--wide">91%</span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
										<tr>
											<td>12</td>
											<td>LV OH Conductor</td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
										</tr>
										<tr>
											<td>13</td>
											<td>LV UG Conductor</td>
											<td><span class="m-badge m-badge--danger m-badge--wide">0%</span></td>
											<td><span class="m-badge m-badge--success m-badge--wide">99%</span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
										</tr>
										<tr>
											<td>14</td>
											<td>Main Transformer</td>
											<td><span class="m-badge m-badge--warning m-badge--wide">68%</span></td>
											<td><span class="m-badge m-badge--danger m-badge--wide">0%</span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
										</tr>
										<tr>
											<td>15</td>
											<td>MV Cable Joint</td>
											<td><span class="m-badge m-badge--danger m-badge--wide">0%</span></td>
											<td><span class="m-badge m-badge--danger m-badge--wide">0%</span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
										</tr>
										<tr>
											<td>16</td>
											<td>MV OH Conductor</td>
											<td><span class="m-badge m-badge--danger m-badge--wide">0%</span></td>
											<td><span class="m-badge m-badge--danger m-badge--wide">13%</span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
										</tr>
										<tr>
											<td>17</td>
											<td>MV UG Conductor</td>
											<td><span class="m-badge m-badge--danger m-badge--wide">0%</span></td>
											<td><span class="m-badge m-badge--success m-badge--wide">100%</span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
										</tr>
										<tr>
											<td>18</td>
											<td>RMU</td>
											<td><span class="m-badge m-badge--success m-badge--wide">83%</span></td>
											<td><span class="m-badge m-badge--success m-badge--wide">100%</span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
										</tr>
										<tr>
											<td>19</td>
											<td>Street Light</td>
											<td><span class="m-badge m-badge--success m-badge--wide">98%</span></td>
											<td><span class="m-badge m-badge--success m-badge--wide">98%</span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
										</tr>
										<tr>
											<td>20</td>
											<td>Switch Bank</td>
											<td><span class="m-badge m-badge--warning m-badge--wide">64%</span></td>
											<td><span class="m-badge m-badge--success m-badge--wide">94%</span></td>
											<td><span class="m-badge m-badge--metal m-badge--wide">null</span></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>


						<!-- END TABLE Cheras-->
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


		<!-- end::Quick Nav -->

		<!--begin:: Global Mandatory Vendors -->
		<script src="../../../../../vendors/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="../../../../../vendors/popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="../../../../../vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="../../../../../vendors/js-cookie/src/js.cookie.js" type="text/javascript"></script>
		<script src="../../../../../vendors/moment/min/moment.min.js" type="text/javascript"></script>
		<script src="../../../../../vendors/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
		<script src="../../../../../vendors/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="../../../../../vendors/wnumb/wNumb.js" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="../../../../../vendors/jquery.repeater/src/lib.js" type="text/javascript"></script>
		<script src="../../../../../vendors/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
		<script src="../../../../../vendors/jquery.repeater/src/repeater.js" type="text/javascript"></script>
		<script src="../../../../../vendors/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
		<script src="../../../../../vendors/block-ui/jquery.blockUI.js" type="text/javascript"></script>
		<script src="../../../../../vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
		<script src="../../../../../vendors/js/framework/components/plugins/forms/bootstrap-datepicker.init.js" type="text/javascript"></script>
		<script src="../../../../../vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<script src="../../../../../vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
		<script src="../../../../../vendors/js/framework/components/plugins/forms/bootstrap-timepicker.init.js" type="text/javascript"></script>
		<script src="../../../../../vendors/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
		<script src="../../../../../vendors/js/framework/components/plugins/forms/bootstrap-daterangepicker.init.js" type="text/javascript"></script>
		<script src="../../../../../vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
		<script src="../../../../../vendors/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
		<script src="../../../../../vendors/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
		<script src="../../../../../vendors/js/framework/components/plugins/forms/bootstrap-switch.init.js" type="text/javascript"></script>
		<script src="../../../../../vendors/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
		<script src="../../../../../vendors/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
		<script src="../../../../../vendors/select2/dist/js/select2.full.js" type="text/javascript"></script>
		<script src="../../../../../vendors/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
		<script src="../../../../../vendors/handlebars/dist/handlebars.js" type="text/javascript"></script>
		<script src="../../../../../vendors/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
		<script src="../../../../../vendors/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
		<script src="../../../../../vendors/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
		<script src="../../../../../vendors/inputmask/dist/inputmask/inputmask.phone.extensions.js" type="text/javascript"></script>
		<script src="../../../../../vendors/nouislider/distribute/nouislider.js" type="text/javascript"></script>
		<script src="../../../../../vendors/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
		<script src="../../../../../vendors/autosize/dist/autosize.js" type="text/javascript"></script>
		<script src="../../../../../vendors/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
		<script src="../../../../../vendors/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
		<script src="../../../../../vendors/dropzone/dist/dropzone.js" type="text/javascript"></script>
		<script src="../../../../../vendors/summernote/dist/summernote.js" type="text/javascript"></script>
		<script src="../../../../../vendors/markdown/lib/markdown.js" type="text/javascript"></script>
		<script src="../../../../../vendors/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
		<script src="../../../../../vendors/js/framework/components/plugins/forms/bootstrap-markdown.init.js" type="text/javascript"></script>
		<script src="../../../../../vendors/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
		<script src="../../../../../vendors/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
		<script src="../../../../../vendors/js/framework/components/plugins/forms/jquery-validation.init.js" type="text/javascript"></script>
		<script src="../../../../../vendors/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
		<script src="../../../../../vendors/js/framework/components/plugins/base/bootstrap-notify.init.js" type="text/javascript"></script>
		<script src="../../../../../vendors/toastr/build/toastr.min.js" type="text/javascript"></script>
		<script src="../../../../../vendors/jstree/dist/jstree.js" type="text/javascript"></script>
		<script src="../../../../../vendors/raphael/raphael.js" type="text/javascript"></script>
		<script src="../../../../../vendors/morris.js/morris.js" type="text/javascript"></script>
		<script src="../../../../../vendors/chartist/dist/chartist.js" type="text/javascript"></script>
		<script src="../../../../../vendors/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
		<script src="../../../../../vendors/js/framework/components/plugins/charts/chart.init.js" type="text/javascript"></script>
		<script src="../../../../../vendors/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
		<script src="../../../../../vendors/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
		<script src="../../../../../vendors/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
		<script src="../../../../../vendors/counterup/jquery.counterup.js" type="text/javascript"></script>
		<script src="../../../../../vendors/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
		<script src="../../../../../vendors/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
		<script src="../../../../../vendors/js/framework/components/plugins/base/sweetalert2.init.js" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle -->
		<script src="../../../assets/demo/base/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors -->
		<script src="../../../assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts -->
		<script src="../../../assets/demo/custom/crud/datatables/basic/basic.js" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>

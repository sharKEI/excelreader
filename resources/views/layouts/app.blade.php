<!DOCTYPE html>

<!--
Author: Nik Fadhil
Contact: fadhil.kamil@tnb.com.my
-->

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>INSIGHTS - {{ $title }}</title>
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

        @component('components.header')
        @endcomponent

        <!-- begin::Body -->
	    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

            @component('components.sidebar')
            @endcomponent

            <!-- start:: Content -->
            <div class="m-grid__item m-grid__item--fluid m-wrapper">

                @component('components.alert')
                @endcomponent


                @component('components.subheader')
                    @slot('title', $subheader['title'])
                    @slot('desc', $subheader['desc'])
                @endcomponent

                @yield('content')

            </div>
            <!-- end:: Content -->

        </div>
        <!-- end:: Body -->

        @component('components.footer')
        @endcomponent

    </div>
    <!-- end:: Page -->

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
    <script src="assets/app/js/app.js" type="text/javascript"></script>
    <!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>

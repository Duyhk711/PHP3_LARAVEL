<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/sales-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 May 2024 07:23:13 GMT -->

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Sales</title>


    <link rel="stylesheet" href="{{asset('assets/admins/css/bootstrap1.min.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/admins/vendors/themefy_icon/themify-icons.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/admins/vendors/niceselect/css/nice-select.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/admins/vendors/owl_carousel/css/owl.carousel.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/admins/vendors/gijgo/gijgo.min.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/admins/vendors/font_awesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/admins/vendors/tagsinput/tagsinput.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/admins/vendors/datepicker/date-picker.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/admins/vendors/vectormap-home/vectormap-2.0.2.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/admins/vendors/scroll/scrollable.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/admins/vendors/datatable/css/jquery.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/admins/vendors/datatable/css/responsive.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/admins/vendors/datatable/css/buttons.dataTables.min.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/admins/vendors/text_editor/summernote-bs4.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/admins/vendors/morris/morris.css')}}">

    <link rel="stylesheet" href="{{asset('assets/admins/vendors/material_icon/material-icons.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/admins/css/metisMenu.css')}}">

    <link rel="stylesheet" href="{{asset('assets/admins/css/style1.css')}}" />
    {{-- <link rel="stylesheet" href="{{asset('assets/admins/css/colors/default.css" id="colorSkinCSS')}}"> --}}
    @yield('js-icon')
</head>

<body class="crm_body_bg">


    @include('admins.blocks.sidebar')

    <section class="main_content dashboard_part large_header_bg">

        @include('admins.blocks.header')

        @yield('content')

        @include('admins.blocks.footer')
    </section>


   
    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#">
            <i class="ti-angle-up"></i>
        </a>
    </div>

    @yield('js')

    <script src="{{asset('assets/admins/js/jquery1-3.4.1.min.js')}}"></script>

    <script src="{{asset('assets/admins/js/popper1.min.js')}}"></script>

    {{-- <script src="{{asset('assets/admins/js/bootstrap.min.html')}}"></script> --}}

    <script src="{{asset('assets/admins/js/metisMenu.js')}}"></script>

    <script src="{{asset('assets/admins/vendors/count_up/jquery.waypoints.min.js')}}"></script>

    <script src="{{asset('assets/admins/vendors/chartlist/Chart.min.js')}}"></script>

    <script src="{{asset('assets/admins/vendors/count_up/jquery.counterup.min.js')}}"></script>

    <script src="{{asset('assets/admins/vendors/niceselect/js/jquery.nice-select.min.js')}}"></script>

    <script src="{{asset('assets/admins/vendors/owl_carousel/js/owl.carousel.min.js')}}"></script>

    <script src="{{asset('assets/admins/vendors/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/admins/vendors/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/admins/vendors/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/admins/vendors/datatable/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('assets/admins/vendors/datatable/js/jszip.min.js')}}"></script>
    <script src="{{asset('assets/admins/vendors/datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/admins/vendors/datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/admins/vendors/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/admins/vendors/datatable/js/buttons.print.min.js')}}"></script>

    <script src="{{asset('assets/admins/vendors/datepicker/datepicker.js')}}"></script>
    <script src="{{asset('assets/admins/vendors/datepicker/datepicker.en.js')}}"></script>
    <script src="{{asset('assets/admins/vendors/datepicker/datepicker.custom.js')}}"></script>
    <script src="{{asset('assets/admins/js/chart.min.js')}}"></script>
    <script src="{{asset('assets/admins/vendors/chartjs/roundedBar.min.js')}}"></script>

    <script src="{{asset('assets/admins/vendors/progressbar/jquery.barfiller.js')}}"></script>

    <script src="{{asset('assets/admins/vendors/tagsinput/tagsinput.js')}}"></script>

    <script src="{{asset('assets/admins/vendors/text_editor/summernote-bs4.js')}}"></script>
    <script src="{{asset('assets/admins/vendors/am_chart/amcharts.js')}}"></script>

    <script src="{{asset('assets/admins/vendors/scroll/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/admins/vendors/scroll/scrollable-custom.js')}}"></script>
{{-- 
    <script src="{{asset('assets/admins/vendors/vectormap-home/vectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('assets/admins/vendors/vectormap-home/vectormap-world-mill-en.js')}}"></script> --}}

    {{-- <script src="{{asset('assets/admins/vendors/apex_chart/apex-chart2.js')}}"></script> --}}
    {{-- <script src="{{asset('assets/admins/vendors/apex_chart/apex_dashboard.js')}}"></script> --}}
    <script src="{{asset('assets/admins/vendors/echart/echarts.min.js')}}"></script>
    <script src="{{asset('assets/admins/vendors/chart_am/core.js')}}"></script>
    <script src="{{asset('assets/admins/vendors/chart_am/charts.js')}}"></script>
    <script src="{{asset('assets/admins/vendors/chart_am/animated.js')}}"></script>
    <script src="{{asset('assets/admins/vendors/chart_am/kelly.js')}}"></script>
    <script src="{{asset('assets/admins/vendors/chart_am/chart-custom.js')}}"></script>

    {{-- <script src="{{asset('assets/admins/js/dashboard_init.js')}}"></script> --}}
    <script src="{{asset('assets/admins/js/custom.js')}}"></script>

    
  
</body>

<!-- Mirrored from demo.dashboardpack.com/sales-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 May 2024 07:24:00 GMT -->

</html>

<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>Conquer - shared on themelock.com -  | Admin Dashboard Template</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <meta name="MobileOptimized" content="320">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="/plugins/select2/select2.css"/>
    <link rel="stylesheet" type="text/css" href="/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>
    <link rel="stylesheet" type="text/css" href="/plugins/gritter/css/jquery.gritter.css"/>
    <link rel="stylesheet" type="text/css" href="/plugins/select2/select2.css"/>
    <link rel="stylesheet" type="text/css" href="/plugins/clockface/css/clockface.css"/>
    <link rel="stylesheet" type="text/css" href="/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css"/>
    <link rel="stylesheet" type="text/css" href="/plugins/bootstrap-datepicker/css/datepicker.css"/>
    <link rel="stylesheet" type="text/css" href="/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css"/>
    <link rel="stylesheet" type="text/css" href="/plugins/bootstrap-colorpicker/css/colorpicker.css"/>
    <link rel="stylesheet" type="text/css" href="/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css"/>
    <link rel="stylesheet" type="text/css" href="/plugins/bootstrap-datetimepicker/css/datetimepicker.css"/>
    <link rel="stylesheet" type="text/css" href="/plugins/jquery-multi-select/css/multi-select.css"/>
    <link rel="stylesheet" type="text/css" href="/plugins/bootstrap-switch/css/bootstrap-switch.min.css"/>
    <link rel="stylesheet" type="text/css" href="/plugins/jquery-tags-input/jquery.tagsinput.css"/>
    <link rel="stylesheet" type="text/css" href="/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
    <link rel="stylesheet" type="text/css" href="/plugins/typeahead/typeahead.css">
    <link rel="stylesheet" type="text/css" href="/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    <link href="/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
    <link href="/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
    <link href="/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL PLUGIN STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="/css/style-conquer.css" rel="stylesheet" type="text/css"/>
    <link href="/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="/css/pages/tasks.css" rel="stylesheet" type="text/css"/>
    <link href="/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">

@include('layouts.header')

<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">



{{--@guest--}}
    {{--@yield('auth')--}}
{{--@endguest--}}

{{--@auth--}}
    @include('layouts.leftsidebar')

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content" align="center">

            @yield('content')

        </div>
    </div>
    <!-- END CONTENT -->
    {{--@endauth--}}
</div>
<!-- END CONTAINER -->

@include('layouts.footer')

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<script src="/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="/plugins/fuelux/js/spinner.min.js"></script>
<script type="text/javascript" src="/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
<script type="text/javascript" src="/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="/plugins/clockface/js/clockface.js"></script>
<script type="text/javascript" src="/plugins/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>
<script type="text/javascript" src="/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
<script type="text/javascript" src="/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
<script src="/plugins/bootstrap-pwstrength/pwstrength-bootstrap.min.js" type="text/javascript"></script>
<script src="/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript"></script>
<script src="/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
<script src="/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script src="/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
<script src="/plugins/typeahead/handlebars.min.js" type="text/javascript"></script>
<script src="/plugins/typeahead/typeahead.bundle.min.js" type="text/javascript"></script>
<script src="/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="/plugins/jquery.peity.min.js" type="text/javascript"></script>
<script src="/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="/plugins/jquery-knob/js/jquery.knob.js" type="text/javascript"></script>
<script src="/plugins/flot/jquery.flot.js" type="text/javascript"></script>
<script src="/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src="/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
<script src="/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/scripts/app.js" type="text/javascript"></script>
<script src="/scripts/index.js" type="text/javascript"></script>
<script src="/scripts/tasks.js" type="text/javascript"></script>
<script src="/scripts/table-managed.js"></script>
<script src="/scripts/form-components.js"></script>

<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        App.init(); // initlayout and core plugins
        Index.init();
        Index.initJQVMAP(); // init index page's custom scripts
        Index.initCalendar(); // init index page's custom scripts
        Index.initCharts(); // init index page's custom scripts
        Index.initChat();
        Index.initMiniCharts();
        Index.initPeityElements();
        Index.initKnowElements();
        Index.initDashboardDaterange();
        Tasks.initDashboardWidget();
        TableManaged.init();
        FormComponents.init();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
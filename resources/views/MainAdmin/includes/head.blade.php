<base href="">
<title>
    Test-Task
</title>
<meta charset="utf-8"/>
<meta name="description" content="Test-Task"/>
<meta name="keywords" content="Test-Task"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="article"/>
<meta property="og:title" content="Test-Task"/>
<meta property="og:url" content="http://tesolutionspro.com/metronic"/>
<meta property="og:site_name" content="Test-Task"/>
<link rel="canonical" href="https://preview.keenthemes.com/metronic8"/>
<link rel="shortcut icon" href=""/>
<!--begin::Fonts-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
<!--end::Fonts-->
<!--begin::Page Vendor Stylesheets(used by this page)-->

<link href="{{ url('admin/dist/') }}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
      type="text/css"/>
<link href="{{ url('admin/dist/') }}/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet"
      type="text/css"/>
<!--end::Page Vendor Stylesheets-->
<!--begin::Global Stylesheets Bundle(used by all pages)-->
<link href="{{ url('admin/dist/') }}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
<link href="{{ url('admin/dist/') }}/assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
<!--end::Global Stylesheets Bundle-->

@yield('style')

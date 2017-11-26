<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/timeline.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="{{asset('jquery-ui-datepicker/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('jquery-datatable/css/style.css')}}" rel="stylesheet">

    <!-- Scripts -->
   <!--<script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>-->

</head>
<body class="main">
@yield('body')

<script src="{{ asset("js/jquery.js") }}"></script>
<script src="{{ asset("js/login.js") }}"></script>
<script src="{{ asset("js/app.js") }}"></script>
<script src="{{ asset("js/Chart.js") }}"></script>
<script src="{{ asset("js/admin.js") }}"></script>
<script src="{{asset('jquery-datatable/js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('jquery-ui-datepicker/js/jquery-ui.js')}}" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        $(".jTable").dataTable();
        $(".dateTimePicker").datepicker();
    });
</script>
</body>
</html>
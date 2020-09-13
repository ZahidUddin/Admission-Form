<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="According to the “Private University Act, 2010”, the Trustee board submitted a proposal to UGC to establish a university in Khulna named 'Northern University of Business and Technology Khulna'.">
        <meta name="keywords" content="Admission, Admission Online, Northern University of Business & Technology Khulna, Northern University, Khulna University, Private University,  Private University in Khulna, bd private university">
        <meta name="author" content="Zahid Uddin">
        <meta property="og:title" content="Northern University of Business &amp; Technology Khulna Admission Online Portal">
        <meta property="og:site_name" content="Admission NUBTK">
        <meta property="og:description" content="According to the “Private University Act, 2010”, the Trustee board submitted a proposal to UGC to establish a university in Khulna named 'Northern University of Business and Technology Khulna'.">
        <meta property="og:type" content="Admission Website">
        <meta property="og:url" content="https://admission.nubtkhulna.ac.bd/">
        <meta property="og:image" content="http://nubtkhulna.ac.bd/assets/images/logo.png">
        
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"/>
        
        <!-- Custom CSS-->
        <link rel="stylesheet" href="{{url('/css/custom.css')}}">
        
        <link rel="shortcut icon" type="image/x-icon" href="https://nubtkhulna.ac.bd/assets/images/icon.png">

        <title>{{config('app.name', 'Admission')}} NUBTK</title>

    </head>
    <body>
        @include('inc.navbar')
        @yield('content')
        @include('inc.footer')
        


    </body>

    

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>

    <script src="http://sciencify.net/public/lte/bootstrap-datetimepicker/moment.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
        $('.select2').select2();
        
        $('.datetimepicker').datetimepicker();

        $('.datepicker').datetimepicker({
            format: 'YYYY-MM-DD',
        });

        $('.timepicker').datetimepicker({
            format: 'LT'
        });
    </script>
</html>

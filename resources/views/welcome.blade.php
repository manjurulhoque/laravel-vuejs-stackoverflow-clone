<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel - Stackoverflow</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://bootswatch.com/3/cerulean/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/styles.css") }}">
</head>
<body>
@include('partials.nav')
@include('partials.header-upper')
<main class="container">
    @yield('content')
</main> <!-- End main area -->
<!-- JQuery Script (Required for JavaScript Below)-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!-- JavaScript-->
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>

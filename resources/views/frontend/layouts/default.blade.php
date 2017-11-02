<!DOCTYPE html>
<html>
<head>
    <title>Brooke Consult</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link href="assets/css/brooke.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Resource style -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <script src="/js/parallax/modernizr.js"></script>
    <![endif]-->
</head>

<!-- hijacking: on/off - animation: none/scaleDown/rotate/gallery/catch/opacity/fixed/parallax -->
<body data-hijacking="off" data-animation="parallax">

    @include('frontend.layouts.partials.menu')

    <div style="padding-top: 90px">
        @yield('content')

        @include('frontend.layouts.partials.footer')
    </div>


<script src="/js/parallax/jquery-2.1.4.js"></script>
<script src="/js/parallax/velocity.min.js"></script>
<script src="/js/parallax/velocity.ui.min.js"></script>
<script src="/js/parallax/main.js"></script> <!-- Resource jQuery -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>
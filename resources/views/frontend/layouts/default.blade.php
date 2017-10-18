<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
{{--    <link href="{{ elixir('assets/css/brooke.css') }}" rel="stylesheet">--}}

    <link rel="stylesheet" href="assets/css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Resource style -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <script src="/js/parallax/modernizr.js"></script>
    <![endif]-->
</head>

<!-- hijacking: on/off - animation: none/scaleDown/rotate/gallery/catch/opacity/fixed/parallax -->
<body data-hijacking="off" data-animation="fixed">

<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../navbar/">Default</a></li>
                <li><a href="../navbar-static-top/">Static top</a></li>
                <li class="active"><a href="./">Fixed top</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<section class="cd-section visible">
    <div>
        <h2 style="color: black">Real Estate consulting is our sport.</h2>
    </div>
</section>

<section class="cd-section">
    <div>
        <h2>Section 2</h2>
    </div>
</section>

<section class="cd-section">
    <div>
        <h2>Section 3</h2>
    </div>
</section>

<section class="cd-section">
    <div>
        <h2>Section 4</h2>
    </div>
</section>

<section class="cd-section">
    <div>
        <h2>Section 5</h2>
    </div>
</section>

<nav>
    <ul class="cd-vertical-nav">
        <li><a href="#0" class="cd-prev inactive">Next</a></li>
        <li><a href="#0" class="cd-next">Prev</a></li>
    </ul>
</nav> <!-- .cd-vertical-nav -->

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
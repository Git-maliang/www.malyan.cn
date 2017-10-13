<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hydrogen &mdash; A free HTML5 Template </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Salvattore -->
    <link rel="stylesheet" href="css/salvattore.css">
    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header id="fh5co-header" role="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a class="navbar-brand" href=":;">{{ $name }}</a>
            </div>
        </div>
    </div>
</header>
<!-- END .header -->
<div id="fh5co-main">
    <div class="container">
        <div class="row">
            <div id="fh5co-board" data-columns>
                @foreach ($data as $val)
                <div class="item">
                    <div class="animate-box">
                        <a href="{{ $val->picture }}" class="image-popup fh5co-board-img" title="{{ $val->describe }}">
                            <img src="{{ $val->picture }}" alt="Free HTML5 Bootstrap template">
                        </a>
                    </div>
                    @if($val->describe)
                    <div class="fh5co-desc">{{ $val->describe }}</div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Salvattore -->
<script src="js/salvattore.min.js"></script>
<!-- Main JS -->
<script src="js/main.js"></script>
</body>
</html>

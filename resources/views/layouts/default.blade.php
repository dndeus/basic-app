<!doctype html>
<html class="signin no-js" lang="">

<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="description" content="Flat, Clean, Responsive, application admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <!-- /meta -->

    <title>Sublime - Web Application Admin Dashboard</title>

    <!-- page level plugin styles -->
    <!-- /page level plugin styles -->

    <!-- core styles -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- /core styles -->

    <!-- template styles -->
    <link rel="stylesheet" href="css/skins/palette.css">
    <link rel="stylesheet" href="css/fonts/font.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- template styles -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- load modernizer -->
    <script src="plugins/modernizr.js"></script>
</head>

<body class="bg-primary">

<div class="cover" style="background-image: url(img/cover3.jpg)"></div>

<div class="overlay bg-primary"></div>

<div class="center-wrapper">
    <div class="center-content">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <section class="panel bg-white no-b">
                    <ul class="switcher-dash-action">
                        <li class="active"><a href="#" class="selected">Sign in</a></li>
                        <li><a href="signup.html" class="">New account</a></li>
                    </ul>
                    <div class="p15">
                        <form role="form" action="index.html">
                            <input type="text" class="form-control input-lg mb25" placeholder="Username" autofocus>
                            <input type="password" class="form-control input-lg mb25" placeholder="Password">
                            <div class="show">
                                <div class="pull-right">
                                    <a href="forgot.html">Forgot password?</a>
                                </div>
                                <label class="checkbox">
                                    <input type="checkbox" value="remember-me">Remember me
                                </label>
                            </div>

                            <button class="btn btn-primary btn-lg btn-block" type="submit">Sign in</button>
                        </form>
                    </div>
                </section>
                <p class="text-center">
                    Copyright &copy;
                    <span id="year" class="mr5"></span>
                    <span>Sublime LLC</span>
                </p>
            </div>
        </div>

    </div>
</div>
<script type="text/javascript">
    var el = document.getElementById("year"),
        year = (new Date().getFullYear());
    el.innerHTML = year;
</script>
</body>

</html>

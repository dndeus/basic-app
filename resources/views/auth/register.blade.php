<!doctype html>
<html class="signin no-js" lang="">

<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="description" content="Flat, Clean, Responsive, application admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <!-- /meta -->

    <title>Sublime - Web Application Admin Dashboard</title>

    @include('partials.stylesheets')

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- load modernizer -->
    {!! HTML::script('assets/plugins/modernizr.js') !!}
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
                        <li>{!! link_to('auth/login','Sign in') !!}</li>
                        <li class="active">{!! link_to('auth/register','New account',['class'=>'selected']) !!}</li>
                    </ul>
                    <div class="p15">
                        @include('partials.errorsForm')
                        {!! Form::open() !!}
                            {!! Form::email('email',null,['placeholder'=> 'Email','class' => 'form-control input-lg mb25']) !!}
                            {!! Form::password('password',['placeholder'=> 'Password','class' => 'form-control input-lg mb25']) !!}
                            {!! Form::password('password_confirmation',['placeholder'=> 'Confirm password','class' => 'form-control input-lg mb25']) !!}
                            {!! Form::submit('Sign up',['class' => 'btn btn-primary btn-lg btn-block']) !!}
                        {!! Form::close() !!}
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

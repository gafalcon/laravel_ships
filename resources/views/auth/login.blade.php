<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
        <meta name="author" content="GeeksLabs">
        <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
        <link rel="shortcut icon" href="img/favicon.png">
        
        <title>Login Page 2 | Creative - Bootstrap 3 Responsive Admin Template</title>
        
        <!-- Bootstrap CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <!-- bootstrap theme -->
        <link href="/css/bootstrap-theme.css" rel="stylesheet">
        <!--external /css-->
        <!-- font icon -->
        <link href="/css/elegant-icons-style.css" rel="stylesheet" />
        <link href="/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom styles -->
        <link href="/css/style.css" rel="stylesheet">
        <link href="/css/style-responsive.css" rel="stylesheet" />
        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
        <!--[if lt IE 9]>
        <script src="/js/html5shiv.js"></script>
        <script src="/js/respond.min.js"></script>
        <![endif]-->

        <!-- =======================================================
             Theme Name: NiceAdmin
             Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
             Author: BootstrapMade
             Author URL: https://bootstrapmade.com
             ======================================================= -->
    </head>

    <body class="login-img3-body">
        <div class="container">
            <form class="login-form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="login-wrap">
                    <p class="login-img"><i class="icon_lock_alt"></i></p>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon_mail"></i></span>
                        <input placeholder="correo electrónico" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    </div>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                        <input id="password" type="password" placeholder="contraseña" class="form-control" name="password" required>
                    </div>
                    <label class="checkbox">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                        <span class="pull-right"> <a href="{{ route('password.request') }}"> Olvidó su contraseña?</a></span>
                    </label>
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Loguearse</button>
                    <a href="/register" class="btn btn-info btn-lg btn-block" type="submit">Registrarse</a>
                </div>
            </form>
            <div class="text-right">
                <div class="credits">
                    <!--
                         All the links in the footer should remain intact.
                         You can delete the links only if you purchased the pro version.
                         Licensing information: https://bootstrapmade.com/license/
                         Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                    -->
                    <a href="https://bootstrapmade.com/">Free Bootstrap Templates</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </div>
    </body>
    </html>

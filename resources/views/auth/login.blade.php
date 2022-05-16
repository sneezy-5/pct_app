<!DOCTYPE html>
<html>


<!-- Mirrored from gurayyarar.github.io/AdminBSBMaterialDesign/pages/examples/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 10:35:33 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('css/style2.css')}}" rel="stylesheet">
</head>

<body class="login-page bg-green">
    
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">App <b>Allakro</b></a>
            <small>Accedez à votre application</small>
        </div>
        
        <div class="card">
            @if($errors)
                {{$errors}}
            @endif

            @if (session('error'))
     <div class="alert alert-danger">
         {{ session('error') }}
     </div>
  @endif
            <div class="body">
                <form id="sign_in" method="post" action="{{route('admin.adminlogin')}}">
                    @csrf
                    <!-- LOGO -->
                    <div class="logo-login">
                        <div class="image">          
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Login" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Mot de passe" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Rester connecté</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-orange waves-effect" type="submit">Connexion</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                       
                        <div class="col-xs-6 align-right">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="txt1">
                                
                                 {{ __('Mot de passe oublié ?') }}
                            </a>
                             @endif
                          
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('plugins/node-waves/waves.js')}}"></script>

    <!-- Validation Plugin Js -->
    <script src="{{asset('plugins/jquery-validation/jquery.validate.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('js/admin.js')}}"></script>
    <script src="{{asset('js/pages/examples/sign-in.js')}}"></script>
</body>


<!-- Mirrored from gurayyarar.github.io/AdminBSBMaterialDesign/pages/examples/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 10:35:33 GMT -->
</html>
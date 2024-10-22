
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login - Vali Admin</title>
</head>
<body>
<section class="material-half-bg">
    <div class="cover"></div>
</section>
<section class="login-content">
    <div class="logo">
        <h1><img src="../imagens/logo.png" width="300" height="auto" style="margin-top: -10px;"/></h1>
    </div>
    <div class="login-box">

        <form method="POST" class="login-form" action="{{route('login')}}">
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Login</h3>
            <div class="form-group">
                <label class="control-label">Usuário</label>
                <input class="form-control" name="nome" type="text"  autofocus required>
            </div>
            <div class="form-group">
                <label class="control-label">Senha</label>
                <input class="form-control" name="password" type="password" required>
            </div>
            <div class="form-group">
            </div>
            <div class="form-group btn-container">
                <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>Entrar</button>
            </div>
            @csrf
            @if(session('error'))
                <p class="error-message">{{session('error')}}</p>
            @endif
        </form>
    </div>
</section>
<!-- Essential javascripts for application to work-->
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="../js/plugins/pace.min.js"></script>

</body>
</html>

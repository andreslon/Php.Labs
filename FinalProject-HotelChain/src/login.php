
<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <style>
                        .error{
                color: red;
                font-weight: bold;
                margin: 10px;
                text-align: center;
            }
        </style>
    </head>
    <body class="gray-bg">
        <div class="middle-box text-center loginscreen  animated fadeInDown">
            <div>
                <div>
                    <h1 class="logo-name">H-C</h1>
                </div>
                <h3>Bienvenido a Hotels chain</h3>

                <p>Ingresa tus datos para acceder</p>
                <?php
                    session_start();
                    include_once "conexion.php";
                    
                    function verificar_login($user,$password,&$result) {
                        $sql = "SELECT * FROM users WHERE username = '$user' and password = '$password'";
                        $rec = mysql_query($sql);
                        $count = 0;
                    
                        while($row = mysql_fetch_object($rec))
                        {
                            $count++;
                            $result = $row;
                        }
                    
                        if($count == 1)
                        {
                            return 1;
                        }
                    
                        else
                        {
                            return 0;
                        }
                    }
                    
                    if(isset($_POST['login']))
                        {
                            if(verificar_login($_POST['user'],$_POST['password'],$result) == 1)
                            {
                                $_SESSION['username'] = $_POST['user'];
                                $_SESSION['id'] = $result->id;
                               header("location:index.php");
                            }
                            else
                            {
                                echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div><br/>';
                            }
                        }
                ?>
                <form action="" method="post" class="login" class="m-t">
                    <div class="form-group">
                        <input type="text" name="user" class="form-control" placeholder="Usuario" required="">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Contraseña" required="">
                    </div>
                    <button name="login" type="submit" class="btn btn-primary block full-width m-b">Entrar</button>
                    <!--<a href="#"><small>Forgot password?</small></a>-->
                                            <!--<p class="text-muted text-center"><small>Do not have an account?</small></p>
                                            <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>-->
                </form>
                 

                <p class="m-t"> <small>TdeA &copy; 2017</small> </p>
            </div>
        </div>
        <!-- Mainly scripts -->
        <script src="js/jquery-2.1.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>

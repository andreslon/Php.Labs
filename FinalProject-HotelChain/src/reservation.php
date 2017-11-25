<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>H-C</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body class="gray-bg">
        <div class="middle-box text-center loginscreen   animated fadeInDown">
            <div>
                <div>
                    <h1 class="logo-name">H-C</h1>
                </div>
                <h3>Bienvenido a Hotels chain y realiza tu reserva</h3>
                <form action="" method="post" class="m-t">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Codigo/Identificación</label>
                        <input type="text" name="codigo" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Habitación</label>
                        <select class="form-control m-b" name="habitacion">


                            <?php
                                session_start();
                                include_once "conexion.php"; 
                                
                                
                                    $sql = "SELECT id, codigo, descripcion FROM rooms";
                                    $result = mysql_query($sql);
                                
                                    if (mysql_num_rows($result) > 0) {
                                        // output data of each row
                                        while($row = mysql_fetch_assoc($result)) {
                                            echo "<option value='".$row["codigo"]."'>".$row["descripcion"]."</option>";
                                        }
                                    } 
                                    if(isset($_POST['save']))
                                        {
                                            $sql = "INSERT INTO reservations 
                                            (CodigoHuesped, CodigoHabitacion)
                                            VALUES (
                                            '".$_POST['codigo']."',
                                            '".$_POST['codigo']."')";
    
                                            if (mysql_query($sql)) {
                                                echo "<script language='javascript'>alert('Guardado correctamente.');</script>"; 
                                            } else {
                                                echo "<script language='javascript'>alert('Error: ". $sql ."<br>".mysql_error($con)."');</script>"; 
                                            }
                                        } 
                            ?>
                        </select>
                    </div>
                    <button type="submit" name="save" class="btn btn-primary block full-width m-b">Reservar</button>
                    <p class="text-muted text-center"><small>¿Eres administrador?</small></p>
                    <a class="btn btn-sm btn-white btn-block" href="login.php">Ingresar</a>
                </form>
                <p class="m-t"> <small>TdeA &copy; 2017</small> </p>
            </div>
        </div>
        <!-- Mainly scripts -->
        <script src="js/jquery-2.1.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
    </body>
</html>

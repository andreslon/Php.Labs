<?php
    session_start();
    include_once "conexion.php"; 
    
    if(isset($_POST['expense']))
        {
            if(!$_POST['HDId']>0){
    
                echo "<script language='javascript'>alert('Selecciona un huesped para agregar consumo.');</script>"; 
    
    
            }else{
    
    
    
                  $sql = "INSERT INTO expenses 
                        (checkinid, product, cost)
                        VALUES (
                        '".$_POST['HDId']."',
                        '".$_POST['product']."',
                        '".$_POST['cost']."'); " ;
    
                                    if (mysql_query($sql)) {
    
                                        $sql = "UPDATE checkins SET 
                                        total= (select sum(cost) from expenses where checkinid=".$_POST['HDId']." ) 
                                        WHERE id=".$_POST['HDId'];
    
                                          if (mysql_query($sql)) {
                                             echo "<script language='javascript'>alert('Guardado correctamente.');</script>"; 
                                        } else {
                                            echo "<script language='javascript'>alert('Error: ". $sql ."<br>".mysql_error($con)."');</script>"; 
                                        }
                                    } else {
                                        echo "<script language='javascript'>alert('Error: ". $sql ."<br>".mysql_error($con)."');</script>"; 
                                    }
            }
    
        }
?>


<!DOCTYPE html>
<html>
    <head>
        <script>
            function SetIdRoom(id) {
                document.getElementById("HDId").value = id;
            };
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>H-C</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        <!-- Toastr style -->
        <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
        <!-- Gritter -->
        <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="nav-header">
                            <div class="dropdown profile-element">
                                <span>
                                    <i style="color: white;
                                font-size: 40px;
                                background-color: black;
                                padding: 10px;" class="fa fa-user img-circle"></i>
                                </span>
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="clear">
                                        <span class="block m-t-xs">
                                            <strong class="font-bold"><?php echo $_SESSION['username']; ?></strong>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="logo-element">
                           H-C
                            </div>
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-list"></i> <span class="nav-label">Inicio</span></a>
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Administrar</span> <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="rooms.php">Hábitaciones</a></li>
                                <li class="active"><a href="guests.php">Huespedes</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="checkin.php"><i class="fa fa-desktop"></i> <span class="nav-label">Check-In</span></a>
                        </li>
                        <li class="active">
                            <a href="expenses.php"><i class="fa fa-edit"></i> <span class="nav-label">Gastos</span></a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div id="page-wrapper" class="gray-bg dashbard-1">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <a href="login.php">
                                    <i class="fa fa-sign-out"></i> Cerrar sesión
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="wrapper wrapper-content">
                    <div class="row">
                        <form action="" method="post" class="form-horizontal" autocomplete="off">

                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Huespedes en hotel</h5>

                                </div>
                                <div class="ibox-content">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Codigo de huesped</th>
                                            <th>Nombre de huesped</th>
                                            <th>Codigo de habitación</th>
                                            <th>Descripción de habitación</th>
                                            <th>Total Parcial</th>
                                            <th>Fecha Check-In</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                                session_start();
                                                include_once "conexion.php"; 
                                                
                                                
                                                    $sql = "SELECT id, codigohuesped, nombrehuesped, codigohabitacion, descripcionhabitacion, total, arrivedate  FROM checkins";
                                                    $result = mysql_query($sql);
                                                
                                                    if (mysql_num_rows($result) > 0) {
                                                        // output data of each row
                                                        while($row = mysql_fetch_assoc($result)) {
                                                            echo "<tr>
                                                                    <td>".$row["codigohuesped"]."</td>
                                                                    <td>".$row["nombrehuesped"]."</td>
                                                                    <td>".$row["codigohabitacion"]."</td>
                                                                    <td>".$row["descripcionhabitacion"]."</td>
                                                                    <td>".$row["total"]."</td>
                                                                    <td>".$row["arrivedate"]."</td>
                                                                    <td style='width: 100px;'><button  type='button' onclick='SetIdRoom(".$row["id"]."); return false;' class='btn btn-w-m btn-primary'>Agregar consumo</button></td>
                                                                </tr>";
                                                        }
                                                    }  
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Productos consumidos</h5>
                                </div>
                                <div class="ibox-content">
                                    <form action="" method="post" class="form-horizontal" autocomplete="off">
                                        <input type="hidden" id="HDId" name="HDId" value="<?php echo $id; ?>" />

                                        <div class="form-group"><label class="col-sm-2 control-label">Producto</label>
                                            <div class="col-sm-10"><input name="product" type="text" class="form-control" required=""></div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Costo $</label>
                                            <div class="col-sm-10"><input name="cost" type="text" class="form-control" required=""></div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-offset-2">
                                                <!--<button class="btn btn-white" type="submit">Limpiar</button>-->
                                                <button class="btn btn-primary" name="expense" type="submit">Guardar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                 
            </div>
        </div>
        <!-- Mainly scripts -->
        <script src="js/jquery-2.1.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <!-- Flot -->
        <script src="js/plugins/flot/jquery.flot.js"></script>
        <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="js/plugins/flot/jquery.flot.spline.js"></script>
        <script src="js/plugins/flot/jquery.flot.resize.js"></script>
        <script src="js/plugins/flot/jquery.flot.pie.js"></script>
        <!-- Peity -->
        <script src="js/plugins/peity/jquery.peity.min.js"></script>
        <script src="js/demo/peity-demo.js"></script>
        <!-- Custom and plugin javascript -->
        <script src="js/inspinia.js"></script>
        <script src="js/plugins/pace/pace.min.js"></script>
        <!-- jQuery UI -->
        <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- GITTER -->
        <script src="js/plugins/gritter/jquery.gritter.min.js"></script>
        <!-- Sparkline -->
        <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- Sparkline demo data  -->
        <script src="js/demo/sparkline-demo.js"></script>
        <!-- ChartJS-->
        <script src="js/plugins/chartJs/Chart.min.js"></script>
        <!-- Toastr -->
        <script src="js/plugins/toastr/toastr.min.js"></script>


    </body>
</html>


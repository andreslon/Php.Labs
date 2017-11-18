<!DOCTYPE html>
<html lang="es">
    <head>
        <?php
            
            session_start();
        ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Examen 2</title>

        <!-- Add to homescreen for Chrome on Android -->
        <meta name="mobile-web-app-capable" content="yes">
        <link rel="icon" sizes="192x192" href="images/android-desktop.png">

        <!-- Add to homescreen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="Material Design Lite">
        <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

        <!-- Tile icon for Win8 (144x144 + tile color) -->
        <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
        <meta name="msapplication-TileColor" content="#3372DF">

        <link rel="shortcut icon" href="images/favicon.png">

        <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
                    <!--
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <link rel="canonical" href="http://www.example.com/">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="material.min.css">
        <link rel="stylesheet" href="styles.css">
        <style>
            #view-source {
              position: fixed;
              display: block;
              right: 0;
              bottom: 0;
              margin-right: 40px;
              margin-bottom: 40px;
              z-index: 900;
            }
            fieldset {
                     border: double;
            }
            
            .mytable tr td {
                padding: 10px
            }
            h6 {
                 padding: 0px
            }
            
            
            
        </style>
    </head>
    <body>
        <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
            <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
                <div class="mdl-layout__header-row">
                    <span class="mdl-layout-title">Examen 2. Electiva II</span>
                    <div class="mdl-layout-spacer"></div>

                </div>
            </header>
            <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
                <header class="demo-drawer-header">
                    <b>Created by:</b>
                    <div class="demo-avatar-dropdown">
                        <span>Andrés Londoño</span>
                        <br />
                        <span>Stefania Ospina</span>
                    </div>
                </header>
                <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
                    <a class="mdl-navigation__link" href="#ejercicio1"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>1° Ejercicio </a>
                    <a class="mdl-navigation__link" href="#ejercicio2"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>2° Ejercicio</a>
                </nav>
            </div>
            <main class="mdl-layout__content mdl-color--grey-100">
                <div class="mdl-grid demo-content" id="ejercicio1">
                    <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                        <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                            <h2 class="mdl-card__title-text">1. Ejercicio</h2>
                        </div>
                        <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                            <form autocomplete="off" method="post" action="index.php#ejercicio1">
                                <?php
                                    
                                    
                                    session_start();
                                    
                                         $countries = array(
                                            array('1', 'Estados Unidos', 0.13),
                                            array('2', 'Canada', 0.11),
                                            array('5', 'America del sur',0.22),
                                            array('6', 'America central', 0.19),
                                            array('7', 'Mexico', 0.17),
                                            array('9', 'Europa', 0.17),
                                            array('10', 'Asia', 0.20),
                                            array('15', 'Africa', 0.39),
                                            array('20', 'Oceania', 0.28)
                                         );
                                    
                                       $paisesArchivo = "countries.txt";
                                    
                                       if(!file_exists($paisesArchivo)){
                                                $_SESSION['archivo'] =  fopen($paisesArchivo, "a");
                                                fwrite($_SESSION['archivo'],serialize($countries));
                                                fclose($_SESSION['archivo']);
                                                //echo "<script> alert('Se han ingreado los datos'); </script>"; 
                                       }
                                        $countriesSer= fgets(fopen($paisesArchivo, "r"));
                                        $countriesDes= unserialize($countriesSer);
                                    
                                               echo "<table class='mytable' border='1' style='text-align: center'>";
                                                    for ($row = 0; $row < 9; $row++) {
                                                      echo "<tr>";
                                                      for ($col = 0; $col < 3; $col++) {
                                                           echo "<td>".$countriesDes[$row][$col]."</td>"; 
                                                      }
                                                      echo "</tr>";
                                                    } 
                                                echo "</table>"; 
                                     if (isset($_POST['submitCalcularLlamada'])){
                                              $claveInput=$_POST['claveInput']; 
                                              $duracionInput=$_POST['duracionInput']; 
                                              $precioLlamada=0;
                                    
                                              for ($row = 0; $row < 9; $row++) {
                                                       if($countriesDes[$row][0]==$claveInput){
                                                              $precioLlamada=$countriesDes[$row][2];
                                                          } 
                                                    }
                                                    if($precioLlamada==0){
                                                        $GLOBALS['resLlamada']="La clave del país no existe. "; 
                                                    }else{
                                                        $GLOBALS['resLlamada']="El costo de la llamada es: ".($precioLlamada*$duracionInput); 
                                                        $llamadasArchivo = "Llamadas.txt"; 
                                                       $_SESSION['archivoR'] =  fopen($llamadasArchivo, "a");
                                                       fwrite($_SESSION['archivoR'],$GLOBALS['resLlamada']."\r\n");
                                                       fclose($_SESSION['archivoR']); 
                                                    }
                                    
                                    
                                      }
                                ?>
                                <table>
                                    <tbody>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Clave de país:</td>
                                        <td>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="claveInput">
                                                <label class="mdl-textfield__label" for="claveInput"></label>
                                                <span class="mdl-textfield__error">El valor no es númerico</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Duración de la llamada:</td>
                                        <td>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="duracionInput">
                                                <label class="mdl-textfield__label" for="duracionInput"></label>
                                                <span class="mdl-textfield__error">El valor no es númerico</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h2> <?php echo $GLOBALS["resLlamada"];?></h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input type="submit" value="Calcular valor de la llamada" name="submitCalcularLlamada" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" />
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>


                            </form>
                        </div>
                    </div>
                </div>
                <div class="mdl-grid demo-content" id="ejercicio2">
                    <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                        <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                            <h2 class="mdl-card__title-text">2. Ejercicio</h2>
                        </div>
                        <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                            <form autocomplete="off" method="post" action="index.php#ejercicio2">


                                <?php
                                    
                                    
                                    session_start();
                                    
                                         $empleados = array(
                                            array('111', 'Andres Londoño', 'Arquitecto de software', 2000000),
                                            array('222', 'Stefania ospina', 'Gerente de Operaciones',600000),
                                            array('333', 'Alejandro Uribe ','Investigador de operaciones',1800000),
                                            array('444', 'Elsa Capunta', 'Analista de cartera',1500000)
                                         );
                                    
                                       $empleadosArchivo = "empleados.txt"; 
                                       if(!file_exists($empleadosArchivo)){
                                                $_SESSION['empleadosArchivo'] =  fopen($empleadosArchivo, "a");
                                                fwrite($_SESSION['empleadosArchivo'],serialize($empleados));
                                                fclose($_SESSION['empleadosArchivo']); 
                                       }
                                        $empleadosSer= fgets(fopen($empleadosArchivo, "r"));
                                        $empleadosDes= unserialize($empleadosSer); 
                                    
                                               echo "<table class='mytable' border='1' style='text-align: center'>";
                                                    for ($row = 0; $row < 4; $row++) {
                                                      echo "<tr>";
                                                      for ($col = 0; $col < 4; $col++) {
                                                           echo "<td>".$empleadosDes[$row][$col]."</td>"; 
                                                      }
                                                      echo "</tr>";
                                                    } 
                                                echo "</table>"; 
                                     if (isset($_POST['submitCalcularEmpleado'])){
                                              $codigoInput=$_POST['codigoInput']; 
                                              $horasInput=$_POST['horasInput']; 
                                              $valorhoraextraInput=$_POST['valorhoraextraInput']; 
                                    
                                              $Nombre="";
                                              $Salario=0;
                                              $AuxTransporte=0;
                                              $SaludPension=0;
                                              $TotalPagado=0;
                                              $FechaNomina=date("d-m-Y H:i:s");
                                    
                                              for ($row = 0; $row < 4; $row++) {
                                                       if($empleadosDes[$row][0]==$codigoInput){
                                                              $Nombre=$empleadosDes[$row][1];
                                                              $Salario=$empleadosDes[$row][3];
                                                          } 
                                                    }
                                    
                                    
                                                    if($Salario==0){
                                                        $GLOBALS['resNomina']="El empleado no existe. "; 
                                                    }else{
                                    
                                                        if($Salario<=737717){
                                                            $AuxTransporte=83140;
                                                        }
                                    
                                                        $totalhorasextras=$horasInput*$valorhoraextraInput;
                                                        $SaludPension= $Salario * 0.08;
                                    
                                                        $TotalPagado=$Salario+$AuxTransporte+$totalhorasextras-$SaludPension;
                                    
                                                        $GLOBALS['resNomina']="El total de la nomina es: ".$TotalPagado; 
                                    
                                                        $data= 'Codigo: '.$codigoInput.',Nombre: '.$Nombre.',Salario: '.$Salario.',Auxilio de transporte: '.$AuxTransporte.',Horas Extras: '.$horasInput.',Valor Hora Extra: '.$valorhoraextraInput.',Deducciones: '.$SaludPension.',Total Pagado: '.$TotalPagado.',Fecha: '.$FechaNomina;
                                    
                                                        $NominaArchivo = "Nomina.txt";  
                                                       $_SESSION['NominaArchivo'] =  fopen($NominaArchivo, "a");
                                                       fwrite($_SESSION['NominaArchivo'],$data."\r\n");
                                                       fclose($_SESSION['NominaArchivo']); 
                                                    }
                                      }
                                ?>
                                <table>
                                    <tbody>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Código empleado:</td>
                                        <td>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="codigoInput">
                                                <label class="mdl-textfield__label" for="codigoInput"></label>
                                                <span class="mdl-textfield__error">El valor no es númerico</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Cantidad de horas extras trabajadas:</td>
                                        <td>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="horasInput">
                                                <label class="mdl-textfield__label" for="horasInput"></label>
                                                <span class="mdl-textfield__error">El valor no es númerico</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Valor hora extra:</td>
                                        <td>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="valorhoraextraInput">
                                                <label class="mdl-textfield__label" for="valorhoraextraInput"></label>
                                                <span class="mdl-textfield__error">El valor no es númerico</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h2> <?php echo $GLOBALS["resNomina"];?></h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input type="submit" value="Calcular nómina" name="submitCalcularEmpleado" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" />
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>

                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>


        <script src="material.min.js"></script>
    </body>
</html>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Taller 1</title>

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
        </style>
    </head>
    <body>
        <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
            <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
                <div class="mdl-layout__header-row">
                    <span class="mdl-layout-title">Taller 2. Electiva II</span>
                    <div class="mdl-layout-spacer"></div>

                </div>
            </header>
            <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
                <header class="demo-drawer-header">
                    <b>Created by:</b>
                    <div class="demo-avatar-dropdown">
                        <span>Andrés Londoño</span>
                        <br />
                    </div>
                </header>
                <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
                    <a class="mdl-navigation__link" href="#ejercicio1"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>Liquidación Nomina</a>
                </nav>
            </div>
            <main class="mdl-layout__content mdl-color--grey-100">
                <div class="mdl-grid demo-content" id="ejercicio1">

                    <form autocomplete="off" method="post" action="index.php">
                        <?php
                            
                            $Empleados = array
                              (
                              array("111","Andres Londoño",5000000),
                              array("222","Felipe Mesa",2000000),
                              array("333","Juan Esteban Rojas",1500000),
                              array("444","Carlos Piedrahita",2500000)
                              );

                               
                            
                                   for ($row = 0; $row < 4; $row++) { 
                                       if($Empleados[$row][0]==$_POST['codigoInput']){
                                           $resBuscar="";
                                           $GLOBALS["resCodigo"] = $Empleados[$row][0];  
                                           $resNombre= $Empleados[$row][1];  
                                           $resSalario= $Empleados[$row][2];  
                                       } 
                                    } 


                              if (isset($_POST['submitBuscar'])) {
                                      
                               }else  if (isset($_POST['submitCalcular1'])) {
                                  $resCalcular1= "Error calculo" ; 
                            }else if (isset($_POST['submitCalcular2'])) {
                                  $resCalcular2= "Error calculo" ; 
                            }
                        ?>


                        <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                            <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                                <h2 class="mdl-card__title-text">1. Ejercicio</h2>
                            </div>
                            <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                                <fieldset>
                                    <legend>DATOS EMPLEADO</legend>
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">Código</td>
                                            <td>
                                                <div class="mdl-textfield mdl-js-textfield">
                                                    <input class="mdl-textfield__input" type="text" name="codigoInput" value="<?php echo $GLOBALS["resCodigo"];?>">
                                                    <label class="mdl-textfield__label" for="codigoInput"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="submit" value="Buscar" name="submitBuscar" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <?php echo $resBuscar;?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">Nombre</td>
                                            <td colspan="2">
                                                <div class="mdl-textfield mdl-js-textfield">
                                                    <input class="mdl-textfield__input" type="text" name="nameInput" value="<?php echo $resNombre;?>">
                                                    <label class="mdl-textfield__label" for="nameInput"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">Salario base</td>
                                            <td colspan="2">
                                                <div class="mdl-textfield mdl-js-textfield">
                                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="salarioInput" value="<?php echo $resSalario;?>">
                                                    <label class="mdl-textfield__label" for="salarioInput"></label>
                                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </fieldset>
                            </div>
                            <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                                <fieldset>
                                    <legend>DEDUCCIONES</legend>
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">Salud</td>
                                            <td colspan="2">
                                                <div class="mdl-textfield mdl-js-textfield">
                                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="saludInput">
                                                    <label class="mdl-textfield__label" for="saludInput"></label>
                                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="submit" value="Buscar" name="submitCalcular1" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" />
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">Pensión</td>
                                            <td colspan="2">
                                                <div class="mdl-textfield mdl-js-textfield">
                                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="pensionInput">
                                                    <label class="mdl-textfield__label" for="pensionInput"></label>
                                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">Otros</td>
                                            <td colspan="2">
                                                <div class="mdl-textfield mdl-js-textfield">
                                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="otrosInput">
                                                    <label class="mdl-textfield__label" for="otrosInput"></label>
                                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">Total</td>
                                            <td colspan="2">
                                               $ <?php echo $resCalcular1;?>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </fieldset>
                            </div>


                            <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                                <fieldset>
                                    <legend>AUXILIOS</legend>
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">Transporte</td>
                                            <td colspan="2">
                                                <div class="mdl-textfield mdl-js-textfield">
                                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="TransporteInput">
                                                    <label class="mdl-textfield__label" for="TransporteInput"></label>
                                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="submit" value="Buscar" name="submitCalcular2" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">Otros</td>
                                            <td colspan="2">
                                                <div class="mdl-textfield mdl-js-textfield">
                                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="otros2Input">
                                                    <label class="mdl-textfield__label" for="otros2Input"></label>
                                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">Total</td>
                                            <td colspan="2">
                                               $ <?php echo $resCalcular2;?>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </main>
        </div>


        <script src="material.min.js"></script>
    </body>
</html>

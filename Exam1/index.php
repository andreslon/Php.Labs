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
            
            .mytable tr td {
                padding: 10px
            }
        </style>
    </head>
    <body>
        <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
            <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
                <div class="mdl-layout__header-row">
                    <span class="mdl-layout-title">Examen 1. Electiva II</span>
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
                    <a class="mdl-navigation__link" href="#ejercicio1"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>1) </a>
                    <a class="mdl-navigation__link" href="#ejercicio2"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>2) </a>
                    <a class="mdl-navigation__link" href="#ejercicio3"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>3) </a>
                    <a class="mdl-navigation__link" href="#ejercicio4"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>4) </a>
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
                                    
                                    $Vuelos = array  (
                                                          array("Cali",150000),
                                                          array("Medellín",195000),
                                                          array("Bogotá",180000),
                                                          array("Barranquila",230000),
                                                          array("Armenia",120000),
                                                          array("Cartagena",220000)
                                                      ); 
                                    
                                    
                                      if (isset($_POST['submitVuelos'])) { 
                                    
                                           $valorVuelo=0;
                                           $selectOption = $_POST['TravelOption'];
                                             for ($row = 0; $row < 6; $row++) {
                                                 if($selectOption==$Vuelos[$row][0]){
                                                     $valorVuelo=$Vuelos[$row][1];
                                                 }
                                            }
                                            $desVuelos=0;
                                            if($_POST['CantidadVuelosInput'] <2){
                                                $desVuelos= $valorVuelo * 0.10;
                                    
                                            }else {
                                                $desVuelos= $valorVuelo * 0.15;
                                            } 

                                            $resVuelos= ($valorVuelo* $_POST['CantidadVuelosInput']) - ($desVuelos*$_POST['CantidadVuelosInput']);
                                            $GLOBALS["resVuelos"]= "Costo total: ".$resVuelos." con un descuento de ".($desVuelos*$_POST['CantidadVuelosInput']);
                                       } 
                                ?>
                                <table>
                                    <tbody>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Vuelos</td>
                                        <td>
                                            <div class="mdl-textfield mdl-js-textfield">

                                                <select name="TravelOption" class="mdl-textfield__input">
                                                    <?php
                                                        
                                                        for ($row = 0; $row < 6; $row++) {
                                                          echo "<option value='".$Vuelos[$row][0]."'>";
                                                            echo $Vuelos[$row][0];
                                                          echo "</option>";
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Cantidad</td>
                                        <td>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="CantidadVuelosInput">
                                                <label class="mdl-textfield__label" for="CantidadVuelosInput"></label>
                                                <span class="mdl-textfield__error">El valor no es númerico</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6> <?php echo $GLOBALS["resVuelos"];?></h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input type="submit" value="Calcular Costo" name="submitVuelos" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" />
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
                                    
                                      
                                      if (isset($_POST['submitPago'])) { 
                                            $resPago=0;
                                      $ValorHora=$_POST['CostoHoraInput'];
                                      $Horas=$_POST['HorasInput'];

                                      $horasTrabajo=0;
                                      $horasExtra=0;
                                      $horasExcedente=0;
                                          if($Horas<=40){
                                              $horasTrabajo= $Horas;
                                          }else {
                                              $horasTrabajo= 40;
                                              if(($Horas-40)-40<=8){
                                                  $horasExtra= $Horas - 40;
                                              }else{
                                                  $horasExtra=8;
                                                  $horasExcedente= $Horas - 48;
                                              }
                                          }

                                           $resPago= ($horasTrabajo*$ValorHora) + ($horasExtra*(2*$ValorHora)) + ($horasExcedente*(3*$ValorHora));

                                        $resPago= "El valor total a pagar es: $ ".$resPago;
                                       } 

                                      

                                ?>
                                <table>
                                    <tbody>  
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Horas trabajadas</td>
                                        <td>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="HorasInput">
                                                <label class="mdl-textfield__label" for="HorasInput"></label>
                                                <span class="mdl-textfield__error">El valor no es númerico</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Costo Hora</td>
                                        <td>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="CostoHoraInput">
                                                <label class="mdl-textfield__label" for="CostoHoraInput"></label>
                                                <span class="mdl-textfield__error">El valor no es númerico</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6> <?php echo $GLOBALS["resPago"];?></h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input type="submit" value="Calcular Costo" name="submitPago" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" />
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>



                <div class="mdl-grid demo-content" id="ejercicio3">
                    <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                        <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                            <h2 class="mdl-card__title-text">3. Ejercicio</h2>
                        </div>
                        <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                            <form autocomplete="off" method="post" action="index.php#ejercicio3">
                                <?php
                                    
                                    $categorias = array  (
                                                          array("Categoria 1: 5 - 14",0.35),
                                                          array("Categoria 2: 15 - 19",0.25),
                                                          array("Categoria 3: 20 - 45",0.10),
                                                          array("Categoria 4: 46 - 65",0.25),
                                                          array("Categoria 5: 66 en adelante",0.35),
                                                      );  
                                    
                                      if (isset($_POST['submitTeatro'])) { 
                                    
                                           $descTeatro=0;
                                           $selectOption = $_POST['CategoriaOption'];
                                             for ($row = 0; $row < 6; $row++) {
                                                 if($selectOption==$categorias[$row][0]){
                                                     $descTeatro=$categorias[$row][1];
                                                 }
                                            }
                                            $descTeatro= $_POST['CostoTeatroInput'] * $descTeatro;
                                            $GLOBALS["resTeatro"]="El descuento realizado fue de ".$descTeatro; 
                                       } 
                                ?>
                                <table>
                                    <tbody>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Categoria</td>
                                        <td>
                                            <div class="mdl-textfield mdl-js-textfield">

                                                <select name="CategoriaOption" class="mdl-textfield__input">
                                                    <?php
                                                        
                                                        for ($row = 0; $row < 6; $row++) {
                                                          echo "<option value='".$categorias[$row][0]."'>";
                                                            echo $categorias[$row][0];
                                                          echo "</option>";
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Costro Entrada</td>
                                        <td>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="CostoTeatroInput">
                                                <label class="mdl-textfield__label" for="CostoTeatroInput"></label>
                                                <span class="mdl-textfield__error">El valor no es númerico</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6> <?php echo $GLOBALS["resTeatro"];?></h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input type="submit" value="Calcular Costo" name="submitTeatro" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" />
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="mdl-grid demo-content" id="ejercicio4">
                    <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                        <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                            <h2 class="mdl-card__title-text">4. Ejercicio</h2>
                        </div>
                        <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                            <form autocomplete="off" method="post" action="index.php#ejercicio4">
                                <?php
                                    
                                    if (isset($_POST['submitTabla'])) { 
                                            if($_POST['CantidadFilasInput']!= $_POST['CantidadColumnasInput']){
                                                $GLOBALS["resTabla"]="La cantidad de filas y columnas deben coincidir";
                                            }else{
                                                $num=0;
                                               echo "<table class='mytable' border='1' style='text-align: center'>";
                                                    for ($row = 0; $row < $_POST['CantidadFilasInput']; $row++) {
                                                      echo "<tr>";
                                                      for ($col = 0; $col < $_POST['CantidadColumnasInput']; $col++) {
                                                          if($row==$col || $col+$row==$_POST['CantidadColumnasInput']-1){
                                                              echo "<td style='background-color: #000'>".$num."</td>";
                                                          }else{
                                                              echo "<td>".$num."</td>";
                                                          }
                                    
                                                        $num++;
                                                      }
                                                      echo "</tr>";
                                                    } 
                                                echo "</table>";
                                            } 
                                       }    
                                ?>
                                <table>
                                    <tbody>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Cantidad Filas</td>
                                        <td>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="CantidadFilasInput">
                                                <label class="mdl-textfield__label" for="CantidadFilasInput"></label>
                                                <span class="mdl-textfield__error">El valor no es númerico</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Cantidad Columnas</td>
                                        <td>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="CantidadColumnasInput">
                                                <label class="mdl-textfield__label" for="CantidadColumnasInput"></label>
                                                <span class="mdl-textfield__error">El valor no es númerico</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6> <?php echo $GLOBALS["resTabla"];?></h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input type="submit" value="Generar tabla" name="submitTabla" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" />
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

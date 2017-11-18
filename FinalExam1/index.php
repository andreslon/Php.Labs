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
        <title>Parcial 1</title>

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
                    <span class="mdl-layout-title">Parcial 1. Electiva II</span>
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
                    <a class="mdl-navigation__link" href="#ejercicio1"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>7) </a>
                    <a class="mdl-navigation__link" href="#ejercicio2"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>8) </a>
                    <a class="mdl-navigation__link" href="#ejercicio3"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>9) </a>
                </nav>
            </div>
            <main class="mdl-layout__content mdl-color--grey-100">
                <div class="mdl-grid demo-content" id="ejercicio1">
                    <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                        <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                            <h2 class="mdl-card__title-text">7. Ejercicio</h2>
                        </div>
                        <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                            <form autocomplete="off" method="post" action="index.php#ejercicio1">
                                <?php
                                    
                                    
                                         $ciudad = array('Cali', 'Medellin', 'Bogota');
                                         $TipoDeArbol = array('Pino', 'Oyamel', 'Cedro');
                                    
                                     if (isset($_POST['submitbosque'])){
                                        $Hectareas=$_POST['hecInput'];
                                             $metros= ($Hectareas * 10000);
                                    
                                           if($metros>1000000) {
                                    
                                              $pinos= ($metros*70)/100;
                                              $oyamel= ($metros*20)/100;
                                              $cedros= ($metros *10)/100;
                                    
                                         } else {
                                    
                                          $pinos= ($metros *50)/100;
                                          $oyamel= ($metros *30)/100;
                                          $cedros= ($metros *20)/100;
                                    
                                    }
                                        $GLOBALS['pinos'] = round(($pinos * 8 )/10);
                                        $GLOBALS['oyamel']= round(($oyamel * 15)/15);
                                        $GLOBALS['cedros']= round(($cedros * 10)/18);
                                        $GLOBALS['total']= $GLOBALS['pinos']+$GLOBALS['oyamel']+$GLOBALS['cedros'];
                                    
                                      }
                                ?>
                                <table>
                                    <tbody>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Número de hectareas</td>
                                        <td>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="hecInput">
                                                <label class="mdl-textfield__label" for="hecInput"></label>
                                                <span class="mdl-textfield__error">El valor no es númerico</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6>Cantidad de pinos: <?php echo $GLOBALS["pinos"];?></h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6>Cantidad de Oyamel: <?php echo $GLOBALS["oyamel"];?></h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6>Cantidad de Cedros <?php echo $GLOBALS["cedros"];?></h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6>Total del sembrado: <?php echo $GLOBALS["total"];?></h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input type="submit" value="Calcular" name="submitbosque" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" />
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
                            <h2 class="mdl-card__title-text">8. Ejercicio</h2>
                        </div>
                        <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                            <form autocomplete="off" method="post" action="index.php#ejercicio2">
                                <?php
                                    
                                    
                                                    $baraja1 = array("2","3","4","5","6","7","8","9","10","J","Q","K","A");  
                                                    $baraja2 = array("2","J","Q","K","A","3","4","5","6","7","8","9","10"); 
                                                    $baraja3 = array("2","10","J","Q","3","4","5","6","7","8","9","K","A");
                                                    $baraja4 = array("2","3","4","8","Q","K","A","9","5","6","7","10","J");
                                                    $barajas= array($baraja1,$baraja2,$baraja3,$baraja4 );
                                     
                                                if (isset($_POST['submitJugar'])) {  
                                                    $cart1=$barajas[0][$_POST['Pos1Input']-1];
                                                    $cart2=$barajas[1][$_POST['Pos2Input']-1];
                                                    $cart3=$barajas[2][$_POST['Pos3Input']-1];
                                                    $cart4=$barajas[3][$_POST['Pos4Input']-1];  
                                                    if($cart1==$cart2 && $cart2==$cart3 && $cart3==$cart4){
                                                        $GLOBALS["resbaraja"]="Usted GANÓ";
                                                    }else{
                                                        $GLOBALS["resbaraja"]="Usted PERDIÓ";
                                                    } 
                                                 }      
                                ?>
                                <table>
                                    <thead>
                                    Por favor ingresa la posición de las cartas de la baraja(1 a 13):
                                    </thead>

                                    <tbody>

                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Posición baraja Corazones: </td>
                                        <td>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="Pos1Input">
                                                <label class="mdl-textfield__label" for="Pos1Input"></label>
                                                <span class="mdl-textfield__error">El valor no es númerico</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div style="border: 1px solid black; width: 35px; height: 60px; text-align: center">
                                                <h3 style="padding: 0px; margin: 0 auto"><?php echo $cart1 ?></h3>
                                                ♥
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>

                                        <td class="mdl-data-table__cell--non-numeric">Posición baraja picas: </td>
                                        <td>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="Pos2Input">
                                                <label class="mdl-textfield__label" for="Pos2Input"></label>
                                                <span class="mdl-textfield__error">El valor no es númerico</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div style="border: 1px solid black; width: 35px; height: 60px; text-align: center">
                                                <h3 style="padding: 0px; margin: 0 auto"><?php echo $cart2 ?></h3>
                                                ♠
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Posición baraja trebol: </td>
                                        <td>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="Pos3Input">
                                                <label class="mdl-textfield__label" for="Pos3Input"></label>
                                                <span class="mdl-textfield__error">El valor no es númerico</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div style="border: 1px solid black; width: 35px; height: 60px; text-align: center">
                                                <h3 style="padding: 0px; margin: 0 auto"><?php echo $cart3 ?></h3>
                                                ♣
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Posición baraja diamante: </td>
                                        <td>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="Pos4Input">
                                                <label class="mdl-textfield__label" for="Pos4Input"></label>
                                                <span class="mdl-textfield__error">El valor no es númerico</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div style="border: 1px solid black; width: 35px; height: 60px; text-align: center">
                                                <h3 style="padding: 0px; margin: 0 auto"><?php echo $cart4 ?></h3>
                                                ♦
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h2> <?php echo $GLOBALS["resbaraja"];?></h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input type="submit" value="Jugar" name="submitJugar" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" />
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
                            <h2 class="mdl-card__title-text">9. Ejercicio</h2>
                        </div>
                        <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                            <form autocomplete="off" method="post" action="index.php#ejercicio3">
                                <?php
                                    
                                    $partidario = array  (0,5,200,1,1000,0,600,50,300,4);  
                                     
                                    $GLOBALS["respartidario"]="No Es partidario";
                                    $valid=TRUE;
                                    for($i=0; $i<count($partidario); $i++){ 
                                        //si es par
					                    if($i % 2 == 0 ) {
                                               for($j=0; $j<count($partidario); $j++){
                                                   //si es impar  && el par es menor
                                                   if($j % 2 != 0 && $partidario[$i]<$partidario[$j]){
                                                       //no es partidario
                                                       $valid=FALSE;
                                                       break;
                                                   }
                                               }
                                               if(!$valid){
                                                   break;
                                               }
	   				                         $GLOBALS["respartidario"]="Es partidario";
	 					                 }   			
	   			                    }
                                     
                                    echo "<table class='mytable' border='1' style='text-align: center'>";
                                                    echo "<tr>";
                                                      for ($col = 0; $col < count($partidario); $col++) {
                                                           
                                                              echo "<td>".$partidario[$col]."</td>"; 
                                    
                                                        $num++;
                                                      }
                                                      echo "</tr>";
                                                echo "</table>";


                                ?>
                                <h2> <?php echo $GLOBALS["respartidario"];?></h2>

                            </form>
                        </div>
                    </div>
                </div>

                 
            </main>
        </div>


        <script src="material.min.js"></script>
    </body>
</html>

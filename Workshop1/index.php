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
        </style>
    </head>
    <body>
        <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
            <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
                <div class="mdl-layout__header-row">
                    <span class="mdl-layout-title">Taller 1. Electiva II</span>
                    <div class="mdl-layout-spacer"></div>

                </div>
            </header>
            <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
                <header class="demo-drawer-header">
                    <b>Created by:</b>
                    <div class="demo-avatar-dropdown">
                        <span>Andrés Londoño</span>
                        <br/>
                        <span>Stefania Ospina</span> 
                    </div>
                </header>
                <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
                    <a class="mdl-navigation__link" href="#ejercicio1"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>Ejercicio 1</a>
                    <a class="mdl-navigation__link" href="#ejercicio2"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>Ejercicio 2</a>
                    <a class="mdl-navigation__link" href="#ejercicio3"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>Ejercicio 3</a>
                    <a class="mdl-navigation__link" href="#ejercicio4"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>Ejercicio 4</a>
                    <a class="mdl-navigation__link" href="#ejercicio5"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>Ejercicio 5</a>
                    <a class="mdl-navigation__link" href="#ejercicio6"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>Ejercicio 6</a>
                    <a class="mdl-navigation__link" href="#ejercicio7"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>Ejercicio 7</a>
                    <a class="mdl-navigation__link" href="#ejercicio8"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>Ejercicio 8</a>
                    <a class="mdl-navigation__link" href="#ejercicio9"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>Ejercicio 9</a>
                    <a class="mdl-navigation__link" href="#ejercicio10"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>Ejercicio 10</a>
                    <a class="mdl-navigation__link" href="#ejercicio11"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>Ejercicio 11</a>
                    <a class="mdl-navigation__link" href="#ejercicio12"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>Ejercicio 12</a>
                </nav>
            </div>
            <main class="mdl-layout__content mdl-color--grey-100">
                <div class="mdl-grid demo-content">


                    <form autocomplete="off" method="post" action="index.php#ejercicio1" id="ejercicio1">
                        <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                            <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                                <h2 class="mdl-card__title-text">1. Ejercicio</h2>
                            </div>
                            <div class="mdl-card__supporting-text mdl-color-text--grey-600">

                                <p>En un hospital existen tres áreas: Ginecología, Pediatría, Traumatología. El
                                                presupuesto anual del hospital se reparte conforme a la siguiente tabla:
                                                Área Porcentaje del presupuesto
                                                Ginecología 40%
                                                Traumatología 30%
                                                Pediatría 30%
                                                Obtener la cantidad de dinero que recibirá cada área, para X monto
                                                presupuestal.</p>
                                <!-- Numeric Textfield -->
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje1input">
                                    <label class="mdl-textfield__label" for="eje1input">Monto presupuestal</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>
                                <?php
                                    $eje1res1="0";
                                    $eje1res2="0";
                                    $eje1res3="0";
                                    if (isset($_POST['submitEjercicio1'])) { 
                                          $eje1res1= (40 * $_POST['eje1input']) /100 ; 
                                          $eje1res2= (30 * $_POST['eje1input']) /100 ; 
                                          $eje1res3= (30 * $_POST['eje1input']) /100 ; 
                                    } 
                                ?>
                                <table class="mdl-data-table mdl-js-data-table">
                                    <thead>
                                    <tr>
                                        <th class="mdl-data-table__cell--non-numeric">Área</th>
                                        <th>% Presupuesto</th>
                                        <th><b>Dinero recibido</b></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Ginecología</td>
                                        <td>40 %</td>
                                        <td><?php echo $eje1res1;?></td>
                                    </tr>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Traumatología</td>
                                        <td>30 %</td>
                                        <td><?php echo $eje1res2;?></td>
                                    </tr>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Pediatría</td>
                                        <td>30 %</td>
                                        <td><?php echo $eje1res3;?></td>
                                    </tr>
            </tbody>
                                </table>
                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <!-- Colored raised button -->
                                <input type="submit" value="Calcular" name="submitEjercicio1" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" />
                            </div>
                        </div>
                    </form>



                    <form autocomplete="off" method="post" action="index.php#ejercicio2" id="ejercicio2">
                        <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                            <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                                <h2 class="mdl-card__title-text">2. Ejercicio</h2>
                            </div>
                            <div class="mdl-card__supporting-text mdl-color-text--grey-600">

                                <p>
                                El dueño de una tienda compra un artículo a un precio determinado.
                                    Obtener el precio en que lo debe vender para obtener una ganancia del 30%.
                                </p>

                                <!-- Numeric Textfield -->
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje2input">
                                    <label class="mdl-textfield__label" for="eje2input">Precio de compra</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>

                                <?php
                                    $eje2res1="0";
                                    if (isset($_POST['submitEjercicio2'])) { 
                                          $eje2res1= ((30 * $_POST['eje2input']) /100) + $_POST['eje2input'] ; 
                                    } 
                                ?>
                                <h6>El precio de venta recomendado es de : $ <?php echo $eje2res1; ?> </h6>

                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <!-- Colored raised button -->
                                <input type="submit" value="Calcular" name="submitEjercicio2" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" />
                            </div>
                        </div>
                    </form>

                    <form autocomplete="off" method="post" action="index.php#ejercicio3" id="ejercicio3">
                        <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                            <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                                <h2 class="mdl-card__title-text">3. Ejercicio</h2>
                            </div>
                            <div class="mdl-card__supporting-text mdl-color-text--grey-600">

                                <p>
                                Todos los lunes, miércoles y viernes, una persona corre la misma ruta y
cronometra los tiempos obtenidos. Determinar el tiempo promedio que la
persona tarda en recorrer la ruta en una semana cualquiera.
                                </p>


                                <!-- Numeric Textfield -->
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje3input1">
                                    <label class="mdl-textfield__label" for="eje3input1">Tiempo Lunes en minutos</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje3input2">
                                    <label class="mdl-textfield__label" for="eje3input2">Tiempo Miércoles en minutos</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje3input3">
                                    <label class="mdl-textfield__label" for="eje3input3">Tiempo Viernes en minutos</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>

                                <?php
                                    $eje3res1="0";
                                    if (isset($_POST['submitEjercicio3'])) { 
                                          $eje3res1= ($_POST['eje3input1'] + $_POST['eje3input2'] + $_POST['eje3input3']) /3; 
                                    } 
                                ?>
                                <h6>El tiempo promedio de recorrido de la ruta es :  <?php echo $eje3res1; ?> minutos</h6>


                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <!-- Colored raised button -->
                                <input type="submit" value="Calcular" name="submitEjercicio3" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" />
                            </div>
                        </div>
                    </form>

                    <form autocomplete="off" method="post" action="index.php#ejercicio4" id="ejercicio4">
                        <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                            <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                                <h2 class="mdl-card__title-text">4. Ejercicio</h2>
                            </div>
                            <div class="mdl-card__supporting-text mdl-color-text--grey-600">

                                <p>
                               Tres personas deciden invertir su dinero para fundar una empresa. Cada
una de ellas invierte una cantidad distinta. Obtener el porcentaje que cada
quien invierte con respecto a la cantidad total invertida.
                                </p>


                                <!-- Numeric Textfield -->
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje4input1">
                                    <label class="mdl-textfield__label" for="eje4input1">Total dinero de persona 1</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje4input2">
                                    <label class="mdl-textfield__label" for="eje4input2">Total dinero de persona 2</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje4input3">
                                    <label class="mdl-textfield__label" for="eje4input3">Total dinero de persona 3</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>

                                <?php
                                    $eje4res1="0";
                                    $eje4res2="0";
                                    $eje4res3="0";
                                    $eje4sum="0";
                                    if (isset($_POST['submitEjercicio4'])) { 
                                          $eje4sum= $_POST['eje4input1'] + $_POST['eje4input2'] + $_POST['eje4input3']; 
                                          $eje4res1=( $_POST['eje4input1'] * 100 )/$eje4sum;
                                          $eje4res2=( $_POST['eje4input2'] * 100 )/$eje4sum;
                                          $eje4res3=( $_POST['eje4input3'] * 100 )/$eje4sum;
                                    } 
                                ?>
                                <table class="mdl-data-table mdl-js-data-table">

                                    <tbody>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Persona 1
                                        </td>
                                        <td><?php echo $eje4res1;?></td>
                                    </tr>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Persona 2
                                        </td>
                                        <td><?php echo $eje4res2;?></td>
                                    </tr>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Persona 3
                                        </td>
                                        <td><?php echo $eje4res3;?></td>
                                    </tr>
                                     </tbody>
                                </table>


                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <!-- Colored raised button -->
                                <input type="submit" value="Calcular" name="submitEjercicio4" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" />
                            </div>
                        </div>
                    </form>



                    <form autocomplete="off" method="post" action="index.php#ejercicio5" id="ejercicio5">
                        <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                            <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                                <h2 class="mdl-card__title-text">5. Ejercicio</h2>
                            </div>
                            <div class="mdl-card__supporting-text mdl-color-text--grey-600">

                                <p>
                               Un alumno desea saber cuál será su promedio general en las tres materias
más difíciles que cursa y cuál será el promedio que obtendrá en cada una
de ellas.
                                    <br /> <br />
La calificación de Matemáticas se obtiene de la siguiente manera: <br />
Examen 90% <br />
Promedio de tareas 10% <br />
En esta materia se pidió un total de tres tareas. <br /> <br />


La calificación de Física se obtiene de la siguiente manera: <br />
Examen 80% <br />
Promedio de tareas 20% <br />
En esta materia se pidió un total de dos tareas. <br /> <br />

La calificación de Química se obtiene de la siguiente manera: <br />
Examen 85% <br />
Promedio de tareas 15% <br />
En esta materia se pidió un promedio de tres tareas. <br />
                                </p>


                                <h6>Matemáticas</h6>
                                <!-- Numeric Textfield -->
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje5input1">
                                    <label class="mdl-textfield__label" for="eje5input1">Calificación Examen</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje5input2">
                                    <label class="mdl-textfield__label" for="eje5input2">Calificación tarea 1</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje5input3">
                                    <label class="mdl-textfield__label" for="eje5input3">Calificación tarea 2</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje5input4">
                                    <label class="mdl-textfield__label" for="eje5input4">Calificación tarea 3</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>

                                <br />

                                <h6>Física</h6>
                                <!-- Numeric Textfield -->
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje5input5">
                                    <label class="mdl-textfield__label" for="eje5input5">Calificación Examen</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje5input6">
                                    <label class="mdl-textfield__label" for="eje5input6">Calificación tarea 1</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje5input7">
                                    <label class="mdl-textfield__label" for="eje5input7">Calificación tarea 2</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>

                                <h6>Química</h6>
                                <!-- Numeric Textfield -->
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje5input8">
                                    <label class="mdl-textfield__label" for="eje5input8">Calificación Examen</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje5input9">
                                    <label class="mdl-textfield__label" for="eje5input9">Calificación tarea 1</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje5input10">
                                    <label class="mdl-textfield__label" for="eje5input10">Calificación tarea 2</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje5input11">
                                    <label class="mdl-textfield__label" for="eje5input11">Calificación tarea 3</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>

                                <?php
                                    
                                    $eje5res1="0";
                                    $eje5res2="0";  
                                    $eje5res3="0";
                                    $eje5res4="0";  
                                    if (isset($_POST['submitEjercicio5'])) { 
                                          $eje5res1= ($_POST['eje5input1'] * 0.9) +  (($_POST['eje5input2'] + $_POST['eje5input3'] + $_POST['eje5input4'])*0.1);
                                          $eje5res2= ($_POST['eje5input5'] * 0.8) +  (($_POST['eje5input6'] + $_POST['eje5input7'])*0.2);
                                          $eje5res3= ($_POST['eje5input8'] * 0.85) +  (($_POST['eje5input9'] + $_POST['eje5input10'] + $_POST['eje5input11'])*0.15);
                                          $eje5res4= ($eje5res1+$eje5res2+$eje5res3)/3;
                                    } 
                                ?>

                                <table class="mdl-data-table mdl-js-data-table">

                                    <tbody>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Promedio Matemáticas</td>
                                        <td><?php echo $eje5res1;?></td>
                                    </tr>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Promedio Física</td>
                                        <td><?php echo $eje5res2;?></td>
                                    </tr>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Promedio Química</td>
                                        <td><?php echo $eje5res3;?></td>
                                    </tr>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Promedio Total</td>
                                        <td><?php echo $eje5res4;?></td>
                                    </tr>

                                     </tbody>
                                </table>

                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <!-- Colored raised button -->
                                <input type="submit" value="Calcular" name="submitEjercicio5" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" />
                            </div>
                        </div>
                    </form>
                    <form autocomplete="off" method="post" action="index.php#ejercicio6" id="ejercicio6">
                        <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                            <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                                <h2 class="mdl-card__title-text">6. Ejercicio</h2>
                            </div>
                            <div class="mdl-card__supporting-text mdl-color-text--grey-600">

                                <p>
                             Un hombre desea saber cuánto dinero se genera por concepto de intereses
sobre la cantidad que tiene en inversión en el banco. El decidirá reinvertir
los intereses siempre y cuando estos excedan a $7000, y en ese caso
desea saber cuánto dinero tendrá finalmente en su cuenta.
                                </p>
                                <!-- Numeric Textfield -->
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje6input1">
                                    <label class="mdl-textfield__label" for="eje6input1">$ inversión en el banco</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje6input2">
                                    <label class="mdl-textfield__label" for="eje6input2">% intereses</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>
                                <br />
                                <?php
                                    $eje6res1="0";
                                    if (isset($_POST['submitEjercicio6'])) { 
                                        $eje6intereses= ($_POST['eje6input1'] * $_POST['eje6input2'])/100;
                                        if($eje6intereses > 7000){
                                            echo "<h6>Se recomienda reinvertir porque se exceden los $7000</h6>";
                                        }
                                           $eje6res1=$eje6intereses+ $_POST['eje6input1'];
                                    } 
                                ?>
                                <h6>Intereses a obtener :  <?php echo $eje6intereses; ?></h6>
                                <h6>Total a tener en la cuenta :  <?php echo $eje6res1; ?></h6>


                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <!-- Colored raised button -->
                                <input type="submit" value="Calcular" name="submitEjercicio6" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" />
                            </div>
                        </div>
                    </form>


                    <form autocomplete="off" method="post" action="index.php#ejercicio7" id="ejercicio7">
                        <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                            <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                                <h2 class="mdl-card__title-text">7. Ejercicio</h2>
                            </div>
                            <div class="mdl-card__supporting-text mdl-color-text--grey-600">

                                <p>
                            Una persona enferma, que pesa 70 kg, se encuentra en reposo y desea
saber cuántas calorías consume su cuerpo durante todo el tiempo que
realice una misma actividad. Las actividades que tiene permitido realizar
son únicamente dormir o estar sentado en reposo. Los datos que tiene son
que estando dormido consume 1.08 calorías por minuto y estando sentado
en reposo consume 1.66 calorías por minuto.
                                </p>
                                <!-- Numeric Textfield -->
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje7input1">
                                    <label class="mdl-textfield__label" for="eje7input1">Cantidad de actividad (Dormir)</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje7input2">
                                    <label class="mdl-textfield__label" for="eje7input1">Cantidad de actividad (Reposar)</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>
                                <br />
                                <?php
                                    $eje7res1="0";
                                    if (isset($_POST['submitEjercicio7'])) { 
                                        $eje7res1= ( $_POST['eje7input1'] * 1.08) +( $_POST['eje7input2'] * 1.66) ;
                                    
                                    } 
                                ?>
                                <h6>Cantidad de calorías consumidas :  <?php echo $eje7res1; ?></h6>


                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <!-- Colored raised button -->
                                <input type="submit" value="Calcular" name="submitEjercicio7" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" />
                            </div>
                        </div>
                    </form>

                    <form autocomplete="off" method="post" action="index.php#ejercicio8" id="ejercicio8">
                        <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                            <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                                <h2 class="mdl-card__title-text">8. Ejercicio</h2>
                            </div>
                            <div class="mdl-card__supporting-text mdl-color-text--grey-600">

                                <p>
                            Una empresa quiere hacer una compra de varias piezas de la misma clase
a una fábrica de refacciones. La empresa, dependiendo del monto total de
la compra, decidirá qué hacer para pagar al fabricante. Si el monto total de
la compra excede de $500000 la empresa tendrá la capacidad de invertir de
su propio dinero un 55% del monto de la compra, pedir prestado al banco
un 30% y el resto lo pagara solicitando un crédito al fabricante. Si el monto
total de la compra no excede de $500000 la empresa tendrá capacidad de
invertir de su propio dinero un 70% y el restante 30% lo pagara solicitando
crédito al fabricante. El fabricante cobra por concepto de intereses un 20%
sobre la cantidad que se le pague a crédito.
                                </p>
                                <!-- Numeric Textfield -->
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje8input1">
                                    <label class="mdl-textfield__label" for="eje8input1">Monto total de la compra</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>

                                <br />
                                <?php
                                    $eje8res1="0";
                                    $eje8res2="0";
                                    $eje8res3="0";
                                    $eje8res4="0";
                                    if (isset($_POST['submitEjercicio8'])) { 
                                        if($_POST['eje8input1']>500000){
                                            $eje8res1=$_POST['eje8input1'] * 0.55;
                                            $eje8res2=$_POST['eje8input1'] * 0.30;
                                            $eje8res3=$_POST['eje8input1'] * 0.15;
                                        }else{
                                            $eje8res1=$_POST['eje8input1'] * 0.70;
                                            $eje8res2=$_POST['eje8input1'] * 0.30;
                                        }
                                        $eje8res4=$_POST['eje8input1'] * 0.20;
                                    
                                    } 
                                ?>
                                <h6>Cantidad de dinero propio :  <?php echo $eje8res1; ?></h6>
                                <h6>Cantidad de dinero prestado al banco :  <?php echo $eje8res2; ?></h6>
                                <h6>Cantidad de dinero prestado al fabricante :  <?php echo $eje8res3; ?></h6>
                                <h6>Intereses de fabricante :  <?php echo $eje8res4; ?></h6>

                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <!-- Colored raised button -->
                                <input type="submit" value="Calcular" name="submitEjercicio8" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" />
                            </div>
                        </div>
                    </form>

                    <form autocomplete="off" method="post" action="index.php#ejercicio9" id="ejercicio9">
                        <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                            <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                                <h2 class="mdl-card__title-text">9. Ejercicio</h2>
                            </div>
                            <div class="mdl-card__supporting-text mdl-color-text--grey-600">

                                <p>
                            Una compañía de seguros está abriendo un departamento de finanzas y
estableció un programa para captar clientes, que consiste en lo siguiente: Si
el monto por el que se efectúa la fianza es menor que $50000 la cuota a
pagar será por el 3% del monto, y si el monto es mayor que $50000 la
cuota a pagar será el 2% del monto. La afianzadora desea determinar cuál
será la cuota que debe pagar un cliente.
                                </p>
                                <!-- Numeric Textfield -->
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje9input1">
                                    <label class="mdl-textfield__label" for="eje9input1">Monto total de la fianza</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>

                                <br />
                                <?php
                                    $eje9res1="0";
                                    if (isset($_POST['submitEjercicio9'])) { 
                                        if($_POST['eje9input1'] < 50000){
                                            $eje9res1=$_POST['eje9input1'] * 0.03;
                                        }else{
                                            $eje9res1=$_POST['eje9input1'] * 0.02;
                                        } 
                                    
                                    } 
                                ?>
                                <h6>Cuota que debe pagar un cliente :  <?php echo $eje9res1; ?></h6>
                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <!-- Colored raised button -->
                                <input type="submit" value="Calcular" name="submitEjercicio9" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" />
                            </div>
                        </div>
                    </form>


                    <form autocomplete="off" method="post" action="index.php#ejercicio10" id="ejercicio10">
                        <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                            <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                                <h2 class="mdl-card__title-text">10. Ejercicio</h2>
                            </div>
                            <div class="mdl-card__supporting-text mdl-color-text--grey-600">

                                <p>
                           En una escuela la colegiatura de los alumnos se determina según el
número de materias que cursan. El costo de todas las materias es el
mismo. Se ha establecido un programa para estimular a los alumnos, el
cual consiste en lo siguiente: si el promedio obtenido por un alumno en el
último periodo es mayor o igual que 9, se le hará un descuento del 30%
sobre la colegiatura y no se le cobrara IVA; si el promedio obtenido es
menor que 9 deberá pagar la colegiatura completa, la cual incluye el 10%
de IVA. Obtener cuanto debe pagar un alumno.
                                </p>
                                <!-- Numeric Textfield -->
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje10input1">
                                    <label class="mdl-textfield__label" for="eje10input1">Promedio obtenido por el alumno</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje10input2">
                                    <label class="mdl-textfield__label" for="eje10input2">Costo base de la colegiatura</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>
                                <br />
                                <?php
                                    $eje10res1="0";
                                    if (isset($_POST['submitEjercicio10'])) { 
                                        if($_POST['eje10input1'] >9){
                                            $eje10res1=($_POST['eje10input2'])-$_POST['eje10input2'] * 0.30;
                                        }else{
                                            $eje10res1=($_POST['eje10input2'])+$_POST['eje10input2'] * 0.10;
                                        } 
                                    
                                    } 
                                ?>
                                <h6>Costo de la colegiatura :  $ <?php echo $eje10res1; ?></h6>


                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <!-- Colored raised button -->
                                <input type="submit" value="Calcular" name="submitEjercicio10" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" />
                            </div>
                        </div>
                    </form>

                    <form autocomplete="off" method="post" action="index.php#ejercicio11" id="ejercicio11">
                        <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                            <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                                <h2 class="mdl-card__title-text">11. Ejercicio</h2>
                            </div>
                            <div class="mdl-card__supporting-text mdl-color-text--grey-600">

                                <p>
                           Una empresa de bienes raíces ofrece casas de interés social, bajo las
siguientes condiciones: Si los ingresos del comprador son menores de
$8000, el enganche será del 15% del costo de la casa y el resto se
distribuirá en pagos mensuales, a pagar en diez años. Si los ingresos del
comprador son más de $8000 el enganche será del 30% del costo de la
casa y el resto se distribuirá en pagos mensuales a pagar en 7 años. La
empresa quiere obtener cuanto debe pagar un comprador por concepto de
enganche y cuanto por cada pago parcial.
                                </p>
                                <!-- Numeric Textfield -->
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje11input1">
                                    <label class="mdl-textfield__label" for="eje11input1">Ingresos del comprador</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje11input2">
                                    <label class="mdl-textfield__label" for="eje11input2">Costo base de la casa</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>
                                <br />
                                <?php
                                    $eje11res1="0";
                                    $eje11res2="0";
                                    if (isset($_POST['submitEjercicio11'])) { 
                                        if($_POST['eje11input1'] <8000){
                                            $eje11res1=$_POST['eje11input2'] * 0.15;
                                            $eje11res2= ($_POST['eje11input2'] - $eje11res1)/120;
                                        }else{
                                            $eje11res1=$_POST['eje11input2'] * 0.30;
                                            $eje11res2= ($_POST['eje11input2'] - $eje11res1)/84;
                                        } 
                                    
                                    } 
                                ?>
                                <h6>Concepto de enganche :  $ <?php echo $eje11res1; ?></h6>
                                <h6>Costo pago parcial mensual x 10 años :  $ <?php echo $eje11res2; ?></h6>


                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <!-- Colored raised button -->
                                <input type="submit" value="Calcular" name="submitEjercicio11" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" />
                            </div>
                        </div>
                    </form>

                    <form autocomplete="off" method="post" action="index.php#ejercicio12" id="ejercicio12">
                        <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                            <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                                <h2 class="mdl-card__title-text">12. Ejercicio</h2>
                            </div>
                            <div class="mdl-card__supporting-text mdl-color-text--grey-600">

                                <p>
                           Una persona desea iniciar un negocio, para lo cual piensa verificar cuánto
dinero le prestara el banco por hipotecar su casa. Tiene una cuenta
bancaria, pero no quiere disponer de ella a menos que el monto por
hipotecar su casa sea muy pequeño. Si el monto de la hipoteca es menor
que $1000000 entonces invertirá el 50% de la inversión total y un socio
invertirá el otro 50%. Si el monto de la hipoteca es de $1000000 o más,
entonces invertirá el monto total de la hipoteca y el resto del dinero que se
necesite para cubrir la inversión total se repartirá a partes iguales entre el
socio y el.
                                </p>
                                <!-- Numeric Textfield -->
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje12input1">
                                    <label class="mdl-textfield__label" for="eje12input1">Monto de la hipoteca</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="eje12input2">
                                    <label class="mdl-textfield__label" for="eje12input2">Monto de la inversión</label>
                                    <span class="mdl-textfield__error">El valor no es númerico</span>
                                </div>
                                <br />
                                <?php
                                    $eje12res0="0";
                                    $eje12res1="0";
                                    $eje12res2="0";
                                    if (isset($_POST['submitEjercicio12'])) { 
                                        if($_POST['eje12input1'] <1000000){
                                            $eje12res1=$_POST['eje12input2'] * 0.50;
                                            $eje12res2= $_POST['eje12input2'] * 0.50;
                                        }else{
                                            $eje12res0=$_POST['eje12input1'];
                                            $eje12res1=($_POST['eje12input2'] - $eje12res0) /2 ;
                                            $eje12res2=($_POST['eje12input2'] - $eje12res0) /2;
                                        } 
                                    
                                    } 
                                ?>
                                <h6>Total inversión hipoteca :  $ <?php echo $eje12res0; ?></h6>
                                <h6>Total inversión popia :  $ <?php echo $eje12res1; ?></h6>
                                <h6>Total inversión del socio :  $ <?php echo $eje12res2; ?></h6>


                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <!-- Colored raised button -->
                                <input type="submit" value="Calcular" name="submitEjercicio12" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" />
                            </div>
                        </div>
                    </form>
                </div>
            </main>
        </div>


        <script src="material.min.js"></script>
    </body>
</html>

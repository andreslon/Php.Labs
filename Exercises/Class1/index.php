<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	 

 <!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">

		<!-- Compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
			<style>
			form{
width:200px;
margin:0 auto;
			}
			</style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php
            $name = "Andres";
            $birthyears = 24;
            $trm = 3.4;
            $code = 1037621086;
            $LastName = "Londoño";
                //Eliminar variable
                //unset($name);
                
                //Ver tipo de dato de la variable
                //var_dump(@name)

            // echo "your name is $name", "$birthyears";

            echo "<table class='striped' border style='margin:0 auto ;width:200px;text-align:center'>
			<tr>
				<td colspan='4' ><b>Personal Data</b></td>
			</tr>
			<tr>
				<td>
					<b>Code</b>
				</td>
				<td colspan='3'>
					$code
				</td>
			</tr>
			<tr>
				<td><b> Name</b> </td>
				<td>$name</td>
				<td><b> LastName</b> </td>
				<td>$LastName</td>
			</tr>
			<tr>
				<td><b> BirhYears</b> </td>
				<td>$birthyears</td>

				<td><b> LastName</b> </td>
				<td>$LastName</td>
			</tr>
			<tr>
				<td>
					<b>Code</b>
				</td>
				<td colspan='3'>
					$code
				</td>
			</tr>
			<tr>
				<td colspan='4'>

				<input type='checkbox' class='filled-in' id='test5' />
				<label for='test5'>Clasico</label>

				<input type='checkbox' class='filled-in' id='test4' />
				<label for='test4'>Popular</label>

				<input type='checkbox' class='filled-in' id='test3' />
				<label for='test3'>Bailable</label>

				</td>
			</tr>
		</table> ";
 
			?>
  
	<form name="formlab1" action="calculator.php" method="GET">
		<div class="input-field col s6">
			Edad 
			<input   name="txtedad" type="text" /> 
			<input type="submit" class="waves-effect waves-light btn" ></input>
		</div>
	</form>
			

			
    </body>
</html> 
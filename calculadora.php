<!DOCTYPE html>
<html>
	<head>
		<title>Calculadora</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		
		<div class="container" style="margin-top: 50px">
		
			<?php
			
				// verifica si ya se le dio clic al boton
				if(isset($_POST['submit']))
				{
					// verifica si son numeros
					if(is_numeric($_POST['numero1']) && is_numeric($_POST['numero2']))
					{
						// calcula el total
						switch ($_POST['operador']) {
							case 'sumar':
								$total = $_POST['numero1']+$_POST['numero2']; 
								echo "<h3> la suma de {$_POST['numero1']} + {$_POST['numero2']} = {$total}</h3>";
								break;
							case 'restar':
								$total = $_POST['numero1']-$_POST['numero2']; 
								  echo "<h3> la resta de {$_POST['numero1']} - {$_POST['numero2']} = {$total}</h3>";
								break;
								case 'multiplicar':
									$total = $_POST['numero1']*$_POST['numero2']; 
								  echo "<h3> la multiplicacion de {$_POST['numero1']} * {$_POST['numero2']} = {$total}</h3>";
								break;
								case 'dividir':
									$total = $_POST['numero1']/$_POST['numero2']; 
								  echo "<h3> la division {$_POST['numero1']} / {$_POST['numero2']} = {$total}</h3>";
								break;
						}
						
					
					} else {
						
						//digite valores numericos
						echo 'digite valores numericos';
					
					}
				}
			
			?>
		    
		    <!-- formulario de calculadora -->
		    <form method="post" action="calculadora.php">

				<input name="numero1" type="number" class="form-control" style="width: 150px; display: inline" />
				<input name="numero2" type="number" class="form-control" style="width: 150px; display: inline" />
		        <select name="operador">
		        	<option value="sumar">Sumar</option>
		            <option value="restar">Restar</option>
		            <option value="multiplicar">Multiplicar</option>
		            <option value="dividir">Dividir</option>
				</select>
				
		        <input name="submit" type="submit" value="Calcular" class="btn btn-primary" />
		    </form>
	    
		</div>
	
	</body>
</html>
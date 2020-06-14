<!DOCTYPE html>
<html>
	<head>
		<title>Gimnasio</title>
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
					if(is_numeric($_POST['peso']) && is_numeric($_POST['altura']))
					{
                        $indice=$_POST['peso']/($_POST['altura']*$_POST['altura']);
                        $mensaje='';
                        if($indice<=18.4){
                            $mensaje='insuficiencia de peso';
                        }
                        if($indice>=18.5 && $indice <=24.9){
                            $mensaje='peso normal';
                        }
                        if($indice>=25 && $indice <=29.9){
                            $mensaje='sobrepeso ';
                        }
                        if($indice>=30 && $indice <=34.9){
                            $mensaje='obesidad 1';
                        }
                        if($indice>=35 && $indice <=39.9){
                            $mensaje='obesidad 2';
                        }
                        if($indice>=40){
                            $mensaje='obesidad 3';
                        }
						echo "<h3> su IMC es  {$indice} y significa que esta en  {$mensaje} </h3>";
					
					} else {
						
						//digite valores numericos
						echo 'digite valores numericos';
					
					}
				}
			
			?>
		    
		    <!-- formulario de calculadora -->
		    <form method="post" action="gimnasio.php">
                <label for= "peso">Peso:</label>
                <input name="peso" type="number" class="form-control" style="width: 150px; display: inline" />
                <label for= "altura">Altura:</label>
				<input name="altura" type="number" step="0.01" min="0" max="10" class="form-control" style="width: 150px; display: inline" />
		        
				
		        <input name="submit" type="submit" value="Calcular IMC" class="btn btn-primary" />
		    </form>
	    
		</div>
	
	</body>
</html>
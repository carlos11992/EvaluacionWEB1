<!DOCTYPE html>
<html>
	<head>
		<title>Sueldo</title>
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
					if(is_numeric($_POST['cantidad']))
					{
                        $cantidad=$_POST['cantidad'];
                        $valor_hora=20000;
                        $valor_hora_extra=25000;
                        
                        if($cantidad<=40){
                            $salario=$cantidad*$valor_hora;
                        }
                        if($cantidad>40){
                            $salario=40*$valor_hora+(($cantidad-40)*$valor_hora_extra);
                        }
                       
                       
						echo "<h3> el total de su sueldo es {$salario} </h3>";
					
					} else {
						
						//digite valores numericos
						echo 'digite valores numericos';
					
					}
				}
			
			?>
		    
		    <!-- formulario de calculadora -->
		    <form method="post" action="sueldo.php">
                <label for= "cantidad">cantidad de horas:</label>
                <input name="cantidad" type="number" class="form-control" style="width: 150px; display: inline" />
                
		        
				
		        <input name="submit" type="submit" value="Calcular sueldo" class="btn btn-primary" />
		    </form>
	    
		</div>
	
	</body>
</html>
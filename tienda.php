<!DOCTYPE html>
<html>
	<head>
		<title>Spring Step</title>
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
                        $neto=$cantidad*150000;
                        $total=0;
                        $descuento=0;
                        if($cantidad==3){
                            $descuento=0.1;
                        }
                        if($cantidad>3 && $cantidad<=5){
                            $descuento=0.2;
                        }
                        if($cantidad>5){
                            $descuento=0.4;
                        }
                        $total=$neto-($descuento*$neto);
                       
						echo "<h3> el total de su compra es {$total} </h3>";
					
					} else {
						
						//digite valores numericos
						echo 'digite valores numericos';
					
					}
				}
			
			?>
		    
		    <!-- formulario de calculadora -->
		    <form method="post" action="tienda.php">
                <label for= "cantidad">cantidad:</label>
                <input name="cantidad" type="number" class="form-control" style="width: 150px; display: inline" />
                
		        
				
		        <input name="submit" type="submit" value="Calcular compra" class="btn btn-primary" />
		    </form>
	    
		</div>
	
	</body>
</html>
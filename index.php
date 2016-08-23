<html>
<head>
	<title>Vidal</title>
</head>
<body>
		<h1>Hola Mundo</h1>

		<?php
			//Genero Un Numero Random y lo Muestro
			$Numero = rand(1, 10);
			$Vueltas = 10000;
			$NumeroVueltas;
			$par=0;
			$impar=0;
			$cont1=0;$cont2=0;$cont3=0;$cont4=0;$cont5=0;$cont6=0;$cont7=0;
			$cont8=0;$cont9=0;$cont10=0;
				// cargo 10 randoms
			for ($i=0;$i<$Vueltas;$i++)
			{


				$NumeroVueltas=rand(1, 10);
			
				switch($NumeroVueltas)
				{
					case 1:
					{$cont1++;break;}
					case 2:
					{$cont2++;break;}
					case 3:
					{$cont3++;break;}	
					case 4:
					{$cont4++;break;}
					case 5:
					{$cont5++;break;}
					case 6:
					{$cont6++;break;}
					case 7:
					{
						if($cont7*100/$Vueltas < 5)
							{
								$cont7++;
							
							}
							 else
							 {
					 			continue;
					 		 }
						break;
					}
					case 8:
					{$cont8++;break;}
					case 9:
					{$cont9++;break;}	
					case 10:
					{$cont10++;break;}
														
				}
//cuentos cuantos pares e impares
				if ($NumeroVueltas%2==0)
				{
					
				 $par++;
				}
			else
				 {
				 	$impar++;
				 }

			} 

			echo "hay ".$cont1*100/$Vueltas."% de Numeros 1";
			echo "<br>";
			echo "hay ".$cont2*100/$Vueltas."% de Numeros 2";
			echo "<br>";
			echo "hay ".$cont3*100/$Vueltas."% de Numeros 3";
			echo "<br>";
			echo "hay ".$cont4*100/$Vueltas."% de Numeros 4";
			echo "<br>";
			echo "hay ".$cont5*100/$Vueltas."% de Numeros 5";
			echo "<br>";
			echo "hay ".$cont6*100/$Vueltas."% de Numeros 6";
			echo "<br>";
			echo "hay ".$cont7*100/$Vueltas."% de Numeros 7";
			echo "<br>";
			echo "hay ".$cont8*100/$Vueltas."% de Numeros 8";
			echo "<br>";
			echo "hay ".$cont9*100/$Vueltas."% de Numeros 9";
			echo "<br>";
			echo "hay ".$cont10*100/$Vueltas."% de Numeros 10";
			echo "<br>";
			echo "<br>";	
			echo "hay " . $par . " pares y ". $impar . " impares";

					$total=$cont1+$cont2+$cont3+$cont4+$cont5+$cont6+$cont7+$cont8+$cont9+$cont10;
					echo "<br>";	
					echo $total;
					echo "-------------------------------";
			//cargo un random y veo si es par o impar
		//	echo "El Numero aleatorio es : " . $Numero  ;
		//	echo "<br>";
		//	if ($Numero%2==0)
		//		{
					
			//	 echo "El Numero es Par";
			//	}
			//else
			//	 {echo "El Numero es Impar";}


			//echo "El Numero es: $Numero ";

			//si pongo solo una comilla , la frase saldra literalmente , no mostrara la variable
			//echo "<br>";
			//---------------br genera salto de linea'
			//echo "Hola PHP";
			//echo"<h2>  Hola PHP </h2>";
			//echo "El Cambio";
;		?>

</body>
</html>
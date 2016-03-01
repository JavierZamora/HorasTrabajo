<html>  
<head>
<meta charset="UTF-8">
<title></title>  
</head>  

<body>  

<?php

	#Funciones de operadores
	function colegios(){

		#Recuperación en variables de los valores introducidos por el usuario
		$colegio = $_POST['colegios']; 
		

		#Operación
		switch ($colegio) {
	    	case "stmary":
	        	$horas=1.5;
	        	$dias="Tuesday,Thursday";
	        break;
	    	case "calassancia":
	        	$horas=1.5;
	        	$dias="Wednesday";
	        break;
	    	case "sanfrancisco":
	        	$horas=1.5;
	        	$dias="Friday";
	        break;
		}		
		horas($dias,$horas);
	}

	function horas($dias,$horas){
		$mes = $_POST['mes']; 
		$anio = $_POST['anio']; 
		$colegio = $_POST['colegios']; 
		$ndias= explode(",", $dias);
		$sumatorio=0;
		
		switch($mes) {
			case "01" : 
				for($i=1;$i<=31;$i++){
					$fecha= new DateTime($anio."-".$mes."-".$i);
					//echo $fecha->format('l')."cambia <br/>";
					//echo $ndias[0]."linea<br/>";
					//echo count($ndias)."cuenta<br/>";
					for($z=0;$z<count($ndias);$z++){
						//echo $ndias[$z]."hola<br/>";
						//echo $fecha->format('l')."caracola<br/>";
						$eldia=	$ndias[$z];
						//echo $eldia."importante<br/> ";
						$lafecha=($fecha->format('l'));
						//echo $lafecha."muyy importante<br/> ";
						if(strcmp ($eldia , $lafecha)==0){
							$sumatorio++;
						//	echo $sumatorio."sumatorio<br/>";
						}
						
					}

				}


				break;
				
			case "02" :
					for($i=1;$i<=28;$i++){
					$fecha= new DateTime($anio."-".$mes."-".$i);
					//echo $fecha->format('l')."cambia <br/>";
					//echo $ndias[0]."linea<br/>";
					//echo count($ndias)."cuenta<br/>";
					for($z=0;$z<count($ndias);$z++){
						//echo $ndias[$z]."hola<br/>";
						//echo $fecha->format('l')."caracola<br/>";
						$eldia=	$ndias[$z];
						//echo $eldia."importante<br/> ";
						$lafecha=($fecha->format('l'));
						//echo $lafecha."muyy importante<br/> ";
						if(strcmp ($eldia , $lafecha)==0){
							$sumatorio++;
						//	echo $sumatorio."sumatorio<br/>";
						}
						
					}

				}
						break;
			case "03" :
					for($i=1;$i<=28;$i++){
											$fecha= new DateTime($anio."-".$mes."-".$i);
					//echo $fecha->format('l')."cambia <br/>";
					//echo $ndias[0]."linea<br/>";
					//echo count($ndias)."cuenta<br/>";
					for($z=0;$z<count($ndias);$z++){
						//echo $ndias[$z]."hola<br/>";
						//echo $fecha->format('l')."caracola<br/>";
						$eldia=	$ndias[$z];
						//echo $eldia."importante<br/> ";
						$lafecha=($fecha->format('l'));
						//echo $lafecha."muyy importante<br/> ";
						if(strcmp ($eldia , $lafecha)==0){
							$sumatorio++;
						//	echo $sumatorio."sumatorio<br/>";
						}
						
					}
				}

						break;
			case "04" :
			for($i=1;$i<=28;$i++){
					$fecha= new DateTime($anio."-".$mes."-".$i);
					//echo $fecha->format('l')."cambia <br/>";
					//echo $ndias[0]."linea<br/>";
					//echo count($ndias)."cuenta<br/>";
					for($z=0;$z<count($ndias);$z++){
						//echo $ndias[$z]."hola<br/>";
						//echo $fecha->format('l')."caracola<br/>";
						$eldia=	$ndias[$z];
						//echo $eldia."importante<br/> ";
						$lafecha=($fecha->format('l'));
						//echo $lafecha."muyy importante<br/> ";
						if(strcmp ($eldia , $lafecha)==0){
							$sumatorio++;
						//	echo $sumatorio."sumatorio<br/>";
						}
						
					}
				}
						break;
			case "05" :
			for($i=1;$i<=31;$i++){
					$fecha= new DateTime($anio."-".$mes."-".$i);
					//echo $fecha->format('l')."cambia <br/>";
					//echo $ndias[0]."linea<br/>";
					//echo count($ndias)."cuenta<br/>";
					for($z=0;$z<count($ndias);$z++){
						//echo $ndias[$z]."hola<br/>";
						//echo $fecha->format('l')."caracola<br/>";
						$eldia=	$ndias[$z];
						//echo $eldia."importante<br/> ";
						$lafecha=($fecha->format('l'));
						//echo $lafecha."muyy importante<br/> ";
						if(strcmp ($eldia , $lafecha)==0){
							$sumatorio++;
						//	echo $sumatorio."sumatorio<br/>";
						}
						
					}

				}

						break;
			case "06" :
			for($i=1;$i<=31;$i++){
					$fecha= new DateTime($anio."-".$mes."-".$i);
					//echo $fecha->format('l')."cambia <br/>";
					//echo $ndias[0]."linea<br/>";
					//echo count($ndias)."cuenta<br/>";
					for($z=0;$z<count($ndias);$z++){
						//echo $ndias[$z]."hola<br/>";
						//echo $fecha->format('l')."caracola<br/>";
						$eldia=	$ndias[$z];
						//echo $eldia."importante<br/> ";
						$lafecha=($fecha->format('l'));
						//echo $lafecha."muyy importante<br/> ";
						if(strcmp ($eldia , $lafecha)==0){
							$sumatorio++;
						//	echo $sumatorio."sumatorio<br/>";
						}
						
					}

				}

						break;
			case "07" :
			for($i=1;$i<=31;$i++){
					$fecha= new DateTime($anio."-".$mes."-".$i);
					//echo $fecha->format('l')."cambia <br/>";
					//echo $ndias[0]."linea<br/>";
					//echo count($ndias)."cuenta<br/>";
					for($z=0;$z<count($ndias);$z++){
						//echo $ndias[$z]."hola<br/>";
						//echo $fecha->format('l')."caracola<br/>";
						$eldia=	$ndias[$z];
						//echo $eldia."importante<br/> ";
						$lafecha=($fecha->format('l'));
						//echo $lafecha."muyy importante<br/> ";
						if(strcmp ($eldia , $lafecha)==0){
							$sumatorio++;
						//	echo $sumatorio."sumatorio<br/>";
						}
						
					}

				}

						break;
			case "08" :
			for($i=1;$i<=31;$i++){
					$fecha= new DateTime($anio."-".$mes."-".$i);
					//echo $fecha->format('l')."cambia <br/>";
					//echo $ndias[0]."linea<br/>";
					//echo count($ndias)."cuenta<br/>";
					for($z=0;$z<count($ndias);$z++){
						//echo $ndias[$z]."hola<br/>";
						//echo $fecha->format('l')."caracola<br/>";
						$eldia=	$ndias[$z];
						//echo $eldia."importante<br/> ";
						$lafecha=($fecha->format('l'));
						//echo $lafecha."muyy importante<br/> ";
						if(strcmp ($eldia , $lafecha)==0){
							$sumatorio++;
						//	echo $sumatorio."sumatorio<br/>";
						}
						
					}

				}

				break;
			case "09" :
				for($i=1;$i<=31;$i++){
					$fecha= new DateTime($anio."-".$mes."-".$i);
					//echo $fecha->format('l')."cambia <br/>";
					//echo $ndias[0]."linea<br/>";
					//echo count($ndias)."cuenta<br/>";
					for($z=0;$z<count($ndias);$z++){
						//echo $ndias[$z]."hola<br/>";
						//echo $fecha->format('l')."caracola<br/>";
						$eldia=	$ndias[$z];
						//echo $eldia."importante<br/> ";
						$lafecha=($fecha->format('l'));
						//echo $lafecha."muyy importante<br/> ";
						if(strcmp ($eldia , $lafecha)==0){
							$sumatorio++;
						//	echo $sumatorio."sumatorio<br/>";
						}
						
					}

				}

						break;
			case "10" :
				for($i=1;$i<=31;$i++){
					$fecha= new DateTime($anio."-".$mes."-".$i);
					//echo $fecha->format('l')."cambia <br/>";
					//echo $ndias[0]."linea<br/>";
					//echo count($ndias)."cuenta<br/>";
					for($z=0;$z<count($ndias);$z++){
						//echo $ndias[$z]."hola<br/>";
						//echo $fecha->format('l')."caracola<br/>";
						$eldia=	$ndias[$z];
						//echo $eldia."importante<br/> ";
						$lafecha=($fecha->format('l'));
						//echo $lafecha."muyy importante<br/> ";
						if(strcmp ($eldia , $lafecha)==0){
							$sumatorio++;
						//	echo $sumatorio."sumatorio<br/>";
						}
						
					}

				}

						break;
			case "11" :
				for($i=1;$i<=31;$i++){
					$fecha= new DateTime($anio."-".$mes."-".$i);
					//echo $fecha->format('l')."cambia <br/>";
					//echo $ndias[0]."linea<br/>";
					//echo count($ndias)."cuenta<br/>";
					for($z=0;$z<count($ndias);$z++){
						//echo $ndias[$z]."hola<br/>";
						//echo $fecha->format('l')."caracola<br/>";
						$eldia=	$ndias[$z];
						//echo $eldia."importante<br/> ";
						$lafecha=($fecha->format('l'));
						//echo $lafecha."muyy importante<br/> ";
						if(strcmp ($eldia , $lafecha)==0){
							$sumatorio++;
						//	echo $sumatorio."sumatorio<br/>";
						}
						
					}

				}

						break;
			case "12" :
				for($i=1;$i<=31;$i++){
					$fecha= new DateTime($anio."-".$mes."-".$i);
					//echo $fecha->format('l')."cambia <br/>";
					//echo $ndias[0]."linea<br/>";
					//echo count($ndias)."cuenta<br/>";
					for($z=0;$z<count($ndias);$z++){
						//echo $ndias[$z]."hola<br/>";
						//echo $fecha->format('l')."caracola<br/>";
						$eldia=	$ndias[$z];
						//echo $eldia."importante<br/> ";
						$lafecha=($fecha->format('l'));
						//echo $lafecha."muyy importante<br/> ";
						if(strcmp ($eldia , $lafecha)==0){
							$sumatorio++;
						//	echo $sumatorio."sumatorio<br/>";
						}
						
					}

				}

				}
			$result=$sumatorio*$horas;
			echo "Las horas trabajadas en ".$colegio." son ".$result." horas<br/>";

	}


?> 

</body> 
</html>

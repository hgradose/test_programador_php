<?php 
	
	Class CompleteRange{
		public function build($array){

			if(is_array($array)){


	 		 	$primer_elemento = $array[1];
			 	$ultimo_elemento = end($array);
 
			 	$cadena = "";
			 	for ($i=$primer_elemento; $i <= $ultimo_elemento ; $i++) { 
			 		$cadena .= $i;
			 	}

 			 	return $cadena;

		 	}else{
		 		echo 'Por favor el valor debe ser un array';
		 	}
	 
 		}
	}


	$objA = new CompleteRange();

	echo $objA->build(array(1,5,9));

	
?>
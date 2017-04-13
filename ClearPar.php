<?php 
	
	Class ClearPar{
		public function build($string){

				$split = explode('()', $string);
				$new_array = array();
				foreach ($split as $key => $value) {
					$new_array[] = "";
				}
				$resultado_final = implode("()", $new_array);
 			 	return $resultado_final;
 		}
	}


	$objA = new ClearPar();

	echo $objA->build("((()");

	
?>
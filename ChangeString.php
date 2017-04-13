<?php 
	
	Class ChangeString{
		public function build($string){

			$array_abcd = array("a" => "b",
								"b" => "c",
								"c" => "d",
								"d" => "e",
								"e" => "f",
								"f" => "g",
								"g" => "h",
								"h" => "i",
								"i" => "j",
								"j" => "k",
								"k" => "l",
								"l" => "m",
								"m" => "n",
								"n" => "ñ",
								"ñ" => "o",
								"o" => "p",
								"p" => "q",
								"q" => "r",
								"r" => "s",
								"s" => "t",
								"t" => "u",
								"u" => "v",
								"v" => "w",
								"w" => "x",
								"x" => "y",
								"y" => "z",
								"z" => "a");

			$nuevovalor = "";
 			for($i=0;$i<strlen($string);$i++){ 
			    //echo substr($string,$i,1);
 				$cadena = substr($string,$i,1);
			    if(isset($array_abcd[strtolower($cadena)])){

			    	if (ctype_upper($cadena)) {
 			    		$nuevovalor = strtoupper($array_abcd[strtolower(substr($string,$i,1))]);
 				    } else {
 				    	$nuevovalor = $array_abcd[substr($string,$i,1)];
 				    }
			    }else{
			    	$nuevovalor = substr($string,$i,1);
			    }
			    $resultado[] = $nuevovalor;
			}

			$final = implode('', $resultado);
			return $final;
 		}
	}


	$objA = new ChangeString();

	echo $objA->build("**Casa 52Z");


?>
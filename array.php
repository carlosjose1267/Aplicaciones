<!DOCTYPE html>
<html>
<body>
	<?php  // Ejercicio 1 del array
	// variables del array
	$coloresf = array("rojo: FF0000" => "FF0000","verde: 00FF00" => "00FF00","azul: 0000FF" => "0000FF");
	$coloress = array("rosa: FE9ABC" => "FE9ABC","amarillo: FDF189" => "FDF189","malva: BC8F8F" => "BC8F8F");
		echo "<table border=0 />";
		// Inicio tabla uno
			echo "<tr><td>";
			echo "Colores fuertes: ";
			echo "</td>";	
			foreach ($coloresf as $valor => $coloresfu) {	
			// ejercicio 2 del array in_array
			if (in_array("FF0000", $coloresf)) {
	}
				echo "<td bgcolor=#$coloresfu>";	
				echo "$valor ";
				echo "</td>";
			}
			echo "</tr>";
			echo "<br/>";
			// Inicio tabla dos
				echo "<tr><td>";
				echo "Colores suaves: ";
				echo "</td>";			
			foreach ($coloress as $valor2 => $coloressu) {
				// ejercicio 2 array  in_array
					if (in_array("FF88CC", $coloress)) {
	}
				echo "<td bgcolor=#$coloressu>";	
				echo "$valor2 ";
				echo "</td>";
			}
		echo "</tr>";
			// Fin tabla dos
		echo "</table>";
		echo "<h4> #ff88cc  este no existe</h4>";
		echo "<h4> #ff0000 este color existe</h4>";
	?>	
		
		
		<?php 
	//Ejercicio 3

	$orden = array("cinco" => 5, "uno" => 1, "cuatro" => 4, "dos" => 2, "tres" => 3 );

//asort: Ordena un array y mantiene la asociación de índices
	echo "<h4>asort</h4>";	
	asort($orden);
	foreach ($orden as $letra => $numero) {
		echo "$letra = $numero <br>";
	}

//arsort: Ordena un array en orden inverso y mantiene la asociación de índices
	echo "<h4>arsort</h4>";
	arsort($orden);
	foreach ($orden as $letra => $numero) {
		echo "$letra = $numero <br>";
	}

//ksort: Ordena un array por clave en orden inverso
	echo "<h4>ksort</h4>";
	ksort($orden);
	foreach ($orden as $letra => $numero) {
		echo "$letra = $numero <br>";
	}
//sort: Ordena un array
	echo "<h4>sort</h4>";
	sort($orden);
	foreach ($orden as $letra => $numero) {
		echo "$letra = $numero <br>";
	}
//rsort: Ordena un array en orden inverso
	echo "<h4>rsort</h4>";
	rsort($orden);
	foreach ($orden as $letra => $numero) {
		echo "$letra = $numero <br>";
	}
?>
		
	
</body>
</html>

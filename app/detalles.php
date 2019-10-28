<?php 

function contLetras ($comentario){
	$tam = strlen($comentario);
	return $tam;
}

function contPalabras ($comentario){
	$espacio = 0;
	for($i=0;$i<strlen($comentario);$i++){
		if($comentario[$i] == ' '){
			$espacio++;
		}
	}
	$p = $espacio + 1;
	return $p;
}


function pRepetida ($comentario){
    $max = 0;
    $p = null;
    $repetido = null;
    for($i=0 ; $i<strlen($comentario) ; $i++){
        if($comentario[$i] != ' ' && $comentario[$i] != ','){
            $p = $p.$comentario[$i];
        }else{
            if(substr_count($comentario, $p) > $max){
                $max = substr_count($comentario, $p);
                $repetido = $p;
            }
            $p = null;
        }
    }
    return $repetido;
}

function lRepetida ($comentario){
	$max = 0;
	$l = null;
	$repetido = null;
	for($i=0;$i<strlen($comentario);$i++){
		$l = $comentario[$i];
		if($l != ' ' && substr_count($comentario, $l) > $max){
			$max = substr_count($comentario, $l);
			$repetido = $l;
		}
	}
	return $repetido;
}


echo "<br>Detalles:";
echo "<table>";
echo "<tr><td>Contador de Letras: </td>";
echo "<td>".contLetras($_REQUEST['comentario']),"</td></tr>";
echo "<tr><td>Contador de palabras: </td>";
echo "<td>".contPalabras($_REQUEST['comentario']),"</td></tr>";
echo "<tr><td>Letra que mas se repite: </td>";
echo "<td>".lRepetida($_REQUEST['comentario']),"</td></tr>";
echo "<tr><td>Palabra que mas se repite: </td>";
echo "<td>".pRepetida($_REQUEST['comentario']),"</td></tr>";
echo "</table>";

?>
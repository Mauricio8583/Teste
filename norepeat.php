<?php

function noRepeat(){

    $numeros = array();
    $nRepete = array();

    for($i=0;$i<20;$i++){
        array_push($numeros, rand(1,10));
    }

    echo "O array eh formado por:";

    for($j=0;$j<count($numeros);$j++){
        $contador = 0;
        if($j<count($numeros)){
        for($x=$j+1;$x<count($numeros);$x++){
            if($numeros[$j] == $numeros[$x]){
                $contador++;
            }
                       
        }
    }
        if($j>0){
            for($y=$j-1;$y>0;$y--){
                if($numeros[$j] == $numeros[$y]){
                    $contador++;
                }
            }
        }

        if($contador==0){
            array_push($nRepete, $numeros[$j]);
        }
      echo $numeros[$j]." ";
    }
    
    
    echo "<br>Os numeros que nao se repetem sao:";
    

    for($a=0;$a<count($nRepete);$a++){
        echo $nRepete[$a]." ";
    }

}

noRepeat();

?>
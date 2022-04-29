<?php

function primos($inicial, $final){

    $nprimos = array();

    if($inicial>=$final){
        echo "Impossivel Contabilizar";
    }

    else{
        for($i=$inicial+1; $i<$final; $i++){
            $contador = 0;
            for($j=1;$j<=$i;$j++){
                if($i%$j == 0){
                    $contador++;
                }
                               
            }
            if($contador==2){
                array_push($nprimos, $i);                    
            }
            

        }
        echo "Numeros primos entre ".$inicial. " e ". $final."<br>";
        for($x=0; $x<count($nprimos); $x++){
            echo $nprimos[$x]."<br>";
        }
    }

}

primos(5,10);


?>
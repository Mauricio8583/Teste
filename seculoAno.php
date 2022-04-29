<?php

function seculoAno($ano){

    if(strlen($ano)<=2 || $ano == 100){
        echo "Ano:" . $ano . "<br>Seculo 1";
    }

    if(strlen($ano)==3 && $ano!=100 || $ano == 1000){
        if($ano==1000){
            echo "Ano:" . $ano . "<br>Seculo 10";
        }
        else{

        $seculo = intdiv($ano, 100) + 1;
        echo "Ano:" . $ano . "<br>Seculo:" . $seculo;
        }
    } 
    
    if(strlen($ano)==4 && $ano!=1000 || $ano == 10000){
        if($ano==10000){
            echo "Ano:" . $ano . "<br>Seculo 100";
        }
        else{
            $seculo = intdiv($ano, 100) + 1;
            echo "Ano:" . $ano . "<br>Seculo:" . $seculo;
        }
    }    
    

}

seculoAno(728);



?>
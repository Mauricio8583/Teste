<?php

function sequenciaCrescente(){

    $sequencia = array();
    
    $sequencia[0] = 9;                  // Para este codigo, cada linha na saida é correspondente ao numero ausente no array, por exemplo:
    $sequencia[1] = 2;                  // 12345 TRUE (Substitui o 1)
    $sequencia[2] = 5;                  // 12345 TRUE (Substitui o 2)
    $sequencia[3] = 8;                  // 12345 TRUE (Substitui o 3)
    $sequencia[4] = 2;
    $sequencia[5] = 7;

   // $sequencia[0] = 1;
   // $sequencia[1] = 2;
   // $sequencia[2] = 3;
   // $sequencia[3] = 4;
   // $sequencia[4] = 5;
   // $sequencia[5] = 6;
    
    if(count($sequencia)<=2){
        for($x=0;$x<count($sequencia);$x++){
            echo $sequencia[$x];
        }
        echo "<br>TRUE<br>";
    }

    if(count($sequencia)>2){
        for($i=0;$i<count($sequencia);$i++){
            $contador = 0;
            if($i==0){
            for($j=$i+1;$j<=count($sequencia)-2;$j++){
                if($sequencia[$j]<$sequencia[$j+1]){
                    $contador++;                                        
                }
            }
            if($contador==count($sequencia)-2){
                for($x=0;$x<count($sequencia);$x++){
                  echo $sequencia[$x];
              }
              echo " <br>TRUE<br>";
            }
            else{
                for($x=0;$x<count($sequencia);$x++){
                    echo $sequencia[$x];
                }
                echo "<br> FALSE<br>";
            }
        }

            if($i>0){
                for($y=0;$y<count($sequencia)-2;$y++){
                    if($y+1==$j){
                        if($sequencia[$y-1]<$sequencia[$y+1]){
                            $contador++;
                        }
                                              
                    }
                    else{
                        if($sequencia[$y]<$sequencia[$y+1]){
                            $contador++;
                        }
                    }
                    
                }
                if($contador==count($sequencia)-2){
                    for($x=0;$x<count($sequencia);$x++){
                      echo $sequencia[$x];
                  }
                  echo " <br>TRUE<br>";
                }
                else{
                    for($x=0;$x<count($sequencia);$x++){
                        echo $sequencia[$x];
                    }
                    echo "<br> FALSE<br>";
                }
                
            }
        }
    }    

}

sequenciaCrescente();

?>
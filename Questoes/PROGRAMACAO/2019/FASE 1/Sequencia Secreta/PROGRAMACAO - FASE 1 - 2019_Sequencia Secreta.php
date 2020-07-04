<?php

// Questões -> OBI - https://olimpiada.ic.unicamp.br/

// Questão: Sequência Secreta -> Modalidade Programação _ Fase 1

/*


    RESTRIÇÕES:

*/

//Tamanho da sequência:
$ts = 3;
//Sequência:
$Vi = array(1,2,1);

if($ts>=3 && $ts<=500){

    if(count($Vi) == $ts){

        $arm = 0;
        for($i=0; $i<=count($Vi); $i++){

            if($Vi[$i] != $i+1){
                echo $arm = $Vi[$i];
            }else{
               return; 
            }

        }

    }else{
        echo "A sequência ultrapassa o tamanho";
    }

}else{
    return 0;
}
?>
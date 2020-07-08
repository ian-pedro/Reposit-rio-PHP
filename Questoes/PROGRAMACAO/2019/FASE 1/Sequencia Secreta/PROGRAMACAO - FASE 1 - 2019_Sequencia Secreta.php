<?php

// Questões -> OBI - https://olimpiada.ic.unicamp.br/

// Questão: Sequência Secreta -> Modalidade Programação _ Fase 1

/*


    RESTRIÇÕES:

*/

//Tamanho da sequência:
$ts = 4;
//Sequência:
$Vi = array(1,2,1,2);

if($ts>=3 && $ts<=500){

    if(count($Vi) == $ts){

        $arm = 0;
        
        //$cont = 0;
        for($i=1; $i<count($Vi); $i++){
            
            if( ($Vi[]=$i-1) != ($Vi[]=$i+1) ){
                $arm = $Vi[$i];  
            }
            //$cont++;
        }

    echo $arm;

    }else{
        echo "A sequência ultrapassa o tamanho";
    }

}else{
    return 0;
}
?>
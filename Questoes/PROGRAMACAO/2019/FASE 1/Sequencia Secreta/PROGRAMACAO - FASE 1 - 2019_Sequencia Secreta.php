<?php

// Questões -> OBI - https://olimpiada.ic.unicamp.br/

// Questão: Sequência Secreta -> Modalidade Programação _ Fase 1

/*


    RESTRIÇÕES:

*/

//Tamanho da sequência:
$ts = 5;
//Sequência:
$Vi = array(1,1,1,2,1);

if($ts>=3 && $ts<=500){

    if(count($Vi) == $ts){

        $arm = 0;
        $pos = 0;
        for($i=1; $i<=count($Vi); $i++){
            
            if( $Vi[$pos] != $Vi[$i] ){
                $arm++;  
            }
            $pos++;
        }

    echo $arm;

    }else{
        echo "A sequência ultrapassa o tamanho";
    }

}else{
    return 0;
}
?>
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
        $i = -1;
        for($i; $i<=count($Vi); $i++){
            echo $Vi[$i]."<br/>";

            if( $Vi[$i] != ($Vi[$i]+1) ){
                $arm = $Vi[$i];
            }

        }
        echo $arm;
    }else{
        echo "A sequência ultrapassa o tamanho";
    }

}else{
    return 0;
}
?>
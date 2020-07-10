<?php

// Questões -> OBI - https://olimpiada.ic.unicamp.br/

// Questão: Sequência Secreta -> Modalidade Programação _ Fase 1 _ Nível Júnior

/*

    Na calçada em frente ao Palácio Imperial, não se sabe a razão, existe 
uma sequência de N números desenhados no chão. A sequência tem a seguinte 
forma: ela começa e termina com o número   1; apenas os   números  1 e  2 
aparecem nela; e o número 2 aparece pelo menos uma vez.
    Ninguém sabe o significado da sequência, justamente  por isso, várias 
teorias malucas    surgiram. Uma   delas diz que  a sequência representa, 
na   verdade,   apenas um  valor que estaria relacionado a um segredo dos 
imperadores. Esse   valor é a   quantidade máxima de números da sequência 
que poderiam ser   marcados com um  círculo,   de modo que a sequência de 
números marcados não contenha dois números iguais consecutivos.
    Neste problema, dada a sequência  original  de números  desenhados no 
chão da calçada, seu programa   deve  computar  e  imprimir  a quantidade 
máxima de números da sequência  que  poderiam ser marcados com um círculo 
sem que haja dois números iguais consecutivos na sequência marcada.

    RESTRIÇÕES:
        * 3<=N<=500 // Tamanho da sequência
        * Vi é igual a 1 ou 2, para 1<=i<=N // Números da sequência

*/

//Tamanho da sequência:
$ts = 5;
//Sequência:
$Vi = array(1,1,1,2,1);

// Depois de passado os valores da sequência, realiza-se a primeira verificação,
//esta, se o tamanho da sequência atende às restrições:
if($ts>=3 && $ts<=500){

    // Seguindo, verifica-se, se a sequência é do tamanho passado:
    if(count($Vi) == $ts){

        // Aqui, foi criado dois contadores, o primeiro para armazenar a quantidade
        //de vezes que um determinado número da sequência for diferente do seguinte
        //e o segundo ($pos) funciona para andar nas posições do vetor para  compa-
        //rar os elementos:
        $arm = 0;
        $pos = 0;

        // Agora, cria-se um loop para andar pelo vetor:
        for($i=1; $i<=count($Vi); $i++){
            
            // A cada loop, entra nesta verificação para comparar o elemento/num.
            if( $Vi[$pos] != $Vi[$i] ){
                $arm++; // Adiciona um a cada vez que esse if for verdade 
            }
            $pos++; // Contador para posição do vetor, que começa na pos. 0 e anda
            //de acordo o loop, ou seja, a cada loop, vai para próxima posição
        }

    echo $arm;

    }else{
        echo "A sequência ultrapassa o tamanho";
    }

}else{
    return 0;
}
?>
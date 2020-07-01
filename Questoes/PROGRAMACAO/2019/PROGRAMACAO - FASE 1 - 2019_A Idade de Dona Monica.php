<?php

// Questão: A Idade de Dona Mônica -> Modalidade Programação _ Fase 1

/*
        Dona Mônica é mãe de três filhos que   têm   idades diferentes. 
    Ela   notou    que,    neste ano, a soma das   idades dos seus três 
    filhos é igual à    idade dela. Neste    problema,  dada a idade de 
    dona    Mônica e   as  idades de dois dos filhos, seu programa deve 
    computar e imprimir a idade do filho mais velho.
        Por exemplo, se sabemos que dona Mônica tem 52 anos e as idades 
    conhecidas    de dois dos   filhos são  14 e 18 anos, então a idade 
    do outro   filho,   que não era    conhecida,  tem que ser 20 anos, 
    pois a      soma das       três idades    tem que ser 52. Portanto, 
    a idade do   filho    mais      velho é 20. Em  mais    um exemplo, 
    se dona   Mônica     tem 47 anos   e as   idades de dois dos filhos
    são   21 e 9   anos,     então o outro filho tem que ter 17 anos e, 
    portanto, a idade do filho mais velho é 21.

    RESTRIÇÕES:
       * 40<=m<=110 -> Idade da Mãe => maior ou igual a 40 e menor ou igual a 110
       * 1<=f1<=m   -> Idade do filho deve ser maior ou igual a 1
       * 1<=f2<=m   -> Idade do filho deve ser maior ou igual a 1
       * f1!=f2     -> A idade dos filhos deve ser diferente 
*/


// Primeiramente, o programa deve receber as três idades como mostrado:
    $f1 = 21;  //Filho 1
    $f2 = 7; //Filho 2
    $m = 47;  //Mãe

// Depois disso, os valores devem ser verificados para respeitarem cer-
//tas condições:
    if( ($f1 != $f2) && ($f1>=1 && $f2>=1) && ($f1<$m && $f2<$m) && ($m>=40 && $m<=110) ){
        
        //Depois de obedecer às condições, é preciso calcular a idade do filho 3
        $f1_f2 = $f1 + $f2; // Soma das idades de f1 e f2
        $f3 = $m - $f1_f2;  // Idade de f3
        
        //echo $f3;
    }

// Agora, temos as três idades. Por fim, vamos compará-las, encontrando o
//mais velho:
    if( ($f1 > $f2) && ($f1 > $f3)){ // Verificando se o filho 1 é o mais velho
        echo "O filho mais velho tem $f1 anos de idade";
    }
    elseif( ($f2 > $f1) && ($f2 > $f3) ){ // Verificando se o filho 2 é o mais velho
        echo "O filho mais velho tem $f2 anos de idade";
    }
    elseif( ($f3 > $f1) && ($f3 > $f2) ){ // Verificando se o filho 2 é o mais velho
        echo "O filho mais velho tem $f3 anos de idade";
    }


?>
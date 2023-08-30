<?php

// function calcularDesconto($valor, $categoria) {
    
//     $desconto = 0;
    
//     switch ($categoria) {
        
//         case "eletrônicos":
//             $desconto = 0.1;
        
//             break;
            
//         case "vestuário":
    
//             $desconto = 0.2;
//             break;
            
//         case "alimentos":
//             $desconto = 0.05;
            
//             break;
            
//     }
//     return $valor * (1 - $desconto);
// }

// calcularDesconto(88, 'alimentos');

/*
<?php
 
function compararNumeros($num1, $num2) {
    if ($num1 > $num2) {
        return "O primeiro número é maior.";
    } elseif ($num2 > $num1) {
        return "O segundo número é maior.";
    } else {
        return "Os números são iguais.";
    }
}
 
compararNumeros(5, 7);
*/

function verificarAcesso($num, $bool) {
    
    $idadeMin = 18;
    $autorizacao = true;
    
    if($num >= $idadeMin && $bool == $autorizacao) {
        
        return "Acesso Autorizado";
        
    } elseif($num <= $idadeMin) {
        
        return "Acesso negado. Idade requerida 18 anos";
        
    }else if($num >= $idadeMin && $bool != $autorizacao) {
        
        return "Acesso negado. Autorização necessária";
        
    } else {
        return "Acesso negado. Sem permissão de idade e Autorização";
    }
    
}

verificarAcesso(17, true);



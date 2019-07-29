<?php
$idade = readline("Digite a Idade: ");
$acompanhado = true;

if ($idade >= 18){
    echo "Pode Entrar :))\n";
}else{
    if($acompanhado==true and $idade >= 16){
        echo "Pode entrar\n";
    }else{
        echo "Não pode entrar\n";
    }
}

?>
<?php
// $pontos = array(10, 50, 20, 15);

$pontos = [10, 50, 20, 15];
echo "Valor do indice 1= ".$pontos[1] . PHP_EOL;

$pontos[1] += 10;
echo "Acrecenta 10 pontos no indice '1'= ". $pontos[1] . PHP_EOL;

echo "Mostrando valores em um 'for'\n";
for ($i=0; $i < 4; $i++){
    echo $pontos[$i] . PHP_EOL;

}

$pontos[] = 70;
echo "Valor '70' adicionado\n";
for ($i=0; $i < count($pontos); $i++){ # => metodo count conta o array
    echo $pontos[$i] . PHP_EOL;

}

$pontos= [
    'montanha' => 10,
    'magneto' => 50,
    'rogerio' => 20,
    'aragorn' => 15
];

echo "Pontos do Magneto $pontos[magneto]\n\n";

/*for ($i=0; $i < count($pontos); $i++){ # da erro 
    echo $pontos[$i] . PHP_EOL;
} */

echo "Mostrando os pontos dos pesonagens sem os nomes:\n";
foreach($pontos as $ponto){
    echo $ponto . PHP_EOL;
}

echo "Mostrando os pontos dos pesonagens com os nomes\n";
foreach($pontos as $nome => $ponto){
    echo "$nome = $ponto" . PHP_EOL;
}

print_r($pontos);


function causar_dano($pontos, $dano_causado, $personagem){    
    $pontos[$personagem] -= $dano_causado;
    if($pontos[$personagem] <= 0) return "$personagem morreu!!";
    else return "$personagem ficou com $pontos[$personagem]";
}

echo causar_dano($pontos, 10, 'montanha');
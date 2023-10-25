<?php 

function buscaBinario(array $arry,int $elemento)
{
    $esquerda= 0;
    $direita  = count($arry) -1;
    while($esquerda <= $direita)
    {
        $meio = floor(($esquerda+$direita)/2);
        if($arry[$meio] == $elemento)
        {
            return $meio;
        }
        else if ($arry[$meio]< $elemento)
        {
            $esquerda = $meio + 1;
        }
        else
        {
            $direita = $meio - 1;
        }
    }
    return -1;
}

$array = [1,2,3,4,5,6,7,8,9,10];

$elemento = 10;

$result = buscaBinario($array,$elemento);

if($result !== -1)
{
    echo "Elemento encontrado na posição $result numero do elemento é: $array[$result]";
}
else
{
    echo "Elemento não encontrado!";

}
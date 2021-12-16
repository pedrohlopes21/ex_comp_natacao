<?php 

$categorias = [];
$nome = 'Pedro Henrique';
$idade = 13;

$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

if($idade >= 6 && $idade <= 12){
    echo $nome.' é da categoria infantil';
}else if($idade >= 13 && $idade <= 18){
    echo $nome.' é da categoria adolescente';
}else {
    echo $nome.' é da categoria adulto';
}   
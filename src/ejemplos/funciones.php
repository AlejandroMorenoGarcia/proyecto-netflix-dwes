<?php

const DEFAULT_PASSWORD_LENGTH = 16;
const CHAR_ARRAY = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
const NUM_ARRAY = ['0','1','2','3','4','5','6','7','8','9'];
const SYMBOL_ARRAY = ['$','%','&','*','€','|','~'];

const CHARACTERS = [
    "char"=>CHAR_ARRAY,
    "num"=>NUM_ARRAY,
    "sym"=>SYMBOL_ARRAY
];

function create_pass(int $longitud= DEFAULT_PASSWORD_LENGTH, bool $numeros=true, bool $letras=true, bool $simbolos=true):string {
    $generatedPass = "";
    if ($letras === false && $numeros ===false && $simbolos === false){
        $letras = true;
    }
    while (strlen($generatedPass) < $longitud){
        $tipoElemento = mt_rand(1,3);
        if ($tipoElemento === 1 && $letras === true){
            $generatedPass .= CHAR_ARRAY[mt_rand(0,count(CHAR_ARRAY)-1)];
        }elseif ($tipoElemento === 2 && $numeros === true){
            $generatedPass .= NUM_ARRAY[mt_rand(0,count(NUM_ARRAY)-1)];
        }elseif ($tipoElemento === 3 && $simbolos === true) {
            $generatedPass .= SYMBOL_ARRAY[mt_rand(0,count(SYMBOL_ARRAY)-1)];
        }
    }
    return $generatedPass;
}
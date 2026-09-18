<?php
    function saludar(int $parametro1, string $parametro2, float $parametro3, bool $parametro4 = false):string|false{
        return "Hola";
    }

    function saludar2(callable $parametro1, array $parametro2){
        return null;
    }

?>
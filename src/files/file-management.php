<?php

CONST FILES_DIRECTORY="./files";
function checkDirectory(string $name):bool {
    return false;
}

function createDirectory(string $name):bool {
    $content = scandir(FILES_DIRECTORY);
    var_dump($content);
    if (!in_array($name,$content)){
        mkdir(FILES_DIRECTORY.$name);
        return true;
    }
    return false;
}

function manageFiles(array $imageData) {
    foreach ($imageData as $file){
        continue;
    }
}
<?php
    $opcion1footer="Home";
    $opcion2footer="Ejercicio Siguiente";
    $usuario="Alejandro";
    $variable = "Hola";
    echo "<h3>Titulo de prueba</h3>";
    echo "<p class='parrafo'>parrafo de ejemplo</p>";
    echo "El valor de la varable es $variable<br>";
    echo 'El valor de la variable es $variable<br>';
    print("Ejemplo de mensaje con print<br>");
    echo "esto es una cadena "."y esto otra cadena"."<br>";
?>

<p>Bienvenido <?php
        if(isset($usuario)){
            echo "$usuario";
        }else{
            echo "Anonimo";
        }
    ?></p>

<a href="principal.php">
    <?php echo "$opcion1footer"?>
</a>
<a href="ejemplo2.php">
    <?=$opcion2footer?>
</a>
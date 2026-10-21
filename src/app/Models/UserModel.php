<?php

namespace Ciclost\Proyecto1\Models;

use Ciclost\Proyecto1\Class\User;
use PDO;
use PDOException;

class UserModel
{
    public static function getUsers():array{
        $conexion = "";
        try {
            $conexion = new PDO("mysql:host=mariadb;dbname=proyecto1",
                "alejandro",
                "alejandro");
            $conexion->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            echo $e->getMessage();
        }
        $sql = "SELECT * FROM users";
        $stmt = $conexion->prepare($sql);
        $stmt->execute();

        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return User::createMultipleUsersFromArray($resultado);
    }
}
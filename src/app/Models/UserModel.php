<?php

namespace Ciclost\Proyecto1\Models;

use Ciclost\Proyecto1\Class\User;
use PDO;
use PDOException;

class UserModel
{
    public static function getUsers(): array{
        $conexion = "";
        try {
            $conexion = new PDO("mysql:host=mariadb;dbname=proyecto1",
                "alejandro",
                "alejandro");
            $conexion->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        $sql = "SELECT * FROM users";
        $stmt = $conexion->prepare($sql);
        $stmt->execute();

        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return User::createMultipleUsersFromArray($resultado);
    }

    public static function saveUser(User $user): bool{
        $conexion = "";
        try {
            $conexion = new PDO("mysql:host=mariadb;dbname=proyecto1",
                "alejandro",
                "alejandro");
            $conexion->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        $sql = "INSERT INTO users(name, address,phone,birthdate,password,email) 
            VALUES (:name,:address,:phone,STR_TO_DATE(:birthdate,'%Y-%c-%d'),:password,:email)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindValue("name", $user->getName());
        $stmt->bindValue("address", $user->getAddress());
        $stmt->bindValue("phone", $user->getPhone());
        $stmt->bindValue("birthdate", $user->getBirthdate()->format('Y-m-d'));
        $stmt->bindValue("password", $user->getPassword());
        $stmt->bindValue("email", $user->getEmail());

        $stmt->execute();
        $resultado = $stmt->rowCount();
        if (!$resultado) {
            return false;
        } else {
            return true;
        }
    }

    public static function deleteUser(int $idUser):bool {
        $conexion="";
        try{
            $dsn= "mysql:host=mariadb;dbname=" . $_ENV['MARIADB_NAME'];
            $usuarioDB= $_ENV['MARIADB_USER'];
            $paswordDB= $_ENV['MARIADB_PASSWORD'];
            $conexion = new PDO($dsn,$usuarioDB,$paswordDB);
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            echo $e->getMessage();
        }
        $sql="DELETE FROM users WHERE id=?";
        $stmt = $conexion->prepare($sql);
        $stmt->bindValue(1,$idUser);
        $stmt->execute();
        if ($stmt->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public static function getUserById(int $idUser):User|false{
        $conexion = "";
        try {
            $conexion= new PDO("mysql:host=mariadb;dbname=proyecto1","alejandro","alejandro");
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            echo $e->getMessage();
        }
        $sql="SELECT * FROM users where id=:id";
        $stmt=$conexion->prepare($sql);
        $stmt->bindValue("id",$idUser);
        $stmt->execute();
        $resulrado = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($resulrado){
            return User::createFromArray($resulrado);
        }else {
            return false;
        }
    }

    public static function getUserByEmail(int $emailUser):User|false{
        $conexion = "";
        try {
            $conexion= new PDO("mysql:host=mariadb;dbname=proyecto1","alejandro","alejandro");
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            echo $e->getMessage();
        }
        $sql="SELECT * FROM users where email=:email";
        $stmt=$conexion->prepare($sql);
        $stmt->bindValue("email",$emailUser);
        $stmt->execute();
        $resulrado = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($resulrado){
            return User::createFromArray($resulrado);
        }else {
            return false;
        }
    }

    public static function updateUser(User $user){
        $conexion = "";
        try {
            $conexion = new PDO("mysql:host=mariadb;dbname=proyecto1",
                "alejandro",
                "alejandro");
            $conexion->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        $sql = "UPDATE users SET address=:address,
                 birthdate=STR_TO_DATE(:birthdate,'%Y-%m-%d'),
                 email=:email,
                 password=:password,
                 phone=:phone,
                 name=:name WHERE id=:id";
        $stmt = $conexion->prepare($sql);
        $stmt->bindValue("id", $user->getId());
        $stmt->bindValue("name", $user->getName());
        $stmt->bindValue("address", $user->getAddress());
        $stmt->bindValue("phone", $user->getPhone());
        $stmt->bindValue("birthdate", $user->getBirthdate()->format('Y-m-d'));
        $stmt->bindValue("password", $user->getPassword());
        $stmt->bindValue("email", $user->getEmail());

        $stmt->execute();
        $resultado = $stmt->rowCount();
        if (!$resultado) {
            return false;
        } else {
            return true;
        }
    }

}

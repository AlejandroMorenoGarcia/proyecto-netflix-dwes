<?php

namespace Ciclost\Proyecto1\Controllers;

use Ciclost\Proyecto1\Class\User;
use Ciclost\Proyecto1\Interfaces\ControlerInterface;
use Ciclost\Proyecto1\Models\UserModel;
use Respect\Validation\Exceptions\NestedValidationException;
use Respect\Validation\Validator as v;

class UserController implements ControlerInterface
{

    public function index()
    {
        // Nedesito preguntar al modelo y que me de un array con
        // los objetos que representen todos los usuarios que hay en la BBDD

        $usuarios=UserModel::getUsers();
        // var_dump($usuarios);
        // Tengo que crear una vista donde se mustre una
        // tabla con todos los usuarios
        include_once "app/Views/backend/admin.user.php";
    }

    public function show(int $id)
    {
        return "Me estas pidiendo los datos de $id";
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function update(int $id)
    {
        return "Modificado usuario $id";
    }

    public function store()
    {
        //Recibir los datos que me llegan por el metodo POST
        //var_dump($_POST);
        $validacion=User::validateUserCreation($_POST);
        if ($validacion === true) {
            $usuario = User::createFromArray($_POST);
            //var_dump($usuario);

            if (!UserModel::saveUser($usuario)){
                return "Ha ocurrido un error de almacenamiento";
            } else{
                return "Se ha guardado";
            }
        }else{
            foreach ($validacion as $error){
                echo $error;
            }
        }

    }

    public function edit(int $id)
    {
        // TODO: Implement edit() method.
    }

    public function destroy(int $id)
    {
        if(UserModel::deleteUser($id)){
            http_response_code(200);
            header('Content-Type: application/json');
            return json_encode([
                "error"=>false,
                "menssage"=>"Usuario eliminado correctamente",
                "code"=>200
            ]);
        }else{
            http_response_code(404);
            header('Content-Type: application/json');
            return json_encode([
                "error"=>true,
                "menssage"=>"No se ha podido eliminar el usuario",
                "code"=>404
            ]);
        }
    }
}
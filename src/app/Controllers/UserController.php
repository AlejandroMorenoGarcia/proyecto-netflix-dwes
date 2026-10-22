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
        var_dump($_POST);
        try{
            v::key('name', v::stringType())->
            key('address', v::stringType(),false)->
            key('phone', v::stringType()->length(9,14),false)->
            key('birthdate', v::date('Y-m-d'),false)->
            key('password', v::stringType()->length(3,25))->
            key('email', v::email())->
            assert($_POST);
        }catch (NestedValidationException $e){
            $errores = $e->getMessages();
            foreach ($errores as $error) {
                echo $error;
            }
        }

        $usuario = User::createFromArray($_POST);
        var_dump($usuario);
    }

    public function edit(int $id)
    {
        // TODO: Implement edit() method.
    }

    public function destroy(int $id)
    {
        return "Borrando usuario $id";
    }
}
<?php

namespace Ciclost\Proyecto1\Controllers;

use Ciclost\Proyecto1\Interfaces\ControlerInterface;
use Ciclost\Proyecto1\Models\UserModel;

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
        var_dump($_POST);
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
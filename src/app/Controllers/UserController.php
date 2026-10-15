<?php

namespace Ciclost\Proyecto1\Controllers;

use Ciclost\Proyecto1\Interfaces\ControlerInterface;

class UserController implements ControlerInterface
{

    public function index()
    {
        return "Hola";
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
<?php

namespace Ciclost\Proyecto1\Interfaces;

interface ControlerInterface
{
    //Ver todos los usuarios
    public function index();

    //Ver un solo usuario
    public function show(int $id);

    //Crear un usuario
    public function create();

    //Modificar un usuario
    public function update(int $id);

    //Eliminar un usuario
    public function delete(int $id);
}
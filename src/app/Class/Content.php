<?php

namespace Ciclost\Proyecto1\Class;

use Cassandra\Uuid;

class Content
{
    private string $uuid;
    private string $name;

    public function __construct(string $uuid){
        $this->uuid = $uuid;
    }

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): void
    {
        $this->uuid = $uuid;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }


}
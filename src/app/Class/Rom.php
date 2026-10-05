<?php

namespace Ciclost\Proyecto1\Class;

use Ciclost\Proyecto1\Class\Content;
use Ciclost\Proyecto1\Enums\RomPlatform;

class Rom extends Content
{
    private RomPlatform $plataforma;
    private int $player;

    public function __construct(string $uuid){
        parent::__construct($uuid);
    }

    public function getPlataforma(): RomPlatform
    {
        return $this->plataforma;
    }

    public function setPlataforma(RomPlatform $plataforma): void
    {
        $this->plataforma = $plataforma;
    }

    public function getPlayer(): int
    {
        return $this->player;
    }

    public function setPlayer(int $player): void
    {
        $this->player = $player;
    }


}
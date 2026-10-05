<?php

namespace Ciclost\Proyecto1\Class;

use Ciclost\Proyecto1\Class\Content;
use Ciclost\Proyecto1\Enums\MovieClassification;

class Peliculas extends Content
{
    private int $lenght;
    private string $synopsis;
    private array $type;
    private MovieClassification $classification;

    public function __construct(string $uuid){
        parent::__construct($uuid);
    }

    public function getLenght(): int
    {
        return $this->lenght;
    }

    public function setLenght(int $lenght): void
    {
        $this->lenght = $lenght;
    }

    public function getSynopsis(): string
    {
        return $this->synopsis;
    }

    public function setSynopsis(string $synopsis): void
    {
        $this->synopsis = $synopsis;
    }

    public function getType(): array
    {
        return $this->type;
    }

    public function setType(array $type): void
    {
        $this->type = $type;
    }

    public function getClassification(): MovieClassification
    {
        return $this->classification;
    }

    public function setClassification(MovieClassification $classification): void
    {
        $this->classification = $classification;
    }


}
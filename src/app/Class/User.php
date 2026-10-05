<?php

namespace Ciclost\Proyecto1\Class;

class User
{
    private int $id;
    private string $name;
    private string $address;
    private string $phone;
    private \DateTime $birthdate;
    private string $password;
    private string $email;
    private array $usedContent;

    public function __construct(){
        $this->usedContent=[];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getBirthdate(): \DateTime
    {
        return $this->birthdate;
    }

    public function setBirthdate(\DateTime $birthdate): void
    {
        $this->birthdate = $birthdate;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getUsedContent(): array
    {
        return $this->usedContent;
    }

    public function setUsedContent(array $usedContent): void
    {
        $this->usedContent = $usedContent;
    }
}
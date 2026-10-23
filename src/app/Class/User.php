<?php

namespace Ciclost\Proyecto1\Class;

use Respect\Validation\Exceptions\NestedValidationException;
use Respect\Validation\Validator as v;

class User implements \JsonSerializable
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

    public function jsonSerialize(): mixed
    {
        // TODO: Implement jsonSerialize() method.
    }

    public static function createFromArray(array $userData):User{
        $usuario = new User();

        if(isset($userData['id'])){
            //Si el usuario se esta leyendo de la BBDD
            $usuario->setId($userData['id']);
            $usuario->setPassword($userData['password']);
        }else{
            $password_cifrado = password_hash($userData['password'],PASSWORD_DEFAULT);
            $usuario->setPassword($password_cifrado);
        }
        //Propiedades que se tienen que insertar
        $usuario->setName($userData['name']);
        $usuario->setEmail($userData['email']);

        //Propiedades que pueden no insertarse
        $usuario->setAddress($userData['address']??'');
        $usuario->setPhone($userData['phone']??'');
        if (isset($userData['birthdate'])) {
            $usuario->setBirthdate(
                \DateTime::createFromFormat(
                    'Y-m-d', $userData['birthdate']));
        }else{
            $usuario->setBirthdate(
                \DateTime::createFromFormat(
                    'Y-m-d', '1900-01-01'));
        }

        return $usuario;
    }
    
    public static function createMultipleUsersFromArray(array $usersData):array {
        $usuarios=[];
        foreach ($usersData as $datosUsuarios){
            $usuarios[]=User::createFromArray($datosUsuarios);
        }
        return $usuarios;
    }

    public static function validateUserCreation(array $userData):array|true{
        try{
            v::key('name', v::stringType())->
            key('address', v::stringType(),false)->
            key('phone', v::stringType()->length(9,14),false)->
            key('birthdate', v::date('Y-m-d'),false)->
            key('password', v::stringType()->length(3,25))->
            key('email', v::email())->
            assert($_POST);
        }catch (NestedValidationException $e){
            return $e->getMessages();
        }
        return true;
    }


}
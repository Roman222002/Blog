<?php

namespace Model;


use Core\AbstractModel;

class User extends AbstractModel
{
    public const NAME = "name";
    public const LOGIN = "login";
    public const PASSWORD = "password";

    private $name, $login, $password;

    public function __construct($obj)
    {
        $this->id = $obj->id;
        $this->login = $obj->login;
        $this->password = $obj->password;
        $this->name = $obj->name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login): void
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }


    /**
     * @return array
     */
    public function getUserData(): array
    {
        return [
            'name' => $this->name,
            'login' => $this->login,
            'password' => $this->password,
            'isAdmin' => $this->isAdmin
        ];
    }
}
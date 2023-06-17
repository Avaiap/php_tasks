<?php
class User{
    protected string $login;
    private int $password;

    public function __construct(string $login, int $password)
    {
        $this->login = $login;
        $this->password = $password;
    }
}
//
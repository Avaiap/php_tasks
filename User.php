<?php
class User{
    private string $login;
    private int $password;

    public function __construct(string $login, int $password) {
        $this->login = $login;
        $this->password = $password;
    }

    public function setPassword(int $password): void {
        $this->password = $password;
    }
    
    public function setLogin(string $login): void {
        $this->login = $login;
    }

    public function getPassword(int $password) {
        return $this->password;
    }

    public function getLogin(string $login) {
        return $this->login;
    }
}

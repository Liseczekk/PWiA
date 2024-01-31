<?php

namespace DataBase;

class User
{
    private int $id;
    private string $email;
    private string $hashedPassword;
    private string $firstName;
    private string $lastName;

    public function __construct(int $id, string $email, string $password, string $firstName, string $lastName)
    {
        $this->id = $id;
        $this->email = $email;
        $this->setPassword($password);
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    private function hashPassword(string $password)
    {
        
        $this->hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        
        return $this->hashedPassword;
    }

    public function setPassword(string $password): void
    {
        $this->hashPassword($password);
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }
}
?>

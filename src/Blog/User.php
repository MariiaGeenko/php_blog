<?php

namespace Ember\Blog\Blog;

class User
{
    private int $id;
    private string $username;
    private string $login;
    private string $firstName;
    private string $lastName;

    public function __construct(string $firstName, string $lastName, string $login)
    {
        $this->id = 0;
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->login = $login;
    }

    public function id(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    public function __toString()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}
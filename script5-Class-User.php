<?php
class User {
    public string $username;
    public string $email;
    public ?string $sex;
    public ?int $age;
    public bool $isActive = true;

    function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    function getUsername(): string
    {
        return $this->username ?? 'unknown';
    }
}
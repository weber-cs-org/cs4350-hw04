<?php
/**
 * 20171011User class
 */

namespace App\Domain;

class User
{
    public $email;
    public $name;

    public function __construct($email, $name)
    {
        if (empty($email) || empty($name)) {
            throw new \InvalidArgumentException("empty arguments");
        }

        if (!is_string($email) || !is_string($name)) {
            throw new \InvalidArgumentException("arguments are not strings");
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException("email is not valid");
        }

        $this->email = $email;
        $this->name = $name;
    }
}

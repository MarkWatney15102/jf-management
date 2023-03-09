<?php

declare(strict_types=1);

namespace src\Model\User;

use lib\Model\AbstractEntity;
use src\Model\User\Mapper\UserMapper;

class User extends AbstractEntity
{
    protected string $mail = "";
    protected string $username = "";
    protected string $password = "";
    protected int $level = 0;

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     */
    public function setMail(string $mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    public function setLevel(int $level): void
    {
        $this->level = $level;
    }

    public static function currentUser(): User
    {
        $user = UserMapper::getInstance()?->read((int)$_COOKIE['UID']);

        if (!$user instanceof User) {
            throw new \Exception('No User is logged in');
        }

        return $user;
    }
}

<?php

namespace lib\Auth;

enum Level
{
    case NO_LEVEL;
    case USER;
    case ADMIN;

    public function getLevel(): int
    {
        return match ($this) {
            self::NO_LEVEL => 5,
            self::USER => 50,
            self::ADMIN => 100
        };
    }
}
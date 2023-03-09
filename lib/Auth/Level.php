<?php

namespace lib\Auth;

enum Level
{
    case NO_LEVEL;
    case ADMIN;

    public function getLevel(): int
    {
        return match ($this) {
            self::NO_LEVEL => 5,
            self::ADMIN => 100
        };
    }
}
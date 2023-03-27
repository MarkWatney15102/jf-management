<?php

declare(strict_types=1);

namespace src\Form\Register;

class RegisterFormFactory
{
    public static function make(): RegisterForm
    {
        $formData = new RegisterFormData();

        $formData->initStructure();

        return new RegisterForm('loginForm', $formData);
    }
}

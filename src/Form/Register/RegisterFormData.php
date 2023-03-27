<?php

declare(strict_types=1);

namespace src\Form\Register;

use Exception;
use lib\Element\Element;
use lib\Form\AbstractFormData;

class RegisterFormData extends AbstractFormData
{
    /**
     * @throws Exception
     */
    public function initStructure(): void
    {
        $this->addElement(
            [
                'id' => 'username',
                'type' => Element::TEXT,
                'label' => 'Benutzername'
            ]
        )->addElement(
            [
                'id' => 'email',
                'type' => Element::EMAIL,
                'label' => 'E-Mail'
            ]
        )->addElement(
            [
                'id' => 'password',
                'type' => Element::PASSWORD,
                'label' => 'Passwort'
            ]
        )->addElement(
            [
                'id' => 'password2',
                'type' => Element::PASSWORD,
                'label' => 'Passwort wiederholen'
            ]
        )->addElement(
            [
                'id' => 'login',
                'type' => Element::SUBMIT,
                'label' => 'Erstellen'
            ]
        );
    }
}

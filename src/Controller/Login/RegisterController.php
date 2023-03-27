<?php

namespace src\Controller\Login;

use lib\Controller\AbstractController;
use lib\Message\Message;
use lib\Message\MessageGroup;
use src\Form\Register\RegisterFormFactory;
use src\Helper\HTML;
use src\Helper\Redirect;
use src\Model\User\Mapper\UserMapper;
use src\Model\User\User;

class RegisterController extends AbstractController
{
    public function registerAction(): void
    {
        $this->form = RegisterFormFactory::make();

        $this->render('register/register', [
            'renderWithBasicBody' => false,
            'form' => $this->form
        ]);
    }

    public function tryRegisterAction(): void
    {
        $username = HTML::cleanString($_POST['username']);
        $password = HTML::cleanString($_POST['password']);
        $password2 = HTML::cleanString($_POST['password2']);
        $email = HTML::cleanString($_POST['email']);

        if (!empty($username) && !empty($password) && !empty($password2) && !empty($email)) {
            if ($password === $password2) {
                $user = new User();
                $user->setLevel(0);
                $user->setMail($email);
                $user->setUsername($username);
                $user->setPassword(password_hash($password, PASSWORD_ARGON2I));

                UserMapper::getInstance()->create($user);

                MessageGroup::getInstance()?->addMessage(Message::SUCCESS, 'Registrierung erfolgreich', 'Der Benutzer wurde erstellt und muss noch aktiviert werden');
                Redirect::to('/login');
            } else {
                MessageGroup::getInstance()?->addMessage(Message::ERROR, 'Registrierung fehlerhaft', 'Passwörter stimmen nicht überein');
                Redirect::to('/register');
            }
        } else {
            MessageGroup::getInstance()?->addMessage(Message::ERROR, 'Registrierung fehlerhaft', 'Bitte alle Felder befüllen!');
            Redirect::to('/register');
        }
    }
}
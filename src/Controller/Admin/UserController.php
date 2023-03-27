<?php

namespace src\Controller\Admin;

use lib\Controller\AbstractController;
use lib\Message\Message;
use lib\Message\MessageGroup;
use src\Helper\Redirect;
use src\Model\User\Mapper\UserContainer;
use src\Model\User\Mapper\UserMapper;
use src\Model\User\User;

class UserController extends AbstractController
{
    public function listUsersAction(): void
    {
        $users = UserContainer::getInstance()->findBy();

        $this->render(
            'admin/users',
            [
                'renderWithBasicBody' => true,
                'users' => $users
            ]
        );
    }

    public function changeUserLevelAction(): void
    {
        $userId = (int)$this->urlParams[0];
        $level = (int)$this->urlParams[1];

        if (!empty($userId) && $level >= 0) {
            $user = UserMapper::getInstance()->read($userId);

            if ($user instanceof User) {
                $user->setLevel($level);

                UserMapper::getInstance()->update($user);

                MessageGroup::getInstance()?->addMessage(Message::SUCCESS, 'Level angepasst', 'Das Level des Benutzers wurde angepasst');
                Redirect::to('/admin/users');
            } else {
                MessageGroup::getInstance()?->addMessage(Message::ERROR, 'User wurde nicht gefunden', 'Der angegeben Benutzer konnte nicht gefunden werden');
                Redirect::to('/admin/users');
            }
        } else {
            MessageGroup::getInstance()?->addMessage(Message::ERROR, 'User Id oder Level nicht gesetzt', 'Bitte alle Felder befüllen!');
            Redirect::to('/admin/users');
        }
    }
}
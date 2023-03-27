<?php

use lib\Auth\Level;
use src\Model\User\User;

/** @var User[] $users */
$users = $this->users;

$me = User::currentUser();
?>
<div class="columns">
    <div class="column is-12">
        <div class="box">
            <h3 class="title is-3">Users</h3>
            <div class="box-body">
                <div class="table-container">
                    <table class="table is-narrow is-fullwidth is-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Benutzername</th>
                            <th>E-Mail</th>
                            <th>Level</th>
                            <th>Aktionen</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users as $user) { ?>
                            <?php
                                if ($user->getID() === $me->getID()) {
                                    continue;
                                }
                            ?>
                            <tr>
                                <td><?= $user->getID() ?></td>
                                <td><?= $user->getUsername() ?></td>
                                <td><?= $user->getMail() ?></td>
                                <td><?= $user->getLevel() ?></td>
                                <td>
                                    <?php if ($user->getLevel() === 0 || $user->getLevel() === Level::NO_LEVEL->getLevel() || $user->getLevel() === Level::USER->getLevel()) { ?>
                                        <a href="/admin/user/level/<?= $user->getID() ?>/100" class="button is-success">Admin</a>
                                    <?php } ?>
                                    <?php if ($user->getLevel() === 0 || $user->getLevel() === Level::NO_LEVEL->getLevel() || $user->getLevel() === Level::ADMIN->getLevel()) { ?>
                                        <a href="/admin/user/level/<?= $user->getID() ?>/50" class="button is-info">User</a>
                                    <?php } ?>
                                    <?php if ($user->getLevel() !== 0) { ?>
                                        <a href="/admin/user/level/<?= $user->getID() ?>/0" class="button is-danger">Deaktivieren</a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
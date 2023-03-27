<?php

use src\Model\User\User;

$user = User::currentUser();

?>
<aside class="menu">
    <p class="menu-label">
        Manager
    </p>
    <ul class="menu-list">
        <li><a href="/home">Übersicht</a></li>
        <li><a href="/diensterfassung">Diensterfassungsblatt</a></li>
        <?php if ($user->getLevel() === 100) { ?>
            <li><a href="/admin/users">Benutzer</a></li>
        <?php } ?>
        <li><a href="/logout">Logout</a></li>
    </ul>
</aside>
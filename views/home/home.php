<?php

use src\Model\Member\Member;

/** @var Member[] $members */
$members = $this->members;

/** @var Member[] $betreuer */
$betreuer = $this->betreuer;
?>
<div class="columns">
    <div class="column is-6 is-12-mobile">
        <div class="box">
            <h3 class="title is-3">JF Mitglied hinzufügen</h3>
            <div class="box-body">
                <form action="/diensterfassung" method="post">
                    <input type="hidden" name="position" value="1">
                    <div class="field">
                        <label for="firstname">Vorname</label>
                        <input type="text" name="firstname" id="firstname" class="input">
                    </div>

                    <input type="submit" value="Hinzufügen" class="button is-success" name="addMember">
                </form>
            </div>
        </div>
    </div>
    <div class="column is-6 is-12-mobile">
        <div class="box">
            <h3 class="title is-3">Betreuer hinzufügen</h3>
            <div class="box-body">
                <form action="/diensterfassung" method="post">
                    <input type="hidden" name="position" value="2">
                    <div class="field">
                        <label for="firstname">Vorname</label>
                        <input type="text" name="firstname" id="firstname" class="input">
                    </div>

                    <input type="submit" value="Hinzufügen" class="button is-success" name="addMember">
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<div class="columns">
    <div class="column is-6 is-12-mobile">
        <div class="box">
            <h3 class="title is-3">JF-Mitglieder</h3>
            <a href="/diensterfassung?PDF=1" class="button is-success" target="_blank">PDF erstellen</a>
            <div class="box-body">
                <table class="table is-narrow is-striped is-fullwidth">
                    <thead>
                    <tr>
                        <th>Vorname</th>
                        <th>Aktionen</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($members as $member) { ?>
                        <tr>
                            <td><?= $member->getFirstname() ?></td>
                            <td>
                                <form action="/home" method="post">
                                    <input type="hidden" name="member" value="<?= $member->getID() ?>">
                                    <input type="submit" value="Löschen" class="button is-danger"
                                           name="deleteMember">
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="column is-6 is-12-mobile">
        <div class="box">
            <h3 class="title is-3">Betreuer</h3>
            <div class="box-body">
                <table class="table is-narrow is-striped is-fullwidth">
                    <thead>
                    <tr>
                        <th>Vorname</th>
                        <th>Aktionen</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($betreuer as $member) { ?>
                        <tr>
                            <td><?= $member->getFirstname() ?></td>
                            <td>
                                <form action="/home" method="post">
                                    <input type="hidden" name="member" value="<?= $member->getID() ?>">
                                    <input type="submit" value="Löschen" class="button is-danger"
                                           name="deleteMember">
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
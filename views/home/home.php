<?php

use src\Model\Member\Member;

/** @var Member[] $members */
$members = $this->members;
?>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Mitglieder</h3>
                <a href="/home?PDF=1" class="btn btn-success" target="_blank">PDF erstellen</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Vorname</th>
                                <th>Nachname</th>
                                <th>Position</th>
                                <th>Aktionen</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($members as $member) { ?>
                                <tr>
                                    <td><?= $member->getFirstname() ?></td>
                                    <td><?= $member->getLastname() ?></td>
                                    <td><?= $member->getPosition() === 1 ? 'JF-Mitglied' : 'Betreuer' ?></td>
                                    <td>
                                        <form action="/home" method="post">
                                            <input type="hidden" name="member" value="<?= $member->getID() ?>">
                                            <input type="submit" value="Löschen" class="btn btn-danger" name="deleteMember">
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
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Aktionen</h3>
            </div>
            <div class="card-body">
                <form action="/home" method="post">
                    <label for="firstname">Vorname</label>
                    <input type="text" name="firstname" id="firstname" class="form-control">

                    <label for="lastname">Nachname</label>
                    <input type="text" name="lastname" id="lastname" class="form-control">

                    <label for="position">Position</label>
                    <select name="position" id="position" class="form-control">
                        <option value="1">JF-Mitglied</option>
                        <option value="2">Betreuer</option>
                    </select>

                    <br>

                    <input type="submit" value="Hinzufügen" class="btn btn-success" name="addMember">
                </form>
            </div>
        </div>
    </div>
</div>
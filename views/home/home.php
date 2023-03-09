<?php

use src\Model\Member\Member;

/** @var Member[] $members */
$members = $this->members;

/** @var Member[] $betreuer */
$betreuer = $this->betreuer;
?>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">JF Mitglied hinzufügen</h3>
            </div>
            <div class="card-body">
                <form action="/home" method="post">
                    <input type="hidden" name="position" value="1">
                    <label for="firstname">Vorname</label>
                    <input type="text" name="firstname" id="firstname" class="form-control">

                    <br>

                    <input type="submit" value="Hinzufügen" class="btn btn-success" name="addMember">
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Betreuer hinzufügen</h3>
            </div>
            <div class="card-body">
                <form action="/home" method="post">
                    <input type="hidden" name="position" value="2">
                    <label for="firstname">Vorname</label>
                    <input type="text" name="firstname" id="firstname" class="form-control">

                    <br>

                    <input type="submit" value="Hinzufügen" class="btn btn-success" name="addMember">
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">JF-Mitglieder</h3>
                <a href="/home?PDF=1" class="btn btn-success" target="_blank">PDF erstellen</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table">
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
                <h3 class="card-title">Betreuer</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table">
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
</div>
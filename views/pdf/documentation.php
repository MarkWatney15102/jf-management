<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JF Dokumentation</title>
    <style>
        .left {
            float: left;
            width: 66%;
        }
        .right {
            float: left;
            width: 33%;
        }

        table {
            border-collapse: separate;
            border-spacing: 0 0;
        }

        .td {
            border: 1px solid black;
            padding: 2px;
            background-color: aliceblue;
        }

        .member-container {
            padding: 15px;
            background-color: yellow;
        }

        .inner-left {
            width: 18%;
        }

        .inner-right {
            width: 75%;
        }

        .checkbox {
            padding: 0 !important;
            height: 10px;
            width: 10px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
<u style="font-size: 25px; font-weight: bold">Diensterfassungsblatt</u>
<br>
<br>
<div class="container">
    <div class="left">
        <u>Datum:</u>&nbsp;&nbsp;&nbsp;_______________________ von _______ bis _______
        <br>
        <br>
        <div>
            <div class="inner-left"><u>Dienstart:</u></div>
            <div class="inner-right">
                <table style="width: 95%; margin-top: -20px; margin-left: 100px;">
                    <tr>
                        <td style="width: 18%;"><input type="checkbox"></td>
                        <td style="">Allgemeine Jugendartbeit</td>
                    </tr>
                    <tr>
                        <td style="width: 18%;"><input type="checkbox"></td>
                        <td>Fahrzeug und Gerätekunde</td>
                    </tr>
                    <tr>
                        <td style="width: 18%;"><input type="checkbox"></td>
                        <td>Feuerwehrtechnische Ausbildung</td>
                    </tr>
                    <tr>
                        <td style="width: 18%;"><input type="checkbox"></td>
                        <td>Übungsdienst Wettkampf</td>
                    </tr>
                    <tr>
                        <td style="width: 18%;"><input type="checkbox"></td>
                        <td>Sitzung/Tagung/Besprechung</td>
                    </tr>
                    <tr>
                        <td style="width: 18%;"><input type="checkbox"></td>
                        <td>Zeltlager/Fahrten/Freizeiten</td>
                    </tr>
                    <tr>
                        <td style="width: 18%;"><input type="checkbox"></td>
                        <td>Dienstbesuch</td>
                    </tr>
                    <tr>
                        <td style="width: 18%;"><input type="checkbox"></td>
                        <td>Jahreshauptversamlung</td>
                    </tr>
                </table>
            </div>
        </div>
        <div style="margin-top: 15px">
            <div class="inner-left"><u>Art:</u></div>
            <div class="inner-right">
                <table style="width: 95%; margin-top: -20px; margin-left: 100px;">
                    <tr>
                        <td style="width: 18%;"><input type="checkbox"></td>
                        <td>Praxis</td>
                        <td style="width: 18%;"><input type="checkbox"></td>
                        <td>Theorie</td>
                    </tr>
                    <tr>
                        <td style="width: 18%;"><input type="checkbox"></td>
                        <td>Sonstiges</td>
                        <td style="width: 18%;"><input type="checkbox"></td>
                        <td>Versammlung</td>
                    </tr>
                </table>
            </div>
        </div>
        <div style="margin-top: 15px">
            <div class="inner-left"><u>Adresse:</u></div>
            <div class="inner-right">
                <table style="width: 95%; margin-top: -20px; margin-left: 100px;">
                    <tr>
                        <td style="width: 18%;"><input type="checkbox"></td>
                        <td>Feuerwehrhaus Loga</td>
                    </tr>
                    <tr>
                        <td style="width: 18%;"><input type="checkbox"></td>
                        <td>Sonstiges</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div style="width: 350px; height: 75px; border: 1px solid black"></div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div style="margin-top: 15px">
            <div class="inner-left"><u>Bericht:</u></div>
            <div class="inner-right">
                <table style="width: 95%; margin-top: -20px; margin-left: 100px;">
                    <tr>
                        <td>
                            <div style="width: 350px; height: 185px; border: 1px solid black"></div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div style="margin-top: 15px">
            <div class="inner-left"><u>Besucher:</u></div>
            <div class="inner-right">
                <table style="width: 95%; margin-top: -20px; margin-left: 100px;">
                    <tr>
                        <td>
                            <div style="width: 350px; height: 75px; border: 1px solid black"></div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div style="margin-top: 15px">
            <div style="width: 45%"><u>Leiter des Dienstes:</u></div>
            <div style="width: 55%">
                <table style="width: 95%; margin-top: -20px; margin-left: 150px;">
                    <tr>
                        <td>
                            _____________________________________
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div style="margin-top: 15px">
            <div style="width: 45%"><u>Schriftführer:</u></div>
            <div style="width: 55%">
                <table style="width: 95%; margin-top: -20px; margin-left: 150px;">
                    <tr>
                        <td>
                            _____________________________________
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div style="margin-top: 45px;">
            <div style="width: 60%"><u>Unterschrift Übungsleiter:</u></div>
            <div style="width: 40%">
                <table style="width: 95%; margin-top: -20px; margin-left: 200px;">
                    <tr>
                        <td>
                            _______________________________
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div style="margin-top: 15px">
            <div style="width: 60%"><u>Eintrag in FeuerOn:</u></div>
            <div style="width: 40%">
                <table style="width: 95%; margin-top: -20px; margin-left: 200px;">
                    <tr>
                        <td>
                            _______________________________
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="right">
        <div class="member-container">
            <p style="font-size: 20px; text-align: center; margin-top: -8px; margin-bottom: 2px; padding: 0">Anwesenheit</p>
            <table class="table" style="width: 100%;">
                <?php foreach ($jfMembers as $jfMember) { ?>
                    <tr>
                        <td class="td" style="width: 18%;"></td>
                        <td class="td" style="width: auto"><?= $jfMember->getFirstname(); ?></td>
                    </tr>
                <?php } ?>
            </table>
            <br>
            <table style="width: 100%;">
                <?php foreach ($jfBetreuers as $jfMember) { ?>
                    <tr>
                        <td class="td" style="width: 18%;"></td>
                        <td class="td"><?= $jfMember->getFirstname(); ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>

</body>
</html>
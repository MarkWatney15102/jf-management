<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JF Manager</title>
    <link rel="stylesheet" href="/dist/css/build.css">
</head>
<body>
<section class="section">
    <div class="container-fluid">
        <div class="columns">
            <div class="column is-2">
                <div class="box">
                    <h3 class="title is-3">
                        JF-Manager
                    </h3>
                    <div class="box-body">
                        <?php use lib\Message\MessageGroup;

                        require $_SERVER['DOCUMENT_ROOT'] . '/views/layout/navbar.php';
                        $messageGroup = MessageGroup::getInstance();
                        echo $messageGroup->printMessages();
                        ?>
                    </div>
                </div>
            </div>
            <div class="column is-10">


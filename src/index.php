<?php
    $contacts = [
        ['name' => 'tomas', 'email' => 'tomas@mail.com'],
        ['name' => 'marina', 'email' => 'marina@mail.com'],
        ['name' => 'matias', 'email' => 'matias@mail.com'],
        ['name' => 'nahuel', 'email' => 'nahuel@mail.com'],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contacts</title>
    <link rel="stylesheet" href="./static/style.css">
</head>
<body>
    <div class="container">
        <?foreach($contacts as $contact) { ?>
            <div class="card">
                <h3 class="name"><?= $contact['name']?></h3>
                <p class="email"><?= $contact['email']?></p>

                <section class="card_btns">
                    <a href="#" class="btn btn-edit">Edit contact</a>
                    <a href="#" class="btn btn-delete">Delete contact</a>
                </section>      
            </div>
        <?}?>
    </div>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $contact = [
        'name' => $_POST['name'],
        'email' => $_POST['email']
    ];

    $contacts = [];
    $contacts[] = $contact;

    file_put_contents("contacts.json", json_encode($contacts), FILE_APPEND);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add contact</title>

    <link rel="stylesheet" href="./static/style.css">
</head>
<body>
    <div class="container">
        <form class="add-contact" method="POST" action="add.php">
            <label for="name">
                <p>Introduce name contact:</p>
                <input type="text" name="name" require></label>
            
            <label for="email">
                <p>Introduce email contact:</p>
                <input type="email" name="email" require>
            </label>
            
            <button type="submit">Add Contact</button>
        </form>
    </div>
</body>
</html>
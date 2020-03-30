<?php

    require 'includes/functions.php';
    $connection = dbConnect();

    try {
        $sql = "SELECT voornaam, achternaam, email, wachtwoord, id FROM gebruikers ORDER BY id";
        $statement = $connection->query($sql);
    } 
    catch (PDOException $e){
        echo 'Fout bij SQL query:<br>' . $e->getMessage() . ' op regel ' . $e->getLine() . ' in ' . $e->getFile();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<h1>Registreren</h1>
    <form action="save_user.php" method="POST">
        <p>
            <label for="">Voornaam:</label>
            <input type="text" name="voornaam" value="">
        </p>
        <p>
            <label for="">Achternaam:</label>
            <input type="text" value="" name="achternaam">
        </p>
        <p>
            <label for="">Email:</label>
            <input type="text" value="" name="email">
        </p>
        <p>
            <label for="">Wachtwoord:</label>
            <input type="password" name="wachtwoord" value="">
        </p>
        <button type="submit" class="button button1">Registreren</button>
    </form>
</body>
</html>
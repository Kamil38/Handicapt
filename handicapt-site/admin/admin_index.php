<?php 
    include '../includes/functions.php';
    // loginIfNeeded();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingelogd</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <h2>Welkom <?php echo $_SESSION['voornaam'] ?></h2>
    <p>Je gebruikers ID = <?php echo $_SESSION['user_id'] ?></p>
    <p><a href="../logout.php">Log out</a></p>

</body>
</html>
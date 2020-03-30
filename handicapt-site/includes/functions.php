<?php
session_start();

function dbConnect()
{

    $config = require __DIR__ .'/config.php';

    try {
        $connection = new PDO('mysql:host=' . $config['hostname'] . ';dbname=' . $config['database'], $config['username'], $config['password']);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $connection;
    }
    catch(PDOException $e) {
        echo 'Fout bij database verbinding: ' . $e->getMessage() . ' op regel ' . $e->getLine() . ' in ' . $e->getFile();
        exit();
    }

    return false;

}






// function loginIfNeeded() {
//     $config = require __DIR__ .'/config.php';
//     if ( ! isLoggedIn() ){
//         header('Location: ' . $config['start_url']);
//     }
// }


// function isLoggedIn() {
//     if ( isset( $_SESSION['user_id'] ) ) {
//         return true;
//     }

//     return false;
// }

?>
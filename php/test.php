<?php
try {
    $host = 'mariadb';  // nom du conteneur de la base de données MariaDB
    $dbname = 'test';
    $user = 'root';
    $pass = 'my-secret-pw';

    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    foreach($dbh->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>

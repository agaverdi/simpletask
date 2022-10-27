<?php
require './bootstrap.php';

$statement = <<<EOS
    CREATE TABLE IF NOT EXISTS users (
        id INT NOT NULL AUTO_INCREMENT,
        firstname VARCHAR(100) NOT NULL,
        username VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        PRIMARY KEY (id)
    ) ENGINE=INNODB;

    INSERT INTO users
        (id, firstname, username, email)
    VALUES
        (1, 'Adil', 'Kratos1', 'adil1@gmail.com'),
        (2, 'Amil', 'Kratos2', 'adil2@gmail.com'),
        (3, 'Adif', 'Kratos3', 'adil3@gmail.com'),
        (4, 'Asil', 'Kratos4', 'adil4@gmail.com'),
        (5, 'Akil', 'Kratos5', 'adil5@gmail.com'),
        (6, 'Asif', 'Kratos6', 'adil6@gmail.com'),
        (7, 'Asef', 'Kratos7', 'adil7@gmail.com'),
        (8, 'Amid', 'Kratos8', 'adil8@gmail.com'),
        (9, 'Azer', 'Kratos9', 'adil9@gmail.com');
EOS;
try {
    $createTable = $dbConnection->exec($statement);
    echo "Success!\n";
} catch (\PDOException $e) {
    exit($e->getMessage());
}
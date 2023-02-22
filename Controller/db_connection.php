<?php
    // constants
    define('DB_HOST','localhost');
    define('DB_NAME','maBibliotheque');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','root');
    define('DB_DSN','mysql:dbname='.DB_NAME.';host='.DB_HOST.';port=3306;charset=UTF8');

    // connection to database
    $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
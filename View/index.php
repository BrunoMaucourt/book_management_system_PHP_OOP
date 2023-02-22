<?php
    session_start();
    $title = "Ma bibliothèque";
    require_once "../Element/header.php";
?>

<?PHP
    require_once('../Controller/db_connection.php');
    require_once('../Model/all_books.php');
    require_once('../Element/book_list.php');
    require_once "../Element/footer.php";
?>
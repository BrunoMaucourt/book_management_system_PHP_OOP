<?php

    // Remove character associated to HTML to prevent Cross-site scripting (XSS)
    $book_name = htmlspecialchars($_POST['book_name']);
    $book_author = htmlspecialchars($_POST['book_author']);
    $book_category = htmlspecialchars($_POST['book_category']);
    $book_synopsis = htmlspecialchars($_POST['book_synopsis']);
    $book_year_publication = htmlspecialchars($_POST['book_year_publication']);
    $book_id = $_POST['book_id'];

    // Connection to database
    require_once "./db_connection.php";

    // Add values in database
    require_once "../Model/edit_book.php";

    // Go to a new page
    header("Location: ../View/index.php");
    exit();
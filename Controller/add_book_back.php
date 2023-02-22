<?php

    session_start();

    // Reset Session error
    unset($_SESSION['error']);

    // Get values from form
    // Remove character associated to HTML to prevent Cross-site scripting (XSS)
    $book_name = htmlspecialchars($_POST['book_name']);
    $book_author = htmlspecialchars($_POST['book_author']);
    $book_category = htmlspecialchars($_POST['book_category']);
    $book_synopsis = htmlspecialchars($_POST['book_synopsis']);
    $book_year_publication = $_POST['book_year_publication'];

    // Connection to database
    require_once "./db_connection.php";

    // Check if book duplicate exist before to add
    require_once "../Model/check_book_duplicate.php";
    // If duplicate = 0, book is not in database, new values can be add
    if($book['duplicate'] == 0){
        // Add values in database
        require_once "../Model/add_book.php";
    }else{
        // Create an error message
        $_SESSION['error'] = "Le livre existe déjà dans la base de donnée";
        // Return to previous page with error page
        header("Location: ../View/add_book_form.php");
        exit();
    }

    // Go to a index page
    header("Location: ../View/index.php");
    exit();
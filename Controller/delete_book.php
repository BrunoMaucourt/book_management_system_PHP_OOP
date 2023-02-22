<?php

    // Get values from form
    $book_id = $_POST['book_id'];
    
    // Connection to database
    require "./db_connection.php";
    
    // Delete values in database
    require "../Model/delete_book_by_id.php";
    
    // Go to a new page
    header("Location: ../View/index.php");
    exit();
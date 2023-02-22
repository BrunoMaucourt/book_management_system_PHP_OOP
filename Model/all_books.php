<?php
    // Find all books
    $stmt = $dbh->query("SELECT * FROM maBibliotheque");
    $books = $stmt-> fetchAll();
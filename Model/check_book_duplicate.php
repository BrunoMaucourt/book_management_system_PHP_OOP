<?php
    // Find a book by this ID
    $query = "SELECT COUNT(*) AS duplicate FROM maBibliotheque WHERE (nomLivre = ? AND nomAuteur = ? AND datePublication = ?)";
    $stmt = $dbh->prepare($query);
    $stmt->execute([$book_name, $book_author, $book_year_publication]);
    $book = $stmt->fetch(PDO::FETCH_ASSOC);
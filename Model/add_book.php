<?php

    $query = "INSERT maBibliotheque SET nomLivre = ?, nomAuteur = ?, categorie = ?, datePublication = ?, synopsis = ?";
    $stmt = $dbh->prepare($query);
    $stmt->execute([$book_name, $book_author, $book_category, $book_year_publication, $book_synopsis]);
    $book = $stmt->fetch(PDO::FETCH_ASSOC);
<?php

    $query = "UPDATE maBibliotheque SET nomLivre = ?, nomAuteur = ?, categorie = ?, datePublication = ?, synopsis = ? WHERE ID = ?";
    $stmt = $dbh->prepare($query);
    $stmt->execute([$book_name, $book_author, $book_category, $book_year_publication, $book_synopsis, $book_id]);
    $book = $stmt->fetch(PDO::FETCH_ASSOC);
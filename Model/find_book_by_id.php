<?php
    // Find a book by this ID
    $query = "SELECT * FROM maBibliotheque WHERE ID = ?";
    $stmt = $dbh->prepare($query);
    $stmt->execute([$book_id]);
    $book = $stmt->fetch(PDO::FETCH_ASSOC);
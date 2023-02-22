<?php
    session_start();
    $title = "Supprimer un livre";
    $book_id = $_GET['id'];
    require_once "../Element/header.php";
    require_once "../Controller/db_connection.php";
    require_once "../Model/find_book_by_id.php";
?>
<h1>Supprimer un livre</h1>
<div class="container p-5 mb-3">
    <div class="boder bg-light p-5 d-flex flex-column justify-content-center">
        <p class="text-center">Êtes vous sûr de vouloir supprimer le livre suivant : </p>
        <?php require_once "../Element/book_only_one.php";?>
        <form action="../Controller/delete_book.php" method="post" class="d-flex flex-column justify-content-center">
            <input type="hidden" name="book_id" value="<?php echo($book_id); ?>"></input>
            <input type="submit" class="btn btn-danger" value="Supprimer le livre">
        </form>
    </div>
</div>

<?PHP
    require_once "../Element/footer.php";
?>
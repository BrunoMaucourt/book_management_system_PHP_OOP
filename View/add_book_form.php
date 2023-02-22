<?php
    session_start();
    $title = "Ajouter un livre";
    require_once "../Element/header.php";
?>
<h1>Ajouter un livre</h1>
<div class="container mb-3">
    <?php 
        // Afficher un message si un erreur est présente
        if(isset($_SESSION['error'])){
            require_once "../Element/error_message.php";
        }
    ?>
    <form action="../Controller/add_book_back.php" method="post" class="form-row">
        <div class="form-group row mt-3">
            <label for="book_name">Nom du livre</label>
            <input type="text" name="book_name" id="book_name" placeholder="Nom du livre" required="required">
        </div>
        <div class="form-group row mt-3">
            <label for="book_author">Nom de l'auteur</label>
            <input type="text" name="book_author" id="book_author" placeholder="Nom de l'auteur" required="required">
        </div>
        <div class="form-group row mt-3">
            <label for="book_category">Catégorie du livre</label>
            <input type="text" name="book_category" id="book_category" placeholder="Catégorie du livre" required="required">
        </div>
        <div class="form-group row mt-3">
            <label for="book_synopsis">Synopsis du livre</label>
            <textarea type="text" name="book_synopsis" id="book_synopsis" placeholder="Synopsis du livre" required="required"></textarea>       
        </div>
        <div class="form-group row mt-3">
            <label for="book_year_publication">Année de publication du livre</label>
            <input type="number" name="book_year_publication" id="book_year_publication" step="1" required="required">
        </div>
        <div class="form-group row mt-3">
           <input type="submit" value="Ajouter" class="btn btn-success">
        </div>
    </form>
</div>
<?PHP
    require_once "../Element/footer.php";
?>
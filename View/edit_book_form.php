<?php
    session_start();
    $title = "Modifier les informations d'un livre";
    if(empty($_GET['id'])){
        header("Location: ./index.php");
    }else{
        $book_id = $_GET['id'];
    }
    require_once "../Element/header.php";
    require_once('../Controller/db_connection.php');
    require_once('../Model/find_book_by_id.php');
?>
<h1>Modifier les informations d'un livre</h1>
<div class="container mb-3">
    <form action="../Controller/edit_book_back.php" method="post" class="form-row">
        <div class="form-group row mt-3">
            <label for="book_name">Nom du livre</label>
            <input type="text" name="book_name" id="book_name" value="<?php echo($book['nomLivre']); ?>" required="required">
        </div>
        <div class="form-group row mt-3">
            <label for="book_author">Nom de l'auteur</label>
            <input type="text" name="book_author" id="book_author" value="<?php echo($book['nomAuteur']); ?>" required="required">
        </div>
        <div class="form-group row mt-3">
            <label for="book_category">Catégorie du livre</label>
            <input type="text" name="book_category" id="book_category" value="<?php echo($book['categorie']); ?>" required="required">
        </div>
        <div class="form-group row mt-3">
            <label for="book_synopsis">Synopsis du livre</label>
            <textarea type="text" name="book_synopsis" id="book_synopsis" required="required"><?php echo($book['synopsis']); ?></textarea>       
        </div>
        <div class="form-group row mt-3">
            <label for="book_year_publication">Année de publication du livre</label>
            <input type="number" name="book_year_publication" id="book_year_publication" step="1" value="<?php echo($book['datePublication']); ?>" required="required">
        </div>
        <div class="form-group row mt-3">
            <input type="hidden" name="book_id" value="<?php echo($book_id); ?>">
           <input type="submit" value="Modifier" class="btn btn-success">
        </div>
    </form>
</div>
<?PHP
    require_once "../Element/footer.php";
?>
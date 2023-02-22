<div class="table-responsive mt-3 mb-3">
    <table class="table table-striped text-center">
    <thead>
        <tr>
        <th scope="col">Titre</th>
        <th scope="col">Auteur</th>
        <th scope="col">Catégorie</th>
        <th scope="col">Synopsis</th>
        <th scope="col">Année de publication</th>
        <th scope="col">Editer</th>
        <th scope="col">Supprimer</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach($books as $book){
        ?>
        <tr>
            <td>
                <?PHP
                    echo($book['nomLivre']);
                ?>
            </td>
            <td>
                <?PHP
                    echo($book['nomAuteur']);
                ?>
            </td>
            <td>
                <?PHP
                    echo($book['categorie']);
                ?>
            </td>
            <td>
                <?PHP
                    // Show only a part of synopsis if it's superior to 50 characters
                    $synopsis_max_length = 50;

                    // If superior to 50 characters truncat and add "..." at the end else write all the synopsis
                    if(strlen($book['synopsis']) > $synopsis_max_length){
                        $synopsis_start_position = 0;
                        echo(substr($book['synopsis'], $synopsis_start_position, $synopsis_max_length) . ' ...');
                    }else{
                        echo($book['synopsis']);
                    }
                ?>
            </td>
            <td>
                <?PHP
                    echo($book['datePublication']);
                ?>
            </td>
            <td>
                <a class="btn btn-secondary" href="./edit_book_form.php?id=<?php echo($book['ID']) ?>">Editer</a>
            </td>
            <td>
                <a class="btn btn-danger" href="./delete_book.php?id=<?php echo($book['ID']) ?>">Supprimer</a>
            </td>
        </tr>
        <?php }; ?>
    </tbody>
    </table>
</div>
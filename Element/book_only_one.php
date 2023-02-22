<div class="table-responsive mt-3 mb-3">
    <table class="table table-striped text-center">
    <thead>
        <tr>
        <th scope="col">Titre</th>
        <th scope="col">Auteur</th>
        <th scope="col">Catégorie</th>
        <th scope="col">Synopsis</th>
        <th scope="col">Année de publication</th>
        </tr>
    </thead>
    <tbody>
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
                    // Show only a part of synopsis
                    $synopsis_start_position = 0;
                    $synopsis_start_length = 50;
                    echo(substr($book['synopsis'], $synopsis_start_position, $synopsis_start_length) . ' ...');
                ?>
            </td>
            <td>
                <?PHP
                    echo($book['datePublication']);
                ?>
            </td>
        </tr>
    </tbody>
    </table>
</div>
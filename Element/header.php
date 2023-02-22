<!DOCTYPE html>
<html class="h-100 w-100" lang="fr">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../Picture/favicon.svg">
    <title><?php echo($title); ?></title>
</head>
<body class="d-flex flex-column h-100">
    <header class="container-fluid d-flex flex-column flex-justify-start m-0 p-0">
        <div class="w-100 bg-success text-white text-center">
            <h1>Ma bibliothèque</h1>
        </div>
        <div class="w-100 m-0 p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
             </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link ml-5 text-success" href="./index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ml-5 text-success" href="./add_book_form.php">Ajouter un livre</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main class="container-fluid">
<?php
require 'views/header.php';
?>
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header">
                    <h1>Bienvenue !</h1>
                </div>
                <div class="card-body">
                    <p class="card-text">Bienvenue sur la page d'accueil d'une structure MVC</p>
                    <p class="card-text">Pour voir la liste des articles, veuillez cliquer sur <a href="/ArticleController/index">ce lien.</a></p>
                    <p class="card-text">Pour ajouter un article, veuillez cliquer sur <a href="/ArticleController/create">ce lien.</a></p>
                    <p>Vous pouvez modifier/supprimer/ajouter un article depuis la page des articles.</p>
                </div>
            </div>
        </div>
    </div>
<?php
require 'views/footer.php';
?>
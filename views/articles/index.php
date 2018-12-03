<?php
require 'views/header.php';
?>
<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/ArticleController/index">Articles</a></li>
            </ol>
        </nav>
        <a class="btn btn-info" href="/ArticleController/create">Ajouter un article</a>
        <hr>
    </div>
</div>
<?php

foreach ($articles->articles as $article){
    ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <?php
                        echo '<h2> ' . $article->title. '</h2>';
                    ?>
                </div>
                <div class="card-body">
                    <p class="card-text"><?php echo  $article->content; ?></p>
                    <a href="/ArticleController/show/<?php echo  $article->id; ?>" class="btn btn-info">Voir</a>
                    <a href="/ArticleController/edit/<?php echo  $article->id; ?>" class="btn btn-info">Modifier</a>
                    <a href="/ArticleController/delete/<?php echo  $article->id; ?>" class="btn btn-info">Supprimer</a>
                </div>
            </div>


        </div>
    </div>
    <?php
}
?>

<?php
    require 'views/footer.php';
?>
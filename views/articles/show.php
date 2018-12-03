<?php
require 'views/header.php';
?>
<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/ArticleController/index">Article</a></li>
                <li class="breadcrumb-item"><a href="/ArticleController/show/<?php echo $article->id ?>"> <?php echo $article->title ?></a></li>
            </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card text-center">
            <div class="card-header">
                <?php
                    echo '<h2> ' . $article->title. '</h2>';
                ?>

            </div>
            <div class="card-body">
                <p class="card-text"><?php echo  $article->content; ?></p>
            </div>
            <div class="card-footer text-muted text-right">
                <a href="/ArticleController/edit/<?php echo  $article->id; ?>" class="btn btn-info">Modifier</a>
            </div>
        </div>

    </div>
</div>
<?php
require 'views/footer.php';
?>
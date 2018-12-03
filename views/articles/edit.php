<?php
require 'views/header.php';
?>
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/ArticleController/index">Article</a></li>
                    <li class="breadcrumb-item"><a href="/ArticleController/edit/<?php echo $article->id ?>">Modifier l'article <?php echo $article->title ?></a></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="pull-right">Modifier l'article <?php  echo $article->title ?></h3>
                </div>
                <div class="card-body">
                    <form action="/ArticleController/update" method="post" id="params">
                        <input type="hidden" name="id" value="<?php  echo $article->id ?>">
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" value="<?php echo $article->title ?>">
                        </div>
                        <div class="form-group">
                            <textarea name="content" class="form-control"><?php echo $article->content ?></textarea>
                        </div>

                        <button type="submit" class="btn btn-info pull-right">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
require 'views/footer.php';
?>
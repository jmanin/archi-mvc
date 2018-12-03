<?php
require 'views/header.php';
?>
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/ArticleController/index">Article</a></li>
                    <li class="breadcrumb-item"><a href="/ArticleController/create">Nouveau article</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="pull-right">Ajouter un article</h3>
                </div>
                <div class="card-body">
                    <form action="/ArticleController/save" method="post" id="params">
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" placeholder="Titre">
                        </div>
                        <div class="form-group">
                            <textarea name="content" placeholder="Description" class="form-control"></textarea>
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
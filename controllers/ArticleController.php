<?php

namespace Controllers;

use Models\Article;

class ArticleController
{
    public function index()
    {
        $articles = Article::getAll();
        require_once('views/articles/index.php');
    }
    public function show($id)
    {
        $article = Article::show($id);
        require_once('views/articles/show.php');
    }
    public function create(){
        require_once('views/articles/create.php');
    }
    public function edit($id)
    {
        $article = Article::show($id);
        require_once('views/articles/edit.php');
    }
    public function save(){
        $params = [
            'title'=> $_POST['title'],
            'content'=> $_POST['content']
        ];
        $id = Article::save($params);
        $article = Article::show($id);
        require_once('views/articles/show.php');
    }
    public function update(){
        $params = [
            'id' => $_POST['id'],
            'title'=> $_POST['title'],
            'content'=> $_POST['content']
        ];
        $id = Article::update($params);
        $article = Article::show($id);
        require_once('views/articles/show.php');
    }
    public function delete($id){
        Article::delete($id);
        $articles = Article::getAll();
        require_once('views/articles/index.php');
    }
}
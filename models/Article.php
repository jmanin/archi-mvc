<?php
namespace Models;

class Article{


    public function getAll(){

        $articles = file_get_contents("all-article.json");
        $articles = json_decode($articles);
        return $articles;
    }
    public function show($id){
        $articles = file_get_contents("all-article.json");
        $articles = json_decode($articles);
        foreach ($articles->articles as $article){
            if ($article->id == $id){
                return $article;
            }else{
                $art = 0;
            }
        }
        if ($art == 0){
            return 'Article innexistant';
        }
    }
    public function save($params){
        $articles = file_get_contents("all-article.json");
        $articles = json_decode($articles);

        foreach ($articles->articles as $article){
            $lastId = $article->id;
        }
        $lastId = $lastId + 1;
        array_push( $articles->articles, array(
            'id'    => $lastId,
            'title' => $params['title'],
            'content' =>  $params['content']
        ));

        $contenu_json = json_encode($articles);
        $fichier = fopen('all-article.json', 'w+');
        fwrite($fichier, $contenu_json);
        fclose($fichier);

        return $lastId;
    }
    public function update($params){
        $articles = file_get_contents("all-article.json");
        $articles = json_decode($articles);

        foreach ($articles->articles as $article){
           if ($article->id == $params['id']){
                $article->title = $params['title'];
                $article->content =  $params['content'];
           }
        }


        $contenu_json = json_encode($articles);
        $fichier = fopen('all-article.json', 'w+');
        fwrite($fichier, $contenu_json);
        fclose($fichier);

        return $params['id'];
    }
    public function delete($id){
        $articles = file_get_contents("all-article.json");
        $articles = json_decode($articles);
        $array = $articles->articles;
        //var_dump();
        $i = 0;
        foreach ($articles->articles as $article){
            if ($article->id == $id){
                unset($articles->articles[$i]);
            }
            $i++;
        }
        $articles->articles = array_values($articles->articles);
        $contenu_json = json_encode($articles);
        $fichier = fopen('all-article.json', 'w+');
        fwrite($fichier, $contenu_json);
        fclose($fichier);
    }
}
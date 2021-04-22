<?php

class ArticlesController implements Controller
{

    private Connection $db;

    public function __construct()
    {
        $this->db = new Connection();
    }

    public function render($GET): void
    {
        $title = 'Articles';

        $pdo = new ArticleLoader();
        $articles = $pdo->getAllArticles($this->db);

        require 'Views/articles.php';
    }

}

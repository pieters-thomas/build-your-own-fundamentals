<?php


class DetailsController implements Controller
{

    private Connection $db;


    public function __construct()
    {
        $this->db = new Connection();
    }

    public function render ($GET):void {
        $title = 'Article: '. $_GET['article_slug'];

        $pdo = new ArticleLoader();
        $article = $pdo->getArticle($this->db, $_GET['article_slug']);

        require 'Views/details.php';
    }
}

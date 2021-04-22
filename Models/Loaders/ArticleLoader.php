<?php


class ArticleLoader
{
    public function getAllArticles(PDO $pdo): array
    {
        $query = $pdo->query('select * from Article ORDER BY id');
        $rawArticles = $query->fetchAll();
        $articles = [];
        foreach ($rawArticles as ['id' => $id, 'title' => $title, 'slug' => $slug, 'content' => $content]) {
            $articles[] = new Article($id, $title, $slug, $content);
        }

        return $articles;
    }

    public function getArticle(PDO $pdo, string $slug): Article
    {
            try{
                $query = $pdo->prepare('select * from Article WHERE slug = :slug');
                $query->bindValue('slug', $slug);
                $query->execute();
                $rawArticle = $query->fetch();

                is_bool($rawArticle)? throw new Exception('test'): 'test';
            }

            catch (Exception){
                header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found", true, 404);
                return new Article(0, '','','');
            }

            return new Article($rawArticle['id'], $rawArticle['title'], $rawArticle['slug'], $rawArticle['content']);

    }


}

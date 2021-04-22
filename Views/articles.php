<?php require 'templates/header.php' ?>
<?php /**@var $articles */?>

<div class="articles">
    <?php foreach ($articles as $article) : ?>
        <div>
            <a href="index.php?page=article-detail&article_slug=<?= $article->getSlug()?>" style="vertical-align:middle"><span>Tell me more </span></a>
            <h2><?= $article->getTitle() ?></h2>
        </div>
    <?php endforeach; ?>
</div>


<?php require 'templates/footer.php' ?>

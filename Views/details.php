<?php require 'templates/header.php'
/** @var $article*/
?>


<article>
    <h2><?= $article->getTitle() ?></h2>
    <p><?= $article->getContent() ?></p>
</article>
<a href="index.php?page=articles" style="vertical-align:middle" class="backBtn"><span>Back </span></a>

<?php require 'templates/header.php' ?>

<?php /**@var $products */
/**@var Product $product */
foreach ($products as $product) : ?>
    <div class="products">
        <h2><?= $product->getName() ?></h2>
        <p>Price (tax included): €<?= $product->getPriceTaxIncluded() ?></p>
    </div>
<?php endforeach; ?>

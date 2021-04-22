<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//requires
require 'config.php';
require 'Models/Connection/Connection.php';
require 'Controllers/Interface/Controller.php';

require 'Models/Article.php';
require 'Models/Product.php';
require 'Models/Loaders/ArticleLoader.php';
require 'Models/Loaders/ProductLoader.php';

require 'Controllers/ArticlesController.php';
require 'Controllers/DetailsController.php';
require 'Controllers/ProductsController.php';
require 'Controllers/HomeController.php';

$controller = new HomeController();

if (!empty($_GET['page'])) {
    $controller = match ($_GET['page']) {
        'articles' => new ArticlesController(),
        'products' => new ProductsController(),
        'article-detail' => new DetailsController(),
    };
}

$controller->render($_GET);

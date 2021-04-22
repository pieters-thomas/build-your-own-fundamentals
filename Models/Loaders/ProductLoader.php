<?php


class ProductLoader
{
    public function getAllProducts (PDO $pdo): array
    {
        $query = $pdo->query('select * from Product ORDER BY id');
        $rawProducts = $query->fetchAll();

        $products = [];
        foreach ($rawProducts as ['id' => $id, 'name' => $name, 'price' => $price, 'tax' => $tax])
        {
            $products[] = new Product( $id,$name, $price,$tax);
        }
        return $products;
    }

}

<?php


use JetBrains\PhpStorm\Pure;

class Product
{
    private int $id;
    private string $name;
    private float $price;
    private float $tax;

    /**
     * Product constructor.
     * @param int $id
     * @param string $name
     * @param float $price
     * @param float $tax
     */
    public function __construct(int $id, string $name, float $price, float $tax)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->tax = $tax;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    #[Pure] public function getPriceTaxIncluded ():float
    {
       return round($this->price * (1 + $this->tax), 2);
    }

    /**
     * @return float
     */
    public function getTax(): float
    {
        return $this->tax;
    }


}

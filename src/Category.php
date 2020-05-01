<?php


class Category
{
    private array $products = [];

    public function contains(Product $product): bool
    {
        return in_array($product, $this->products, true);
    }

    public function add_product(Product $product): void
    {
        $this->products[] = $product;
    }
}
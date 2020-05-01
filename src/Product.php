<?php

class Product
{
    private Category $category;

    public function setCategory(Category $category): void
    {
        $this->category = $category;
        $category->add_product($this);
    }

    public function getCategory(): Category
    {
        return $this->category;
    }

}
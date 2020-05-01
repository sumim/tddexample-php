<?php

class Product
{
    public function setCategory(?Category $category): void
    {

    }

    public function getCategory(): Category
    {
        return new Category();
    }

}
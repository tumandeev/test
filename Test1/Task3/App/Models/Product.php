<?php

namespace App\Models;

class Product implements ModelInterface
{

    public function list()
    {
        return !empty($_SESSION['products']) ? $_SESSION['products'] : [];
    }

    public function create($fields)
    {
        $productId = md5(time());
        $_SESSION['products'][$productId] = $fields;
    }

    public function delete($id)
    {
        if(!empty($_SESSION['products']) && !empty($_SESSION['products'][$id])){
            unset($_SESSION['products'][$id]);
        }
    }
}
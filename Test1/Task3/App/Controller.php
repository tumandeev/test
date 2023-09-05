<?php

namespace App;

use App\Models\Product;

class Controller
{
    public function index()
    {

        $products = (new Product())->list();
        
        return view('products.list', [
            'products' => $products,
        ]);
    }
    
    public function storeProduct($request)
    {

        (new Product())->create($request);

        header("Location: /");
    }
    
    public function createProduct($request)
    {
        return view('products.create');
    }
    
    public function deleteProduct($request)
    {
        if(!empty($request['id'])){
            (new Product())->delete($request['id']);
        }

        header("Location: /");
    }
}
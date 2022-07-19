<?php

namespace App\Repository;

use App\Models\Product;

class ProductRepository implements IProductRepository{

    public function getAllProducts()
    {
        return Product::all();
    }

    public function createProduct(array $data)
    {
        Product::insert([
            'image'=>$data['image'],
            'title'=>$data['title'],
            'price'=>$data['price'],
            'description'=>$data['description']
        ]);
    }

    public function getSingleProduct($id)
    {
        return Product::find($id);
    }

    public function editProduct($id)
    {
        return Product::find($id);

    }

    public function updateProduct($id,array $data)
    {
        Product::find($id)->update([
            'image'=>$data['image'],
            'title'=>$data['title'],
            'price'=>$data['price'],
            'description'=>$data['description']
        ]);
    }
}






?>
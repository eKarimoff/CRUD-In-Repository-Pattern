<?php

namespace App\Http\Controllers;

use App\Repository\IProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $product;

    public function __construct(IProductRepository $product)
    {
        $this->product = $product;
    }
    public function index()
    {
       $products = $this->product->getAllProducts();

       return view('product.index')->with('products', $products);
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image'=>'required',
            'title'=>'required',
            'price'=>'required'
        ]);

        $data = $request->all();

        if($image = $request->file('image'))
        {
            $name = time().'.'.$image->getClientOriginalName();
            $image->move(public_path('image'), $name);

            $data['image'] = "$name";
        }

        $this->product->createProduct($data);

        return redirect('/products');
    }


    public function show($id)
    {
       $product = $this->product->getSingleProduct($id);
       
       return view('product.show')->with('product', $product);
    
    }

    public function edit($id)
    {
        $product = $this->product->editProduct($id);
        return view('product.edit')->with('product', $product);
    }

    public function update($id,Request $request)
    {
        $request->validate([
            'image'=>'required',
            'title'=>'required',
            'price'=>'required'
        ]);
        $data = $request->all();

        if($image = $request->file('image'))
        {
            $name = time().'.'.$image->getClientOriginalName();
            $image->move(public_path('image'), $name);

            $data['image'] = "$name";
        }

        $product = $this->product->updateProduct($id,$data);
        return redirect('/products');
    }
}

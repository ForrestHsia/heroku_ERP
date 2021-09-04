<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    function index(){
        $products = $this -> getProducts();
        return view('product.index',[
            'products' => $products,
        ]);
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request)
    {
        return redirect() -> route('products.index');
    }
    
    
    function show($id, Request $request){
        $products = $this->getProducts();
        $index = $id -1 ;
        if ($index < 0 || $index >= count($products)){
            abort(404);
        }
        $product = $products[$index];
        return view('product.show',['product' => $product]);
    }

    public function edit($id){
        $products = $this -> getProducts();
        $index = $id -1 ;
        if ($index < 0 || $index >= count($products)){
            abort(404);
        }
        $product = $products[$index];
        return view('product.edit',['product' => $product]);
    }

    public function update(Request $request, $id){
        $products = $this -> getProducts();
        $index = $id -1 ;
        if ($index < 0 || $index >= count($products)){
            abort(404);
        }
        $product = $products[$index];
        return redirect()->route('products.edit', ["product" => $product["id"]]);
    }

    public function destroy($id, Request $request)
    {
        return redirect()->route('products.index');
    }

    private function getProducts(){
        return[
            ['id' => 1, 'image_url' => asset("images/wd01.png")],
            ['id' => 2, 'image_url' => asset("images/lamigo01.jpg")],
            ['id' => 3, 'image_url' => asset("images/lanew01.jpg")]
        ];
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainProductController extends Controller
{

    public function ShowProduct($categorySlug)
    {
        $category = Category::where('slug', $categorySlug)->firstOrFail();
        $products = Product::where('cate_id', $category->id)->paginate(6);

        return view('product.list_product', compact('category', 'products'),[
            'title'=>'Sản phẩm '. $category->title
        ]);
    }

    public function ProductDetail($slug){
        $product = Product::where('slug', $slug)->first();
        $title = $product->Title;
        return view('product.details',compact('product'),[
            'title' => $title
        ]);
    }

    public function cart(){

    }
}

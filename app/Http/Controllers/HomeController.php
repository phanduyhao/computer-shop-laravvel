<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $product_hots = Product::where('active', 1)
            ->where('ishot', 1)
            ->whereNotNull('cate_id')
            ->take(6)
            ->get();
        $product_news = Product::where('active',1)->where('isnewfeed',1)->whereNotNull('cate_id')->take(6)->get();
        $post_hots = Post::where('active',1)->where('isnewfeed',1)->take(6)->get();
        return view('home',compact('post_hots','product_hots','product_news'),[
            'title' => 'Trang chủ'
        ]);
    }
}

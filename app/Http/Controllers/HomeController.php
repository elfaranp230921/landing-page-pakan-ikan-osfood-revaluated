<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Promo;
use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function view(){
        $products = Product::get();
        $promos = Promo::get();
        $articles = Article::get();

        $data = [
            'products' => $products,
            'promos' => $promos,
            'articles' => $articles
        ];
        return view('home', $data);
    }

    public function articleView($id){
        $article = Article::find($id);

        $data = [
            'article' => $article
        ];
        return view('article', $data);
    }
}

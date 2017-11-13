<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\STShop\Article\ArticleTable;

class ArticleController extends Controller
{
    public function detail($name = null, $id)
    {
        $articleTable = new ArticleTable();
        $article = $articleTable->findById($id);
        $productCare = $articleTable->findRandom();
        return view('home.article-detail', ['article' => $article, 'productCare' => $productCare]);
    }

    public function listArticle()
    {
        $articleTable = new ArticleTable();
        $article = $articleTable->fetchAll();
        return view('home.list-article', ['article' => $article]);
    }
}
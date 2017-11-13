<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleFormRequest;
use App\STShop\Article\ArticleTable;

class ArticleController extends Controller
{
    public function __construct(ArticleTable $articleTable)
    {
        $this->articleTable = $articleTable;
    }

    public function createArticleForm()
    {
        return view('admin.article-create');
    }

    public function createArticle(ArticleFormRequest $request)
    {
        $rawData = $request->input();
        $rawData['linkUrl'] = str_replace(' ', '-', $rawData['linkUrl']);

        if(isset($rawData['type'])){
            $rawData['type'] = 1;
        }

        $this->articleTable->insert($rawData);
        return redirect()->route('article');
    }

    public function listArticle()
    {
        $articles = $this->articleTable->fetchAll();
        return view('admin.article', ['articles' => $articles]);
    }

    public function updateArticleForm($id)
    {
        $article = $this->articleTable->findById($id);
        return view('admin.article-edit', ['product' => $article]);
    }

    public function updateArticle(ArticleFormRequest $request, $id)
    {
        $rawData = request()->input();
        if(! isset($rawData['type'])){
            $rawData['type'] = null;
        }

        $this->articleTable->update($rawData, $id);
        return redirect()->route('article');
    }

    public function delArticle($id)
    {
        $this->articleTable->delete($id);
        return redirect()->route('article');
    }

}
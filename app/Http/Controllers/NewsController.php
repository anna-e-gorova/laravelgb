<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(int $categoryId = null)
    {
        $modelNews = app(News::class);
        $modelCategory = app(Category::class);
        $newsList = $modelNews->getNews();
        //$newsList = $this->getNews();
        $categories = $modelCategory->getCategories();

        if ($categoryId) {
            $newsList = $modelNews->getNewsByCategory($categoryId);
            //dd($newsList);
        }
        //dd($newsList);
        return view('news.index', [
            'newsList' => $newsList,
            'categories' => $categories
        ]);
    }

    public function show(int $id)
    {
        $modelNews = app(News::class);
        if($id > 50) {
            abort(404);
        }

        $news = $modelNews->getOneNews($id);
        return view('news.show', [
            'news' => $news
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use App\Queries\QueryBuilderNews;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(QueryBuilderNews $news, int $categoryId = NULL)
    {
        $categories = Category::all();

        if ($categoryId) {
            $newsList = $news->getNewsByCategory($categoryId);
        } else {
            $newsList = $news->getNews();
        }

        return view('news.index', [
            'newsList' => $newsList,
            'categories' => $categories
        ]);
    }

    public function show(QueryBuilderNews $news, int $id)
    {
        $oneNews = $news->getNewsById($id);
        return view('news.show', [
            'news' => $oneNews
        ]);
    }
}

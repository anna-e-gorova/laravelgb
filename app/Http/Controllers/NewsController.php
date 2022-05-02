<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = $this->getNews();
        $categories = $this->getCategory();
        return view('news.index', [
            'newsList' => $news,
            'categories' => $categories
        ]);
    }

    public function show(int $id)
    {
        $news = $this->getNews($id);
        return view('news.show', [
            'news' => $news
        ]);
    }
}

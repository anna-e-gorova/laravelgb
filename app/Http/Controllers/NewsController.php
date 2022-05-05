<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(int $categoryId = null)
    {
        $newsList = $this->getNews();
        $categories = $this->getCategory();

        if ($categoryId) {
            foreach ($newsList as $key => $value ) {
                if ($value['categoryId'] != $categoryId) {
                    unset($newsList[$key]);
                }
            }
        }

        return view('news.index', [
            'newsList' => $newsList,
            'categories' => $categories
        ]);
    }

    public function show(int $id)
    {
        if($id > 30) {
            abort(404);
        }

        $news = $this->getNews($id);
        return view('news.show', [
            'news' => $news
        ]);
    }
}

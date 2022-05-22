<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $model = app(Category::class);
        $categories = $model->getCategories();
        return view('news.categories', [
            'categories' => $categories
        ]);
    }
}

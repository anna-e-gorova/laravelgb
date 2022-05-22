<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = "news";

    public function getNews()
    {
        return DB::table($this->table)
            ->select(['id', 'title', 'description', 'author', 'image', 'created_at' ])
            ->get();
    }

    public function getOneNews(int $id)
    {
        return DB::table($this->table)
            ->select(['id', 'title', 'description', 'author', 'image', 'created_at'])
            ->find($id);
    }

    public function getNewsByCategory(int $categoryId)
    {
        return DB::table($this->table)
            ->select(['id', 'title', 'description', 'author', 'image', 'created_at'])
            ->where('category_id', $categoryId)
            ->get();
    }
}

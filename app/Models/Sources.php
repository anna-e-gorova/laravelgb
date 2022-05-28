<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sources extends Model
{
    use HasFactory;

    protected $table = "sources";

    protected $fillable = [
        'name', 'url'
    ];

    public function news(): HasMany
    {
        return $this->hasMany(News::class,
            'source_id', 'id');
    }
}

<?php

declare(strict_types=1);

namespace App\Queries;

use App\Models\News;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class QueryBuilderNews implements QueryBuilder
{

	public function getBuilder(): Builder
	{
		return News::query();
	}

	public function getNews(): LengthAwarePaginator
	{
		return News::with('category')->paginate(10);
	}

    public function getNewsById(int $id)
    {
        return News::select()
            ->findOrFail($id);
    }

    public function getNewsByCategory(int $id): LengthAwarePaginator
    {
        return News::select()
            ->where('category_id', $id)
            ->paginate(10);
    }


}

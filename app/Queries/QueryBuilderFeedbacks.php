<?php

declare(strict_types=1);

namespace App\Queries;

use App\Models\Feedbacks;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class QueryBuilderFeedbacks implements QueryBuilder
{

	public function getBuilder(): Builder
	{
		return Feedbacks::query();
	}

    public function getFeedbacks(): LengthAwarePaginator
    {
        return Feedbacks::select(['id', 'name', 'description', 'created_at'])
            ->paginate(10);
    }

}

<?php

declare(strict_types=1);

namespace App\Queries;

use App\Models\Orders;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class QueryBuilderOrders implements QueryBuilder
{

	public function getBuilder(): Builder
	{
		return Orders::query();
	}

    public function getOrders(): LengthAwarePaginator
    {
        return Orders::select(['id', 'name', 'phone', 'email', 'data', 'created_at'])
            ->paginate(10);
    }

}

<?php

namespace App;

use App\Contracts\WidgetRepositoryInterface;
use App\Models\Widget;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class WidgetRepository implements WidgetRepositoryInterface
{
    public function getAll(): Collection
    {
        return Widget::all();
    }

    public function paginate(int $numberPerPage): LengthAwarePaginator
    {
        return Widget::paginate($numberPerPage);
//        return Widget::simplePaginate(5);
//        return Widget::cursorPaginate(5);
    }
}

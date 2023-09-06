<?php

namespace App;

use App\Contracts\WidgetRepositoryInterface;
use App\Models\Widget;
use Illuminate\Database\Eloquent\Collection;

class WidgetRepository implements WidgetRepositoryInterface
{
    public function getAll(): Collection
    {
//        return Widget::paginate(5);
//        return Widget::simplePaginate(5);
//        return Widget::cursorPaginate(5);
        return Widget::all();
    }
}

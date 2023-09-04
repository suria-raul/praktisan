<?php

namespace App;

use App\Models\Widget;

class WidgetRepository
{
    public function getAllWidget()
    {
//        return Widget::paginate(5);
//        return Widget::simplePaginate(5);
        return Widget::cursorPaginate(5);
    }
}

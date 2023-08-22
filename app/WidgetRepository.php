<?php

namespace App;

use App\Models\Widget;

class WidgetRepository
{
    public function getAllWidget()
    {
        return Widget::all();
    }
}

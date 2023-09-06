<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface WidgetRepositoryInterface
{

    public function getAll(): Collection;
}

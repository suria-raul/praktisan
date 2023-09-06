<?php

namespace App\Http\Controllers;

use App\Contracts\WidgetRepositoryInterface;
use App\Http\Requests\StoreWidgetRequest;
use App\Models\Widget;
use Illuminate\Http\Request;
use App\WidgetRepository;
use App\Http\Resources\WidgetCollection;

class WidgetController extends Controller
{
    protected WidgetRepositoryInterface $widgetRepositoryInterface;

    public function __construct(WidgetRepositoryInterface $widgetRepositoryInterface)
    {
        $this->widgetRepositoryInterface = $widgetRepositoryInterface;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new WidgetCollection($this->widgetRepositoryInterface->getAll());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWidgetRequest $storeWidgetRequest)
    {
        return Widget::create($storeWidgetRequest->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

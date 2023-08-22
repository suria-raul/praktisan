<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WidgetRepository;
use App\Http\Resources\WidgetCollection;

class WidgetController extends Controller
{
    protected WidgetRepository $widgetRepository;

    public function __construct(WidgetRepository $widgetRepository)
    {
        $this->widgetRepository = $widgetRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new WidgetCollection($this->widgetRepository->getAllWidget());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

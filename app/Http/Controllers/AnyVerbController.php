<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnyVerbController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $param = null)
    {
        return [
            'key' => 'value',
            'request' => $request,
            'user' => $request->user(),
            'param' => $param
        ];
    }
}

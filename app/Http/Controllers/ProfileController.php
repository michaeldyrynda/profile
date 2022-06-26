<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __invoke(Request $request)
    {
        return [
            'app' => config('app.name'),
            'php' => phpversion(),
            'laravel' => app()->version(),
            'memory' => memory_get_peak_usage(),
        ];
    }
}

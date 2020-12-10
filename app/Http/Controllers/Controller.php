<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function title($title, $crumbs = true)
    {
        view()->share('title', sprintf('%s | %s', $title, config('app.name', 'Weather App')));

        view()->share('pageTitle', $title);

    }
}

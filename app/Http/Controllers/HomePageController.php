<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class HomePageController extends BaseController
{
    public function home()
    {
        return view('home');
    }
}

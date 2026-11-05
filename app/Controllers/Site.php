<?php

namespace App\Controllers;

class Site extends BaseController
{
    public function sobre(): string
    {
        return view('site/sobre');
    }
}

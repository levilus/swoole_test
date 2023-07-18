<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Liquid\Template;

class UserController extends Controller
{
    //
    public function show()
    {
        $template = new Template();
        return $template->parse("Hello, {{ name }}!")->render([
            'name' => 'John Doe'
        ]);
    }
}

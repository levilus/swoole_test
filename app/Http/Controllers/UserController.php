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
        echo $template->parse("Hello, {{ name }}!")->render([
            'name' => 'John Doe'
        ]);
    }
}

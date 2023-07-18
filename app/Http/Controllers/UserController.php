<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Browser;
use Illuminate\Http\Request;
use Liquid\Template;

class UserController extends Controller
{
    //
    public function show(Request $request)
    {
        $template = new Template();
        return $template->parse("Hello, {{ name }}! count is {{ count }}")->render([
            'name' => 'John Doe',
            'count' => $request->get("a", 0),
        ]);
    }
}
